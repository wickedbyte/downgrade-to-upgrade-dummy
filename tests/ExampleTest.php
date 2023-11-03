<?php

declare(strict_types=1);

namespace WickedByte\Test\DowngradeToUpgradeDummy;

use WickedByte\DowngradeToUpgradeDummy\Example;

class ExampleTest extends TestCase
{
    public function testGreet(): void
    {
        $example = $this->mockery(Example::class);
        $example->shouldReceive('greet')->passthru();

        $this->assertSame('Hello, Friends!', $example->greet('Friends'));
    }
}
