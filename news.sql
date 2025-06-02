-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 03 2025 г., 18:02
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id_article` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `date_add` datetime NOT NULL DEFAULT current_timestamp(),
  `category` int(10) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `content`, `date_add`, `category`, `user`) VALUES
(1, 'Трамп заявил, что готов «в любое время» по выбору РФ к встрече с Путиным', 'Пресс-секретарь президента РФ Дмитрий Песков ранее сообщил, что подготовка телефонного разговора лидеров пока не ведется.\r\nВАШИНГТОН, 22 января. /ТАСС/. Президент США Дональд Трамп заявил во вторник, что готов встретиться с президентом РФ Владимиром Путиным «в любое время», когда будет удобно российскому лидеру.\r\n\r\n«В любое время, когда они захотят», — сказал он журналистам в Белом доме, отвечая на соответствующий вопрос.\r\n\r\nТрамп вступил в должность президента США 20 января. Вскоре после этого он заявил, отвечая на вопросы журналистов в Белом доме, что его разговор с Путиным «может произойти очень скоро». Ранее телеканал CNN сообщал со ссылкой на свои источники, что Трамп поручил своей команде устроить ему телефонный звонок с российским лидером в первые дни после инаугурации. Пресс-секретарь российского лидера Дмитрий Песков, комментируя эту информацию, заявил, что подготовка телефонного разговора Путина и Трампа еще не ведется.\r\n\r\nПоследний раз Путин и Трамп говорили по телефону 23 июля 2020 года.', '2025-01-22 09:22:00', 1, 2),
(2, 'Эксперты рассказали, как изменятся цены на продукты с 1 февраля 2025 года 111111111111111111111111111111111111111111111111111111111111111111111111111 222222222222', 'В феврале продукты продолжат дорожать. Это связано не только с инфляционными процессами, логистическими издержками, геополитической обстановкой, но и повышением стоимости сырья, упаковочных материалов и увеличением акцизов, рассказывают эксперты.\r\nСогласно прогнозам, уровень инфляции в первом полугодии составит 9−10%. Это значит, что в феврале можно ожидать среднего увеличения цен на продукты на 1,5−2%, считает и.о. директора института управления сельскими территориями Университета Вернадского, доцент Евгения Жукова.\r\n\r\n«Больше вырастут в цене овощи и фрукты (из-за традиционного фактора сезонности), сахар (из-за сокращения поставок из Бразилии), хлеб и рис (из-за низкого урожая)», — говорит эксперт.\r\n\r\nА сладкие безалкогольные напитки, по ее словам, станут дороже на 5−10% из-за повышения акциза.\r\n\r\nКак объясняет доцент кафедры маркетинга экономического факультеты РУДН им. Патриса Лумумбы Александр Иванов, рост цен на продукты первой необходимости в феврале станет продолжением состоявшегося в конце 2024 года единовременного повышения оптовых и отпускных цен на зерновые составляющие (более чем на 30%), минеральные и витаминные добавки (почти на 90%), а также роста стоимости упаковки (почти 12%).\r\n\r\nРост цен на топливо (а за прошедший год цена бензина и дизельного топлива выросла почти на 10%), в свою очередь, повлечет увеличение стоимости логистики.', '2025-01-22 09:24:18', 1, 2),
(3, 'В Минцифры раскрыли подробности утечки данных «Ростелекома»', 'Ведомство подтвердило информацию о хакерской атаке. Узнайте другие подробности о ситуации.\r\nЧувствительные данные абонентов компании «Ростелеком» не попали в сеть в результате крупной утечки. Об этом сообщили в пресс-службе Минцифры России.\r\n\r\nВ ведомстве заявили, что 21 января на инфраструктуру подрядчика Ростелекома совершили хакерскую атаку. Чувствительные данные клиентов этой организации не утекли. В Минцифры подчеркнули, что упомянутые в анонимных сообщениях сайты не предназначены для обслуживания физических лиц. «На них не хранятся и не обрабатываются персданные», — отметили в пресс-службе.\r\n\r\nВ Минцифры заявили, что для защиты «Ростелекома» используют так называемый эшелонированный подход. Это ряд мер безопасности, которые дополняют друг друга. При этом специалисты компании не отвечают за системы подрядчика. Сейчас сотрудники ведомства и Ростелекома работают над повышением защиты этой части инфраструктуры. «Находимся с коллегами на связи. Все необходимые меры приняты, проводится подробное расследование», — сказали в пресс-службе.', '2025-01-22 09:25:08', 2, 3),
(4, 'Китай испытал ракеты с вертикальной посадкой: что известно', 'Тесты прошли в обстановке секретности. Однако некоторая информация все же была обнародована.\r\nКитайская аэрокосмическая корпорация (CASC) провела один из ключевых тестов прототипа многоразовой ракеты с вертикальной посадкой. Запуск испытательного носителя Longxing-2 состоялся с полигона Хайян. Эта ракета служит в качестве прообраза первой ступени будущего многоразового носителя «Великий поход — 12А», который разрабатывается Шанхайской академией космических технологий (SAST).\r\nПрофиль испытательной миссии предполагал взлет Longxing-2 на высоту около 75 километров с последующим возвратом, торможением и мягким приводнением в Желтом море. В целях безопасности посадку должны были отрабатывать не на площадку на суше, а на воде. Взлет и подъем прошел штатно, однако сведений о том, насколько успешным оказался возврат, официальные лица CASC и SAST не предоставили. Обычно китайские космические ведомства публикуют информацию практически сразу, если все прошло удачно.', '2025-01-22 09:25:49', 2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_category`, `name`) VALUES
(1, 'Политика'),
(2, 'Hi-Tech'),
(4, 'Здоровье');

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id_session` int(10) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `token` varchar(128) NOT NULL,
  `dt_add` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id_session`, `user`, `token`, `dt_add`) VALUES
