<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] != 'GET') {

    die('GET method only');
}
$folder_name = 'products';

$data = array_filter(scandir("./$folder_name/"),fn($i)=> $i != '.' && $i!='..' );

$result = [];
foreach ($data as $value) {

   $json = file_get_contents("./$folder_name/".$value);
   $obj = json_decode($json);
   array_push($result,$obj);

    
}

echo json_encode($result);