-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Nis 2020, 17:51:15
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(100) NOT NULL,
  `adi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `soyadi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kadi` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sifre` varchar(10) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `telno` int(12) DEFAULT NULL,
  `mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yetkilendirme` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makale`
--

CREATE TABLE `makale` (
  `id` int(100) NOT NULL,
  `baslik` varchar(60) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `yazar` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `icerik` mediumtext COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `resim` varchar(75) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `onay` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `makale`
--

INSERT INTO `makale` (`id`, `baslik`, `yazar`, `tarih`, `icerik`, `resim`, `onay`) VALUES
(22, 'Unity Döndürme Kodları', 'Admin', '2020-04-15', 'Unity Döndürme Kodları\r\nBir Cevap Yazın\r\nArayıp da bulamadığım kodları yazmak zorunda kaldım.\r\n\r\nSıkıcıydı.\r\n\r\nSiz sıkılmadan kullanın.\r\n\r\nBir cismi döndürmek için başka bir cismi onun menteşe noktasına yerleştirip  ana cismi onun içine atın. Kodlar aşağıda:\r\n\r\nusing System.Collections;\r\nusing System.Collections.Generic;\r\nusing UnityEngine;\r\npublic class HareketEttir : MonoBehaviour\r\n{\r\npublic int hiz;\r\nRigidbody yercekimi;\r\n    void Start()\r\n    {\r\n        yercekimi=GetComponent<Rigidbody>();\r\n    }\r\n    void Update()\r\n    {\r\n     if(Input.GetKey(KeyCode.A)){\r\n          transform.Rotate( 0 , 0 , -1);\r\n     }\r\n if(Input.GetKey(KeyCode.D)){\r\n          transform.Rotate( 0 , 0 , 10);\r\n     }\r\n    }\r\n}\r\nBu da onun butona basılmış hali :\r\npublic void OnButton()\r\n     {\r\n          transform.Rotate( 0 , 0 , -100);\r\n     }', 'unity.jpg', 'onaylı'),
(24, 'Türkiye’de toplam oyun hasılatı 830 milyon doları buldu', 'Admin', '2020-04-15', 'Türkiye oyun sektörü 2019 raporu yayınlandı. Buna göre 2019 yılında Türkiye’deki oyuncu sayısının 2 milyon artış göstererek 32 milyona çıktığı ve oyun sektörü büyüklüğünün de 830 milyon dolar civarında olduğunu açıklandı.\r\nOyun sektöründe her geçen gün kendini bir adım öne taşıyan Türkiye, yapılan yeni girişimler, mobil oyun türlerinin popülerliği, espor etkinlikleri ve espor yatırımları ile büyümeye devam ediyor. Bu büyüme ile birlikte markaların espora bakış açısı değişiyor ve buna bağlı olarak etkinlik sayısı artarken oyun pazarı da TL bazında artış gösteriyor. Özellikle MOBA, strateji, FPS ve gündelik mobil oyun türlerinin popülerliği gün geçtikçe artıyor. PC oyunlarının gelişiminin devam etmesi, espor etkinlikleri ve espor yatırımlarının büyümesi ülkemizdeki oyun sektörünün büyümesine yardımcı oluyor.\r\n\r\nGlobalde ulaşılan oyun sektörünün toplam cirosunun 150 milyar doların üzerinde olduğuna dikkat çeken Gaming in Turkey Oyun ve Espor Ajansı Kurucusu Ozan Aydemir, “2018 yılında ise toplam ciro 138 milyar dolar civarındaydı. Türkiye’de oyuncu nüfusunun 2018 yılı ile karşılaştırdığımızda bu sayının 30 milyondan 32 milyona çıkmasıyla elde edilen toplam oyun hasılatı 830 milyon dolar oldu. Ülkemizde internet kullanıcılarının 2019 yılında 63,2 milyona çıkmasıyla birlikte 2020 yılında bu rakamın 1 milyar doları bulması bekleniyor. Aynı zamanda dünya gelir sıralamasında Türkiye, 18’inci sıradaki yerini koruyor” açıklamalarında bulundu.\r\n\r\n2019 raporuna göre PUBG Mobile lider konumda\r\n\r\nMobil ve PC oyunlarına her geçen gün ilginin artığını söyleyen Aydemir, “2019 yılı Battle Royale, FPS ve MOBA oyunlarının yılı oldu. PUBG Mobile Türkiye’ye damga vurarak en çok oynanan, en çok indirilen ve en çok para harcanan oyun oldu” dedi.\r\n', 'monster.jpg', ''),
(25, 'Google ve Apple koronavirüse karşı güçlerini birleştirdi', 'Admin', '2020-04-15', 'Apple ve Google da devletlerin ve sağlık kuruluşlarının virüsün yayılmasını azaltmasına yardımcı olmak için kullanıcı gizliliğini ve güvenliği işin merkezine alarak Bluetooth teknolojisinin kullanımına olanak veren bir çalışmada birlikte çalıştıklarını duyurdu.\r\nDünyanın dört bir yanında devletler ve sağlık kuruluşları normal hayatlarımıza daha hızlı bir şekilde kavuşabilmemiz için (Covid19) salgınına karşı işbirliği halinde canla başla çalışıyor. Google ve Apple da devletlerin ve sağlık kuruluşlarının virüsün yayılmasını azaltmasına yardımcı olmak için kullanıcı gizliliğini ve güvenliği işin merkezine alarak Bluetooth teknolojisinin kullanımına olanak veren bir çalışmada birlikte çalıştıklarını duyurdu. Yapılan açıklamada acil ihtiyaç göz önüne alındığında bu çözümün, kullanıcı gizliliği konusunda ciddi bir koruma sağlanarak iki aşamada uygulanması planlandığı belirtildi. İlk olarak Mayıs ayında iki şirkette, kamu salığı yetkililerine ait uygulamalar kullanarak Android ve iOS cihazları arasında birlikte kullanılabilirlik sağlayan uygulamalar yayınlayacak. Bu resmi uygulamalar, kullanıcıların kendi uygulama mağazalarından indirebilmeleri için hazır olacak.\r\n\r\nDAHA FAZLA BİREYE KATILMA İMKANI TANIYOR\r\n\r\nİkinci olarak, gelecek aylarda Apple ve Google, bu işlevi temel platformlara entegre ederek daha geniş kapsamlı bir Bluetooh tabanlı temas takip platformu sağlamak için çalışacaklar. Açıklamada, bu aşamanın APIden daha güçlü bir çözüm olduğu ve katılmayı seçmeleri halinde daha fazla bireye katılma imkanı tanıdığı belirtilirken; gizlilik, şeffaflık ve kişilerin izninin son derece önem teşkil ettiği ifade edildi.\r\n\r\nTEKNOLOJİNİN GÜCÜNDEN YARARLANMAYI UMUYORUZ\r\n\r\nAyrıca, çalışmaları hakkındaki bilgilerin, diğerleri tarafından analiz edilmesi için açıkça yayınlanacağının belirtildiği açıklamada şu ifadelere yer verildi: Apple ve Google’daki herkes, dünyanın en acil sorunlarından birini çözmek adına birlikte çalışmak için daha önemli bir an olmadığına inanıyor. Geliştiriciler, hükümetler ve kamu sağlığı yetkilileri ile yakın işbirliği yoluyla, dünyadaki ülkelerin koronavirüsün yayılmasını yavaşlatmasına ve günlük yaşama geri dönüşü hızlandırmasına yardımcı olmak için teknolojinin gücünden yararlanmayı umuyoruz.', 'google.jpg', 'Onaylı'),
(27, 'Karantinada alışveriş sitelerine siber saldırılar', 'Admin', '2020-04-15', 'Kaspersky uzmanları, online alışveriş ve yayın platformlarını taklit ederek gerçekleştirilen kimlik avı saldırılarının sayısında artış tespit etti.\r\n\r\nSalgın sürecinde insanlar evlerinde olduklarından yayın platformları ve alışveriş siteleri gittikçe daha popüler hale geliyor.\r\n\r\nSiber suçlular da bu noktada, ünlü alışveriş sitelerini veya yayın platformlarını taklit eden ve sahte web sayfaları veya banka bilgileri karşılığında bu platformlara ücretsiz erişim verdiğini iddia eden siteler hazırlıyor.\r\n\r\n', 'siber.jpg', 'Onaylı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(50) NOT NULL,
  `menuisim` varchar(40) COLLATE utf8mb4_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `menuisim`) VALUES
(1, 'Anasayfa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(100) NOT NULL,
  `yazar` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `mail` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `yorum` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onay` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `yazar`, `mail`, `yorum`, `onay`) VALUES
(1, 'yorumyazar1', 'yorummail1', 'yorum burası dasfksdmfklj sdflşskd fşsldk fsdşlk fmnsdlşk flskdf lskdf mlksdmf 1', NULL),
(2, 'yorumyazar2', 'yorummai2', 'yorum burası dasfksdmfklj sdflşskd fşsldk fsdşlk fmnsdlşk flskdf lskdf mlksdmf 12', NULL),
(3, 'yorumyazar1', 'yorummail1', 'yorum burası dasfksdmfklj sdflşskd fşsldk fsdşlk fmnsdlşk flskdf lskdf mlksdmf 1', NULL),
(4, 'yorumyazar2', 'yorummai2', 'yorum burası dasfksdmfklj sdflşskd fşsldk fsdşlk fmnsdlşk flskdf lskdf mlksdmf 12', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `makale`
--
ALTER TABLE `makale`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `makale`
--
ALTER TABLE `makale`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
