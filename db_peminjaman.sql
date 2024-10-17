-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 03, 2024 at 01:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `email`, `password`) VALUES
(1, 'admin.asset@binapertiwi.co.id', '93b9e9e97dcd7e8a9eacfb17ae1fa625'),
(2, 'admin.asset2@binapertiwi.co.id', '93b9e9e97dcd7e8a9eacfb17ae1fa625');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int NOT NULL,
  `id_barang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tersedia` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `id_barang`, `deskripsi`, `kategori`, `tersedia`) VALUES
(21, '30002926', 'Logitech Group', 'Tools', 1),
(22, '30003431', 'Kandao Meeting Pro (360)', 'Tools', 1),
(23, '30003659', 'Kandao Meeting Pro (360)', 'Tools', 1),
(24, '30003660', 'Kandao Meeting Pro (360)', 'Tools', 1),
(25, '30001589', 'Notebook Lenovo Ideapad C340', 'Laptop', 1),
(26, '30001571', 'Notebook Lenovo Ideapad C340', 'Laptop', 1),
(27, '30001573', 'Notebook Lenovo Ideapad C340', 'Laptop', 1),
(28, 'PO01', 'Pointer Logitech R500', 'Peripheral', 1),
(29, 'PO02', 'Pointer Logitech R500', 'Peripheral', 0),
(30, 'WL01', 'Webcam Logitech C922 Pro + Tripod Kecil', 'Peripheral', 1),
(31, 'WL02', 'Webcam Logitech', 'Peripheral', 1),
(32, 'SP01', 'Speaker + Mic Plantronics Calisto 3200', 'Peripheral', 1),
(33, 'SP02', 'Speaker + Mic Plantronics Calisto 3200', 'Peripheral', 1),
(34, 'SW01', 'Switch TP Link', 'Network', 1),
(35, 'AD01', 'Adaptor Dell Bulat', 'Peripheral', 1),
(36, 'AD02', 'Adaptor Dell Type C', 'Peripheral', 0),
(37, 'HD01', 'Harddisk External', 'Peripheral', 1),
(38, 'CD01', 'CDROM External', 'Peripheral', 1),
(39, 'CO01', 'Converter VGA to HDMI', 'Peripheral', 0),
(40, 'CO02', 'Converter Type C to HDMI', 'Peripheral', 1),
(41, 'CO03', 'Converter Type C to HDMI', 'Peripheral', 1),
(42, 'CO04', 'Converter Type C to HDMI LAN SD TF PD 100 Watt ', 'Peripheral', 1),
(43, 'CO05', 'Converter Type C to HDMI LAN SD TF PD 100 Watt ', 'Peripheral', 1),
(44, 'KY01', 'Keyboard Logitech', 'Peripheral', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nrp` int NOT NULL,
  `divisi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dept` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nama`, `nrp`, `divisi`, `dept`, `email`) VALUES
