<?php

declare(strict_types=1);

return [
	'name' => 'news',
	'label' => __('Nieuws', 'sage'),
	'query' => '',
	'template' => "<?php echo view('blocks.FacetWP.loops.news-loop'); ?>",
	'layout' => [],
	'query_obj' => [
		'post_type' => [
			[
				'label' => __('Nieuwsberichten', 'sage'),
				'value' => 'news',
			],
		],
		'posts_per_page' => 7,
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
