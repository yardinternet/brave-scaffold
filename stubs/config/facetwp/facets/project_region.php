<?php

declare(strict_types=1);

return [
	'name' => 'project_region',
	'label' => 'Regio',
	'type' => 'checkboxes',
	'source' => 'tax/project_region',
	'parent_term' => '',
	'modifier_type' => 'off',
	'modifier_values' => '',
	'hierarchical' => 'yes',
	'show_expanded' => 'no',
	'ghosts' => 'yes',
	'preserve_ghosts' => 'yes',
	'operator' => 'and',
	'orderby' => 'display_value',
	'count' => '-1',
	'soft_limit' => '5',
];
