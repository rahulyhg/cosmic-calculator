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
 * Class Age
 *
 * @package Cosmic
 */
class Age
{
    use CalculatesPlanetYears;

    /**
     * @var Carbon
     */
    protected $birthday;

    /**
     * @var \Cosmic\BodyInterface
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
     * @return int
     */
    protected function years(BodyInterface $body = null): int
    {
        $years = $this->birthday->diffInYears();

        if ($body) {
            return $this->bodyYears($this->referenceBody, $body, $years);
        }

        return $years;
    }

    /**
     * Get the given birthday in Mercury years.
     *
     * @return int
     */
    public function onMercury(): int
    {
        return $this->years(new Mercury);
    }

    /**
     * Get the given birthday in Venus years.
     *
     * @return int
     */
    public function onVenus(): int
    {
        return $this->years(new Venus);
    }

    /**
     * Get the given birthday in Earth years.
     *
     * @return int
     */
    public function onEarth(): int
    {
        return $this->years(new Earth);
    }

    /**
     * Get the given birthday in Mars years.
     *
     * @return int
     */
    public function onMars(): int
    {
        return $this->years(new Mars);
    }

    /**
     * Get the given birthday in Jupiter years.
     *
     * @return int
     */
    public function onJupiter(): int
    {
        return $this->years(new Jupiter);
    }

    /**
     * Get the given birthday in Saturn years.
     *
     * @return int
     */
    public function onSaturn(): int
    {
        return $this->years(new Saturn);
    }

    /**
     * Get the given birthday in Uranus years.
     *
     * @return int
     */
    public function onUranus(): int
    {
        return $this->years(new Uranus);
    }

    /**
     * Get the given birthday in Neptune years.
     *
     * @return int
     */
    public function onNeptune(): int
    {
        return $this->years(new Neptune);
    }
}
