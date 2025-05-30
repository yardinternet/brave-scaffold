<?php

declare(strict_types=1);

return [
	'name' => 'kennisbank_type',
	'label' => 'Type',
	'type' => 'checkboxes',
	'source' => 'tax/knowledgebase_type',
	'parent_term' => '',
	'hierarchical' => 'no',
	'show_expanded' => 'no',
	'ghosts' => 'yes',
	'preserve_ghosts' => 'no',
	'operator' => 'and',
	'orderby' => 'count',
	'count' => '-1',
	'soft_limit' => '5',
];
