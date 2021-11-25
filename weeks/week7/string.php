<?php
// sub strings and replace

$statement = "Presently, I am reading Tao Te Ching";
echo substr($statement, 0);
echo '<br>';
//by using 0, our complete statement will display
echo $statement;
echo '<br>';

echo substr($statement, 0, 4);  
echo '<br>';

echo substr($statement, 0, 14);   
echo '<br>';

echo substr($statement, -6);   
echo '<br>';

echo substr($statement, -7);   
echo '<br>';


echo substr($statement, -15, 5);  
echo '<br>';

// string replace function

$statement2 = 'I broke my foot in Las vegas.';

echo $statement2;
echo '<br>';
// call out the word you are replacing with the word you are replacing it with
echo str_replace('vegas', 'Vegas', $statement2);