(1, 1, 'ac037b8a8015cdee524f933861a1ee6128f6e3730bc419bb507236d6dfb8bc3dcb5509f4b9c2bddb16418811c7ff6bf2863373edb5f3a90e9ff00d08f2a3caac', '2025-03-21 07:52:41'),
(2, 1, 'db18d47ce12012f473df3b4c5709aa53eade31b33909c37e3f4df246334b6ce7a6991dfe0463fb25d1862eaa535dba262e7cbd9f1e67d028754ea536220a685d', '2025-03-21 09:22:13'),
(3, 1, '519a772d4fdbff2c8011bce4f31f3d5fb8769bc0b64259ac644cfa682e0b2443aee83cbeced3f94af12d57d34f636f4f076e3dfff014d098c44bafa4725a581c', '2025-03-26 05:16:26'),
(4, 1, '88e945304aa7b6c150d51b86e5a298604ac08235e6bce7de8eef09c09b32f521135ea1ba311194ccc67a7036e7e9e0aeb5dc1e17b5a5e2e91b036e78bb2fb255', '2025-03-26 05:36:42'),
(5, 1, '677215c9c03c710ea2d2bab04a641b02fd978ad94e42c3ad6b3f3574c7363e832528d84a6ba14e60c19b1b393a41233d2e3926719c8e3e5144729dc735ff675e', '2025-03-26 05:44:47'),
(6, 1, 'e29ded27eda80e140b4a2c60a1b1207ba2bdef407038114dcecf88f7be8dd1814664366afbcd52a8d2e74129b4c5f3d8aca9c51805b35992c6922ae731ad4c53', '2025-03-26 06:40:17'),
(7, 1, '1c3e19a9e250085084ccefe9a9c7150d735ace37c27fbf55d728e7cb93478fb0250178894cd446f9a828400744fcf47f83d246560a103e7eb21445b77553ce78', '2025-03-26 07:35:20'),
(8, 1, '1922d8a7488fa7fc9d9a549ac4636a0a2233f8669a9f0f82f73a294c1251545c3224924d6afc77309fff4a093876533fd2a210e473446b9969bad2116bd17bca', '2025-03-26 10:04:09'),
(9, 1, 'dc88f4277250ad968ff50aa7e355b207208549b401cb9a5833f2e8ab5be0676e81656b251b88618634b222324635b394ec07b9e4cb0b4a96883a8be908780e30', '2025-03-26 10:17:22'),
(10, 1, '93e9f9b0e81146294d089b83b40a3b0065f0199e49802ce9a617fab9426eb3a1b0b0ba9cd6da92e59d0bc91cb157d7300c7fafbe9913f64eb82b225fa6e34ae2', '2025-03-26 10:24:02'),
(11, 1, '7013faf6091eb44f330aeef1bc2dfa689d2dc5a70e69a744c16d6b649494c011f12f849e2703c8b93c605196a807c87684a3a492a9cb95246ee52e2a8b726d13', '2025-03-26 10:33:28'),
(12, 1, '2e5b760263e6f7cbefda0be1e25e48b141ea0617b5351d1651ec6f6983c194169e2be541b9b76cffb70a0c3af4c1e0270773e4dcdde8e6b248d2b76f0b0f8757', '2025-03-26 10:43:15'),
(13, 1, '3f0a806e858086a534612940b0ad58c66c4b13c389a885bd05921dcb74a33a044dbba956e9d2cd3364425789f2189e5e0d49c125a8741c9e798551eb029de2a0', '2025-03-26 12:12:11'),
(14, 2, '4b652b8cbea59b495f8e114dd37113ed930586265d3cf173888c58459ba6fc38d4266ece707ef20a2410efef3465d5e7022eab76a94d64123a4c6dd6f769bd05', '2025-03-26 12:12:50'),
(15, 3, 'efa3d00b723c6147a07f6030e7e90ee12401b1a5450d939c0dd442339a2208dc2be0f3d6d29fad78f714f4799fbaf7218bf72b999b7a4a3b91e24cfa35ca7c48', '2025-03-26 12:13:27'),
(16, 4, '054abf10630e995c9c87995eda31b8f9655699560db2eec06eb0b3e78d507c73c879c1cafb12f03198ad620b0bc642e9ea776d25b0ba4681a436d9c2542e7db3', '2025-03-27 05:25:45'),
(17, 1, '6c058181d43065c7b03c766ab1af3b7aa488a6e942c9ad151bfde62057e9aeece039b05a86c437b0c583e9ea48aeb589e40d5d87ba03f48c5e5a43ba7357f709', '2025-03-27 06:04:10'),
(18, 4, '2e08b3c0cde38af6c287d1a4aa06b261479671e9ee710b09551cde8692a91ee9b415ece4a59879427ee42c51a9941f7518c7fb70c8e8a79bcc4373992d99359e', '2025-03-27 06:04:41'),
(19, 4, '3f27a9b303fce9509306fce6dc6159c9d8f5ea6e6931893bc6991079a023324cb8ab9c615bed7805fdfda8a5c4e400669d39856d6e8998c5e20c4ee594092594', '2025-03-27 07:02:39'),
(20, 1, 'fe888e82ca6c5539a552dc70ce76a7f8d0a629b700ed80725a5dc1461b7dd767321e67c961b47c14beb537d9ae21432741d286fd1bf528875c499fa3bcbdd71c', '2025-03-27 12:50:33'),
(21, 1, '7874c177d9c5bfc61f0ae9823ca9221f6196fcbd94e779888f282c9432ddb059023ca1e33a098942497ea069e2ddf856ac8c151aaaa7d8bfe3a4cb090731ce72', '2025-03-28 11:21:00'),
(22, 1, '530279d9aed89f320f4d098a3608e831fbb8cf27bb102160cd133fdf4274e83089bf81b57ccaef46e32bc679b0ada33ac1ca50efe05cea86c95c883f7ed1e4b5', '2025-03-28 12:06:26'),
(23, 1, '25141b88fbd4d22f92994694b17ea619c11c9467705440ea1078101fb1847bbfb8d8273a985f796802bfd5aa525f0104773b51d5007b4ae6a38647e77c278e7c', '2025-03-28 12:16:07'),
(24, 1, 'b5bbbee74ba86c6d34feef6b532bde5283fcbb48ebc4aa212783b3437be3245ee40924439adf75f52f960dbf64c05815787c25cf8cbcb62d798dc4c01f7c8641', '2025-03-31 05:31:59'),
(25, 1, '693feda44a0de9d43bd5844c13c5a19609c6133a91ca31b1701685a888ed46563f0947b3e22fd6f96f7695f7fa5b9445fb2dcb90c2f3a80d0c668cafe0b12904', '2025-03-31 06:42:40'),
(26, 1, '2f761c2fa97e52819b42a381ed293ff425d4f92ee43421b876a809990fcad7e0c0e3b0d99f9beaaa80fe74cbab832be004fd95a17a2253511d059146bb7313ec', '2025-04-01 05:10:58'),
(27, 1, 'b007636cb75fe9531ed8ab533b2376490691020f784c7c1d741ccae12ab4e7a30018eed5437bf28bcee1a5e0e237bcf39cda8aa5e68e0de4c193434699a9b780', '2025-04-01 05:16:05'),
(28, 2, '401ceffde732dd254b5acf3fa13de9248a07aba7cd611afc8ef407d8147f4a8cdb2a922c11c635d500a657532f813a6419623fde1027540b80bd9d093bac976e', '2025-04-01 05:16:37'),
(29, 3, 'ec7d99902dd66f6c56c5764b10dc13552e7371b77ef0622baf6ce94d541e214827426eeea5e7efe7d02aa8880cb77be43a409c44cc7de8be6f71e7acffa77e9a', '2025-04-01 05:17:10'),
(30, 1, '2bc75e6635d60c65c6e48235eeb58e6b070073ad9ba9ea6ac9cb7a4cdb5dc639e028f55b9aecec3823970867d5ceb608ed6f5d7c0e6efff60f873d560b58371c', '2025-04-01 09:08:38'),
(31, 1, '4187a1c77b7e343592996e45239db556fcb14d535669973ffebfd3dde22cb457336dd02fe2e26dab3a0356e6c649b7ef7d0cdaab165bbfd3005b42764fe34a76', '2025-04-01 09:10:11'),
(32, 3, '58e93a1470f5009240c062bb09a71376be38aadf4a61de82b9a9de3a319b1c094d6d32d7383fa9ac14f65c65d33a60a648be9b2e083206831b0d7cb1c939a4f6', '2025-04-01 12:04:00'),
(33, 2, '3ce053e377244c146a8d19d279bced1c4eed556135a407b62f3b008bbe42713fd27bb4ec809006e7cfb1b56d1c7d16ef4374d072f1c8ea21fd25b98123ee1487', '2025-04-01 12:14:10'),
(34, 1, 'a5d1e3748ad5c835237385c4056e1a9b755197e8bdb438ccd59b5a2c1c17b4340265230df3ebbb6c03108edf654a599b146affe3b37cf81089fef6abc94e973d', '2025-04-02 09:12:57'),
(35, 1, 'c465e96a1869dd5e5e717b002c5edb68ecdb3606f3f42dccf9f31438f4ce3aac7d84dc511109d11b35a5ca7415378fd6b1911754c77d9320fe74593b95a0c523', '2025-04-02 09:19:23'),
(36, 1, '44c81102d28150d023b80d99ae7c3a9c5566cf0c514a3c1c6c1ad04250767bf733d814ac1668d47e831225c04842237cb7ca55eb721a25122419e150024db256', '2025-04-02 09:23:07'),
(37, 1, '94230dc16d1a0bc3c6a69bad6d0c934d8e9c9b33bed8f9039d8b0788e56e76ab26df5f4c92d02e06ef7c47e0ae3fdc65e61c000eeea5d0affd9e8733c0fc4783', '2025-04-02 09:26:34'),
(40, 1, 'bfb6d39c0c61064099a17304e610ad393c52ecd328b2d58cb4b68a985466354cd283d7bdad079e333556424c853a16a6e6267862d75ac574129fa7aa25814ca8', '2025-04-02 12:03:02'),
(42, 1, '71bf9b5af1e25b8cedbaf74b52c7ea10afc0511dad7a92653780e1e12d6ea2acd491a510a6fa62dfffc7b47f350c6220331ccd30303f34680200e94e8322901f', '2025-04-02 12:29:44'),
(44, 2, 'a9f41de65beeee2577b0bd4894be69450d7125b7a4570110f97eea9836bd67bfbe10e84abab21de630a1f44751b5dd32023ca79fea35126c5f7c587145a05e7f', '2025-04-02 12:30:33'),
(45, 1, '31981971be55cf37eed5c5b58d28aecf7a3f55dda48c224ee9a7fa089bae9b2155d3017c8c4c8554aaf21280357a8a45e8d42179bd8685b13d421fdbfe0be448', '2025-04-02 12:55:17'),
(46, 1, '6c13bea10c3ca3887d2248d728df6942be5d07eccc786ec7a47582d94065e8ae46eda4cf06418ada1290b432a31ae8b09e63ab75330153dddac0a9e6daddc91c', '2025-04-02 13:32:27'),
(47, 1, 'bba96027c5206090deee63dc39ee40600df432474802dcb0a64d6b42949d2e2003903f6c2c3e0fe956b965d94660ac1ebd5c2cefbc768cc88a4e79cc8b33e68d', '2025-04-02 13:33:04'),
(48, 1, '18cde214a2e2239a4ce29891f951bf54c89ee9408021449ad8eb2adf28509779d1f5200689835cd6c98ffb325def3f87dc9be50d9fefddb19f1a261e3577a966', '2025-04-03 09:18:56'),
(49, 2, '0d27373e3f96cca2c38e0794529fbbca06828793aa6e3a5658b1f9152e11cc598d0a076828522de174dcb871d622be5175066d5dfe4cf270ee387fc6bc6d990c', '2025-04-03 09:50:57'),
(50, 3, '19d802ebb1483cbaccbdb0c89a7499e29c2abce7741bd0249e6cf30722862b4280f4c7e95a3b5997569cb6ec04ba2e6e1262a4d92fe2c809d3363544bbf8ca14', '2025-04-03 09:51:31'),
(51, 1, '5b014ed22084b5dccd15167bdbb4866a2f783d6bac052efe27999636242eea45006fde4e9d2fa4fc1f6b73d2420d6631ad83a9a53121f29fa5ef8950360d6ab0', '2025-04-03 12:11:29'),
(52, 10, '3b8119fe4b7ccb72e3e379c8b440fdde454a58ddc95e0e6df032cc55894f87c8347808fb883d9b2c77e27a846448b8003e902444a486547798ed82def1face85', '2025-04-03 12:12:12');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `login` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` int(10) UNSIGNED NOT NULL DEFAULT 3,
  `email` varchar(256) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `role`, `email`, `name`) VALUES
(1, 'admin1', '$2y$10$zB1mpg2aZ2EJBxyZRjVFeusg2dsGfM5KzwzgnQXLAFSG2XKqU2Rfa', 1, 'admin@mail.ru', 'Василий Пупкин'),
(2, 'moder1', '$2y$10$vunsHFPLvl0cCt8jsjjljusBlchJsi4m8Sb3ek5gKOy1ArUJV2HPK', 2, 'kee@mail.ru', 'Иванов Петр Алексеевич'),
(3, 'avtor1', '$2y$10$KzyCiK2mR4.T7lZ0mdJc3uNMLEGg13PJMnvdlLcRdzJLlP9M9IOuy', 3, 'tyen@mail.ru', 'Золотой Олег Николаевич'),
(4, 'avtor2', '$2y$10$MZ4KbFD7s1waT313hp/LtuYgjbo0S1bi7xDBXJZEFexF2wr/EIgVq', 3, 'cet@mail.ru', 'Коробко Юлия Васильевна'),
(10, 'avtor7', '$2y$10$15yGf05hhOn/Xy1i3uTL/e8gYDU5cXzx.Vm.Rb25dOFT69VBBG1Cm', 3, 'avtor7@mail.ru', 'Гриша 007');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `id_role` int(10) UNSIGNED NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user_roles`
--

INSERT INTO `user_roles` (`id_role`, `name`) VALUES
(3, 'Автор'),
(1, 'Администратор'),
(2, 'Модератор');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `category` (`category`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id_session`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `id_user` (`user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `role` (`role`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id_role`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id_session` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id_role` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id_category`) ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `user_roles` (`id_role`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
