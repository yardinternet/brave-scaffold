<?php

declare(strict_types=1);

return [
	'enter_title_here' => __('Naam persoon toevoegen', 'sage'),
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
		'parent-page' => ['slug' => __('ons-team', 'sage')],
		'data-class' => ['classFQN' => App\Data\PersonData::class],
	],
	'show_in_rest' => true,
	'has_archive' => false,
	'labels' => [
		'name' => __('Personen', 'sage'),
		'singular_name' => __('Persoon', 'sage'),
		'menu_name' => __('Personen', 'sage'),
		'name_admin_bar' => __('Persoon', 'sage'),
		'add_new' => __('Nieuw persoon toevoegen', 'sage'),
		'add_new_item' => __('Nieuw persoon toevoegen', 'sage'),
		'edit_item' => __('Persoon bewerken', 'sage'),
		'new_item' => __('Nieuw persoon', 'sage'),
		'view_item' => __('Bekijk persoon', 'sage'),
		'search_items' => __('Zoek personen', 'sage'),
		'not_found' => __('Geen personen gevonden', 'sage'),
		'not_found_in_trash' => __('Geen personen gevonden in de prullenbak', 'sage'),
		'all_items' => __('Alle personen', 'sage'),
	],
	'rewrite' => ['slug' => __('ons-team', 'sage')],
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
