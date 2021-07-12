<?php

declare(strict_types=1);

namespace IETFTest\Rfc5234;

use IETF\Rfc5234\Alpha;
use PHPUnit\Framework\TestCase;

class AlphaTest extends TestCase
{
    public function examples(): array
    {
        return [
            ['a', true],
            ['b', true],
            ['5', false],
            ['/', false],
            [' ', false],
        ];
    }

    /**
     * @test
     * @dataProvider examples
     */
    public function regex_with_examples($value, $expected): void
    {
        $actual = preg_match('/'.Alpha::REGEX.'/', $value) === 1;

        $this->assertEquals($expected, $actual, $value);
    }
}
