use pdo-crud;

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
  id int unsigned NOT NULL auto_increment,
  firstname varchar(30) NOT NULL,
  lastname varchar(30) NOT NULL,
  email varchar(30) NULL,
  phone int unsigned NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

INSERT INTO users (firstname, lastname, email, phone) VALUES
('Julie', 'Smith', 'julie.smith@gmail.com', 12345),
('Jack', 'Willis', 'jack.willis@gmail.com', 09876),
('Steve', 'Harris', 'steve.harris@gmail.com', 98764);