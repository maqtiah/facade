<?php

namespace Acme\Support;

class Str
{
    public function toUpper($string)
    {
        return strtoupper($string);
    }

    public function titleCase($string)
    {
        return ucwords(strtolower($string));
    }
}
