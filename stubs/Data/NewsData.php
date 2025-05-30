<?php

declare(strict_types=1);

namespace App\Data;

use Illuminate\Support\Collection;
use Yard\Data\Attributes\TaxonomyPrefix;
use Yard\Data\Attributes\Terms;
use Yard\Data\PostData;
use Yard\Data\TermData;
use Yard\Database\Traits\Related;

#[TaxonomyPrefix(prefix: 'news')]
class NewsData extends PostData
{
	use Related;

	#[Terms]
	/** @var Collection<int, TermData> */
	public Collection $types;

	public function related(): Collection
	{
		$news = $this->relatedPostsByTaxonomy($this->postType, 'news_type', $this->types, 3, 'DESC');

		if ($news->isEmpty()) {
			$news = $this->nextPosts($this->postType);
		}

		return NewsData::collect($news);
	}
}
