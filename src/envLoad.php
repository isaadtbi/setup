<?php 
    //testing package that loads env files using composers package, vlucas/phpdotenv 
    require('../vendor/autoload.php');

    //point to the directory of the env files and then load it as an immutable var
    $dotenv = Dotenv\Dotenv::createImmutable('../');
    $dotenv->load();


    //assign to variable from env file. $_SERVER is to reference as a super global and $_ENV is loading it as is.
    $s3_bucket = $_SERVER['S3_BUCKET'];
    $key = $_SERVER['SECRET_KEY'];

    echo $s3_bucket, ' ', $key;
?>