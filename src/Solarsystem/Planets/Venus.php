<?php

namespace Cosmic\Solarsystem\Planets;

use Cosmic\Body;
use Cosmic\BodyInterface;

/**
 * Class Venus
 *
 * @package Cosmic\Solarsystem\Planets
 */
class Venus extends Body implements BodyInterface
{
    /**
     * @var float
     */
    protected $daysInYear = 243;
}
