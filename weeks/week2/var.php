<?php

$name = 'Michito';
$weather = 'Today is rainy';
$body_temp = 55.7;
//55.7 temp is a float - if it were a 55, it would be an integer//

echo $name;
echo '<br>';
echo 'My name is $name';
echo '<br>';
echo "My name is $name";
echo '<br>';
// if you use single quotes around a variable, the value of the variable will not display
// if you use double queotes , the variable value will display!

echo 'My name is ' .$name.' ' ;
echo '<br>';
echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temperature is 
'.$body_temp.' and is cold!'; 
$name = 'not Michito';
echo '<br>';
echo $name;  
echo '<br>'; 
$x = 20;
$y = 5;
echo $x;
echo '<br>';
//x+y and x*y not executing!!!

$z = $x + $y;
echo '<br';
echo $z;
$z = $x * $y;
echo '<br';
echo $z;
echo '<br';

$first_name = 'Michito';
$last_name = 'Iwata';

echo $first_name.' '.$lastname;
//above line not executing!!!
echo '<br>';

echo 'Here are the names with a sigle\'s quote! '.$first_name.' '.$last_name.' ';
// inside single quotes you must nest the variable with the following '.$variable.'
// also put \ in from of '
echo '<br>';

echo "Here are the names with a double's quote! $first_name$last_name";
echo '<br>';
$name = 'Michito ';
$name .= ' Iwata';
echo $name;
echo '<br>';

$x = 120;
$x /= 2;
echo $x;

echo '<br>';

$x = 120;
$x *= 2;
echo $x;

echo '<br>';

$x = 120;
$x *= .09;
echo $x;

//first function -  number_format()
echo '<br>';
$x = 137;
$x /= 4;
$friendly_x = number_format($x, 1);
echo $friendly_x;
//rounded to the 10th

echo '<br>';
//second function - date function
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';
//arrays
$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'grapes';
$fruit[] = 'apples';
$fruit[] = 'cherries';

echo '<br>';
echo $fruit[3];
echo '<br>';
//you can echo an index option

$fruit = array(
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries'
);

$fruit = [
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries',
    'strawberries'
];
// CANNOT echo an array!
echo $fruit;
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);
//var_dump shows number of charactors and charactor content

echo '<br>';
$nav[]= 'Home';
$nav[]= 'About';
$nav[]= 'Daily';
$nav[]= 'Contact';
$nav[]= 'Gallery';
echo $nav[0];

echo '<br>';
// associative array

echo '<br>';
$nav['inde.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

// index.php is the key of the array, and Home is the value(key, value, relationship)
$nav= array(
    'index.php' => 'Home',
    'about.php' => 'About', 
    'daily.php' => 'Daily', 
    'contact.php' => 'Contact', 
    'gallery.php ' => 'Gallery' 
);
echo '<pre>';
var_dump($nav);
echo '<pre>';

echo '<br';

$show = 'Cable Guy';
$show_actor = 'Carrey';
$show_genre = 'Comedy';

echo 'My favorite Jim Carrey film is "'.$show.'". The antagonist, '.$show_actor.' plays a leftfield, 
and somewhat of a career risking role in this cult classic feature, although it is still considered a '.$show_genre.' ';
echo '<br';
//not executing

