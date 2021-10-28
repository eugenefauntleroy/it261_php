<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/styles.css" type="text/css" rel= "stylesheet">
<title><?php  echo $title;      ?></title>


</head>

<body class="
<?php echo $body;?>
">
