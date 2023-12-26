<?php error_reporting(0);?> <!--Антидупликейт костыль-->
<?php
session_start();
include "../../path.php";
include "../../app/controllers/posts.php"; //BAD
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/089fc21133.js" crossorigin="anonymous"></script>

    <!-- CSS + Google Fonts -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>By Osman</title>
</head>
<body>

<!-- Блок Header -->
<?php include("../../app/include/header-admin.php"); ?>

<!-- Блок Main -->
<div class="container">
    <?php include("../../app/include/sidebar-admin.php"); ?>

    <div class="posts col-9">
        <div class="row title-table">
            <h2>Редактирование записей</h2>
        </div>
        <div class="row add-post">
            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?=$id['id']; ?>">
                <div class="col">
                    <input name="title" value="<?=$title['title']; ?>" type="text" class="form-control" placeholder="Ввод" aria-label="Название статьи по прокату">

                </div>
                <div class="col">
                    <label for="content" class="form-label">Содержимое записи</label>
                    <textarea name="content" class="form-control" id="content" rows="6"><?=$post['content']; ?></textarea>
                </div>
                <div class="input-group col">
                    <input name="img" type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Загрузить</label>
                </div>
                <select name="category" class="form-select" aria-label="Default select example">

                    <?php foreach ($categories as $category): ?>
                        <option value="<?= htmlspecialchars($category['id']); ?>"><?= htmlspecialchars($category['name']); ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="col col-6">
                    <?php if (!isset($publish) || $publish == 0): ?>
                    <input type="checkbox" name="publish" id="flexCheckChecked">
                    <label>Публикация</label>
                    <?php else: ?>
                    <input type="checkbox" name="publish" id="flexCheckChecked" checked>
                    <label>Публикация</label>
                    <?php endif; ?>
                </div>
                <div class="col col-6">
                    <button name="edit_posts" class="btn btn-primary" type="submit">Сохранить запись</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include("../../app/include/admin-footer.php"); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