(35, 'ABDULLAH AHMAD', 30195010, 'CORPORATE FUNCTION', 'CORPORATE BUSINESS DEVELOPMENT', 'abdullah.ahmad@binapertiwi.co.id'),
(36, 'ACHMAD FARISI HAMZAH', 30115109, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'achmad.farisi@binapertiwi.co.id'),
(37, 'ADAM ARGA FIKRI', 30123008, 'CORPORATE FUNCTION', 'CPMD, CORP. COMM. & BPT', 'adam.fikri@binapertiwi.co.id'),
(38, 'ADI SETIAWAN PAMUNGKAS', 30109043, 'FINANCE, ACCOUNTING & PROCUREMENT', 'FINANCE', 'adi.pamungkas@binapertiwi.co.id'),
(39, 'ADITYA PRATAMA', 30117516, 'CORPORATE FUNCTION', 'CPMD, CORP. COMM. & BPT', 'aditya.pratama@binapertiwi.co.id'),
(41, 'AGUS MUSTOFA', 30197203, 'PEOPLE & INFRASTRUCTURE', 'GM', 'agus.mustofa@binapertiwi.co.id'),
(42, 'AGUS PURNOMO', 30105003, 'PRODUCT SUPPORT & ENGINEERING', 'RENTAL', 'agus.purnomo@binapertiwi.co.id'),
(43, 'AGUS SOMANTRI', 30115116, 'SALES & BRANCH OPERATION', 'AREA II', 'agus.somantri@binapertiwi.co.id'),
(44, 'AGUSTIN WIDYANINGTYAS', 30199025, 'FINANCE, ACCOUNTING & PROCUREMENT', 'GM', 'agustin.widyaningtyas@binapertiwi.co.id'),
(45, 'AGUSTOMI ARIF', 30111012, 'PRODUCT SUPPORT & ENGINEERING', 'FLUID CONNECTOR & OPTIONAL GROUP', 'agustomi.arif@binapertiwi.co.id'),
(46, 'AHMAD ROIS MUNANDAR PURNOMO SIDI', 30115118, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'ahmad.rois@binapertiwi.co.id'),
(47, 'AHMAD SUHADA', 30116002, 'PRODUCT SUPPORT & ENGINEERING', 'RENTAL', 'ahmad.suhada@binapertiwi.co.id'),
(50, 'AMIRULLAH MUKMIN AKBAR', 30114510, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING COMMUNICATION & OPERATIONAL EXCELLENCE', 'amirullah.akbar@binapertiwi.co.id'),
(51, 'ANDI PUSPITA', 30105005, 'SALES & BRANCH OPERATION', 'SALES PEOPLE, DIGITALIZATION & OPS EXCELLENCE', 'andi.puspita@binapertiwi.co.id'),
(52, 'ANDI RIYANTO', 30103001, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'andi.riyanto@binapertiwi.co.id'),
(53, 'ANDROMEDA ARDIAN', 30115035, 'SALES & BRANCH OPERATION', 'PADDY, AGRO, GOVERNMENT & DEALER', 'andromeda.ardian@binapertiwi.co.id'),
(54, 'ANGGI APRILIANI LUBIS', 30117044, 'FINANCE, ACCOUNTING & PROCUREMENT', 'FINANCE', 'anggi.lubis@binapertiwi.co.id'),
(55, 'ANGGUN RAHMAWATI', 30122052, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'anggun.rahmawati@binapertiwi.co.id'),
(56, 'ANISA HABIBATULLOH', 30122021, 'MARKETING & MATERIAL MANAGEMENT', 'PRICING & E-COMMERCE', 'anisa.habibatulloh@binapertiwi.co.id'),
(57, 'ANNE AUDISTYA FERNANDA', 30123011, 'PEOPLE & INFRASTRUCTURE', 'INFORMATION TECHNOLOGY', 'anne.fernanda@binapertiwi.co.id'),
(58, 'APRANA PUTRA', 30121005, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'aprana.putra@binapertiwi.co.id'),
(59, 'ARDHITA DARMAWAN', 30105029, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP I', 'ardhita.darmawan@binapertiwi.co.id'),
(60, 'ARFIAN DANAR SAPUTRAH', 30113508, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'arfian.saputrah@binapertiwi.co.id'),
(61, 'ARI IRMAWAN', 30115007, 'FINANCE, ACCOUNTING & PROCUREMENT', 'FINANCE', 'ari.irmawan@binapertiwi.co.id'),
(62, 'ARIF BUDIMAN', 30109004, 'FINANCE, ACCOUNTING & PROCUREMENT', 'PROCUREMENT', 'arif.budiman@binapertiwi.co.id'),
(63, 'ARIO TURANGGA BAYU', 30122027, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'ario.bayu@binapertiwi.co.id'),
(64, 'ARIS ADHI PERMANA', 30115008, 'PRODUCT SUPPORT & ENGINEERING', 'SERVICE BUSINESS', 'aris.adhi@binapertiwi.co.id'),
(65, 'ARLI WARZUQNI FADHLI', 30116502, 'PEOPLE & INFRASTRUCTURE', 'IR, ESG & GENERAL SERVICES', 'arli.fadhli@binapertiwi.co.id'),
(66, 'ARSO RIADI', 30198006, 'BOD', 'BOD', 'arso.riadi@binapertiwi.co.id'),
(67, 'AULIA RAHMAN ABDILLAH', 30115042, 'SALES & BRANCH OPERATION', 'INDUSTRIAL, TELEPRO & RENTAL', 'aulia.abdillah@binapertiwi.co.id'),
(68, 'AULIA RAHMAN', 30115144, 'PRODUCT SUPPORT & ENGINEERING', 'RENTAL', 'aulia.rahman@binapertiwi.co.id'),
(69, 'BAGUS SISPRATOMO', 30115111, 'PEOPLE & INFRASTRUCTURE', 'INFORMATION TECHNOLOGY', 'bagus.sispratomo@binapertiwi.co.id'),
(70, 'BAMBANG ADIWIJAYA', 30116001, 'PRODUCT SUPPORT & ENGINEERING', 'SERVICE BUSINESS', 'bambang.adiwijaya@binapertiwi.co.id'),
(71, 'BAYU KURNIANSYAH', 30109047, 'SALES & BRANCH OPERATION', 'GM', 'bayu.kurniansyah@binapertiwi.co.id'),
(72, 'BELLA FEBIOLITA', 30122022, 'PRODUCT SUPPORT & ENGINEERING', 'ENGINEERING', 'bella.febiolita@binapertiwi.co.id'),
(73, 'BOY DWI APRIYANTO', 30107030, 'FINANCE, ACCOUNTING & PROCUREMENT', 'PROCUREMENT', 'boy.apriyanto@binapertiwi.co.id'),
(74, 'BROERY ANDREW SIHOMBING', 30114525, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP II', 'broery.sihombing@binapertiwi.co.id'),
(75, 'BUDI SANTOSO', 30196096, 'PEOPLE & INFRASTRUCTURE', 'IR, ESG & GENERAL SERVICES', 'budi.santoso@binapertiwi.co.id'),
(76, 'BUDI SURYADI', 30108079, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'budi.suryadi@binapertiwi.co.id'),
(78, 'CHOIRUL CHULUQ', 30194174, 'SALES & BRANCH OPERATION', 'AREA I', 'choirul.chuluq@binapertiwi.co.id'),
(79, 'CHRYSANTINO PARTOHAP S.', 30113033, 'SALES & BRANCH OPERATION', 'INDUSTRIAL, TELEPRO & RENTAL', 'chrisantino.partohap@binapertiwi.co.id'),
(80, 'DANANG RUDIANSYAH', 30112016, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP I', 'danang.rudiansyah@binapertiwi.co.id'),
(81, 'DANIAL RIVAI HARRISWARA', 30100072, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP IV', 'danial.harriswara@binapertiwi.co.id'),
(82, 'DANIEL GARNANDO KRISTIAN', 30121004, 'PRODUCT SUPPORT & ENGINEERING', 'ENGINEERING', 'daniel.kristian@binapertiwi.co.id'),
(83, 'DEASSERA SEPUTI INDHAMA', 30115101, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'deassera.indhama@binapertiwi.co.id'),
(84, 'DEDE SYARIF HIDAYAT', 30123005, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'dede.hidayat@binapertiwi.co.id'),
(85, 'DENI SUNARYA', 30103005, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', '#N/A'),
(86, 'DIPTA PRAHARSA', 30115051, 'SALES & BRANCH OPERATION', 'PADDY, AGRO, GOVERNMENT & DEALER', 'dipta.praharsa@binapertiwi.co.id'),
(87, 'DWI WIDIONO', 30194148, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP II', 'dwi.widiono@binapertiwi.co.id'),
(88, 'DYAH RACHMADANI TRI H', 30109005, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'dyah.rachmadani@binapertiwi.co.id'),
(91, 'EKA RAHMAWULANDARI', 30110115, 'FINANCE, ACCOUNTING & PROCUREMENT', 'PROCUREMENT', 'eka.rahmawulandari@binapertiwi.co.id'),
(92, 'EKO WARNO', 30111514, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP III', 'eko.warno@binapertiwi.co.id'),
(93, 'ELITA FEBRIANA', 30115002, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING COMMUNICATION & OPERATIONAL EXCELLENCE', 'adm.mkt@binapertiwi.co.id'),
(94, 'ELOK BAKTI DARMAWAN', 30196045, 'BOD', 'BOD', 'elok.darmawan@binapertiwi.co.id'),
(95, 'EMAN SUPARMAN', 30105002, 'PRODUCT SUPPORT & ENGINEERING', 'SERVICE BUSINESS', 'eman.suparman@binapertiwi.co.id'),
(96, 'ENDI ROHENDI', 30113013, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'endi.rohendi@binapertiwi.co.id'),
(97, 'FAHRUL ROZI', 30109011, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'fahrul.rozi@binapertiwi.co.id'),
(98, 'FAJAR MUSPRIANTO GUMANTI', 30107002, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP III', 'fajar.musprianto@binapertiwi.co.id'),
(99, 'FAJAR NUGROHO', 30114511, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'fajar.nugroho@binapertiwi.co.id'),
(100, 'FEKI WAHYU COLIMAH', 30121002, 'FINANCE, ACCOUNTING & PROCUREMENT', 'ACCOUNTING & TAX', 'feki.colimah@binapertiwi.co.id'),
(101, 'FERRY', 30113030, 'PRODUCT SUPPORT & ENGINEERING', 'ENGINEERING', 'ferry@binapertiwi.co.id'),
(102, 'FERRY ASTORO', 30115117, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'ferry.astoro@binapertiwi.co.id'),
(103, 'FIQIH ENAN IBRAHIM', 30123004, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'fiqih.ibrahim@binapertiwi.co.id'),
(104, 'FIRMAN ADHAR WISANDIKO', 30122026, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'firman.wisandiko@binapertiwi.co.id'),
(105, 'FIRMAN SYA\'RONI', 30115001, 'SALES & BRANCH OPERATION', 'PADDY, AGRO, GOVERNMENT & DEALER', 'firman.syaroni@binapertiwi.co.id'),
(106, 'FIRMANSYAH', 30111016, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'firmansyah@binapertiwi.co.id'),
(107, 'GALIH SETIAWAN', 30111018, 'PRODUCT SUPPORT & ENGINEERING', 'OPERATIONAL EXCELLENT', 'galih.setiawan@binapertiwi.co.id'),
(108, 'HADI PUTRA MASRUL', 30112044, 'CORPORATE FUNCTION', 'CORPORATE BUSINESS DEVELOPMENT', 'hadi.masrul@binapertiwi.co.id'),
(109, 'HANDOKO DJAMAL', 30115005, 'FINANCE, ACCOUNTING & PROCUREMENT', 'PROCUREMENT', 'handoko.djamal@binapertiwi.co.id'),
(110, 'HANIFAH QONITA', 30122050, 'PEOPLE & INFRASTRUCTURE', 'IR, ESG & GENERAL SERVICES', 'hanifah.qonita@binapertiwi.co.id'),
(111, 'HANUM PUSPITO UTAMI', 30104016, 'FINANCE, ACCOUNTING & PROCUREMENT', 'FINANCE', 'hanum.utami@binapertiwi.co.id'),
(112, 'HARY LUBIS WIBISONO', 30101076, 'SALES & BRANCH OPERATION', 'COAL MINING', 'hary.lubis@binapertiwi.co.id'),
(113, 'HASAN BASRI', 30114034, 'SALES & BRANCH OPERATION', 'AHEMCE & NON-COAL MINING', 'hasan.basri@binapertiwi.co.id'),
(114, 'HELMAN SUSILO', 30101028, 'SALES & BRANCH OPERATION', 'COAL MINING', 'helman.susilo@binapertiwi.co.id'),
(115, 'HENGKY WIBOWO', 30106006, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'hengky.wibowo@binapertiwi.co.id'),
(116, 'HENKI PUTRA', 30110117, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP III', 'henki.putra@binapertiwi.co.id'),
(117, 'HENRY AKBAR', 30105006, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'henry.akbar@binapertiwi.co.id'),
(118, 'HERJONO WIDAGDO', 30111026, 'PEOPLE & INFRASTRUCTURE', 'INFORMATION TECHNOLOGY', 'herjono.widagdo@binapertiwi.co.id'),
(119, 'HERMANSYAH MAULANA', 30107007, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'hermansyah.maulana@binapertiwi.co.id'),
(120, 'HESRA SIMANJUNTAK', 30196193, 'MARKETING & MATERIAL MANAGEMENT', 'GM', 'hesra.simanjuntak@binapertiwi.co.id'),
(121, 'HOTMA PARULIAN PURBA', 30111009, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'hotma.purba@binapertiwi.co.id'),
(122, 'IRMAN FIRMANSYAH', 30115064, 'SALES & BRANCH OPERATION', 'INDUSTRIAL, TELEPRO & RENTAL', 'irman.firmansyah@binapertiwi.co.id'),
(123, 'IRWAN SYAH', 30105008, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'irwansyah@binapertiwi.co.id'),
(124, 'IRWANTO', 30115066, 'CORPORATE FUNCTION', 'CPMD, CORP. COMM. & BPT', 'irwanto@binapertiwi.co.id'),
(125, 'ISA BIMA LEKSMANA', 30100127, 'PRODUCT SUPPORT & ENGINEERING', 'ENGINEERING', 'isa.leksmana@binapertiwi.co.id'),
(126, 'IVAN SOFYAN', 30114502, 'PRODUCT SUPPORT & ENGINEERING', 'RENTAL', 'ivan.sofyan@binapertiwi.co.id'),
(127, 'IWAN SATRIAWAN', 30112024, 'PRODUCT SUPPORT & ENGINEERING', 'RENTAL', 'iwan.satriawan@binapertiwi.co.id'),
(130, 'KARYANA', 30191191, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'karyana@binapertiwi.co.id'),
(131, 'KEVIN OKTAVIANDRA', 30123002, 'CORPORATE FUNCTION', 'CORPORATE BUSINESS DEVELOPMENT', 'kevin.oktaviandra@binapertiwi.co.id'),
(134, 'KOKOH WAHYUDWIJENDRA', 30196130, 'PRODUCT SUPPORT & ENGINEERING', 'ENGINEERING', 'kokoh.wahyudwijendra@binapertiwi.co.id'),
(135, 'KORIYAH', 30194152, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'koriyah@binapertiwi.co.id'),
(136, 'KRISTINA ANDINA NUGRAHANINGTYAS', 30113512, 'PEOPLE & INFRASTRUCTURE', 'CULTURE & KNOWLEDGE MANAGEMENT', 'kristina.andina@binapertiwi.co.id'),
(137, 'LIDIYA PERMATA SEMBIRING', 30123012, 'CORPORATE FUNCTION', 'CPMD, CORP. COMM. & BPT', 'lidiya.sembiring@binapertiwi.co.id'),
(138, 'MADE GIULIANA SUCIPTA KEDEL', 30110121, 'PRODUCT SUPPORT & ENGINEERING', 'FLUID CONNECTOR & OPTIONAL GROUP', 'made.giuliana@binapertiwi.co.id'),
(139, 'MAHFUD AFFANDI', 30105009, 'PRODUCT SUPPORT & ENGINEERING', 'SERVICE BUSINESS', 'mahfud.affandi@binapertiwi.co.id'),
(140, 'MAHMUDI', 30194133, 'BOD', 'BOD', 'mahmudi@binapertiwi.co.id'),
(141, 'MARGARETTHA ORYSA SATIVA WIDURI', 30111005, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'margarettha.widuri@binapertiwi.co.id'),
(142, 'MAULIDA NURUL INSANI', 30122024, 'FINANCE, ACCOUNTING & PROCUREMENT', 'ACCOUNTING & TAX', 'maulida.insani@binapertiwi.co.id'),
(143, 'MAYA MARSINTA KURNIATY PUTRI', 30113521, 'PEOPLE & INFRASTRUCTURE', 'CULTURE & KNOWLEDGE MANAGEMENT', 'maya.marsinta@binapertiwi.co.id'),
(144, 'MOCHAMAD IMRON', 30106124, 'FINANCE, ACCOUNTING & PROCUREMENT', 'ACCOUNTING & TAX', 'mochamad.imron@binapertiwi.co.id'),
(145, 'MOHAMAD HADI NUR', 30122048, 'PEOPLE & INFRASTRUCTURE', 'INFORMATION TECHNOLOGY', 'mohamad.hadi@binapertiwi.co.id'),
(146, 'MOHAMMAD YOGA BASKORO', 30105148, 'PRODUCT SUPPORT & ENGINEERING', 'GM', 'yoga.baskoro@binapertiwi.co.id'),
(147, 'MUH IRFAN SYAUKI', 30115122, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'irfan.syauki@binapertiwi.co.id'),
(148, 'MUHAMAD IHSAN FAUZI', 30112521, 'SALES & BRANCH OPERATION', 'COAL MINING', 'car.smd@binapertiwi.co.id'),
(149, 'MUHAMAD RENDI', 30113017, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'muhamad.rendi@binapertiwi.co.id'),
(150, 'MUHAMAD ROPIK', 30111025, 'PRODUCT SUPPORT & ENGINEERING', 'USED EQUIPMENT', 'mohamad.ropik@binapertiwi.co.id'),
(151, 'MUHAMMAD BILLY KILIMANJARO', 30122049, 'FINANCE, ACCOUNTING & PROCUREMENT', 'PROCUREMENT', 'muhammad.kilimanjaro@binapertiwi.co.id'),
(152, 'MUHAMMAD EKI AYUBI', 30123003, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'muhammad.ayubi@binapertiwi.co.id'),
(153, 'MUHAMMAD FAUZAN', 30122020, 'CORPORATE FUNCTION', 'CPMD, CORP. COMM. & BPT', 'muhammad.fauzan@binapertiwi.co.id'),
(154, 'MUHAMMAD HANIFAN DARMAWAN', 30122031, 'CORPORATE FUNCTION', 'CORPORATE BUSINESS DEVELOPMENT', 'muhammad.darmawan@binapertiwi.co.id'),
(156, 'MUHAMMAD RIZAL FADLILLAH', 30115123, 'FINANCE, ACCOUNTING & PROCUREMENT', 'ACCOUNTING & TAX', 'rizal.fadillah@binapertiwi.co.id'),
(157, 'MUHAMMAD WAHYUDI ARI NUGRAHA', 30112529, 'SALES & BRANCH OPERATION', 'INDUSTRIAL, TELEPRO & RENTAL', 'wahyudi.nugraha@binapertiwi.co.id'),
(158, 'MUHAMMAD YASIR', 30100066, 'SALES & BRANCH OPERATION', 'AHEMCE & NON-COAL MINING', 'muhammad.yasir@binapertiwi.co.id'),
(159, 'MUZAKKY MURSYID', 30111008, 'PRODUCT SUPPORT & ENGINEERING', 'FLUID CONNECTOR & OPTIONAL GROUP', 'muzakky.mursyid@binapertiwi.co.id'),
(160, 'NADHIFA DIAN FIRDAUSIA', 30122053, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'nadhifa.firdausia@binapertiwi.co.id'),
(161, 'NARASHATIKA', 30122025, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'narashatika@binapertiwi.co.id'),
(162, 'NGATEMI PUJI ASTUTI', 30111043, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'puji.astuti@binapertiwi.co.id'),
(163, 'NILA SAFITRI', 30191392, 'FINANCE, ACCOUNTING & PROCUREMENT', 'FINANCE', 'nila.safitri@binapertiwi.co.id'),
(164, 'NIZAM RAHMAN HAKIM', 30113003, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP II', 'nizam.hakim@binapertiwi.co.id'),
(165, 'NOVELIA SAGITA INDRA', 30114508, 'FINANCE, ACCOUNTING & PROCUREMENT', 'PROCUREMENT', 'novelia.sagita@binapertiwi.co.id'),
(166, 'OKA DANES WARA FIRMANSYAH', 30115119, 'PEOPLE & INFRASTRUCTURE', 'CULTURE & KNOWLEDGE MANAGEMENT', 'oka.danes@binapertiwi.co.id'),
(167, 'PARWOTO HADI SAPUTRO', 30115112, 'PRODUCT SUPPORT & ENGINEERING', 'ENGINEERING', 'parwoto.hs@binapertiwi.co.id'),
(168, 'PEBY HAMZANI S', 30114035, 'FINANCE, ACCOUNTING & PROCUREMENT', 'PROCUREMENT', '#N/A'),
(169, 'PETRUS EKO NUGROHO', 30195084, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'petrus.eko@binapertiwi.co.id'),
(170, 'PRIJO TRI NUGROHO', 30193113, 'PEOPLE & INFRASTRUCTURE', 'IR, ESG & GENERAL SERVICES', 'prijo.nugroho@binapertiwi.co.id'),
(171, 'RACHMAT KURNIAWAN', 30107008, 'SALES & BRANCH OPERATION', 'PADDY, AGRO, GOVERNMENT & DEALER', 'rachmat.kurniawan@binapertiwi.co.id'),
(172, 'RAMADHINA APRILIANA', 30113002, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'ramadhina.apriliana@binapertiwi.co.id'),
(173, 'RATIH KAMALASARI', 30111004, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'ratih.kamalasari@binapertiwi.co.id'),
(174, 'RAVIE MAHENDRA', 30122033, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'ravie.mahendra@binapertiwi.co.id'),
(175, 'REBECCA PRISCILIA SIMANJUNTAK', 30115107, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING COMMUNICATION & OPERATIONAL EXCELLENCE', 'rebecca.ps@binapertiwi.co.id'),
(177, 'REZA SARASWATI', 30112085, 'SALES & BRANCH OPERATION', 'AREA I', 'reza.saraswati@binapertiwi.co.id'),
(178, 'RIANTO', 30110011, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP IV', 'rianto@binapertiwi.co.id'),
(179, 'RIDHO HARISTYO MUKTI', 30115113, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'ridho.mukti@binapertiwi.co.id'),
(180, 'RIZA ADITHYA EFFENDI', 30110004, 'PEOPLE & INFRASTRUCTURE', 'INFORMATION TECHNOLOGY', 'riza.adithya@binapertiwi.co.id'),
(181, 'ROBIE PUTRA ELLIAS', 30111015, 'FINANCE, ACCOUNTING & PROCUREMENT', 'FINANCE', 'robie.ellias@binapertiwi.co.id'),
(182, 'ROFI NAUFAL WIJAYA', 30122028, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'rofi.wijaya@binapertiwi.co.id'),
(183, 'RONIRIO EGA IMANTAKA', 30116501, 'FINANCE, ACCOUNTING & PROCUREMENT', 'FINANCE', 'ronirio.imantaka@binapertiwi.co.id'),
(184, 'RULY SULISTYO', 30106038, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'ruly.sulistyo@binapertiwi.co.id'),
(185, 'RYAN ARDIANSYAH', 30111539, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP II', 'ryan.ardiansyah@binapertiwi.co.id'),
(186, 'RYAN KURNIAWAN', 30115126, 'MARKETING & MATERIAL MANAGEMENT', 'PRICING & E-COMMERCE', 'ryan.kurniawan@binapertiwi.co.id'),
(187, 'SABAR BUDIMAN', 30197183, 'SALES & BRANCH OPERATION', 'AREA II', 'sabar.budiman@binapertiwi.co.id'),
(188, 'SATRIO EKO NUGROHO', 30123001, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'satrio.nugroho@binapertiwi.co.id'),
(189, 'SEPTYAN NUGRAHA KARTADIRJA', 30111536, 'SALES & BRANCH OPERATION', 'INDUSTRIAL, TELEPRO & RENTAL', 'septyan.kartadirja@binapertiwi.co.id'),
(190, 'SHAFIA AYU KINASIH', 30117503, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'shafia.kinasih@binapertiwi.co.id'),
(191, 'SIHAR CHANDRA BUDI P', 30111022, 'SALES & BRANCH OPERATION', 'COAL MINING', 'sihar.chandra@binapertiwi.co.id'),
(192, 'SUDARMONO', 30115090, 'PRODUCT SUPPORT & ENGINEERING', 'ENGINEERING', 'sudarmono@binapertiwi.co.id'),
(193, 'SUPARNO', 30100098, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'suparno@binapertiwi.co.id'),
(194, 'SUTIKNO', 30197003, 'PRODUCT SUPPORT & ENGINEERING', 'RENTAL', 'sutikno@binapertiwi.co.id'),
(195, 'SYAHIRA RIDMA ADANI', 30122029, 'CORPORATE FUNCTION', 'CORPORATE LEGAL', 'syahira.adani@binapertiwi.co.id'),
(196, 'TANTO HERTANTO', 30107043, 'CORPORATE FUNCTION', 'CORPORATE BUSINESS DEVELOPMENT', 'tanto.hertanto@binapertiwi.co.id'),
(197, 'TEGUH IRIANTO', 30197131, 'PRODUCT SUPPORT & ENGINEERING', 'ENGINEERING', 'teguh.irianto@binapertiwi.co.id'),
(198, 'TETI SUHARTI', 30111544, 'FINANCE, ACCOUNTING & PROCUREMENT', 'PROCUREMENT', 'teti.suharti@binapertiwi.co.id'),
(199, 'TITO RIZAL PRABOWO', 30114037, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP II', 'tito.prabowo@binapertiwi.co.id'),
(200, 'TOMI YULIANTO', 30111520, 'PRODUCT SUPPORT & ENGINEERING', 'ENGINEERING', 'tomi.yulianto@binapertiwi.co.id'),
(201, 'TORIF ADI', 30101087, 'FINANCE, ACCOUNTING & PROCUREMENT', 'PROCUREMENT', 'torif.adi@binapertiwi.co.id'),
(202, 'TOTO BASKORO ADI WINARNO', 30100034, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP I', 'toto.winarno@binapertiwi.co.id'),
(203, 'TSAMARA YUMNA NABILA', 30122018, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'tsamara.nabila@binapertiwi.co.id'),
(204, 'ULAYYA HANAN VIANDINI', 30122013, 'CORPORATE FUNCTION', 'CPMD, CORP. COMM. & BPT', 'ulayya.viandini@binapertiwi.co.id'),
(206, 'WAFDA AFIFATUS SYABIBAH SUUD', 30113511, 'FINANCE, ACCOUNTING & PROCUREMENT', 'ACCOUNTING & TAX', 'wafda.syabibah@binapertiwi.co.id'),
(207, 'WAHYU PRIHANTORO', 30112028, 'SALES & BRANCH OPERATION', 'COAL MINING', 'wahyu.prihantoro@binapertiwi.co.id'),
(208, 'WAHYU SAPTO EKO WITONO', 30100068, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'wahyu.sapto@binapertiwi.co.id'),
(209, 'WAHYU SAPTO NUGROHO', 30122014, 'PRODUCT SUPPORT & ENGINEERING', 'ENGINEERING', 'wahyu.nugroho@binapertiwi.co.id'),
(211, 'WILLY PASKA PARDEDE', 30111036, 'FINANCE, ACCOUNTING & PROCUREMENT', 'ACCOUNTING & TAX', 'willy.pardede@binapertiwi.co.id'),
(212, 'YARJUNA FIJANNATU', 30115004, 'PEOPLE & INFRASTRUCTURE', 'IR, ESG & GENERAL SERVICES', 'yarjuna.fijannatu@binapertiwi.co.id'),
(213, 'YOGA RADITYA HERNOWO', 30111531, 'MARKETING & MATERIAL MANAGEMENT', 'MATERIAL MANAGEMENT & DISTRIBUTION', 'yoga.raditya@binapertiwi.co.id'),
(214, 'YOKA MASURA', 30112522, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP I', 'yoka.masura@binapertiwi.co.id'),
(216, 'YOSIE HARIYANSYAH', 30122030, 'CORPORATE FUNCTION', 'CORPORATE LEGAL', 'yosie.hariyansyah@binapertiwi.co.id'),
(217, 'YUDHA ADITYA', 30111001, 'FINANCE, ACCOUNTING & PROCUREMENT', 'PROCUREMENT', 'yudha.aditya@binapertiwi.co.id'),
(218, 'YUDI NOBELIA', 30112077, 'PRODUCT SUPPORT & ENGINEERING', 'SERVICE BUSINESS', 'yudi.nobelia@binapertiwi.co.id'),
(219, 'YUNI SURYADI', 30122035, 'PEOPLE & INFRASTRUCTURE', 'INFORMATION TECHNOLOGY', 'yuni.suryadi@binapertiwi.co.id'),
(220, 'YUNIS ROMADHONA', 30108035, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'yunis.romadhona@binapertiwi.co.id'),
(221, 'YUNITA ANDALUSIA KUSNADI', 30110002, 'SALES & BRANCH OPERATION', 'SALES PEOPLE, DIGITALIZATION & OPS EXCELLENCE', 'yunita.andalusia@binapertiwi.co.id'),
(222, 'YUSUF SETIAWAN', 30123007, 'MARKETING & MATERIAL MANAGEMENT', 'LOGISTIC & INVENTORY ', 'yusuf.setiawan@binapertiwi.co.id'),
(223, 'ZARA AMANDA PUTRI', 30113518, 'FINANCE, ACCOUNTING & PROCUREMENT', 'INTERNAL CONTROL, SOP, RISK MANAGEMENT & OPS EXCELLENCE', 'zara.amanda@binapertiwi.co.id'),
(224, 'ZIBRIL DEOFIETERZ SARAGIH', 30112013, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'zibril.saragih@binapertiwi.co.id'),
(225, 'ZUL FAHMI', 30109003, 'PEOPLE & INFRASTRUCTURE', 'IR, ESG & GENERAL SERVICES', 'zul.fahmi@binapertiwi.co.id'),
(226, 'MARIYAH HAIDAR CAHYA ANNISA', 30123019, 'MARKETING & MATERIAL MANAGEMENT', 'MARKETING GROUP I', 'mariyah.annisa@binapertiwi.co.id'),
(227, 'MOHAMAD HADI NUR', 30122048, 'PEOPLE & INFRASTRUCTURE', 'INFORMATION TECHNOLOGY', 'mohamad.hadi@binapertiwi.co.id'),
(228, 'MOHAMMAD YOGA BASKORO', 30105148, 'PRODUCT SUPPORT & ENGINEERING', 'GM', 'yoga.baskoro@binapertiwi.co.id'),
(229, 'MUH IRFAN SYAUKI', 30115122, 'PRODUCT SUPPORT & ENGINEERING', 'TECHNICAL & SERVICE SUPPORT', 'irfan.syauki@binapertiwi.co.id'),
(230, 'TEGUH IMAN WIBOWO', 30103002, 'PEOPLE & INFRASTRUCTURE', 'IR, ESG & GENERAL SERVICES', 'teguh.wibowo@binapertiwi.co.id'),
(231, 'MUHAMMAD FADHIL IHSAN', 3012326, 'CORPORATE FUNCTION', 'CPMD, CORP. COMM. & BPT', 'muhammad.ihsan@binapertiwi.co.id'),
(235, 'MUFAIJAH', 90117099, 'PEOPLE & INFRASTRUCTURE', 'IR, ESG & GENERAL SERVICES', 'esrga.ho@binapertiwi.co.id'),
(236, 'MAYA ROSITA', 90121028, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'adm.hc@binapertiwi.co.id'),
(237, 'JULISA AMALIA', 90123066, 'PEOPLE & INFRASTRUCTURE', 'HUMAN CAPITAL', 'hcd.support@binapertiwi.co.id'),
(238, 'ALIVA INJI', 90120163, 'SALES & BRANCH OPERATION', '.', 'hoobpcc@unitedtractors.com'),
(239, 'NABILAH LAELY MAULANI SHOLEH', 90116045, 'PRODUCT SUPPORT & ENGINEERING', '.', 'nabilah.maulani@binapertiwi.co.id'),
(240, 'MUHAMMAD FIKRI NUR IMAN', 90122131, 'PRODUCT SUPPORT & ENGINEERING', '.', 'ppc.ho@binapertiwi.co.id'),
(241, 'DEWI RATNA SARI', 90117098, 'MARKETING & MATERIAL MANAGEMENT', '.', 'adm.heo@binapertiwi.co.id'),
(242, 'SHIFA FAUZIAH', 90117121, 'MARKETING & MATERIAL MANAGEMENT', '.', 'adm.msd@binapertiwi.co.id'),
(243, 'AZZAH HAAFIZOH ZHOFIROH', 90119341, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'azzah.zhofiroh@binapertiwi.co.id'),
(244, 'DICKA MELINA WIJAYA', 90117112, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'adm.ar@binapertiwi.co.id'),
(245, 'GAMA SUWITO', 90119264, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'gama.suwito@binapertiwi.co.id'),
(246, 'MANSYUR', 90118191, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'admsales.ho@binapertiwi.co.id'),
(247, 'MISLINA NANDARI', 90117111, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'adm.tax@binapertiwi.co.id'),
(248, 'SEPTI DWI M', 90117129, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'septi.mauliddia@binapertiwi.co.id'),
(249, 'TEGUH NOOR RACHMAN', 90117120, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'adm.acc@binapertiwi.co.id'),
(250, 'NADA LUTHFIYAH', 90121108, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'nada.luthfiyah@binapertiwi.co.id'),
(251, 'DWI SIWI', 90121151, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'adm.treasury@binapertiwi.co.id'),
(252, 'MUHAMMAD FADHIL AR\'RAZI', 90122065, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'adm.acc2@binapertiwi.co.id'),
(253, 'BAMBANG YUSWANTORO AJIE', 90122155, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'adm.import@binapertiwi.co.id'),
(254, 'FLORENTINA KUMALASARI WIDODO', 90122162, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'procurement.officer@binapertiwi.co.id'),
(255, 'MUHAMMAD FADHIL AR\'RAZI', 90122065, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'adm.acc2@binapertiwi.co.id'),
(256, 'BAMBANG YUSWANTORO AJIE', 90122155, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'adm.import@binapertiwi.co.id'),
(257, 'FLORENTINA KUMALASARI WIDODO', 90122162, 'FINANCE, ACCOUNTING & PROCUREMENT', '.', 'procurement.officer@binapertiwi.co.id'),
(258, 'DIMAS TEDI SYAHPUTRA', 90123483, 'PEOPLE & INFRASTRUCTURE', 'IT', 'helpdesk.apps@binapertiwi.co.id'),
(259, 'MUHAMAD ALFIAN ANWAR', 90121105, 'PEOPLE & INFRASTRUCTURE', 'CULTURE & KNOWLEDGE MANAGEMENT', 'great.culture@binapertiwi.co.id'),
(260, 'NINA NURIKA', 30116044, 'BRANCH OPERATIONS', 'ADM', 'adh.jkt@binapertiwi.co.id'),
(261, 'YULIANI WAHYUNINGSIH', 30123025, 'FINANCE, ACCOUNTING & PROCUREMENT', 'FINANCE', 'yuliani.wahyuningsih@binapertiwi.co.id'),
(262, 'MUHAMMAD RIAN', 30124006, 'PEOPLE & INFRASTRUCTURE', 'HC', 'muhammad.rian@binapertiwi.co.id'),
(263, 'DEI GRATIA YULHARNIDA', 30124014, 'PEOPLE & INFRASTRUCTURE', 'HC', 'dei.yulharnida@binapertiwi.co.id'),
(264, 'testing user', 90123489, 'PEOPLE & INFRASTRUCTURE', 'IT', 'testing@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_license`
--

CREATE TABLE `tb_license` (
  `id_license` int NOT NULL,
  `nama_license` varchar(200) NOT NULL,
  `tgl_expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_license`
--

INSERT INTO `tb_license` (`id_license`, `nama_license`, `tgl_expired`) VALUES
(2, 'cobaLicense2', '2024-07-03'),
(71, 'testing import 9', '2024-07-05'),
(80, 'License Testing', '2024-07-01'),
(81, 'cobaLicense4', '2024-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id_peminjaman` int NOT NULL,
  `id_karyawan` int NOT NULL,
  `id_barang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nrp` int NOT NULL,
  `divisi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_barang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `waktu_peminjaman` datetime NOT NULL,
  `waktu_pengembalian` datetime NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`id_peminjaman`, `id_karyawan`, `id_barang`, `nama`, `nrp`, `divisi`, `email`, `jenis_barang`, `waktu_peminjaman`, `waktu_pengembalian`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'ID001', 'dimas', 1234512, 'PIS', 'dimassted@gmail.com', 'Laptop Dell', '2023-07-27 15:41:00', '2023-07-29 15:41:00', 0, '2023-07-27 08:41:29', '2023-07-27 08:59:42'),
(2, 4, 'ID001', 'dimas 2', 1234544, 'PIS', 'dimas123@gmail.com', 'Laptop Dell', '2023-07-27 16:00:00', '2023-07-29 16:00:00', 3, '2023-07-27 09:00:39', '2023-07-27 09:03:47'),
(3, 1, 'ID001', 'dimas', 1234512, 'PIS', 'dimassted@gmail.com', 'Laptop Dell', '2023-08-16 09:57:00', '2023-08-23 09:57:00', 3, '2023-08-16 02:58:00', '2023-08-16 02:58:42'),
(4, 1, 'ID001', 'dimas', 1234512, 'PIS', 'dimassted@gmail.com', 'Laptop Dell', '2023-08-16 10:13:00', '2023-08-17 10:13:00', 0, '2023-08-16 03:13:59', '2023-08-16 03:20:08'),
(5, 6, 'ID002', 'yusuf', 123123, 'PIS', 'yusuf.isnaini@binapertiwi.co.id', 'Laptop Dell', '2023-08-16 10:15:00', '2023-08-17 10:15:00', 3, '2023-08-16 03:15:47', '2023-08-16 03:26:58'),
(6, 7, 'ID001', 'Anne', 43214, 'PIS', 'anneaudistyaf@gmail.com', 'Laptop Dell', '2023-08-16 10:19:00', '2023-08-17 10:19:00', 0, '2023-08-16 03:19:49', '2023-08-16 03:29:57'),
(7, 6, 'ID001', 'yusuf', 123123, 'PIS', 'yusuf.isnaini@binapertiwi.co.id', 'Laptop Dell', '2023-08-16 10:27:00', '2023-08-17 10:27:00', 3, '2023-08-16 03:27:14', '2023-11-10 07:40:30'),
(8, 7, 'ID002', 'Anne', 43214, 'PIS', 'anneaudistyaf@gmail.com', 'Laptop Dell', '2023-08-16 10:30:00', '2023-08-17 10:30:00', 0, '2023-08-16 03:30:12', '2023-08-16 03:32:01'),
(17, 1, 'ID002', 'dimas123', 1234512, 'PIS', 'dimassted@gmail.com', 'Laptop Dell', '2023-08-16 11:49:00', '2023-08-18 11:49:00', 3, '2023-08-16 04:49:25', '2023-11-10 07:40:28'),
(18, 7, 'COBA123', 'Anne', 43214, 'PIS', 'anneaudistyaf@gmail.com', 'COBAAA1', '2023-08-18 13:56:00', '2023-08-19 13:57:00', 0, '2023-08-18 07:20:45', '2023-08-18 07:43:56'),
(19, 180, '30003660', 'RIZA ADITHYA EFFENDI', 30110004, 'PEOPLE & INFRASTRUCTURE', 'riza.adithya@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2023-11-27 01:00:00', '2023-11-27 04:00:00', 0, '2023-11-27 02:54:42', '2023-11-27 03:17:20'),
(20, 258, '30003660', 'DIMAS TEDI SYAHPUTRA', 90123483, 'PEOPLE & INFRASTRUCTURE', 'helpdesk.apps@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2023-11-27 10:03:00', '2023-11-27 11:04:00', 0, '2023-11-27 03:04:00', '2023-11-27 03:17:18'),
(21, 258, 'SP01', 'DIMAS TEDI SYAHPUTRA', 90123483, 'PEOPLE & INFRASTRUCTURE', 'helpdesk.apps@binapertiwi.co.id', 'Speaker + Mic Plantronics Calisto 3200', '2023-11-27 10:18:00', '2023-11-27 12:18:00', 0, '2023-11-27 03:18:32', '2023-11-27 03:43:07'),
(22, 258, 'SW01', 'DIMAS TEDI SYAHPUTRA', 90123483, 'PEOPLE & INFRASTRUCTURE', 'helpdesk.apps@binapertiwi.co.id', 'Switch TP Link', '2023-11-27 10:20:00', '2023-11-27 12:20:00', 0, '2023-11-27 03:20:40', '2023-11-27 03:43:10'),
(23, 258, 'AD02', 'DIMAS TEDI SYAHPUTRA', 90123483, 'PEOPLE & INFRASTRUCTURE', 'helpdesk.apps@binapertiwi.co.id', 'Adaptor Dell Type C', '2023-11-27 10:22:00', '2023-11-27 13:22:00', 0, '2023-11-27 03:22:46', '2023-11-27 03:43:12'),
(24, 180, 'AD01', 'RIZA ADITHYA EFFENDI', 30110004, 'PEOPLE & INFRASTRUCTURE', 'riza.adithya@binapertiwi.co.id', 'Adaptor Dell Bulat', '2023-11-27 10:23:00', '2023-11-29 13:23:00', 0, '2023-11-27 03:23:14', '2023-11-27 03:43:18'),
(25, 258, '30001573', 'DIMAS TEDI SYAHPUTRA', 90123483, 'PEOPLE & INFRASTRUCTURE', 'helpdesk.apps@binapertiwi.co.id', 'Notebook Lenovo Ideapad C340', '2023-12-12 10:07:00', '2023-12-12 14:00:00', 0, '2023-12-12 03:18:39', '2023-12-12 03:34:34'),
(26, 188, 'PO01', 'SATRIO EKO NUGROHO', 30123001, 'PEOPLE & INFRASTRUCTURE', 'satrio.nugroho@binapertiwi.co.id', 'Pointer Logitech R500', '2023-12-13 08:23:00', '2023-12-13 16:30:00', 3, '2023-12-13 01:24:02', '2023-12-14 00:57:20'),
(27, 39, 'AD01', 'ADITYA PRATAMA', 30117516, 'CORPORATE FUNCTION', 'aditya.pratama@binapertiwi.co.id', 'Adaptor Dell Bulat', '2023-12-18 10:02:00', '2023-12-18 16:30:00', 3, '2023-12-18 03:02:57', '2023-12-19 01:01:50'),
(28, 203, 'PO01', 'TSAMARA YUMNA NABILA', 30122018, 'PEOPLE & INFRASTRUCTURE', 'tsamara.nabila@binapertiwi.co.id', 'Pointer Logitech R500', '2023-12-18 14:10:00', '2023-12-19 16:30:00', 3, '2023-12-18 07:11:24', '2023-12-19 09:22:29'),
(29, 166, '30003431', 'OKA DANES WARA FIRMANSYAH', 30115119, 'PEOPLE & INFRASTRUCTURE', 'oka.danes@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2023-12-21 08:00:00', '2023-12-21 11:18:00', 3, '2023-12-21 04:18:33', '2023-12-27 03:20:12'),
(30, 203, 'PO01', 'TSAMARA YUMNA NABILA', 30122018, 'PEOPLE & INFRASTRUCTURE', 'tsamara.nabila@binapertiwi.co.id', 'Pointer Logitech R500', '2024-01-04 08:46:00', '2024-01-04 16:30:00', 3, '2024-01-04 01:47:18', '2024-01-04 03:55:02'),
(31, 203, 'PO02', 'TSAMARA YUMNA NABILA', 30122018, 'PEOPLE & INFRASTRUCTURE', 'tsamara.nabila@binapertiwi.co.id', 'Pointer Logitech R500', '2024-01-04 08:47:00', '2024-01-04 16:30:00', 3, '2024-01-04 01:48:29', '2024-01-04 03:55:13'),
(32, 203, 'PO01', 'TSAMARA YUMNA NABILA', 30122018, 'PEOPLE & INFRASTRUCTURE', 'tsamara.nabila@binapertiwi.co.id', 'Pointer Logitech R500', '2024-01-08 13:48:00', '2024-01-08 17:48:00', 3, '2024-01-08 06:48:29', '2024-01-09 07:52:13'),
(33, 243, 'CO01', 'AZZAH HAAFIZOH ZHOFIROH', 90119341, 'FINANCE, ACCOUNTING & PROCUREMENT', 'azzah.zhofiroh@binapertiwi.co.id', 'Converter VGA to HDMI', '2024-01-08 10:00:00', '2024-01-09 16:30:00', 3, '2024-01-08 07:13:17', '2024-01-12 07:05:43'),
(34, 58, 'PO02', 'APRANA PUTRA', 30121005, 'PEOPLE & INFRASTRUCTURE', 'aprana.putra@binapertiwi.co.id', 'Pointer Logitech R500', '2024-01-08 17:16:00', '2024-01-08 18:16:00', 3, '2024-01-08 10:16:24', '2024-01-10 01:33:58'),
(35, 160, 'PO01', 'NADHIFA DIAN FIRDAUSIA', 30122053, 'PEOPLE & INFRASTRUCTURE', 'nadhifa.firdausia@binapertiwi.co.id', 'Pointer Logitech R500', '2024-01-09 14:52:00', '2024-01-09 16:30:00', 3, '2024-01-09 07:53:03', '2024-01-10 01:23:28'),
(36, 160, 'CO02', 'NADHIFA DIAN FIRDAUSIA', 30122053, 'PEOPLE & INFRASTRUCTURE', 'nadhifa.firdausia@binapertiwi.co.id', 'Converter Type C to HDMI', '2024-01-09 14:53:00', '2024-01-09 16:30:00', 3, '2024-01-09 07:53:44', '2024-01-12 07:05:48'),
(37, 203, 'PO01', 'TSAMARA YUMNA NABILA', 30122018, 'PEOPLE & INFRASTRUCTURE', 'tsamara.nabila@binapertiwi.co.id', 'Pointer Logitech R500', '2024-01-10 08:54:00', '2024-01-10 16:30:00', 3, '2024-01-10 01:55:19', '2024-01-12 07:06:00'),
(38, 203, 'PO02', 'TSAMARA YUMNA NABILA', 30122018, 'PEOPLE & INFRASTRUCTURE', 'tsamara.nabila@binapertiwi.co.id', 'Pointer Logitech R500', '2024-01-10 08:57:00', '2024-01-10 16:30:00', 3, '2024-01-10 01:57:19', '2024-02-06 02:24:19'),
(39, 243, 'AD02', 'AZZAH HAAFIZOH ZHOFIROH', 90119341, 'FINANCE, ACCOUNTING & PROCUREMENT', 'azzah.zhofiroh@binapertiwi.co.id', 'Adaptor Dell Type C', '2024-01-10 09:34:00', '2024-01-11 09:34:00', 3, '2024-01-10 02:34:45', '2024-01-12 07:05:55'),
(40, 188, '30003431', 'SATRIO EKO NUGROHO', 30123001, 'PEOPLE & INFRASTRUCTURE', 'satrio.nugroho@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2024-01-12 14:06:00', '2024-01-12 17:00:00', 3, '2024-01-12 07:06:34', '2024-01-16 04:03:42'),
(41, 143, 'AD01', 'MAYA MARSINTA KURNIATY PUTRI', 30113521, 'PEOPLE & INFRASTRUCTURE', 'maya.marsinta@binapertiwi.co.id', 'Adaptor Dell Bulat', '2024-01-16 10:59:00', '2024-01-23 10:59:00', 3, '2024-01-16 03:59:25', '2024-01-19 02:02:08'),
(42, 141, 'HD01', 'MARGARETTHA ORYSA SATIVA WIDURI', 30111005, 'MARKETING & MATERIAL MANAGEMENT', 'margarettha.widuri@binapertiwi.co.id', 'Harddisk External', '2024-01-17 16:20:00', '2024-01-18 16:20:00', 3, '2024-01-17 09:20:22', '2024-01-19 02:02:01'),
(43, 188, '30003431', 'SATRIO EKO NUGROHO', 30123001, 'PEOPLE & INFRASTRUCTURE', 'satrio.nugroho@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2024-01-19 15:35:00', '2024-01-19 18:00:00', 3, '2024-01-19 08:36:07', '2024-01-22 01:54:49'),
(44, 188, 'PO01', 'SATRIO EKO NUGROHO', 30123001, 'PEOPLE & INFRASTRUCTURE', 'satrio.nugroho@binapertiwi.co.id', 'Pointer Logitech R500', '2024-01-19 15:36:00', '2024-01-19 18:00:00', 3, '2024-01-19 08:36:58', '2024-01-22 01:53:28'),
(45, 83, '30003431', 'DEASSERA SEPUTI INDHAMA', 30115101, 'PEOPLE & INFRASTRUCTURE', 'deassera.indhama@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2024-01-22 08:55:00', '2024-01-22 16:30:00', 3, '2024-01-22 01:56:24', '2024-01-22 02:04:47'),
(46, 83, 'WL01', 'DEASSERA SEPUTI INDHAMA', 30115101, 'PEOPLE & INFRASTRUCTURE', 'deassera.indhama@binapertiwi.co.id', 'Webcam Logitech C922 Pro + Tripod Kecil', '2024-01-22 08:56:00', '2024-01-22 16:00:00', 3, '2024-01-22 01:57:12', '2024-02-01 04:22:08'),
(47, 166, '30003431', 'OKA DANES WARA FIRMANSYAH', 30115119, 'PEOPLE & INFRASTRUCTURE', 'oka.danes@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2024-01-31 14:03:00', '2024-01-31 16:30:00', 3, '2024-01-31 07:04:01', '2024-02-01 04:22:23'),
(48, 188, 'PO01', 'SATRIO EKO NUGROHO', 30123001, 'PEOPLE & INFRASTRUCTURE', 'satrio.nugroho@binapertiwi.co.id', 'Pointer Logitech R500', '2024-02-01 11:21:00', '2024-02-01 16:30:00', 3, '2024-02-01 04:21:49', '2024-02-06 02:23:16'),
(49, 57, 'PO01', 'ANNE AUDISTYA FERNANDA', 30123011, 'PEOPLE & INFRASTRUCTURE', 'anne.fernanda@binapertiwi.co.id', 'Pointer Logitech R500', '2024-02-06 09:24:00', '2024-02-06 16:30:00', 3, '2024-02-06 02:24:39', '2024-02-06 04:49:14'),
(50, 237, 'PO02', 'JULISA AMALIA', 90123066, 'PEOPLE & INFRASTRUCTURE', 'hcd.support@binapertiwi.co.id', 'Pointer Logitech R500', '2024-02-06 09:25:00', '2024-02-06 16:30:00', 1, '2024-02-06 02:25:57', '2024-02-06 02:26:15'),
(51, 260, '30003431', 'NINA NURIKA', 30116044, 'BRANCH OPERATIONS', 'adh.jkt@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2024-02-07 09:39:00', '2024-02-08 16:30:00', 3, '2024-02-07 02:39:44', '2024-02-09 06:44:10'),
(52, 58, '30003659', 'APRANA PUTRA', 30121005, 'PEOPLE & INFRASTRUCTURE', 'aprana.putra@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2024-02-07 09:40:00', '2024-02-07 16:30:00', 3, '2024-02-07 02:40:44', '2024-02-09 00:57:29'),
(53, 261, 'AD02', 'YULIANI WAHYUNINGSIH', 30123025, 'FINANCE, ACCOUNTING & PROCUREMENT', 'yuliani.wahyuningsih@binapertiwi.co.id', 'Adaptor Dell Type C', '2024-02-09 07:55:00', '2024-02-09 16:30:00', 3, '2024-02-09 00:55:56', '2024-02-10 03:10:02'),
(54, 211, 'AD02', 'WILLY PASKA PARDEDE', 30111036, 'FINANCE, ACCOUNTING & PROCUREMENT', 'willy.pardede@binapertiwi.co.id', 'Adaptor Dell Type C', '2024-02-19 08:25:00', '2024-02-19 16:30:00', 3, '2024-02-19 01:25:48', '2024-02-19 09:48:57'),
(55, 262, 'PO01', 'MUHAMMAD RIAN', 30124006, 'PEOPLE & INFRASTRUCTURE', 'muhammad.rian@binapertiwi.co.id', 'Pointer Logitech R500', '2024-02-21 14:00:00', '2024-02-21 16:30:00', 3, '2024-02-21 03:17:20', '2024-02-22 03:57:32'),
(56, 58, '30003431', 'APRANA PUTRA', 30121005, 'PEOPLE & INFRASTRUCTURE', 'aprana.putra@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2024-02-22 10:58:00', '2024-02-22 16:30:00', 3, '2024-02-22 03:58:51', '2024-02-22 07:24:19'),
(57, 160, 'CO01', 'NADHIFA DIAN FIRDAUSIA', 30122053, 'PEOPLE & INFRASTRUCTURE', 'nadhifa.firdausia@binapertiwi.co.id', 'Converter VGA to HDMI', '2024-02-23 08:03:00', '2024-02-23 17:00:00', 3, '2024-02-23 01:03:46', '2024-02-23 02:59:06'),
(58, 58, '30003431', 'APRANA PUTRA', 30121005, 'PEOPLE & INFRASTRUCTURE', 'aprana.putra@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2024-02-23 09:59:00', '2024-02-23 17:00:00', 3, '2024-02-23 02:59:55', '2024-02-28 06:35:07'),
(59, 263, '30003431', 'DEI GRATIA YULHARNIDA', 30124014, 'PEOPLE & INFRASTRUCTURE', 'dei.yulharnida@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2024-02-28 13:36:00', '2024-02-28 16:30:00', 3, '2024-02-28 06:36:58', '2024-03-12 03:44:25'),
(60, 263, 'PO01', 'DEI GRATIA YULHARNIDA', 30124014, 'PEOPLE & INFRASTRUCTURE', 'dei.yulharnida@binapertiwi.co.id', 'Pointer Logitech R500', '2024-03-12 10:41:00', '2024-03-12 16:30:00', 3, '2024-03-12 03:41:47', '2024-03-12 06:52:53'),
(61, 124, 'KY01', 'IRWANTO', 30115066, 'CORPORATE FUNCTION', 'irwanto@binapertiwi.co.id', 'Keyboard Logitech', '2024-03-12 10:43:00', '2024-03-12 16:30:00', 1, '2024-03-12 03:44:09', '2024-03-12 03:44:18'),
(62, 131, '30003431', 'KEVIN OKTAVIANDRA', 30123002, 'CORPORATE FUNCTION', 'kevin.oktaviandra@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2024-03-20 10:22:00', '2024-03-20 16:00:00', 3, '2024-03-20 03:22:36', '2024-03-22 01:20:16'),
(63, 243, 'AD02', 'AZZAH HAAFIZOH ZHOFIROH', 90119341, 'FINANCE, ACCOUNTING & PROCUREMENT', 'azzah.zhofiroh@binapertiwi.co.id', 'Adaptor Dell Type C', '2024-03-21 07:58:00', '2024-03-21 16:00:00', 1, '2024-03-21 00:58:33', '2024-03-21 00:58:58'),
(64, 243, 'AD02', 'AZZAH HAAFIZOH ZHOFIROH', 90119341, 'FINANCE, ACCOUNTING & PROCUREMENT', 'azzah.zhofiroh@binapertiwi.co.id', 'Adaptor Dell Type C', '2024-03-21 07:58:00', '2024-03-21 16:00:00', 0, '2024-03-21 00:58:35', '2024-03-21 00:59:04'),
(65, 193, 'CO01', 'SUPARNO', 30100098, 'PRODUCT SUPPORT & ENGINEERING', 'suparno@binapertiwi.co.id', 'Converter VGA to HDMI', '2024-03-25 10:16:00', '2024-03-25 16:00:00', 1, '2024-03-25 03:16:32', '2024-03-25 06:58:19'),
(66, 258, 'CO02', 'DIMAS TEDI SYAHPUTRA', 90123483, 'PEOPLE & INFRASTRUCTURE', 'helpdesk.apps@binapertiwi.co.id', 'Converter Type C to HDMI', '2024-06-26 10:22:00', '2024-06-26 12:22:00', 3, '2024-06-26 03:22:36', '2024-06-26 03:27:24'),
(67, 258, '30003659', 'DIMAS TEDI SYAHPUTRA', 90123483, 'PEOPLE & INFRASTRUCTURE', 'helpdesk.apps@binapertiwi.co.id', 'Kandao Meeting Pro (360)', '2024-07-01 10:09:00', '2024-07-01 12:10:00', 0, '2024-07-01 03:10:06', '2024-07-02 00:59:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tb_license`
--
ALTER TABLE `tb_license`
  ADD PRIMARY KEY (`id_license`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `tb_license`
--
ALTER TABLE `tb_license`
  MODIFY `id_license` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  MODIFY `id_peminjaman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
