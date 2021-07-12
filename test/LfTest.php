<?php

declare(strict_types=1);

namespace IETFTest\Rfc5234;

use IETF\Rfc5234\Lf;
use PHPUnit\Framework\TestCase;

class LfTest extends TestCase
{
    public function examples(): array
    {
        return [
            ["\n", true],
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
        $actual = preg_match('/'.Lf::REGEX.'/', $value) === 1;

        $this->assertEquals($expected, $actual, $value);
    }
}
