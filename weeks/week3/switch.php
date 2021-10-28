<?php
include('includes/header.php'); ?>

<?php

if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }

    switch($today) {
        case 'Sunday' :
        $flag = '<h2>Afghan</h2>';
        $pic = 'switch_pics/af-flag.jpg';
        $alt = 'Afghanistan';
        $color = "thistle";
        $content = 'Afghanistan is famous for Taliban and historical sites along the silkroad.';
        break;    
        
        case 'Monday' :
        $flag = '<h2>Algerian</h2>';
        $pic = 'switch_pics/ag-flag.jpg';
        $alt = 'Algeria';
        $color = "red";
        $content = 'Algeria is famous for for it being the largest african nation.';
        break;    
        case 'Tuesday' :
            $flag = '<h2>Azerbaijani</h2>';
            $pic = 'switch_pics/azerbaijan_flag.jpg';
            $alt = 'Azerbaijan';
            $color = "grey";
            $content = 'For a nation roughly the size of Austria, Azerbaijan has a staggering amount of volcanoes; around 350 in fact...';
        break;    
        case 'Wednesday' :
        $flag = '<h2>Andorran</h2>';
        $pic = 'switch_pics/an-flag.jpg';
        $alt = 'Andorra';
        $color = "lavender";
        $content = 'This autonomous co-principality under the join sovereignty of the Bishop of Urgel in Spain and the French Chief of State is know for tourism and tobacco.';
        break;    
        case 'Thursday' :
        $flag = '<h2>Angolan</h2>';
        $pic = 'switch_pics/ao-flag.jpg';
        $alt = 'Angola';
        $color = "#f0f5f9";
        $content = 'Angola has a large reserves of oil and diamonds. Combined with potential for hydroelectric development and it\'s rich farmlands, the country has a lot to look forward to in the future.';
        break;    
        case 'Friday' :
        $flag = '<h2>Austrian</h2>';
        $pic = 'switch_pics/au-flag.jpg';
        $alt = 'Austria';
        $color = "green";
        $content = 'Gustav Kimt and Egon Schiele remind me of eachother, perhaps it\'s the Austrian style.';
        break;        
        case 'Saturday' :
        $flag = '<h2>Argentinian</h2>';
        $pic = 'switch_pics/tn_ar-flag.jpg';
        $alt = 'Argentina';
        $color = "#CB9617";
        $content = 'Astor Piazzolla was an Argentine tango musician and a bandoneon virtuoso.';
        break;    
        }
        ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/style.css" type="text/css" rel="stylesheet">
<title>Switch Class Exercise</title>
<style>
#wrapper {
    width:80%;
    margin:0 auto;
}

#wrapper {
    background:<?php echo $color;?>;
}
</style>

<div id="wrapper">
<h1>My Switch Classwork Exercise</h1>
<img src= "<?php echo $pic; ?>" alt="<?php echo $alt?>" width=400 height=300> 
<br>
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
<?php
include('includes/footer.php');
?>

</body>
</html>

    
