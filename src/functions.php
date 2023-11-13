<?php

/**
 * WordPress Container API.
 * @link https://github.com/pixelpluginhq/wp-container-api
 * @link https://packagist.org/packages/pixelplugin/wp-container-api
 */

declare(strict_types=1);

use PixelPlugin\WPContainerAPI\MissingContainerException;
use Psr\Container\ContainerInterface;

if (!function_exists('wp_container_get')) {
    /**
     * Get a value from the global container instance.
     */
    function wp_container_get(string $id): mixed
    {
        /** @var $wp_container ContainerInterface */
        global $wp_container;

        if (!$wp_container instanceof ContainerInterface) {
            throw new MissingContainerException();
        }

        return $wp_container->get($id);
    }
}

if (!function_exists('wp_container_has')) {
    /**
     * Check if a value exists in the global container instance.
     */
    function wp_container_has(string $id): bool
    {
        /** @var $wp_container ContainerInterface */
        global $wp_container;

        if (!$wp_container instanceof ContainerInterface) {
            throw new MissingContainerException();
        }

        return $wp_container->has($id);
    }
}
