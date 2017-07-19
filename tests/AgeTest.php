<?php

class AgeTest extends \PHPUnit\Framework\TestCase
{
    public function testAgeInstance()
    {
        $age = new \Cosmic\Age(1988, 3, 19, new \Cosmic\Solarsystem\Planets\Earth());

        $this->assertInstanceOf(\Cosmic\Age::class, $age);
    }

    public function testAgeInEarthYears()
    {
        $age = new \Cosmic\Age(1988, 3, 19, new \Cosmic\Solarsystem\Planets\Earth());

        $years = \Carbon\Carbon::createFromDate(1988, 3, 19)->diffInYears();

        $this->assertSame($years, $age->onEarth());
    }

    public function testAgeInMercuryYears()
    {
        $age = new \Cosmic\Age(1988, 3, 19, new \Cosmic\Solarsystem\Planets\Earth());

        $this->assertSame(120, $age->onMercury());
    }

    public function testAgeInVenusYears()
    {
        $age = new \Cosmic\Age(1988, 3, 19, new \Cosmic\Solarsystem\Planets\Earth());

        $this->assertSame(43, $age->onVenus());
    }

    public function testAgeInMarsYears()
    {
        $age = new \Cosmic\Age(1988, 3, 19, new \Cosmic\Solarsystem\Planets\Earth());

        $this->assertSame(15, $age->onMars());
    }

    public function testAgeInJupiterYears()
    {
        $age = new \Cosmic\Age(1988, 3, 19, new \Cosmic\Solarsystem\Planets\Earth());

        $this->assertSame(2, $age->onJupiter());
    }

    public function testAgeInSaturnYears()
    {
        $age = new \Cosmic\Age(1987, 3, 19, new \Cosmic\Solarsystem\Planets\Earth());

        $this->assertSame(1, $age->onSaturn());
    }

    public function testAgeInUranusYears()
    {
        $age = new \Cosmic\Age(1987, 3, 19, new \Cosmic\Solarsystem\Planets\Earth());

        $this->assertSame(0, $age->onUranus());
    }

    public function testAgeInNeptuneYears()
    {
        $age = new \Cosmic\Age(1987, 3, 19, new \Cosmic\Solarsystem\Planets\Earth());

        $this->assertSame(0, $age->onNeptune());
    }
}
