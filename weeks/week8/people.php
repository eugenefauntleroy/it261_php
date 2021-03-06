<?php //people.php

include('config.php');
include('includes/header.php');
?>

<main>

<?php
// connecting to database

$sql = 'SELECT * FROM people';

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

//show the records if we have more than 0//
if(mysqli_num_rows($result) > 0){ 
    while($row = mysqli_fetch_assoc($result)){
        //array will display the contents of row
        echo '<ul>'; 
        echo '<li class="bold">For more information <a href="people-view.php?id='.$row['PeopleID'].'">'.$row['FirstName'].'</a></li>';
        echo '<li>'.$row['FirstName'].' '.$row['LastName'].'</li>';
        echo '<li>'.'Occupation: '.$row['Occupation'].' '.$row['Description'].'</li>';
        echo '</ul>';
    } 
} else{    
    echo "Nothing to see here!";
}

//release the web server
@mysqli_free_result($result);

//close the connection
@mysqli_close($iConn);
?>
</main> 
<aside>
    <h3>This is my aside.</h3>
</aside>
<?php
include('includes/footer.php');
?>