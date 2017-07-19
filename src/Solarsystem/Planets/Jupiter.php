<?php

namespace Cosmic\Solarsystem\Planets;

use Cosmic\Body;
use Cosmic\BodyInterface;

/**
 * Class Jupiter
 *
 * @package Cosmic\Solarsystem\Planets
 */
class Jupiter extends Body implements BodyInterface
{
    /**
     * @var float
     */
    protected $daysInYear = 4332.71;
}
