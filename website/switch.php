<?php
include('includes/header.php');

if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }

    switch($today) {
        case 'Sunday' :
        $flag = '<h2>Afghan</h2>';
        $pic = 'images/switch_pics/af-flag.jpg';
        $alt = 'Afghanistan';
        $color = 'style="background-color:thistle"';
        $content = 'Afghanistan is famous for Taliban and historical sites along the silkroad.';
        break;    
        case 'Monday' :
        $flag = '<h2>Algerian</h2>';
        $pic = 'images/switch_pics/ag-flag.jpg';
        $alt = 'Algeria';
        $color = 'style="background-color:grey"';
        $content = 'Algeria is famous for for it being the largest african nation.';
        break;    
        case 'Tuesday' :
        $flag = '<h2><Armenian/h2>';
        $pic = 'website/images/switch_pics/am-flag.jpg';
        $alt = 'Armenia';
        $color = 'style="background-color:white"';
        $content = 'Sergei Parajanov\'s The Color of Pomegranates was based on the works of Armenian poet Sayat-Nova.';
        break;    
        case 'Wednesday' :
        $flag = '<h2>Andorran</h2>';
        $pic = 'images/switch_pics/an-flag.jpg';
        $alt = 'Andorra';
        $color = 'style="background-color:lavender"';
        $content = 'This autonomous co-principality under the join sovereignty of the Bishop of Urgel in Spain and the French Chief of State is know for tourism and tobacco.';
        break;    
        case 'Thursday' :
        $flag = '<h2>Angolan</h2>';
        $pic = 'images/switch_pics/ao-flag.jpg';
        $alt = 'Angola';
        $color = 'style="background-color:#f0f5f9"';
        $content = 'Angola has a large reserves of oil and diamonds. Combined with potential for hydroelectric development and it\'s rich farmlands, the country has a lot to look forward to in the future.';
        break;    
        case 'Friday' :
        $flag = '<h2>Austrian</h2>';
        $pic = 'images/switch_pics/au-flag.jpg';
        $alt = 'Austria';
        $color = 'style="background-color:green"';
        $content = 'Gustav Kimt and Egon Schiele remind me of eachother, perhaps it\'s the Austrian style.';
        break;        
        case 'Saturday' :
        $flag = '<h2>Argentinian</h2>';
        $pic = 'images/switch_pics/tn_ar-flag.jpg';
        $alt = 'Argentina';
        $color = 'style="background-color:#CB9617"';
        $content = 'Astor Piazzolla was an Argentine tango musician and a bandoneon virtuoso.';
        break;    
        }
        ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Switch Class Exercise</title>
<style>
#wrapper {
    width:80%;
    margin:0 auto;
} 

#wrapper {
    background:<?php echo $color;?>
}
</style>    

</head>
<body>
<div id="wrapper">
<h1>My Switch Classwork Exercise</h1>
<img src= "<?php echo $pic; ?>" alt="<?php echo $alt?>" width=3000px height=250px> 
</img>
<?php echo $content;?>
<h2>Check out these seven countries that start with the word "A"!</h2>
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
<footer>
<ul>
<li>Copyright &copy; 
<?php 

$date_current = date('Y');
$date_created = 2017;
if($date_current == $date_created) {
    echo $date_current;
}   else {
    echo ''.$date_created.' - '.$date_current.'      ';
}
;?>

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

    
