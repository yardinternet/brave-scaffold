/**
 * External dependencies
 */
import {
	ReactiveBase,
	SearchInput as ReactiveSearchInput,
} from '@yardinternet/reactive-search';

/**
 * Internal dependencies
 */
import { theme } from '../../config/theme';
import './search-input.css';

const SearchInput = () => (
	<ReactiveBase theme={ theme }>
		<ReactiveSearchInput
			labelText="Waar bent u naar op zoek?"
			placeholder=" "
		/>
	</ReactiveBase>
);

export default SearchInput;
