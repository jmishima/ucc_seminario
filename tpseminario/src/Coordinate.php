<?php


class Coordinate {

	private $xPos;

	private $yPos;
	

	public function __construct($xPos, $yPos) {

		$this->xPos = $xPos;
		$this->yPos = $yPos;
	}

	public function getXPos() {
		return $this->xPos;
	}

	public function getYPos() {
		return $this->yPos;
	}

	public function printPosition() {

		print 'X: '  . $this->xPos . ' Y: ' . $this->yPos;
	}

	public function moveOnX($qty) {
		$this->xPos = $this->xPos + $qty;
	}

	public function moveOnY($qty) {
		$this->yPos = $this->yPos + $qty;
	}

	public function moveTo($xPos, $yPos) {
		$this->xPos = $xPos;
		$this->yPos = $yPos;
	}
}