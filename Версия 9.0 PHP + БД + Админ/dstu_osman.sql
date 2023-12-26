-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 26 2023 г., 18:46
-- Версия сервера: 8.0.31
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dstu_osman`
--

-- --------------------------------------------------------

--
-- Структура таблицы `boat_information`
--

CREATE TABLE `boat_information` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `boat_information`
--

INSERT INTO `boat_information` (`id`, `name`, `category_id`) VALUES
(1, 'Лодка', 16),
(12, 'MY', 17),
(13, 'Cfblj', 16);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(16, 'Моя категория', 'Вавыа'),
(17, '`1`1`1 вайл', '`1`1`1 лойд');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint NOT NULL,
  `id_topic` int NOT NULL,
  `created_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `id_user`, `title`, `img`, `content`, `status`, `id_topic`, `created_data`) VALUES
(1, 2, '2112', '2121', '', 1, 15, '2023-12-26 17:53:49'),
(21, 56, '231435', '', '234546', 0, 16, '2023-12-26 17:41:49'),
(24, 56, '314325324', '', '425436436', 0, 16, '2023-12-26 18:13:05'),
(25, 56, '314325324', '', '425436436', 1, 16, '2023-12-26 18:13:09'),
(26, 56, '314325324', '', '425436436', 0, 16, '2023-12-26 18:13:18');

-- --------------------------------------------------------

--
-- Структура таблицы `price`
--

CREATE TABLE `price` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(12) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `price`
--

INSERT INTO `price` (`id`, `name`, `price`) VALUES
(1, 'Цена на плавательные средства', 'Договорная');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `admin` tinyint NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created`) VALUES
(1, 1, 'Eldar', 'eldar@gmail.com', 'eldar', '2023-12-04 19:15:30'),
(2, 1, 'Ahmed', 'ahmed@gmail.com', 'ahmed', '2023-12-04 19:15:30'),
(3, 1, 'Omar', 'omar@gmail.com', 'omar', '2023-12-04 19:15:30'),
(4, 1, 'Abdul', 'abdul@gmail.com', 'abdul', '2023-12-04 19:15:30'),
(5, 1, 'Ismail', 'ismail@gmail.com', 'ismail', '2023-12-04 19:15:30'),
(44, 0, 'dadad', 'eldar1@gmail.com', '$2y$10$QHbKSx8L1jdyKPK29ncDj.XkqrMns.sEcEyVMesLXDr.TbcWFpd/C', '2023-12-06 17:23:01'),
(45, 0, 'dadad', 'eldar12@gmail.com', '$2y$10$i3mKqfgRxmPMzKmJ2F1XxuCR6MkO2nGDJrBHOytAOjfuV22bVG.1C', '2023-12-06 17:25:16'),
(46, 0, 'asssasn', 'islan@gmail.com', '$2y$10$/X3jP2LOJGaNYO3InKKbJukwArb3VSXkjJHhZBJ6/atMxfYZd4XYC', '2023-12-06 17:25:33'),
(47, 0, 'ddasfdsg', 'osmaan0770770@gmail.com', '$2y$10$Q9FixohLNVDl/AZEoIr5BO.ZlxCDftG54Z6NgV3NvE.4438mVCZzC', '2023-12-06 17:37:35'),
(48, 0, 'ddasfdsg1', 'osm2aan0770770@gmail.com', '$2y$10$4blACqUjZj6xuhiPti48/eEzzv20FPZP0Tf9TDKqh13kVUz6wi/CO', '2023-12-06 17:39:02'),
(49, 0, 'osm21an0770770@gmail.com', '21345@gmail.com', '$2y$10$GmveVWHoip/SfkWa4jXKneJgzNw1rqM07KFwgcspurxp2YHnukYpW', '2023-12-06 17:47:16'),
(50, 0, 'rararar', 'osm13413an0770770@gmail.com', '$2y$10$hWgXGPHpVSjat.3x.pX1q.lEXLDlOzPrMwnTR1R3Hr5nrlTShWdZe', '2023-12-06 17:55:23'),
(51, 1, 'osman0770770@gmail.com', 'osman0770770@gmail.com', '$2y$10$BuOzA./gBMVu45.17B6JGesCp7cq8mb6a2kpReanRSCT29AwKPKx6', '2023-12-06 18:38:23'),
(52, 0, 'osm1an0770770@gmail.com', 'osm1an0770770@gmail.com', '$2y$10$ZqbX6.2nJQXBwMH.SjnC6eeCqd6Dsc/RAuJbKVfDCBKF/0EdAmbwO', '2023-12-06 19:40:22'),
(53, 0, 'asma', 'asma@gmail.com', '$2y$10$GI80eblf0I0X0yWmC9GeWuwZ4vgH/gj88m/H0p7FXX/M1MJbffUZa', '2023-12-06 19:49:30'),
(54, 1, 'sadsadsad', '1@mail.ru', '$2y$10$09/GLm4Jlf8kIifC.ToDW.S0UvhbiKFKB53GaufUD7zAG.ujg8IWK', '2023-12-06 21:06:50'),
(55, 0, 'adasdfsfdsg', 'asdsadfgdsg@mail.ru', '$2y$10$HBH.ZJxkL7itz5hu0VZTnOsCJ5wYHPN0MlKxCOLFFgqKNLz0Hqxl2', '2023-12-07 13:55:38'),
(56, 1, 'password@gmail.com', 'password@gmail.com', '$2y$10$6OaOSakJdcsGHRWmGhfc4OTCX1GS6K9wO3i8WGOyof1RgzBzfPz1m', '2023-12-23 11:43:35'),
(57, 0, 'da@gmail.com', 'da@gmail.com', '$2y$10$8ksR/b9S8EaVZ/gJDsTqJOlzXG2fqmbYrtIoCHNK88VWO.wBTH2cm', '2023-12-23 11:46:03'),
(58, 0, 'asd@mail.ru', 'asd@mail.ru', '$2y$10$9W/iLA.GuT6thGZvu80KJeKCxCsDjslR94eo/ftxwIZlMJ9dcWNs2', '2023-12-23 16:48:02');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `boat_information`
--
ALTER TABLE `boat_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `boat_information`
--
ALTER TABLE `boat_information`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `price`
--
ALTER TABLE `price`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `boat_information`
--
ALTER TABLE `boat_information`
  ADD CONSTRAINT `boat_information_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
