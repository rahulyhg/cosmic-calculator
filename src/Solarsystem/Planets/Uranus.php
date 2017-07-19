<?php

namespace Cosmic\Solarsystem\Planets;

use Cosmic\Body;
use Cosmic\BodyInterface;

/**
 * Class Uranus
 *
 * @package Cosmic\Solarsystem\Planets
 */
class Uranus extends Body implements BodyInterface
{
    /**
     * @var float
     */
    protected $daysInYear = 30687.15;
}
