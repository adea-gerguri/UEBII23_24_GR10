/**
 * Databaza, e vet instancushme.
 * SIGUROHUNI QE NUK KENI DATABAZE ME EMRIN "web2" PER ARSYE QE KJO SKRIPTE E FSHINE NESE E KENI!!
 */

drop database if exists web2;
create database web2;
use web2;

-- select * from deletedusers;
create table Users(
	id integer auto_increment,
    firstName nvarchar(50),
    lastName nvarchar(50),
    gender nvarchar(7),
	email nvarchar(100),
    card_number bigint,
    passwordi nvarchar (200),
    expiration_date date,
    cvv char(200),
    primary key(id)
);
-- select * from Users;
create table Product_Details(
	details_id integer auto_increment,
    first_Sentence nvarchar(200),
	second_Sentence nvarchar(200),
    third_Sentence nvarchar(200),
    primary key (details_id) 
);

create table Products(
	pid integer auto_increment,
    productName nvarchar(50),
    reference_code nvarchar(50),
    img_url nvarchar(150),
    dimensions nvarchar(50),
    price char(10),
    details_id integer,
    primary key(pid),
    foreign key(details_id) references Product_Details(details_id)
);

-- select * from Users;
-- drop table Bags;
CREATE TABLE Bags (
    Product_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    Image_URL VARCHAR(255) NOT NULL,
    Description TEXT,
    Material VARCHAR(100),
    Color VARCHAR(50)
);
CREATE TABLE Casual_Wear (
    Product_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    Image_URL VARCHAR(255) NOT NULL,
    Description TEXT,
    Size ENUM('XS', 'S', 'M', 'L', 'XL', 'XXL'),
    Color VARCHAR(50)
);
CREATE TABLE Dresses (
    Product_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    Image_URL VARCHAR(255) NOT NULL,
    Description TEXT,
    Size ENUM('XS', 'S', 'M', 'L', 'XL', 'XXL'),
    Length VARCHAR(50),
    Color VARCHAR(50)
);
CREATE TABLE Kids_Shoes (
    Product_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    Image_URL VARCHAR(255) NOT NULL,
    Description TEXT,
    Shoe_Size ENUM('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13'),
    Color VARCHAR(50)
);
CREATE TABLE Kids_Hoodies (
    Product_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    Image_URL VARCHAR(255) NOT NULL,
    Description TEXT,
    Size ENUM('XS', 'S', 'M', 'L', 'XL'),
    Color VARCHAR(50),
    Material VARCHAR(100)
);
CREATE TABLE Kids_Jacket_Coats (
    Product_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    Image_URL VARCHAR(255) NOT NULL,
    Description TEXT,
    Size ENUM('XS', 'S', 'M', 'L', 'XL'),
    Material VARCHAR(100),
    Color VARCHAR(50)
);
CREATE TABLE Men_Pants (
    Product_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    Image_URL VARCHAR(255) NOT NULL,
    Description TEXT,
    Waist_Size INT,
    Length INT,
    Color VARCHAR(50),
    Material VARCHAR(100)
);
CREATE TABLE Men_Shoes (
    Product_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    Image_URL VARCHAR(255) NOT NULL,
    Description TEXT,
    Shoe_Size ENUM('6', '7', '8', '9', '10', '11', '12', '13'),
    Color VARCHAR(50),
    Material VARCHAR(100)
);
ALTER TABLE Men_Shoes MODIFY COLUMN Shoe_Size INT;
ALTER TABLE Men_Shoes MODIFY COLUMN Shoe_Size DECIMAL(3,1);

CREATE TABLE Men_Sweaters (
    Product_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    Image_URL VARCHAR(255) NOT NULL,
    Description TEXT,
    Size ENUM('S', 'M', 'L', 'XL', 'XXL'),
    Color VARCHAR(50),
    Material VARCHAR(100)
);
CREATE TABLE Men_Tshirts (
    Product_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    Image_URL VARCHAR(255) NOT NULL,
    Description TEXT,
    Size ENUM('S', 'M', 'L', 'XL', 'XXL'),
    Color VARCHAR(50),
    Material VARCHAR(100)
);
CREATE TABLE Holiday_Specials (
    Special_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Description TEXT,
    Price DECIMAL(10, 2) NOT NULL,
    Image_URL VARCHAR(255) NOT NULL,
    Holiday_Name VARCHAR(100) NOT NULL,
    Start_Date DATE,
    End_Date DATE
);

