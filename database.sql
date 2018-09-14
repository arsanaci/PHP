# Host: localhost  (Version 5.5.5-10.1.26-MariaDB)
# Date: 2018-01-16 17:05:52
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  `tarih` varchar(255) DEFAULT NULL,
  `yetki` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'Merve ARSANACI','m@gmail.com','123','aktif','10-10-2017','Admin','yok'),(2,'Ahmet Kaya','ahmet@hotmail.com','4545','pasif','10-12-2017','Yazar','yok'),(3,'Ali Cengiz','a@a.com','123123','aktif','10-12-2017','Admin','123.png');

#
# Structure for table "ayarlar"
#

DROP TABLE IF EXISTS `ayarlar`;
CREATE TABLE `ayarlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `smtpserver` varchar(255) DEFAULT NULL,
  `port` varchar(255) DEFAULT NULL,
  `smtpemail` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `sehir` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hakkimizda` varchar(255) DEFAULT NULL,
  `iletisim` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "ayarlar"
#

INSERT INTO `ayarlar` VALUES (1,'Film Forum','film,forum','film forum sitesi',NULL,NULL,'416',NULL,'123','Han sokağı 4/7 ','Karabük',NULL,NULL,'<b>Kuruluş amacı filmler hakkında daha hızlı bilgi alışverişi yapabilmektir.','<b>İletişim Bilgilerimiz:</b><br><br>+90 555 364 33 64',NULL,NULL,NULL);

#
# Structure for table "bekleyen"
#

DROP TABLE IF EXISTS `bekleyen`;
CREATE TABLE `bekleyen` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `onay` int(11) DEFAULT '0',
  `filmId` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

#
# Data for table "bekleyen"
#

INSERT INTO `bekleyen` VALUES (14,'Anonim','ghfghghasda','::1',0,NULL),(15,'Anonim','ghfghghasdaasdasdasd','::1',0,NULL),(16,'Anonim','asdasd','::1',1,5),(17,'Anonim','asdasdasdasdas','::1',1,5),(18,'Anonim','asdasdasdasdasdasasdasdasd','::1',1,5),(19,'Merve Arsanacı','asdqweq','::1',1,5),(20,'Merve Arsanacı','Deneme ','::1',0,5),(21,'Merve Arsanacı','“Akıl Oyunları”nı hepimiz çok sevdik. Uzun zamandır bu kadar güzel bir film izlememiştik. Salonda arkamda oturan hanımefendinin deyimiyle “duygu yüklü” bir filmdi.','::1',1,3);

#
# Structure for table "favori"
#

DROP TABLE IF EXISTS `favori`;
CREATE TABLE `favori` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kul_id` varchar(255) DEFAULT NULL,
  `film_id` varchar(255) DEFAULT NULL,
  `adet` varchar(255) DEFAULT NULL,
  `Ad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

#
# Data for table "favori"
#

INSERT INTO `favori` VALUES (14,'1','4','1',NULL),(15,'1','5','1',NULL),(16,'1','10','1',NULL),(17,'1','10','1',NULL),(18,'1','8','1',NULL);

#
# Structure for table "film_resim"
#

DROP TABLE IF EXISTS `film_resim`;
CREATE TABLE `film_resim` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

#
# Data for table "film_resim"
#

INSERT INTO `film_resim` VALUES (1,'1','green.jpg'),(2,'1','mile.jpg'),(3,'1','tgm.jpg'),(4,'2','a.jpg'),(5,'2','eb.jpg'),(6,'2','b.jpg'),(7,'3','c.jpg'),(9,'3','bm2.jpg'),(10,'4','ig.jpg'),(11,'4','tig.jpg'),(12,'5','s.jpg'),(13,'5','main.jpg'),(14,'3','bm.jpg'),(17,'5','s1.jpg');

#
# Structure for table "filmler"
#

DROP TABLE IF EXISTS `filmler`;
CREATE TABLE `filmler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ad` varchar(255) DEFAULT NULL,
  `Kategori` varchar(255) DEFAULT NULL,
  `Puan` varchar(255) DEFAULT NULL,
  `Resim` varchar(255) DEFAULT NULL,
  `Tarih` varchar(255) DEFAULT NULL,
  `Konu` varchar(255) DEFAULT NULL,
  `Oyuncular` varchar(255) DEFAULT NULL,
  `Yonetmen` varchar(255) DEFAULT NULL,
  `Yapim` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "filmler"
