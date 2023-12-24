<header class="container-fluid"> <!--Создание контейнера полной ширины-->
    <div class="container"> <!--Фиксированный контейнер-->
        <div class="row"> <!--Место под логотип-->
            <div class="col-4"> <!--Система сеток Bootstrap использует контейнеры, ряды и колонки, чтобы удобно располагать содержимое-->
                <h1>
                    <a href="<?php echo BASE_URL ?>">Курсовая</a> <!--Кликабельная-->
                </h1>
            </div>
            <nav class="col-8"> <!--Определяет отдельную секцию документа-->
                <ul> <!--Используется для неупорядоченного списка-->
                    <li><a href="<?php echo BASE_URL ?>">Главная</a> </li> <!--<li> используется для создания элементов списка. Он также должен находиться в родительском элементе-->
                    <li><a href="<?php echo BASE_URL . 'info.php' ?>">О нас</a> </li>
                    <li><a href="index.php">Услуги</a> </li>

                    <li>
                        <?php if (isset($_SESSION['id'])): ?>
                            <a href="<?php echo BASE_URL . "index.php"; ?>">
                                <i class="fa fa-user"></i> <!--Иконка Font Awesome-->
                                <?php echo $_SESSION['login']; ?>
                            </a>
                            <ul>
                                <?php if ($_SESSION['admin']): ?>
                                    <li><a href="<?php echo BASE_URL . "/admin/posts/index.php"; ?>">Админ панель</a> </li>
                                <?php endif; ?>
                                <li><a href="<?php echo BASE_URL . "logout.php"; ?>">Выход</a> </li>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . "log.php"; ?>">
                                <i class="fa fa-user"></i> <!--Иконка Font Awesome-->
                                Войти
                            </a>
                            <ul>
                                <li><a href="<?php echo BASE_URL . "reg.php"; ?>">Регистрация</a> </li>
                            </ul>
                        <?php endif; ?>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>