-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Ara 2019, 00:08:20
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `weddingvibes`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Düğün Mekanları'),
(2, 'Organizasyon'),
(3, 'Düğün Detayları'),
(4, 'Gelin Damat');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `serviceproviders`
--

CREATE TABLE `serviceproviders` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `photoUrl` text NOT NULL,
  `description` text NOT NULL,
  `vendor_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `serviceproviders`
--

INSERT INTO `serviceproviders` (`id`, `category_id`, `photoUrl`, `description`, `vendor_name`) VALUES
(1, 1, '', 'Swissotel Ankara, hayallerinizdeki düğünün düzenlenmesi için gerekli tüm plan ve küçük ayrıntıları düşünmüştür. Profesyonel düğün organizatörlerimiz, düğününüzle ilgili tüm süreçlerde en ince detayına kadar size yardımcı olacaktır. Çünkü amacımız bu en un', 'Swissotel Ankara'),
(2, 2, '', 'Melina Organizasyon ile düğün, nişan, kına gecesi veya bekarlığa veda partileri, doğum günleri ve mezuniyet baloları gibi her tür toplantı ve organizasyonlarınızda hizmet vermek üzere profesyonel ekibimizle sizleri bekliyoruz. \r\n\r\nŞimdiye kadar üstlendiğimiz kutlama ve törenleri referans alarak; kusursuz, eğlenceli ve en önemlisi istediğiniz gibi bir organizasyona sahip olmanızı sağlamak tek misyonumuz.', 'Melina Organizasyon'),
(3, 3, '', 'Profesyonel hayata 2005 yılında atılan Prime Mood Studio, ilk gününden itibaren kendini geliştiren yenilikçi ekibiyle benzersiz anlarınızı fotoğraflarla ölümsüzleştiriyor.  Tekrarı mümkün olmayan, tarifsiz anları size tekrar tekrar yaşatacak karelere dönüştüren Prime Mood Studio\'ya hemen ulaşın!', 'Prime Mood Studio'),
(4, 4, '', 'Özlem Arı tarafından tasarlanmış birbirinden estetik gelinlikler ile hayatınızın en güzel gününe Diva Moda ile hazırlanın! Ankara gelinlik deyince tüm gelinlerin gönül rahatlığıyla kapısını çalacağı Diva Moda yılllardır güvenilir hizmetiyle yanınızda olmaya devam ediyor.  Detaylı bilgi veya gelinlik modellerine göz atmak için bize ulaşabilirsiniz.', 'Diva Moda');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL COMMENT '0 = admin, 1=user, 2=vendor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name_surname`, `email`, `password`, `phone`, `user_type`) VALUES
(2, 'Kaan Durak', 'okd@okd.com', '827ccb0eea8a706c4c34a16891f84e7b', '05051231232', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `serviceproviders`
--
ALTER TABLE `serviceproviders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `serviceproviders`
--
ALTER TABLE `serviceproviders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
