<?php

declare(strict_types=1);

namespace App\Hooks;

use Illuminate\Support\Facades\Vite;
use Yard\Brave\Hooks\Plugin;
use Yard\Hook\Action;
use Yard\Hook\Filter;

#[Plugin('yard-elasticsearch/yard-elasticsearch.php')]
class Elasticsearch extends \Yard\Brave\Hooks\Elasticsearch
{
	#[Action('wp_head')]
	public function enqueueAssets(): void
	{
		wp_enqueue_script('wp-element');

		Vite::useHotFile(get_parent_theme_file_path('public/hot'));

		try {
			echo Vite::withEntryPoints([
				'web/app/themes/' . get_stylesheet() . '/resources/scripts/reactive-search/reactive-search.jsx',
			])->toHtml();
		} catch (\Exception $e) {
			// Fail silently if entrypoint is not found.
		}
	}

	#[Filter('template_include')]
	public function overrideSearchTemplate(string $template): string
	{
		if (! is_search() || is_admin()) {
			return $template;
		}

		$override = get_theme_file_path('resources/views/reactive-search-page.blade.php');

		if (file_exists($override)) {
			return $override;
		}

		return $template;
	}
}
