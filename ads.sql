CREATE TABLE `adbuy` (
  `adi` bigint(255) DEFAULT NULL,
  `uid` bigint(255) DEFAULT NULL,
  `response` varchar(255) DEFAULT NULL,
  `start` bigint(255) DEFAULT NULL,
  `end` bigint(255) DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adbuy`
--

INSERT INTO `adbuy` (`adi`, `uid`, `response`, `start`, `end`, `updated`, `created`) VALUES
(1, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(2, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(3, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(4, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(5, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(6, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(7, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(8, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(9, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(10, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(11, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(12, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(13, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(14, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(15, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(16, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(17, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(18, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(19, 1, 'AdGenX_SYS', 1614018335, 1925058335, '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(30, 2, 'AdGenX', 1614719572, 1617311572, '2021-03-02 21:12:52', '2021-03-02 21:12:52'),
(21, 2, 'AdGenX', 1615060123, 1617652123, '2021-03-06 19:48:43', '2021-03-06 19:48:43'),
(22, 2, 'AdGenX', 1615066732, 1617658732, '2021-03-06 21:38:52', '2021-03-06 21:38:52'),
(23, 2, 'AdGenX', 1615067579, 1617659579, '2021-03-06 21:52:59', '2021-03-06 21:52:59'),
(24, 2, 'AdGenX', 1615067620, 1617659620, '2021-03-06 21:53:40', '2021-03-06 21:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `adi` bigint(255) NOT NULL,
  `uid` bigint(255) DEFAULT NULL,
  `ciri` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `imglnk1` varchar(255) DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`adi`, `uid`, `ciri`, `url`, `imglnk1`, `updated`, `created`) VALUES
(1, 1, 'driving music **BASS BOOSTED**...', 'https://www.youtube.com/watch?v=RkkdYdWMfQ0', '/var/www/html/dro/www-img/ciriBassBoosted.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(2, 1, 'try handmade boots by Lucchese', 'http://www.lucchese.com', '/var/www/html/dro/www-img/ciriLucchese.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(3, 1, 'try a Monster Energy Ultra Sunrise today...', 'http://www.monsterenergy.com', '/var/www/html/dro/www-img/ciriMonsterEnergy.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(4, 1, 'try a Taco Bell Grande Stacker Box...', 'http://www.tacobell.com', '/var/www/html/dro/www-img/ciriTacoBell.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(5, 1, 'wanna get high?', 'http://www.hightimes.com', '/var/www/html/dro/www-img/droHighTimesBanner1tmb.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(6, 1, 'checkout Call of Duty mobile!', 'http://www.callofduty.com', '/var/www/html/dro/www-img/ciriCallOfDutyMobile.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(7, 1, 'I&#039;ll be back...', 'https://www.amazon.com/Terminator-Dark-Fate-Linda-Hamilton/dp/B07ZP8J83T', '/var/www/html/dro/www-img/ciriTerminator.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(8, 1, 'da da da dat da...', 'http://www.mcdonalds.com', '/var/www/html/dro/www-img/ciriMcdonalds.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(9, 1, 'call hertz, we&#039;ll pick you up...', 'http://www.hertz.com', '/var/www/html/dro/www-img/ciriHertz.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(10, 1, 'Come to Marlboro country...', 'http://www.marlboro.com', '/var/www/html/dro/www-img/ciriMarlboro.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(11, 1, 'you have voicemail...', 'http://www.myfamilymobile.com', '/var/www/html/dro/www-img/ciriMyFamilyMobile.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(12, 1, 'the force is with you...', 'http://www.starwars.com', '/var/www/html/dro/www-img/ciriStarWars.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(13, 1, 'try a Pizza Hut &#039;The Original Pan&#039; today...', 'http://www.pizzahut.com', '/var/www/html/dro/www-img/ciriPizzaHut.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(14, 1, 'try Popeye&#039;s new chicken sandwich!', 'http://www.popeyes.com', '/var/www/html/dro/www-img/ciriPopeyes.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(15, 1, 'Freedom of Vodka...', 'http://www.stoli.com', '/var/www/html/dro/www-img/ciriStoli.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(16, 1, 'I feel the need, the need for speed...', 'http://www.paramount.com', '/var/www/html/dro/www-img/ciriParamount.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(17, 1, 'slow your roll...', 'https://www.youtube.com/watch?v=ODuKIpDRcXI', '/var/www/html/dro/www-img/ciriKidRock.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(18, 1, 'another day, another dollar...', 'http://www.dollargeneral.com', '/var/www/html/dro/www-img/ciriDollarGeneral.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(19, 1, 'VOTE F.U.B.U.', 'http://www.fubu.com', '/var/www/html/dro/www-img/ciriFubu.jpg', '2021-02-22 18:25:35', '2021-02-22 18:25:35'),
(21, 2, 'Arbys, we have the meats!', 'https://arbys.com', '/home/idrirjgx/public_html/www-bin/img/2/2for6_EDV-JAN_M_MainMH_768x640_v1.jpg', '2021-03-01 19:46:14', '2021-03-01 19:46:14'),
(22, 2, 'Got memes??', 'https://reddit.com', '/home/idrirjgx/public_html/www-bin/img/2/reddit-combo-1920-800x450.png', '2021-03-01 21:11:15', '2021-03-01 21:11:15'),
(23, 2, '#Impeach', 'https://nypost.com', '/home/idrirjgx/public_html/www-bin/img/2/pageone-1.jpg', '2021-03-01 21:17:00', '2021-03-01 21:17:00'),
(24, 2, '#WSB #2theMoon', 'https://reddit.com/r/WallstreetBets', '/home/idrirjgx/public_html/www-bin/img/2/reddit-combo-1920-800x450.png', '2021-03-01 21:20:58', '2021-03-01 21:20:58'),
(26, 2, '#Delicious', 'https://arbys.com', '/home/idrirjgx/public_html/www-bin/img/2/2for6_EDV-JAN_M_MainMH_768x640_v1.jpg', '2021-03-01 21:25:16', '2021-03-01 21:25:16'),
(27, 2, 'ðŸ’Ž Diamond Hands ', 'https://reddit.com', '/home/idrirjgx/public_html/www-bin/img/2/reddit-combo-1920-800x450.png', '2021-03-01 21:30:39', '2021-03-01 21:30:39'),
(28, 2, 'You&#039;re Fired!', 'https://nypost.com', '/home/idrirjgx/public_html/www-bin/img/2/pageone-1.jpg', '2021-03-01 21:32:35', '2021-03-01 21:32:35'),
(29, 2, 'Beef N Cheddar', 'https://arbys.com', '/home/idrirjgx/public_html/www-bin/img/2/2for6_EDV-JAN_M_MainMH_768x640_v1.jpg', '2021-03-01 21:34:57', '2021-03-01 21:34:57'),
(30, 2, 'Subscribe Today!', 'https://nypost.com', '/home/idrirjgx/public_html/www-bin/img/2/pageone-1.jpg', '2021-03-01 21:37:22', '2021-03-01 21:37:22');

