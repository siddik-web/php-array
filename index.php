<?php 

use App\Application;

require_once './vendor/autoload.php';

$app = Application::getApplication();

$app::setName("Md Siddiqur Rahman");

$data = [2,3,4,5, [23,44,55,[44,55,22,[445,622,[555,66],555]]]];
$app::addItem($data);

// SizeOff
echo sizeof($data);