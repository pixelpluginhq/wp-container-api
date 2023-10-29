# WordPress Container API

`pixelplugin/wp-container-api` is a package that provides global functions
for working with a global dependency container in WordPress.

## Installation

```shell
composer require pixelplugin/wp-container-api
```

## Usage

`wp-container-api` exports the following two global functions.

### `wp_container_get(string $id): mixed`

`wp_container_get()` is used to get a value from the global container instance.

```php
$value = wp_container_get(ClassName::class);
```

### `wp_container_has(string $id): bool`

`wp_container_has()` checks if a value exists in the global container instance.

```php
if (wp_container_has(ClassName::class)) {
    // ClassName exists in the container.
}
```
