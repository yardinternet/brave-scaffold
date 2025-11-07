<?php

declare(strict_types=1);

return [
	'name' => 'persoon_result_count',
	'label' => __('Resultaten personen', 'sage'),
	'type' => 'pager',
	'pager_type' => 'counts',
	/* translators: [total] is replaced with result count */
	'count_text_plural' => __('Er zijn <span>[total]</span> personen gevonden.', 'sage'),
	'count_text_singular' => __('Er is <span>1</span> persoon gevonden.', 'sage'),
	'count_text_none' => __('Er zijn geen personen gevonden.', 'sage'),
];
