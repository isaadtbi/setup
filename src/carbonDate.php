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
    echo "<br />";
    $year = 2024; $month = 1; $day = 12; $hour = 2; $minute = 30; $second = 15; $tz = 'America/Toronto';
    echo Carbon::createFromDate($year, $month, $day, $tz)."<br />";
    echo Carbon::createMidnightDate($year, $month, $day, $tz)."<br />";
    echo Carbon::createFromTime($hour, $minute, $second, $tz)."<br />";
    echo Carbon::createFromTimeString("$hour:$minute:$second", $tz)."<br />";
    echo Carbon::create($year, $month, $day, $hour, $minute, $second, $tz)."<br />";
    echo Carbon::createFromTimeString('2:00:00', 'America/Toronto');

    
?>