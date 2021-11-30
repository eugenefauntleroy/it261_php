<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// $key             $value
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
// $nav['thx.php'] = 'Thank You';
$nav['gallery.php'] = 'Gallery';

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

// WEEK 7 - GALLERY //
//all the image file names must be 5 letters only!
$people['John Coltrane'] = 'coltr my fovorite things'; 
$people['Billie Holiday'] = 'hold lady sings the blues';
$people['Thelonius Monk'] = 'monk round about midnight';
$people['Charlie Parker'] = 'parke a night in tunisia';
$people['Nina Simone'] = 'simon sealion';


$jazz[0] = 'coltr';
$jazz[1] = 'holid';
$jazz[2] = 'monk';
$jazz[3] = 'parke';
$jazz[4] = 'simon';

function randImages2($jazz){
    $i = rand(0, count($jazz)-1);
    echo '<img src=".includes/images/jazz_greats'.$jazz[$i].'.jpeg" alt="Randomly generated image">';
} //end randImages2

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
$preference = '';
$spice = '';
$country = '';
$comments = '';
$policy = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$phone_Err = '';
$preference_Err = '';
$spice_Err = '';
$country_Err = '';
$comments_Err = '';
$policy_Err = '';



if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['first_name'])) {
        $first_name_Err = 'To whom are we sending this spice?';
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

    if(empty($_POST['preference'])) {
        $preference_Err = 'What style of spice do you prefer?';
    } else {
        $preference = $_POST['preference'];
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

// spice function

  function spice_time() {
     $my_return = '';
     if(!empty($_POST['spice'])) {
         $my_return = implode(', ', $_POST['spice']); 
     } 
     return $my_return;  
    
    } // close function spice_time()


    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['preference'],
        $_POST['spice'],
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
        Preference: '.$preference.' '.PHP_EOL.'
        spice: '.spice_time().' '.PHP_EOL.'
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


// random images

function random_pics() {

$photos[0] = 'images (1)';
$photos[1] = 'images (2)';
$photos[2] = 'images (3)';
$photos[3] = 'images (4)';
$photos[4] = 'images (6)';
$photos[5] = 'images (7)';


$i = rand(0, 4);

$pic = 'includes/images/'.$photos[$i].'.jpeg';
$random_pic = '<img class="random" src="'.$pic.'" alt="'.$photos[$i].'">';
return $random_pic;

} // end random images



// random spice images for contact.php

function spice_pics() {

    $photos[0] = 'spices-500x500';
    $photos[1] = 'download (1)';
    $photos[2] = 'spice';
    $photos[3] = 'images';
    
    $i = rand(0, 3);
    
    $pic = 'includes/images/'.$photos[$i].'.jpeg';
    $spice_pic = '<img class="random" src="'.$pic.'" alt="'.$photos[$i].'" width = "250px" height = "250px">';
    return $spice_pic;
    
    } // end random spice mages




?>