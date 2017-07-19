<?php

namespace Cosmic\Solarsystem\Planets;

use Cosmic\Body;
use Cosmic\BodyInterface;

/**
 * Class Saturn
 *
 * @package Cosmic\Solarsystem\Planets
 */
class Saturn extends Body implements BodyInterface
{
    /**
     * @var float
     */
    protected $daysInYear = 10757.73;
}
