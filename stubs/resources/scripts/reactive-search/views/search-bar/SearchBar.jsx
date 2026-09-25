/**
 * External dependencies
 */
import {
	Base,
	SearchBar as ReactiveSearchBar,
} from '@yardinternet/reactive-search';

/**
 * Internal dependencies
 */
import { theme } from '../../config/theme';
import './search-bar.css';

const SearchBar = () => {
	if ( ! window.YS || ! window.YS.indices ) {
		console.error( 'Error: Yard Elasticsearch indices has not been set.' ); // eslint-disable-line no-console
		return <></>;
	}

	return (
		<Base theme={ theme }>
			<ReactiveSearchBar
				openButtonText="Zoeken"
				placeholder="Waar bent u naar op zoek?"
			/>
		</Base>
	);
};

export default SearchBar;
