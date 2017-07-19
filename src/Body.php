<?php

namespace Cosmic;

/**
 * Class Body
 *
 * @package Cosmic
 */
class Body
{
    /**
     * The number of days in the bodies year around its star.
     *
     * @var float
     */
    protected $daysInYear = 1;

    /**
     * Provide the days in a year around it's star.
     *
     * @return float
     */
    public function yearInDays(): float
    {
        return $this->daysInYear;
    }
}
