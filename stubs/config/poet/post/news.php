<?php

declare(strict_types=1);

return [
	'enter_title_here' => __('Titel nieuwsbericht toevoegen', 'sage'),
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
		'parent-page' => ['slug' => __('nieuws', 'sage')],
		'data-class' => ['classFQN' => App\Data\NewsData::class],
	],
	'show_in_rest' => true,
	'has_archive' => false,
	'labels' => [
		'name' => __('Nieuwsberichten', 'sage'),
		'singular_name' => __('Nieuwsbericht', 'sage'),
		'menu_name' => __('Nieuwsberichten', 'sage'),
		'name_admin_bar' => __('Nieuwsbericht', 'sage'),
		'add_new' => __('Nieuw nieuwsbericht toevoegen', 'sage'),
		'add_new_item' => __('Nieuw nieuwsbericht toevoegen', 'sage'),
		'edit_item' => __('Nieuwsbericht bewerken', 'sage'),
		'new_item' => __('Nieuw nieuwsbericht', 'sage'),
		'view_item' => __('Bekijk nieuwsbericht', 'sage'),
		'search_items' => __('Zoek nieuwsberichten', 'sage'),
		'not_found' => __('Geen nieuwsberichten gevonden', 'sage'),
		'not_found_in_trash' => __('Geen nieuwsberichten gevonden in de prullenbak', 'sage'),
		'all_items' => __('Alle nieuwsberichten', 'sage'),
	],
	'rewrite' => ['slug' => __('nieuws', 'sage')],
	'template' => [
		[
			'core/paragraph',
			[
				'placeholder' => __('Korte introductie van maximaal 7 regels. Voeg een afbeelding toe en tag de post met de juiste taxonomieën.', 'sage'),
			],
		],
		[
			'core/post-featured-image',
			['aspectRatio' => '16/9'],
		],
		[
			'core/heading',
			[
				'placeholder' => __('Optionele koptekst', 'sage'),
			],
		],
		[
			'core/paragraph',
			[
				'placeholder' => __('Schrijf de rest van de inhoud van de post.', 'sage'),
			],
		],
	],
];
