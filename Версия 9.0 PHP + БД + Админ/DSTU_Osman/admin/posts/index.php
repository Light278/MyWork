<?php error_reporting(0);?> <!--Антидупликейт костыль-->
<?php session_start();
include "../../path.php";
include "../../app/controllers/posts.php";
?>

<!doctype html>
<html lang="en">
<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/089fc21133.js" crossorigin="anonymous"></script>

    <!--CSS + Google Fonts-->
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

        <!-- <div class="col-1"></div> Костыль, отступ-->
        <div class="posts col-9">
            <div class="button row">
                <a href="<?php echo BASE_URL . "admin/posts/created.php";?>" class="col-3 btn btn-secondary">Создать</a> <!--Bootstrap-->
                <span class="col-1"></span> <!--Отступ-->
                <a href="<?php echo BASE_URL . "admin/posts/index.php";?>" class="col-3 btn btn-secondary">Редактировать</a>
            </div>
            <div class="row title-table">
                <h2>Управление и редактирование записей</h2>
                <div class="col-1">ID</div>
                <div class="col-5">Название</div>
                <div class="col-2">Автор</div>
                <div class="col-4">Управление</div>
            </div>
            <?php foreach ($postsAdm as $key => $post): ?>
            <div class="row post">
                <div class="id col-1"><?=$key + 1; ?></div>
                <div class="title col-5"><?=$post['title']; ?></div>
                <div class="author col-2"><?=$post['username']; ?></div>
                <div class="red col-1"><a href="edit.php?id=<?=$post['id'];?>">Edit</a></div>
                <div class="del col-1"><a href="">Delete</a></div>
                <?php if ($post['status']): ?>
                <div class="status col-2"><a href="">В черновик</a></div>
                <?php else: ?>
                <div class="status col-2"><a href="">Опубликовать</a></div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!--Footer-->
<?php include("../../app/include/admin-footer.php"); ?>

<!--Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>