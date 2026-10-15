/**
 * External dependencies
 */
import {
	ReactiveBase,
	SearchPage as ReactiveSearchPage,
} from '@yardinternet/reactive-search';

/**
 * Internal dependencies
 */
import { theme } from '../../config/theme';
import './search-page.css';

const SearchPage = () => (
	<ReactiveBase theme={ theme }>
		<ReactiveSearchPage placeholder="Waar bent u naar op zoek?" />
	</ReactiveBase>
);

export default SearchPage;
