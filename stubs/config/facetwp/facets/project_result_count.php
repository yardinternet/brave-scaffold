<?php

declare(strict_types=1);

return [
	'name' => 'project_result_count',
	'label' => __('Resultaten project', 'sage'),
	'type' => 'pager',
	'pager_type' => 'counts',
	/* translators: [total] is replaced with result count */
	'count_text_plural' => __('Er zijn <span>[total]</span> projecten gevonden.', 'sage'),
	'count_text_singular' => __('Er is <span>1</span> project gevonden.', 'sage'),
	'count_text_none' => __('Er zijn geen projecten gevonden.', 'sage'),
];
