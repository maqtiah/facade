<?php

namespace Acme\Support;

class Util
{
    public function dump($input)
    {
        return die(var_dump($input));
    }
}
