/**
 * External dependencies
 */
import {
	ReactiveBase,
	SearchPage as ReactiveSearchPage,
	windowConfig,
} from '@yardinternet/reactive-search';

/**
 * Internal dependencies
 */
import { theme } from '../../config/theme';
import './search-page.css';

const postTypeFilter = {
	dataField: 'doctype',
	label: 'Type',
	sort: 'count',
};

const withPostTypeFilter = ( filters = [] ) =>
	filters.some( ( filter ) => filter.dataField === postTypeFilter.dataField )
		? filters
		: [ postTypeFilter, ...filters ];

const SearchPage = () => (
	<ReactiveBase theme={ theme }>
		<ReactiveSearchPage
			filters={ withPostTypeFilter( windowConfig().filters ) }
			placeholder="Waar bent u naar op zoek?"
		/>
	</ReactiveBase>
);

export default SearchPage;
