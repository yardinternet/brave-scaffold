<?php

declare(strict_types=1);

return [
	'name' => 'nieuws_result_count',
	'label' => __('Resultaten nieuws', 'sage'),
	'type' => 'pager',
	'pager_type' => 'counts',
	/* translators: [total] is replaced with result count */
	'count_text_plural' => __('Er zijn <span>[total]</span> nieuwsberichten gevonden.', 'sage'),
	'count_text_singular' => __('Er is <span>1</span> nieuwsbericht gevonden.', 'sage'),
	'count_text_none' => __('Er zijn geen nieuwsberichten gevonden.', 'sage'),
];
