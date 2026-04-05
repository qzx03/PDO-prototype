CREATE DATABASE recipesREALISATION;

USE recipesREALISATION;

CREATE TABLE recipes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    r_name VARCHAR(255) NOT NULL,
    category ENUM('Entree', 'Main', 'Dessert') NOT NULL,
    prep_time INT NOT NULL,
    r_image VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    edited_at DATETIME NULL
);

INSERT INTO recipes (r_name, category, prep_time, r_image) VALUES
('Caesar Salad', 'Entree', 20, 'images/salade.jpg'),
('Roast Chicken', 'Main', 60, 'images/poulet.jpg'),
('Chicken Tagine with Lemon', 'Main', 90, 'images/tajine.jpg'),
('Chocolate Cake', 'Dessert', 45, 'images/cake.jpg'),
('Pancakes', 'Dessert', 25, 'images/pancakes.jpg');

INSERT INTO recipes (r_name, category, prep_time, r_image) VALUES
('Spaghetti Bolognese', 'Main', 50, 'images/spaghetti.jpg'),
('Grilled Cheese Sandwich', 'Entree', 10, 'images/grilled_cheese.jpg'),
('Vegetable Soup', 'Entree', 40, 'images/soup.jpg'),
('Beef Burger', 'Main', 35, 'images/burger.jpg'),
('Fish and Chips', 'Main', 45, 'images/fish_chips.jpg'),
('Fruit Salad', 'Dessert', 15, 'images/fruit_salad.jpg'),
('Vanilla Ice Cream', 'Dessert', 30, 'images/ice_cream.jpg'),
('Omelette', 'Entree', 12, 'images/omelette.jpg'),
('Chicken Sandwich', 'Main', 20, 'images/chicken_sandwich.jpg'),
('Apple Pie', 'Dessert', 55, 'images/apple_pie.jpg');