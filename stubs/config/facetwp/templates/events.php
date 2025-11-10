<?php

declare(strict_types=1);

return [
	'name' => 'events',
	'label' => __('Evenementen', 'sage'),
	'query' => '',
	'template' => "<?php echo view('blocks.FacetWP.loops.events-loop'); ?>",
	'layout' => [],
	'query_obj' => [
		'post_type' => [
			[
				'label' => __('Event', 'sage'),
				'value' => 'yard-event',
			],
		],
		'posts_per_page' => 8,
		'orderby' => [
			[
				'key' => 'cf/event_start_date',
				'order' => 'ASC',
				'type' => 'CHAR',
			],
		],
		'filters' => [
			[
				'source' => 'meta',
				'key' => 'cf/event_start_date',
				'type' => 'DATE',
				'compare' => '>=',
				'value' => date('Y-m-d'),
			],
		],
	],
	'modes' => [
		'display' => 'advanced',
		'query' => 'visual',
	],
];
