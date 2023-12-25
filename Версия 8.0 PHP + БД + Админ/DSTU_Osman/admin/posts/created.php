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
        <div class="button row">
            <a href="<?php echo BASE_URL . "admin/posts/created.php";?>" class="col-3 btn btn-secondary">Создать</a>
            <span class="col-1"></span>
            <a href="<?php echo BASE_URL . "admin/posts/index.php";?>" class="col-3 btn btn-secondary">Редактировать</a>
        </div>
        <div class="row title-table">
            <h2>Добавление записей</h2>
        </div>
        <div class="row add-post">
            <form action="created.php" method="post">
                <div class="col">
                    <input name="title" type="text" class="form-control" placeholder="Ввод" aria-label="Название статьи по прокату">
                </div>
                <div class="col">
                    <label for="content" class="form-label">Содержимое записи</label>
                    <textarea name="content" class="form-control" id="content" rows="6"></textarea>
                </div>
                <div class="input-group col">
                    <input name="img" type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Загрузить</label>
                </div>
                <select name="category" class="form-select" aria-label="Default select example">
                    <option value="" disabled selected>Категория поста:</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= htmlspecialchars($category['id']); ?>"><?= htmlspecialchars($category['name']); ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="col">
                    <button name="add_posts" class="btn btn-primary" type="submit">Добавить запись</button>
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
