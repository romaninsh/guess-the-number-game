<?php
require 'vendor/autoload.php';


$number = $_GET['number'];

$app = new \atk4\ui\App('Computer Will Guess Your Number');
$app->initLayout('Centered');

$app->add(['Header', 'Good game!! (gg)']);



$button = $app->add(['Label', 'The number was: ', 'detail'=>$number, 'icon'=>'thumbs up', 'huge basic green']);

$back = $app->add(['ui'=>'divider']);

$text = $app->add(['Text']);
$text->addParagraph('That wasn\'t that hard! I guessed it pretty quick, didn\'t I?');
$text->addParagraph('How about another game?');

$back = $app->add(['View', 'Play again'])
    ->link(['index']);
