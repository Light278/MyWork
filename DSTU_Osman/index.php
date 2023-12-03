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
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>By Osman</title>
</head>
<body>

<!-- Блок Header -->
<header class="container-fluid"> <!--Создание контейнера полной ширины-->
    <div class="container"> <!--Фиксированный контейнер-->
        <div class="row"> <!--Место под логотип-->
            <div class="col-4"> <!--Система сеток Bootstrap использует контейнеры, ряды и колонки, чтобы удобно располагать содержимое-->
                <h1>
                    <a href="/">Курсовая</a> <!--Кликабельная-->
                </h1>
            </div>
            <nav class="col-8"> <!--Определяет отдельную секцию документа-->
                <ul> <!--Используется для неупорядоченного списка-->
                    <li><a href="#">Главная</a> </li> <!--<li> используется для создания элементов списка. Он также должен находиться в родительском элементе-->
                    <li><a href="#">О нас</a> </li>
                    <li><a href="#">Услуги</a> </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i> <!--Иконка Font Awesome-->
                            Кабинет
                        </a>
                        <ul>
                            <li><a href="#">Админ панель</a> </li>
                            <li><a href="#">Выход</a> </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- Блок Main -->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-9 col-12">
            <h2>Прокат плавательных средств в Махачкале</h2>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="images/image_lodka1.png" alt="" class="img-thumbnail"> <!--Обводка фото-->
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="single_1.html">Катание и прогулки по реке - г. Махачкала</a>
                    </h3>
                    <i class="fa-solid fa-ruble-sign"> Договорная </i>
                    <i class="fa-solid fa-address-book"> Эльдар Камаев </i>
                    <i class="fa-regular fa-calendar-days"> 15.09.2023 </i>
                    <p class="preview-text">
                        Прокат прогулочных катеров, лодок для катания и отдыха на воде. Туристические прогулки.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="images/image_lodka2.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="single_2.html">Катание на катере 4 места - г. Махачкала</a>
                    </h3>
                    <i class="fa-solid fa-ruble-sign"> Договорная </i>
                    <i class="fa-solid fa-address-book"> Ахмед Гамзатов </i>
                    <i class="fa-regular fa-calendar-days"> 22.10.2023 </i>
                    <p class="preview-text">
                        Прокат речного судна – это отличная возможность совершить прогулку по реке или озеру.
                        Благодаря такой услуге вы можете отправиться в романтическое путешествие со своим возлюбленным или же на прогулку с дружной компанией.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="images/image_lodka3.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="single_3.html">Прогулки на катере по реке Сулак из Махачкалы</a>
                    </h3>
                    <i class="fa-solid fa-ruble-sign"> Договорная </i>
                    <i class="fa-solid fa-address-book"> Омар Каидов </i>
                    <i class="fa-regular fa-calendar-days"> 08.07.2023 </i>
                    <p class="preview-text">
                        Прокат прогулочного катера предоставляет возможность любителям активного отдыха и катания на воде наслаждаться комфортом и удобством, не задумываясь о покупке и хранении собственного судна
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="images/image_lodka4.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="single_4.html">Аренда катера для отдыха и рыбалки - г. Махачкала</a>
                    </h3>
                    <i class="fa-solid fa-ruble-sign"> Договорная </i>
                    <i class="fa-solid fa-address-book"> Абдул Зурабов </i>
                    <i class="fa-regular fa-calendar-days"> 05.12.2023 </i>
                    <p class="preview-text">
                        Арендуйте катер для незабываемого катания по водным просторам в компании вашего друга. Наслаждайтесь настоящей свободой, гоняясь по волнам, чувствуя мощь двигателя и слушая звуки природы.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="images/image_lodka5.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="single_5.html">Путешествие на катере г. Махачкала</a>
                    </h3>
                    <i class="fa-solid fa-ruble-sign"> Договорная </i>
                    <i class="fa-solid fa-address-book"> Исмаил Курбанов </i>
                    <i class="fa-regular fa-calendar-days"> 15.09.2023 </i>
                    <p class="preview-text">
                        Аренда катера - идеальный способ провести время с семьей и друзьями, насладиться свежим воздухом и природой, а также познакомиться с новыми местами и достопримечательностями.
                    </p>
                </div>
            </div>

        </div>
        <!-- Sidebar Content -->
        <div class="sidebar col-md-3 col-12">

            <div class="section search">
                <h3>Поиск по сайту</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Поиск">
                </form>
            </div>


            <div class="section topics">
                <h3>Категории</h3>
                <ul>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Лодки на прокат</a></li>
                    <li><a href="#">Гарантии</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<!--Footer-->
<div class="footer container-fluid">
    <div class="footer-content container">
        <div class="row">
            <div class="footer-section about col-md-4 col-12">
                <h3 class="logo-text">Контакты</h3>
                <p>
                    Для уточнения деталей и получения дополнительной информации, пожалуйста, свяжитесь с нами.
                </p>
                <div class="contact"> <!--Инфо-->
                    <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                    <span><i class="fas fa-envelope"></i> &nbsp; osman0770770@gmail.com</span>
                </div>
                <div class="socials">
                    <a href="#"><i class="fa-brands fa-vk"></i></a> <!--VK-->
                    <a href="#"><i class="fa-brands fa-youtube"></i></a> <!--YouTube-->
                    <a href="https://dstu.ru/"><i class="fa-solid fa-building-columns"></i></a> <!--DSTU-->
                </div>
            </div>

            <div class="footer-section links col-md-4 col-12">
                <h3>Quick Links</h3>
                <br>
                <ul>
                    <a href="#">
                        <li>О нас</li>
                    </a>
                    <a href="#">
                        <li>Лодки на прокат</li>
                    </a>
                    <a href="#">
                        <li>Галлерея</li>
                    </a>
                    <a href="#">
                        <li>Гарантии</li>
                    </a>
                </ul>
            </div>

            <div class="footer-section contact-from col-md-4 col-12">
                <h3>Контакты</h3>
                <br>
                <form action="index.php" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Ваша почта">
                    <textarea rows="4" name="message" class="text-input contact-input" placeholder="Ваше сообщение"></textarea>
                    <button type="submit" class="btn btn-big contact-btn">
                        <i class="fas fa-envelope"></i>
                        Отправить
                    </button>
                </form>
            </div>

        </div>

        <div class="footer-bottom">
            &copy; osmanov.com | Designed by Osman Ramazaov <!--Копирайтинг-->
        </div>
    </div>
</div>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
