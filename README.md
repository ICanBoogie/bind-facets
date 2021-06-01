# bind-facets

[![Release](https://img.shields.io/packagist/v/icanboogie/bind-facets.svg)](https://packagist.org/packages/icanboogie/bind-facets)
[![Build Status](https://img.shields.io/github/workflow/status/ICanBoogie/bind-facets/test)](https://github.com/ICanBoogie/bind-facets/actions?query=workflow%3Atest)
[![Code Quality](https://img.shields.io/scrutinizer/g/ICanBoogie/bind-facets.svg)](https://scrutinizer-ci.com/g/ICanBoogie/bind-facets)
[![Code Coverage](https://img.shields.io/coveralls/ICanBoogie/bind-facets.svg)](https://coveralls.io/r/ICanBoogie/bind-facets)
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

The package requires PHP 7.2 or later.





## Installation

```bash
composer require icanboogie/bind-facets
```





## Documentation

The package is documented as part of the [ICanBoogie][] framework
[documentation][]. You can generate the documentation for the
package and its dependencies with the `make doc` command. The documentation is generated in the
`build/docs` directory. [ApiGen](http://apigen.org/) is required. The directory can later be
cleaned with the `make clean` command.





## Testing

Run `make test-container` to create and log into the test container, then run `make test` to run the
test suite. Alternatively, run `make test-coverage` to run the test suite with test coverage. Open
`build/coverage/index.html` to see the breakdown of the code coverage.





## License

**icanboogie/bind-facets** is released under the [New BSD License](LICENSE).




[Model]:         https://icanboogie.org/api/activerecord/master/class-ICanBoogie.ActiveRecord.Model.html
[documentation]: https://icanboogie.org/api/bind-facets/master/
[ModelBindings]: https://icanboogie.org/api/bind-facets/master/class-ICanBoogie.Binding.Facets.ModelBindings.html

[icanboogie/module]: https://github.com/ICanBoogie/Module
[icanboogie/facets]: https://github.com/ICanBoogie/Render
[ICanBoogie]:        https://github.com/ICanBoogie/ICanBoogie
