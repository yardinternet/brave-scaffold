/**
 * Internal dependencies
 */
import SearchPage from './views/search-page/SearchPage.jsx';
import SearchBar from './views/search-bar/SearchBar.jsx';
import SearchInput from './views/search-input/SearchInput.jsx';

/**
 * WordPress dependencies
 */
import { createRoot } from '@wordpress/element';

/**
 * Styles
 */
import './styles/autosuggest.css';

if ( document.getElementById( 'js-reactive-search-page' ) ) {
	createRoot( document.getElementById( 'js-reactive-search-page' ) ).render(
		<SearchPage />
	);
}

if ( document.getElementById( 'js-reactive-search-bar' ) ) {
	createRoot( document.getElementById( 'js-reactive-search-bar' ) ).render(
		<SearchBar />
	);
}

if ( document.getElementById( 'js-reactive-search-input' ) ) {
	createRoot( document.getElementById( 'js-reactive-search-input' ) ).render(
		<SearchInput />
	);
}
