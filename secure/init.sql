-- TODO: Put ALL SQL in between `BEGIN TRANSACTION` and `COMMIT`
BEGIN TRANSACTION;

-- TODO: create tables

CREATE TABLE `menu`
(
	`id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`menu_name` TEXT NOT NULL,
	`description` TEXT,
    `price` INTEGER NOT NULL,
	`diet_id` INTEGER,
	`category_id` INTEGER
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
	`rating` INTEGER,
    `comment` TEXT
);

-- TODO: initial seed data

-- INSERT INTO `menu` () VALUES ();

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
