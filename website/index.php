<?php

$vegetables[]= 'spinach';
$vegetables[]= 'broccoli';
$vegetables[]= 'asparagus';
$vegetables[]= 'kale';

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title>Home page of our website</title>

</head>

<body>
    <header>
            <div class="header-inner">
        <a href="index.html">
        <img id="LOGO" src="images/1422px-PHP-logo.svg.png"
        alt="LOGO">
        </a>
        <nav>
            <ul>
<li><a href="">Home</a></li> 
<li><a href="">About</a></li>
<li><a href="">Daily<a></li>
<li><a href="">People</a></li>
<li><a href="">Contact</a></li>
<li><a href="">Gallery</a></li>
</ul>
    </nav>
    </div> <!--en d header inner-->
    </header>
    <div id="wrapper">
    <div id="hero">

    </div> <!--end hero-->
<main>

<?php

print_r($vegetables);

?>

</main>
    
<aside>
        
</aside>
<footer>
<ul>
<li>Copyright &copy; 2021</li>
<li>All Rights Reserved </li>
<li><a href="">Terms of use</a></li>
<li><a href="">Web Design by Michito</a></li>
<li><a href="">HTML Validation</a></li>
<li><a href="">CSS Validation</a></li>



</ul>
</footer>
    
    </div> <!--end wrapper-->

</body>
</html>