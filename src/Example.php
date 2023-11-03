<?php

/**
 * This file is part of wickedbyte/downgrade-to-upgrade-dummy
 *
 * @copyright Copyright (c) WickedByte LLC <andy@wickedbyte.com>
 * @license https://opensource.org/license/mit/ MIT License
 */

declare(strict_types=1);

namespace WickedByte\DowngradeToUpgradeDummy;

/**
 * An example class to act as a starting point for developing your library
 */
class Example
{
    /**
     * Returns a greeting statement using the provided name
     */
    public function greet(string $name = 'World'): string
    {
        return "Hello, {$name}!";
    }
}
