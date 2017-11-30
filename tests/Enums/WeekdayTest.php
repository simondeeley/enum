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

use simondeeley\Tests\EnumTestCase;
use simondeeley\Enums\Weekday;

/**
 * Test case for weekday enum object
 *
 * @author Simon Deeley <s.deeley@icloud.com>
 * @final
 */
final class WeekdayTest extends EnumTestCase
{
    /**
     * @var string
     */
    protected static $class = Weekday::class;

    /**
     * Data provider
     *
     * @return array
     */
    final public function validData(): array
    {
        return [
            [ 'MONDAY', 'Monday', 'WEEKDAY' ],
            [ 'TUESDAY', 'Tuesday', 'WEEKDAY' ],
            [ 'WEDNESDAY', 'Wednesday', 'WEEKDAY' ],
            [ 'THURSDAY', 'Thursday', 'WEEKDAY' ],
            [ 'FRIDAY', 'Friday', 'WEEKDAY' ],
            [ 'SATURDAY', 'Saturday', 'WEEKDAY' ],
            [ 'SUNDAY', 'Sunday', 'WEEKDAY' ],
        ];
    }

    /**
     * Data provider
     *
     * @return array
     */
    final public function staticData(): array
    {
        return [
            [ 'Monday', 'Monday', 'WEEKDAY' ],
            [ 'monday', 'Monday', 'WEEKDAY' ],
        ];
    }

    /**
     * Data provider
     *
     * @return array
     */
    final public function invalidData(): array
    {
        return [
            [ 'Monday' ],
            [ 'June' ],
            [ '' ],
        ];
    }
}
