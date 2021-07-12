<?php

declare(strict_types=1);

namespace IETFTest\Rfc5234;

use IETF\Rfc5234\VChar;
use PHPUnit\Framework\TestCase;

use function preg_match;

class VCharTest extends TestCase
{
    public function examples(): array
    {
        return [
            ['6', true],
            ['/', true],
            ['	', false],
            [' ', false],
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
        $actual = preg_match('/' . VChar::REGEX . '/', $value) === 1;

        $this->assertEquals($expected, $actual, $value);
    }
}
