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
		<Base
			app={ window.YS.indices.join() }
			url={ window.YS.url }
			theme={ theme }
		>
			<ReactiveSearchBar
				boosts={ window.YS.boosts }
				dataFields={ window.YS.dataFields }
				fuzziness={
					window.YS.fuzziness === 'AUTO'
						? window.YS.fuzziness
						: parseInt( window.YS.fuzziness )
				}
				mustMatch={ window.YS.mustMatch }
				openButtonText="Zoeken"
				placeholder="Waar bent u naar op zoek?"
			/>
		</Base>
	);
};

export default SearchBar;
