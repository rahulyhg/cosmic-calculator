<?php

require __DIR__ . '/../vendor/autoload.php';
$calculate = \Cosmic\CosmicCalculator::withBirthDay(1988, 3, 19)->from(new \Cosmic\Solarsystem\Planets\Earth);

echo 'Earth age: ' . $calculate->age()->onEarth();
echo '<br>';
echo 'Mercury orbits: ' . $calculate->orbits()->mercury();
echo '<br>';
echo 'Venus age: ' . $calculate->age()->onVenus();
echo '<br>';
echo 'Mars age: ' . $calculate->age()->onMars();
echo '<br>';
echo 'Jupiter orbits: ' . $calculate->orbits()->jupiter();
echo '<br>';
echo 'Saturn orbits sinds you where born: ' . $calculate->orbits()->saturn();
echo '<br>';
echo 'Uranus orbits sinds you where born: ' . $calculate->orbits()->uranus();
echo '<br>';
echo 'Neptune orbits sinds you where born: ' . $calculate->orbits()->neptune();
echo '<br>';
echo '<br>';

$calculate = \Cosmic\CosmicCalculator::withBirthDay(1988, 3, 19)->from(new \Cosmic\Solarsystem\Planets\Jupiter);

echo 'Earth age: ' . $calculate->age()->onEarth();
echo '<br>';
echo 'Mercury orbits: ' . $calculate->orbits()->mercury();
echo '<br>';
echo 'Venus age: ' . $calculate->age()->onVenus();
echo '<br>';
echo 'Mars age: ' . $calculate->age()->onMars();
echo '<br>';
echo 'Jupiter orbits: ' . $calculate->orbits()->jupiter();
echo '<br>';
echo 'Saturn orbits sinds you where born: ' . $calculate->orbits()->saturn();
echo '<br>';
echo 'Uranus orbits sinds you where born: ' . $calculate->orbits()->uranus();
echo '<br>';
echo 'Neptune orbits sinds you where born: ' . $calculate->orbits()->neptune();
echo '<br>';
echo '<br>';

$calculate = \Cosmic\CosmicCalculator::withBirthDay(1988, 3, 19)->from(new \Cosmic\Solarsystem\Planets\Mars);

echo 'Earth age: ' . $calculate->age()->onEarth();
echo '<br>';
echo 'Mercury orbits: ' . $calculate->orbits()->mercury();
echo '<br>';
echo 'Venus age: ' . $calculate->age()->onVenus();
echo '<br>';
echo 'Mars age: ' . $calculate->age()->onMars();
echo '<br>';
echo 'Jupiter orbits: ' . $calculate->orbits()->jupiter();
echo '<br>';
echo 'Saturn orbits sinds you where born: ' . $calculate->orbits()->saturn();
echo '<br>';
echo 'Uranus orbits sinds you where born: ' . $calculate->orbits()->uranus();
echo '<br>';
echo 'Neptune orbits sinds you where born: ' . $calculate->orbits()->neptune();
echo '<br>';
echo '<br>';
