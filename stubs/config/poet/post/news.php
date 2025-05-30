<?php

declare(strict_types=1);

return [
	'enter_title_here' => 'Titel nieuwsbericht toevoegen',
	'menu_icon' => 'dashicons-admin-site-alt',
	'supports' => [
		'title',
		'editor',
		'author',
		'revisions',
		'thumbnail',
		'excerpt',
		'page-attributes',
		'custom-fields',
		'parent-page' => ['slug' => 'nieuws'],
		'data-class' => ['classFQN' => App\Data\NewsData::class],
	],
	'show_in_rest' => true,
	'has_archive' => false,
	'labels' => [
		'name' => 'Nieuwsberichten',
		'singular_name' => 'Nieuwsbericht',
		'menu_name' => 'Nieuwsberichten',
		'name_admin_bar' => 'Nieuwsbericht',
		'add_new' => 'Nieuw nieuwsbericht toevoegen',
		'add_new_item' => 'Nieuw nieuwsbericht toevoegen',
		'edit_item' => 'Nieuwsbericht bewerken',
		'new_item' => 'Nieuw nieuwsbericht',
		'view_item' => 'Bekijk nieuwsbericht',
		'search_items' => 'Zoek nieuwsberichten',
		'not_found' => 'Geen nieuwsberichten gevonden',
		'not_found_in_trash' => 'Geen nieuwsberichten gevonden in de prullenbak',
		'all_items' => 'Alle nieuwsberichten',
	],
	'rewrite' => ['slug' => 'nieuws'],
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
