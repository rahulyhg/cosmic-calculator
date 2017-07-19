<?php

namespace Cosmic\Solarsystem\Planets;

use Cosmic\Body;
use Cosmic\BodyInterface;

/**
 * Class Neptune
 *
 * @package Cosmic\Solarsystem\Planets
 */
class Neptune extends Body implements BodyInterface
{
    /**
     * @var float
     */
    protected $daysInYear = 60190;
}
