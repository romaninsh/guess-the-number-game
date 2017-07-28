<?php

require 'vendor/autoload.php';

$app = new \atk4\ui\App('Computer Will Guess Your Number');
$app->initLayout('Centered');

// Link will pass max and min number, which we will store in the variables
$max = $_GET['max'];
$min = $_GET['min'];

// We guessed the number, but user pressed min/max anyway!
if ($max - $min <= 1) {
    $app->add(['Message', 'I think you are cheating!!', 'red']);
    $back = $app->add(['ui'=>'divider']);

    $back = $app->add(['View', 'Back to the beginning'])
        ->link(['index']);
    exit;
}

// Calculate number in the middle
$middle = round( ($max + $min) / 2);

// Display header
$app->add(['Header', 'Tell me a little about your number']);

// This creates nice button bar with blue buttons inside
$text = $app->add(['Text']);
$text->addParagraph('I think that your number is between '.$min.' and '.$max.'. But how does it compare with '.$middle.'?');

$button = $app->add(['Button', 'My number is less than '.$middle, 'iconRight'=>'arrow down']);
$button->link(['main','max'=>$middle,'min'=>$min]);

$button = $app->add(['Button', 'My number is exactly '.$middle.'!', 'iconRight'=>'empty star']);
$button->link(['win','number'=>$middle]);

$button = $app->add(['Button', 'My number is greater then '.$middle, 'iconRight'=>'arrow up']);
$button->link(['main','max'=>$max,'min'=>$middle]);


$back = $app->add(['ui'=>'divider']);

$back = $app->add(['View', 'Back to the beginning'])
    ->link(['index']);
