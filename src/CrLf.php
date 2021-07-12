<?php

declare(strict_types=1);

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface CrLf
{
    /**
     * Internet standard newline
     */
    public const REGEX = (Cr::REGEX . Lf::REGEX);
}