CREATE TABLE Orders(
	order_id int primary key auto_increment,
    customer_id int,
    total real,
    order_status varchar(15),
    orderDate date,
    
    foreign key (customer_id) references users(id)
);

INSERT INTO Bags (Name, Price, Image_URL, Description, Material, Color) VALUES
('HERMES FAUBORG TROPICAL BRIKIN', 2700, 'images/bags/hermes_birkin.png', 'A luxurious tropical-themed Birkin.', 'Leather', 'Multi'),
('LONGCHAMP LE PLIAGE ORIGINAL', 140, 'images/bags/longchamp_le_pliage.png', 'The iconic Le Pliage that folds away.', 'Nylon', 'Navy'),
('GUCCI MARMONT VELVET', 1500, 'images/bags/gucci_marmont.png', 'Soft velvet luxury for the fashionista.', 'Velvet', 'Burgundy'),
('PRADA NYLON BAG', 980, 'images/bags/prada_nylon.png', 'Sleek nylon bag with spacious interior.', 'Nylon', 'Black'),
('LOUIS VUITTON SPEEDY', 1100, 'images/bags/lv_speedy.png', 'Classic LV style with spacious design.', 'Leather', 'Brown'),
('CHANEL CLASSIC FLAP', 5500, 'images/bags/chanel_flap.png', 'Timeless elegance in quilted leather.', 'Leather', 'Black'),
('SAINT LAURENT TOTE', 995, 'images/bags/saint_laurent_tote.png', 'Stylish tote for everyday elegance.', 'Leather', 'Tan'),
('FENDI BAGUETTE', 2100, 'images/bags/fendi_baguette.png', 'Iconic baguette bag in multi-color.', 'Leather', 'Multi-color'),
('BURBERRY SHOULDER BAG', 1200, 'images/bags/burberry_shoulder.png', 'Elegant shoulder bag with check pattern.', 'Canvas', 'Check'),
('DIOR SADDLE BAG', 3300, 'images/bags/dior_saddle.png', 'Dior\'s iconic saddle bag in navy leather.', 'Leather', 'Navy');


INSERT INTO Casual_Wear (Name, Price, Image_URL, Description, Size, Color) VALUES
('Basic Cotton T-Shirt', 19.99, 'images/casual/cotton_tshirt.png', 'Comfortable cotton tee perfect for everyday use.', 'M', 'Red'),
('Denim Jeans', 39.99, 'images/casual/denim_jeans.png', 'Classic straight-cut jeans.', 'L', 'Blue'),
('Casual Linen Blouse', 34.99, 'images/casual/linen_blouse.png', 'Light and airy linen blouse.', 'S', 'White'),
('Graphic Pullover', 29.99, 'images/casual/graphic_pullover.png', 'Soft and comfy pullover with a fun print.', 'M', 'Grey'),
('Chino Shorts', 24.99, 'images/casual/chino_shorts.png', 'Stylish chino shorts for warm weather.', 'M', 'Khaki'),
('V-Neck Sweater', 45.00, 'images/casual/v_neck_sweater.png', 'A soft V-neck sweater for cool evenings.', 'L', 'Maroon'),
('Flannel Shirt', 30.00, 'images/casual/flannel_shirt.png', 'Warm and cozy flannel shirt.', 'M', 'Plaid'),
('Khaki Pants', 50.00, 'images/casual/khaki_pants.png', 'Perfectly tailored khaki pants for a smart look.', 'L', 'Beige'),
('Polo Shirt', 25.00, 'images/casual/polo_shirt.png', 'Classic polo shirt in cotton pique.', 'M', 'Navy'),
('Hooded Sweatshirt', 35.00, 'images/casual/hooded_sweatshirt.png', 'Casual hooded sweatshirt for chilly days.', 'L', 'Black');


