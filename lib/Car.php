<?php

class Car {
	private $wheels = 4;
	private $manufacturer;
	private $kilometrage;
	private $airbag;
	private $abs = false;
	private $doors;

	public function __construct($manu,$door) {
		$this->manufacturer = $manu;
		$this->doors = $door;
	}

	public function getWheels() {
		return $this->wheels;
	}
	public function setWeels($weel){
		return $this->wheels = $weel;
	}

	public function getManufacturer() {
		return $this->manufacturer;
	}


	public function setManufacturer($name) {
		$this->manufacturer = $name;
	}

	public function getKilometrage() {
		return $this->kilometrage;
	}
	public function setKilometrage($nbKilometre) {
		return $this->kilometrage = $nbKilometre;
	}
	public function getAirbag() {
		return $this->airbag;
	}
	public function setAirbag($available) {
		$this->airbag = $available;
	}
	public function getAbs() {
		return $this->abs;
	}
	public function setAbs	($yesOrNot) {
		return $this->abs = $yesOrNot;
	}
	public function getDoors() {
		return $this->doors;
	}
	public function setDoors($nbDoors) {
		return $this->doors = $nbDoors;
	}
}