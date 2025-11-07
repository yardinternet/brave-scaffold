<?php

declare(strict_types=1);

return [
	'enter_title_here' => __('Titel project toevoegen', 'sage'),
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
			'slug' => __('projecten', 'sage'),
		],
		'data-class' => [
			'classFQN' => App\Data\ProjectData::class,
		],
	],
	'show_in_rest' => true,
	'has_archive' => false,
	'hierarchical' => true,
	'labels' => [
		'name' => __('Projecten', 'sage'),
		'singular_name' => __('Project', 'sage'),
		'menu_name' => __('Projecten', 'sage'),
		'name_admin_bar' => __('Project', 'sage'),
		'add_new' => __('Nieuw project toevoegen', 'sage'),
		'add_new_item' => __('Nieuw project toevoegen', 'sage'),
		'edit_item' => __('Project bewerken', 'sage'),
		'new_item' => __('Nieuw project', 'sage'),
		'view_item' => __('Bekijk project', 'sage'),
		'search_items' => __('Zoek projecten', 'sage'),
		'not_found' => __('Geen projecten gevonden', 'sage'),
		'not_found_in_trash' => __('Geen projecten gevonden in de prullenbak', 'sage'),
		'all_items' => __('Alle projecten', 'sage'),
	],
	'rewrite' => ['slug' => __('projecten', 'sage')],
	'template' => [
		[
			'core/paragraph',
			[
				'placeholder' => __('Korte introductie van maximaal 7 regels. Voeg een afbeelding toe en tag het project met de juiste taxonomieën. Voeg eventueel een hoofdproject toe bij de projectinstellingen.', 'sage'),
			],
		],
		[
			'core/post-featured-image',
			['aspectRatio' => '16/9'],
		],
		[
			'core/paragraph',
			[
				'placeholder' => __('Voeg de rest van de inhoud toe.', 'sage'),
			],
		],
		[
			'core/heading',
			[
				'level' => 2,
				'content' => __('Het project in beeld', 'sage'),
			],
		],
		[
			'core/gallery',
			['columns' => 3],
		],
	],
];
