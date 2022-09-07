-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 07, 2022 lúc 02:03 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datatable`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `headers`
--

CREATE TABLE `headers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `munber_style` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `headers`
--

INSERT INTO `headers` (`id`, `user_id`, `munber_style`, `img`, `color`, `about`, `title`, `icon`, `background`, `created`, `modified`) VALUES
(34, 1, 'style1', 'https://i.pinimg.com/originals/f0/31/99/f03199b98a655a503b949f62d80ca48c.jpg', '#555555', 'Fédérateur. Personnalisé. Souple & adapté.', 'Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.', '', '#CC99FF', NULL, NULL),
(35, 1, 'header2', 'https://i.pinimg.com/originals/cd/6b/98/cd6b98b5b445050a07a0f9079f07a44a.jpg', '#110000', 'Fédérateur. Personnalisé. Souple & adapté.2', 'Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.2', '', '#6699FF', NULL, NULL),
(36, 4, 'header5', 'https://i.pinimg.com/originals/2c/c0/fb/2cc0fb6386f33c6f7e7e25090821fc40.jpg', '#777777', 'Fédérateur. Personnalisé. Souple & adapté.', 'Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.', '', '#00CCCC', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `i18n`
--

CREATE TABLE `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `i18n`
--

INSERT INTO `i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(91, 'vi', 'Headers', 35, 'my_about', 'Người liên bang. Được cá nhân hóa. Linh hoạt và thích nghi.2'),
(92, 'vi', 'Headers', 35, 'my_title', 'Với z0 Gravity, khám phá sự đơn giản và hiệu suất của quản lý dự án cộng tác.2'),
(93, 'en_US', 'Headers', 36, 'about', 'Federateur. Personnalisé. Souple & adapte.'),
(94, 'en_US', 'Headers', 36, 'title', 'Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.'),
(95, 'es', 'Headers', 36, 'about', 'Federador. Personalizar. Suplemento y adaptación.'),
(96, 'es', 'Headers', 36, 'title', 'Avec z0 Gravity, descubre la simplicidad y el rendimiento de una gestión de proyectos colaborativos.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pours`
--

CREATE TABLE `pours` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `Notre_engagement` varchar(255) NOT NULL,
  `about_notre` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `layout_img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `about2` varchar(255) NOT NULL,
  `bnt` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `pours`
--

INSERT INTO `pours` (`id`, `title`, `logo`, `about`, `Notre_engagement`, `about_notre`, `note`, `layout_img`, `link`, `title2`, `about2`, `bnt`, `created`, `modified`, `user_id`) VALUES
(3, 'Z0 Gravity est un logiciel de gestion multi-projets : quelle que soit leur complexité, vous gérez facilement les plannings, les budgets et les ressources humaines de vos projets par un usage transversal et collaboratif.', 'POUR FAIRE COURT.', 'Z0 Gravity est un logiciel de gestion multi-projets : quelle que soit leur complexité, vous gérez facilement les plannings, les budgets et les ressources humaines de vos projets par un usage transversal et collaboratif.', 'Notre engagement:', 'Cest aider tout type doranisation á resaliser ses projest avec un seul mot dorder :', '  sim-pli-ci-té!', 'https://i.pinimg.com/originals/a0/7b/48/a07b48ca35d9ca59ce0b4464a250a9d0.jpg', 'https://i.pinimg.com/originals/6e/eb/1b/6eeb1b82b59117caf315bd55ee7dea0c.jpg', 'Découvrez l’univers z0 Gravity', 'Plannings, budgets, calendriers… En un clin dœil, vous avez une vision globale et stratégique de lavancée de vos projets en temps réel !', 'Découvrez z0 Gravity', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pours_i18n`
--

CREATE TABLE `pours_i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `pours_i18n`
--

INSERT INTO `pours_i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(3, 'fr', 'Pours', 3, 'about', 'Z0 Gravity is a multi-project management software: whatever their complexity, you easily manage the schedules, budgets and human resources of your projects through cross-functional and collaborative use.'),
(4, 'es', 'Pours', 3, 'about', 'Z0 Gravity es un software de gestión de múltiples proyectos: cualquiera que sea su complejidad, usted gestiona fácilmente los cronogramas, los presupuestos y los recursos humanos de sus proyectos a través de un uso interfuncional y colaborativo.'),
(5, 'vi', 'Pours', 3, 'about', ' Z0 Gravity là một phần mềm quản lý đa dự án: bất kể độ phức tạp của chúng, bạn có thể dễ dàng quản lý lịch trình, ngân sách và nguồn nhân lực cho các dự án của mình thông qua việc sử dụng hợp tác và đa chức năng.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pres`
--

CREATE TABLE `pres` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `dress` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `pres`
--

INSERT INTO `pres` (`id`, `title`, `logo`, `about`, `author`, `dress`, `link`, `created`, `modified`, `user_id`) VALUES
(10, 'HBO', 'https://i.pinimg.com/originals/db/bb/c3/dbbbc3244d54686edb288afa681b7cff.jpg', 'Le président français a annoncé qu\'il était prêt à fournir du gaz à l\'Allemagne, et l\'Allemagne peut transférer de l\'électricité à la France pour s\'entraider face à la crise énergétique.', 'Theo Reuters', ' PMO service client Orange Sud-Ouest', 'https://vnexpress.net/phap-duc-nhat-tri-ho-tro-nhau-ve-nang-luong-4507627.html', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pres_i18n`
--

CREATE TABLE `pres_i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `pres_i18n`
--

INSERT INTO `pres_i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(19, 'en_US', 'Pres', 10, 'about', 'The French president announced that he is ready to supply gas to Germany, and Germany can transfer electricity to France to help each other face the energy crisis.'),
(20, 'es', 'Pres', 10, 'about', 'El presidente francés anunció que está listo para suministrar gas a Alemania, y Alemania puede transferir electricidad a Francia para ayudarse mutuamente a enfrentar la crisis energética.'),
(21, 'vi', 'Pres', 10, 'about', 'Tổng thống Pháp tuyên bố sẵn sàng cung cấp khí thải cho Đức, Đức có thể chuyển điện cho Pháp để giúp nhau đối mặt với năng lực.'),
(22, 'fr', 'Pres', 10, 'about', 'The French president announced that he is ready to supply gas to Germany, and Germany can transfer electricity to France to help each other face the energy crisis.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created`, `modified`) VALUES
(1, 'xuananhgl@gmail.com', '$2y$10$3j0byzhk9sKpB5bFcNGM2O16fSuYriZwuefFGf3H4aiTFDb49FKCS', '2022-08-29 18:59:27', '2022-08-30 12:09:37'),
(4, '123456@gmail.com', '$2y$10$xFm3XsyfADWLlSFt9OFaTuHS6V7HHgRhtqECexV8SG0YfQWuVcCfq', '2022-09-03 05:09:48', '2022-09-03 05:09:48'),
(5, 'abc@gmail.com', '$2y$10$PFWRWqp2uZmhT5xqeXQ1I.9jSvHjkN23E9SReGHA2FvC5X4x2BKcO', '2022-09-05 13:41:04', '2022-09-05 13:41:04');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `munber_style` (`munber_style`),
  ADD KEY `user_key` (`user_id`);

--
-- Chỉ mục cho bảng `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Chỉ mục cho bảng `pours`
--
ALTER TABLE `pours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_key2` (`user_id`);

--
-- Chỉ mục cho bảng `pours_i18n`
--
ALTER TABLE `pours_i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `POURS_I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `POURS_I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Chỉ mục cho bảng `pres`
--
ALTER TABLE `pres`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pres_i18n`
--
ALTER TABLE `pres_i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PRES_I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `PRES_I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `pours`
--
ALTER TABLE `pours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `pours_i18n`
--
ALTER TABLE `pours_i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `pres`
--
ALTER TABLE `pres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `pres_i18n`
--
ALTER TABLE `pres_i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `headers`
--
ALTER TABLE `headers`
  ADD CONSTRAINT `user_key` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `pours`
--
ALTER TABLE `pours`
  ADD CONSTRAINT `user_key2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
