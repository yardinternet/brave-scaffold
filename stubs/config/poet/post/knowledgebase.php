<?php

declare(strict_types=1);

return [
	'enter_title_here' => __('Titel kennisbank artikel toevoegen', 'sage'),
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
		'parent-page' => ['slug' => __('kennisbank', 'sage')],
		'data-class' => ['classFQN' => App\Data\KnowledgebaseData::class],
	],
	'show_in_rest' => true,
	'has_archive' => false,
	'labels' => [
		'name' => __('Kennisbank artikelen', 'sage'),
		'singular_name' => __('Kennisbank artikel', 'sage'),
		'menu_name' => __('Kennisbank', 'sage'),
		'name_admin_bar' => __('Kennisbank artikel', 'sage'),
		'add_new' => __('Nieuw kennisbank artikel toevoegen', 'sage'),
		'add_new_item' => __('Nieuw kennisbank artikel toevoegen', 'sage'),
		'edit_item' => __('Kennisbank artikel bewerken', 'sage'),
		'new_item' => __('Nieuw kennisbank artikel', 'sage'),
		'view_item' => __('Bekijk kennisbank artikel', 'sage'),
		'search_items' => __('Zoek kennisbank artikelen', 'sage'),
		'not_found' => __('Geen kennisbank artikelen gevonden', 'sage'),
		'not_found_in_trash' => __('Geen kennisbank artikelen gevonden in de prullenbak', 'sage'),
		'all_items' => __('Alle kennisbank artikelen', 'sage'),
	],
	'rewrite' => ['slug' => __('kennisbank', 'sage')],
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
