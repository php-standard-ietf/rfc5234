<?php

namespace IETF\Rfc5234;

/**
 * @link https://datatracker.ietf.org/doc/html/rfc5234#appendix-B.1
 */
interface Rule
{
    const CORE_RULES
        = [
            Alpha::class,
            Bit::class,
            Char::class,
            Cr::class,
            CrLf::class,
            Ctl::class,
            Digit::class,
            DQuote::class,
            HexDig::class,
            HTab::class,
            Lf::class,
            Lwsp::class,
            Octet::class,
            Sp::class,
            VChar::class,
            Wsp::class,
        ];
}
