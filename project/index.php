<?php

session_start();
if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = 'You must log in first';
    //redirect them to the login page
    header('Location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    //redirect them back to the login page
    header('Location: login.php');
}

include('includes/header.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// $key             $value
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Cities';
$nav['contact.php'] = 'Contact';
// $nav['thx.php'] = 'Thank You';
$nav['gallery.php'] = 'Gallery';

function my_nav($nav) {
    $my_return = '';
    foreach($nav as  $key => $value) {
    if(THIS_PAGE == $key) {
    $my_return .= '<li><a href=" '.$key.' " class="current">'.$value.'</a></li>';    
    } else {
        $my_return .= '<li><a href=" '.$key.' ">'.$value.'</a></li>'; 
    } // end else
    } // end foreach ... call out return before the end of the fucntion
    return $my_return;
    } // end function
    
    switch(THIS_PAGE) {
        case 'index.php'; 
        $title = 'Home page of our IT 261 Website';
        $body = 'home';
        $headline = 'Welcome to our IT 261 Website Home Page';
        $background_color = ' background-color:#ffffff';
        break;
    
        case 'about.php'; 
        $title = 'About page of our IT 261 Website';
        $body = 'about inner';
        $headline = 'Welcome to our About Page';
        break;
    
        case 'daily.php'; 
        $title = 'Daily page of our IT 261 Website';
        $body = 'daily inner';
        $headline = 'Welcome to our Daily page where my HW3 Switch will display';
        break;
    
        case 'project.php'; 
        $title = 'Project page of our IT 261 Website';
        $body = 'project inner';
        $headline = 'Welcome to our Project Page';
        break;
    
        case 'contact.php'; 
        $title = 'Contact page of our IT 261 Website';
        $body = 'contact inner';
        $headline = 'Welcome to Our Contact Page';
        break;
    
        case 'thx.php'; 
        $title = 'Thank You Page';
        $body = 'thank you inner';
        $headline = 'Thanks For Ordering Our spice!';
        break;
    
        case 'gallery.php'; 
        $title = 'Gallery page of our IT 261 Website';
        $body = 'gallery inner';
        $headline = 'Welcome to our Gallery Page';
        break;
    }

?>



<h1>Welome to our home page!</h1>
  
<?php 
//Notification message
//is the session successful
if(isset($_SESSION['success'])) : ?>
<div class="error success">
    <h3>
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </h3>
</div> <!-- end error success -->  
<?php endif ?>

<div class="error success">
<?php 
    if(isset($_SESSION['username'])) : ?>
    <header>
    <h3> Hello, 
        <?php echo $_SESSION['username']; 
            echo '<br>'; ?>
    </h3>
    <p><a href="index.php?logout=1">Log out</a></p>
</div> <!-- end error success -->  
<?php endif ?>
</header>
<div id="wrapper">
<h1>Welcome to the home page</h1>
    </wrapper>
<?php 
include('includes/footer.php');