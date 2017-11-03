ENUM object for PHP
=======================

[![Build Status](https://travis-ci.org/simondeeley/enum.svg?branch=master)](https://travis-ci.org/simondeeley/enum)
[![Latest Stable Version](https://poser.pugx.org/buonzz/laravel-4-freegeoip/v/stable.svg)](https://packagist.org/packages/buonzz/laravel-4-freegeoip) [![Total Downloads](https://poser.pugx.org/buonzz/laravel-4-freegeoip/downloads.svg)](https://packagist.org/packages/buonzz/laravel-4-freegeoip)
[![Latest Unstable Version](https://poser.pugx.org/buonzz/laravel-4-freegeoip/v/unstable.svg)](https://packagist.org/packages/buonzz/laravel-4-freegeoip) [![License](https://poser.pugx.org/buonzz/laravel-4-freegeoip/license.svg)](https://packagist.org/packages/buonzz/laravel-4-freegeoip)

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

Now you can use your newly designed enum object in your code. Just simply instantiate a new `MyAwesomeEnum` everytime you want to use an enum. The constants you defined in the class definition determine what the allowed values of the enum object can take. You can add as many constants as you wish, depending on your design needs.

Every time a new instance of your enum object is created, it requires that you pass a value to it's constructor. If the value passed to the constructor is not one of the pre-determined values then an `InvalidArgumentException` will be thrown.

```php
use Acme\MyAwesomeEnum;

$good = new MyAwesomeEnum('FOO');
$bad = new MyAwesomeEnum('BAZ'); // throws an exception
```
