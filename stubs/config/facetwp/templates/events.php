<?php

declare(strict_types=1);

return [
	'name' => 'events',
	'label' => 'Evenementen',
	'query' => '',
	'template' => "<?php echo view('blocks.FacetWP.loops.events-loop'); ?>",
	'layout' => [],
	'query_obj' => [
		'post_type' => [
			[
				'label' => 'Event',
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
		],
	],
	'modes' => [
		'display' => 'advanced',
		'query' => 'visual',
	],
];
