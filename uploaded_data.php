<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] != 'GET') {

    die('GET method only');
}
$folder_name = 'photo';

$data = array_filter(scandir("./$folder_name/"),fn($i)=> $i != '.' && $i!='..' );

print_r(json_encode(array_values($data)));