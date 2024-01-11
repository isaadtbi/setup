<?php 
    require('../vendor/autoload.php');
    use Carbon\Carbon;
    printf("Now: %s", Carbon::now());

    $tomorrow = Carbon::now()->addDay();
    $lastWeek = Carbon::now()->subWeek();
    echo "<br />";
    echo $lastWeek->locale('en')->isoFormat('dddd, MMMM Do YYYY, h:mm');
    echo "<br />";
    echo $tomorrow->locale('en')->isoFormat('dddd, MMMM Do YYYY, h:mm');
    echo "<br />";
    echo Carbon::now()->subMinutes(4)->diffForHumans();
?>