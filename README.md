# bind-facets

[![Release](https://img.shields.io/packagist/v/icanboogie/bind-facets.svg)](https://packagist.org/packages/icanboogie/bind-facets)
[![Build Status](https://img.shields.io/travis/ICanBoogie/bind-facets/master.svg)](http://travis-ci.org/ICanBoogie/bind-facets)
[![HHVM](https://img.shields.io/hhvm/icanboogie/bind-facets.svg)](http://hhvm.h4cc.de/package/icanboogie/bind-facets)
[![Code Quality](https://img.shields.io/scrutinizer/g/ICanBoogie/bind-facets/master.svg)](https://scrutinizer-ci.com/g/ICanBoogie/bind-facets)
[![Code Coverage](https://img.shields.io/coveralls/ICanBoogie/bind-facets/master.svg)](https://coveralls.io/r/ICanBoogie/bind-facets)
[![Packagist](https://img.shields.io/packagist/dt/icanboogie/bind-facets.svg)](https://packagist.org/packages/icanboogie/bind-facets)

The **icanboogie/bind-facets** package binds [icanboogie/facets][] to [ICanBoogie][],
using its autoconfig feature, and provides the following features:

- A synthesizer for the `activerecord_facets` config.
- A `criteria` prototype property for [Model][] instances.
- A `criterion_list` prototype property for [Model][] instances.
- A `fetch_record()` prototype method for [Model][] instances.
- A `fetch_records()` prototype method for [Model][] instances.





## Hinting prototype bindings

Because most features are provided through prototype methods, your favorite editor might
complain about unknown methods, in which case simply use the [ModelBindings][] trait.

The following example demonstrates how to hint your code about a `fetch_records` method.
Notice the type hint in the annotation `Model|ModelBindings`:

```php
<?php

use ICanBoogie\ActiveRecord\Model;
use ICanBoogie\Binding\Facets\ModelBindings;
use ICanBoogie\Facets\RecordCollection;

/**
 * @param Model|ModelBindings
 * 
 * @return RecordCollection
 */
function fetch(Model $model, array $conditions)
{
	return $model->fetch_records($conditions;
}
```





----------





## Requirements

The package requires PHP 5.5 or later.





## Installation

The recommended way to install this package is through [Composer](http://getcomposer.org/):

```
$ composer require icanboogie/bind-facets
```





### Cloning the repository

The package is [available on GitHub](https://github.com/ICanBoogie/bind-facets), its repository can be
cloned with the following command line:

	$ git clone https://github.com/ICanBoogie/bind-facets.git





## Documentation

The package is documented as part of the [ICanBoogie][] framework
[documentation][]. You can generate the documentation for the
package and its dependencies with the `make doc` command. The documentation is generated in the
`build/docs` directory. [ApiGen](http://apigen.org/) is required. The directory can later be
cleaned with the `make clean` command.





## Testing

The test suite is ran with the `make test` command. [PHPUnit](https://phpunit.de/) and
[Composer](http://getcomposer.org/) need to be globally available to run the suite.
The command installs dependencies as required. The `make test-coverage` command runs test suite and
also creates an HTML coverage report in "build/coverage". The directory can later be cleaned with
the `make clean` command.

The package is continuously tested by [Travis CI](http://about.travis-ci.org/).

[![Build Status](https://img.shields.io/travis/ICanBoogie/bind-facets/master.svg)](https://travis-ci.org/ICanBoogie/bind-facets)
[![Code Coverage](https://img.shields.io/coveralls/ICanBoogie/bind-facets/master.svg)](https://coveralls.io/r/ICanBoogie/bind-facets)





## License

**icanboogie/bind-facets** is licensed under the New BSD License - See the [LICENSE](LICENSE) file for details.




[Model]:         http://api.icanboogie.org/activerecord/3.0/class-ICanBoogie.ActiveRecord.Model.html
[documentation]: http://api.icanboogie.org/bind-facets/0.6/
[ModelBindings]: http://api.icanboogie.org/bind-facets/0.6/class-ICanBoogie.Binding.Facets.ModelBindings.html

[icanboogie/module]: https://github.com/ICanBoogie/Module
[icanboogie/facets]: https://github.com/ICanBoogie/Render
[ICanBoogie]:        https://github.com/ICanBoogie/ICanBoogie
