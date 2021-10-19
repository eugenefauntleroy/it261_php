<?php

$show = array(
    'Name' => 'After the Plague',
    'Actor' => 'Jim Carrey',
    'Genre' => 'Comedy',
    'Author' => 'T.C. Boyle',
    'Year' => '1994'
);

$show['Name'] = 'After the Plague';
$show['Actor'] = 'Jim Carrey';
$show['Genre'] = 'Comedy';
$show['Author'] = "T.C. Boyle";
$show['Year'] = '1994';

//foreach($show as $key => $value) {
//echo '<b> '.$key.'</b>:  '.$value.'<br>';
//}

echo '<br>';

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

?>

<!doctype html>
<html lang="en">
<head>
 <meta charset="UFT-8">
 <title>For each loop</title>
 <style>
     .wrapper {
         width:580px;
         margin:20px auto;
     }
     body {
                background-color: green;
                color: black;
            }
     nav li {
         list-style-type:none;
     }

     nav a {
         color:black;
         font-weight:bold;
         text-decoration:none;
         font-size:1.2em;
         font-family:Verdana, arial, sans-serif;
     }
 </style>    
</head>

<body>
<div class="wrapper">
<h1>Our Foreach Loops</h1>
<h2>After the Plague</h2>
<ul>
<?php

foreach($show as $key => $value) {
    echo '<li><b> '.$key.'</b>:  '.$value.'<///li>';
    }
?>
</ul>
<h2>Our Navigation</h2>
<nav>
<ul>
    <?php
    foreach($nav as $key => $value) {
        echo '<li><a href="'.$key.'">  '.$value.'<a/></li>';    
        }
    ?>
</ul>  
</nav> 
</div> <!--end wrapper-->
</body>
</html>   

