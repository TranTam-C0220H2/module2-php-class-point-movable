<?php
include_once 'Point.php';

class MovablePoint extends Point
{
    protected $xSpeed;
    protected $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setSpeed($xSpeed,$ySpeed) {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed() {
        $array[] = $this->getX();
        $array[] = $this->getY();
        return $array;
    }
    public function toString()
    {
        return parent::toString().', speed = ('.implode(', ',$this->getSpeed()).')';
    }
    public function move(){
        $this->x += $this->getXSpeed();
        $this->y += $this->getYSpeed();
        return '(' . implode(', ', $this->getXY()) . ')';
    }
}