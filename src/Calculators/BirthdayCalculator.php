<?php

namespace Cosmic\Calculators;

use Cosmic\Age;
use Cosmic\Orbit;
use Cosmic\BodyInterface;

/**
 * Class BirthdayCalculator
 *
 * @package Cosmic\Calculators
 */
class BirthdayCalculator
{
    /**
     * @var int
     */
    protected $year;

    /**
     * @var int
     */
    protected $month;

    /**
     * @var int
     */
    protected $day;

    /**
     * @var BodyInterface
     */
    protected $referenceBody;

    /**
     * BirthdayCalculator constructor.
     *
     * @param int $year
     * @param int $month
     * @param int $day
     */
    public function __construct(int $year, int $month, int $day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    /**
     * @param  \Cosmic\BodyInterface  $body
     */
    public function from(BodyInterface $body)
    {
        $this->referenceBody = $body;

        return $this;
    }

    /**
     * @return Age
     */
    public function age()
    {
        return new Age($this->year, $this->month, $this->day, $this->referenceBody);
    }

    /**
     * @return Orbit
     */
    public function orbits()
    {
        return new Orbit($this->year, $this->month, $this->day, $this->referenceBody);
    }
}
