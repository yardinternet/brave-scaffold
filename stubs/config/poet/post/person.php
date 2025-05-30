<?php

declare(strict_types=1);

return [
	'enter_title_here' => 'Naam persoon toevoegen',
	'menu_icon' => 'dashicons-admin-users',
	'supports' => [
		'title',
		'editor',
		'author',
		'revisions',
		'thumbnail',
		'excerpt',
		'page-attributes',
		'custom-fields',
		'parent-page' => ['slug' => 'ons-team'],
		'data-class' => ['classFQN' => App\Data\PersonData::class],
	],
	'show_in_rest' => true,
	'has_archive' => false,
	'labels' => [
		'name' => 'Personen',
		'singular_name' => 'Persoon',
		'menu_name' => 'Personen',
		'name_admin_bar' => 'Persoon',
		'add_new' => 'Nieuw persoon toevoegen',
		'add_new_item' => 'Nieuw persoon toevoegen',
		'edit_item' => 'Persoon bewerken',
		'new_item' => 'Nieuw persoon',
		'view_item' => 'Bekijk persoon',
		'search_items' => 'Zoek personen',
		'not_found' => 'Geen personen gevonden',
		'not_found_in_trash' => 'Geen personen gevonden in de prullenbak',
		'all_items' => 'Alle personen',
	],
	'rewrite' => ['slug' => 'ons-team'],
	'template' => [
		[
			'core/paragraph',
			[
				'placeholder' => 'Korte introductie van maximaal 7 regels. Voeg een afbeelding toe en tag de post met de juiste taxonomieën.',
			],
		],
		[
			'core/post-featured-image', ['aspectRatio' => '16/9'],
		],
		[
			'core/heading',
			[
				'placeholder' => 'Optionele koptekst',
			],
		],
		[
			'core/paragraph',
			[
				'placeholder' => 'Schrijf de rest van de inhoud van de post.',
			],
		],
	],
];
