# Facade

> This repository is made from an original [post I made back in 2014/2015](https://laracasts.com/discuss/channels/general-discussion/how-does-laravel-exclude-namespaces-in-some-files).

**Remember to run `composer dump` to generate the autoloader for this project**.

## Examples

```php
<?php

Str::toUpper('this will be uppercased.'); // THIS WILL BE UPPERCASED
Str::titleCase('this will be in title case'); // This Will Be In Title Case

Util::dump('test'); // string(4) "test"
```

## Notes
1. This is not stable for a real world project, but it showcases how Facades are done.
2. I don't take full credit from this other than optimizing it and making a better folder structure.
3. The example methods are partially from [Laravel](https://laravel.com/) itself.

