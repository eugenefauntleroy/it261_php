<?php
if (isset($_POST['num1'])) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
echo '<h2>You added '.$num1.' and '.$num2.' </h2>';
echo ' <p style=" color:thistle;"> and the answer is 
 '.$myTotal.' !</p>';
 echo'<p><a href="">Reset page</a>';
 }
 ?>


<html>
<head>
<title>Adder Assignment</title>
<style>
 p {
        color:thistle;
        text-align: center;
    }
    
    h1 {
        color:thistle;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:1px thistle;
        padding:10px;
    }
    
    h1 {
        text-align: center;
    }
    
</style>
</head>
<body>
<h1>Adder.php</h1> <form action="" method="post">
<label for="num1">Enter the first number:</label><input type="number" name="num1"><br>
<label for="num2">Enter the second number:</label><input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> </form>

</body>
</html>

<!--here are my errors--> <!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors-->

<!--
1) missing closing line 49
2)opening form tag \ on line46
3) label tag \ on line 47
4) echo missing closing ' line 9
5) added label tags for line 48
6) added /h2 on 6
7)removed - on line 6
8) " to ' on 9
9) echo's missing semi-colon
10; added for='$num1' upper to lower case 
11) single quote, added missing ' quotes on 7
removed ;} near the closing PHP line 11
12)cahnged to number and tags on line 47 48
13) added post to h1
removed <> moved style tage inside <p>
14) *added css 
15) removed - on 6


