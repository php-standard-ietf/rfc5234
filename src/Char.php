<?php

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Char
{
    /**
     * Any 7-bit US-ASCII character, excluding NUL
     */
    const REGEX = '[\x01-\x7F]';
}
