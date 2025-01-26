# Akeneo Custom UI Bundle

The Akeneo Custom UI Bundle  enhances the Akeneo user interface by adding custom menu items, forms, and other UI components, making it more tailored to your business needs.

## Installation and Configuration

### 1. Register the Bundle
Add the bundle to your `bundles.php` file:

```php
Custom\UiBundle\CustomUiBundle::class => ['all' => true],
```

### 4. Clear and Warmup Cache
Run the following command to clear and warm up the cache, and prepare the assets:

```bash
rm -rf var/cache/* && \
bin/console cache:warmup --env=prod && \
rm -rf public/bundles public/js && \
bin/console pim:installer:assets --clean --env=prod && \
rm -rf public/css && rm -rf public/dist && \
yarn run less && yarn run webpack && yarn run update-extensions
```
