<?php

namespace Cosmic;

/**
 * Interface BodyInterface
 *
 * @package Cosmic
 */
interface BodyInterface
{
    /**
     * Provide the days in a year around it's star.
     *
     * @return float
     */
    public function yearInDays(): float;
}
