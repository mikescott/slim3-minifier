# Slim 3 Minifier
A middleware for the [Slim framework](https://github.com/slimphp/Slim/) that produces minified HTML output.

## Installation

Installation is via [Composer](https://getcomposer.org/):

```bash
$ composer require mikescott/slim3-minifier "1.*"
```

## Usage

### Basic Usage

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

### Advanced Usage
To changed the default options:

```php
<?php
require 'vendor/autoload.php';

use Slim\App;
use MikeScott\Minifier\Minifier;
use zz\Html\HTMLMinify;

$app = new App();
$app->add(new Minifier([
        'optimizationLevel'        => HTMLMinify::OPTIMIZATION_SIMPLE,
        'doctype'                  => HTMLMinify::DOCTYPE_XHTML1,
        'removeComment'            => true,
        'removeDuplicateAttribute' => false
    ]
));
```

## Configuration
Key                 | Values                                              | Default
--------------------|-----------------------------------------------------|----------
optimizationLevel   | `HTMLMinify::OPTIMIZATION_ADVANCED` or<br/>`HTMLMinify::OPTIMIZATION_SIMPLE` | `HTMLMinify::OPTIMIZATION_ADVANCED`
doctype             | `HTMLMinify::DOCTYPE_HTML5`<br/>`HTMLMinify::DOCTYPE_XHTML1`<br/>`HTMLMinify::DOCTYPE_HTML4` | `HTMLMinify::DOCTYPE_HTML5`
removeComment       | `true` or `false`                                   | `false`
removeDuplicateAttribute | `true` or `false`                              | `true`

Please refer to the documentation of [zaininnari/html-minifier](https://github.com/zaininnari/html-minifier) for full descriptions of these options. Note that the default options used by this package differ 


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

