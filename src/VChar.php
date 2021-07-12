<?php

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface VChar
{
    /**
     * Visible (printing) characters
     */
    const REGEX = '[\x21-\x7E]';
}
