# bind-facets

[![Release](https://img.shields.io/packagist/v/icanboogie/bind-facets.svg)](https://packagist.org/packages/icanboogie/bind-facets)
[![Build Status](https://img.shields.io/travis/ICanBoogie/bind-facets/master.svg)](http://travis-ci.org/ICanBoogie/bind-facets)
[![HHVM](https://img.shields.io/hhvm/icanboogie/bind-facets.svg)](http://hhvm.h4cc.de/package/icanboogie/bind-facets)
[![Code Quality](https://img.shields.io/scrutinizer/g/ICanBoogie/bind-facets/master.svg)](https://scrutinizer-ci.com/g/ICanBoogie/bind-facets)
[![Code Coverage](https://img.shields.io/coveralls/ICanBoogie/bind-facets/master.svg)](https://coveralls.io/r/ICanBoogie/bind-facets)
[![Packagist](https://img.shields.io/packagist/dt/icanboogie/bind-facets.svg)](https://packagist.org/packages/icanboogie/bind-facets)

The **icanboogie/bind-facets** package binds [icanboogie/facets][] to [ICanBoogie][], using its
autoconfig feature.





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
[documentation](http://icanboogie.org/docs/). You can generate the documentation for the package and its dependencies with the `make doc` command. The documentation is generated in the `build/docs` directory. [ApiGen](http://apigen.org/) is required. The directory can later be cleaned with the `make clean` command.





## Testing

The test suite is ran with the `make test` command. [PHPUnit](https://phpunit.de/) and [Composer](http://getcomposer.org/) need to be globally available to run the suite. The command installs dependencies as required. The `make test-coverage` command runs test suite and also creates an HTML coverage report in "build/coverage". The directory can later be cleaned with the `make clean` command.

The package is continuously tested by [Travis CI](http://about.travis-ci.org/).

[![Build Status](https://img.shields.io/travis/ICanBoogie/bind-facets/master.svg)](https://travis-ci.org/ICanBoogie/bind-facets)
[![Code Coverage](https://img.shields.io/coveralls/ICanBoogie/bind-facets/master.svg)](https://coveralls.io/r/ICanBoogie/bind-facets)





## License

**icanboogie/bind-facets** is licensed under the New BSD License - See the [LICENSE](LICENSE) file for details.





[icanboogie/module]: https://github.com/ICanBoogie/Module
[icanboogie/facets]: https://github.com/ICanBoogie/Render
[icanboogie/view]: https://github.com/ICanBoogie/View
[ICanBoogie]: https://github.com/ICanBoogie/ICanBoogie
[ApplicationTemplateResolver]: http://icanboogie.org/docs/class-ICanBoogie.Binding.Render.ApplicationTemplateResolver.html
[Core]: http://icanboogie.org/docs/class-ICanBoogie.Core.html
[BasicTemplateResolver]: http://icanboogie.org/docs/class-ICanBoogie.Render.BasicTemplateResolver.html
[TemplateResolver\AlterEvent]: http://icanboogie.org/docs/class-ICanBoogie.Render.TemplateResolver.AlterEvent.html