INSERT INTO Dresses (Name, Price, Image_URL, Description, Size, Length, Color) VALUES
('Evening Gown', 120.00, 'images/dresses/evening_gown.png', 'Elegant evening gown for special occasions.', 'L', 'Long', 'Black'),
('Summer Floral Dress', 85.00, 'images/dresses/summer_floral.png', 'Light and breezy perfect for summer days.', 'M', 'Mid-length', 'Floral'),
('Cocktail Dress', 110.00, 'images/dresses/cocktail_dress.png', 'A chic dress for evening parties.', 'M', 'Short', 'Red'),
('Wrap Dress', 65.00, 'images/dresses/wrap_dress.png', 'Comfortable and stylish wrap dress.', 'S', 'Mid-length', 'Blue'),
('Bodycon Dress', 90.00, 'images/dresses/bodycon_dress.png', 'Sleek bodycon dress for a night out.', 'M', 'Short', 'Green'),
('Maxi Dress', 100.00, 'images/dresses/maxi_dress.png', 'Flowy maxi dress with a bohemian flair.', 'L', 'Long', 'White'),
('Shift Dress', 70.00, 'images/dresses/shift_dress.png', 'Simple and sophisticated shift dress.', 'M', 'Mid-length', 'Navy'),
('A-Line Dress', 75.00, 'images/dresses/a_line_dress.png', 'Flattering A-line dress for all occasions.', 'S', 'Knee-length', 'Red'),
('Evening Mermaid Gown', 250.00, 'images/dresses/evening_mermaid_gown.png', 'Stunning mermaid gown for formal events.', 'M', 'Long', 'Emerald'),
('Pencil Dress', 85.00, 'images/dresses/pencil_dress.png', 'Chic pencil dress for business or pleasure.', 'S', 'Knee-length', 'Black');

-- drop table Kids_Shoes;
INSERT INTO Kids_Shoes (Name, Price, Image_URL, Description, Shoe_Size, Color) VALUES
('Sporty Sneakers', 45.00, '../../KidsImages/imageedit_1_2680421080.png', 'Durable and stylish sneakers for kids.', '13', 'Green'),
('Nike Sneakers', 25.00, '../../KidsImages/imageedit_1_3949189767.png', 'Comfortable loafers for everyday play.', '11', 'Blue'),
('High Jordan', 30.00, '../../KidsImages/imageedit_4_9774925683.png', 'Waterproof boots for rainy days.', '12', 'Yellow'),
('Black Airforces', 20.00, '../../KidsImages/imageedit_6_8496686442.png', 'Easy-to-wear sandals for quick outings.', '10', 'Red'),
('Low Dunks', 50.00, '../../KidsImages/imageedit_7_5257209746.png', 'Formal dress shoes for special occasions.', '12', 'Black'),
('Black n Red Jordans', 35.00, '../../KidsImages/imageedit_12_5929480378.png', 'Lightweight running shoes for active children.', '13', 'Blue'),
('Nike Black Specials', 22.00, '../../KidsImages/imageedit_13_6355735301.png', 'Cute and comfortable flats for girls.', '11', 'Pink');



