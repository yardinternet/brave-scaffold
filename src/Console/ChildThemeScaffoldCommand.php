<?php

declare(strict_types=1);

namespace Yard\Brave\Scaffold\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Webmozart\Assert\Assert;

class ChildThemeScaffoldCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'scaffold:sage-child {slug}
';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Scaffold a child theme for Sage';

	/**
	 * Execute the console command.
	 */
	public function handle(): int
	{
		$slug = $this->argument('slug');

		Assert::string($slug);

		$source = dirname(__DIR__, 2) . '/stubs/sage-child';
		$destination = dirname(base_path()) . '/' . $slug;

		if (! File::exists($source)) {
			$this->error("Source directory does not exist: $source");

			return self::FAILURE;
		}

		if (File::exists($destination)) {
			$this->error("Destination already exists: $destination");

			return self::FAILURE;
		}

		$success = File::copyDirectory($source, $destination);

		if (! $success) {
			$this->error("Failed to copy files from $source to $destination");

			return self::FAILURE;
		}

		$this->info("Created child theme for Sage with slug: $slug");

		return self::SUCCESS;
	}
}
