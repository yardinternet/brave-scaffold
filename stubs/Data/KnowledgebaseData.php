<?php

declare(strict_types=1);

namespace App\Data;

use Illuminate\Support\Collection;
use Yard\Data\Attributes\Meta;
use Yard\Data\Attributes\MetaPrefix;
use Yard\Data\Attributes\TaxonomyPrefix;
use Yard\Data\Attributes\Terms;
use Yard\Data\PostData;
use Yard\Data\TermData;
use Yard\Database\Traits\Related;

#[MetaPrefix(prefix: 'knowledgebase')]
#[TaxonomyPrefix(prefix: 'knowledgebase')]
class KnowledgebaseData extends PostData
{
	use Related;

	#[Meta]
	public array $related = [];

	#[Terms]
	/** @var Collection<int, TermData> */
	public Collection $types;

	public function related(): Collection
	{
		$articles = collect($this->related);

		if ($articles->isEmpty()) {
			$articles = $this->relatedPostsByTaxonomy($this->postType, 'knowledgebase_type', $this->types);
		}

		if ($articles->isEmpty()) {
			$articles = $this->randomPosts($this->postType);
		}

		return KnowledgebaseData::collect($articles);
	}
}
