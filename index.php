<?php
require 'vendor/autoload.php';

// Initialize Web App
$app = new \atk4\ui\App('Computer Will Guess Your Number');
$app->initLayout('Centered');

// Display Instructions
$app->add(['Header', 'Instructions']);

$text = $app->add(['Text']);
$text->addParagraph('This game demonstrates how to use Links, Buttons, Headers, Text in Agile Toolkit.');
$text->addParagraph('To play the game you need to choose number between 0 and 100. When you have selected your number, begin the game');

// Add button to start the game
$button = $app->add(['Button', 'Begin the game!', 'iconRight'=>'smile']);
$button->set(['primary'=>true]);
$button->link(['main','max'=>100,'min'=>0]);
