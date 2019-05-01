BEGIN TRANSACTION;

CREATE TABLE users (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	username TEXT NOT NULL UNIQUE,
	password TEXT NOT NULL
);

INSERT INTO users (id, username, password)
VALUES (1, 'ec23', '$2y$10$sBphaM4LM8le9DDE4gdxguSrBxiRU9qi0yrBXhIA4lLDm48M3yqh2'); -- password: test
INSERT INTO users (id, username, password)
VALUES (2, 'abc123', '$2y$10$sBphaM4LM8le9DDE4gdxguSrBxiRU9qi0yrBXhIA4lLDm48M3yqh2'); -- password: test

-- Sessions Table
CREATE TABLE `sessions` (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	user_id INTEGER NOT NULL,
	session TEXT NOT NULL UNIQUE
);


CREATE TABLE `menu`
(
	`id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`menu_name` TEXT NOT NULL,
	`description` TEXT,
    `price` INTEGER,
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

CREATE TABLE `diet_tags`
(
	`id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`menu_id` INTEGER NOT NULL,
	`diet_id` INTEGER NOT NULL
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
VALUES (1, "Kaitlyn", "2019-4-27", "kml284@cornell.edu", 4, "Really Great Food", "I loved the seafood");
INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment)
VALUES (2, "Kaitlyn2", "2018-4-27", "kml284@cornell.edu", 1, "Yuck", "I don't like korean food");
INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment)
VALUES (3, "Kaitlyn3", "2019-3-27", "kml284@cornell.edu", 3, "Decent Food", "It was just okay");
INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment)
VALUES (4, "Kaitlyn4", "2019-4-29", "kml284@cornell.edu", 3, "Pretty Good", "I liked the chicken");
INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment)
VALUES (5, "Kaitlyn", "2017-6-27", "kml284@cornell.edu", 5, "AMAZING", "Went there for lunch with friends and really enjoyed the food");
INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment)
VALUES (6, "Kaitlyn6", "2019-2-15", "kml284@cornell.edu", 2, "Not worth the wait", "The food was good but took a long time to get it");
INSERT INTO `reviews` (id, reviewer, date, email, rating, review_title, comment)
VALUES (7, "Kaitlyn7", "2019-4-27", "kml284@cornell.edu", 2, "Yuck again", "The seafood was bland and orange");

