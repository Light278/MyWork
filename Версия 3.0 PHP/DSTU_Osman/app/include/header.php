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
                    <li><a href="index.php">Главная</a> </li> <!--<li> используется для создания элементов списка. Он также должен находиться в родительском элементе-->
                    <li><a href="info.php">О нас</a> </li>
                    <li><a href="index.php">Услуги</a> </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i> <!--Иконка Font Awesome-->
                            Кабинет
                        </a>
                        <ul>
                            <li><a href="log.php">Админ панель</a> </li>
                            <li><a href="#">Выход</a> </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>