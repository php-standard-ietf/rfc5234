<?php

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Lwsp
{
    /**
     * linear white space (past newline)
     */
    const REGEX = '('.Wsp::REGEX.'|'.CrLf::REGEX.Wsp::REGEX.')';
}

