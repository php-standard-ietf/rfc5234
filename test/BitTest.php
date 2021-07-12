<?php

declare(strict_types=1);

namespace IETFTest\Rfc5234;

use IETF\Rfc5234\Bit;
use PHPUnit\Framework\TestCase;

use function preg_match;

class BitTest extends TestCase
{
    public function examples(): array
    {
        return [
            ['0', true],
            ['1', true],
            ['6', false],
            ['/', false],
        ];
    }

    /**
     * @test
     * @dataProvider examples
     */
    public function regexWillReturnExpectedResult(
        string $value,
        bool $expected
    ): void {
        $actual = preg_match('/' . Bit::REGEX . '/', $value) === 1;

        $this->assertEquals($expected, $actual, $value);
    }
}
