# Elasticsearch

Use the WP Acorn scaffold command to get started:

```shell
wp acorn scaffold:elasticsearch
```

After scaffolding, follow these steps:

## 1. Install dependencies

Install the Yard Elasticsearch plugin and the Reactive Search npm package:

```shell
composer require plugin/yard-elasticsearch wpackagist-plugin/elasticpress  && pnpm install @yardinternet/reactive-search
```

## 2. Add the Elasticsearch `.env` variables

Add the following variables to your `.env` and `.env.example` file:

```env
# Elasticsearch
EP_HOST=
ES_PUBLIC_URL=
```

## 3. Add Reactive Search entrypoint to Vite

Update your `vite.config.js`:

```js
export default braveConfig( {
    entryPoints: [
        'resources/scripts/reactive-search/reactive-search.jsx',
    ],
} );
```

## 4. Register the Elasticsearch Hook

Add the `Elasticsearch.php` hook to your `hooks.php`:

```php
return [
    'elasticsearch' => \App\Hooks\Elasticsearch::class,
];
```

## 5. Add the reactive search bar to the header

Replace the current `@include('partials.header.search-bar')` of the search-bar with the following in the  `header.blade.php`:

```blade
@if (is_plugin_active('yard-elasticsearch/yard-elasticsearch.php'))
    @include('partials.header.reactive-search-bar')
@else
    @include('partials.header.search-bar')
@endif
```

## 6. Activate the Plugin & Configure Settings

1. Activate the Yard Elasticsearch plugin in WordPress.
2. Go to the settings page `/wp/wp-admin/admin.php?page=acf-options-yard-elastic`
3. Configure the following settings:
   - **Bronnen** (required)
   - **Filters** (optional)
   - **Veld weging** (required)

Everything should now be set up and ready to use!
