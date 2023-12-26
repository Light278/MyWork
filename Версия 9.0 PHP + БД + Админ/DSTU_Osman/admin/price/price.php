<?php
include "../../app/database/db.php";

$errMsg = '';
$name = '';
$price = '';

$prices = selectAll('price');

// Форма записи
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_price'])) {
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);

    if ($name === '' || $price === '') {
        $errMsg = "Заполните поле!";
    } elseif (mb_strlen($name, 'UTF-8') < 1) {
        $errMsg = "Цена не может быть меньше 1!";
    } else {
        $priceData = [
            'name' => $name,
            'price' => $price
        ];

        $priceId = insert('price', $priceData);
        header('location: ' . BASE_URL . 'admin/price/index.php');
        exit;
    }
} else {
    $name = '';
    $price = '';
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $priceData = selectOne('price', ['id' => $_GET['id']]);

    $id = $priceData['id'];
    $name = $priceData['name'];
    $price = $priceData['price'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_price'])) {
    $id = $_POST['id'];
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);

    if ($name === '' || $price === '') {
        array_push($errMsg, "Заполните строку");
    } elseif (mb_strlen($name, 'UTF-8') < 4) {
        array_push($errMsg, "Установите сумму");
    } else {
        $priceData = [
            'name' => $name,
            'price' => $price
        ];
        $price = update('price', $id, $priceData);
        header('location: ' . BASE_URL . 'admin/price/index.php');
    }
} else {
    $name = $_POST['name'];
    $price = $_POST['price'];
}
