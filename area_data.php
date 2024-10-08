<?php
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] != 'GET'){
    
    die('GET method only');
} ;

$data = array_filter(scandir('./area_json/'),fn($i)=> $i != '.' && $i!='..' );

foreach ($data as $value) {
    echo file_get_contents('./area_json/'.$value);
    
}
