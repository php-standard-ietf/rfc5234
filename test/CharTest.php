<?php

declare(strict_types=1);

namespace IETFTest\Rfc5234;

use IETF\Rfc5234\Char;
use PHPUnit\Framework\TestCase;

class CharTest extends TestCase
{
    public function examples(): array
    {
        return [
            ['0', true],
            ['9', true],
            ['-', true],
            ['/', true],
            [' ', true],
        ];
    }

    /**
     * @test
     * @dataProvider examples
     */
    public function regex_with_examples($value, $expected): void
    {
        $actual = preg_match('/'.Char::REGEX.'/', $value) === 1;

        $this->assertEquals($expected, $actual, $value);
    }
}
