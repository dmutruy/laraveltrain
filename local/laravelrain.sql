-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Время создания: Май 26 2015 г., 11:35
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `laravelrain`
--

-- --------------------------------------------------------

--
-- Структура таблицы `acaunts`
--

CREATE TABLE IF NOT EXISTS `acaunts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `acaunts`
--

INSERT INTO `acaunts` (`id`, `user_id`, `phone`, `picture`, `created_at`, `updated_at`) VALUES
(5, 4, '436654647', '', '2015-05-26 05:07:53', '2015-05-26 05:16:05');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `showhide` enum('show','hide') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `showhide`, `created_at`, `updated_at`) VALUES
(1, 4, 'Рисование', 'show', '2015-05-24 05:21:00', '0000-00-00 00:00:00'),
(3, 4, 'Музыка', 'show', '2015-05-24 02:41:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `showhide` enum('show','hide') COLLATE utf8_unicode_ci NOT NULL,
  `lang` enum('ru','eng') COLLATE utf8_unicode_ci NOT NULL,
  `putdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `showhide`, `lang`, `putdate`) VALUES
(1, 'Добро пожаловать на Наш сайт!', '<p>Привычные металлические распашные ворота уже давно не отвечают современным требованиям. Альтернативой этой конструкции стали секционные гаражные автоматические ворота, мода на которые пришла к нам с Запада. За сравнительно небольшой срок – около 10 лет – из атрибута роскоши они превратились в удобный предмет необходимости.</p>\r\n<p>Секционные автоматические ворота отвечают самым строгим требованиям клиентов: удобство и простота использования, надежность и безопасность, хорошая герметизация проема и отличная теплоизоляция.</p>\r\n<p>Группа компаний «Эталон» является ведущим производителем секционных автоматических ворот на территории стран СНГ.</p>\r\n<p>Для более комфортного управления ГК «Эталон» предлагает системы автоматики ведущих европейских производителей. Гаражные автоматические ворота, оснащенные дистанционным управлением, легко и удобно управляются прямо из автомобиля. Это особенно удобно в плохую погоду – дождь или снег: необходимо всего лишь нажать кнопку дистанционного управления – и ворота открыты.</p>\r\n<p>Для автоматизации гаражных ворот используются потолочные электроприводы. Привод с приводной рейкой монтируется непосредственно под потолком помещения.</p>\r\n<p>Дополнительные элементы – пульты дистанционного управления, оптосенсеры и фотоэлементы, светофоры, сигнальные лампы и многое другое – обеспечивают комфортное и безопасное управление.</p>\r\n<p>Все виды секционных ворот «Эталон» безопасны в эксплуатации вне зависимости от того, приводятся ли они в движение электроприводом или вручную. Все системы соответствуют европейским стандартам безопасности EN 12604 и EN 12453.</p>\r\n<p>Для удобства клиента автоматические ворота могут изготавливаться со встроенной калиткой или боковой дверью, дизайн которой ничем не отличается от дизайна основной конструкции. Калитка обеспечивает дополнительный вход в помещение и позволяет продлить срок службы автоматических гаражных ворот.</p>', 'index', 'show', 'ru', '2015-02-25'),
(2, 'О компании', '<p>"Эталон-групп" Минск</p>\r\n<p>Производство окрашенной алюминиевой/стальной ленты, профилей роликовой прокатки, комплектующих и аксессуаров для защитных роллет.\r\nПлощадь производственных помещений – 25 000 кв. метров.\r\nПроизводственная мощность – более 150 млн. погонных метров профилей роликовой прокатки в год;</p>\r\n<p>25 000 / 70 000 тонн окрашенной ленты (алюминий/сталь).</p>\r\n<p>"Эталон Воротные Системы" Минск</p>\r\n<p>Производство широкого ассортимента гаражных и промышленных секционных ворот, въездных групп, сэндвич-панелей для секционных ворот, стальных направляющих\r\nпрофилей и других комплектующих для секционных ворот.</p> \r\n<p>Площадь производственных помещений – более 50 000 м2.</p>\r\n<p>Производственная мощность – около 240 000 ворот в год.</p>\r\n\r\n<p>"АлюминТехно" Минск</p>\r\n<p>Крупнейшее на территории СНГ производство экструдированных алюминиевых профилей, порошковая окраска и анодирование.\r\nПлощадь производственных помещений – 40 000 м2.</p>\r\n<p>Общие производственные мощности составляют:</p>\r\n<p>Прессовых линий свыше 45 000 тонн в год.</p>\r\n<p>Покрасочных линий свыше 35 000 тонн в год.</p>\r\n<p>Цехов анодирования свыше 10 000 тонн в год.</p>\r\n\r\n<p>"Günther-Tore GmbH" Германия</p>\r\n<p>Производство гаражных и промышленных секционных ворот, роллетных ворот и решеток, а также складных, раздвижных и комбинированных ворот.\r\nGünther-Tore присутствует на западноевропейском рынке более 40 лет. Компания известна как производитель промышленных ворот для больших и очень больших проемов.Так, еще в 1972  году она была занесена в Книгу рекордов Гиннеса как производитель самых больших рулонных ворот в мире – площадью 700 кв. метров.</p>', 'company', 'show', 'ru', '2015-02-25'),
(3, 'Пресс-центр', '<p>Вышел новый буклет «9 аргументов в пользу секционных ворот «Эталон». Издание в доступной форме раскрывает основные преимущества ворот, которые производит компания. Технические характеристики в нем переведены на язык потребителя – в реальные выгоды от выбора ворот «Эталон». Буклет складывается по принципу гармошки и \r\nпривлекает не только содержанием, но и оригинальностью.</p>\r\n\r\n<p>Каждое свойство ворот «Эталон» в буклете подкреплено информацией об испытаниях в авторитетных лабораториях. Широту применения секционных ворот компании демонстрируют изображения объектов, расположенных в разных условиях эксплуатации. Так, дом, иллюстрирующий надежность крепления стальных листов, напоминает ультрасовременную крепость. Актуальность нержавеющей фурнитуры показывает здание на берегу моря.</p>\r\n\r\n<p>Буклет также содержит QR-код, направляющий мобильные приложения на интернет-страничку  калькулятора расчета стоимости ворот. Здесь потенциальные покупатели могут подобрать секционные ворота в соответствии с индивидуальными предпочтениями и узнать их стоимость.</p>\r\n\r\n<p>Знакомьте покупателей с высокими характеристиками ворот компании с помощью нового буклета «9 аргументов в пользу секционных ворот «Эталон». Лаконичность, оригинальная форма и приятная цветовая гамма сделают его хитом выставок и других мероприятий.</p>', 'press-centr', 'show', 'ru', '2015-02-25'),
(4, 'Контакты', '<p>«Эталон», Минск (оптовая и розничная торговля)</p>\r\n\r\n<p>220024, г. Минск, ул. Бабушкина,21-39</p>\r\n<p>Тел.: +375 (17) 391-84-44,</p>\r\n<p>Тел.: +375 (29) 528 74 00.</p>\r\n<p>Электронная почта: info@minsk.aethalon-group.com.</p>\r\n<br />\r\n<p>«Эталон Торговый дом», Минск (оптовая и розничная торговля через дилерскую сеть)</p>\r\n<p>220024, г. Минск, ул. Бабушкина,</p>\r\n<p>21, к.3, каб. 12.</p> \r\n<p>Тел.: +375 (17) 292-94-05,</p>\r\n<p>Тел.: +375 (17) 292-92-03,</p>\r\n<p>Тел.: +375 (29) 342-92-03.</p>\r\n<p>Электронная почта: info@aethalon-td.by</p>\r\n<p>Сайт: www.aethalon-td.by</p>', 'contacts', 'show', 'ru', '2015-02-25'),
(5, 'Партнерам', '<p>Уважаемые партнеры!</p>\r\n\r\n<p>В рамках реализации партнерской программы Группа компаний «Эталон» рада предложить вам новый инструмент повышения продаж — интернет-магазин.</p>\r\n\r\n<p>Интернет-магазин является собственной программной разработкой ГК «Эталон». Он легко устанавливается и включает все необходимые конечному потребителю разделы: \r\nописание продукции, форму заказа, контактные данные и т.д.</p>\r\n\r\n<p>Имеющиеся настройки позволяют корректировать наполнение интернет-магазина в соответствии с вашими пожеланиями. Автоматизированная доставка контента освобождаетот необходимости добавлять статьи и новости самостоятельно. Кроме того, на выбор предлагаются четыре варианта оформления.</p>\r\n\r\n<p>Интернет-магазин — это удобный и современный инструмент продаж. Благодаря ему конечный потребитель сможет не только подробно ознакомиться с характеристиками\r\nроллетной и воротной продукции «Эталон», но и заказать данные товары.</p>\r\n\r\n<p>Для начала работы с интернет-магазином заполните форму заявки.</p>\r\n\r\n<p>Обратите внимание:</p>\r\n\r\n<p>При возникновении неразрешимых проблем в процессе регистрации напишите нам письмо с подробным описанием возникших трудностей на email-адрес support@aethalon-group.com</p>', 'partners', 'show', 'ru', '2015-02-25');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_05_22_061217_create_maintexts_table', 2),
('2015_05_22_094441_create_tovars_table', 3),
('2015_05_24_045616_create_categories_table', 4),
('2015_05_24_045633_create_portfolios_table', 4),
('2015_05_26_060814_create_acaunts_table', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picturesmall` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `portfolios`
--

INSERT INTO `portfolios` (`id`, `user_id`, `categories_id`, `name`, `picture`, `picturesmall`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '<p>Офигенно рисую,все что захотите(подъезд баллончиком за 5 минут!)</p>', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 4, 3, '<p>Играл на разогреве на концертах группы "Ленинград"))</p>', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `tovars`
--

CREATE TABLE IF NOT EXISTS `tovars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picturesmall` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `showhide` enum('show','hide') COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `tovars`
--

INSERT INTO `tovars` (`id`, `name`, `price`, `body`, `picture`, `picturesmall`, `showhide`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'телевизор Sony', '3000000', '', '', '', 'show', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ноутбук Acer', '6000000', '', '', '', 'show', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'телевизор Sony', '3000000', '', '', '', 'show', 1, '2015-05-22 07:08:07', '0000-00-00 00:00:00'),
(4, 'ноутбук Acer', '6000000', '', '', '', 'show', 1, '2015-05-22 07:08:07', '0000-00-00 00:00:00'),
(5, 'телевизор Sony', '3000000', '', '', '', 'show', 1, '2015-05-22 07:08:37', '0000-00-00 00:00:00'),
(6, 'ноутбук Acer', '6000000', '', '', '', 'show', 1, '2015-05-22 07:08:37', '0000-00-00 00:00:00'),
(7, 'телевизор Sony', '3000000', '', '', '', 'show', 1, '2015-05-22 07:08:40', '0000-00-00 00:00:00'),
(8, 'ноутбук Acer', '6000000', '', '', '', 'show', 1, '2015-05-22 07:08:40', '0000-00-00 00:00:00'),
(9, 'телевизор Sony', '3000000', '', '', '', 'show', 1, '2015-05-22 07:08:43', '0000-00-00 00:00:00'),
(10, 'ноутбук Acer', '6000000', '', '', '', 'show', 1, '2015-05-22 07:08:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_admin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(3, 'vasiliy', 'vvv@vv.mail.ru', '$2y$10$4HEDYzm2e76dhcRrtKVgbOoCqOa4LS0W7SWnyNSxvtq6yAWB2Fynm', 'OEZJfL3DVHDfEeN8ICbliOgltP7j2bsKxcblIlOso3JPMlP1thufSWLNsIBN', '2015-05-23 02:00:45', '2015-05-24 06:41:58', 0),
(4, 'keks', 'keks@mail.ru', '$2y$10$Dw3Z4oi.aFVdcwP3c5rrMuzpQJCirTeRh3.u3/w2KTdiJra4AtcNK', 'A27UwekomKUqymJaLCXi8IPQpy7kfrOiQddsh25p5Iu8DrOqlpyPdCZLZ9sj', '2015-05-23 02:05:22', '2015-05-24 07:22:17', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
