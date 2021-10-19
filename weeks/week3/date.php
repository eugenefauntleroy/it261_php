<?php
// Prints the ymdtampm
echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("H:i");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date("H:i");
echo '<br>';
echo date("h:i");

$time =  date("H:i");
if($time <= 11) {
 echo '<h2 style="color:thistle;">Good Morning, Pablo</h2>';  
} elseif($time <= 16) {
echo '<h2 style="color:pink;">Good Afternoon</h2>';
} else {
echo '<h2 style="color:grey;">Good Evening</h2>';
}

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
                background-color: grey;
                color: black;
            }
            </style>

    </head>
    <body>
    </body>
    
</html>