<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Basic Currency Form</title>
<link href="styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>
" method="post">
<fieldset>
<legend><h1>Currency Converter</h1></legend>
<label for="name">NAME</label>
<input type="text" name="name">
<label for="email">EMAIL</label>
<input type="email" name="email">

<label for="amount">How much money do you have?</label>
<input type="number" name="amount">

<label for="currency">Choose your currency!</label>
<ul>
<li><input type="radio" name="currency" value="0.013">Rubles</li>
<li><input type="radio" name="currency" value="0.76">Canadian</li>
<li><input type="radio" name="currency" value="1.28">Pounds</li>
<li><input type="radio" name="currency" value="1.18">Euros</li>
<li><input type="radio" name="currency" value="0.0094">Yen</li>
</ul>

<input type="submit" value="Convert It">
<p><a href="">RESET</a></p>
</fieldset>




</form>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty( 
    $_POST['name'] &&
    $_POST['email'] &&
    $_POST['amount'] &&
    $_POST['currency'] 
)) {
echo 'Please fill out the fields!';

} elseif(isset(
    $_POST['name'],
    $_POST['email'],
    $_POST['amount'],
    $_POST['currency'] 
)
) {
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];

$dollars = $amount * $currency;
$friendly_dollars = floor($dollars);
echo '
<div class="box">
<h2>Hello, '.$name.'</h2>
<p>You have $'.$friendly_dollars.' USD. We will send your confirmation email to <b>'.$email.'</b> !</p>
</div>
';


} 

} 

?>
</body>