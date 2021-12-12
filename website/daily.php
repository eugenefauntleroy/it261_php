<?php
include('includes/header.php'); 
include('config.php'); ?>


<?php
if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }
switch($today) {
    case 'Sunday' :
    $music = 'Sunday is for sleeping in & Hip Hop!';
    $pic = 'images/genreimages/black_elvis.jpg';
    $alt = 'Kool Keith';
    $color = 'style="background-color:thistle"';
    $content = 'Keith Matthew Thornton, better known by his stage name Kool Keith, is an American rapper and record producer from The Bronx, New York known for his surreal, abstract and often profane or incomprehensible lyrics. Kool Keith has recorded prolifically both as a solo artist and in group collaborations.';
    break;
    }
            
    switch($today) {
    case 'Monday' :
    $music = 'Monday is for Jazz!';
    $pic = 'images/genreimages/chet.jpg';
    $alt = 'Chet Baker';
    $color = 'style="background-color:grey"';
    $content = 'Chesney Henry "Chet" Baker Jr. was an American jazz trumpeter and vocalist. He is known for major innovations within the cool jazz subgenre leading him to be nicknamed the "prince of cool". Baker earned much attention and critical praise through the 1950s, particularly for albums featuring his vocals.';
    break;
    }
        
    switch($today) {
    case 'Tuesday' :
    $music= 'Tuesday is for Industrial!';
    $pic = 'images/genreimages/ebb.jpg';
    $alt = 'N.EBB';
    $color = 'style="background-color:pink"';
    $content = 'Nitzer Ebb are a British EBM group formed in 1982 by Essex school friends Vaughan "Bon" Harris, Douglas McCarthy, and David Gooday.';
    }
                
    switch($today) {
    case 'Wednesday' :
    $music = 'Wednesdays are for Rock!';
    $pic = 'images/genreimages/guitar_wolf.jpg';$alt = 'Guitar Wolf';
    $color = 'style="background-color:lavender"';
    $content = 'Guitar Wolf is a Japanese garage rock power trio founded in Tokyo in 1987. They coined the phrase "jet rock and roll", which they use to describe their musical style.';
    break;
    }
                    
                    
    switch($today) {
    case 'Thursday' :
    $music = 'Thuesdays are for excentric Japanese artists';
    $pic = 'images/genreimages/jun_togawa.jpg';
    $alt = 'Togawa';
    $color = 'style="background-color:#f0f5f9"';
    $content = 'Jun Togawa is a Japanese singer, musician and actress';
    break;
    }
                        
    switch($today) {
    case 'Friday' :
    $music = 'Fridays are for Laurie Anderson';
    $pic = 'images/genreimages/laurie.jpg';
    $alt = 'Weirdo 80s Lady';
    $color = 'style="background-color:green"';
    $content = 'Laura Phillips Anderson is an American avant-garde artist, composer, musician and film director whose work spans performance art, pop music, and multimedia projects.';
    break;
    }
                            
    switch($today) {
    case 'Saturday' :
    $music = 'Weekend--->24 hour marathon with Ricardo!';
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

<main>
<h1><?php echo $headline;?></h1>      
    <div id="wrapper">
        <h2>Weekly Music Picks</h2>
        <h3 class ="daily"> <?php echo $music; $l; ?></h3>      
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

</main>
</div> <!--end wrapper-->

<aside>
<img src= "<?php echo $pic; ?>" alt="<?php echo $alt?>" width=250px height=250px> 
</img>
</aside>
<?php
include('includes/footer.php');
?>