<?php 

include('config.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}else {
    header('Location:project.php');
}

$sql = 'SELECT * FROM new WHERE CityID = '.$id.'';

//connect to our database
$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){ 
    while($row = mysqli_fetch_assoc($result)){
        $CityName = stripslashes($row['CityName']);
        $Prefecture  = stripslashes($row['Prefecture']);
        $Population = stripslashes($row['Population']);
        $Description = stripslashes($row['Description']);
        $Feedback = '';
    }
} else{
    $Feedback = 'Sorry, there are no cities here. Please check again!';
}

include('includes/header.php');
?>

<main>
    <h2>Welcome to <?php echo $CityName; ?>'s Page</h2>
    <?php 
        if($Feedback == ''){
            echo '<ul>';
            echo '<li><b>City Name: </b> '.$CityName.' </li>';
            echo '<li><b>Prefecture: </b> '.$Prefecture.' </li>';
            echo '<li><b>Population: </b> '.$Population.' </li>';
            echo '</ul>';
            echo '<p> '.$Description.' </p>';
            echo '<br>';
            echo '<p><a href="project.php">Go back to the cities page!</a></p>';
        } else{
            echo $Feedback;
        }
    ?>
</main>
<aside>
<?php 
    if($Feedback == ''){
        echo '<img class = "sign" src="images/city_pics/'.$CityName.'.jpg" alt="'.$Prefecture.'">';
    }else{
        echo $Feedback;
    }
?>
</aside>
<?php
include('includes/footer.php');

@mysqli_free_result($result);

@mysqli_close($iConn);
?>