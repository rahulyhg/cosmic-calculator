<?php

namespace Cosmic;

use Cosmic\Calculators\BirthdayCalculator;

/**
 * Class CosmicCalculator
 *
 * @package Cosmic
 */
class CosmicCalculator
{
    /**
     * Calculate the given birthday against different cosmic bodies.
     *
     * @param  int  $year
     * @param  int  $month
     * @param  int  $day
     * @return BirthdayCalculator
     */
    public static function withBirthDay(int $year, int $month, int $day)
    {
        return new BirthdayCalculator($year, $month, $day);
    }
}
