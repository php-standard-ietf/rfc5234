<?php

declare(strict_types=1);

namespace IETFTest\Rfc5234;

use IETF\Rfc5234\CrLf;
use PHPUnit\Framework\TestCase;

class CrLfTest extends TestCase
{
    public function examples(): array
    {
        return [
            ["\r\n", true],
            ["\n\r", false],
            ['/', false],
            ['6', false],
            ['/', false],
        ];
    }

    /**
     * @test
     * @dataProvider examples
     */
    public function regex_with_examples($value, $expected): void
    {
        $actual = preg_match('/'.CrLf::REGEX.'/', $value) === 1;

        $this->assertEquals($expected, $actual, $value);
    }
}
