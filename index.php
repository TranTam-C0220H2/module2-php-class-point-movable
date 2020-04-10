<?php
include_once 'class/Point.php';
include_once 'class/MovablePoint.php';
$point = new Point(3,4);
echo $point->toString();
$movablePoint = new MovablePoint(5,6,1,2);
echo $movablePoint->toString();
echo $movablePoint->move();