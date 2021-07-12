<?php

declare(strict_types=1);

namespace IETFTest\Rfc5234;

use IETF\Rfc5234\Lwsp;
use PHPUnit\Framework\TestCase;

use function preg_match;

class LwspTest extends TestCase
{
    public function examples(): array
    {
        return [
            ['	', true],
            [' ', true],
            ["\r\n ", true],
            ["\r\n ", true],
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
        $actual = preg_match('/' . Lwsp::REGEX . '/', $value) === 1;

        $this->assertEquals($expected, $actual, $value);
    }
}
