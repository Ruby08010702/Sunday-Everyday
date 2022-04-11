-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 01:39 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit3047`
--

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `address`, `contact`, `order_count`, `abn`) VALUES
('174d1f17-b8dc-11ec-b4a6-7478270c810b', 'Acton', 'Clay', 'P.O. Box 948, 1118 Cras Ave', '(02) 7846 4979', '71', 2147483647),
('174f2799-b8dc-11ec-b4a6-7478270c810b', 'Tana', 'Osborn', 'P.O. Box 310, 3870 Erat. Ave', '(01) 9310 0172', '15', 2147483647),
('1750d606-b8dc-11ec-b4a6-7478270c810b', 'Clayton', 'Vance', '764-7707 Aliquam Road', '(07) 2213 7779', '11', 2147483647),
('1751a916-b8dc-11ec-b4a6-7478270c810b', 'Adam', 'Collier', '8371 Eu, St.', '(02) 7260 9688', '98', 2147483647),
('17526db4-b8dc-11ec-b4a6-7478270c810b', 'Jarrod', 'Norton', 'P.O. Box 118, 1681 Suspendisse Rd.', '(02) 5670 2747', '26', 2147483647),
('17531251-b8dc-11ec-b4a6-7478270c810b', 'Jerome', 'Dale', 'P.O. Box 973, 4457 Et Rd.', '(09) 3849 5605', '56', 2147483647),
('1753c1c2-b8dc-11ec-b4a6-7478270c810b', 'Marcia', 'Sanders', 'Ap #915-6607 Aliquet Ave', '(08) 7060 4388', '70', 2147483647),
('175479ee-b8dc-11ec-b4a6-7478270c810b', 'Lila', 'Frost', 'P.O. Box 344, 8660 Nisl. Rd.', '(08) 2653 4661', '39', 2147483647),
('1755667d-b8dc-11ec-b4a6-7478270c810b', 'Alice', 'Haynes', 'P.O. Box 539, 4406 A, Rd.', '(03) 3547 9192', '77', 2147483647),
('1756678e-b8dc-11ec-b4a6-7478270c810b', 'Maya', 'Turner', '184-6906 Tincidunt Av.', '(05) 4156 7496', '27', 2147483647),
('1757638c-b8dc-11ec-b4a6-7478270c810b', 'Kibo', 'Sutton', 'P.O. Box 890, 7349 Erat. Av.', '(06) 7159 4162', '63', 2147483647),
('175856b3-b8dc-11ec-b4a6-7478270c810b', 'Jameson', 'Sweet', 'P.O. Box 474, 5154 Malesuada St.', '(08) 3242 8527', '15', 2147483647),
('1758ee26-b8dc-11ec-b4a6-7478270c810b', 'Quinn', 'Ross', '9309 Suspendisse Rd.', '(06) 4339 2564', '45', 2147483647),
('175981d4-b8dc-11ec-b4a6-7478270c810b', 'Boris', 'Gould', '631-2233 Eu St.', '(06) 1121 2622', '32', 2147483647),
('175a514c-b8dc-11ec-b4a6-7478270c810b', 'Mohammad', 'Gross', 'P.O. Box 401, 9491 Consectetuer Av.', '(04) 1709 3147', '46', 2147483647),
('175b5385-b8dc-11ec-b4a6-7478270c810b', 'Caesar', 'Chase', 'P.O. Box 409, 9714 Convallis, Street', '(08) 2660 3563', '8', 2147483647),
('175c5ac5-b8dc-11ec-b4a6-7478270c810b', 'Charlotte', 'Watson', 'P.O. Box 137, 7836 Ultrices Ave', '(08) 6404 2908', '82', 2147483647),
('175d6bf5-b8dc-11ec-b4a6-7478270c810b', 'Deborah', 'Thornton', 'P.O. Box 264, 9288 Molestie Av.', '(08) 2814 6262', '2', 2147483647),
('175e65de-b8dc-11ec-b4a6-7478270c810b', 'Emily', 'Jenkins', '786-6101 Vivamus Road', '(08) 6482 9090', '33', 2147483647),
('175f42ce-b8dc-11ec-b4a6-7478270c810b', 'Jolie', 'Logan', '775-8709 Sagittis. Rd.', '(03) 2592 5670', '37', 2147483647),
('17610d89-b8dc-11ec-b4a6-7478270c810b', 'Kuame', 'Sutton', '318-1812 Non, St.', '(02) 0828 4933', '88', 2147483647),
('17631a18-b8dc-11ec-b4a6-7478270c810b', 'Quin', 'Solis', 'Ap #355-6538 Quisque Avenue', '(09) 3142 6433', '47', 2147483647),
('1764b488-b8dc-11ec-b4a6-7478270c810b', 'Dominic', 'Strong', 'P.O. Box 605, 1682 Conubia St.', '(02) 6178 4878', '69', 2147483647),
('1765d8ab-b8dc-11ec-b4a6-7478270c810b', 'Barrett', 'Wright', 'Ap #820-5906 Vestibulum Rd.', '(08) 3594 3018', '100', 2147483647),
('1767327a-b8dc-11ec-b4a6-7478270c810b', 'Teegan', 'Sosa', 'Ap #120-9983 A Av.', '(08) 9319 7232', '35', 2147483647),
('176867c2-b8dc-11ec-b4a6-7478270c810b', 'Donovan', 'Greene', '256-7548 Parturient Avenue', '(09) 2211 8946', '29', 2147483647),
('17698c92-b8dc-11ec-b4a6-7478270c810b', 'Martena', 'Davis', 'P.O. Box 177, 2154 Blandit Street', '(03) 8570 4457', '4', 2147483647),
('176af0ec-b8dc-11ec-b4a6-7478270c810b', 'Inez', 'Berger', '9997 Ridiculus Rd.', '(06) 2654 2824', '44', 2147483647),
('176c2e5f-b8dc-11ec-b4a6-7478270c810b', 'Walter', 'Calderon', '6933 Phasellus St.', '(04) 9438 8620', '11', 2147483647),
('176e11c8-b8dc-11ec-b4a6-7478270c810b', 'Raphael', 'Ellison', 'P.O. Box 168, 5375 Pede Ave', '(04) 7483 3072', '72', 2147483647),
('176f15bb-b8dc-11ec-b4a6-7478270c810b', 'Lance', 'Duran', '8064 Adipiscing Rd.', '(04) 5608 5152', '6', 2147483647),
('1770f3a0-b8dc-11ec-b4a6-7478270c810b', 'Rogan', 'Gentry', '588-975 Hendrerit. Rd.', '(01) 8014 3870', '99', 2147483647),
('1771d7d0-b8dc-11ec-b4a6-7478270c810b', 'Alan', 'Robinson', '698-8540 Purus St.', '(07) 4513 2407', '46', 2147483647),
('1772d2a9-b8dc-11ec-b4a6-7478270c810b', 'Hall', 'Pope', 'Ap #221-2489 Eu Rd.', '(08) 8142 2172', '91', 2147483647),
('1773bdb8-b8dc-11ec-b4a6-7478270c810b', 'Ryder', 'May', 'Ap #378-9341 Dolor St.', '(08) 7018 3232', '95', 2147483647),
('1774981b-b8dc-11ec-b4a6-7478270c810b', 'Colt', 'Wheeler', 'Ap #900-8889 Ligula. Avenue', '(07) 3399 3222', '42', 2147483647),
('17755c7e-b8dc-11ec-b4a6-7478270c810b', 'Gail', 'Mcfarland', '462-9823 Leo, Avenue', '(03) 7667 2943', '14', 2147483647),
('1775fb23-b8dc-11ec-b4a6-7478270c810b', 'Leroy', 'Whitaker', '7730 Mauris Av.', '(03) 0998 4266', '38', 2147483647),
('1776d75f-b8dc-11ec-b4a6-7478270c810b', 'Valentine', 'Ballard', 'P.O. Box 988, 7405 Dolor, Av.', '(08) 7002 4523', '38', 2147483647),
('1777f036-b8dc-11ec-b4a6-7478270c810b', 'Rhona', 'Glover', 'Ap #234-8187 Non St.', '(05) 7353 0544', '26', 2147483647),
('1778a9e7-b8dc-11ec-b4a6-7478270c810b', 'Lewis', 'Valenzuela', '9028 Aliquam Av.', '(07) 0719 2738', '67', 2147483647),
('17794450-b8dc-11ec-b4a6-7478270c810b', 'Francesca', 'Petty', '826 Ultricies Rd.', '(09) 5284 4768', '93', 2147483647),
('1779dafc-b8dc-11ec-b4a6-7478270c810b', 'Idola', 'Blake', 'P.O. Box 550, 7327 Aliquet. Rd.', '(09) 8516 7356', '43', 2147483647),
('177a7353-b8dc-11ec-b4a6-7478270c810b', 'Hiram', 'Lara', '8894 Vel, Av.', '(08) 5414 4245', '56', 2147483647),
('177b46f0-b8dc-11ec-b4a6-7478270c810b', 'Brenna', 'Mcfarland', '8814 Mauris Av.', '(03) 9574 0026', '10', 2147483647),
('177c2f0f-b8dc-11ec-b4a6-7478270c810b', 'Indira', 'Horton', '795-7435 Dictum St.', '(05) 3655 4476', '26', 2147483647),
('177cee0f-b8dc-11ec-b4a6-7478270c810b', 'Alexandra', 'Todd', 'Ap #414-3509 Nunc Rd.', '(05) 2170 9757', '47', 2147483647),
('177d7cb7-b8dc-11ec-b4a6-7478270c810b', 'Kylie', 'Jenkins', 'P.O. Box 458, 6733 Enim St.', '(04) 4956 7897', '91', 2147483647),
('177e0de1-b8dc-11ec-b4a6-7478270c810b', 'Chaim', 'Delacruz', '971-6433 Turpis. Road', '(03) 6423 3544', '31', 2147483647),
('177ef372-b8dc-11ec-b4a6-7478270c810b', 'Martha', 'Golden', '8899 At, Rd.', '(06) 9770 7201', '27', 2147483647),
('17800c2c-b8dc-11ec-b4a6-7478270c810b', 'Flynn', 'Huber', '670-6598 Nonummy Rd.', '(06) 7076 3435', '44', 2147483647),
('1780a9e6-b8dc-11ec-b4a6-7478270c810b', 'Anika', 'Barnett', '196-1932 Aliquam Street', '(06) 6865 7676', '43', 2147483647),
('17818bc8-b8dc-11ec-b4a6-7478270c810b', 'Gabriel', 'Hickman', 'P.O. Box 258, 9913 Nibh St.', '(01) 2918 9658', '76', 2147483647),
('17825e22-b8dc-11ec-b4a6-7478270c810b', 'Gwendolyn', 'Mcdaniel', 'Ap #316-3686 Nunc, St.', '(07) 6513 6753', '77', 2147483647),
('17842a1c-b8dc-11ec-b4a6-7478270c810b', 'Jason', 'Petty', 'P.O. Box 510, 4891 Luctus Avenue', '(06) 5328 5857', '28', 2147483647),
('17862ab4-b8dc-11ec-b4a6-7478270c810b', 'Ariel', 'Jefferson', 'Ap #794-3602 Lacus. Avenue', '(08) 0867 2559', '41', 2147483647),
('1787bac2-b8dc-11ec-b4a6-7478270c810b', 'Judah', 'Stout', 'P.O. Box 183, 3419 Dui. Avenue', '(02) 5203 9877', '100', 2147483647),
('1788afb5-b8dc-11ec-b4a6-7478270c810b', 'Hyacinth', 'Black', '7729 Arcu Street', '(05) 1811 2498', '91', 2147483647),
('1789e0f0-b8dc-11ec-b4a6-7478270c810b', 'Addison', 'Atkinson', 'Ap #152-1786 Non St.', '(02) 2267 4192', '38', 2147483647),
('178ad4eb-b8dc-11ec-b4a6-7478270c810b', 'Yuli', 'Vang', '119-8874 Sed Rd.', '(07) 4136 6753', '30', 2147483647),
('178bbb50-b8dc-11ec-b4a6-7478270c810b', 'Lydia', 'Snow', '2634 Nunc St.', '(09) 8333 2219', '32', 2147483647),
('178ca003-b8dc-11ec-b4a6-7478270c810b', 'Hadassah', 'Townsend', '9805 Nisl. Road', '(03) 7816 4932', '17', 2147483647),
('178d84ec-b8dc-11ec-b4a6-7478270c810b', 'Rose', 'Love', '344-3070 Massa. St.', '(02) 8250 5240', '33', 2147483647),
('178e70d7-b8dc-11ec-b4a6-7478270c810b', 'Dalton', 'Mckenzie', 'Ap #689-3504 Aliquam Ave', '(05) 5935 3514', '7', 2147483647),
('178f8728-b8dc-11ec-b4a6-7478270c810b', 'Amanda', 'Bryan', '892-787 Dolor St.', '(07) 6375 1732', '44', 2147483647),
('1790a3a5-b8dc-11ec-b4a6-7478270c810b', 'Hanae', 'Wright', 'Ap #343-1447 Quam Rd.', '(06) 2652 2554', '42', 2147483647),
('17918396-b8dc-11ec-b4a6-7478270c810b', 'Chanda', 'Simmons', '593-2734 Vivamus Ave', '(08) 8770 7208', '14', 2147483647),
('179261db-b8dc-11ec-b4a6-7478270c810b', 'Gemma', 'Sykes', '524-131 Dapibus St.', '(05) 2458 3969', '47', 2147483647),
('17937657-b8dc-11ec-b4a6-7478270c810b', 'Maite', 'Guerra', '6168 Vitae St.', '(08) 2789 5321', '4', 2147483647),
('17946c0e-b8dc-11ec-b4a6-7478270c810b', 'Otto', 'Sutton', '571-2902 Magna Rd.', '(04) 7070 3612', '89', 2147483647),
('179510ff-b8dc-11ec-b4a6-7478270c810b', 'Jordan', 'Clements', '210-270 Dictum. Street', '(09) 0050 7515', '95', 2147483647),
('1795fd49-b8dc-11ec-b4a6-7478270c810b', 'Fay', 'Poole', 'P.O. Box 849, 5395 Elit Street', '(05) 0860 8013', '24', 2147483647),
('1796a5a2-b8dc-11ec-b4a6-7478270c810b', 'Margaret', 'Beck', '207-258 Eu Rd.', '(05) 5244 0701', '21', 2147483647),
('1797b168-b8dc-11ec-b4a6-7478270c810b', 'Henry', 'Peterson', '840-2933 Sagittis Rd.', '(06) 9075 9209', '55', 2147483647),
('1798c9c4-b8dc-11ec-b4a6-7478270c810b', 'Lyle', 'Hatfield', '764-4058 Purus Street', '(09) 2571 0502', '67', 2147483647),
('1799c9d7-b8dc-11ec-b4a6-7478270c810b', 'Silas', 'Cortez', '454-991 Cubilia Rd.', '(02) 9144 6976', '79', 2147483647),
('179a78d8-b8dc-11ec-b4a6-7478270c810b', 'Flynn', 'Pratt', 'Ap #842-1396 Nunc St.', '(09) 8370 8003', '54', 2147483647),
('179b0e43-b8dc-11ec-b4a6-7478270c810b', 'Norman', 'Alexander', '948 Metus. Street', '(02) 6423 7522', '99', 2147483647),
('179be48c-b8dc-11ec-b4a6-7478270c810b', 'Hoyt', 'Dominguez', '3356 Nullam Ave', '(04) 6594 6721', '74', 2147483647),
('179ca7e1-b8dc-11ec-b4a6-7478270c810b', 'Dai', 'Stark', 'Ap #689-5628 Pretium Ave', '(02) 8362 8845', '45', 2147483647),
('179d5e13-b8dc-11ec-b4a6-7478270c810b', 'Keefe', 'Elliott', '2051 Vehicula Rd.', '(07) 9746 2709', '48', 2147483647),
('179dee5c-b8dc-11ec-b4a6-7478270c810b', 'Cathleen', 'Holloway', 'P.O. Box 671, 2486 Laoreet Street', '(02) 5083 2203', '70', 2147483647),
('179e7c31-b8dc-11ec-b4a6-7478270c810b', 'Jennifer', 'Cotton', 'Ap #864-5751 Egestas. St.', '(09) 0247 4221', '69', 2147483647),
('179f0bf9-b8dc-11ec-b4a6-7478270c810b', 'Felicia', 'Fields', '5725 Eget, Ave', '(09) 4003 0899', '27', 2147483647),
('179fd902-b8dc-11ec-b4a6-7478270c810b', 'Geraldine', 'Crawford', 'P.O. Box 972, 7388 Varius Rd.', '(02) 9271 3188', '27', 2147483647),
('17a0a722-b8dc-11ec-b4a6-7478270c810b', 'Zahir', 'Mathis', 'Ap #209-7881 Luctus Road', '(03) 7443 4296', '2', 2147483647),
('17a1a6c0-b8dc-11ec-b4a6-7478270c810b', 'Abdul', 'Camacho', 'Ap #217-4893 Egestas. Road', '(06) 2937 2048', '54', 2147483647),
('17a249c5-b8dc-11ec-b4a6-7478270c810b', 'Edan', 'Morales', '8873 Nec Avenue', '(01) 2018 7045', '20', 2147483647),
('17a2e60d-b8dc-11ec-b4a6-7478270c810b', 'Britanni', 'Boyle', '853-9096 Arcu. Street', '(05) 8832 9936', '52', 2147483647),
('17a38783-b8dc-11ec-b4a6-7478270c810b', 'Mohammad', 'Leach', 'P.O. Box 194, 7717 Nec, St.', '(05) 7326 5985', '83', 2147483647),
('17a42822-b8dc-11ec-b4a6-7478270c810b', 'Florence', 'Burke', 'Ap #255-9256 Nunc St.', '(01) 7897 6064', '41', 2147483647),
('17a50290-b8dc-11ec-b4a6-7478270c810b', 'Regina', 'Crosby', 'Ap #378-1772 Dolor Av.', '(03) 0933 4826', '26', 2147483647),
('17a5c107-b8dc-11ec-b4a6-7478270c810b', 'Darryl', 'Shields', 'Ap #860-7192 Aenean Rd.', '(09) 9682 5717', '6', 2147483647),
('17a66c54-b8dc-11ec-b4a6-7478270c810b', 'Aquila', 'Lopez', 'P.O. Box 444, 9777 Et Street', '(01) 4026 9671', '53', 2147483647),
('17a710bb-b8dc-11ec-b4a6-7478270c810b', 'Sage', 'Black', 'Ap #459-6550 Vitae, Road', '(04) 7345 8942', '9', 2147483647),
('17a7aad8-b8dc-11ec-b4a6-7478270c810b', 'Matthew', 'Hoffman', '106-9011 Erat St.', '(05) 6918 1046', '74', 2147483647),
('17a88120-b8dc-11ec-b4a6-7478270c810b', 'Xanthus', 'Moon', '643-679 Ultrices. Rd.', '(06) 1368 1007', '13', 2147483647),
('17a93024-b8dc-11ec-b4a6-7478270c810b', 'Yael', 'Moore', '8670 Et Avenue', '(06) 1714 3563', '22', 2147483647),
('17aa07b0-b8dc-11ec-b4a6-7478270c810b', 'TaShya', 'Washington', 'Ap #720-3011 Orci Rd.', '(02) 5492 6393', '88', 2147483647),
('17aaabac-b8dc-11ec-b4a6-7478270c810b', 'Cassady', 'Rodriquez', 'P.O. Box 420, 4300 Mauris Rd.', '(03) 7744 3946', '12', 2147483647);

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cost`, `payment`, `address`, `item_count`, `date`, `customer_id`) VALUES
('5ee3facb-b8f2-11ec-bf0b-7478270c810b', '36.00', 'Credit Card', '86 Clifton Street, NOWIE, Victoria(VIC), 3585', 1, '2022-04-06', '17526db4-b8dc-11ec-b4a6-7478270c810b'),
('e74f3ebb-b96f-11ec-9726-7478270c810b', '36.00', 'Credit Card', '86 Clifton Street, NOWIE, Victoria(VIC), 3585', 1, '2022-04-06', '17526db4-b8dc-11ec-b4a6-7478270c810b');

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cost`, `retail_price`, `stock`, `supplier_id`) VALUES
('6630cf7c-8af4-44d5-aa5e-73fd95738e4c', 'skin care', '30.00', '90.00', 800, '5DC09651-2462-1BDE-0358-0D4F6AC65246'),
('6643b844-b971-11ec-9726-7478270c810b', 'skin care', '30.00', '90.00', 800, 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('937c1300-9063-438e-a0ff-813afdadac21', 'product1', '40.00', '78.00', 12, '5DC09651-2462-1BDE-0358-0D4F6AC65246'),
('9e89ff0f-b971-11ec-9726-7478270c810b', 'skin care', '30.00', '90.00', 800, 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('9e8c6629-b971-11ec-9726-7478270c810b', 'skin care', '30.00', '90.00', 800, 'f275859e-b8dc-11ec-b4a6-7478270c810b'),
('9e8ee1da-b971-11ec-9726-7478270c810b', 'skin care', '30.00', '90.00', 800, 'f275bd04-b8dc-11ec-b4a6-7478270c810b'),
('9e90159d-b971-11ec-9726-7478270c810b', 'skin care', '30.00', '90.00', 800, 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('9e916ec9-b971-11ec-9726-7478270c810b', 'skin care', '30.00', '90.00', 800, 'f275cde4-b8dc-11ec-b4a6-7478270c810b'),
('9e931173-b971-11ec-9726-7478270c810b', 'skin care', '30.00', '90.00', 800, 'f275a10f-b8dc-11ec-b4a6-7478270c810b'),
('9e946cff-b971-11ec-9726-7478270c810b', 'skin care', '30.00', '90.00', 800, 'f275bd04-b8dc-11ec-b4a6-7478270c810b'),
('9e9588ac-b971-11ec-9726-7478270c810b', 'skin care', '30.00', '90.00', 800, 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('9e96a5ca-b971-11ec-9726-7478270c810b', 'skin care', '30.00', '90.00', 800, 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('9e980896-b971-11ec-9726-7478270c810b', 'skin care', '30.00', '90.00', 800, 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('UUID', 'skin care', '30.00', '90.00', 800, 'f27574d0-b8dc-11ec-b4a6-7478270c810b');

--
-- Dumping data for table `product_orders`
--

INSERT INTO `product_orders` (`id`, `amount`, `product_id`, `order_id`) VALUES
('6eb849c5-b8f2-11ec-bf0b-7478270c810b', '1', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '5ee3facb-b8f2-11ec-bf0b-7478270c810b');

--
-- Dumping data for table `product_restock`
--

INSERT INTO `product_restock` (`id`, `amount`, `cost`, `product_id`, `rp_id`) VALUES
('8124f45a-b8f2-11ec-bf0b-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c5302733-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c53288da-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c5351d61-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c5365c1d-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c537c60b-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c5393dfd-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c53af75a-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c53c2fbb-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c53d600b-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c53e7b3a-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c53f9d28-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c5411e0d-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c5429566-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c5440186-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c5457702-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c546af29-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c547caca-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c549373e-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c54ae9d6-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb'),
('c54c4dfd-b971-11ec-9726-7478270c810b', 1, '50.00', '6630cf7c-8af4-44d5-aa5e-73fd95738e4c', '38ac590b-2cfc-49fd-aef8-ec287b56f7cb');

--
-- Dumping data for table `restocking_orders`
--

INSERT INTO `restocking_orders` (`id`, `item_count`, `cost`, `payment`, `date`, `product_arrival_date`, `supplier_id`) VALUES
('38ac590b-2cfc-49fd-aef8-ec287b56f7cb', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6a059cf-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6a2983a-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6a51474-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6a6786c-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6a7cc8f-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6a942f3-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6aaffa4-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6ac325b-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6adae09-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6af6dc2-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6b0e5ac-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6b22475-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6b34c09-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6b47b73-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6b5dc6c-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6b78dea-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6b9161a-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6ba9512-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6bbe192-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b'),
('f6bd1ae1-b971-11ec-9726-7478270c810b', 7, '400.00', '3972 Ferry Street,Gadsde,35901,ALn', '2022-04-07', '2022-04-10', 'f27574d0-b8dc-11ec-b4a6-7478270c810b');

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `first_name`, `last_name`, `email`, `phone`, `role`) VALUES
('b5a582a6-b8dc-11ec-b4a6-7478270c810b', 'Emery', 'Frederick', 'Aenean.eget.metus@auctorvitae.org', '(09) 6054 2917', 'Advertising'),
('b5a782d1-b8dc-11ec-b4a6-7478270c810b', 'Brynne', 'Watsons', 'tellus.Phasellus@a.ca', '(05) 7605 1035', 'Advertising'),
('b5a9fe16-b8dc-11ec-b4a6-7478270c810b', 'Sebastian', 'Graves', 'elit@massa.ca', '(02) 9009 0738', 'Customer Relations'),
('b5ab3ff4-b8dc-11ec-b4a6-7478270c810b', 'Quyn', 'Gomez', 'eget.lacus@Donec.net', '(05) 0875 8661', 'Research and Development'),
('b5ac81c5-b8dc-11ec-b4a6-7478270c810b', 'Walter', 'Sexton', 'commodo.hendrerit.Donec@ornarelectusjusto.ca', '(05) 8791 7059', 'Human Resources'),
('b5ada0ad-b8dc-11ec-b4a6-7478270c810b', 'Porter', 'Sawyer', 'amet@est.edu', '(03) 7797 6129', 'Advertising'),
('b5aeb8da-b8dc-11ec-b4a6-7478270c810b', 'Farrah', 'Davenport', 'aliquam.eu@risusDonec.net', '(05) 4711 0558', 'Advertising'),
('b5b04cb6-b8dc-11ec-b4a6-7478270c810b', 'Melyssa', 'Bishop', 'sociosqu@primisinfaucibus.ca', '(03) 0171 2337', 'Research and Development');

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `business_name`, `address`, `phone`, `email`, `order_count`, `abn`) VALUES
('5DC09651-2462-1BDE-0358-0D4F6AC65246', 'Arcu LLP', 'P.O. Box 453, 5366 Varius Road', '(07) 5231 1972', 'fringilla@necmetus.edu', 62, 2147483647),
('f27574d0-b8dc-11ec-b4a6-7478270c810b', 'Tempor Incorporated', '501-7101 Mollis. Av.', '(07) 4726 3451', 'blandit.at.nisi@liberoettristique.com', 12, 2147483647),
('f275859e-b8dc-11ec-b4a6-7478270c810b', 'Ante Bibendum Corporation', '233-5527 Velit St.', '(06) 8837 6763', 'velit@felisegetvarius.co.us', 19, 2147483647),
('f27593a6-b8dc-11ec-b4a6-7478270c810b', 'Enim Nec Tempus Company', '214-7086 Justo Road', '(05) 9870 5025', 'laoreet@sedsem.org', 74, 2147483647),
('f275a10f-b8dc-11ec-b4a6-7478270c810b', 'Sit Amet Foundation', 'P.O. Box 377, 3265 Arcu Street', '(01) 9959 9222', 'fringilla.Donec@sem.edu', 2, 2147483647),
('f275ae70-b8dc-11ec-b4a6-7478270c810b', 'Ornare Sagittis Felis PC', '7847 Duis Street', '(08) 4357 7750', 'ipsum@magnaet.edu', 53, 2147483647),
('f275bd04-b8dc-11ec-b4a6-7478270c810b', 'Pede Ltd', '5563 Sed Street', '(01) 3650 7285', 'felis.purus@velvenenatisvel.co.uk', 22, 2147483647),
('f275cde4-b8dc-11ec-b4a6-7478270c810b', 'Diam Luctus LLC', '1687 Consectetuer, Ave', '(01) 9427 6707', 'torquent.per@auctorveliteget.net', 47, 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
