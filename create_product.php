<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] != 'POST') {

    die('POST method only');
}

// print_r($_POST);
// print_r($_FILES);


if (empty($_POST['product_name']) || empty($_POST['price']) || empty($_POST['product_rating']) || empty($_FILES['product_photo']['name'])) {

    die("require \"product_name\" | \"price\" value | \"product_rating\" value and\"product_photo\" value ");

}

if(!is_dir('products')){
    mkdir('products',0777);
}
if(!is_dir('product_images')) {
    mkdir('product_images',0777);
}
$product_name = $_FILES['product_photo']['name'];
$exten = pathinfo($product_name)['extension'];
$img = uniqid().".".$exten;


if(move_uploaded_file($_FILES['product_photo']['tmp_name'],'./product_images/'.$img)){

    $_POST['product_image'] = $img;
    $product_data = json_encode($_POST);
    file_put_contents('./products/'.uniqid().'_'.$_POST['product_name'].'.json',$product_data);
    echo ' created new product successfully';
}

