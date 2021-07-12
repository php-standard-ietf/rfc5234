<?php

declare(strict_types=1);

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface HexDig
{
    /**
     * DIGIT / "A" / "B" / "C" / "D" / "E" / "F"
     */
    public const REGEX = '(' . Digit::REGEX . '|[\x41-\x46])';
}
