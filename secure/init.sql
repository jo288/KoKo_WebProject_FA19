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
	`reviewer` TEXT NOT NULL,
	`date` TEXT NOT NULL,
    `email` TEXT,
	`rating` INTEGER NOT NULL,
	`review_title` TEXT,
    `comment` TEXT	
);

INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment) 
VALUES (1, "Kaitlyn", "2019-4-27", "kml284@cornell.edu", 4, "ok seed", "seed comment");
INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment) 
VALUES (2, "Kaitlyn2", "2018-4-27", "kml284@cornell.edu", 1, "ok2 seed", "seed2 comment");
INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment) 
VALUES (3, "Kaitlyn3", "2019-3-27", "kml284@cornell.edu", 3, "ok3 seed", "seed3 comment");
INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment) 
VALUES (4, "Kaitlyn4", "2019-4-29", "kml284@cornell.edu", 3, "ok3 seed", "seed3 comment");
INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment) 
VALUES (5, "Kaitlyn", "2017-6-27", "kml284@cornell.edu", 5, "ok3 seed", "seed3 comment");
INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment) 
VALUES (6, "Kaitlyn6", "2019-2-15", "kml284@cornell.edu", 2, "ok3 seed", "seed3 comment");
INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment) 
VALUES (7, "Kaitlyn7", "2019-4-27", "kml284@cornell.edu", 2, "ok3 seed", "seed3 comment");

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
