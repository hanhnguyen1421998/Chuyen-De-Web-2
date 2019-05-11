-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 10, 2019 lúc 04:02 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `google-search`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `information`
--

CREATE TABLE `information` (
  `infor_id` int(11) NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `information`
--

INSERT INTO `information` (`infor_id`, `keyword`, `url`, `title`, `content`, `image`) VALUES
(62, '\"acb\"', '[\"https://www.cnbc.com/quotes/?symbol=ACB\"', '[\"<b>ACB</b>: Aurora Cannabis Inc - Stock Quote and News - CNBC\"', '[\"Get Aurora Cannabis Inc (<b>ACB</b>:NYSE) real-time stock quotes', '[\"https://static3.seekingalpha.com/assets/og_image_192-59bfd51c9fe6af025b2f9f96c807e46f8e2f06c5ae787b15bf1423e6c676d4db.png\"'),
(63, '\"acb\"', '\"https://seekingalpha.com/symbol/ACB\"', '\"<b>ACB</b> Analysis &amp; News - Aurora Cannabis Inc. | Seeking Alpha\"', ' news and financial \ninformation from CNBC.\"', '\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSbu3psvgxxLQar8rfs3RUZN4KSMRVzduw-5HFyUalyEhIAUkDjhSjMULvf\"'),
(64, '\"acb\"', '\"https://www.barchart.com/stocks/quotes/ACB\"', '\"Aurora Cannabis Inc (<b>ACB</b>) Stocks Price Quote - Barchart.com\"', '\"Latest Breaking news and Headlines on Aurora Cannabis Inc. (<b>ACB</b>) stock from \nSeeking Alpha. Read the news as it happens!\"', '\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQq0hq0TFbTKDECQUe4R-HFviDlzLGnm3P813oZ4QXNGUErC8jaXKHnNZaM\"'),
(65, '\"acb\"', '\"https://finance.yahoo.com/news/aurora-cannabis-inc-acb-gains-214509623.html\"', '\"Aurora Cannabis Inc. (<b>ACB</b>) Gains As Market Dips: What You ...\"', '\"Free stocks price quote overview for <b>ACB</b>. Latest real-time Cboe BZX price quote', '\"https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSvcUOnQk_nWm_25c3jZr3LkWBkrYEABU0JMbKGrTznoHEqDe21riOmG_U\"'),
(66, '\"acb\"', '\"https://www.youtube.com/watch?v=bySLDNbYd1A\"', '\"Aurora Cannabis Inc (TSE:<b>ACB</b> NYSE:<b>ACB</b>) Awarded Maximum ...\"', ' \ncharts', '\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS8FgKFFq1MxRfG_hLe55cWC9TCw7AaY6ORJrBgRnQNExyELtPBnn3CBYjM\"'),
(67, '\"acb\"', '\"https://www.canada.ca/en/revenue-agency/services/tax/individuals/topics/about-your-tax-return/tax-return/completing-a-tax-return/personal-income/line-127-capital-gains/calculating-reporting-your-capital-gains-losses/adjusted-cost-base.html\"', '\"Adjusted cost base (<b>ACB</b>) - Canada.ca\"', ' financials', '\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRbZUXteQ7yKrPleiOZ5Rd3b3k3JThSH0uDoXY-feDRsWVjlv4fEZew2n07\"'),
(68, '\"acb\"', '\"https://cse.google.com/?ref=b&hl=en\"', '\"<img src=\"https://www.google.com/cse/static/images/1x/googlelogo_grey_46x15dp.png\" class=\"gcsc-branding-img-noclear\" srcset=\"https://www.google.com/cse/static/images/2x/googlelogo_grey_46x15dp.png 2x\" alt=\"Google\">\"', '\"Apr 12', '\"\"'),
(69, '\"acb\"', '\"\"', '\"\"', ' 2019 <b>...</b> Aurora Cannabis Inc (TSE:<b>ACB</b>) (NYSE:<b>ACB</b>) (FRA:21P) CCO Cam Battley \ndiscusses Aurora Sun', '\"\"]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `keyword`
--

CREATE TABLE `keyword` (
  `keyword_id` int(11) NOT NULL,
  `keyword_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`infor_id`);

--
-- Chỉ mục cho bảng `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`keyword_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `information`
--
ALTER TABLE `information`
  MODIFY `infor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `keyword`
--
ALTER TABLE `keyword`
  MODIFY `keyword_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
