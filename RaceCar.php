<?php

include_once('RaceCarInterface.php');
include_once('EngineInterface.php');

class RaceCar implements RaceCarInterface {
	private $VMax;
	private $acceleration;
	private $engine;
	
	public function __construct($VMax, $acceleration, EngineInterface $engine) {
		$this->VMax = $VMax;
		$this->acceleration = $acceleration;
		$this->engine = $engine;
	}
	
	public function getVMax() {
		return $this->VMax;
	}
	
	public function getAcceleration() {
		return $this->acceleration;
	}
}

?>