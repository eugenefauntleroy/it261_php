<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/styles.css" type="text/css" rel= "stylesheet">
<title><?php  echo $title;      ?></title>

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


<?php
echo my_nav($nav);
?>


</ul>
        </nav>
        </div> <!--END header-inner-->
    </header>