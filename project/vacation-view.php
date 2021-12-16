<?php 

include('config.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}else {
    header('Location:vacation.php');
}

$sql = 'SELECT * FROM vacation WHERE vacationID = '.$id.'';

//connect to our database
$db = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($db,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($db)));

if(mysqli_num_rows($result) > 0){ 
    while($row = mysqli_fetch_assoc($result)){
        $vacation_name = stripslashes($row['vacation_name']);
        $vacation_place  = stripslashes($row['vacation_place']);
        $vacation_language = stripslashes($row['vacation_language']);
        $description = stripslashes($row['description']);
        $Feedback = '';
    }
} else{
    $Feedback = 'Sorry, there are no cities here. Please check again!';
}

include('includes/header.php');
?>

<main>
    <h2>Welcome to <?php echo $vacation_name; ?>'s Page</h2>
    <?php 
        if($Feedback == ''){
            echo '<ul>';
            echo '<li><b>vacation_name: </b> '.$vacation_name.' </li>';
            echo '<li><b>vacation_place: </b> '.$vacation_place.' </li>';
            echo '<li><b>vacation_language: </b> '.$vacation_language.' </li>';
            echo '</ul>';
            echo '<p> '.$description.' </p>';
            echo '<br>';
            echo '<p><a href="vacation.php">Go back to the vacation page!</a></p>';
        } else{
            echo $Feedback;
        }
    ?>
</main>
<aside>
<?php 
    if($Feedback == ''){
        echo '<img class = "sign" src="images/vac_images/'.$vacation_name.'.jpg" alt="'.$vacation_place.'">';
    }else{
        echo $Feedback;
    }
?>
</aside>
<?php
include('includes/footer.php');

@mysqli_free_result($result);

@mysqli_close($db);
?>