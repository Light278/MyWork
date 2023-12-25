<?php
include "../../app/database/db.php";

$errMsg = '';
$title = '';
$content = '';
$img = '';
$category = '';

$categories = selectAll('categories');

// Форма записи
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_posts'])) {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $category = trim($_POST['category']);

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
            'status' => 1,
            'id_topic' => $category
        ];

        $postId = insert('posts', $post);
        header('location: ' . BASE_URL . 'admin/posts/index.php');
        exit;
    }
} else {
    $title = '';
    $content = '';
}
