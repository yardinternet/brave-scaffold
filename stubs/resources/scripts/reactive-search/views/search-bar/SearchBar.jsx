/**
 * External dependencies
 */
import {
	ReactiveBase,
	SearchBar as ReactiveSearchBar,
} from '@yardinternet/reactive-search';

/**
 * Internal dependencies
 */
import { theme } from '../../config/theme';
import './search-bar.css';

const SearchBar = () => (
	<ReactiveBase theme={ theme }>
		<ReactiveSearchBar
			openButtonText="Zoeken"
			placeholder="Waar bent u naar op zoek?"
		/>
	</ReactiveBase>
);

export default SearchBar;
