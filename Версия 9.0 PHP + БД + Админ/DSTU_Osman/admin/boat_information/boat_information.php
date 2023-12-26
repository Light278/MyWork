<?php
include "../../app/database/db.php";

$errMsg = '';
$name = '';
$category_id = '';

$categories = selectAll('categories'); // Получаем список категорий для выпадающего списка

// Форма записи
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_boat_information'])) {
    $name = trim($_POST['name']);
    $category_id = trim($_POST['category_id']);

    if ($name === '' || $category_id === '') {
        $errMsg = "Заполните все поля!";
    } elseif (mb_strlen($name, 'UTF-8') < 4) {
        $errMsg = "Название плавательного средства должно быть длиннее 4 символов!";
    } else {
        $boatInformationData = [
            'name' => $name,
            'category_id' => $category_id
        ];

        $boatInformationId = insert('boat_information', $boatInformationData);
        header('location: ' . BASE_URL . 'admin/boat_information/index.php');
        exit;
    }
} else {
    $name = '';
    $category_id = '';
}

// Получаем данные для редактирования
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $boatInformation = selectOne('boat_information', ['id' => $_GET['id']]);

    $id = $boatInformation['id'];
    $name = $boatInformation['name'];
    $category_id = $boatInformation['category_id'];
}

// Обработчик редактирования
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_boat_information'])) {
    $id = $_POST['id'];
    $name = trim($_POST['name']);
    $category_id = trim($_POST['category_id']);

    if ($name === '' || $category_id === '') {
        array_push($errMsg, "Не все поля заполнены!");
    } elseif (mb_strlen($name, 'UTF-8') < 4) {
        array_push($errMsg, "Название плавательного средства должно быть длиннее 4 символов!");
    } else {
        $boatInformationData = [
            'name' => $name,
            'category_id' => $category_id
        ];
        $boatInformation = update('boat_information', $id, $boatInformationData);
        header('location: ' . BASE_URL . 'admin/boat_information/index.php');
    }
} else {
    $name = $_POST['name'];
    $category_id = $_POST['category_id'];
}
