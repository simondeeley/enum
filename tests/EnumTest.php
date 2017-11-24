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

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use simondeeley\Enum;
use simondeeley\Type\EnumType;

/**
* Unit tests for Enum class
*
*/
final class EnumTest extends TestCase
{
    public function testCorrectlyInstantiatesEnumObject(): void
    {
        $enum = new class ('FOO') extends Enum
        {
            const FOO = 'FOO';
            const BAR = 'BAR';
        };

        $this->assertTrue($enum instanceof Enum);
        $this->assertTrue($enum instanceof EnumType);
        $this->assertTrue($enum->getType() === 'ENUM (FOO)');
    }

    public function testShouldThrowExceptionWhenInvalidTypePassed(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageRegExp('"BAR"');

        $enum = new class ('BAR') extends Enum
        {
            const FOO = 'FOO';
        };
    }
}
