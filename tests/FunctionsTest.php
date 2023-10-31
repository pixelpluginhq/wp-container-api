<?php

declare(strict_types=1);

namespace PixelPlugin\WPContainerAPI\Tests;

use League\Container\Container;
use PHPUnit\Framework\TestCase;
use PixelPlugin\WPContainerAPI\MissingContainerException;
use stdClass;

use function wp_container_get;
use function wp_container_has;

/**
 * Check all the functions inside `src/functions.php`.
 */
final class FunctionsTest extends TestCase
{
    /**
     * @covers ::wp_container_get()
     * @return void
     */
    public function testContainerGetWhenNoContainer()
    {
        $this->expectException(MissingContainerException::class);

        wp_container_get(stdClass::class);
    }

    /**
     * @covers ::wp_container_get()
     * @return void
     */
    public function testContainerGet()
    {
        global $wp_container;

        $wp_container = new Container();
        $wp_container->add(stdClass::class);

        $this->assertInstanceOf(stdClass::class, wp_container_get(stdClass::class));

        unset($GLOBALS['wp_container']);
    }

    /**
     * @covers ::wp_container_has()
     * @return void
     */
    public function testContainerHasWhenNoContainer()
    {
        $this->expectException(MissingContainerException::class);

        wp_container_has(stdClass::class);
    }

    /**
     * @covers ::wp_container_has()
     * @return void
     */
    public function testContainerHas()
    {
        global $wp_container;

        $wp_container = new Container();
        $wp_container->add(stdClass::class);

        $this->assertTrue(wp_container_has(stdClass::class));
        $this->assertFalse(wp_container_has(MissingContainerException::class));

        unset($GLOBALS['wp_container']);
    }
}
