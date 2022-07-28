CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `imgsource` varchar(255) NOT NULL,
  `parametr` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `products`
--

INSERT INTO `products` (`productId`, `type`, `productName`, `imgsource`, `parametr`, `value`, `price`) VALUES
(1, 'zakladni', 'Fractal Design Meshify 2', '../img/bedny/FractalDesignMeshify2.webp', 'Rozměry,Osazené ventilátory,Volné ventilátory', '210 x 475 x  424 mm,2x140mm + 1x120mm,3', '3100'),
(2, 'zakladni', 'Fractal Design Meshify 3', '../img/bedny/FractalDesignMeshify2.webp', 'Rozměry, Osazené ventilátory,  Volné ventilátory', '210 x 475 x  424 mm, 2x140mm + 1x120mm, 4', '3200'),
(3, 'pruhledne', 'Fractal Design Glass', '../img/bedny/SilentiumPCRegnumRG6VTGPureBlack.webp', 'Rozměry, Osazené ventilátory,  Volné ventilátory', '221 x 470 x  443 mm, 2x140mm + 1x120mm, 4', '3200'),
(4, 'zakladni', 'Fractal Design Meshify 4', '../img/bedny/FractalDesignMeshify2.webp', 'Rozměry, Osazené ventilátory,  Volné ventilátory', '200 x 450 x  435 mm, 1x140mm + 1x120mm, 2', '2500'),
(5, 'pruhledne', 'SilentiumPC Regnum RG6V TG Pure Black', '../img/bedny/SilentiumPCRegnumRG6VTGPureBlack.webp', 'Rozměry, Osazené ventilátory,  Volné ventilátory', '210 x 475 x  424 mm, 1x140mm + 1x120mm, 3', '2000'),
(6, 'cpuintel', 'Intel Core i7-10700', '../img/procesory/i7.webp', 'Socket,Počet jader,Frekvence', 'LGA 1200,8,2.9GHz (4.8GHz Turbo)', '7800'),
(7, 'cpuintel', 'Intel Core i5-10400F', '../img/procesory/i5.webp', 'Socket,Počet jader,Frekvence', 'LGA 1200,6,2.9GHz (4.3GHz Turbo)', '3300'),
(8, 'cpuamd', 'AMD Ryzen 5 5600X', '../img/procesory/ryzen5.webp', 'Socket,Počet jader,Frekvence', 'AM4,6,3.7GHz (4.6GHz Turbo)', '6700'),
(9, 'cpuamd', 'AMD Ryzen 7 5700X', '../img/procesory/ryzen7.webp', 'Socket,Počet jader,Frekvence', 'AM4,8,3.4GHz (4.6GHz Turbo)', '7900'),
(10, 'cpuamd', 'AMD Ryzen 3 4100', '../img/procesory/ryzen3.webp', 'Socket,Počet jader,Frekvence', 'AM4,4,3.8GHz (4.0GHz Turbo)', '2990'),
(11, 'deskyamd', 'MSI MAG B550 TOMAHAWK - AMD B550', '../img/desky/msiamddeska.webp', 'Čipset,Max MHz RAM', 'AMD B550,5.1GHz', '3590'),
(12, 'deskyamd', 'ASUS ROG STRIX B550-F GAMING - AMD B550', '../img/desky/asusamddeska.webp', 'Čipset,Max MHz RAM', 'AMD B550,5.1GHz', '4090'),
(13, 'deskyintel', 'ASUS PRIME Z590-P - Intel Z590', '../img/desky/asusinteldeska.webp', 'Čipset,Max MHz RAM', 'Intel Z590,5.1GHz', '3100'),
(14, 'deskyintel', 'GIGABYTE Z590 UD AC - Intel Z590', '../img/desky/gigabyteinteldeska.webp', 'Čipset,Max MHz RAM', 'Intel Z590,5.3GHz', '3700'),
(15, 'gpunvidia', 'ASUS GeForce ROG-STRIX-RTX3080', '../img/karty/rog3080.webp', 'Pamět,Frekvence', '10 GB,1935 MHz', '29800'),
(16, 'gpunvidia', 'MSI GeForce RTX 3060 VENTUS', '../img/karty/msi3060.webp', 'Pamět,Frekvence', '12 GB,1807 MHz', '29800'),
(17, 'gpuamd', 'Sapphire Radeon NITRO+ RX 6900 XT SE', '../img/karty/sapphire6900XT.webp', 'Pamět,Frekvence', '16 GB,2365 MHz', '37900'),
(18, 'gpuamd', 'ASRock Radeon RX 6600 XT Challenger D', '../img/karty/asrock6600XT.webp', 'Pamět,Frekvence', '8 GB,2593MHz', '13990'),
(19, 'ram', 'G.SKill TridentZ Royal 16GB', '../img/ram/g-skill16.webp', 'Pamět,Frekvence', '16 GB,4600MHz', '6600'),
(20, 'ram', 'Kingston Fury Beast Black 16GB', '../img/ram/kingston16.webp', 'Pamět,Frekvence', '16 GB,3200MHz', '2000'),
(21, 'ram', 'G.Skill Aegis 8GB', '../img/ram/g-skill8.webp', 'Pamět,Frekvence', '8 GB,3200MHz', '999'),
(22, 'hdd', 'Seagate BarraCuda', '../img/disky/hdd.webp', 'Pamět,Rychlost čtení, Rychlost zápisu', '2 TB,220 MB/s,220 MB/s', '1300'),
(23, 'ssd', 'Samsung 870 QVO', '../img/disky/ssd.webp', 'Pamět,Rychlost čtení, Rychlost zápisu', '1 TB,560 MB/s,530 MB/s', '2100'),
(24, 'm-2', 'Samsung SSD 980, M.2', '../img/disky/m-2.webp', 'Pamět,Rychlost čtení, Rychlost zápisu', '1 TB,3500 MB/s,3000 MB/s', '2600'),
(25, 'zdroje', 'ASUS ROG THOR 850P', '../img/zdroje/asus.webp', 'Výkon,Typ', '850W,Modulární', '4600'),
(26, 'zdroje', 'Seasonic Focus Gold', '../img/zdroje/seasonic.webp', 'Výkon,Typ', '650W,Polo-modulární', '2200'),
(27, 'chlazenicpu', 'Be quiet! Dark Rock PRO 4', '../img/chlazeni/bequiet.webp', 'Hlučnost', '12.8 / 17.9 / 24.3 dB(A)', '2100'),
(28, 'chlazenicpu', 'NZXT Kraken Z73', '../img/chlazeni/nzxt.webp', 'Hlučnost', '21-36 dB(A)', '5600'),
(29, 'fan', 'Arctic P12 PWM', '../img/chlazeni/articfan.webp', 'Velikost,Rychlost', '120mm,200-1800 RPM', '149'),
(30, 'fan', 'Arctic P12 PWM', '../img/chlazeni/silentiumfan.webp', 'Velikost,Rychlost', '120mm,800-2300 RPM', '299'),
(31, 'fan', 'Noctua NF-A4x10 FLX', '../img/chlazeni/noctuafan.webp', 'Velikost,Rychlost', '40mm,4500 RPM', '349'),
(32, 'fan', 'Be quiet! Silent Wings 3', '../img/chlazeni/bequietfan.webp', 'Velikost,Rychlost', '140mm,1600 RPM', '589');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `userPassword` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`userId`, `username`, `userPassword`, `email`) VALUES
(1, 'Igor', 'veslo', 'email@email.com'),
(11, 'Karel', 'veslo', 'email@email.com'),
(12, 'Pavel', 'veslo', 'email@email.com');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
