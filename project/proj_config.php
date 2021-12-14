<?php

ob_start(); //prevents header errors before reading the whole page!
define('DEBUG', 'TRUE'); //we want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// $key             $value
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['switch.php'] = 'Switch';
$nav['vacation.php'] = 'Vacation';
$nav['contact.php'] = 'Contact';
// $nav['thx.php'] = 'Thank You';

// create a function for our navigation
//  so the function is called out on our header.php page

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
    $title = 'About this site';
    $body = 'about inner';
    $headline = 'Welcome to our About Page';
    break;

    case 'switch.php'; 
    $title = 'switch page';
    $body = 'switch inner';
    $headline = 'Welcome to our switch';
    break;

    case 'vacation.php'; 
    $title = 'vacation page';
    $body = 'vacation inner';
    $headline = 'Welcome to our vacation Page';
    break;

    case 'contact.php'; 
    $title = 'Contact page';
    $body = 'contact inner';
    $headline = 'Welcome to Our Contact Page';
    break;

    case 'thx.php'; 
    $title = 'Thank You Page';
    $body = 'thank you inner';
    $headline = 'Thanks For Ordering Our spice!';
    break;

}

//this is beggining of switch for HW3
if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
}


// emailable form php START

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$country = '';
$comments = '';
$policy = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$phone_Err = '';
$country_Err = '';
$comments_Err = '';
$policy_Err = '';



if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['first_name'])) {
        $first_name_Err = 'who are you?';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_Err = 'Please provide your Last name';
        unset($_POST['last_name']);
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_Err = 'Please provide your email';
        unset($_POST['email']);
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['spice'])) {
        $spice_Err = 'Please select your spices';
    } else {
        $spice = $_POST['spice'];
    }

    if($_POST['country'] == NULL) {
        $country_Err = 'Please select your country';
    } else {
        $country = $_POST['country'];
    }

    if(empty($_POST['comments'])) {
        $comments_Err = 'Please tell us your secrets';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['policy'])) {
        $policy_Err = 'You must agree to our terms';
    } else {
        $policy = $_POST['policy'];
    }

    // phone number
    if(empty($_POST['phone'])) {  
        $phone_Err = 'We require a valid phone number!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { 
        $phone_Err = 'Invalid format!';
        unset($_POST['phone']);
        } else{
        $phone = $_POST['phone'];
        }
        }

    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['country'],
        $_POST['comments'],
        $_POST['last_name'],
        $_POST['policy'] 
        
        )) { 
            
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test Email' .date('m/d/y') ;
        $body = '
        First name: '.$first_name.' '.PHP_EOL.'
        Last name: '.$last_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Country: '.$country.' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';
            
        $headers = array(
        'From' => 'iwata.mich@gmail.com',
        'Relpy-to' => ''.$email.'',
        );
            
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        }   


} // end server request method



// end emailable form php

    function myError($myFile, $myLine, $errorMsg){
        if(defined('DEBUG') && DEBUG){
            echo "Error in file: <b> $myFile </b> on line: <b> $myLine </b> ";
            echo "Error message: <b> $errorMsg </b> ";
            die(); //stop the program
        }else{
            echo "Something doesn't seem right!";
            die();
        }
    
    }


?>