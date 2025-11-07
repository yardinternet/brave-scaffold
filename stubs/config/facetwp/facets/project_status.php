<?php

declare(strict_types=1);

return [
	'name' => 'project_status',
	'label' => __('Status', 'sage'),
	'type' => 'checkboxes',
	'source' => 'tax/project_status',
	'parent_term' => '',
	'modifier_type' => 'off',
	'modifier_values' => '',
	'hierarchical' => 'yes',
	'show_expanded' => 'no',
	'ghosts' => 'yes',
	'preserve_ghosts' => 'yes',
	'operator' => 'and',
	'orderby' => 'raw_value',
	'count' => '-1',
	'soft_limit' => '5',
];
