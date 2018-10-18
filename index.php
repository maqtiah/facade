<?php

require_once __DIR__ . '/vendor/autoload.php';

\Acme\Core\Alias::load([
	'Str' => \Acme\Facades\StrFacade::class,
	'Util' => \Acme\Facades\UtilFacade::class
]);

// You can now reference the Str & Util class through their Facade.
