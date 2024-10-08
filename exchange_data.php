<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] != 'GET') {

    die('GET method only');
}

$folder_name = 'exchange_json';

$data = array_filter(scandir("./$folder_name/"),fn($i)=> $i != '.' && $i!='..' );

foreach ($data as $value) {
    echo file_get_contents("./$folder_name/".$value);
    
}