BEGIN TRANSACTION;

-- CREATE TABLE menu (
-- 	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
-- 	menu_name TEXT NOT NULL UNIQUE,
-- 	description TEXT NOT NULL,
--     price TEXT NOT NULL,
--     diet_rest_id INTEGER NOT NULL UNIQUE,
--     category_id INTEGER NOT NULL UNIQUE
-- );

CREATE TABLE `menu`
(
	`id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`menu_name` TEXT NOT NULL,
	`description` TEXT,
    `price` INTEGER,
	`diet_id` INTEGER,
	`category_id` INTEGER NOT NULL
);

CREATE TABLE `categories`
(
	`id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`category` TEXT NOT NULL UNIQUE
);

CREATE TABLE `diets`
(
	`id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`diet` TEXT NOT NULL UNIQUE
);

CREATE TABLE `images`
(
	`id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`menu_id` INTEGER,
	`image_name` TEXT,
    `image_ext` TEXT NOT NULL,
    `description` TEXT,
	`source` TEXT,
    `review_id` INTEGER
);

CREATE TABLE `reviews`
(
	`id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`reviewer` TEXT,
    `email` TEXT,
	`rating` INTEGER,
    `comment` TEXT
);

-- TODO: initial seed data

-- INSERT INTO `menu` (id, menu_name, description, price, diet_id, category_id) VALUES (1, "Mandoo", "Steamed or fried dumplings available in beef or vegetable", null, null, 1);
-- INSERT INTO `menu` (id, menu_name, description, price, diet_id, category_id) VALUES (2, "Pa Jun", "Lightly pan-fried wheat batter with scallions", null, null, 1);
-- INSERT INTO `menu` (id, menu_name, description, price, diet_id, category_id) VALUES (3, "Kimchi Pa Jun", "Lightly pan-fried wheat batter with kimchi", null, null, 1);
-- INSERT INTO `menu` (id, menu_name, description, price, diet_id, category_id) VALUES (4, "Hae Mul Pa Jun", "Lightly pan-fried wheat batter with mixed seafood and scallions", null, null, 1);
-- INSERT INTO `menu` (id, menu_name, description, price, diet_id, category_id) VALUES (5, "Dukk Bokki", "Rice cakes with vegetables in spicy bean paste sauce", null, null, 1);

-- INSERT INTO `categories` (id, category) VALUES (1, "Appetizers");
-- INSERT INTO `categories` (id, category) VALUES (2, "Salads");
-- INSERT INTO `categories` (id, category) VALUES (3, "Broiled Fish");
-- INSERT INTO `categories` (id, category) VALUES (4, "Teriyaki");
-- INSERT INTO `categories` (id, category) VALUES (5, "Pan Broiled Dishes");
-- INSERT INTO `categories` (id, category) VALUES (6, "Rice Dishes");
-- INSERT INTO `categories` (id, category) VALUES (7, "A La Carte");
-- INSERT INTO `categories` (id, category) VALUES (8, "Casseroles");
-- INSERT INTO `categories` (id, category) VALUES (9, "Korean Classics");
-- INSERT INTO `categories` (id, category) VALUES (10, "Korean BBQ");
-- INSERT INTO `categories` (id, category) VALUES (11, "Noodles");

-- INSERT INTO `diets` () VALUES ();

-- INSERT INTO `images` () VALUES ();

-- INSERT INTO `reviews` () VALUES ();

-- TODO: FOR HASHED PASSWORDS, LEAVE A COMMENT WITH THE PLAIN TEXT PASSWORD!

COMMIT;
