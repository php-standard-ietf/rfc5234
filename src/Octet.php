<?php

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Octet
{
    /**
     * 8 bits of data
     */
    const REGEX = '[\x00-\FF]';
}