INSERT INTO Kids_Hoodies (Name, Price, Image_URL, Description, Size, Color, Material) VALUES
('Zip-Up Hoodie', 30.00, 'images/kids_hoodies/zipup_hoodie.png', 'Warm hoodie for chilly days.', 'M', 'Grey', 'Fleece'),
('Pullover Hoodie', 25.00, 'images/kids_hoodies/pullover_hoodie.png', 'Cozy pullover for the cold.', 'S', 'Blue', 'Cotton'),
('Fleece Jacket', 35.00, 'images/kids_hoodies/fleece_jacket.png', 'Super soft and warm fleece jacket.', 'M', 'Pink', 'Fleece'),
('Sports Hoodie', 28.00, 'images/kids_hoodies/sports_hoodie.png', 'Sporty hoodie suitable for active kids.', 'L', 'Black', 'Polyester'),
('Graphic Sweatshirt', 22.00, 'images/kids_hoodies/graphic_sweatshirt.png', 'Fun graphic sweatshirt for everyday wear.', 'S', 'White', 'Cotton'),
('Neon Hoodie', 27.00, 'images/kids_hoodies/neon_hoodie.png', 'Bright neon hoodie for high visibility and style.', 'M', 'Neon Green', 'Polyester'),
('Adventure Hoodie', 30.00, 'images/kids_hoodies/adventure_hoodie.png', 'Adventure-themed hoodie for young explorers.', 'L', 'Brown', 'Cotton'),
('Winter Hoodie', 40.00, 'images/kids_hoodies/winter_hoodie.png', 'Heavy-duty hoodie to withstand the cold.', 'M', 'Dark Blue', 'Wool Blend'),
('Casual Zip-Up', 24.00, 'images/kids_hoodies/casual_zipup.png', 'Casual zip-up for easy wear.', 'S', 'Light Blue', 'Cotton Blend'),
('Skate Hoodie', 32.00, 'images/kids_hoodies/skate_hoodie.png', 'Skateboard-themed hoodie for cool kids.', 'M', 'Black', 'Polyester');


INSERT INTO Kids_Jacket_Coats (Name, Price, Image_URL, Description, Size, Material, Color) VALUES
('Winter Parka', 55.00, 'images/kids_coats/winter_parka.png', 'Insulated parka for cold weather.', 'L', 'Polyester', 'Navy'),
('Light Rain Jacket', 20.00, 'images/kids_coats/rain_jacket.png', 'Keep dry during spring showers.', 'M', 'Polyester', 'Green'),
('Puffer Jacket', 40.00, 'images/kids_coats/puffer_jacket.png', 'Warm puffer jacket for winter play.', 'M', 'Nylon', 'Red'),
('Wool Coat', 60.00, 'images/kids_coats/wool_coat.png', 'Stylish wool coat to stay warm.', 'S', 'Wool', 'Grey'),
('Windbreaker', 25.00, 'images/kids_coats/windbreaker.png', 'Lightweight windbreaker for breezy days.', 'L', 'Polyester', 'Blue'),
('Trench Coat', 50.00, 'images/kids_coats/trench_coat.png', 'Classic trench coat for stylish youngsters.', 'M', 'Cotton', 'Beige'),
('Fur-Lined Jacket', 75.00, 'images/kids_coats/fur_lined_jacket.png', 'Luxurious fur-lined jacket for ultimate warmth.', 'L', 'Polyester', 'Black'),
('Reflective Jacket', 30.00, 'images/kids_coats/reflective_jacket.png', 'High-visibility reflective jacket for safety.', 'S', 'Polyester', 'Reflective Yellow'),
('Snow Jacket', 65.00, 'images/kids_coats/snow_jacket.png', 'Thick snow jacket perfect for snowy days.', 'M', 'Polyester', 'White'),
('Varsity Jacket', 42.00, 'images/kids_coats/varsity_jacket.png', 'Cool varsity jacket for pre-teens.', 'L', 'Leather & Wool', 'Maroon & White');


INSERT INTO Men_Pants (Name, Price, Image_URL, Description, Waist_Size, Length, Color, Material) VALUES
('Khaki Trousers', 50.00, 'images/men_pants/khaki_trousers.png', 'Classic khaki trousers for formal or casual wear.', 32, 34, 'Beige', 'Cotton'),
('Slim Fit Jeans', 60.00, 'images/men_pants/slim_fit_jeans.png', 'Stylish slim fit jeans with stretch for comfort.', 34, 32, 'Blue', 'Denim'),
('Cargo Pants', 45.00, 'images/men_pants/cargo_pants.png', 'Rugged cargo pants with multiple pockets.', 33, 34, 'Olive', 'Cotton Blend'),
('Dress Pants', 55.00, 'images/men_pants/dress_pants.png', 'Perfect dress pants for business settings.', 32, 34, 'Black', 'Wool Blend'),
('Chinos', 42.00, 'images/men_pants/chinos.png', 'Versatile chinos that pair well with polos or shirts.', 33, 32, 'Navy', 'Cotton'),
('Joggers', 35.00, 'images/men_pants/joggers.png', 'Comfortable joggers for casual outings or workouts.', 34, 33, 'Grey', 'Polyester'),
('Corduroy Pants', 48.00, 'images/men_pants/corduroy_pants.png', 'Thick corduroy pants for cooler weather.', 32, 34, 'Brown', 'Corduroy'),
('Track Pants', 30.00, 'images/men_pants/track_pants.png', 'Lightweight track pants for athletic activities.', 33, 32, 'Black', 'Polyester'),
('Linen Trousers', 50.00, 'images/men_pants/linen_trousers.png', 'Breathable linen trousers for hot climates.', 34, 34, 'White', 'Linen'),
('Sweatpants', 25.00, 'images/men_pants/sweatpants.png', 'Soft sweatpants for lounging or gym sessions.', 35, 32, 'Charcoal', 'Cotton Blend');


