<?php

namespace Cosmic\Solarsystem\Planets;

use Cosmic\Body;
use Cosmic\BodyInterface;

/**
 * Class Mercury
 *
 * @package Cosmic\Solarsystem\Planets
 */
class Mercury extends Body implements BodyInterface
{
    /**
     * @var float
     */
    protected $daysInYear = 88.0;
}
