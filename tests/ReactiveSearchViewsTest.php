<?php

declare(strict_types=1);

describe('reactive-search view stubs', function () {
	it('leaves the window.YS config to ReactiveBase', function (string $view) {
		$contents = file_get_contents(dirname(__DIR__) . '/stubs/resources/scripts/reactive-search/views/' . $view);

		expect($contents)
			->toContain('<ReactiveBase theme={ theme }>')
			->not->toContain('window.YS')
			->not->toContain('windowConfig')
			->not->toMatch('/\bBase,/');
	})->with([
		'search-bar/SearchBar.jsx',
		'search-input/SearchInput.jsx',
		'search-page/SearchPage.jsx',
	]);
});
