<?php

declare(strict_types=1);

namespace IETFTest\Rfc5234;

use IETF\Rfc5234\Digit;
use PHPUnit\Framework\TestCase;

class DigitTest extends TestCase
{
    public function examples(): array
    {
        return [
            ['0', true],
            ['5', true],
            ['9', true],
            ['10', true],
            ['a', false],
            [' ', false],
            ['/', false],
        ];
    }

    /**
     * @test
     * @dataProvider examples
     */
    public function regex_with_examples($value, $expected): void
    {
        $actual = preg_match('/'.Digit::REGEX.'/', $value) === 1;

        $this->assertEquals($expected, $actual, $value);
    }
}
