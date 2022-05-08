

CREATE TABLE `customers` (
  `id` char(36) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `username` varchar(36) NOT NULL,
  `password` varchar(64) NOT NULL,
 `address` varchar(200) NOT NULL,
 `email` varchar(64) NOT NULL,
 `phone` varchar(12) NOT NULL,
 `abn` varchar(11)
);

ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `abn` (`abn`);

CREATE TABLE `suppliers` (
  `id` char(36) NOT NULL,
  `business_name` varchar(64) NOT NULL,
  `contact_name` varchar(64) NOT NULL,
 `address` varchar(200) NOT NULL,
 `email` varchar(64) NOT NULL,
 `phone` varchar(12) NOT NULL,
 `abn` varchar(11)
);
ALTER TABLE `suppliers` 
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `abn` (`abn`);




CREATE TABLE `staffs` (
  `id` char(36) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
 `username` varchar(36) NOT NULL,
`password` varchar(64) NOT NULL,
 `address` varchar(200) NOT NULL,
 `email` varchar(36) NOT NULL,
 `phone` varchar(12) NOT NULL
);

ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);


CREATE TABLE `products` (
  `id` char(36) NOT NULL,
  `name` varchar(36) NOT NULL,
  `cost` decimal(9,2) NOT NULL,
  `retail_price` decimal(9,2) NOT NULL,
`quantity` int(5) NOT NULL,
`supplier_id` char(36) NOT NULL
);

ALTER TABLE `products` 
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_supplier` (`supplier_id`) ;

ALTER TABLE `products` 
  ADD CONSTRAINT `fk_product_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);


CREATE TABLE `orders` (
  `id` char(36) NOT NULL,
  `customer_id` char(36) NOT NULL,
  `date` date NOT NULL,
`payment_type` varchar(36) NOT NULL,
`quantity` int(5) NOT NULL
);

ALTER TABLE `orders` 
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer_orders` (`customer_id`);

ALTER TABLE `orders` 
  ADD CONSTRAINT `fk_customer_orders` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);


CREATE TABLE `customers_order_detail` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `order_id` char(36) NOT NULL,
  `price` decimal(9,2) NOT NULL
);

ALTER TABLE `customers_order_detail` 
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customers_order_detail_product` (`product_id`),
  ADD KEY `fk_customers_order_detail_order` (`order_id`);

ALTER TABLE `customers_order_detail` 
  ADD CONSTRAINT `fk_customers_order_detail_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `fk_customers_order_detail_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);


CREATE TABLE `restockings` (
  `id` char(36) NOT NULL,
  `staff_id` char(36) NOT NULL,
  `date` date NOT NULL,
`payment_type` varchar(36) NOT NULL,
`quantity` int(5) NOT NULL
);
ALTER TABLE `restockings` 
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_staff_restockings` (`staff_id`);

ALTER TABLE `restockings` 
  ADD CONSTRAINT `fk_staff_restockings` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`);


CREATE TABLE `staffs_restocking_detail` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `restocking_id` char(36) NOT NULL,
  `quantity` int(5) NOT NULL
);

ALTER TABLE `staffs_restocking_detail` 
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_staffs_restocking_detail_product` (`product_id`),
  ADD KEY `fk_staffs_restocking_detail_restocking` (`restocking_id` );

ALTER TABLE `staffs_restocking_detail` 
  ADD CONSTRAINT `fk_restocking_orders_detail_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_restocking_orders_detail_restocking` FOREIGN KEY (`restocking_id`) REFERENCES `restockings` (`id`);

CREATE TABLE `carts` (
  `id` char(36) NOT NULL,
  `customer_id` char(36) NOT NULL,
  `items_no` int(4) NOT NULL,
  `cost` decimal(9,2) NOT NULL
);

ALTER TABLE `carts` 
  ADD PRIMARY KEY (`id`),
ADD KEY `fk_cart_customer` (`customer_id`);

ALTER TABLE `carts` 
  ADD CONSTRAINT `fk_cart_customer` FOREIGN KEY (`customer_id`)REFERENCES `customers` (`id`);

CREATE TABLE `customer_products_cart_detail` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `cart_id` char(36) NOT NULL,
`cost` decimal(9,2) NOT NULL,
  `quantity` int(5) NOT NULL
);

ALTER TABLE `customer_products_cart_detail` 
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer_products_cart_detail_product` (`product_id`),
  ADD KEY `fk_customer_products_cart_detail_cart` (`cart_id` );

ALTER TABLE `customer_products_cart_detail` 
  ADD CONSTRAINT `fk_customer_products_cart_detail_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_customer_products_cart_detail_cart` FOREIGN KEY (`cart_id` )REFERENCES `carts` (`id`);

CREATE TABLE `product_images` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `filename` varchar(64)
);

ALTER TABLE `product_images` 
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_images_product` (`product_id`);

ALTER TABLE `product_images` 
  ADD CONSTRAINT `fk_product_images_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);





