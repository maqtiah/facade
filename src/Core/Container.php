<?php 

namespace Acme\Core;

class Container 
{
    protected $bindings = [
        'str' => \Acme\Support\Str::class,
        'util'  => \Acme\Support\Util::class
    ];

    public function make($name)
    {
        return new $this->bindings[$name];
    }
}
