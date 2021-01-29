-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 16 2020 г., 20:42
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Новая','Выполнено','Изменено','Выполнено и изменено') NOT NULL DEFAULT 'Новая',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `email`, `text`, `created`, `status`) VALUES
(1, 'Rain234', 'ilya-maksin@mail.ru', '<script>alert(''hello'')</script>', '2020-09-16 12:08:25', 'Изменено'),
(2, 'ааааааа', 'aaaa@aa.ru', 'sad', '2020-09-16 12:55:52', 'Новая'),
(3, 'Илья', 'ilya-maksin@mail.ru', 'fdgd', '2020-09-16 13:33:04', 'Выполнено'),
(5, 'test', 'test@test.com', 'test job2', '2020-09-16 13:36:12', 'Выполнено и изменено'),
(6, 'Куку', 'asd@asd.com', 'Новая старая задача', '2020-09-16 15:29:51', 'Новая');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
