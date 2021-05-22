-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 May 2021, 21:45:23
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webfitness`
--
CREATE DATABASE IF NOT EXISTS `webfitness` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `webfitness`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bmi_index`
--

CREATE TABLE `bmi_index` (
  `bmi_index_id` int(11) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `last_edit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `height` varchar(6) NOT NULL,
  `weight` varchar(6) NOT NULL,
  `bmi` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `bmi_index`
--

INSERT INTO `bmi_index` (`bmi_index_id`, `uid`, `last_edit`, `height`, `weight`, `bmi`) VALUES
(72, '1', '2021-05-22 19:40:10', '1.8', '81', '25'),
(61, '13', '2021-05-21 22:54:10', '1.79', '110.5', '34.487');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `plans`
--

CREATE TABLE `plans` (
  `plan_id` int(5) NOT NULL,
  `plan_title` text CHARACTER SET latin1 NOT NULL,
  `plan_desc` text CHARACTER SET latin1 NOT NULL,
  `plan_bmi_min` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `plan_bmi_max` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `plan_price` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `plans`
--

INSERT INTO `plans` (`plan_id`, `plan_title`, `plan_desc`, `plan_bmi_min`, `plan_bmi_max`, `plan_price`) VALUES
(1, 'EGG DIET & HALF CARDIO', '<p>1 day</p>\r\n<p>Breakfast: White coffee, 1 slice of whole wheat bread, 1 boiled egg</p>\r\n<p>Snack: 1 fruit (the choice is yours)</p>\r\n<p>Lunch: 150 grams of boiled chicken, vegetable soup, green salad with chopped eggs</p>\r\n<p>Snack: 1 fruit (the choice is yours)</p>\r\n<p>Dinner: 1 small tuna, 1 slice of whole wheat bread, 1 tomato</p>\r\n<p>Chest and triceps 5x5</p>\r\n<p><br></p>\r\n<p>2 days</p>\r\n<p>Breakfast: White coffee, 1 slice of whole wheat bread, 1 boiled egg</p>\r\n<p>Snack: Fruit yogurt</p>\r\n<p>Lunch: 150 grams of white fish, chicken soup, 100 grams of tomato salad (prepared with olive oil)</p>\r\n<p>Snack: 2 boiled eggs</p>\r\n<p>Dinner: Vegetable soup, 1 slice of whole wheat bread</p>\r\n<p>leg muscles and abdominal muscles 5x5</p>\r\n<p><br></p>\r\n<p>3 days</p>\r\n<p>Breakfast: White coffee, 1 slice of whole wheat bread, 1 small pate</p>\r\n<p>Snack: 2 boiled eggs</p>\r\n<p>Lunch: 200 grams of spaghetti with meatballs, meat soup, green salad</p>\r\n<p>Snack: Fruit yogurt</p>\r\n<p>Dinner: 2 omelettes, 1 slice of whole wheat bread</p>\r\n<p>&nbsp;back and biceps 5x5&nbsp;</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>4 days</p>\r\n<p>Breakfast: 1 cup tea, 1 slice of whole wheat bread, 1 tablespoon butter, 1 tablespoon organic honey</p>\r\n<p>Snack: 1 fruit (the choice is yours)</p>\r\n<p>Lunch: 200 grams of beef, spinach soup, green salad</p>\r\n<p>Snack: 1 fruit (the choice is yours)</p>\r\n<p>Dinner: 1 slice of whole wheat bread, 1 green pepper, 50 grams of boiled rice, 100 grams of chicken mea</p>\r\n<p>leg muscles and abdominal muscles 5x5</p>\r\n<p><br></p>\r\n<p>5 days</p>\r\n<p>Breakfast: 1 glass of lemonade, 1 slice of whole wheat bread, 1 hot dog, 1 tablespoon of mustard</p>\r\n<p>Snack: 1 boiled egg</p>\r\n<p>Lunch: 150 grams of chicken meat, 100 grams of boiled green beans, 1 slice of whole wheat bread</p>\r\n<p>Snack: Fruit yogurt</p>\r\n<p>Dinner: 1 slice of wholemeal bread, 2 salami and salad of your choice,</p>\r\n<p>&nbsp;back and biceps 5x5&nbsp;</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>5 days after following this diet, take a break for 2 days and then repeat the diet 2 more times, and then of course another break. Try this diet and let us know your thoughts in the comments.</p>\r\n<p><br></p>\r\n<p><br></p>', '20', '25', '40'),
(2, 'CANDIDA DIET & LIGHT CARDIO', '<p>n this sample menu, there are foods that can be accepted in the candida diet. You can arrange the menu according to your own preferences.</p>\r\n<p><br></p>\r\n<p>Monday</p>\r\n<p>Breakfast: Scrambled eggs with tomatoes and avocado</p>\r\n<p>Lunch: Turkey salad with greens, avocado slices, kale, broccoli, and olive oil</p>\r\n<p>Dinner: fried quinoa, chicken breast, steamed boiled vegetables, and coconut sauce</p>\r\n<p>JOGGING 30 MIN push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>Tuesday</p>\r\n<p>Breakfast: Strained yoghurt, 25 gr. up to berry fruits, cinnamon, almonds</p>\r\n<p>Lunch: Chicken with red curry</p>\r\n<p>Dinner: Salmon with boiled broccoli and bone broth</p>\r\n<p>JOGGING 30 MIN push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>Wednesday</p>\r\n<p>Breakfast: Turkey sausage and brussel sprouts</p>\r\n<p>Lunch: Lemon fried chicken and green salad</p>\r\n<p>Dinner: Breadless burger with avocado, boiled vegetables and sauerkraut</p>\r\n<p>JOGGING 30 MIN push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p>Thursday</p>\r\n<p>Breakfast: Vegetable omelette, shallots, spinach, tomatoes</p>\r\n<p>Lunch: Turkey sausages from the previous day, with cabbage saut&eacute;</p>\r\n<p>Dinner: Coconut chicken with quinoa and boiled vegetables.</p>\r\n<p>MIN push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>Friday</p>\r\n<p>Breakfast: Red pepper omelet, onion, kale, fried egg</p>\r\n<p>Lunch: Turkey meatballs with collard greens, millet sauced with butter</p>\r\n<p>Dinner: Salmon with lemon and dill, with asparagus on the side.</p>\r\n<p>JOGGING 30 MIN push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>Saturday</p>\r\n<p>Breakfast: Buckwheat muffins with chicory coffee on the side.</p>\r\n<p>Lunch: Coconut chicken leftovers, along with quinoa and boiled vegetables</p>\r\n<p>Dinner: Chicken, garlic, pesto and zucchini with olive oil</p>\r\n<p>JOGGING 30 MIN push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p><br></p>', '0', '19.9', '60'),
(3, 'CABBAGE DIET & FULL CARDIO', '<p>1 day</p>\r\n<p>You can eat unlimited fruits. Avoid eating melon, watermelon, banana, as they can block the intestines. You can drink tea without sugar. You can drink unlimitedly the soup you prepare in the morning, lunch and evening. You should drink 8 glasses of water.</p>\r\n<p>JOGGING 30 MIN push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>2 days</p>\r\n<p>You can eat unlimited fresh vegetables with 1 boiled potato. Drink 3 meals of cabbage soup as you wish. You should drink 8 glasses of water.</p>\r\n<p>JOGGING 30 MIN push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>3 days</p>\r\n<p>You can eat unlimited fruits. You can drink tea without sugar. You can drink as much as you want from the soup you have prepared in the morning, lunch and evening. You should drink 8 glasses of water.</p>\r\n<p>JOGGING 30 MIN push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>4 days</p>\r\n<p>You can drink unlimited cabbage diet. 3 bananas and lean free. You should drink 8 glasses of water.</p>\r\n<p>JOGGING 30 MIN push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>5 days</p>\r\n<p>You can drink unlimited cabbage soup in the morning, a total of 250 grams at noon and in the evening. You can eat fish, red or white meat. You have the right to eat unlimited tomatoes. Don&apos;t forget to drink 8 glasses of water.</p>\r\n<p><br></p>\r\n<p>JOGGING 30 MIN push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p>6 days</p>\r\n<p>You can eat unlimited fresh or steamed lean vegetables, 1 portion of fish, red or white meat at lunch and dinner. Unlimited lean green salad can accompany your meals.</p>\r\n<p>CYLING 20MIN JIGGING 40 MIN</p>\r\n<p>7 days</p>\r\n<p>Unlimited fruit, lean vegetables and fresh juice day.</p>\r\n<p>CYLING 20MIN JIGGING 40 MIN</p>\r\n<p><br></p>\r\n<p><br></p>', '25', '30', '40'),
(4, 'FAST WEIGHT LOSS DIET & FULL CARDIO', '<p>Monday</p>\r\n<p>Breakfast: 1 orange (can be grapefruit, peach, pineapple or other fruit except banana), 2 crackers (whole wheat or cereal), unsweetened coffee or tea</p>\r\n<p>Lunch: 1 orange, 1 boiled egg, yogurt.</p>\r\n<p>Dinner: 2 boiled eggs, 2 tomatoes, 500g vegetable salad, 2 cookies.</p>\r\n<p>JOGGING 20 MIN CYLING 20 MIN&nbsp;</p>\r\n<p>Chest and triceps 5x5</p>\r\n<p>push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p>Tuesday</p>\r\n<p>Breakfast: same as Monday&apos;s breakfast</p>\r\n<p>Lunch: 1 orange, 1 boiled egg, yogurt, 2 crackers.</p>\r\n<p>Dinner: 120g meat (preferably beef), 1 tomato, 1 cookie.</p>\r\n<p>JOGGING 20 MIN CYLING 20 MIN&nbsp;</p>\r\n<p>Chest and triceps 5x5</p>\r\n<p>push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>Wednesday</p>\r\n<p>Breakfast: same as Monday&apos;s breakfast</p>\r\n<p>Lunch: 1 orange, 1 boiled egg, yogurt and vegetable salad.</p>\r\n<p>Dinner: 120 gr beef, 1 orange, 1 biscuit, coffee or tea</p>\r\n<p>JOGGING 20 MIN CYLING 20 MIN&nbsp;</p>\r\n<p>Chest and triceps 5x5</p>\r\n<p>push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>Thursday</p>\r\n<p>Breakfast: same as Monday&apos;s breakfast</p>\r\n<p>Lunch: 120 grams of low-fat cheese or curd cheese, 1 tomato, 1 cookie.</p>\r\n<p>Dinner: 120 grams of meat, 2 tomatoes, 1 apple, 1 cookie</p>\r\n<p>JOGGING 20 MIN CYLING 20 MIN&nbsp;</p>\r\n<p>Chest and triceps 5x5</p>\r\n<p>push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p><br></p>\r\n<p>Friday</p>\r\n<p>Breakfast: same as Monday&apos;s breakfast</p>\r\n<p>Lunch: 200g of steamed fish, 1 tomato, 1 cookie.</p>\r\n<p>Dinner: 500g of boiled or steamed vegetables (carrots, onions, cabbage, potatoes, beans), 1 boiled egg, 1 tomato.</p>\r\n<p>JOGGING 20 MIN CYLING 20 MIN&nbsp;</p>\r\n<p>Chest and triceps 5x5</p>\r\n<p>push-ups 5x5 sit-ups 5x5</p>\r\n<p><br></p>\r\n<p>By avoiding alcohol and processed foods and reducing salt intake on weekends, you can eat normally without overdoing it.</p', '30.1', '90', '80');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `plans_users`
--

CREATE TABLE `plans_users` (
  `index_id` int(11) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `plan_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `plans_users`
--

INSERT INTO `plans_users` (`index_id`, `uid`, `plan_id`) VALUES
(7, '1', '3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `last_seen` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `last_seen`) VALUES
(1, 'can@can.com', '12345', '2021-05-21 18:01:59'),
(11, 'ogulcanobuz@hotmail.com', '12qw12qw', '2021-05-21 21:21:20'),
(15, 'can@can.com', '12345', '2021-05-22 10:59:43');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bmi_index`
--
ALTER TABLE `bmi_index`
  ADD PRIMARY KEY (`bmi_index_id`);

--
-- Tablo için indeksler `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Tablo için indeksler `plans_users`
--
ALTER TABLE `plans_users`
  ADD PRIMARY KEY (`index_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bmi_index`
--
ALTER TABLE `bmi_index`
  MODIFY `bmi_index_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Tablo için AUTO_INCREMENT değeri `plans`
--
ALTER TABLE `plans`
  MODIFY `plan_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `plans_users`
--
ALTER TABLE `plans_users`
  MODIFY `index_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
