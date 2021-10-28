<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Week 4 - Celcius Form</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">

</head>
<body>

<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="post">
<fieldset>
<legend>Our Celcius Form</legend>
<label for="cel">Enter Your Celcius Value</label>
<input type="number" name="cel">
<input type="submit" value="Convert It">
<p><a href="">Reset!</a></p>

</fieldset>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset($_POST['cel'])) {
$cel = $_POST['cel'];
$cel_int = intval($cel);
$far = ($cel_int * 9/5) + 32;
$friendly_far = floor($far);


if($cel == NULL) {
    echo '<h2>Please fill out your Celcius value</h2>';
 } elseif($far <= 32) {
     echo '<p>'.$friendly_far.' degrees and it is pretty cold!</p>';
 } elseif($far <= 40) {
     echo '<p>'.$friendly_far.' degrees and it is not that cold</p>';
 } elseif($far <= 50) {
     echo '<p>'.$friendly_far.' degrees and it is warming up</p>';
 } elseif($far <= 60) {
     echo '<p>'.$friendly_far.' degrees and I\'m liking it!</p>';
 } elseif($far <= 70) {
     echo '<p>'.$friendly_far.' degrees and it is fabulous!!</p>';
 } elseif($far <= 80) {
     echo '<p>'.$friendly_far.' degrees and I\'m working on my tan!</p>';
 } elseif($far <= 95) {
     echo '<p>'.$friendly_far.' degrees and it\'s too hot now</p>';
 }  else {
         echo '<p><b>We should really do more about climate change...</b></p>';
     }
    } 

} 

?>
</body>
</html>