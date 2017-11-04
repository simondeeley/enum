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

use simondeeley\Type;

/**
 * Enum Type
 *
 * Defines a set of methods that must be implemented in any object that is
 * of the type 'ENUM'
 */
interface EnumType extends Type
{
    /**
     * Return the ENUM type
     *
     * Should return a string literal of the ENUM object which represents
     * which value the object has been assigned to.
     *
     * @return string
     */
    public function __toString();
}
