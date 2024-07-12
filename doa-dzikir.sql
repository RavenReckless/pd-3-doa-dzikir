-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2024 pada 01.27
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doa-dzikir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `communities`
--

CREATE TABLE `communities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `communities`
--

INSERT INTO `communities` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Dzikir Pagi', 'Selamat datang di komunitas dzikir pagi. Dalam komunitas ini Anda dapat melakukan diskusi dengan sesama pengguna lain.', '2024-06-29 07:15:51', '2024-06-29 08:06:01'),
(3, 'Dzikir Petang', 'Selamat datang di komunitas dzikir petang. Dalam komunitas ini Anda dapat melakukan diskusi dengan sesama pengguna lain.', '2024-06-29 08:06:19', '2024-06-29 08:06:19'),
(5, 'Doa Harian', 'Selamat datang di komunitas doa harian. Dalam komunitas ini Anda dapat melakukan diskusi dengan sesama pengguna lain.', '2024-07-02 17:05:28', '2024-07-02 17:05:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dzikir_records`
--

CREATE TABLE `dzikir_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materi_dzikir_id` bigint(20) UNSIGNED NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dzikir_records`
--

INSERT INTO `dzikir_records` (`id`, `materi_dzikir_id`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'audio/vRSBYdVUvPtxFfxcXGVXdNK4CcgRiWL9FSwKTLjb.mp3', '2024-06-26 07:02:40', '2024-06-26 07:02:40'),
(2, 3, 'audio/xoDxsQgbL5ae0YRIYGzZBk68ghe8VAyNuiyVXmep.mp3', '2024-06-29 03:27:20', '2024-06-29 03:27:20'),
(4, 4, 'audio/kWH1q9NoxxZ2Jg0Hrv7OyhWNnpEa0x6wA5jPPUhR.mp3', '2024-07-02 17:52:36', '2024-07-02 17:52:36'),
(5, 7, 'audio/1eqHYfla0czGlkWJ4TV6uVzPbXqyqSC0tqSSUvDS.mp3', '2024-07-02 21:09:26', '2024-07-02 21:09:26'),
(6, 8, 'audio/R0QaWeqwlW4FuWpcGWJPBxWOFgeHEJg6cldHWtfK.mp3', '2024-07-02 21:13:35', '2024-07-02 21:13:35'),
(7, 9, 'audio/uwtwKHJeHCXQyL3zM2BrAqHrdOtOrfT6ZE4LnRdS.mp3', '2024-07-02 21:23:01', '2024-07-02 21:23:01'),
(8, 10, 'audio/WY195DZN1ImRlrZa1XBjYjFcGtcXKcuiOr0qLize.mp3', '2024-07-02 21:23:13', '2024-07-02 21:23:13'),
(9, 11, 'audio/NMfeFtYHVjhgYwnfIQ4Y4ZX6lbLzlDXSlCjAQNB2.mp3', '2024-07-02 21:25:43', '2024-07-02 21:25:43'),
(10, 12, 'audio/tpJI7xSVtPmXOIMfAo3JhQldYezLWxbUKQcBdw81.mp3', '2024-07-02 21:27:41', '2024-07-02 21:27:41'),
(11, 13, 'audio/tn0HT8JHt7cHnNySz18Lu5JyGEHVcdztks5f4N62.mp3', '2024-07-02 21:32:10', '2024-07-02 21:32:10'),
(12, 14, 'audio/XSfNFGOZUFZ8Dr2lGHOplmDZJzlzxm8NxR6aPkzu.mp3', '2024-07-02 21:34:29', '2024-07-02 21:34:29'),
(13, 15, 'audio/OgWGVcVlgBaEDRidZLOPSWJMhc4xVdWtMPHabCFc.mp3', '2024-07-02 21:37:50', '2024-07-02 21:37:50'),
(14, 16, 'audio/127zY1OeyupmPMUZ9kZ26K5xFCxq0YQh4qCgrDOX.mp3', '2024-07-02 21:41:54', '2024-07-02 21:41:54'),
(15, 17, 'audio/nVuG8TjqVgEEP6VQVD19KNceM8I7CJ6bGH3h9rGN.mp3', '2024-07-02 21:44:46', '2024-07-02 21:44:46'),
(16, 18, 'audio/An2aa6IkQngbP34grhQ9vjWJpUzc5a86zQRJO8dx.mp3', '2024-07-02 22:13:56', '2024-07-02 22:13:56'),
(17, 19, 'audio/c8kI1cgfl65XSQtsF5HlkG1mlDmU0nYiuMV16vIr.mp3', '2024-07-02 22:15:16', '2024-07-02 22:15:16'),
(18, 20, 'audio/Z7FvVgumdzn0Q8TmhbcOBkpo0sKDps2p0uiw9Ye9.mp3', '2024-07-02 22:17:11', '2024-07-02 22:17:11'),
(19, 21, 'audio/VtpLs0C6s8H1kHFcBSNV8Mel5FUJqHbHwDA15Ohs.mp3', '2024-07-02 22:18:16', '2024-07-02 22:18:16'),
(20, 22, 'audio/IEPB7epdUPyJchWxQrLltmtSGK9oqYih2EeFSrfU.mp3', '2024-07-03 04:23:17', '2024-07-03 04:23:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `languages`
--

INSERT INTO `languages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bahasa Indonesia', '2024-06-24 21:34:13', '2024-06-24 21:34:13'),
(2, 'Bahasa Inggris', '2024-07-02 05:59:00', '2024-07-02 05:59:00'),
(3, 'Bahasa Arab', '2024-07-02 06:13:05', '2024-07-02 06:13:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manfaat_dzikirs`
--

CREATE TABLE `manfaat_dzikirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `manfaat_dzikirs`
--

INSERT INTO `manfaat_dzikirs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Manfaat Dzikir Pagi dan Petang', 'Dzikir dalam agama Islam bermakna pengingatan atau mengingat Allah Swt. Sehingga banyak keutamaan dzikir pagi dan petang yang bisa didapatkan semua muslim. Dikutip dari Buku Saku Tuntunan Doa dan Dzikir, Rahmadi Wibowo Suwarno, Lc., M.A., M.Hum., (2021, 8), keutamaan yang bisa didapatkan dari dzikir salah satunya adalah diingat oleh Allah Swt, menjadi diri yang sabar, serta mencegah dari kemungkaran. Dzikir adalah praktik spiritual yang penting dalam agama Islam, bentuknya dengan mengucapkan nama-nama Allah, menyebut pujian kepada-Nya, dan memperbanyak bertasbih, tahmid, dan takbir. Tujuan utama dzikir dalam Islam adalah untuk mendekatkan diri kepada Allah, memperkuat iman, membersihkan jiwa dari dosa dan kesalahan, serta menguatkan hubungan spiritual antara hamba dan Sang Pencipta.\r\nDzikir memiliki banyak keutamaan dalam Islam, yang menjadikannya sebagai praktik spiritual yang sangat penting bagi umat muslim. Beberapa keutamaan dzikir yang terpenting antara lain adalah mendekatkan diri kepada Allah SWT, mengangkat derajat, membersihkan hati dan jiwa, penghapus dosa, menarik rahmat Allah SWT, menguatkan iman, mendapatkan perlindungan dari Allah SWT, mengingat Allah SWT dari awal hingga akhir hari, menenangkan hati, membersihkan sifat buruk dan dosa. Melakukan dzikir secara rutin dan ikhlas adalah salah satu cara yang efektif untuk mendekatkan diri kepada Allah, memperkuat iman, dan mencapai kebahagiaan batin.\r\nDzikir pada pagi dan petang adalah praktik spiritual yang membawa banyak manfaat bagi kesehatan dan kesejahteraan hidup manusia. Pada pagi hari, dzikir dapat menjadi pijakan kuat untuk memulai hari dengan penuh semangat dan keberkahan. Melalui dzikir, dapat menyucikan hati dan mempersiapkan diri untuk menghadapi tantangan yang mungkin terjadi di sepanjang aktivitas sehari-hari.', 'gambar_manfaat_dzikir/QKxNiTjp6KilaOHKLePFYVR8ZVVQ7QZL8OtB2cs5.jpg', '2024-06-27 19:33:30', '2024-06-27 19:33:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_dzikirs`
--

CREATE TABLE `materi_dzikirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `materi_dzikirs`
--

INSERT INTO `materi_dzikirs` (`id`, `language_id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dzikir Pagi', 'Dzikir pagi merupakan bagian dari ibadah yang dianjurkan oleh Rasulullah SAW kepada umatnya. Membaca dzikir pagi dapat menjadi cara seorang muslim untuk mendekatkan diri dan mendapatkan perlindungan dari Allah SWT. Mengutip dari buku Koleksi Lengkap Dzikir Pagi Petang karya Ustadz Abdul Wahhab, waktu membaca dzikir pagi dilakukan mulai dari setelah sholat Subuh hingga terbitnya matahari atau sampai matahari meninggi saat waktu Dhuha. Adapun bacaan dzikir pagi sesuai sunnah Rasulullah Saw yang bisa diamalkan berdasarkan buku Dzikir Pagi dan Petang karya Ust. Khalid Basalamah Membaca Ayat Kursi, Membaca Ayat Kursi, Membaca Bacaan Dzikir Pagi, Membaca Sayyidul Istighfar, Membaca Istighfar. Itulah bacaan dzikir pagi sesuai sunnah Rasulullah SAW yang bisa diamalkan selepas sholat Subuh hingga terbitnya matahari atau waktu Dhuha.', 'gambar_materi_dzikir/TScORhzStIfZXVKFY8eMBWOL45JnqwjwMgZ6EuO8.jpg', '2024-06-24 21:45:33', '2024-07-02 17:48:53'),
(3, 1, 'Dzikir Petang', 'Dzikir petang merupakan ibadah yang dianjurkan untuk diamalkan setiap harinya. Agar segala urusanmu dimudahkan oleh Allah SWT, dianjurkan untuk mengamalkan dzikir saat petang tiba. Adapun yang dikategorikan sebagai waktu petang adalah ketika tenggelamnya matahari hingga tengah malam. Membaca dzikir petang juga tergolong sebagai salah satu bentuk ibadah kepada Allah SWT. Dengan membaca dzikir petang, urusanmu akan selalu dipermudah dan terhindar dari bahaya. Adapun urutan pembacaan dzikir petang yang antara lain membaca taawudz; membaca tasbih; membaca ayat kursi; membaca surah pendek al ikhlas, al falaq, dan an naas (3 kali); membaca bacaan dzikir petang; membaca doa penutup dzikir petang. Semua bacaan tersebut bisa Anda akses melalui rekaman yang tersedia dalam website ini.', 'gambar_materi_dzikir/EtPltzM6aF1F06bdN8HxOp0f0TZIno0TvkjpMNHz.webp', '2024-06-29 03:21:07', '2024-06-29 03:31:33'),
(4, 1, 'Doa Hendak Makan', 'Bacaan doa sebelum makan adalah اَللّٰهُمَّ بَارِكْ لَنَا فِيْمَا رَزَقْتَنَا وَقِنَا عَذَابَ النَّارِ atau yang dalam bacaan latinnya adalah \"Allahumma baarik lanaa fiimaa rozaqtanaa wa qinaa \'adzaa bannaar\". Arti dari doa tersebut adalah \"Dengan nama Allah yang Maha Pengasih, Maha Penyayang. Ya Allah, berkahilah rezeki yang Engkau berikan kepada kami, dan karuniakanlah rezeki yang lebih baik dari itu dan peliharalah kami dari siksa api neraka.\" (HR Ibnu Sunni).', 'gambar_materi_dzikir/zcLoqBxboK9mLtNG6Vy4ntvQXVX6RO5c8112W4Sa.jpg', '2024-06-30 04:08:35', '2024-07-02 17:51:42'),
(7, 1, 'Doa Sebelum Tidur', 'Bacaan doa sebelum tidur adalah بِسْمِكَ اللّهُمَّ اَحْيَا وَ بِسْمِكَ اَمُوْتُ atau yang dalam bacaan latinnya adalah “Bismika Allahumma ahyaa wa bismika amuut\". Arti dari doa tersebut adalah “Dengan nama-Mu ya Allah aku hidup, dan dengan nama-Mu aku mati.” (HR. Bukhari dan Muslim).', 'gambar_materi_dzikir/TZfHjqIo7wxlLr3FpqQAYPtIUWqpRp55Aso5oTm4.jpg', '2024-07-02 17:55:34', '2024-07-02 17:56:23'),
(8, 1, 'Doa Bangun Tidur', 'Bacaan doa bangun tidur adalah اَلْحَمْدُ لِلَّهِ الَّذِيْ أَحْيَانَا بَعْدَ مَا أَمَاتَنَا وَإِلَيْهِ النُّشُوْرِ atau yang dalam bacaan latinnya adalah “Alhamdullillahilladzi ahyaanaa bada maa amaatanaa wa ilaihin nushur.” Arti dari doa tersebut adalah “Segala puji bagi-Mu, ya Allah, yang telah menghidupkan kembali diriku setelah kematianku, dan hanya kepada-Nya nantinya kami semua akan dihidupkan kembali.” (HR. Ahmad, Bukhari, dan Muslim).', 'gambar_materi_dzikir/fyRHlS5ELeF0ut5APtXexLdiAwmA08bo0ATTwpsy.jpg', '2024-07-02 18:04:04', '2024-07-02 18:04:04'),
(9, 1, 'Doa Saat Mimpi Buruk', 'Bacaan doa saat mimpi buruk adalah اَللَّهُمَّ إِنّىِ أَعُوْذُ بِكَ مِنْ عَمَلِ الشَّيْطَانِ وَسَيِّئاَتِ اْلأَحْلاَمِ atau yang dalam bacaan latinnya adalah \"Allaahumma innii a\'uudzubika min \'amalisy syaithaani wa sayyiaatil ahlami.\" Arti dari doa tersebut adalah \"Yaa Allah, sesungguhnya aku berlindung kepada-Mu dari perbuatan setan dan\r\ndari mimpi-mimpi yang buruk\".', 'gambar_materi_dzikir/FJaIlXhxahYV9FiltYYZrFh6fHdVKdgjwxNcOAOt.jpg', '2024-07-02 18:07:02', '2024-07-02 18:07:02'),
(10, 1, 'Doa Saat Mimpi Baik', 'Bacaan doa saat mimpi baik adalah اَلْحَمْدُ ِللهِ الَّذِيْ قَطْلَ الْحَاجَتِ atau yang dalam bacaan latinnya adalah \"Alhamdulillahil ladzii qothlal haajaati\". Arti dari doa tersebut adalah \"Segala puji bagi Allah yang telah memberi hajatku\".', 'gambar_materi_dzikir/TLDhvizYjaqi56X1mTbZDOJDNclcWJd2vIrX8cIJ.jpg', '2024-07-02 18:12:55', '2024-07-02 21:21:51'),
(11, 1, 'Doa Sebelum Masuk Kamar Mandi', 'Bacaan doa sebelum masuk kamar mandi adalah اَللّٰهُمَّ اِنِّيْ اَعُوْذُبِكَ مِنَ الْخُبُثِ وَالْخَبَآئِثِ atau yang dalam bacaan latinnya adalah “Alloohumma Innii A’uudzubka Minal Khubutsi Wal Khobaaitsi”. Arti dari doa tersebut adalah “Ya Allah, sesungguhnya aku berlindung kepadamu dari segala kejahatan dan kotoran\".', 'gambar_materi_dzikir/QdwFg4erWswwpYME6c3G6btmvqPys7U7ybf0Jypz.jpg', '2024-07-02 18:15:23', '2024-07-02 18:22:14'),
(12, 1, 'Doa Setelah Keluar Kamar Mandi', 'Bacaan doa setelah keluar kamar mandi adalah الْحَمْدُ ِللهِ الَّذِىْ اَذْهَبَ عَنّى اْلاَذَى وَعَافَانِىْ atau yang dalam bacaan latinnya adalah “Alhamdulillaahil-ladzii Adz-haba ‘Annil-adzaa Wa’aafaanii\". Arti dari doa tersebut adalah “Dengan mengharap ampunanMu, segala puji milik Allah yang telah menghilangkan kotoran dari badanku dan yang telah menyejahterakan”.', 'gambar_materi_dzikir/I1A9TsWjNp9FiifQa91kwsQoOBA70tOYfiBYyrk3.jpg', '2024-07-02 18:20:14', '2024-07-02 18:20:14'),
(13, 1, 'Doa Hendak Berpakaian', 'Bacaan doa hendak berpakaian adalah اَلْحَمْدُ ِللهِ الَّذِىْ كَسَانِىْ هَذَا وَرَزَقَنِيْهِ مِنْ غَيْرِ حَوْلٍ مِنِّىْ وَلاَقُوَّةٍ atau yang dalam bacaan latinnya adalah \"Alhamdu lillaahil ladzii kasaanii haadzaa wa rozaqoniihi min ghoiri hawlim minni wa laa quwwatin\". Arti dari doa tersebut adalah \"Segala puji bagi Allah yang memberi aku pakaian ini dan memberi rizeki dengan tiada upaya dan kekuatan dariku”.', 'gambar_materi_dzikir/ZxRKcaqyFvi4jEpVNPknA4KkUobS6raYfB0HvGTR.jpg', '2024-07-02 18:24:07', '2024-07-02 18:24:07'),
(14, 1, 'Doa Ketika Bercermin', 'Bacaan doa ketika bercermin adalah اَلْحَمْدُ ِللهِ كَمَا حَسَّنْتَ خَلْقِىْ فَحَسِّـنْ خُلُقِىْ atau yang dalam bacaan latinnya adalah “Alhamdulillaahi kamaa hassanta kholqii fahassin khuluqii”. Arti dari doa tersebut adalah “Segala puji bagi Allah, baguskanlah budi pekertiku sebagaimana Engkau telah membaguskan rupa wajahku”.', 'gambar_materi_dzikir/86eErqVSrFjs4zBttwRlcPCBsQcnilhVRLfiF08i.jpg', '2024-07-02 18:27:59', '2024-07-02 18:27:59'),
(15, 1, 'Doa Setelah Makan', 'Bacaan doa setelah makan adalah اَلْحَمْدُ ِللهِ الَّذِيْنَ اَطْعَمَنَا وَسَقَانَا وَجَعَلَنَا مِنَ الْمُسْلِمِيْنَ atau yang dalam bacaan latinnya adalah “Alhamdu lillahhil-ladzi ath-amanaa wa saqaana waja’alanaa minal muslimiin”. Arti dari doa tersebut adalah “Segala puji bagi Allah yang telah memberi kami makan dan minum serta menjadikan kami termasuk golongan orang Muslim.” (HR. Ahmad, Abu Dawud, Tirmidzi)', 'gambar_materi_dzikir/AdTia0UenYZ5rsLwrVn2Se6E0yrwxX03IiB6VkfF.jpg', '2024-07-02 18:46:49', '2024-07-02 18:46:49'),
(16, 1, 'Doa Berpergian', 'Bacaan doa berpergian adalah اَللّٰهُمَّ هَوِّنْ عَلَيْنَا سَفَرَنَا هَذَا وَاطْوِعَنَّابُعْدَهُ اَللّٰهُمَّ اَنْتَ الصَّاحِبُ فِى السَّفَرِوَالْخَلِيْفَةُفِى الْاَهْلِ atau yang dalam bacaan latinnya adalah \"Allahumma hawwin \'alainaa safaranaa hadzaa waatwi \'annaa bu\'dahu. Allahumma antashookhibu fiissafari walkholiifatu fiil ahli\". Arti dari doa tersebut adalah \"Ya Allah, mudahkanlah kami bepergian ini, dan dekatkanlah kejauhannya. Ya Allah yang menemani dalam bepergian, dan Engkau pula yang melindungi keluarga\".', 'gambar_materi_dzikir/FQWxqRKnVeebLjmpBOfTugUX96imzW2qLMMPLld5.jpg', '2024-07-02 18:57:00', '2024-07-02 18:57:00'),
(17, 1, 'Doa Melepas Pakaian', 'Bacaan doa ketika melepas pakaian adalah بِسْمِ اللهِ الَّذِيْ لاَ إِلَهَ إِلَّا هُوَ atau yang dalam bacaan latinnya adalah \"Bismillaahil ladzii laa ilaaha illaa huwa\". Arti dari doa tersebut adalah \"Dengan nama Allah yang tiada Tuhan selain-Nya\".', 'gambar_materi_dzikir/hMg1uxCrhissfrdIfnAGSJO4VeJeo0QJHcOWUZ1f.jpg', '2024-07-02 19:00:40', '2024-07-02 19:00:40'),
(18, 1, 'Doa Masuk Rumah', 'Bacaan doa masuk rumah adalah اَللّٰهُمَّ اِنِّىْ اَسْأَلُكَ خَيْرَالْمَوْلِجِ وَخَيْرَالْمَخْرَجِ بِسْمِ اللهِ وَلَجْنَا وَبِسْمِ اللهِ خَرَجْنَا وَعَلَى اللهِ رَبِّنَا تَوَكَّلْنَا atau yang dalam bacaan latinnya adalah “Allahumma innii as-aluka khoirol mauliji wa khoirol makhroji bismillaahi wa lajnaa wa bismillaahi khorojnaa wa’alallohi robbina tawakkalnaa”. Arti dari doa tersebut adalah “Ya Allah, sesungguhnya aku mohon kepada-Mu baiknya tempat masuk dan baiknya tempat keluar dengan menyebut nama Allah kami masuk, dan dengan menyebut nama Allah kami keluar dan kepada Allah Tuhan kami, kami bertawakkal”.', 'gambar_materi_dzikir/akT3OjKy2oJbSHqTa4pLstgbKY8TJMLfKF1acwXT.jpg', '2024-07-02 19:05:25', '2024-07-02 22:06:53'),
(19, 1, 'Doa Keluar Rumah', 'Bacaan doa ketika keluar rumah adalah بِسْمِ اللهِ تَوَكَّلْتُ عَلَى اللهِ، لَا حَوْلَ وَلَا قُوَّةَ إِلَّا بِاللهِ atau yang dalam bacaan latinnya adalah “Bismillahi, tawakkaltu ’alallah, laa haula wa laa quwwata illaa billaah”. Arti dari doa tersebut adalah “Dengan nama Allah, aku bertawakkal kepada Allah. Tiada daya dan kekuatan kecuali dengan Allah”.', 'gambar_materi_dzikir/niL7Bj3B7JhyGX5rAVSQnx5ZsWdQzOaWnoXeUa1g.jpg', '2024-07-02 19:18:19', '2024-07-02 19:18:19'),
(20, 1, 'Doa Masuk Masjid', 'Bacaan doa ketika masuk masjid adalah اَللّهُمَّ افْتَحْ لِيْ اَبْوَابَ رَحْمَتِكَ atau yang dalam bacaan latinnya adalah “A‌llahummaf-tahlii abwaaba rahmatika”. Arti dari doa tersebut adalah “Ya Allah, bukakanlah untukku pintu-pintu rahmat-Mu”.', 'gambar_materi_dzikir/TKriLw6n7M41eAhYN3KozsiLtCdA7ZLXVY3rKEFD.jpg', '2024-07-02 19:19:57', '2024-07-02 19:19:57'),
(21, 1, 'Doa Keluar Masjid', 'Bacaan doa ketika bercermin adalah اَللهُمَّ اِنِّى اَسْأَلُكَ مِنْ فَضْلِكَ atau yang dalam bacaan latinnya adalah “Allahumma innii as-aluka min fadhlika”. Arti dari doa tersebut adalah “Ya Allah, aku memohon kepadamu, karunia dari-Mu”.', 'gambar_materi_dzikir/sW3vXuoiotNUOg57I9iSqQDHJujTffW4WjSGsIft.jpg', '2024-07-02 19:22:03', '2024-07-02 19:22:03'),
(22, 1, 'Doa Qiyamul Lail', 'Dari Abu Hurairah RA, Rasulullah SAW bersabda, “Allah SWT turun ke langit dunia setiap malam, ketika tersisa sepertiga malam terakhir. Kemudian Allah berfirman, ‘Siapa saja yang berdoa kepada-Ku akan Aku ijabahi doanya, siapa yang meminta-Ku akan Aku beri dia, dan siapa yang minta ampunan kepada-Ku akan Aku ampuni dia.’” (HR. Bukhari dan Muslim). Oleh karena itu, terdapat sebuah doa yang sangat dianjurkan setelah selesai melaksanakan shalat malam ini.\r\n\r\nLafal doanya adalah : Allahumma rabbana lakal hamdu. Anta qayyimus samaawaati wal ardli. Wa man fii hinna. Wa lakal hamdu anta malikus samaawaati wal ardl. Wa man fii hinna. Walakal hamdu anta nuurus samaawaati wal ardl. Wa man fiihinna. Wa lakal hamdu antal haqq. Wa wa\'dukal haqq. Wa liqaaukal haqq. Wa qauluka haqqu. Wa jannatu haqq. Wannaaru haqq. Wa nabiyyuuna haqq. Wa Muhammadun shallallaahu alaihi wa sallama haqq. Was saa’atu haqq. Allahumma laka aslamtu. Wa bika aamantu. Wa ‘alaika tawakkaltu. Wa ilaika anabtu. Wa ilaika khooshamtu. Wa bika khaakamtu faghfir lii maa qaddamtu wa maa akhkhartu wa asrartu wa maa a’lantu wa maa anta a’lamu bihi minnii. Laa ilaaha illa Anta. Wa laa haula. Wa  laa quwwata illaa Billaah.\r\n\r\nArti dari doa tersebut adalah “Ya Allah, Ya Tuhan kami, bagi-Mu pujian. Engkaulah yang menegakkan langit dan bumi, dan bagi-Mu pujian. Engkaulah Tuhan langit, bumi, dan makhluk yang ada padanya, dan bagi-Mu pujian. Engkaulah yang (memberi) cahaya pada langit dan bumi dan makhluk yang ada padanya. Engkau Maha Hak (benar), firman-Mu hak, janji-Mu hak, bertemu dengan-Mu hak, surga hak, neraka hak, kiamat hak.\r\nYa Allah, kepada-Mu aku pasrahkan, dengan-Mu aku beriman, kepada-Mu aku berserah diri, kepada-Mu aku berkeluh-kesah, dengan-Mu aku dihakimi. Maka ampunilah dosa-dosaku yang terdahulu dan yang akan datang, dosa yang aku simpan atau aku perlihatkan, dan dosa yang Engkau lebih tahu ketimbang aku. Tiada tuhan selain Engkau.”', 'gambar_materi_dzikir/HCf8QbVtzyFw2H5A6cbnSoR0IePfo5hvjM1c2vmS.webp', '2024-07-03 04:19:20', '2024-07-03 04:19:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `community_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `community_id`, `message`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 'Halo', '2024-06-30 05:12:26', '2024-06-30 05:12:26'),
(4, 2, 2, 'Halo saya Ammar', '2024-06-30 05:13:21', '2024-06-30 05:13:21'),
(6, 1, 2, 'Halo bang', '2024-07-10 06:16:36', '2024-07-10 06:16:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2024_06_18_130459_create_dzikir_benefits_table', 1),
(21, '2024_06_23_001042_add_image_to_dzikir_benefits_table', 2),
(58, '2014_10_12_000000_create_users_table', 3),
(59, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(60, '2019_08_19_000000_create_failed_jobs_table', 3),
(61, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(62, '2024_06_18_120652_create_permission_tables', 3),
(63, '2024_06_18_123249_create_dzikir_groups_table', 3),
(64, '2024_06_18_123635_create_dzikir_group_user_table', 3),
(65, '2024_06_18_125352_create_dzikir_records_table', 3),
(66, '2024_06_18_125540_create_spiritual_monitoring_table', 3),
(67, '2024_06_18_125621_create_communities_table', 3),
(68, '2024_06_18_125649_create_communities_user_table', 3),
(69, '2024_06_18_125823_create_languages_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `monitorings`
--

CREATE TABLE `monitorings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `dzikir_list` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `monitorings`
--

INSERT INTO `monitorings` (`id`, `user_id`, `dzikir_list`, `created_at`, `updated_at`) VALUES
(3, 1, 'Dzikir Pagi', '2024-07-03 21:53:57', '2024-07-03 21:53:57'),
(4, 2, 'Dzikir Pagi', '2024-07-03 21:59:51', '2024-07-03 21:59:51'),
(5, 1, 'Doa Hendak Makan', '2024-07-03 23:10:42', '2024-07-03 23:10:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create-user', 'web', '2024-06-24 20:55:35', '2024-06-24 20:55:35'),
(2, 'read-user', 'web', '2024-06-24 20:55:35', '2024-06-24 20:55:35'),
(3, 'update-user', 'web', '2024-06-24 20:55:35', '2024-06-24 20:55:35'),
(4, 'delete-user', 'web', '2024-06-24 20:55:35', '2024-06-24 20:55:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-06-24 20:55:35', '2024-06-24 20:55:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `shalawats`
--

CREATE TABLE `shalawats` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `bacaan` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `shalawats`
--

INSERT INTO `shalawats` (`id`, `title`, `bacaan`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Shalawat Fatih', 'Bacaan latin : \r\n\"Allahumma sholli ala sayyidina muhammaddinil fatihi lima ughliqo wal khotimi lima sabaqo, nashiril haqqi bil haqqi wal hadi ila shirotikal mustaqim wa ala alihi haqqo qodrihi wa miq darihil adzim\".\r\n\r\nArtinya :\r\nYa Allah limpahkanlah rahmat dan keselamatan serta berkah kepada nabi Muhammad SAW, sebagai pemuka sesuatu yang terkunci, dan penutup sesuatu (para nabi) yang terdahulu, dialah penolong yang benar dengan membawa kebenaran serta petunjuk menuju jalan-Mu yang lurus. Semoga Allah melimpahkan rahmat-Nya kepada keluarga dan para sahabatnya dengan sebenar-benarnya dengan pangkat dan kedudukan yang agung.', 'gambar_shalawat/JUR70oiTeUfBjlbXbHNoTNhNEVm2E00rxptQd0Hg.jpg', '2024-07-04 14:46:43.479493', '2024-07-04 14:46:43'),
(3, 'Shalawat Nariyah', 'Bacaan Latin : Allâhumma shalli shalâtan kâmilatan wa sallim salâman tâmman `alâ sayyidinâ Muḫammadinil-ladzi tanḫallu bihil-`uqadu wa tanfariju bihil-kurabu wa tuqdlâ bihil-ḫawâiju wa tunâlu bihir-raghâ’ibu wa ḫusnul-khawâtimi wa yustasqal-ghamâmu biwajhihil-karîmi wa `alâ âlihi wa shaḫbihi fî kulli lamḫatin wa nafasin bi`adadi kulli ma`lûmilak(a).\r\n\r\nArtinya: \"Ya Allah, limpahkanlah shalawat yang sempurna dan curahkanlah salam kesejahteraan yang penuh kepada junjungan kami Nabi Muhammad, yang dengan sebab beliau semua kesulitan dapat terpecahkan, semua kesusahan dapat dilenyapkan, semua keperluan dapat terpenuhi, dan semua yang didambakan serta husnul khatimah dapat diraih, dan berkat dirinya yang mulia hujanpun turun, dan semoga terlimpahkan kepada keluarganya serta para sahabatnya, di setiap detik dan hembusan nafas sebanyak bilangan semua yang diketahui oleh Engkau,\".', 'gambar_shalawat/LCgvrz9lfz55LYFkqsuyv5Z3T8zVyNgxOlj3AMLA.webp', '2024-07-04 14:45:49.695296', '2024-07-04 14:45:49'),
(4, 'Shalawat Matsurah', 'Bacaan latin : Allaahumma sholli alaa muhammadin nabiyyil ummiyyi wa alaa aalihi wasallim. Artinya : \"Ya Allah, limpahkanlah sholawat kepada Nabi Muhammad yang tiada dapat membaca dan menulis (Ummiyyi) dan semoga keselamatan tercurah kepada segenap keluarganya\".', 'gambar_shalawat/WXB8yAos1fehiq87lZLjQdqfzLzohyHoHZLc8Lpx.jpg', '2024-07-04 14:59:12.191964', '2024-07-04 14:59:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shalawat_records`
--

CREATE TABLE `shalawat_records` (
  `id` int(11) NOT NULL,
  `shalawat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `shalawat_records`
--

INSERT INTO `shalawat_records` (`id`, `shalawat_id`, `title`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 2, 'Shalawat Fatih', 'audio/72NsASbgyOwRfn60t5oWPvAT6pkzX6NgeClms75L.mp3', '2024-07-04 07:35:52', '2024-07-04 07:35:52'),
(2, 3, 'Shalawat Nariyah', 'audio/KjqDKndYOOpMoGq8gwy0OGYeeSMoPBtI5sZMNslt.mp3', '2024-07-04 07:59:36', '2024-07-04 07:59:36'),
(3, 4, 'Shalawat Matsurah', 'audio/q2U65TngbgSAVoGyujMLnq4TSCf7BL5XWzdXMUYI.mp3', '2024-07-04 07:59:45', '2024-07-04 07:59:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shared_experiences`
--

CREATE TABLE `shared_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `shared_experiences`
--

INSERT INTO `shared_experiences` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 2, 'Doa mau makan', 'Saya selalu berdoa ketika hendak makan dan Alhamdulillah saya bisa mendapatkan nikmat dari makanan yang saya makan dan selalu merasa kenyang apabila didahulukan dengan doa.', '2024-06-24 21:49:55', '2024-06-24 21:49:55'),
(3, 2, 'Dzikir Pagi', 'Selama dzikir saya menjadi tenang.', '2024-06-28 04:50:35', '2024-06-28 04:50:35'),
(4, 3, 'Doa mau berkendara', 'Alhamdulillah dengan selalu memohon kepada Allah SWT sebelum berkendara saya selalu diberikan keselamatan hingga tujuan oleh-Nya.', '2024-06-29 04:33:43', '2024-06-29 04:33:43'),
(5, 2, 'Halo', 'Halo', '2024-06-30 05:14:04', '2024-06-30 05:14:04'),
(6, 1, 'Oke', 'Oke', '2024-06-30 05:15:44', '2024-06-30 05:15:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_photo_path` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `is_online` tinyint(1) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_photo_path`, `location`, `is_online`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.com', NULL, '$2y$10$f6YUjX.Ziix91UuvkmnI3.iDhMw/NPHUe9b4M0MuRXRU4m1mJNZuq', '/images/profile/1719291965.jpg', NULL, 0, NULL, '2024-06-24 20:55:42', '2024-07-10 07:19:21'),
(2, 'Ammar', 'ammarmusyaffa11@gmail.com', NULL, '$2y$10$4yQqF0cNtPNQ5dnsW2ICt.ArCzFHgjHcUXjqwfbHs7TsTjJ000Q4a', '/images/profile/1719291176.jpg', NULL, 1, NULL, '2024-06-24 21:47:44', '2024-07-11 16:15:51'),
(3, 'Ahmad Ammar', 'ammar@mail.com', NULL, '$2y$10$qB1vdIzDiUaaY//S6.JFGewpBvPupffxB/IzR.mEexQMClnSz3BRu', '/images/profile/1719660768.jpeg', NULL, 0, NULL, '2024-06-27 20:06:46', '2024-06-29 06:36:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dzikir_records`
--
ALTER TABLE `dzikir_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_dzikir_id` (`materi_dzikir_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `manfaat_dzikirs`
--
ALTER TABLE `manfaat_dzikirs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi_dzikirs`
--
ALTER TABLE `materi_dzikirs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `community_id` (`community_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `monitorings`
--
ALTER TABLE `monitorings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `shalawats`
--
ALTER TABLE `shalawats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shalawat_records`
--
ALTER TABLE `shalawat_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shalawat_id` (`shalawat_id`);

--
-- Indeks untuk tabel `shared_experiences`
--
ALTER TABLE `shared_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shared_experiences_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `communities`
--
ALTER TABLE `communities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `dzikir_records`
--
ALTER TABLE `dzikir_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `manfaat_dzikirs`
--
ALTER TABLE `manfaat_dzikirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `materi_dzikirs`
--
ALTER TABLE `materi_dzikirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `monitorings`
--
ALTER TABLE `monitorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `shalawats`
--
ALTER TABLE `shalawats`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `shalawat_records`
--
ALTER TABLE `shalawat_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `shared_experiences`
--
ALTER TABLE `shared_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dzikir_records`
--
ALTER TABLE `dzikir_records`
  ADD CONSTRAINT `dzikir_records_ibfk_1` FOREIGN KEY (`materi_dzikir_id`) REFERENCES `materi_dzikirs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `materi_dzikirs`
--
ALTER TABLE `materi_dzikirs`
  ADD CONSTRAINT `materi_dzikirs_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`community_id`) REFERENCES `communities` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `monitorings`
--
ALTER TABLE `monitorings`
  ADD CONSTRAINT `monitorings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `shalawat_records`
--
ALTER TABLE `shalawat_records`
  ADD CONSTRAINT `fk_shalawat` FOREIGN KEY (`shalawat_id`) REFERENCES `shalawats` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `shared_experiences`
--
ALTER TABLE `shared_experiences`
  ADD CONSTRAINT `shared_experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
