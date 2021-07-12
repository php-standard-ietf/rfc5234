<?php

declare(strict_types=1);

namespace IETFTest\Rfc5234;

use IETF\Rfc5234\HexDig;
use PHPUnit\Framework\TestCase;

class HexDigTest extends TestCase
{
    public function examples(): array
    {
        return [
            ['0', true],
            ['5', true],
            ['9', true],
            ['A', true],
            ['F', true],
            ['G', false],
            ['a', false],
            ['g', false],
            ['/', false],
            ['-', false],
            [' ', false],
        ];
    }

    /**
     * @test
     * @dataProvider examples
     */
    public function regex_with_examples($value, $expected): void
    {
        $actual = preg_match('/'.HexDig::REGEX.'/', $value) === 1;

        $this->assertEquals($expected, $actual, $value);
    }
}
