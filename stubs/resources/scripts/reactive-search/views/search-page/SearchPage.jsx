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
		<Base
			app={ window.YS.indices.join() }
			url={ window.YS.url }
			theme={ theme }
		>
			<ReactiveSearchPage
				boosts={ window.YS.boosts }
				dataField={ window.YS.dataFields }
				filters={ window.YS.filters }
				fuzziness={
					window.YS.fuzziness === 'AUTO'
						? window.YS.fuzziness
						: parseInt( window.YS.fuzziness )
				}
				mustMatch={ window.YS.mustMatch }
				placeholder="Waar bent u naar op zoek?"
			/>
		</Base>
	);
};

export default SearchPage;
