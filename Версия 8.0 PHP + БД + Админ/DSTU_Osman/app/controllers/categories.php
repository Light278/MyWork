<?php

include "../../app/database/db.php";

$errMsg = '';
$id = '';
$name = '';
$description = '';

$categories = selectAll('categories');

// Форма категории
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])){

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);


    if($name === '' || $description === '') {
        $errMsg = "Заполните все поля!";
    }elseif (mb_strlen($name, 'UTF-8') < 4){
        $errMsg = "Категория должна быть длиннее 4 символов!";
    }else{
        $existence = selectOne('categories', ['name' => $name]);
        if($existence['name'] === $name){
            $errMsg = "Такая категория уже есть!";
        }else{
            $categories = [
                'name' => $name,
                'description' => $description
            ];
            $id = insert('categories', $categories);
            $categories = selectOne('categories', ['id' => $id]);
            header('location: ' . BASE_URL . 'admin/topics/index.php');
        }

    }
} else {
    $name = '';
    $description = '';
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $categories = selectOne('categories', ['id' => $id]);
    $id = $categories['id'];
    $name = $categories['name'];
    $description = $categories['description'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])) {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' || $description === '') {
        $errMsg = "Заполните все поля!";
    } elseif (mb_strlen($name, 'UTF-8') < 4) {
        $errMsg = "Категория должна быть длиннее 4 символов!";
    } else {
        $existence = selectOne('categories', ['name' => $name]);
        if ($existence && $existence['id'] !== $_POST['id']) {
            $errMsg = "Такая категория уже есть!";
        } else {
            $categories = [
                'name' => $name,
                'description' => $description
            ];
            $id = $_POST['id'];
            update('categories', $id, $categories);
            header('location: ' . BASE_URL . 'admin/topics/index.php');
            exit();
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    delete('categories', $id);
    header('location: ' . BASE_URL . 'admin/topics/index.php');
}
