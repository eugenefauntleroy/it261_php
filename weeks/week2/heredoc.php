<?php
//uing the heredoc! it's useful for paragraphs

$sbook = 'After the Plague';
$author = 'T.C. Boyle';
$character = 'Handmaid\'s tale';
$actor = 'Gary Oldman';

$content = <<< hand
$sbook, $author, $actor's rendition as $character

Once this content is corrected, my content is 
displayed in red (not orange), and my variables are displayed in black!!!
hand;

//'Once I use "heredoc," all of my content is displayed in 'red.' 
hand;

echo $content;

