<?php

declare(strict_types=1);

return [
	'name' => 'event_datum',
	'label' => __('Wanneer?', 'sage'),
	'type' => 'event_date_range',
	'source' => 'cf/event_start_date',
	'source_other' => 'cf/event_end_date',
	'compare_type' => 'intersect',
	'fields' => 'both',
	'format' => 'd-m-Y',
	'preset_today_enabled' => 'yes',
	'preset_today_label' => __('Vandaag', 'sage'),
	'preset_tomorrow_enabled' => 'yes',
	'preset_tomorrow_label' => __('Morgen', 'sage'),
	'preset_this_weekend_enabled' => 'yes',
	'preset_this_weekend_label' => __('Dit weekend', 'sage'),
	'preset_next_7_days_enabled' => 'yes',
	'preset_next_7_days_label' => __('De komende 7 dagen', 'sage'),
	'preset_this_week_enabled' => 'no',
	'preset_this_week_label' => __('Deze week', 'sage'),
	'preset_next_week_enabled' => 'no',
	'preset_next_week_label' => __('Volgende week', 'sage'),
	'preset_this_month_enabled' => 'no',
	'preset_this_month_label' => __('Deze maand', 'sage'),
	'preset_next_month_enabled' => 'no',
	'preset_next_month_label' => __('Volgende maand', 'sage'),
];
