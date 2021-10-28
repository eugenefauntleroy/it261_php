<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['/it261/website/index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['project.php']= 'Project';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Home page of out it261 website';
    $body = 'home';
    $headline = 'Home page of the home pages';
    break;
    case 'about.php':
    $title = 'About page of our it261 website';
    $body = 'about inner';
    $headline = 'About';
    break;
    case 'daily.php':
    $title = 'Daily page of our it261 website';
    $body = 'daily inner';
    $headline = 'Homework';
    break;
    case 'project.php':
    $title = 'Project page of our it261 website';
    $body = 'project inner';
    $headline = 'Project page';
    break;
    case 'contact.php':
    $title = 'Contact page of our it261 website';
    $body = 'contact inner';
    $headline = 'Contact';
    break;
    case 'gallery.php':
    $title = 'Gallery page of our it261 website';
    $headline = 'Gallery';
    break;
}

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
    <header>
        <div class="header-inner">
        <a href="index.html">
        <img id="LOGO" src="images/1422px-PHP-logo.svg.png"
        alt="LOGO">
        </a>
        <nav>
            
       <!-- <ul>
<li><a href="">Home</a></li> 
<li><a href="">About</a></li>
<li><a href="">Daily</a></li>
<li><a href="">People</a></li>
<li><a href="">Contact</a></li>
<li><a href="">Gallery</a></li>
</ul> -->

<ul>
    <?php
    foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        echo '
        <li><a href="'.$key.'" class="current">'.$value.'</a></li>
        ';
    } else {
        echo '
        <li><a href="'.$key.'">'.$value.'</a></li>
    ';
    } 
    }
    ?>
</ul>
    </nav>
    </div> <!--en d header inner-->
    </header>