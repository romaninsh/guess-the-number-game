<?php

require 'vendor/autoload.php';

use \atk4\ui\Header;

$app = new \atk4\ui\App('Computer will guess the number');
$app->initLayout('Centered');

    $b = $_GET['b'];
    $m = $_GET['m'];

    $n = round(($b+$m)/2);

    $app->add(new Header(['Your number is '.$n.' ?', 'size'=>1]));

    $button = $app->layout->add(['Button', "Yes, it's my number!",'iconRight'=>'empty star']);
    $button->set(['primary'=>true]);
    $button->set(['size big'=>true]);
    $button->link(['win','n'=>$n]);

    $button = $app->layout->add(['Button', 'No, my number is smaller.','iconRight'=>'arrow down']);
    $button->set(['primary'=>true]);
    $button->set(['size big'=>true]);
    $button->link(['main','b'=>$n,'m'=>$m]);

    $button = $app->layout->add(['Button', 'No, my number is bigger.','iconRight'=>'arrow up']);
    $button->set(['primary'=>true]);
    $button->set(['size big'=>true]);
    $button->link(['main','b'=>$b,'m'=>$n]);

    $button = $app->layout->add(['Button', 'Play again.','iconRight'=>'refresh']);
    $button->set(['primary'=>true]);
    $button->set(['size big'=>true]);
    $button->link(['main','b'=>100,'m'=>0]);
