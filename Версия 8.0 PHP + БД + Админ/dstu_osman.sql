-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 25 2023 г., 20:42
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
(16, 'Моя категория', 'Вавыа');

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
(6, 56, 'ФОТОЧКА', 'Снимок.PNG', 'АГА', 1, 15, '2023-12-25 22:27:08'),
(7, 56, 'ФОТОЧКАasdasd', 'Снимок.PNG', 'АГАdasdsad', 1, 15, '2023-12-25 22:27:17'),
(8, 56, 'ghgfjgfj', '1058585.png', 'jhjghjtukuy', 1, 16, '2023-12-25 22:28:32'),
(9, 56, 'ghgfjgfjthygf', '1058585.png', 'jhjghjtukuydfgh', 1, 16, '2023-12-25 22:28:52'),
(10, 56, '1fdhtrtrj', '', '1ytjtyjtyjty', 1, 16, '2023-12-25 23:40:00');

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
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
