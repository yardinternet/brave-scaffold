<?php

declare(strict_types=1);

namespace App\Data;

use Illuminate\Support\Collection;
use Yard\Events\Data\EventData as YardEventData;

class EventData extends YardEventData
{
	public function related(): Collection
	{
		$taxQuery = [
			[
				'taxonomy' => 'event_category',
				'field' => 'slug',
				'terms' => $this->categories->pluck('slug')->toArray(),
			],
		];

		$events = $this->events($taxQuery);

		if ($events->isEmpty()) {
			$events = $this->events();
		}

		return EventData::collect($events);
	}

	public function events(array $taxQuery = []): Collection
	{
		$query = new \WP_Query([
			'post_type' => 'yard-event',
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'orderby' => 'meta_value',
			'order' => 'ASC',
			'meta_key' => 'event_start_date',
			'post__not_in' => [$this->id],
			'post_parent__not_in' => [$this->parent()->id],
			'tax_query' => $taxQuery,
		]);

		return collect($query->posts);
	}
}
