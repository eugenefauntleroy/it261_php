<?php //  functions

function sayHello() {
    echo 'Hello World!';
}

sayHello();

echo '<br>';

function sayHello2($name) {
    echo 'Hello, '.$name.'';
}

sayHello2('Mich');
echo '<br>';
sayHello2('Pablo');
echo '<br>';
sayHello2('CM');
echo '<br>';
sayHello2('Dwayne');

echo '<br>';

function sayHello3($name, $age) {
    echo 'My name is '.$name.' and I am '.$age.' years old!  ';
}

// two arguments 1)name and 2)age
sayHello3('Jordan', 35 );
echo '<br>';
sayHello3('Benjamin', 32 );
echo '<br>';
sayHello3('Brady', 40 );
echo '<br>';
sayHello3('Natalie', 32 );
echo '<br>';


function cube($n) {
$cubing = $n * $n * $n;
echo $cubing;
}

cube(5);

echo '<br>';


function celcius_converter($temp) {
$far = ($temp * 9/5) + 32;
return $far;
}

$far = celcius_converter(40);
echo ' '.$far.' degrees' ;

echo '<br>';
echo '<br>';

function area_volume($value1, $value2, $value3) {
$area = $value1 * $value2;
$volume = $value1 * $value2 * $value3;
return array($area, $volume);
}

list($my_area, $my_volume) = area_volume(15, 9, 5);
echo '<b>Area</b> '.$my_area.' ';
echo '<b>Volume</b> '.$my_volume.' ';