SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
  time_zone = "+00:00";
  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;
--
  -- データベース: `easable`
  USE easable_ec --
  --
  -- テーブルの構造 `user`
  --
  CREATE TABLE `user` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `password` varchar(255) NOT NULL,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `cart_num` varchar(255),
    `addressee` varchar(255),
    `address_num` varchar(255),
    `login_status` int(1) NOT NULL DEFAULT 0,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
  -- テーブルの構造 `category`
  --
  CREATE TABLE `category` (
    `category_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `category_name` varchar(128) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
  -- テーブルの構造 `product`
  --
  CREATE TABLE `product` (
    `product_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `amount` varchar(255) NOT NULL,
    `category_id` varchar(255) NOT NULL,
    `description` varchar(255) NOT NULL,
    `price` varchar(255) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP CONSTRAINT `user_server_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
  -- テーブルの構造 `cart`
  --
  CREATE TABLE `cart` (
    `cart_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,
    `product_id` int(11) NOT NULL,
    `category_id` varchar(255) NOT NULL,
    `quantity` varchar(128) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP CONSTRAINT `user_server_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) CONSTRAINT `user_server_fk` FOREIGN KEY (`product_id`) REFERENCES `user` (`product_id`) CONSTRAINT `user_server_fk` FOREIGN KEY (`category_id`) REFERENCES `user` (`category_id`)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
  -- テーブルの構造 `review`
  --
  CREATE TABLE `review` (
    `review_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `star` varchar(128) NOT NULL,
    `title` varchar(128) NOT NULL,
    `content` varchar(128) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
  -- テーブルの構造 `history`
  --
  CREATE TABLE `history` (
    `product_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_id` varchar(255) NOT NULL,
    `category_id` varchar(128) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
  -- テーブルの構造 `purchase`
  --
  CREATE TABLE `purchase` (
    `product_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_id` varchar(128) NOT NULL,
    `category_id` varchar(128) NOT NULL,
    `addresse` varchar(128) NOT NULL,
    `card_num` varchar(128) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
  -- テーブルの構造 `wish`
  --
  CREATE TABLE `wish` (
    `product_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_id` varchar(128) NOT NULL,
    `category_id` varchar(128) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
COMMIT;
INSERT INTO
  user (password, name, email)
VALUES
  ('admin', 'admin', 'admin@admin.com');
INSERT INTO
  user (password, name, email)
VALUES
  ('test', 'test', 'test@test.com');
INSERT INTO
  user (password, name, email)
VALUES
  ('chil', 'chil', 'chil@chil.com');
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;