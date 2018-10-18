<?php 

namespace Acme\Core;

abstract class Facade 
{
    public static function __callStatic($method, $args)
    {
        $container = new Container;
        $instance = $container->make(static::getAccessor());

        return $instance->$method(...$args);
    }
}
