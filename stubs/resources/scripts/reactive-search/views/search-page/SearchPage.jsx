/**
 * External dependencies
 */
import {
	Base,
	SearchPage as ReactiveSearchPage,
} from '@yardinternet/reactive-search';

/**
 * Internal dependencies
 */
import { theme } from '../../config/theme';
import './search-page.css';

const SearchPage = () => {
	if ( ! window.YS || ! window.YS.indices ) {
		console.error( 'Error: Yard Elasticsearch indices has not been set.' ); // eslint-disable-line no-console
		return <></>;
	}

	return (
		<Base theme={ theme }>
			<ReactiveSearchPage placeholder="Waar bent u naar op zoek?" />
		</Base>
	);
};

export default SearchPage;
