<?php

declare(strict_types=1);

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Digit
{
    /**
     * ABNF: DIGIT = %x30-39
     */
    public const REGEX = '[\x30-\x39]';
}
