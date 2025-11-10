<?php

declare(strict_types=1);

return [
	'name' => 'event_result_count',
	'label' => 'Resultaten evenementen',
	'type' => 'pager',
	'pager_type' => 'counts',
	/* translators: [total] is replaced with result count */
	'count_text_plural' => __('Er zijn <span>[total]</span> evenementen gevonden.', 'sage'),
	'count_text_singular' => __('Er is <span>1</span> evenement gevonden.', 'sage'),
	'count_text_none' => __('Er zijn geen evenementen gevonden.', 'sage'),
];