INSERT INTO Men_Shoes (Name, Price, Image_URL, Description, Shoe_Size, Color, Material) VALUES
 ('Leather Oxfords', 120.00, 'images/men_shoes/leather_oxfords.png', 'Elegant leather shoes for formal occasions.', 10, 'Black', 'Leather'),
 ('Running Shoes', 100.00, 'images/men_shoes/running_shoes.png', 'High-performance running shoes for athletes.', 11, 'Blue', 'Synthetic'),
 ('Canvas Sneakers', 50.00, 'images/men_shoes/canvas_sneakers.png', 'Casual canvas sneakers for everyday wear.', 10, 'White', 'Canvas'),
 ('Loafers', 85.00, 'images/men_shoes/loafers.png', 'Comfortable loafers for smart casual looks.', 9, 'Brown', 'Suede'),
 ('Hiking Boots', 110.00, 'images/men_shoes/hiking_boots.png', 'Durable hiking boots for outdoor adventures.', 11, 'Dark Brown', 'Leather'),
 ('Dress Boots', 130.00, 'images/men_shoes/dress_boots.png', 'Stylish dress boots that complement a suit.', 10, 'Black', 'Leather'),
 ('Sandals', 45.00, 'images/men_shoes/sandals.png', 'Light and airy sandals for relaxed days.', 12, 'Tan', 'Leather'),
 ('Brogue Shoes', 115.00, 'images/men_shoes/brogue_shoes.png', 'Classic brogue shoes for timeless style.', 11, 'Burgundy', 'Leather'),
 ('Athletic Sneakers', 90.00, 'images/men_shoes/athletic_sneakers.png', 'Versatile sneakers for sports or casual use.', 10, 'Grey', 'Mesh'),
 ('Chelsea Boots', 125.00, 'images/men_shoes/chelsea_boots.png', 'Sleek Chelsea boots for fashionable outfits.', 11, 'Navy', 'Suede');

INSERT INTO Men_Sweaters (Name, Price, Image_URL, Description, Size, Color, Material) VALUES
('Cashmere Sweater', 99.99, 'images/men_sweaters/cashmere_sweater.png', 'Luxury soft cashmere for stylish warmth.', 'L', 'Burgundy', 'Cashmere'),
('Wool Pullover', 89.99, 'images/men_sweaters/wool_pullover.png', 'Warm wool pullover perfect for cold days.', 'M', 'Grey', 'Wool'),
('Knit Sweater', 75.00, 'images/men_sweaters/knit_sweater.png', 'Chunky knit sweater for a cozy feel.', 'L', 'Navy', 'Knit'),
('Crew Neck Sweater', 65.00, 'images/men_sweaters/crew_neck.png', 'Classic crew neck for versatile styling.', 'M', 'Black', 'Cotton Blend'),
('V-Neck Sweater', 70.00, 'images/men_sweaters/v_neck.png', 'Soft V-neck for layering over collared shirts.', 'L', 'Charcoal', 'Merino Wool'),
('Cardigan', 80.00, 'images/men_sweaters/cardigan.png', 'Comfortable cardigan for easy on and off.', 'M', 'Beige', 'Cotton'),
('Turtleneck', 95.00, 'images/men_sweaters/turtleneck.png', 'Stylish turtleneck for enhanced wardrobe.', 'L', 'Black', 'Wool Blend'),
('Hooded Sweater', 85.00, 'images/men_sweaters/hooded_sweater.png', 'Casual hooded sweater for relaxed looks.', 'M', 'Olive', 'Polyester'),
('Zip-Up Sweater', 90.00, 'images/men_sweaters/zip_up_sweater.png', 'Practical zip-up sweater for transitional weather.', 'L', 'Navy', 'Synthetic'),
('Argyle Sweater', 70.00, 'images/men_sweaters/argyle_sweater.png', 'Preppy argyle sweater for classic style.', 'M', 'Multi', 'Cotton Blend');


