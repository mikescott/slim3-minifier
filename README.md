# Slim 3 Minifier
A middleware for the [Slim framework](https://github.com/slimphp/Slim/) that produces minified HTML output.

## Installation

Installation is via [Composer](https://getcomposer.org/):

```bash
$ composer require mikescott/slim3-minifier "2.*"
```

## Usage

### Usage

Used like this the minifier will use its default options:

* HTML5 doctype
* Linebreaks are removed
* Comments are preserved
* Duplicate attributes are removed

```php
<?php
require 'vendor/autoload.php';

use Slim\App;
use MikeScott\Minifier\Minifier;

$app = new App();
$app->add(new Minifier());
```

## License
The MIT License (MIT)

Copyright (c) 2017 Michael Scott (https://github.com/mikescott)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

