<?php

declare(strict_types=1);

return [
	'name' => 'event_datum',
	'label' => 'Wanneer?',
	'type' => 'event_date_range',
	'source' => 'cf/event_start_date',
	'source_other' => 'cf/event_end_date',
	'compare_type' => 'intersect',
	'fields' => 'both',
	'format' => 'd-m-Y',
	'preset_today_enabled' => 'yes',
	'preset_today_label' => 'Vandaag',
	'preset_tomorrow_enabled' => 'yes',
	'preset_tomorrow_label' => 'Morgen',
	'preset_this_weekend_enabled' => 'yes',
	'preset_this_weekend_label' => 'Dit weekend',
	'preset_next_7_days_enabled' => 'yes',
	'preset_next_7_days_label' => 'De komende 7 dagen',
	'preset_this_week_enabled' => 'no',
	'preset_this_week_label' => 'Deze week',
	'preset_next_week_enabled' => 'no',
	'preset_next_week_label' => 'Volgende week',
	'preset_this_month_enabled' => 'no',
	'preset_this_month_label' => 'Deze maand',
	'preset_next_month_enabled' => 'no',
	'preset_next_month_label' => 'Volgende maand',
];
