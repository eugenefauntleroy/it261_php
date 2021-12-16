<?php
include('includes/header-form.php'); 
include('config.php'); ?>


<?php
if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }
switch($today) {
    case 'Sunday' :
    $music = 'Sunday is for 1';
    $pic = 'includes/images/num/1.jpg';
    $alt = '1';
    $color = 'style="background-color:thistle"';
    $content = '1';
    break;
    }
            
    switch($today) {
    case 'Monday' :
    $music = 'Monday is for 2';
    $pic = 'includes/images/num/2.jpg';
    $alt = '2';
    $color = 'style="background-color:grey"';
    $content = '2';
    break;
    }
        
    switch($today) {
    case 'Tuesday' :
    $music= 'Tuesday is for 3';
    $pic = 'includes/images/num/3.jpg';
    $alt = '3';
    $color = 'style="background-color:pink"';
    $content = '3';
    }
                
    switch($today) {
    case 'Wednesday' :
    $music = 'Wednesdays are for 4';
    $pic = 'includes/images/num/4.jpg';
    $alt = '4';
    $color = 'style="background-color:lavender"';
    $content = '4';
    break;
    }
                    
                    
    switch($today) {
    case 'Thursday' :
    $music = 'Thuesdays are for 5';
    $pic = 'includes/images/num/5.jpg';
    $alt = '5';
    $color = 'style="background-color:#f0f5f9"';
    $content = '5';
    break;
    }
                        
    switch($today) {
    case 'Friday' :
    $music = 'Fridays are for 6';
    $pic = 'includes/images/num/6.jpg';
    $alt = '6';
    $color = 'style="background-color:green"';
    $content = '6';
    break;
    }
                            
    switch($today) {
    case 'Saturday' :
    $music = 'Saturdays are for 7';
    $pic = 'includes/images/num/7.jpg';
    $alt = '7';
    $color = 'style="background-color:#CB9617"';
    $content = '7';
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
    <li><a href="switch.php?today=Sunday">Sunday</a></li>
    <li><a href="switch.php?today=Monday">Monday</a></li>
    <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
    <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
    <li><a href="switch.php?today=Thursday">Thursday</a></li>
    <li><a href="switch.php?today=Friday">Friday</a></li>
    <li><a href="switch.php?today=Saturday">Saturday</a></li>
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