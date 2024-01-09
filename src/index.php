<?php
//require __DIR__ . '../vendor/autoload.php';
require('../vendor/autoload.php');
use SebastianBergmann\Timer\Timer;

$newtimer = new Timer;

$newtimer->start();

foreach (\range(0, 10000) as $i) {
    echo "{$i} \n";
}

echo "\n";

$scriptduration = $newtimer->stop();

var_dump($scriptduration->asSeconds());