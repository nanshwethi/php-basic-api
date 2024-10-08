<?php
// header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] != 'POST') {

    die('POST method only');
}

if (empty($_FILES['photo']['name'][0])) {
    die('require photo');
}

// print_r($_FILES);
$file_name = $_FILES['photo']['name'];
$folder = 'photo';

if (!is_dir($folder)) mkdir($folder,0777);

foreach ($file_name as $key => $names) {
    move_uploaded_file($_FILES['photo']['tmp_name'][$key], "./photo/" . uniqid() . '.' . pathinfo($names)['extension']);
}
echo 'successfully uploaded your data';
// var_dump(move_uploaded_file($_FILES['photo']['tmp_name'], "./photo/" . uniqid() . '.' . pathinfo($file_name[0])['extension']));

// echo ini_get('upload_max_filesize',);
// header('location:./upload.php');
