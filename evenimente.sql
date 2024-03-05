-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 08:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `evenimente`
--

CREATE TABLE `evenimente` (
  `id` int(11) NOT NULL,
  `numeleEvenimentului` varchar(250) DEFAULT NULL,
  `dataEveniment` date NOT NULL,
  `descriereEveniment` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evenimente`
--

INSERT INTO `evenimente` (`id`, `numeleEvenimentului`, `dataEveniment`, `descriereEveniment`) VALUES
(4, '', '2021-02-01', 'Consiliul de administrație al colegiului a hotărât ca sala S 09 să devină sediul Muzeului Colegiului Național Mihai Eminescu din Satu Mare'),
(5, '', '2021-01-21', 'Centrul Județean pentru Conservarea și Promovarea Culturii Tradiționale Satu Mare cu sprijinul Consiliului Județean Satu Mare, în colaborare cu Cenaclul Cronograf, și în parteneriat cu Colegiul Național Mihai Eminescu Satu Mare și Colegiul Național Doamna Stanca, organizează o serie de activități culturale cu prilejul bicentenarului nașterii protopopului greco- catolic Petru Bran – primul profesor de limba română din Satu Mare: 11:00 Aducere aminte la Colegiul Național Mihai Eminescu, 11:30 Închinăciune la Monumentul Limbii Române din curtea Muzeului de Artă – moment artistic, 12:00 Școala unde a luminat spiritele – Colegiul Național Doamna Stanca, 12:30 Te Deum și moment evocator la Catedrala Sfinții Arhangheli Mihail și Gavril. ([238], Evenimente)'),
(6, NULL, '2021-01-15', 'Asociația „Salvatorii de Cărți” din Oradea a organizat, cu ocazia Zilei Culturii Naționale - 15 ianuarie 2021, în regim online, concursul internațional (România-Ungaria) de recitare poezii, din opera poetului național Mihai Eminescu. La acest concurs a participat și eleva colegiului, Geng Monica, clasa a XII-a F, recitând poezia „Și dacă…”, în limba maghiară, obținând prima mențiune a concursului. Menționăm că la acest concurs a fost atribuită o singură mențiune. ([238], Evenimente)'),
(7, NULL, '2021-01-15', 'Centrul Cultural al Municipiului Carei în colaborare cu Centrul de Promovare a Turismului Cultural Gróf Károlyi a organizat online, cea de-a XV–a ediție a Concursului de recitări „Mihai Eminescu”, cu ocazia Zilei Culturii Naționale. La acest concurs a participat și eleva colegiului, Satmari Sânziana, clasa a XII-a F, obținând locul II, cu poezia „Doină”. ([238], Evenimente)'),
(8, NULL, '2021-01-15', 'La ora 11.30, s-au depus jerbe de flori la bustul lui Mihai Eminescu, situat în fața clădirii colegiului. Spectacolul de imagini și sunet a continuat și astăzi. ([238], Evenimente)'),
(9, NULL, '2021-01-14', 'începând cu ora 17, a avut loc o manifestare specială, de suflet, în care sunetul, imaginea, lumina și versurile ne-au purtat în universul eminescian. Spectacolul de imagini și sunet a fost organizat de către Primăria Municipiului Satu Mare, în parteneriat cu Colegiul Național Mihai Eminescu Satu Mare. Pe clădirea colegiului a fost realizată o proiecție tematică. Culorile drapelului național, chipul poetului, versurile sale în interpretarea elevilor colegiului, muzica și imaginile proiectate, au reprezentat mesajul nostru de suflet de „reaprindere a flăcării culturii”. ([238], Evenimente)'),
(10, NULL, '2021-01-12', 'Conducerea Colegiului Național Mihai Eminescu Satu Mare, solicită Preasfințitului Părinte Dr. Iustin, Episcopul Maramureșului și Sătmarului, binecuvântarea arhierească pentru sfințirea Centrului cultural și spiritual „Sfinții Arhangheli Mihail și Gavril”. Acest centru cultural, care este format dintr-un paraclis (capelă) și două săli de studiu, a fost amenajat cu sprijinul Parohiei Ortodoxe ,,Adormirea Maicii Domnului” din Satu Mare, prin implicarea pr. dr. Cristian Boloș, care a dat curs solicitării conducerii Colegiului Național Mihai Eminescu Satu Mare, conform adresei nr. 50/29.01.2019. Există un parteneriat semnat între Episcopia Ortodoxă a Maramureșului și Sătmarului și Inspectoratul Școlar Județean Satu Mare, nr. 5931/15.11.2013, și între Parohia Ortodoxă ,,Adormirea Maicii Domnului” din Satu Mare și Colegiul Național Mihai Eminescu Satu Mare, nr. 23/16.01.2014.'),
(11, NULL, '2021-01-11', 'Se vor derula până în 15 ianuarie activitățile din cadrul Proiectului online, al catedrei de limba și literatura română „Exercițiu de admirație”, dedicat poetului Mihai Eminescu. Proiectul cultural este conceput amplu, pe mai multe secțiuni de participare, finalizându-se printr-un concurs cu premii și diplome. ([238], Evenimente)'),
(12, NULL, '2021-01-07', 'A avut loc până în 12 ianuarie Olimpiada Internațională de Matematică, Fizică și Informatică, organizată de Ministerul Educației și Științei al Republicii Kazahstan. Denumirea engleză a competiției este ,,International Zhautykov Olympiad (IZHO) on Mathematics, Physics and Computer Science”. La competiție au participat elevi din peste 20 de țări. La această olimpiadă au participat și elevii Popan Cosmin din clasa a X-a B, prof. Solschi Viorel și Uzum Răzvan din clasa a XI-a C, prof. Șandor Nicoleta. Uzum Răzvan a obținut medalie de bronz. ([238], Evenimente) '),
(13, NULL, '2020-12-02', 'S-a desfășurat online a VIII-a ediție a Concursului Internațional Romanian Master of Informatics, RMI 2020 până în 4 decembrie. Concursul a fost organizat de Colegiul Național Tudor Vianu din București și a avut participanți din Belgia, Bulgaria, Croația, Georgia, Grecia, Ungaria, Italia, Republica Moldova, Rusia, Serbia, Elveția, Ucraina și România. Elevul David Nicolae Coroian, clasa a XII-a B, din grupa de Informatică clasa a XII-a, a obținut medalia de argint. ([238], Evenimente)'),
(14, NULL, '2020-09-14', 'redeschiderea noului an școlar cu multiple restricții și reglementări datorită pandemiei ce încă este prezentă. În aceste vremuri de restriște școala noastră a adoptat, din scenariile puse la dispoziție de Ministerul Educației Naționale, scenariul galben. Clasele terminale din cele două cicluri vin la școală în efectiv complet, iar celelalte clase sunt împărțite în două grupe care alternează săptămânal, o grupă vine la școală, iar cealaltă asistă la cursuri pe suport online.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evenimente`
--
ALTER TABLE `evenimente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evenimente`
--
ALTER TABLE `evenimente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
