<?php

namespace Cosmic\Solarsystem\Planets;

use Cosmic\Body;
use Cosmic\BodyInterface;

/**
 * Class Mars
 *
 * @package Cosmic\Solarsystem\Planets
 */
class Mars extends Body implements BodyInterface
{
    /**
     * @var float
     */
    protected $daysInYear = 686.98;
}
