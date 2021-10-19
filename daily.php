<?php
if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }
switch($today) {
    case 'Sunday' :
    $music = '<h2>Sunday is for sleeping in & Hip Hop!</h2>';
    $pic = 'images/genreimages/black_elvis.jpg';
    $alt = 'Kool Keith';
    $color = 'style="background-color:thistle"';
    $content = 'Keith Matthew Thornton, better known by his stage name Kool Keith, is an American rapper and record producer from The Bronx, New York known for his surreal, abstract and often profane or incomprehensible lyrics. Kool Keith has recorded prolifically both as a solo artist and in group collaborations.';
    break;
    }
            
    switch($today) {
    case 'Monday' :
    $music = '<h2>Monday is for Jazz!</h2>';
    $pic = 'images/genreimages/chet.jpg';
    $alt = 'Chet Baker';
    $color = 'style="background-color:grey"';
    $content = 'Chesney Henry "Chet" Baker Jr. was an American jazz trumpeter and vocalist. He is known for major innovations within the cool jazz subgenre leading him to be nicknamed the "prince of cool". Baker earned much attention and critical praise through the 1950s, particularly for albums featuring his vocals.';
    break;
    }
        
    switch($today) {
    case 'Tuesday' :
    $music= 'Tuesday is for Industrial!</h2>';
    $pic = 'images/genreimages/ebb.jpg';
    $alt = 'N.EBB';
    $color = 'style="background-color:white"';
    $content = 'Nitzer Ebb are a British EBM group formed in 1982 by Essex school friends Vaughan "Bon" Harris, Douglas McCarthy, and David Gooday.';
    }
                
    switch($today) {
    case 'Wednesday' :
    $music = '<h2>Wednesdays are for Rock!';
    $pic = 'images/genreimages/guitar_wolf.jpg';$alt = 'Guitar Wolf';
    $color = 'style="background-color:lavender"';
    $content = 'Guitar Wolf is a Japanese garage rock power trio founded in Tokyo in 1987. They coined the phrase "jet rock and roll", which they use to describe their musical style.';
    break;
    }
                    
                    
    switch($today) {
    case 'Thursday' :
    $music = '<h2>Thuesdays are for excentric Japanese artists</h2>';
    $pic = 'images/genreimages/jun_togawa.jpg';
    $alt = 'Togawa';
    $color = 'style="background-color:#f0f5f9"';
    $content = 'Jun Togawa is a Japanese singer, musician and actress';
    break;
    }
                        
    switch($today) {
    case 'Friday' :
    $music = '<h2>Fridays are for Laurie Anderson</h2>';
    $pic = 'images/genreimages/laurie.jpg';
    $alt = 'Weirdo 80s Lady';
    $color = 'style="background-color:green"';
    $content = 'Laura Phillips Anderson is an American avant-garde artist, composer, musician and film director whose work spans performance art, pop music, and multimedia projects.';
    break;
    }
                            
    switch($today) {
    case 'Saturday' :
    $music = '<h2>Weekend--->24 hour marathon with Ricardo!</h2>';
    $pic = 'images/genreimages/ricardo.jpg';
    $alt = 'Ricardo Villalobos';
    $color = 'style="background-color:#CB9617"';
    $content = 'Ricardo Villalobos is a Chilean-born German electronic music producer and DJ. He is well known for his work in the minimal techno and microhouse genres, and is one of the most significant figures in today\'s minimal techno scene. ';
    break;
    }                    
                          
?> 

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/style.css" type="text/css" rel="stylesheet">
<!--add a class and update css-->

<title>Daily</title>

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
<li><a href="index.php">Home</a></li> 
<li><a href="">About</a></li>
<li><a href="">Daily</a></li>
<li><a href="">People</a></li>
<li><a href="">Contact</a></li>
<li><a href="">Gallery</a></li>
</ul>
    </nav>
    </div> <!--en d header inner-->
    </header>
<main>
    <div id="wrapper">
        <h2>Weekly Music Picks</h2>
        <h1 class ="daily"> <?php echo $music; $l; ?></h1>      
        <div class="daily" <?php echo $color;?>> 

<div class="content">
<p><?php echo $content;?></p> 
</div> <!--end content-->

<div class="daily-list">
    <h3>What day is it today?</h3>
<ul>
    <li><a href="daily.php?today=Sunday">Sunday</a></li>
    <li><a href="daily.php?today=Monday">Monday</a></li>
    <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a href="daily.php?today=Thursday">Thursday</a></li>
    <li><a href="daily.php?today=Friday">Friday</a></li>
    <li><a href="daily.php?today=Saturday">Saturday</a></li>
</ul>  
</div>
</div>

</main>

<aside>
<img src= "<?php echo $pic; ?>" alt="<?php echo $alt?>" width=250px height=250px> 
</img>
</aside>
</div> <!--end wrapper-->
    
<footer>
<ul>
<li>Copyright &copy; 2021</li>
<li>All Rights Reserved </li>
<li><a href="">Terms of use</a></li>
<li><a href="">Web Design by Michito</a></li>
<li><a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fiwata-mich.000webhostapp.com%2Fit261%2F">HTML Validation</a></li>
<li><a href="http://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fiwata-mich.000webhostapp.com%2Fit261%2Fcss%2Fstyle.css&profile=css3svg&usermedium=all&warning=1&vextwarning=
">CSS Validation</a></li>
</ul>
</footer>
    
</body>
</html>