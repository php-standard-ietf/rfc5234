<?php

declare(strict_types=1);

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Cr
{
    /**
     * ABNF: CR = %x0D
     */
    public const REGEX = '\x0D';
}
