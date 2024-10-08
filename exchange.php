<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] != 'POST') {

    die('POST method only');
}

if (empty($_POST['from_currencie']) || empty($_POST['to_currencie']) || empty($_POST['amount'])) {

    die("require \"from_currencie\" | \"to_currencie\" value and \"amount\" value");

}

$json = file_get_contents('http://forex.cbm.gov.mm/api/latest');


$data_arr = json_decode($json, true);
$rates = $data_arr['rates'];
$amount = $_POST['amount'];
$from = $_POST['from_currencie'];
$to = $_POST['to_currencie'];

if(!array_key_exists($from,$rates) || !array_key_exists($to,$rates)){
    die('check your currencie value we only service provided currencie');
}
// print_r($_POST);

$to_mmk = $amount * str_replace(',','',$rates[$from]);
$result = $to_mmk / str_replace(',','',$rates[$to]);
$_POST['calculated_value'] = round($result,3)."$to";
$folder_name = 'exchange_json';

    if (!is_dir($folder_name)) {
        mkdir($folder_name);
    }

file_put_contents("./$folder_name/".uniqid('exchange').'.json',json_encode($_POST));
print_r(json_encode($_POST));