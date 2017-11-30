<?php
declare(strict_types=1);
/**
 * This file is part of the Enum package.
 * For the full copyright information please view the LICENCE file that was
 * distributed with this package.
 *
 * @copyright Simon Deeley 2017
 */

namespace simondeeley;

use simondeeley\Type\EnumType;
use simondeeley\ImmutableObject;
use simondeeley\Exceptions\InvalidEnumValueException;

/**
 * Eum class
 *
 * Allows you to construct an ENUM type immutable object using class constants.
 * To use, extend this class and add class constants to your child class. These
 * constants will be the enumerable types checked against when you instantiate
 * a new instance of your ENUM object.
 *
 * @author Simon Deeley <s.deeley@icloud.com>
 *
 * @abstract
 * @uses ImmutableObject
 */
abstract class Enum extends ImmutableObject implements EnumType
{
    /**
     * @var mixed $value
     */
    protected $value;

    /**
     * Construct a new ENUM object
     *
     * Takes one paramater which is the type of the ENUM object. If that type
     * does not exist in the ENUM object then an exception is thrown.
     *
     * @param string $value - The value of the ENUM
     * @return void
     * @throws InvalidEnumValueException - Thrown if the value passed is invalid
     */
    final public function __construct(string $type)
    {
        if (false === defined("static::$type") || null === constant("static::$type")) {
           throw new InvalidEnumValueException;
        }

        $this->value = constant($type);
     }

     /**
      * Returns the value of the ENUM
      *
      * @final
      * @return mixed
      */
     final public function getValue()
     {
         return $this->value;
     }

     /**
      * Returns the type of the ENUM
      *
      * @see simondeeley\Type\Type
      * @static
      *
      * @return string - String literal of the enum object
      */
     public static function getType(): string
     {
         return 'ENUM';
     }
}
