<?php 

$animals = array(
    'dog',
    'cat',
    'bat',
    'hog',
    'flamingo'
);

$my_animals = implode(', ', $animals);
echo $my_animals;