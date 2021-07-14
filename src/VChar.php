<?php

declare(strict_types=1);

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface VChar
{
    /**
     * ABNF: VCHAR = %x21-7E
     */
    public const REGEX = '[\x21-\x7E]';
}
