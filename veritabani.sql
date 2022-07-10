SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `ogrenci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `tckimlik` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `ogrenci` (`id`, `adsoyad`, `tckimlik`, `adres`) VALUES
(1, 'Mehmet Selçuk Batal', '111111', 'Üsküdar - İstanbul'),
(2, 'Bedri Uçar', '222222', 'Çankaya - Ankara'),
(3, 'Ahmet Koçak', '333333', 'Nilüfer - Bursa'),
(4, 'Merve Türker', '444444', 'Karşıyaka - İzmir');