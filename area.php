<?php 

header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    
    die('POST method only');
} ;


if (empty($_POST['width']) || empty($_POST['height'])) {

    die('require width and height value');
}

$width = $_POST['width'];
$height = $_POST['height'];
$result = $width * $height;
$_POST['result'] = $result.' sqft';
print_r(json_encode($_POST));
$file_name = 'area_json';

    if (!is_dir($file_name)) {
        mkdir($file_name);
    }
    file_put_contents('./area_json/'.uniqid('area').'.json',json_encode($_POST));
        



