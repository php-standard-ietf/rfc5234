<?php

declare(strict_types=1);

namespace IETFTest\Rfc5234;

use IETF\Rfc5234\Wsp;
use PHPUnit\Framework\TestCase;

use function preg_match;

class WspTest extends TestCase
{
    public function examples(): array
    {
        return [
            ['	', true],
            [' ', true],
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
        $actual = preg_match('/' . Wsp::REGEX . '/', $value) === 1;

        $this->assertEquals($expected, $actual, $value);
    }
}
