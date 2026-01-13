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
		<Base
			app={ window.YS.indices.join() }
			url={ window.YS.url }
			theme={ theme }
		>
			<ReactiveSearchInput
				boosts={ window.YS.boosts }
				dataFields={ window.YS.dataFields }
				fuzziness={
					window.YS.fuzziness === 'AUTO'
						? window.YS.fuzziness
						: parseInt( window.YS.fuzziness )
				}
				mustMatch={ window.YS.mustMatch }
				labelText="Waar bent u naar op zoek?"
				placeholder=" "
			/>
		</Base>
	);
};

export default SearchInput;