INSERT INTO Men_Tshirts (Name, Price, Image_URL, Description, Size, Color, Material) VALUES
('Graphic Tee', 29.99, 'images/men_tshirts/graphic_tee.png', 'Trendy graphic tee with a comfortable fit.', 'M', 'White', 'Cotton'),
('Plain Tee', 20.00, 'images/men_tshirts/plain_tee.png', 'Essential plain t-shirt for daily wear.', 'L', 'Black', 'Cotton'),
('V-Neck Tee', 25.00, 'images/men_tshirts/v_neck_tee.png', 'Soft V-neck tee perfect for layering.', 'M', 'Grey', 'Cotton Blend'),
('Polo Shirt', 35.00, 'images/men_tshirts/polo_shirt.png', 'Classic polo shirt for a smart casual look.', 'L', 'Navy', 'Pique'),
('Henley Shirt', 30.00, 'images/men_tshirts/henley_shirt.png', 'Comfortable Henley for a relaxed style.', 'M', 'Olive', 'Cotton'),
('Compression Shirt', 33.00, 'images/men_tshirts/compression_shirt.png', 'Compression shirt for workout efficiency.', 'L', 'Black', 'Polyester'),
('Breathable Running Tee', 27.00, 'images/men_tshirts/breathable_running_tee.png', 'Breathable tee for enhanced running performance.', 'M', 'Blue', 'Polyester'),
('Cotton Tank Top', 15.00, 'images/men_tshirts/cotton_tank_top.png', 'Lightweight tank top for hot days.', 'L', 'White', 'Cotton'),
('Long Sleeve Tee', 32.00, 'images/men_tshirts/long_sleeve_tee.png', 'Long sleeve t-shirt for cooler weather.', 'M', 'Grey', 'Cotton Blend'),
('Striped Tee', 28.00, 'images/men_tshirts/striped_tee.png', 'Stylish striped t-shirt for casual outings.', 'L', 'Red & White', 'Cotton');


INSERT INTO Holiday_Specials (Name, Description, Price, Image_URL, Holiday_Name, Start_Date, End_Date) VALUES
('Christmas Themed Wool Sweater', 'Festive wool sweater perfect for holiday gatherings.', 89.99, 'images/holiday_specials/christmas_sweater.png', 'Christmas', '2023-12-01', '2023-12-25'),
('Halloween Graphic Tee', 'Spooky graphic tee just right for Halloween events.', 29.99, 'images/holiday_specials/halloween_tee.png', 'Halloween', '2023-10-01', '2023-10-31'),
('Valentine Red Dress', 'Stunning red dress for Valentine\'s day dates.', 120.00, 'images/holiday_specials/valentine_dress.png', 'Valentine\'s Day', '2023-02-01', '2023-02-14'),
('Easter Bunny Kids Shoes', 'Cute bunny-themed shoes for kids to celebrate Easter.', 49.99, 'images/holiday_specials/easter_shoes.png', 'Easter', '2023-04-01', '2023-04-17'),
('Thanksgiving Casual Pullover', 'Comfortable pullover to wear for Thanksgiving.', 55.00, 'images/holiday_specials/thanksgiving_pullover.png', 'Thanksgiving', '2023-11-01', '2023-11-25'),
('Black Friday Special Sneakers', 'Exclusive sneakers released for Black Friday.', 99.99, 'images/holiday_specials/black_friday_sneakers.png', 'Black Friday', '2023-11-24', '2023-11-24'),
('New Year\'s Sparkle Dress', 'Glittering dress to shine on New Year\'s Eve.', 199.99, 'images/holiday_specials/new_years_dress.png', 'New Year\'s Eve', '2023-12-31', '2024-01-01'),
('4th of July Shorts', 'Patriotic shorts to celebrate the 4th of July.', 45.00, 'images/holiday_specials/july_fourth_shorts.png', '4th of July', '2023-07-04', '2023-07-04'),
('Mother\'s Day Floral Blouse', 'Beautiful floral blouse perfect as a Mother\'s Day gift.', 35.00, 'images/holiday_specials/mothers_day_blouse.png', 'Mother\'s Day', '2023-05-08', '2023-05-08'),
('Father\'s Day Leather Wallet', 'Sturdy leather wallet, a classic Father\'s Day present.', 75.00, 'images/holiday_specials/fathers_day_wallet.png', 'Father\'s Day', '2023-06-19', '2023-06-19');

