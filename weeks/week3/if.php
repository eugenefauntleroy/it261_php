<?php
$temp = 90;
if($temp <= 90) {
    echo 'not that hot';
} else{
    echo 'it\'s hot';
}

echo '<br>';

$temp = 99;
if($temp <= 78) {
    echo 'it is livable';
} elseif($temp <= 85) {
echo 'it\'s getting hotter';
} else {
    echo 'it\'s really hot';
}

// if my sales are over 800000, i will make 10% bonus of my base salary
// if my sales are greater or equal to 6000000, i will make a bones of 5%
echo '<br>';
$sales = 800000;
$salary = 200000;
if ($sales >= 800000) {
$salary *= 1.10;
    echo $salary; 
} elseif($sales >= 600000) {
$alary *= 1.05;
    echo $salary;
} else {
    echo $salary;
}

echo '<br>';

?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>switch</title>
        <meta name="author" content="" />
        <meta charset="utf-8" />
        <meta name="" content="width=device-width,inital-scale=1" />
        <meta name="" content="noindex,nofollow" />
        <!-- <link href="css/style.css" rel="stylesheet" /> -->
        <style>
            body {
                background-color: teal;
                color: black;
            }
        </style>

    </head>
    <body>
    </body>
    
</html>