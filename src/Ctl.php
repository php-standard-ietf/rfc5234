<?php

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Ctl
{
    /**
     * Controls
     */
    const REGEX = '([\x00-\x1F]|\x7F)';
}
