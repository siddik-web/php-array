<?php 
require_once './vendor/autoload.php';

use App\Application;
use App\ArrayHelper;


$app = Application::getApplication();

$app::setName("Md Siddiqur Rahman");

$data = [2,3,4,5, [23,44,55,[44,55,22,[445,622,[555,66],555]]]];
//$app::addItem($data);

// SizeOff
//echo sizeof($data);



$num = [1, 1, 3, 4, 5, 6];

// Remove duplicate value;
$unique = ArrayHelper::getUniqueArray($num);

echo '<pre>';
print_r($unique);
echo '</pre>';



echo count($unique) === count($num)? true : false;

// Find Number of times value.
// $unique_value = array_count_values($num);

// print_r($unique_value);


// echo extract($num);





