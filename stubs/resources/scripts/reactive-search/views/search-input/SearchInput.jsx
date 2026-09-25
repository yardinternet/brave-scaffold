/**
 * External dependencies
 */
import {
	Base,
	SearchInput as ReactiveSearchInput,
} from '@yardinternet/reactive-search';

/**
 * Internal dependencies
 */
import { theme } from '../../config/theme';
import './search-input.css';

const SearchInput = () => {
	if ( ! window.YS || ! window.YS.indices ) {
		console.error( 'Error: Yard Elasticsearch indices has not been set.' ); // eslint-disable-line no-console
		return <></>;
	}

	return (
		<Base theme={ theme }>
			<ReactiveSearchInput
				labelText="Waar bent u naar op zoek?"
				placeholder=" "
			/>
		</Base>
	);
};

export default SearchInput;
