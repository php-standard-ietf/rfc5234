<?php

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Wsp
{
    /**
     * White space
     */
    const REGEX = '('.Sp::REGEX.'|'.HTab::REGEX.')';
}
