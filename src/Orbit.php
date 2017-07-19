<?php

namespace Cosmic;

use Carbon\Carbon;
use Cosmic\Solarsystem\Planets\Earth;
use Cosmic\Solarsystem\Planets\Jupiter;
use Cosmic\Solarsystem\Planets\Mars;
use Cosmic\Solarsystem\Planets\Mercury;
use Cosmic\Solarsystem\Planets\Saturn;
use Cosmic\Solarsystem\Planets\Venus;
use Cosmic\Solarsystem\Planets\Neptune;
use Cosmic\Solarsystem\Planets\Uranus;
use Cosmic\Traits\CalculatesPlanetYears;

/**
 * Class Orbit
 *
 * @package Cosmic
 */
class Orbit
{
    use CalculatesPlanetYears;

    /**
     * @var Carbon
     */
    protected $birthday;

    /**
     * @var BodyInterface
     */
    protected $referenceBody;

    /**
     * Age constructor.
     *
     * @param int           $year
     * @param int           $month
     * @param int           $day
     * @param BodyInterface $referenceBody
     */
    public function __construct(int $year, int $month, int $day, BodyInterface $referenceBody)
    {
        $this->birthday      = Carbon::createFromDate($year, $month, $day);
        $this->referenceBody = $referenceBody;
    }

    /**
     * Get the given birthday in earth or another planets years.
     *
     * @param  BodyInterface  $body
     * @return float
     */
    protected function orbits(BodyInterface $body = null): float
    {
        $years = $this->birthday->diffInYears();

        if ($body) {
            // Display only 2 decimals.
            return number_format($this->bodyYears($this->referenceBody, $body, $years), 2, '.', '');
        }

        return $years;
    }

    /**
     * Get the given birthday in Mercury orbits.
     *
     * @return float
     */
    public function mercury(): float
    {
        return $this->orbits(new Mercury);
    }

    /**
     * Get the given birthday in Venus orbits.
     *
     * @return float
     */
    public function venus(): float
    {
        return $this->orbits(new Venus);
    }

    /**
     * Get the given birthday in Earth orbits.
     *
     * @return float
     */
    public function earth(): float
    {
        return $this->orbits(new Earth);
    }

    /**
     * Get the given birthday in Mars orbits.
     *
     * @return float
     */
    public function mars(): float
    {
        return $this->orbits(new Mars);
    }

    /**
     * Get the given birthday in Jupiter orbits.
     *
     * @return float
     */
    public function jupiter(): float
    {
        return $this->orbits(new Jupiter);
    }

    /**
     * Get the given birthday in Saturn orbits.
     *
     * @return float
     */
    public function saturn(): float
    {
        return $this->orbits(new Saturn);
    }

    /**
     * Get the given birthday in Uranus orbits.
     *
     * @return float
     */
    public function uranus(): float
    {
        return $this->orbits(new Uranus);
    }

    /**
     * Get the given birthday in Neptune orbits.
     *
     * @return float
     */
    public function neptune(): float
    {
        return $this->orbits(new Neptune);
    }
}
