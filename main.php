<?php

include_once('RaceCar.php');
include_once('Engine.php');

$engine = new Engine(40);
$raceCar = new RaceCar(200, 100, $engine);
?>