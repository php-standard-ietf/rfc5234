<?php

declare(strict_types=1);

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Ctl
{
    /**
     * ABNF: CTL = %x00-1F / %x7F
     */
    public const REGEX = '([\x00-\x1F]|\x7F)';
}
