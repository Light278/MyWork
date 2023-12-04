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
                    <img src="assets/images/image_lodka1.png" alt="" class="img-thumbnail"> <!--Обводка фото-->
                </div>
                <div class="info">
                    <i class="fa-solid fa-ruble-sign"> Договорная </i>
                    <i class="fa-solid fa-address-book"> Исмаил Камаев </i>
                    <i class="fa-regular fa-calendar-days"> 15.09.2023 </i>
                </div>
                <div class="single_post_text col-12">
                    <h3>Описание:</h3>
                    <p>
                        Наша компания предлагает прокат прогулочных катеров и лодок для катания и отдыха на воде. Мы организуем туристические прогулки, предоставляя возможность насладиться красотами окружающей природы, провести время активно и запомнить удивительные моменты.
                        Мы гордимся нашим богатым опытом работы в данной сфере, который позволяет нам предложить нашим клиентам только лучшее обслуживание и безопасность во время прогулок. Наши сотрудники, опытные капитаны и инструкторы, обеспечат вас профессиональным погружением в уникальную атмосферу водного отдыха.
                    </p>
                    <p>
                        Цена наших услуг договорная и зависит от выбранного вами типа катера или лодки, а также продолжительности проката. Мы предлагаем разнообразные варианты судов, включая большие семейные катера, комфортабельные лодки для небольших компаний, а также специализированные суда для экстремальных видов отдыха на воде.
                    </p>
                    <p>
                        Наши катера и лодки оборудованы всем необходимым для комфортного и безопасного плавания, включая спасательные средства и навигационные системы. Мы гарантируем, что наши суда проходят регулярную проверку и обслуживание, чтобы обеспечить безопасность ваших прогулок.

                        В нашей компании мы уделяем особое внимание тому, чтобы каждая прогулка на наших катерах и лодках была качественно организована и уникальна. Мы понимаем, что каждый клиент имеет свои предпочтения и потребности, поэтому мы готовы предложить индивидуальный подход и разработку маршрута, который подойдет именно вам.
                    </p>
                    <p>
                        Забудьте о повседневной суете и насладитесь незабываемым отдыхом на воде с нашей компанией. Мы гарантируем, что вместе с нами вы окунетесь в мир ярких впечатлений, неповторимых моментов и незабываемых прогулок.

                    </p>
                    <p>
                        Свяжитесь с нами уже сегодня, чтобы узнать больше о наших услугах и получить все необходимые сведения о прокате прогулочных катеров и лодок. Мы с удовольствием ответим на все ваши вопросы и поможем организовать незабываемое путешествие на воде.
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
