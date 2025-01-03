-- Active: 1730910266374@@127.0.0.1@3306@my_database

USE user_registration;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


CREATE TABLE menu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO menu (name, description, price, image)
VALUES 
    ('Espresso', 'A bold and invigorating shot of coffee.', 37000, '../assets/espresso.jpg'),
    ('Latte', 'Espresso blended with creamy steamed milk.', 27000, '../assets/latte.jpg'),
    ('Cappuccino', 'A delightful balance of coffee, milk, and foam.', 25000, '../assets/cappuccino.png'),
    ('Americano', 'A smooth coffee experience with hot water.', 35000, '../assets/americano.jpg'),
    ('Mocha', 'Chocolate meets espresso for a sweet delight.', 30000, '../assets/mocha.jpg'),
    ('Butterscotch Sea Salt Latte', 'A unique combination of creamy latte, butterscotch, and a hint of sea salt.', 40000, '../assets/ButterscotchLatte.jpg'),
    ('Dimsum', 'Dimsum is a traditional Chinese meal made up of small plates of dumplings and other snack dishes.', 16000, '../assets/dimsum.jpg'),
    ('Kentang', 'A starchy tuberous vegetable native to the Americas that is consumed as a staple food.', 16000, '../assets/kentang.jpg'),
    ('Nasi Goreng', 'Food consisting of rice that is fried and mixed with cooking oil, margarine, or butter.', 24000, '../assets/nasigoreng.png'),
    ('Nasi Lemak', 'Nasi lemak is a rice dish usually served with roasted peanuts, egg, ikan bilis (anchovies).', 28000, '../assets/nasilemak.jpg'),
    ('Nasi Selimut Telur', 'The combination of fluffy rice and the soft, savory omelette creates a satisfying contrast.', 26000, '../assets/nasiselimuttelur.jpg'),
    ('Roti Bakar', 'Roti Bakar is beloved for its combination of crispy exterior and soft, flavorful filling.', 16000, '../assets/rotibakar.jpg');
