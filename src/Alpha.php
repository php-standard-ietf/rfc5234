<?php

declare(strict_types=1);

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Alpha
{
    /**
     * A-Z / a-z
     */
    public const REGEX = '[\x41-\x5A\x61-\x7A]';
}
