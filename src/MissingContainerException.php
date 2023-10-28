<?php

declare(strict_types=1);

namespace PixelPlugin\WPContainerAPI;

use UnexpectedValueException;

/**
 * This exception is thrown when the global container instance doesn't exist.
 */
final class MissingContainerException extends UnexpectedValueException
{
}
