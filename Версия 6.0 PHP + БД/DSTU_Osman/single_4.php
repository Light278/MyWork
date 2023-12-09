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
                    <img src="assets/images/image_lodka4.png" alt="" class="img-thumbnail"> <!--Обводка фото-->
                </div>
                <div class="info">
                    <i class="fa-solid fa-ruble-sign"> Договорная </i>
                    <i class="fa-solid fa-address-book"> Исмаил Камаев </i>
                    <i class="fa-regular fa-calendar-days"> 15.09.2023 </i>
                </div>
                <div class="single_post_text col-12">
                    <h3>Описание:</h3>
                    <p>
                        Добро пожаловать в прекрасный город Махачкала, где живописные пейзажи и богатые водные пространства ждут вас! Если вы мечтаете о незабываемом отдыхе на просторах Каспийского моря, прокат катеров в Махачкале - это идеальное решение для вас.
                        Наша компания предлагает широкий выбор катеров, которые подойдут для любого путешествия. От спокойной прогулки вдоль береговой линии до захватывающего морского приключения - у нас есть все, чтобы удовлетворить самые требовательные потребности.
                    </p>
                    <p>
                        Наш флот состоит из современных и безопасных катеров, оснащенных новейшими технологиями и удобствами. Выберите катер, который лучше всего соответствует вашим потребностям и позволяет вам насладиться полной свободой передвижения по воде. У нас есть катера различных размеров, от компактных моделей для пары или небольшой группы друзей до просторных лодок для семейных поездок.
                    </p>
                    <p>
                        Наша команда профессионалов готова помочь вам на каждом этапе организации вашего отдыха. Мы предоставляем индивидуальные консультации и подбираем оптимальные варианты проката катера в соответствии с вашим бюджетом и пожеланиями. Мы гарантируем высокое качество обслуживания и безопасность во время вашего водного путешествия.
                    </p>
                    <p>
                        Прокат катеров в Махачкале - это отличная возможность насладиться красотами Каспийского моря, провести время с семьей или друзьями, и создать незабываемые впечатления. Познайте все прелести морского отдыха, наслаждайтесь чистым воздухом, плавайте в прозрачной воде и расслабляйтесь на живописных пляжах.
                    </p>
                    <p>
                        Не упускайте возможность испытать адреналин и встретить незабываемые впечатления на воде. Забыть о повседневных заботах и окунуться в мир удовольствия - это реально с прокатом катеров в Махачкале.
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
