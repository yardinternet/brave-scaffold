<?php

declare(strict_types=1);

return [
	'name' => 'knowledgebase',
	'label' => 'Kennisbank',
	'query' => '',
	'template' => "<?php echo view('blocks.FacetWP.loops.knowledgebase-loop'); ?>",
	'layout' => [],
	'query_obj' => [
		'post_type' => [
			[
				'label' => 'Kennisbank artikelen',
				'value' => 'knowledgebase',
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
