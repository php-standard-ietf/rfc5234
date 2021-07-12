<?php

declare(strict_types=1);

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Octet
{
    /**
     * 8 bits of data
     */
    public const REGEX = '[\x00-\xFF]';
}
