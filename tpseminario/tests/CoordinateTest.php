<?php


class CoordinateTest extends PHPUnit_Framework_TestCase {


	public function testMoveOnX() {
		$coord = new Coordinate(0,0);
		$oldPos = $coord->getXPos();
		$inc = 2;
		$coord->moveOnX($inc);
		$newPos = $coord->getXPos();
		$expectedPos = $oldPos + $inc;
		$this->assertEquals($newPos, $expectedPos);
	}


	public function testMoveOnY() {
		$coord = new Coordinate(0,0);
		$oldPos = $coord->getYPos();
		$inc = 2;
		$coord->moveOnY($inc);
		$newPos = $coord->getYPos();
		$expectedPos = $oldPos + $inc;
		$this->assertEquals($newPos, $expectedPos);
	}

}