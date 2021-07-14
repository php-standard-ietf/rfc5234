<?php

declare(strict_types=1);

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Char
{
    /**
     * ABNF: CHAR = %x01-7F
     */
    public const REGEX = '[\x01-\x7F]';
}
