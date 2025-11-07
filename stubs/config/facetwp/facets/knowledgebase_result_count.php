<?php

declare(strict_types=1);

return [
	'name' => 'kennisbank_result_count',
	'label' => __('Resultaten kennisbank', 'sage'),
	'type' => 'pager',
	'pager_type' => 'counts',
	/* translators: [total] is replaced with result count */
	'count_text_plural' => __('Er zijn <span>[total]</span> artikelen gevonden.', 'sage'),
	'count_text_singular' => __('Er is <span>1</span> artikel gevonden.', 'sage'),
	'count_text_none' => __('Er zijn geen artikelen gevonden.', 'sage'),

];
