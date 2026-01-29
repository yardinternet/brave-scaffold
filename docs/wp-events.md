# WP Events

Use the WP Acorn scaffold command to get started:

```shell
wp acorn scaffold:wp-events
```

After scaffolding, follow these steps:

## 1. Install dependencies

```shell
composer require yard/wp-events
```

## 2. Run the Acorn WP-CLI command to discover this package

```shell
wp acorn package:discover
```

## 3. Update the Card component

Add the following parameters to the `__construct` method in the `Cards.php` file:

```php
public function __construct(
    // existing params...
    public ?string $eventDateTime = null,
    public ?string $eventLocation = null,
) {
    // existing code...
}
```

Add the following line to the view of the Card component:

```php
<x-meta.event :eventDateTime="$eventDateTime" :eventLocation="$eventLocation" />
```

## 4. Import css file

Add the following import to your frontend stylesheet:

```css
@import './blocks/add-event-to-calendar/shared';
```

Everything should now be set up and ready to use!