Insert into Users(
firstName, lastName, gender, email, card_number, passwordi, expiration_date, cvv) values
('Etnik', 'Kelmendi', 'male', 'etnik@ueb2.com', 5739571057299384, 'hashipaswordit', '2028-12-01', 'hashicvv'),
('Gent', 'Zhushi', 'male', 'gent@ueb2.com', 8471063579153958, 'hashipaswordit', '2028-11-01', 'hashicvv'),
('Adea', 'Gerguri', 'female', 'adea@ueb2.com', 8592750277592745, 'hashipaswordit', '2028-10-01', 'hashicvv'),
('Gresa', 'Hasani', 'female', 'gresa@ueb2.com', 9589753239752345, 'hashipaswordit', '2028-07-01', 'hashicvv'),
('Euron', 'Osmani', 'female', 'euron@ueb2.com', 9238753972312876, 'hashipaswordit', '2028-10-01', 'hashicvv'),
('John', 'Doe', 'male', 'john@ueb2.com', 2867453287562344, 'hashipaswordit', '2028-10-01', 'hashicvv'),
('Alice', 'Wonderland', 'female', 'alice@ueb2.com', 2345282764289726, 'hashipaswordit', '2028-10-01', 'hashicvv'),
('Spongebob', 'Squarepants', 'male', 'spongebob@ueb2.com', 8197642856927948,'hashipaswordit', '2028-10-01', 'hashicvv'),
('Patrick', 'Star', 'male', 'patrick@ueb2.com', 2837462987467652, 'hashipaswordit', '2028-10-01', 'hashicvv'),
('Squidward', 'Tentacles', 'male', 'squidward@ueb2.com', 3289475632348534, 'hashipaswordit', '2028-10-01', 'hashicvv'),
('Sandy', 'Cheeks', 'female', 'sandy@ueb2.com', 3876239853762834, 'hashipaswordit', '2028-10-01', 'hashicvv'),
('Eugene', 'Crabs', 'male', 'mrkrabs@ueb2.com', 2384762842865293, 'hashipaswordit', '2028-10-01', 'hashicvv'),
('Sheldon', 'Plankton', 'male', 'chumbucket@ueb2.com', 1873269237643293, 'hashipaswordit', '2028-10-01', 'hashicvv');

-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
alter table users add column regDate date;
update users set regDate = curdate() where id between 1 and 13;
update users set regDate = date_sub(curdate(), interval 35 day)  where id between 9 and 16;


insert into orders(customer_id, total, order_status, orderDate) values
('1', '57.35', 'pending', curdate()),
('2', '423.27', 'complete', curdate()),
('13', '54.10', 'pending', curdate()),
('12', '235.99', 'processing', curdate()),
('6', '10.00', 'pending', curdate()),
('3', '99.99', 'complete', curdate()),
('8', '250.00', 'pending', curdate()),
('6', '51.97', 'complete', curdate()),
('4', '39.42', 'pending', curdate()),
('9', '85.50', 'processing', curdate()),
('7', '268.50', 'processing', curdate());

-- select * from orders;