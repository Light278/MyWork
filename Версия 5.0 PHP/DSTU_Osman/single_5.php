<?php include("path.php");
include 'app/database/db.php'
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
            <h2>Катание и прогулки по реке - г. Махачкала</h2>

            <div class="single_post row">
                <div class="img col-12"> <!--На всю ширину-->
                    <img src="assets/images/image_lodka5.png" alt="" class="img-thumbnail"> <!--Обводка фото-->
                </div>
                <div class="info">
                    <i class="fa-solid fa-ruble-sign"> Договорная </i>
                    <i class="fa-solid fa-address-book"> Исмаил Камаев </i>
                    <i class="fa-regular fa-calendar-days"> 15.09.2023 </i>
                </div>
                <div class="single_post_text col-12">
                    <h3>Описание:</h3>
                    <p>
                        Приветствуем вас в Махачкале, столице Дагестана! Вы хотите испытать настоящий азарт и великолепие Каспийского моря? Тогда фирма "ДАГСУ" - ваш идеальный выбор для проката катеров!
                        Наша компания специализируется на предоставлении незабываемых приключений с помощью комфортабельных, надежных и безопасных катеров. Неважно, являетесь ли вы опытным моряком или новичком, мы предлагаем широкий ассортимент катеров, чтобы удовлетворить все ваши потребности.
                    </p>
                    <p>
                        Что делает фирму "ДАГСУ" лучшим выбором для проката катеров в Махачкале? Перечислим только некоторые из преимуществ, которые вы получите, обратившись к нам:
                    </p>
                    <p>
                        Качество и надежность. Мы сотрудничаем только с проверенными поставщиками и поставщиками услуг, чтобы обеспечить вам только самые надежные и безопасные катера. Ваше спокойствие и удовольствие являются нашими первоочередными задачами.
                    </p>
                    <p>
                        Разнообразие выбора. Фирма "ДАГСУ" предлагает широкий спектр катеров различных размеров и мощностей, чтобы удовлетворить все ваши пожелания. Независимо от того, нужен ли вам небольшой катер для рыбалки или просторный катамаран для веселой вечеринки с друзьями, у нас есть идеальный вариант для вас.
                    </p>
                    <p>
                        Профессиональный сервис. Наша команда опытных и дружелюбных сотрудников всегда готова помочь вам во всех вопросах, связанных с прокатом катеров. Мы предоставим вам всю необходимую информацию о безопасности, правилах плавания, а также подскажем места, которые стоит посетить.
                    </p>
                    <p>
                        8 928 XXX XX XX - <a href="https://web.whatsapp.com/"> WhatsApp</a>
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
