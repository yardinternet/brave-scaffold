<?php

declare(strict_types=1);

return [
	'name' => 'project',
	'label' => 'Projecten',
	'query' => "<?php
				return [
				'post_type' => [
					'project'
				],
				'post_status' => [
					'publish'
				],
				'meta_query' => [
					'relation' => 'OR',
					[
					'key' => 'project_hide',
					'compare' => 'NOT EXISTS'
					],
					[
					'key' => 'project_hide',
					'value' => '1',
					'compare' => '!='
					]
				],
				'posts_per_page' => 7
				];",
	'template' => "<?php echo view('blocks.FacetWP.loops.project-loop'); ?>",
	'layout' => [
	],
	'query_obj' => [
	],
	'modes' => [
		'display' => 'advanced',
		'query' => 'advanced',
	],
];
