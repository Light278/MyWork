<?php
include "../../app/database/db.php";

$errMsg = '';
$title = '';
$content = '';
$img = '';
$category = '';

$categories = selectAll('categories');
$posts = selectAll('posts');
$postsAdm = selectAllFromPostsWithUsers('posts','users');

// Форма записи
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_posts'])) {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $category = trim($_POST['category']);

    $publish = trim($_POST['publish']) ? 1 : 0;

    if ($title === '' || $content === '' || $category === '') {
        $errMsg = "Заполните все поля!";
    } elseif (mb_strlen($title, 'UTF-8') < 4) {
        $errMsg = "Название статьи должно быть длиннее 4 символов!";
    } else {
        $user_id = $_SESSION['id'] ?? null; // Замена id фактическим сеансовым ключом
        $post = [
            'id_user' => $user_id,
            'title' => $title,
            'content' => $content,
            'img' => $_POST['img'],
            'status' => $publish,
            'id' => $category
        ];

        $postId = insert('posts', $post);
        header('location: ' . BASE_URL . 'admin/posts/index.php');
        exit;
    }
} else {
    $title = '';
    $content = '';
}



if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);

    $id = $post['id'];
    $title = $post['title'];
    $content = $post['content'];
    $category = $post['id'];
    $publish = $post['status'];
}
//Обработчик
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_post'])) {
    $id = $_POST['id'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $category = trim($_POST['category']);
    $publish = isset($_POST['publish']) ? 1 : 0;

    if ($title === '' || $content === '' || $category === '') {
        array_push($errMsg, "Не все поля заполнены!");
    } elseif (mb_strlen($title, 'UTF-8') < 7) {
        array_push($errMsg, "Категория должна быть более 7 символов");
    } else {
        $categoryData = [
            'id_user' => $_SESSION['id'],
            'title' => $title,
            'content' => $content,
            'img' => $_POST['img'],
            'status' => $publish,
            'id' => $category
        ];
        $post = update('posts', $id, $categoryData);
        header('location: ' . BASE_URL . 'admin/categories/index.php');
    }
}else{
    $title = $_POST['title'];
    $content = $_POST['content'];
    $publish = isset($_POST['publish']) ? 1 : 0;
    $category = $_POST['id'];
}
