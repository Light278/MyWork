<?php
    include("path.php");
    include("app/controllers/users.php");
?>

<!doctype html>
<html lang="ru">
<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/089fc21133.js" crossorigin="anonymous"></script>

    <!--CSS + Google Fonts-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>By Osman</title>
</head>
<body>

<!-- Блок Header -->
<?php include("app/include/header.php"); ?>

<!-- Форма -->

<div class="container reg_form">
    <form class="row justify-content-md-center" method="post" action="log.php">
        <h2 class="col-12">Авторизация</h2>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?=$errMsg?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4"> <!-- Форма 1 -->
            <label for="formGroupExampleInput" class="form-label">Ваша почта</label>
            <input name="email" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4"> <!-- Форма 3 -->
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4"> <!-- Кнопка -->
            <button type="submit" name="button-log" class="btn btn-secondary"> Войти </button>
            <a href="reg.php"> Зарегистрироваться </a>
        </div>
    </form>
</div>

<!--Footer-->
<?php include("app/include/footer.php"); ?>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
