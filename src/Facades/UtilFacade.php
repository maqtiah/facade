<?php

namespace Acme\Facades;

use \Acme\Core\Facade;

class UtilFacade extends Facade
{
    public static function getAccessor()
    {
        return 'util';
    }
}
