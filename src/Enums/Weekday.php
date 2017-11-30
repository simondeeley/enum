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

use simondeeley\Enum;

/**
 * Example of an enum providing the days of the week
 *
 * @author Simon Deeley <s.deeley@icloud.com>
 * @final
 */
final class Weekday extends Enum
{
    const MONDAY = 'Monday';
    const TUESDAY = 'Tuesday';
    const WEDNESDAY = 'Wednesday';
    const THURSDAY = 'Thursday';
    const FRIDAY = 'Friday';
    const SATURDAY = 'Saturday';
    const SUNDAY = 'Sunday';

    /**
     * Returns the type of this enum
     *
     * @return string
     */
    final public static function getType(): string
    {
        return 'WEEKDAY';
    }
}
