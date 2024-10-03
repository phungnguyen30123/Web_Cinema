-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 05:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_ve` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_calendar` int(255) NOT NULL,
  `tong_tien` bigint(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id_calendar` int(11) NOT NULL,
  `id_movie` int(255) NOT NULL,
  `day` date DEFAULT NULL,
  `id_phong` int(11) DEFAULT NULL,
  `time` varchar(11) DEFAULT NULL,
  `gia_ve` bigint(11) NOT NULL DEFAULT 60000
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id_calendar`, `id_movie`, `day`, `id_phong`, `time`, `gia_ve`) VALUES
(252, 14, '2022-12-25', 1, '20:10', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `actor` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `open_date` date DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `poster` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `imgtra1` varchar(255) NOT NULL,
  `imgtra2` varchar(255) NOT NULL,
  `trailer1` varchar(500) NOT NULL,
  `trailer2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `duration`, `director`, `actor`, `language`, `country`, `description`, `open_date`, `category`, `poster`, `image1`, `image2`, `image3`, `image4`, `imgtra1`, `imgtra2`, `trailer1`, `trailer2`) VALUES
(13, 'TẤM VÉ ĐẾN THIÊN ĐƯỜNG', '105 phút', 'Ol Parker', 'George Clooney, Julia Roberts, Kaitlyn Dever, Maxime Bouttier', 'Phụ đề Tiếng Việt', NULL, 'Hai diễn viên kỳ cựu của Hollywood - George Clooney và Julia Roberts sẽ tái hợp trên màn ảnh rộng trong vai đôi vợ chồng đã li hôn, nhưng lại cùng chung sứ mệnh ngăn cản cuộc kết hôn của đứa con gái yêu. Bởi họ sợ rằng con gái đang mắc phải sai lầm tương tự điều mà họ đã từng trải qua. Ticket to Paradise là một bộ phim hài lãng mạn về sự ngọt ngào bất ngờ của \"cơ hội thứ hai”.', '2022-11-14', 'Hài Hước', 'http://localhost/Doan_Banvexemphim/Fileupload/tamvtd.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/tamvtd1.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/tamvtd2.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/tamvtd3.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/tamvtd4.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/tamvdtd_of.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/tamvdtd_ts.jpg', ' https://www.youtube.com/watch?v=g8ona3jTuys  ', ' https://www.youtube.com/watch?v=g8ona3jTuys  '),
(14, 'AVATAR - DÒNG CHẢY CỦA NƯỚC', '150 phút', 'James Cameron', 'Sam Worthington, Zoe Saldana, Dương Tử Quỳnh,...', 'Phụ đề Tiếng Việt', 'Mỹ', 'Câu chuyện của “Avatar: Dòng Chảy Của Nước” lấy bối cảnh 10 năm sau những sự kiện xảy ra ở phần đầu tiên. Phim kể câu chuyện về gia đình mới của Jake Sully (Sam Worthington thủ vai) cùng những rắc rối theo sau và bi kịch họ phải chịu đựng khi phe loài người xâm lược hành tinh Pandora.', '2022-12-16', 'Khoa Học Viễn Tưởng', 'http://localhost/Doan_Banvexemphim/Fileupload/avatar.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/avatar1.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/avatar2.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/avartar3.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/avatar4.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/avatar_of.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/avatar_tss.jpg', ' https://www.youtube.com/watch?v=rcpuVDA9JPY', ' https://www.youtube.com/watch?v=oeRG9A6bDdY'),
(15, 'MÈO ĐI HIA - ĐIỀU ƯỚC CUỐI CÙNG', '98 phút', 'Joel Crawford', 'Antonio Banderas, Harvey Guillén, Olivia Colman, Salma Hayek, Samson Kayo', 'Phụ đề Tiếng Việt', 'Mỹ', 'Phim MÈO ĐI HIA: ĐIỀU ƯỚC CUỐI CÙNG  chú mèo yêu thích của chúng ta sẽ trở lại màn ảnh rộng trong những gì các nhà sản xuất mô tả. Nửa giờ đầu tiên của bộ phim hoạt hình  đã được chiếu trước trong Liên hoan phim hoạt hình quốc tế Annecy . Đầu tiên trong tâm trí của đạo diễn không chỉ giới thiệu lại Puss với thế giới, mà còn giới thiệu thế giới về vị trí của nhân vật chú mèo Đinhia này.', '2022-12-30', 'Hoạt Hình', 'http://localhost/Doan_Banvexemphim/Fileupload/meohia.png', 'http://localhost/Doan_Banvexemphim/Fileupload/meohia1.png', 'http://localhost/Doan_Banvexemphim/Fileupload/meohia2.png', 'http://localhost/Doan_Banvexemphim/Fileupload/meohia3.png', 'http://localhost/Doan_Banvexemphim/Fileupload/meohia4.png', 'http://localhost/Doan_Banvexemphim/Fileupload/meo_of.jpg', 'http://localhost/Doan_Banvexemphim/Fileupload/meo_ts.jpg', ' https://www.youtube.com/watch?v=oeRG9A6bDdY', ' https://www.youtube.com/watch?v=rcpuVDA9JPY'),
(16, 'cô gái', '100 phút', 'a', 'a', 'a', 'a', 'a', '0000-00-00', 'Hài Hước', '', '', '', '', '', '', '', '', ''),
(17, 'aaa', '120', 'a', 'b', 'c', 'd', 'aaaa', '2022-12-20', 'Hài Hước', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `movie_category`
--

CREATE TABLE `movie_category` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie_category`
--

INSERT INTO `movie_category` (`id`, `title`) VALUES
(3, 'Hài Hước'),
(5, 'Hành Động'),
(4, 'Hoạt Hình'),
(6, 'Khoa Học Viễn Tưởng'),
(1, 'Kinh Dị'),
(2, 'Tình Cảm');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id_room` int(11) NOT NULL,
  `ten_phong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `ten_phong`) VALUES
(1, 'Phòng 1'),
(2, 'Phòng 2'),
(3, 'Phòng 3'),
(4, 'Phòng 4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `password_re` text NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `sdt` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT 0,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `password_re`, `fullname`, `birthday`, `sdt`, `address`, `is_admin`, `created`, `modified`) VALUES
(34, 'bupcute38@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Búp', '30/12/2003', '0796660590', 'Đà Nẵng', 0, NULL, NULL),
(35, 'phungntk.21it@vku.udn.vn', 'e3afed0047b08059d0fada10f400c1e5', 'e3afed0047b08059d0fada10f400c1e5', 'Búp', '30/12/2003', '0796660590', 'Đà Nẵng', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_ve`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_calendar` (`id_calendar`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id_calendar`),
  ADD KEY `id_movie` (`id_movie`),
  ADD KEY `calendar_ibfk_1` (`id_phong`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `movie_category`
--
ALTER TABLE `movie_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_ve` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id_calendar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `movie_category`
--
ALTER TABLE `movie_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`id_calendar`) REFERENCES `calendar` (`id_calendar`);

--
-- Constraints for table `calendar`
--
ALTER TABLE `calendar`
  ADD CONSTRAINT `calendar_ibfk_1` FOREIGN KEY (`id_phong`) REFERENCES `room` (`id_room`),
  ADD CONSTRAINT `calendar_ibfk_2` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`category`) REFERENCES `movie_category` (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