#

INSERT INTO `filmler` VALUES (1,'The Green Mile','11','8.8','tgm.jpg','12-12-2017','Bir hapishanede gardiyanlık yapan Paul Edgecomb\'un görevi, hücrelerinden alınan idam mahkumlarını, elektrikli sandalyenin bulunduğu ölüm odasına kadar olan bir millik yeşil yoldan götürmektir. Edgecomb yıllar boyunca bu yoldan sayısız idam mahkumu naklede','Tom Hanks,  Michael Clarke Duncan,  Sam Rockwell,  Gary Sinise,  David Morse','Frank Darabont','1999-ABD','Yeşil Yol','Yeşil Yol'),(2,'The Shawshank Redemption','9','9.1','b2.jpg','10-12-2017','Genç ve başarılı bir bankacı olan Andy Dufresne, karısını ve onun sevgilisini öldürmek suçundan ömür boyu hapse mahkum edilir ve Shawshank hapishanesine gönderilir. Burada başta Red olmak üzere yeni arkadaşlar edinir. Hapishane yaşamını uyum sağlamaya çal','Tim Robbins,  Morgan Freeman,  Bob Gunton,  James Whitmore,  Clancy Brown','Frank Darabont','1994-ABD','Esaretin Bedeli','Esaretin Bedeli'),(3,'A Beautiful Mind','7','8.6','c.jpg','10-11-2017','John Forbes Nash Jr., genç yaşında geliştirdiği kuramlarla matematik dünyasının bir numaralı ismi haline gelir. Fakat kısa süre içerisinde bencilliği ve kendine olan aşırı güveni sonucunda oluşan kişisel problemleri ile baş edemez duruma düşer. Dahilik il','Russell Crowe,  Jennifer Connelly,  Paul Bettany,  Josh Lucas,  Adam Goldberg','Ron Howard','2001-ABD','Akıl Oyunları','Akıl Oyunları'),(4,'The Imitation Game','13','8.4','tig.jpg','05-10-2017','Filmde, 2. Dünya Savaşı sırasında Almanların şifreli haberleşmelerinin kodlarını çözen Alan Turing\'in Nazileri durdurma başarısı anlatılıyor.','Keira Knightley,  Benedict Cumberbatch,  Mark Strong,  Matthew Goode,  Charles Dance','Morten Tyldum','2014-ABD','Yapay Oyun','Yapay Oyun'),(5,'3 Idiots','4','8.8','s.jpg','09-11-2017','Hindistan\'ın en iyi mühendislik okuluna başlayan öğrencilerin hayatını anlatıyor özet olarak. Sistemin daima yarış üzerine kurulu olduğu, herkesin en iyi olmaya çabaladığı bir okulda sistemi değiştirmeye çalışan bir öğrenci ve onun en yakın 2 arkadaş','Aamir Khan,  Kareena Kapoor,  Sharman Joshi,  Madhavan,  Boman Irani','Rajkumar Hirani','2009-Hindistan','3 Aptal','3 Aptal'),(6,'Leon','11','8.9','l.jpg','12-12-17','Mathilda, New York\'ta yaşayan ailesi dağılmış 12 yaşında küçük bir kızdır. Ailesini sevmeyen Mathilda için en değerli varlığı küçük kardeşidir. Babası uyuşturucu işlerine bulaşınca mafya ailenin tüm bireylerini öldürür. O sırada alışverişte olan Mathilda ','Natalie Portman,  Jean Reno,  Gary Oldman,  Samy Naceri,  Elizabeth Regen',NULL,'1994-Fransa','leon','leon'),(7,'Split','11','8.8','sp.jpg','12-12-2017','Güvenilir psikiyatr Dr. Fletcher (Betty Buckley), Kevin (James McAvoy) adlı hastasının en az 23 farklı kişiliği bünyesinde barındırdığını kanıtlamıştır. Ancak henüz tamamen ortaya çıkmamış son bir kişilik vardır ki, meydana çıktığında diğer kişilikleri sü','James McAvoy,  Anya Taylor-Joy,  Haley Lu Richardson,  Jessica Sula,  Betty Buckley',NULL,'2016-ABD','split','split'),(8,'Yolcu','9','9.1','yol.jpg','20-10-2017','Evinden işine gidip işten eve dönmek için her gün düzenli olarak banliyö trenini kullanan sigortacı Michael McCauley (Liam Neeson), bir gün sıradan bir yolculuk esnasında Joanna adında daha önce trende görmediği bir kadınla tanışır. Joanna (Vera Farmiga),','Liam Neeson,  Vera Farmiga,  Patrick Wilson,  Sam Neill,  Clara Lago',NULL,'2018-ABD','yolcu','yolcu'),(9,'Hayalet Sürücü','9','8.0','hs.jpg','03-10-2017','Johnny Blaze, tehlikeli motorsiklet sahnelerinde oynayan bir dublördür. Beklenmedik olaylar sonucu babası ve kız arkadaşının hayatı karşılığında ruhunu şeytana satar ancak bu değiş tokuş onu geceleri ortaya çıkıp intikam alan şeytani ve lânetli bir ruha d','Nicolas Cage,  Eva Mendes,  Wes Bentley,  Matt Long,  Sam Elliott',NULL,'2007-Fransa','hayalet','hayalet'),(10,'The Post','13','9.1','p.jpg','10-10-2017','1970\'lerin başında The Washington Post\'un araştırmacı gazetecileri, Amerika Birleşik Devletleri\'nin Vietnam\'a 25 yıldan uzun süredir yaptığı müdahaleleri gösteren çok gizli belgeleri ele geçirmişlerdir. Bu belgeler devlet sırrı niteliğindedir ve yayınlayı','Tom Hanks,  Meryl Streep,  Sarah Paulson,  Bob Odenkirk,  Tracy Letts',NULL,'2017-ABD','post','post');

