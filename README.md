-- Create the database
CREATE DATABASE votingsystem;

-- Create the users table to store user information
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
address VARCHAR(255) NOT NULL,
email VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
role VARCHAR(50) NOT NULL
);

-- Create the candidates table to store candidate information
CREATE TABLE candidates (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
position VARCHAR(100) NOT NULL,
qualification VARCHAR(255) NOT NULL,
image VARCHAR(255) NOT NULL
);

-- Create the votes table to store vote information
CREATE TABLE votes (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
candidate_id INT NOT NULL,
FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (candidate_id) REFERENCES candidates(id)
);

After creating the table keep this folder in xampp>htdocs
then go for http://localhost/folder_name/View/Pages/index.php for login page
