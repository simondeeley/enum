ENUM object for PHP
=======================

[![Build Status](https://travis-ci.org/simondeeley/enum.svg?branch=master)](https://travis-ci.org/simondeeley/enum)
[![License](https://poser.pugx.org/simondeeley/enum/license?format=flat-square)](https://packagist.org/packages/simondeeley/enum)
[![Latest Unstable Version](https://poser.pugx.org/simondeeley/enum/v/unstable?format=flat-square)](https://packagist.org/packages/simondeeley/enum)
[![Latest Stable Version](https://poser.pugx.org/simondeeley/enum/v/stable?format=flat-square)](https://packagist.org/packages/simondeeley/enum)

A simple library for adding ENUM type objects into any existing or new PHP project.


Requirements
============

* PHP >= 7.1

Installation
============

    composer require simondeeley/enum


Usage
=====

Create a new Enum class using your own chosen enum types

```php
use simondeeley\enum;

class MyAwesomeEnum extends Enum
{
    const FOO = 'FOO';
    const BAR = 'BAR';
}
```

Now you can use your newly designed enum object in your code. Just simply instantiate a new `MyAwesomeEnum` every time you want to use an enum. The constants you defined in the class definition determine what the allowed values of the enum object can take. You can add as many constants as you wish, depending on your design needs.

Every time a new instance of your enum object is created, it requires that you pass a value to it's constructor. If the value passed to the constructor is not one of the pre-determined values then an `InvalidArgumentException` will be thrown.

```php
use Acme\MyAwesomeEnum;

$good = new MyAwesomeEnum('FOO');
$bad = new MyAwesomeEnum('BAZ'); // throws an exception
```

Examples
========
This package provides two enums for out-of-the-box use, [`Boolean`](../blob/master/src/Enums/Boolean.php) and [`Weekday`](../blob/master/src/Enums/Weekday.php). The first, [`Boolean`](../blob/master/src/Enums/Boolean.php) leverages an enum that is either true or false whilst the second is a list of the days of the week.
```php
use simondeeley\Enums\Boolean;
use simondeeley\Enums\Weekday;

$true = new Boolean('TRUE');
$true->getValue(); // returns (bool) true

$tuesday = new Weekday('TUESDAY');
$tuesday->getValue(); // returns (string) "Tuesday"
```

Although not mandatory when building enum objects, both [`Boolean`](../blob/master/src/Enums/Boolean.php) and [`Weekday`](../blob/master/src/Enums/Weekday.php) each provide short-cut static methods to quickly create a new object, for example:

```php
$true = Boolean::true();

$saturday = Weekday::Saturday();
```
