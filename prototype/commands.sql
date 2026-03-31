CREATE DATABASE recipesdb;

CREATE TABLE recipes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    r_name VARCHAR(100) NOT NULL,
    category VARCHAR(100),
    preparation_time INT,
    r_image VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    edited_at DATETIME
);

INSERT INTO recipes (r_name, category, preparation_time, r_image)
VALUES
('Spaghetti Carbonara', 'Pasta', 25,
'https://images.unsplash.com/photo-1612874742237-6526221588e3?q=80&w=1000&auto=format&fit=crop'),

('Classic Pancakes', 'Breakfast', 20,
'https://images.unsplash.com/photo-1528207776546-365bb710ee93?q=80&w=1000&auto=format&fit=crop'),

('Caesar Salad', 'Salad', 15,
'https://images.unsplash.com/photo-1550304943-4f24f54ddde9?q=80&w=1000&auto=format&fit=crop'),

('Margherita Pizza', 'Pizza', 30,
'https://images.unsplash.com/photo-1604068549290-dea0e4a305ca?q=80&w=1000&auto=format&fit=crop'),

('Chocolate Brownies', 'Dessert', 40,
'https://images.unsplash.com/photo-1606312619070-d48b4c652a52?q=80&w=1000&auto=format&fit=crop');