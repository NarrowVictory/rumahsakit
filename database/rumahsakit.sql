-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 11 Jan 2023 pada 16.20
-- Versi server: 10.8.3-MariaDB-log
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(100) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `alamat` tinytext NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('bc2c8b07-662e-4d32-8d0c-395820abfbb0', 'Dokter Andika', 'Mata', 'Jalan Kuburan No.123', '0838974029312');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(100) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `ket_obat` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`) VALUES
('2ff75915-a7ee-4d1b-90c5-23a644782ba7', 'Paracetamol', 'Obat Anti Nyeri'),
('81fbf983-a91c-4665-912c-d9b23924a03a', 'CTM', 'Obat Alergi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(64) NOT NULL,
  `nomor_identitas` varchar(64) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
('011685b7-570f-4afc-b7dc-6b13e1b7e459', '47366', 'Bradley Gonzalez', 'P', 'Houston - Texas (TX) - 2,195,914', '(960) 944-5186'),
('05839553-33aa-4020-a3a6-9625f005c882', '57628', 'Taryn Peck', 'L', 'Huntsville - Alabama (AL) - 186,255', '(204) 961-8530'),
('06ddef5d-3682-4d15-8d4e-fc1b9c1e7f6e', '55758', 'Matthias Bartlett', 'P', 'Tucson - Arizona (AZ) - 526,116', '(726) 914-2768'),
('098983ae-d729-4a7d-a20e-da8291b1bcac', '64492', 'Clara Snow', 'L', 'Park Ridge - Illinois (IL) - 37,841', '(781) 911-9921'),
('0a5a449e-ae6a-444e-b75f-dc1fac623fe8', '44443', 'Arturo Floyd', 'P', 'Bossier City - Louisiana (LA) - 66,333', '(708) 798-6099'),
('0b519baf-cecf-4c3b-bb34-217ec7d67d2c', '25953', 'Katherine Hall', 'P', 'Cincinnati - Ohio (OH) - 297,519', '(700) 874-5632'),
('0f768c8e-9794-4ffd-aa4c-66a351c2ca57', '96558', 'Tony Hughes', 'L', 'Rapid City - South Dakota (SD) - 70,812', '(758) 657-7293'),
('12afd384-bea4-42f1-afa0-5c1256bceb07', '63569', 'Kody Soto', 'P', 'Oklahoma City - Oklahoma (OK) - 610,613', '(493) 656-9287'),
('13409a82-76e8-4c98-8962-8d6c02a4d9ec', '57628', 'Esteban Clements', 'P', 'Davenport - Iowa (IA) - 102,158', '(839) 327-5721'),
('138174fe-85f0-42dc-8900-7b0df1ccaeda', '58001', 'Jamya Mason', 'P', 'Pittsfield - Massachusetts (MA) - 44,057', '(492) 232-5620'),
('15ae5912-982f-42a9-8042-d8636cc633ea', '49696', 'Lamont Navarro', 'P', 'Davenport - Iowa (IA) - 102,157', '(239) 774-0673'),
('17fa6a3c-2874-4990-bd85-e3ec40cb446d', '25953', 'German Palmer', 'P', 'Gaithersburg - Maryland (MD) - 65,690', '(654) 898-4596'),
('18ea9a28-3bdf-4358-862c-831b0a49d6f5', '21578', 'Lucille Gaines', 'P', 'Aliso Viejo - California (CA) - 50,177', '(468) 274-2703'),
('19df5f31-cf20-48ec-b5ee-c9a427bff5d9', '92883', 'Jolie Cisneros', 'L', 'Anchorage - Alaska (AK) - 300,950', '(610) 263-8746'),
('1b773276-edb2-49cd-b9ac-9ab9e368bf07', '73235', 'Kiersten Hall', 'L', 'Moorhead - Minnesota (MN) - 39,398', '(840) 472-7739'),
('1d011e31-a15d-407b-ad6e-137e81b580f1', '25953', 'Melany Hoover', 'L', 'El Monte - California (CA) - 115,709', '(845) 895-1385'),
('1e57a85a-2c75-4092-8ea2-6f5b59872406', '18912', 'Cannon Stevens', 'P', 'Gaithersburg - Maryland (MD) - 65,691', '(781) 911-9920'),
('248b5646-339a-4174-ad8d-cfb2cd41d6e5', '96052', 'William Hansen', 'P', 'Council Bluffs - Iowa (IA) - 61,969', '(972) 315-9243'),
('2850dd6a-9cbe-4f85-811e-a810a0c855dd', '60685', 'Travis Huffman', 'L', 'Inglewood - California (CA) - 111,542', '(883) 390-7359'),
('2aa4b457-c9f5-454f-9b3e-9b5cc1074c85', '71109', 'Joselyn Hines', 'P', 'Iowa City - Iowa (IA) - 71,591', '(849) 301-0610'),
('2b73fbe9-76b0-4e85-a902-282bed87946c', '31432', 'Lia Lane', 'L', 'St. Petersburg - Florida (FL) - 249,688', '(496) 678-9852'),
('2c9a44f3-44f9-4728-9055-11857a24e827', '28845', 'Rylee Guzman', 'P', 'Indianapolis - Indiana (IN) - 843,393', '(872) 779-5858'),
('2eb5d519-4ad4-42a9-92c2-e4a361b62047', '55891', 'Julissa Lowery', 'L', 'Kalamazoo - Michigan (MI) - 75,548', '(720) 883-7503'),
('2ecbc3c6-08e5-404b-bc24-ef964b19ecc3', '76169', 'Drake Glass', 'L', 'Park Ridge - Illinois (IL) - 37,840', '(457) 759-5073'),
('3129190f-5642-4b44-a923-b5ca04e574c2', '13340', 'Malachi Moody', 'L', 'Kirkland - Washington (WA) - 84,430', '(933) 386-6918'),
('321be61a-6154-47c1-b987-61222fe3e584', '58661', 'Jadon Calhoun', 'L', 'Cutler Bay - Florida (FL) - 43,328', '(817) 423-5607'),
('3256ce98-ee54-43a2-9542-3d3f8329f7cd', '75056', 'Cameron Austin', 'P', 'Greenwood - Indiana (IN) - 53,665', '(736) 225-6429'),
('328e898c-3acd-40a2-bdee-c5cd9f08e61a', '69643', 'Zaria Powell', 'P', 'Mesa - Arizona (AZ) - 457,587', '(975) 602-2470'),
('333264af-a53a-42c2-a797-2a064ffc2d14', '58661', 'Coleman Fry', 'P', 'Chesterfield - Missouri (MO) - 47,750', '(395) 561-4344'),
('342ce74c-c9ef-4e80-9213-abc818c98c98', '23563', 'Andika Kangen Band', 'L', 'Durham - North Carolina (NC) - 245,475', '(343) 225-7680'),
('35a0697b-1f72-4fcb-b1fe-babb560195de', '58661', 'Azaria Guerra', 'P', 'Aliso Viejo - California (CA) - 50,176', '(764) 368-1883'),
('3730a2de-7141-4010-9478-147c315b7fd7', '23419', 'Brian Hines', 'P', 'Trenton - New Jersey (NJ) - 84,349', '(546) 461-7034'),
('37ff63da-8127-4533-b7ba-9a17c15ec5f4', '76458', 'Ty Cummings', 'L', 'Tulsa - Oklahoma (OK) - 398,121', '(546) 699-3016'),
('3c27d6ed-dad5-4e74-b925-98abe2a7e7b8', '75501', 'Jeremiah Boyer', 'P', 'Memphis - Tennessee (TN) - 653,450', '(933) 424-6849'),
('3c75e6e3-d524-44b1-960a-6cde07e2cea2', '99962', 'Griffin Franco', 'L', 'New Rochelle - New York (NY) - 79,446', '(323) 866-4068'),
('3d493967-116b-44f9-9bd9-62d42cc24c23', '17594', 'Alaina Avery', 'P', 'Johnson City - Tennessee (TN) - 65,123', '(411) 763-1780'),
('411096ac-2731-40d9-b4b8-fab940b78bb7', '72992', 'Ruben Mathews', 'L', 'Holyoke - Massachusetts (MA) - 40,249', '(462) 524-2353'),
('4467699b-2181-46ad-bf62-1b2699b4927f', '18817', 'Dexter Haas', 'P', 'Monrovia - California (CA) - 37,101', '(584) 437-6865'),
('454583bc-6b58-4946-8f86-c13e586f5161', '74433', 'Gustavo Wise', 'L', 'Fresno - California (CA) - 509,924', '(206) 567-6907'),
('474e9a88-24a2-4526-8eb0-98612c046eda', '40231', 'Bridger Bryan', 'P', 'Chesterfield - Missouri (MO) - 47,749', '(524) 262-9491'),
('478827d6-61ba-4784-a68b-9abdf20b673d', '54740', 'Brice Long', 'L', 'Odessa - Texas (TX) - 110,720', '(549) 229-5968'),
('493795aa-6203-46fc-88e4-9a53e921aa9a', '37998', 'Kenyon Solomon', 'P', 'Denver - Colorado (CO) - 649,495', '(557) 443-7212'),
('4ca6837f-ef58-485c-b0a8-9b48b54630da', '99640', 'Vicente Hahn', 'P', 'West Covina - California (CA) - 107,740', '(560) 229-0008'),
('4cc621fd-3324-4243-8f49-7e26ff7a9963', '85402', 'Mattie Fuentes', 'P', 'Meriden - Connecticut (CT) - 60,456', '(448) 204-7487'),
('4dc7cbd0-7b5b-4c82-b296-1babb2c5e5b4', '13433', 'Ryland Williams', 'L', 'Park Ridge - Illinois (IL) - 37,839', '(562) 770-5505'),
('4f139680-03ae-48bc-9580-96d903b76e53', '76169', 'Kolton Marsh', 'P', 'St. Joseph - Missouri (MO) - 77,147', '(372) 592-9022'),
('5013faf9-5355-4327-acc8-5d4bac516e9e', '82823', 'Khalil Schultz', 'P', 'Sugar Land - Texas (TX) - 83,860', '(253) 672-2933'),
('50b7484f-8006-461c-a243-f8c6b25c7a14', '63351', 'Diana Ortiz', 'L', 'Brea - California (CA) - 40,963', '(555) 616-7347'),
('511c3fe1-8673-4ff0-988d-54a865a57d0b', '83519', 'Angela Gonzalez', 'P', 'Palm Bay - Florida (FL) - 104,898', '(757) 978-2701'),
('523494de-063e-471a-bb40-5bf75a2fd386', '52705', 'Lincoln Whitaker', 'P', 'La Quinta - California (CA) - 39,331', '(616) 398-5495'),
('538e37c9-2b19-4ef0-bb5a-23e95affd5df', '85402', 'Aniyah Orr', 'L', 'Hollywood - Florida (FL) - 146,527', '(839) 327-5720'),
('54dc0971-6cec-4e33-91ba-c679d3420554', '42627', 'Abraham Vaughan', 'P', 'Glendale - Arizona (AZ) - 234,634', '(204) 475-8908'),
('55323171-f6a9-42ef-b7ba-e5197a4e6298', '12612', 'Osvaldo Arellano', 'P', 'Davis - California (CA) - 66,205', '(778) 488-3162'),
('563c9ba9-80ad-4dc2-89ba-4916565d3422', '14486', 'Aisha Hawkins', 'L', 'Scranton - Pennsylvania (PA) - 75,806', '(873) 821-8145'),
('5680b831-4034-42f6-b45c-59b4d3669c73', '55707', 'Ruby Hodges', 'P', 'Sterling Heights - Michigan (MI) - 131,224', '(355) 541-3983'),
('5ee69315-48f4-46dc-8d32-fb951320b056', '40231', 'Valerie Molina', 'L', 'Rapid City - South Dakota (SD) - 70,813', '(468) 274-2702'),
('6240ee3a-eef2-458e-a3b3-167310f4a330', '12177', 'Lailah Mccarthy', 'L', 'Bremerton - Washington (WA) - 39,056', '(997) 602-9001'),
('62d84af1-1268-40e6-83f8-ffbd19bdac66', '74830', 'Ryker Hood', 'P', 'Chesapeake - Virginia (VA) - 230,571', '(942) 488-2162'),
('665fec1c-9810-4035-914c-d412fcf29d59', '38081', 'Kenley Bishop', 'L', 'Carson City - Nevada (NV) - 54,080', '(406) 531-4641'),
('666dd3d1-2742-4c48-86c9-c7a2488b69cd', '30776', 'Erin Chen', 'P', 'Woodbury - Minnesota (MN) - 65,656', '(683) 244-9190'),
('67406b5b-4570-428f-85c1-ee1116b60445', '90327', 'Luz Hill', 'P', 'Wheaton - Illinois (IL) - 53,648', '(921) 943-8424'),
('71c21769-206d-49d0-bd0d-d009b3602c89', '96558', 'Kianna Hill', 'P', 'Canton - Ohio (OH) - 72,536', '(500) 744-0784'),
('727dc3f5-0f3e-4869-905b-7cdbb96f1b1a', '38727', 'Jovanny Huang', 'L', 'Hollywood - Florida (FL) - 146,526', '(720) 500-0815'),
('7778ee6a-e78b-45c2-b855-6e779d1a16d8', '64492', 'Jacob King', 'P', 'Alexandria - Louisiana (LA) - 48,426', '(522) 968-7531'),
('788c07e4-e0b2-4964-8537-99ca8da285d8', '12826', 'Walker Herman', 'P', 'Dublin - Ohio (OH) - 43,607', '(620) 613-2091'),
('7b3b7d89-e8b8-47b8-bc83-4ad600e7ae39', '56524', 'Urijah Serrano', 'L', 'Newark - California (CA) - 44,096', '(774) 353-4911'),
('7bc32a3e-973b-4e04-a27f-ecb12e15d08a', '49696', 'Matilda Page', 'P', 'Meriden - Connecticut (CT) - 60,457', '(456) 580-2819'),
('7cf296a1-41f5-4fae-aa9d-ae2c53b5004e', '47288', 'Karissa Neal', 'P', 'Caldwell - Idaho (ID) - 48,957', '(754) 790-9871'),
('7dca23f7-a2fd-455b-a3a2-f03477fd33af', '81908', 'Simone Mccoy', 'P', 'Cedar Hill - Texas (TX) - 46,663', '(497) 691-3501'),
('802b2cb0-e0f6-4bdf-84e8-9c7c78d23431', '21578', 'Russell Cannon', 'L', 'Cutler Bay - Florida (FL) - 43,329', '(350) 920-8900'),
('80c96a91-e1e3-4039-9644-8f9ba4e3b65f', '86546', 'Cherish Cobb', 'L', 'Enid - Oklahoma (OK) - 50,725', '(575) 468-4269'),
('81e21f99-16de-4053-bc1d-7252b9ffd98f', '74433', 'Jeffery Castillo', 'P', 'Monrovia - California (CA) - 37,102', '(204) 475-8907'),
('8213b6d6-9922-4c61-95c7-516f35831ef0', '30574', 'Carina Vasquez', 'P', 'Los Angeles - California (CA) - 3,884,307', '(938) 847-1796'),
('869a53f9-e45b-465c-9353-3247a5236ee9', '19560', 'Saul Bautista', 'L', 'Oakland - California (CA) - 406,253', '(847) 639-5162'),
('891bd351-2b43-4ba2-a408-de664eefdf84', '38727', 'Orlando Mcfarland', 'P', 'St. Joseph - Missouri (MO) - 77,149', '(884) 471-2924'),
('8bda133a-dc64-4b4a-aeb3-03c9d10b1ffa', '44230', 'Konnor Mcpherson', 'P', 'Kearny - New Jersey (NJ) - 41,664', '(885) 269-9398'),
('8d9d8a39-a85a-486b-be7d-2269cc532d24', '77059', 'Dominique Mcneil', 'L', 'Rocky Mount - North Carolina (NC) - 56,954', '(356) 922-3771'),
('8fa89221-4710-4604-acd0-c43658d75ac8', 'sef', 'sfsdfsdfs', 'L', 'fsdf', '3534545'),
('9146f7c2-6db8-42f7-942d-4d7ec6d07b54', '93044', 'Julissa Hines', 'P', 'Fort Lauderdale - Florida (FL) - 172,389', '(206) 511-0072'),
('93f70a7d-230a-4f63-822e-a8b99b4fcce5', '74792', 'Makai Garrett', 'P', 'Glendale - Arizona (AZ) - 234,633', '(347) 417-1842'),
('95d3ad0e-38de-43de-b285-864e28283eb2', '42627', 'Malakai Charles', 'L', 'El Monte - California (CA) - 115,708', '(302) 301-1464'),
('96ab9e71-762a-439e-8042-fe96d74f4384', '76169', 'Rachel Pugh', 'P', 'Cedar Rapids - Iowa (IA) - 128,430', '(884) 471-2923'),
('983f2a9f-0119-49d8-b4ac-7ac03efd5c01', '19510', 'Griffin French', 'L', 'Annapolis - Maryland (MD) - 38,722', '(682) 766-3264'),
('9af11a60-c659-4282-8f6d-7258e181239f', '57628', 'Alena Henderson', 'P', 'Lodi - California (CA) - 63,338', '(683) 280-9288'),
('9b06c6e6-fc17-446c-b0be-ca6802b80e2e', '99321', 'fdfdfdfd', 'P', 'Gresham - Oregon (OR) - 109,397', '(765) 425-0608'),
('9ead1b3e-b266-4516-a7fb-89fa571124e9', '56433', 'Valery Higgins', 'P', 'Port St. Lucie - Florida (FL) - 171,016', '(747) 749-9591'),
('a1408ca3-07ec-4725-a7a7-11b44ca557aa', '63742', 'Kaeden Ross', 'P', 'San Marcos - California (CA) - 89,387', '(322) 708-8227'),
('a2caab45-a103-477b-9c42-e8035cab5513', '90210', 'Adolfo Gaines', 'P', 'Urbandale - Iowa (IA) - 41,776', '(314) 595-7695'),
('a5d41367-f6e8-4895-980d-63596a2698ef', '36187', 'Damian Herrera', 'P', 'Greenville - North Carolina (NC) - 89,130', '(857) 834-2680'),
('a7d69125-d076-4712-b1b5-b006ad6ed5c5', '11240', 'Rayna Cantrell', 'P', 'Lawton - Oklahoma (OK) - 97,151', '(854) 466-8757'),
('aa287753-9cd3-4e0a-9d95-1c2cb257f1cf', '72879', 'Noah Weiss', 'L', 'Kansas City - Missouri (MO) - 467,007', '(959) 353-1121'),
('ad53b9a3-baf4-43bc-b854-d174c9a47aed', '73678', 'Valentina Lewis', 'L', 'Huntsville - Alabama (AL) - 186,254', '(293) 935-8826'),
('aeda7d20-b845-4233-9286-ededfca6dac7', '61381', 'Tiara Henry', 'P', 'Marlborough - Massachusetts (MA) - 39,414', '(341) 541-9667'),
('b02d8603-39a3-4c9f-be1b-ed6d383bd30a', '51856', 'Maurice Reeves', 'P', 'Hoffman Estates - Illinois (IL) - 52,398', '(272) 645-3779'),
('b1e0d38c-1ef8-454b-be9c-4c663adbad9c', '18912', 'Amiyah Reese', 'P', 'Cedar Rapids - Iowa (IA) - 128,429', '(558) 358-6959'),
('b31b2aa4-d769-4e50-98b6-f8e15f7a0975', '63599', 'Valentino Pennington', 'P', 'Quincy - Massachusetts (MA) - 93,494', '(475) 897-3681'),
('b3701426-66a6-4290-823a-b4273c2c0af4', '51941', 'Jennifer Shields', 'P', 'Clifton - New Jersey (NJ) - 85,390', '(320) 284-4028'),
('b71bfbea-5427-4428-976b-5923b8e7f5c9', '14652', 'Jean Holden', 'P', 'Lodi - California (CA) - 63,339', '(216) 761-0648'),
('b9177e3e-31d2-4e09-93a0-936b9ada666e', '42627', 'Bruno Reed', 'P', 'Cincinnati - Ohio (OH) - 297,518', '(898) 515-3668'),
('bbe7cbe1-ec1f-4062-86e7-2349a8b1fec9', '95471', 'Dario James', 'P', 'Oceanside - California (CA) - 172,794', '(420) 343-7062'),
('c15d3870-a2c0-4bb3-8a63-a977773e5e38', '16853', 'Cullen Galvan', 'P', 'Mount Prospect - Illinois (IL) - 54,771', '(299) 872-2374'),
('c23aa2f2-0e6c-442e-99f2-81952f221e47', '94196', 'Amara Walker', 'P', 'Boston - Massachusetts (MA) - 645,966', '(282) 433-7019'),
('c5c0e64f-2a5d-4b52-a174-1994fca28851', '14652', 'Ben Hanson', 'L', 'Huntsville - Alabama (AL) - 186,256', '(456) 580-2820'),
('c6d2f010-5c9a-47cb-af80-f568e3510a1e', '74792', 'Evelin Schwartz', 'L', 'Fresno - California (CA) - 509,925', '(700) 874-5631'),
('cb022433-2072-4eeb-846c-bbec2aa73082', '39751', 'Holly Ray', 'L', 'Santa Maria - California (CA) - 102,216', '(232) 479-0741'),
('cb75b7c0-80d8-41e8-8858-9426bdad88f0', '38727', 'Alan Moran', 'P', 'Alexandria - Louisiana (LA) - 48,427', '(676) 584-7594'),
('cd49c836-1601-49b8-bd33-76892956d3f8', '36519', 'Urijah Fletcher', 'P', 'Belleville - Illinois (IL) - 42,895', '(215) 956-2017'),
('ce2bf040-baa4-4009-95f9-e967c7bc3fc0', '18096', 'Ansley Baker', 'P', 'Eau Claire - Wisconsin (WI) - 67,545', '(658) 275-7976'),
('ce6dafc2-825d-4ecd-ba32-4ae8e1ffa857', '26519', 'Ronaldo Wati', 'P', 'Orange - California (CA) - 139,969', '(996) 554-0004'),
('cf30b037-6d3e-430e-ad67-0a08850f339d', '21578', 'Monique Richard', 'P', 'Norwalk - California (CA) - 106,589', '(281) 917-5914'),
('cf7463c7-796b-4b22-8f2d-e9454d48fe16', '69525', 'Alma Fitzpatrick', 'P', 'Hillsboro - Oregon (OR) - 97,368', '(476) 505-1005'),
('d073ba19-0028-4171-8794-3b72da30b8dc', '18817', 'Paulina Jones', 'P', 'Norwalk - California (CA) - 106,590', '(510) 776-2457'),
('d0bc5306-4ae4-443a-951b-614f7c3d936a', '97367', 'Eliezer Mclean', 'P', 'Aliso Viejo - California (CA) - 50,175', '(788) 354-1528'),
('d4593718-aaec-4101-91fd-f7592deb7df6', '74792', 'Casey Carey', 'P', 'Cincinnati - Ohio (OH) - 297,517', '(692) 614-0409'),
('d4d4bd69-96e8-401a-9582-722997bb1f80', '69810', 'Gretchen Duffy', 'P', 'West Allis - Wisconsin (WI) - 60,697', '(544) 356-1509'),
('d8d272ec-b221-4552-98e7-ef3fe335e2fc', '23423', '4234234324', 'P', '32423', '2123'),
('d952d021-8144-4348-ad81-7957358ebed5', '60905', 'Annie Monroe', 'L', 'Normal - Illinois (IL) - 54,664', '(319) 270-3534'),
('dda79b51-c226-472f-98a6-20c2f951abe7', '43678', 'Yaretzi Strickland', 'P', 'Blue Springs - Missouri (MO) - 53,294', '(328) 481-5416'),
('de75dc2c-09a7-4729-ab1d-51059ce9573b', '78038', 'Aspen Stanley', 'P', 'Glendale - Arizona (AZ) - 234,632', '(265) 597-0458'),
('e0e7fb65-f2dc-4b71-8ada-29cc6badaf00', '99548', 'Evangeline Nguyen', 'L', 'Midland - Michigan (MI) - 42,181', '(580) 890-1284'),
('e13efe6f-63aa-4a14-bfa4-21156ae7c24c', '96678', 'Caden Waters', 'P', 'Altoona - Pennsylvania (PA) - 45,796', '(264) 834-2315'),
('e7d3fec6-93b8-45c0-9988-3a73adba9958', '71774', 'Faith Newman', 'P', 'Bountiful - Utah (UT) - 43,023', '(267) 228-8802'),
('e95cc242-7182-416e-8fb2-b000b5f2d974', '19364', 'Spencer Weeks', 'L', 'Clovis - New Mexico (NM) - 39,508', '(215) 231-0552'),
('f2f6ffa0-49d6-4c6b-8b56-5a467568776f', '77451', 'Zack Garcia', 'L', 'Roswell - New Mexico (NM) - 48,611', '(575) 988-2564'),
('f402c992-b5e0-4663-a212-b12ad8ef026b', '55584', 'Ray Perez', 'P', 'Wyoming - Michigan (MI) - 74,100', '(817) 566-0398'),
('f4df52e1-4ca7-4a8b-bc5f-780f66fcb5ca', '19269', 'Jennifer Bass', 'P', 'Lancaster - California (CA) - 159,523', '(986) 831-9635'),
('f564a330-8b17-4d06-8aa0-320fb491f02c', '64492', 'Carl Bautista', 'P', 'St. Joseph - Missouri (MO) - 77,148', '(281) 984-7996'),
('f5f3f1bf-eb60-48f6-88ce-a9e0827cb8e7', '22653', 'Ahmed Shaffer', 'P', 'Lakewood - California (CA) - 81,121', '(977) 603-5031'),
('f5fa5c45-ae11-4fe9-aec2-02b92d300c9c', '14652', 'Amirah Sandoval', 'P', 'Canton - Ohio (OH) - 72,535', '(220) 368-9421');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli`
--

