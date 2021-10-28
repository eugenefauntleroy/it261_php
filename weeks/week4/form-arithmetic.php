<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Arithmetic Form</title>

<style>
    form {
        width:400px;
        margin:0 auto;
    }
    fieldset {
        border:1px solid red;
        padding:10px;
    }
    label, textarea {
        display:block;
        margin-bottom:5px;
    }
    input[type=text],
    input[type=email],
    textarea {
        margin-bottom:10px;
        width: 90%;
    }
    input, textarea {
        margin-bottom:10px;
    }
    h3 {
        color:red;
        text-align:center;
    }
    .box {
        width:400px;
        margin:20px auto;
        padding:15px;
        background:beige;
    }
</style>
</head>

<body>
<form action="" method="post">
<fieldset>
    <label for="fname">First Name</label>
    <input type="text" name="fname">

    <label for="coffees">How many coffees?</label>
    <input type="number" name="coffees">

    <label for="lattes">Lattes</label>
    <input type="number" name="lattes">

    <label for="caps">Cappucino</label>
    <input type="number" name="caps">

    <input type="submit" value="Send It!">
</fieldset>   
</form>
<?php
if(isset($_POST['fname'],
         $_POST['coffees'],
         $_POST['lattes'],
         $_POST['caps'])) {

$fname = $_POST['fname'];
$coffees = $_POST['coffees'];
$int_coffees = intval($coffees);
$lattes = $_POST['lattes'];
$int_lattes = intval($lattes);
$caps = $_POST['caps'];
$int_caps = intval($caps);

$total = $int_coffees + $int_lattes + $int_caps;

$friendly_total = number_format($total, 0);

if(empty($fname && $int_coffees && $int_lattes && $int_caps )) {
echo '<h3>Hold on! Don\'t you need to order!?</h3>';
} else {

    echo '
    <div class="box">
    <h2>Hello '.$fname.'</h2>
    <ul>
      <p>You have ordered the following beverages:</p>
      <li>'.$int_coffees.' Coffees</li>
      <li>'.$int_lattes.' Lattes</li>
      <li>'.$int_caps.' Cappucino(s)</li>
    </ul>
    <p>Totaling '.$friendly_total.' beverages</p>
    </div>
    ';
} 

} 
?>

</body>
</html>