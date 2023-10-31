<?php

/**
 * WordPress Container API.
 * @link https://github.com/pixelpluginhq/wp-container-api
 */

declare(strict_types=1);

use PixelPlugin\WPContainerAPI\MissingContainerException;
use Psr\Container\ContainerInterface;

if (!function_exists('wp_container_get')) {
    /**
     * Get a value from the global container instance.
     * @param string $id
     * @return mixed
     */
    function wp_container_get(string $id)
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
     * @param string $id
     * @return bool
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
