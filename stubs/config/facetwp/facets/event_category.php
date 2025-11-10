<?php

declare(strict_types=1);

return [
	'name' => 'event_categorie',
	'label' => __('Categorie', 'sage'),
	'type' => 'checkboxes',
	'source' => 'tax/event_category',
	'parent_term' => '',
	'modifier_type' => 'off',
	'modifer_values' => '',
	'hierarchical' => 'yes',
	'show_expanded' => 'no',
	'preserve_ghosts' => 'yes',
	'operator' => 'and',
	'orderby' => 'raw_value',
	'count' => '-1',
	'soft_limit' => '5',
];
