<?php
//require __DIR__ . '../vendor/autoload.php';
require('../vendor/autoload.php');

//A timer to check how long something takes to run
use SebastianBergmann\Timer\Timer;

$newtimer = new Timer;


//start tracking
$newtimer->start();

foreach (\range(0, 10) as $i) {
    echo "{$i} \n";
}

$scriptduration = $newtimer->stop();
//stop tracking
echo "<br/>";
var_dump($scriptduration->asMilliseconds());