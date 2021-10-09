<?php
//more on variables, arithmetic and additional set functions

$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';

$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '234';
$b = '234234';
$c = $a * $b;
echo $c;
echo '<br>';

$money = 100;
$money /= 7;
echo $money; 
echo '<br>';
$money = 100;
$money /= 7;
$friendly_money = number_format($money, 2);
echo $friendly_money; 
echo '<br>';
// two new functions rounding up and rounding down (floor and ceil)
$friendly_money = floor($money);
echo $friendly_money;
echo '<br>';
echo '<br>';
$friendly_money = ceil($money);
echo $friendly_money;
echo '<br>';
// Logic and calculations

// circumference of a circle, 2 3.14*r
$radius = '10';
$pi = 3.14;
$circumference = (2 * $pi) * $radius;
echo $circumference;

// 22 degrees celcius = ? in far? 
// far = (C*9/5) + 32
$celcius = 33;
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
echo '<br>';
echo ''.$friendly_far.' degrees';

//echange rate
// canadian = 100
// exchange = .79
echo '<br>';
$canada = 123456;
$canada *= .79;

echo $canada ;

echo '<p>I have <b>'.$canada.'.00</b> American dollars! </p>';


echo '<br>';
$canada = 123456;
$canada *= .79;
$friendly_canada = floor($canada);

echo '<p>I have <b>'.$friendly_canada.'.00</b> American dollars! </p>';

echo '<br>';
$canada = 123456;
$canada *= .79;
$friendly_canada = ceil($canada);
 
echo '<p>I have <b>'.$friendly_canada.'.00</b> American dollars! </p>';

