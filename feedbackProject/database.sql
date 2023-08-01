CREATE TABLE feedback(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    body TEXT DEFAULT '',
    date DATETIME
);
Insert into feedback(name,email,body,date) values
("nguyen1","nguyen1@gmail.com","chao pham trung nguyen1", current_timestamp()),
("nguyen2","nguyen2@gmail.com","chao pham trung nguyen2", current_timestamp()),
("nguyen3","nguyen3@gmail.com","chao pham trung nguyen3", current_timestamp());
SELECT * FROM feedback;