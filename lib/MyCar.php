<?php

class MyCar extends Car {
	private $color;
	private $type;

	public function __construct($colors,$sport,$nbroue){
		$this->color = $colors;
		$this->type = $sport;
		parent::getWheels($nbroue);

	}
	public function getColor() {
		return $this->color;
	}
	public function setColor($color){
		return $this->color = $color ;
	}

	public function getType() {
		return $this->type;
	}
	public function setType($types){
		return  $this->type = $types;
	}

}
