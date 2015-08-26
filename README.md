# xml-primitive-types
Library containing PHP classes for XML Primitives and Derived Primitives

This library is a work in progress.

## Intent

The purpose of this library is to provide simple objects to represent XML primitive types.  There are a myriad
of ways it can be used.

## Usage

Below is a basic example usage script:

```php
<?php

require 'path to composer autoload file';

$factory = new \DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory();

$xmlInt = $factory->getPrimitiveType('int', 500);

var_dump($xmlInt);
```

## Future Enhancements

- Ability to add type objects ad-hoc
- Support for XML Facets & optional value validation

## Comments

If you find this lib useful and want to help out development, or have a way to improve a component, please do so!
This is a very early implementation, and features will come as I have time.  Any help / comments are welcome.