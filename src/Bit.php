<?php

declare(strict_types=1);

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Bit
{
    /**
     * ABNF: BIT = "0" / "1"
     */
    public const REGEX = '[\x30-\x31]';
}
