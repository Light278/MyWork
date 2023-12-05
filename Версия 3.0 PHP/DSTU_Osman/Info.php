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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>By Osman</title>
</head>
<body>

<!-- Блок Header -->
<?php include("app/include/header.php"); ?>

<!-- Блок Main -->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-9 col-12">
            <h2>Дагестанский государственный технический университет - г. Махачкала</h2>

            <div class="single_post row">
                <div class="img col-12"> <!--На всю ширину-->
                    <img src="assets/images/DSTU.png" alt="" class="img-thumbnail"> <!--Обводка фото-->
                </div>
                <div class="single_post_text col-12">
                    <h3>Дагестанский государственный технический университет</h3>
                    <p>
                        В университете работают более 100 докторов наук и профессоров, свыше 300 кандидатов наук и доцентов, всего — более 600 преподавателей высшей квалификации, 24 сотрудника университета являются членами-корреспондентами и академиками различных академий.
                    </p>
                    <h3>Факультеты</h3>
                    <p>
                        Компьютерных технологий, вычислительной техники и энергетики
                    </p>
                    <p>
                        Архитектурно-строительный
                    </p>
                    <p>
                        Информационных систем в экономике и управлении
                    </p>
                    <p>
                        Радиоэлектроники, телекоммуникаций и мультимедийных технологий
                    </p>
                    <p>
                        Технологический
                    </p>
                    <p>
                        Нефти, газа и природообустройства
                    </p>
                    <p>
                        Факультет права и управления на транспорте
                    </p>
                    <p>
                        ФПКиП
                    </p>
                    <p>
                        Факультет магистерской подготовки
                    </p>
                    <p>
                        <a href="https://dstu.ru/"> Сам сайт</a>
                    </p>
                    <p>
                        <a href="https://github.com/Light278/"> Мой GitHub</a>
                    </p>
                </div>
            </div>

        </div>
        <!-- Sidebar Content -->
        <?php include("app/include/sidebar.php"); ?>

        <!--Footer-->
        <?php include("app/include/footer.php"); ?>

        <!--Bootstrap JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
