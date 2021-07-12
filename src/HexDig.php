<?php

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface HexDig
{
    /**
     * DIGIT / "A" / "B" / "C" / "D" / "E" / "F"
     */
    const REGEX = '('.Digit::REGEX.'|[\x41-\x46])';
}
