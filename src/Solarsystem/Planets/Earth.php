<?php

namespace Cosmic\Solarsystem\Planets;

use Cosmic\Body;
use Cosmic\BodyInterface;

/**
 * Class Earth
 *
 * @package Cosmic\Solarsystem\Planets
 */
class Earth extends Body implements BodyInterface
{
    /**
     * @var float
     */
    protected $daysInYear = 365.26;
}
