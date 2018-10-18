<?php

namespace Acme\Facades;

use \Acme\Core\Facade;

class StrFacade extends Facade
{
    public static function getAccessor()
    {
        return 'str';
    }
}