-- MENU SEED DATA
-- appetizers
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (1, "Mandoo", "Steamed or fried dumplings available in beef or vegetable", 4.99, 1);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (2, "Pa Jun", "Lightly pan-fried wheat batter with scallions", 5.99, 1);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (3, "Kimchi Pa Jun", "Lightly pan-fried wheat batter with kimchi", 6.99, 1);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (4, "Hae Mul Pa Jun", "Lightly pan-fried wheat batter with mixed seafood and scallions", 6.99, 1);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (5, "Dukk Bokki", "Rice cakes with vegetables in spicy bean paste sauce", 5.99, 1);
-- salads
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (6, "House Salad", "Lettuce and sesame with special dressing", 4.99, 2);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (7, "Seafood Salad", "House salad with mixed seafood", 6.99, 2);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (8, "Tofu Salad", "House salad with tofu", 5.99, 2);
-- broiled fish
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (9, "Godeunguh Gui", "Specially broiled mackerel", 10.99, 3);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (10, "Salmon Gui", "Specially grilled salmon", 15.99, 3);
-- teriyaki
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (11, "Salmon Teriyaki", "Broiled fresh salmon glazed with sweet teriyaki sauce", 15.99, 4);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (12, "Chicken Teriyaki", "Broiled tender chicken glazed with sweet teriyaki sauce", 13.99, 4);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (13, "Shrimp Teriyaki", "Broiled shrimp glazed with sweet teriyaki sauce", 16.99, 4);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (14, "Tofu Teriyaki", "Stir-fried tofu glazed with sweet teriyaki sauce", 13.99, 4);
-- pan-fried dishes
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (15, "Doobu Yachae Bokeum", "Stir-fried tofu and vegetables in sweet brown sauce", 13.99, 5);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (16, "Jae Yook Bokeum", "Pan-fried pork sautéed in spicy sauce", 14.99, 5);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (17, "Doobu Kimchi Bokeum", "Pan-fried kimchi and rice cakes in spicy sauce with tofu and sliced pork", 14.99, 5);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (18, "Oh Jing Uh Bokeum", "Spicy stir-friend calamari with vegetables", 14.99, 5);
-- rice dishes
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (19, "Bibim Bap", "Chicken, Tofu, Calamari, or Seafood with assorted vegetables, egg, and rice served with spicy paste on the side", 10.99, 6);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (20, "Dol Sot Bibim Bap", "Bibim Bap served in a sizzling stone pot (same choices as bibim bap)", 12.99, 6);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (21, "Bokeum Bap", "Shrimp, chicken, or kimchi stir-fried rice with vegetables and egg", 10.99, 6);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (22, "Omelet Rice", "Pan-fried rice with vegetables wrapped in egg with ketchup drizzled on top", 11.99, 6);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (23, "Ja Jang Bap", "White rice with fried egg served with black soy bean sauce with onion, pork, and zucchini", 10.99, 6);
-- a la carte
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (24, "Tank Soo Yook", "Fried pork or chicken with vegetables in sweet and sour sauce", 14.99, 7);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (25, "Kan Pung Gi", "Fried chicken or shrimp in sweet, sour, and spicy sauce", 14.99, 7);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (26, "Don Katsu", "Deep fried pork loin in special sauce served with salad and fruit", 12.99, 7);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (27, "Chicken Katsu", "Deep fried chicken in special sauce served with salad and fruit", 12.99, 7);
-- casseroles
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (28, "Hae Mul Jungol", "Cod, whiting fish, calamari, mussels, tofu, rice cake, and udon with vegetables served in a spicy broth", 32.99, 8);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (29, "Budae Jungol", "Kimchi, pork, sausages, ham, tofu, cheese, and ramyun or vermicelli noodles served in a spicy broth", 32.99, 8);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (30, "Kimchi Mandoo Jungol", "Dumplings, rice cake, kimchi, tofu, pork, scallions, and ramyun or vermicelli noodles served in a spicy broth", 32.99, 8);
-- korean classics
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (31, "Dwen Jang Jjigae", "Traditional Korean soy bean paste soup with tofu and vegetables", 10.99, 9);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (32, "Kimchi Jjigae", "Traditional Korean kimchi soup with tofu and pork", 10.99, 9);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (33, "Soon Doobu Jjigae", "Spicy soft tofu soup with seafood, chicken, beef, or pork", 10.99, 9);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (34, "Budae Jjigae", "Kimchi, pork, sausages, ham, tofu, cheese, and scallions served in a spicy soup", 12.99, 9);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (35, "Gochu Jang Doobu Jjigae", "Hot pepper paste soup with tofu and pork", 12.99, 9);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (36, "Yuk Gae Jang", "Shredded beef with scallions in a spicy broth", 13.99, 9);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (37, "Kalbi Tang", "Stewed short ribs in beef broth", 13.99, 9);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (38, "Dduk Gook", "Sliced rice cake with beef in beef broth", 10.99, 9);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (39, "Dduk Mandoo Gook", "Sliced rice cake and dumplings in beef soup", 10.99, 9);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (40, "Mandoo Gook", "Dumplings in beef soup", 10.99, 9);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (41, "Daegoo Maewoon Tang", "Spicy cod and mussel casserole with tofu, cabbage, and scallions", 13.99, 9);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (42, "Saengtae Maewoon Tang", "Whiting fish and mussel casserole with tofu, cabbage, and scallions", 13.99, 9);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (43, "Sukkkuh Maewoon Tang", "Spicy cod, whiting fish, calamari, and mussel casserole with tofu, cabbage, and scallions", 13.99, 9);
-- korean bbq
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (44, "Bul Go Gi", "Thinly sliced beef tenderloin marinated in house special soy sauce", 15.99, 10);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (45, "Kalbi", "Specially marinated short ribs in house special soy sauce", 23.99, 10);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (46, "Daeji Bul Go Gi", "Thinly sliced pork marinated in house special ginger and spicy bean paste sauce", 13.99, 10);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (47, "Spicy Dak Gui", "Specially marinated chicken in special ginger and spicy bean paste sauce", 13.99, 10);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (48, "Ddook Bae Gi Bul Go Gi", "Bul Go Gi served in a pot with sauce, vermicelli noodles and scallions", 16.99, 10);
-- noodles in soup
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (49, "Udon", "Udon noodles with vegetables in a vegetable broth", 10.99, 11);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (51, "Nabe Udon", "Udon served with chicken", 11.99, 11);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (52, "Tempura Udon", "Udon served with shrimp tempura", 12.99, 11);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (53, "Ramyun", "", 8.99, 11);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (54, "Tempura Ramyun", "Vegetable ramyun served with shrimp tempura", 10.99, 11);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (55, "Cham Pong", "Thick noodles with seafood and vegetables served in a spicy broth", 12.99, 11);
-- noodles in sauce
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (56, "Jap Chae", "Pan-fried vermicelli noodles and vegetables", 10.99, 12);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (57, "Ja Jang Myun", "Thick noodles in black soy bean sauce with onion, pork, and zucchini", 10.99, 12);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (58, "Rabokki", "Rice cakes, ramyun, vegetables, and fried dumplings in spicy bean paste sauce", 10.99, 12);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (59, "Ubokki", "Rabokki with udon noodles instead of ramyun", 11.99, 12);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (60, "Udon Bokeum", "Pan-fried udon noodles in brown sauce and vegetables", 12.99, 12);
-- cold noodles
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (61, "Jjol Myun", "Thick cold noodles with vegetables in spicy pepper paste", 10.99, 13);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (62, "Mul Naeng Myun", "Thin noodles with radish, cucumber, boiled egg, beef, and thinly sliced apples served in a cold broth", 12.99, 13);
INSERT INTO `menu` (id, menu_name, description, price, category_id) VALUES (63, "Bibim Naeng Myun", "Mul Naeng Myun with spicy sauce instead of cold broth", 13.99, 13);

