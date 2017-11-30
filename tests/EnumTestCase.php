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

namespace simondeeley\Tests;

use PHPUnit\Framework\TestCase;
use simondeeley\Type\EnumType;

/**
* Base test case for Enum tests
*
* @author Simon Deeley <s.deeley@icloud.com>
*/
abstract class EnumTestCase extends TestCase
{
    /**
     * @var string
     */
    protected static $class;

    /**
     * Test correct insantiation of ENUM object
     *
     * @test
     * @dataProvider validData
     * @final
     * @param string $constant - the constant to set the enum
     * @param mixed $expected - the value of the enum
     * @param string $type - the expected enum type
     * @return void
     */
    final public function shouldCorrectlyInstantiateEnumObject(string $constant, $expected, string $type): void
    {
        $enum = new static::$class($constant);

        $this->assertInstanceOf(EnumType::class, $enum);
        $this->assertEquals($expected, $enum->getValue());
        $this->assertEquals($type, $enum::getType());
    }

    /**
     * Test should correctly instantiate object statically
     *
     * @test
     * @dataProvider staticData
     * @param string $method - the method to call statically
     * @return void
     */
    final public function shouldCorrectlyInstantiateObjectStatically(string $method): void
    {
        $enum = call_user_func(static::$class, "::$method");

        $this->assertInstanceOf(EnumType::class, $enum);
        $this->assertEquals($expected, $enum->getValue());
        $this->assertEquals($type, $enum::getType());
    }

    /**
     * Test should throw exception when invalid constant passed
     *
     * @test
     * @dataProvider invalidData
     * @expectedException simondeeley\Exceptions\InvalidEnumValueException
     * @expectedExceptionMessage Argument passed to ENUM constructor is not an allowed type
     * @final
     * @param string $constant
     * @return void
     */
    final public function shouldThrowExceptionWhenInvalidTypePassed(string $constant): void
    {
        $enum = new static::$class($constant);
    }

    /**
     * Data provider
     *
     * @return array
     */
    abstract public function validData(): array;

    /**
     * Data provider
     *
     * @return array
     */
    abstract public function staticData(): array;

    /**
     * Data provider
     *
     * @return array
     */
    abstract public function invalidData(): array;
}
