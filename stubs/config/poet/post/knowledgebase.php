<?php

declare(strict_types=1);

return [
	'enter_title_here' => 'Titel kennisbank artikel toevoegen',
	'menu_icon' => 'dashicons-welcome-learn-more',
	'supports' => [
		'title',
		'editor',
		'author',
		'revisions',
		'thumbnail',
		'excerpt',
		'page-attributes',
		'custom-fields',
		'parent-page' => ['slug' => 'kennisbank'],
		'data-class' => ['classFQN' => App\Data\KnowledgebaseData::class],
	],
	'show_in_rest' => true,
	'has_archive' => false,
	'labels' => [
		'name' => 'Kennisbank artikelen',
		'singular_name' => 'Kennisbank artikel',
		'menu_name' => 'Kennisbank',
		'name_admin_bar' => 'Kennisbank artikel',
		'add_new' => 'Nieuw kennisbank artikel toevoegen',
		'add_new_item' => 'Nieuw kennisbank artikel toevoegen',
		'edit_item' => 'Kennisbank artikel bewerken',
		'new_item' => 'Nieuw kennisbank artikel',
		'view_item' => 'Bekijk kennisbank artikel',
		'search_items' => 'Zoek kennisbank artikelen',
		'not_found' => 'Geen kennisbank artikelen gevonden',
		'not_found_in_trash' => 'Geen kennisbank artikelen gevonden in de prullenbak',
		'all_items' => 'Alle kennisbank artikelen',
	],
	'rewrite' => ['slug' => 'kennisbank'],
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
