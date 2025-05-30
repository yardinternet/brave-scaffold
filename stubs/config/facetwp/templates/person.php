<?php

declare(strict_types=1);

return [
	'name' => 'person',
	'label' => 'Personen',
	'query' => '',
	'template' => "<?php echo view('blocks.FacetWP.loops.person-loop'); ?>",
	'layout' => [],
	'query_obj' => [
		'post_type' => [
			[
				'label' => 'Personen',
				'value' => 'person',
			],
		],
		'posts_per_page' => 9,
		'orderby' => [
		],
		'filters' => [
		],
	],
	'modes' => [
		'display' => 'advanced',
		'query' => 'visual',
	],
];