#
# Structure for table "kategoriler"
#

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE `kategoriler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` varchar(255) DEFAULT NULL,
  `adi` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  `tarih` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

#
# Data for table "kategoriler"
#

INSERT INTO `kategoriler` VALUES (1,'0','çocuk',NULL,NULL,NULL,NULL,NULL),(2,'0','genç',NULL,NULL,NULL,NULL,NULL),(3,'0','yetişkin',NULL,NULL,NULL,NULL,NULL),(4,'2','komedi',NULL,NULL,NULL,NULL,NULL),(5,'2','bilim kurgu',NULL,NULL,NULL,NULL,NULL),(6,'3','korku',NULL,NULL,NULL,NULL,NULL),(7,'3','biyografi',NULL,NULL,NULL,NULL,NULL),(8,'2','müzikal',NULL,NULL,NULL,NULL,NULL),(9,'2','aksiyon',NULL,NULL,NULL,NULL,NULL),(10,'1','animasyon',NULL,NULL,NULL,NULL,NULL),(11,'3','dram',NULL,NULL,NULL,NULL,NULL),(12,'1','çizgi film',NULL,NULL,NULL,NULL,NULL),(13,'6','gerilim',NULL,NULL,NULL,NULL,NULL);

#
# Structure for table "mesajlar"
#

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE `mesajlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `mesaj` mediumtext,
  `IP` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "mesajlar"
#

INSERT INTO `mesajlar` VALUES (1,'Hakan Kaya','h@hkn.com','5366541236','Sorun ',NULL),(8,'merve','mervearsanaci@asdad.com','4567898765',' deneme',NULL),(10,'Ayşe Toprak','a@ayse.com','56465123135','ayşe ','::1'),(11,NULL,NULL,NULL,NULL,'::1');

#
# Structure for table "onay"
#

DROP TABLE IF EXISTS `onay`;
CREATE TABLE `onay` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "onay"
#


#
# Structure for table "uyeler"
#

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE `uyeler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `yetki` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `sehir` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

#
# Data for table "uyeler"
#

INSERT INTO `uyeler` VALUES (1,'Merve Arsanacı','m@gmail.com','123','Admin','aktif','5415632313','Karabük'),(2,'Sena Ölmez','sno@sno.com','456','Yazar','aktif','5632363621','Karabük'),(3,'Cansu Tabur','cnm@c.com','741','Üye','aktif','5478596321','Antep'),(4,'Ahmet Kaya','ahmet@hotmail.com','4545','Admin','aktif','5452123658','Ankara'),(5,'Ali Cengiz','a@a.com','123123','Admin','pasif','5555555555','Bursa'),(10,'Alameddin Çelik','a@ala.com','147',NULL,'aktif','1569874521','İzmir');
