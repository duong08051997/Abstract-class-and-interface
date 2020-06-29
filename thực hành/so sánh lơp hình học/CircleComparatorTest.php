<?php

include_once ("CircleComparator.php");

$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 10);
$circleComparator = new CircleComparator();
echo $circleComparator->compare($circleOne,$circleTwo);
