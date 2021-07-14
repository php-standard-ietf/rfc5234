<?php

declare(strict_types=1);

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Lwsp
{
    /**
     * ABNF: LWSP = *(WSP / CRLF WSP)
     */
    public const REGEX = '(' . Wsp::REGEX . '|' . CrLf::REGEX . Wsp::REGEX . ')';
}
