<?php

declare(strict_types=1);

return 		[
	'name' => 'event_distance',
	'label' => 'Locatie',
	'type' => 'proximity',
	'source' => 'acf/venue_address',
	'unit' => 'km',
	'radius_ui' => 'dropdown',
	'radius_options' => '1, 2, 5, 10, 15, 20',
	'radius_min' => '1',
	'radius_max' => '20',
	'radius_default' => '5',
	'placeholder' => '',
];
