<?php 

namespace Acme\Core;

class Alias 
{
    public static function load($aliases)
    {
        foreach ($aliases as $alias => $class)
        {
            class_alias($class, $alias);
        }
    }
}
