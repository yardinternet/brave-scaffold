<?php

declare(strict_types=1);

namespace App\Data;

use Illuminate\Support\Collection;
use Yard\Data\Attributes\Meta;
use Yard\Data\Attributes\MetaPrefix;
use Yard\Data\Attributes\TaxonomyPrefix;
use Yard\Data\Attributes\Terms;
use Yard\Data\PostData;
use Yard\Database\Traits\Related;

#[MetaPrefix(prefix: 'project')]
#[TaxonomyPrefix(prefix: 'project')]
class ProjectData extends PostData
{
	use Related;

	#[Meta]
	public array $related = [];
	#[Meta]
	public bool $isInformationPost = false;

	#[Terms]
	/** @var Collection<int, TermData> */
	public Collection $types;
	#[Terms]
	/** @var Collection<int, TermData> */
	public Collection $regions;
	#[Terms]
	/** @var Collection<int, TermData> */
	public Collection $statuses;

	public function related(): Collection
	{
		return ProjectData::collect($this->related, Collection::class);
	}

	public function cardSubtitle(): string
	{
		if (! $this->isChild()) {
			return '';
		}

		$parent = $this->parent();

		if (! $parent) {
			return '';
		}

		return sprintf(
			__('Deelproject van: <a class="z-1 relative inline-block hover:text-black" href="%s">%s</a>', 'sage'),
			$parent->url(),
			$parent->title()
		);
	}
}
