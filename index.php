<?php 

use App\Application;

require_once './vendor/autoload.php';

$app = Application::getApplication();

$app::setName("Md Siddiqur Rahman");

$data = [2,3,4,5];
$app::addItem($data);