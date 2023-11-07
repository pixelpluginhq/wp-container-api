# WordPress Container API

`pixelplugin/wp-container-api` is a composer package that provides global functions
for working with a global dependency container in WordPress.

## Installation

```shell
composer require pixelplugin/wp-container-api
```

https://packagist.org/packages/pixelplugin/wp-container-api

## Usage

You need this package and some WordPress plugin that provides a global PSR-compatible container instance in `$wp_container` variable, for example [pixelplugin/wp-container](https://github.com/pixelpluginhq/wp-container). Then you can use the following functions to work with the container from your code.

## Functions

### wp_container_get

`wp_container_get(string $id): mixed` is used to get a value from the global container instance.

```php
$value = wp_container_get(ClassName::class);
```

### wp_container_has

`wp_container_has(string $id): bool` checks if a value exists in the global container instance.

```php
if (wp_container_has(ClassName::class)) {
    // ClassName exists in the container.
}
```
