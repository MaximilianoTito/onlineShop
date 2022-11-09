CREATE TABLE user_admin (
	id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    password VARCHAR(20)
);
CREATE TABLE catalogue(
    id INT AUTO_INCREMENT PRIMARY KEY,
    img TEXT,
	name VARCHAR(50),
    description TEXT,
    price DECIMAL(5,2),
    status BOOLEAN DEFAULT true
);
CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    lastname VARCHAR(50),
    mobile_phone VARCHAR(10),
    status BOOLEAN DEFAULT true
);
INSERT INTO user_admin (name, password) VALUES ('maximiliano','S0p0rt3Max');
INSERT INTO catalogue (img, name, description, price )VALUES('prueba.png','Ohm Blue','Un aroma seductor con alta duracion',10.15);
INSERT INTO users(name, lastname, mobile_phone, status)VALUES ('Max','Tito','0999069385',FALSE);
SELECT * FROM user_admin;
SELECT * FROM catalogue;
SELECT * FROM users;
DROP TABLE IF EXISTS catalogue;

