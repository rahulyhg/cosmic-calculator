<?php

namespace Cosmic\Traits;

use Cosmic\BodyInterface;

/**
 * Trait CalculatesPlanetYears
 *
 * @package Cosmic\Traits
 */
trait CalculatesPlanetYears
{
    /**
     * Calculate the yearly difference between two bodies.
     *
     * @param  BodyInterface  $referenceBody
     * @param  BodyInterface  $body
     * @param  int            $years
     * @return float
     */
    public function bodyYears(BodyInterface $referenceBody, BodyInterface $body, int $years): float
    {
        $daysAtReference = $referenceBody->yearInDays();
        $daysAtBody      = $body->yearInDays();
        $innerPlanet     = $daysAtReference > $daysAtBody;

        $difference = ($innerPlanet) ? $daysAtReference / $daysAtBody : $daysAtBody / $daysAtReference;

        return ($innerPlanet) ? $years * $difference : $years / $difference;
    }
}
