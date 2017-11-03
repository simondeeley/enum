<?php
declare(strict_types=1);
/**
 * This file is part of the Enum package.
 * For the full copyright information please view the LICENCE file that was
 * distributed with this package.
 *
 * @author    Simon Deeley <s.deeley@icloud.com>
 * @copyright Simon Deeley 2017
 */

namespace simondeeley;

use InvalidArgumentException;

/**
 * Eum class
 *
 * Allows you to construct an ENUM type immutable object using class constants.
 * To use, extend this class and add class constants to your child class. These
 * constants will be the enumerable types checked against when you instantiate
 * a new instance of your ENUM object.
 *
 * @abstract
 */
abstract class Enum implements EnumType
{
    /**
     * @var string $type
     */
    protected $type;

    /**
     * Construct a new ENUM object
     *
     * Takes one paramater which is the type of the ENUM object. If that type
     * does not exist in the ENUM object then an exception is thrown.
     *
     * @param string $value
     * @return void
     * @throws InvalidArgumentException
     */
    final public function __construct(string $type)
    {
        if (null === constant("static::$type")) {
           throw new InvalidArgumentException(sprintf(
             'The type "%s" is not valid for the ENUM %s',
             $type,
             get_called_class()
           ));
        }

        $this->type = $type;
     }

     /**
      * Returns the ENUM type
      *
      * Simply returns the value of the ENUM object, which is a string literal.
      *
      * @return string
      */
     final public function __toString(): string
     {
        return $this->type;
     }
}
