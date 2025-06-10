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

	public function isParent(): bool
	{
		if ($this->isInformationPost) {
			return false;
		}

		$children = get_children([
			'post_parent' => $this->id,
			'post_type' => $this->postType,
		]);

		return ! empty($children) && ! has_post_parent($this->id);
	}

	public function isChild(): bool
	{
		$ancestors = get_post_ancestors($this->id);

		// Filter out the children of the children.
		return empty($ancestors) ? has_post_parent($this->id) : count(get_post_ancestors(end($ancestors))) === 0;
	}

	public function parent(): ?ProjectData
	{
		$post = get_post_parent($this->id);

		return $post ? ProjectData::fromPost($post) : null;
	}

	public function children(): Collection
	{
		$children = get_children([
			'post_parent' => $this->id,
			'post_type' => $this->postType,
			'orderby' => 'menu_order',
			'order' => 'ASC',
		]);

		if (empty($children)) {
			return collect();
		}

		return collect(ProjectData::collect($children));
	}

	public function related(): Collection
	{
		return collect(ProjectData::collect($this->related));
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
