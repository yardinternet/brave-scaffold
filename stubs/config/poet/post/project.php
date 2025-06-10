<?php

declare(strict_types=1);

return [
	'enter_title_here' => 'Titel project toevoegen',
	'menu_icon' => 'dashicons-location-alt',
	'supports' => [
		'title',
		'editor',
		'author',
		'revisions',
		'thumbnail',
		'excerpt',
		'page-attributes',
		'custom-fields',
		'parent-page' => [
			'slug' => 'projecten',
		],
		'data-class' => [
			'classFQN' => App\Data\ProjectData::class,
		],
	],
	'show_in_rest' => true,
	'has_archive' => false,
	'hierarchical' => true,
	'labels' => [
		'name' => 'Projecten',
		'singular_name' => 'Project',
		'menu_name' => 'Projecten',
		'name_admin_bar' => 'Project',
		'add_new' => 'Nieuw project toevoegen',
		'add_new_item' => 'Nieuw project toevoegen',
		'edit_item' => 'Project bewerken',
		'new_item' => 'Nieuw project',
		'view_item' => 'Bekijk project',
		'search_items' => 'Zoek projecten',
		'not_found' => 'Geen projecten gevonden',
		'not_found_in_trash' => 'Geen projecten gevonden in de prullenbak',
		'all_items' => 'Alle projecten',
	],
	'rewrite' => ['slug' => 'projecten'],
	'template' => [
		[
			'core/paragraph',
			[
				'placeholder' => 'Korte introductie van maximaal 7 regels. Voeg een afbeelding toe en tag het project met de juiste taxonomieën. Voeg eventueel een hoofdproject toe bij de projectinstellingen.',
			],
		],
		[
			'core/post-featured-image', ['aspectRatio' => '16/9'],
		],
		[
			'core/paragraph', [
				'placeholder' => 'Voeg de rest van de inhoud toe.',
			],
		],
		[
			'core/heading', ['level' => 2, 'content' => 'Het project in beeld'],
		],
		[
			'core/gallery', ['columns' => 3],
		],
	],
];
