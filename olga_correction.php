<!--corrections/edits recommended by olga-->

<?php 
session_start();
//include('includes/credentials.php');
include('config.php');

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
// Place in the config file
$first_name = '';
$last_name = '';
$username = '';
$email= '';
$password = '';
$errors = array();
$success = 'You are now logged in!';
//  end 

// WHY are you connecting again - 
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(isset($_POST['reg_user'])){

$first_name = mysqli_real_escape_string($db, $_POST['first_name']); 
$last_name = mysqli_real_escape_string($db, $_POST['last_name']);
$username = mysqli_real_escape_string($db, $_POST['$username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
$Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);

if(empty($first_name)){

    array_push($errors, 'First name is required');
}
if(empty($last_name)){
    array_push($errors, 'Last name is required');
}
if(empty($username)){
    array_push($errors, 'User name is required');
}

// SHOULD BE LOWERCASE ---- if(empty($email)){
if(empty($Email)){
    array_push($errors, 'Email is required');
}
// if empty the first password
if(empty($Password_1)){
    array_push($errors, 'Password is required');
}
if($Password_1 !== $Password_2){
    array_push($errors, 'Passwords must match');
}

$user_check_query = "SELECT * FROM users WHERE username = '$username' 
    OR Email = '$email' LIMIT 1";

// BELOW YOU ARE REFERENCING $db, not $db?????
$result = mysqli_query($db, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($db)));
$rows = mysqli_fetch_assoc($result);

if($rows){
    if($rows['$username'] == $username){
        array_push($errors, 'Username already exists');
    }
    // you're capitalizing Email -- SHOULD BE email
    if($rows['Email'] == $email){
        array_push($errors, 'Email already exists');
    }
}
// if(count($errors == 0)) {}
if(count($errors) < 1){
    // YOU ARE NOT CONSISTENT WITH YOUR UPPER AND LOWERCASES!!!!!  YOU HAVE USED $Password_1
    $password = md5($password_1); //encrypt 
    // again uppercase Users....????? or users
    $query = "INSERT INTO Users (first_name, last_name, username, email, password) 
        VALUES ('$first_name', '$last_name', '$username', '$email', '$password') ";
    mysqli_query($db, $query);

    $_SESSION['username'] = $username;
    $_SESSION['success'] = $success;
    header('Location: login.php');
}

} 
// NOW YOU ARE BACK TO CONNECTING WITH $db....???
    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
    
        if (empty($username)) {
            array_push($errors, 'Username is required');
        }
    
        if (empty($password)) {
            array_push($errors, 'Password is required');
        }

    if(count($errors) == 0){
        $password = md5($password); //encrypt 
        $query = "SELECT * FROM Users WHERE username = '$username' AND password = '$password' ";
        $results = mysqli_query($db, $query);

        if(mysqli_num_rows($results) == 1){
            $_SESSION['$username'] = $username;
            $_SESSION['success'] = $success;
            header('Location: index.php');

        }else{
            array_push($errors, 'Wrong username/password combination.');
        }
    }
}

?>