CREATE TABLE `tb_poli` (
  `id_poli` varchar(100) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `gedung` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `nama_poli`, `gedung`) VALUES
('81ea67d0-e6dd-4b6c-aa6a-06797b11df55', 'Poliklinik Mata', 'Gedung Utama'),
('c00c67e1-c32f-4606-a632-bf9efbf1dfbe', 'Poliklinik Gigi', 'Gedung Utama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` varchar(100) NOT NULL,
  `id_pasien` varchar(100) NOT NULL,
  `keluhan` text NOT NULL,
  `id_dokter` varchar(100) NOT NULL,
  `diagnosa` text NOT NULL,
  `id_poli` varchar(100) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`, `id_poli`, `tgl_periksa`) VALUES
('901dd6e2-054d-4a5e-9a8f-6487d3c4ca31', '0b519baf-cecf-4c3b-bb34-217ec7d67d2c', '<p>Sering Sakit Kepala, Mual-mual dan suka tidak fokus</p>\r\n', 'bc2c8b07-662e-4d32-8d0c-395820abfbb0', 'Kurang Darah', '81ea67d0-e6dd-4b6c-aa6a-06797b11df55', '2023-01-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id_rm` varchar(100) NOT NULL,
  `id_obat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rm_obat`
--

INSERT INTO `tb_rm_obat` (`id_rm`, `id_obat`) VALUES
('ff44fb79-7b24-4bc3-8f76-a7d58cb0e223', '2ff75915-a7ee-4d1b-90c5-23a644782ba7'),
('ff44fb79-7b24-4bc3-8f76-a7d58cb0e223', '81fbf983-a91c-4665-912c-d9b23924a03a'),
('901dd6e2-054d-4a5e-9a8f-6487d3c4ca31', '2ff75915-a7ee-4d1b-90c5-23a644782ba7'),
('901dd6e2-054d-4a5e-9a8f-6487d3c4ca31', '81fbf983-a91c-4665-912c-d9b23924a03a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
