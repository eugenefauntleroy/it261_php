<?php
include('config.php');
include('includes/header.php');
?>

    <div id="wrapper"> 
    <div class="contact">
<main class="contact">   

<?php
// connecting to database

$sql = 'SELECT * FROM vacation';

$db = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($dbn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($dbn)));

//show the records if we have more than 0//
if(mysqli_num_rows($result) > 0){ 
    while($row = mysqli_fetch_assoc($result)){
        //array will display the contents of row
        echo '<ul>'; 
        echo '<li class="bold">For more information <a href="vacation-view.php?id='.$row['vacationID'].'">'.$row['vacation_name'].'</a></li>';
        echo '<li>'.$row['vacation_place'].' '.$row['vacation_language'].'</li>';
        echo '<li>'.'Description: '.$row['description'].'</li>';
        echo '</ul>';
    } 
} else{    
    echo "Nothing to see here!";
}

//release the web server
@mysqli_free_result($result);

//close the connection
@mysqli_close($dbn);
?>

</main> 
    
<?php
include('includes/footer.php');
?>