-- DIET TAGS SEED DATA
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (1, 1, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (2, 2, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (3, 5, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (4, 5, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (5, 6, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (6, 6, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (7, 6, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (8, 8, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (9, 8, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (10, 9, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (11, 10, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (12, 14, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (13, 14, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (14, 15, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (15, 15, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (16, 18, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (17, 19, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (18, 19, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (19, 19, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (20, 20, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (21, 20, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (22, 20, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (23, 21, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (24, 21, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (25, 21, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (26, 22, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (27, 22, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (28, 22, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (29, 31, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (30, 31, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (31, 31, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (32, 32, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (33, 32, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (34, 32, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (35, 33, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (36, 33, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (37, 33, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (38, 34, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (39, 35, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (40, 35, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (41, 35, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (42, 36, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (43, 37, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (44, 38, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (45, 41, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (46, 42, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (47, 43, 3);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (48, 49, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (49, 49, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (50, 49, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (51, 53, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (52, 56, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (53, 56, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (54, 58, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (55, 59, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (56, 60, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (57, 60, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (58, 61, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (59, 61, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (60, 62, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (61, 62, 2);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (62, 63, 1);
INSERT INTO `diet_tags` (id, menu_id, diet_id) VALUES (63, 63, 2);

-- CATEGORIES SEED DATA
INSERT INTO `categories` (id, category) VALUES (1, "Appetizers");
INSERT INTO `categories` (id, category) VALUES (2, "Salads");
INSERT INTO `categories` (id, category) VALUES (3, "Broiled Fish");
INSERT INTO `categories` (id, category) VALUES (4, "Teriyaki");
INSERT INTO `categories` (id, category) VALUES (5, "Pan Broiled Dishes");
INSERT INTO `categories` (id, category) VALUES (6, "Rice Dishes");
INSERT INTO `categories` (id, category) VALUES (7, "A La Carte");
INSERT INTO `categories` (id, category) VALUES (8, "Casseroles");
INSERT INTO `categories` (id, category) VALUES (9, "Korean Classics");
INSERT INTO `categories` (id, category) VALUES (10, "Korean BBQ");
INSERT INTO `categories` (id, category) VALUES (11, "Noodles in Soup");
INSERT INTO `categories` (id, category) VALUES (12, "Noodles in Sauce");
INSERT INTO `categories` (id, category) VALUES (13, "Cold Noodles");

-- DIETS SEED DATA
INSERT INTO `diets` (id, diet) VALUES (1, "Vegetarian");
INSERT INTO `diets` (id, diet) VALUES (2, "Vegan");
INSERT INTO `diets` (id, diet) VALUES (3, "GlutenFree");

-- IMAGES SEED DATA
INSERT INTO images
	(id, menu_id, image_name, image_ext, description, source)
VALUES
	(1, 62, 'mulnaengmyun1.jpg', 'jpg', 'Mul Naeng Myun', 'Jinju Ouck');
INSERT INTO images
	(id, menu_id, image_name, image_ext, description, source)
VALUES
	(2, 62, 'mulnaengmyun2.jpg', 'jpg', 'Mul Naeng Myun', 'Jinju Ouck');
-- INSERT INTO `images` () VALUES ();

-- TODO: FOR HASHED PASSWORDS, LEAVE A COMMENT WITH THE PLAIN TEXT PASSWORD!

COMMIT;
