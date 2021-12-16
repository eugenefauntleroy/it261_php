<?php
include('config.php');
include('includes/header.php');
?>

<?php
session_start();

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must log in first!';
    header('Location: login.php');
}//end if
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}
?>
   
<div class="error success">
<?php
if(isset($_SESSION['username'])) : ?> 
Hello, 
<?php echo $_SESSION['username']; ?>
<p><a href="index.php?logout='1' ">Log out!</a></p>
</div>
<?php endif ?>



    <h1> Welome to my page!</h1>

    <img src="includes/images/mich_dig_copy" alt="Michito Iwata"></a>

    <h1>Me!</h1>
    <img src="images/me.jpg" alt="This is me"></a>

     
<?php 
include('includes/footer.php');
?>