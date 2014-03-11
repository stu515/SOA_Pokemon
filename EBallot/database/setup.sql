DROP DATABASE cs124db;
CREATE DATABASE cs124db;
USE cs124db;

CREATE TABLE election (
	Election_Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Election_Name VARCHAR(255) NOT NULL,
	Is_Open BOOLEAN NOT NULL
);

CREATE TABLE user (
	User_Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Last_Name VARCHAR(255) NOT NULL,
	First_Name VARCHAR(255) NOT NULL,
	Middle_Name VARCHAR(255),
	CP_Number VARCHAR(255),
	Email_Address VARCHAR(255),
	Password VARCHAR(255) NOT NULL
);

CREATE TABLE candidacy (
	Candidacy_Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	User_Id INT NOT NULL,
	Election_Id INT NOT NULL,
	Platform VARCHAR(255) NOT NULL,
	FOREIGN KEY (User_Id) REFERENCES user(User_Id),
	FOREIGN KEY (Election_Id) REFERENCES election(Election_Id)
);

CREATE TABLE vote (
	User_Id INT NOT NULL,
	Election_Id INT NOT NULL,
	Candidacy_Id INT NOT NULL,
	PRIMARY KEY (Election_Id, User_Id),
	FOREIGN KEY (User_Id) REFERENCES user(User_Id),
	FOREIGN KEY (Election_Id) REFERENCES election(Election_Id),
	FOREIGN KEY (Candidacy_Id) REFERENCES candidacy(Candidacy_Id)
);

INSERT INTO user (Last_Name, First_Name, Middle_Name, CP_Number, Email_Address, Password)
VALUES ("Reveche", "Jan Amiel", "Ranido", "09053302305", "amielreveche@yahoo.com.ph", "APassword");

INSERT INTO user (Last_Name, First_Name, CP_Number, Email_Address, Password)
VALUES ("Ruiz", "Camille Marie", "09012345678", "camilleruiz@gmail.com", "CPassword");

INSERT INTO user (Last_Name, First_Name, CP_Number, Email_Address, Password)
VALUES ("Magdaluyo", "Emmanuel John", "09023452235", "ej_magdaluyo@yahoo.com", "EPassword");

INSERT INTO user (Last_Name, First_Name, CP_Number, Email_Address, Password)
VALUES ("Mantes", "Geronimo", "09059384293", "migomantes@ymail.com", "GPassword");

INSERT INTO user (Last_Name, First_Name, Password)
VALUES ("Repizo", "Myreen", "password");

INSERT INTO user (Last_Name, First_Name, Password)
VALUES ("Sularte", "Bagani", "password");

INSERT INTO user (Last_Name, First_Name, Password)
VALUES ("Bunyi", "Richard", "password");

INSERT INTO user (Last_Name, First_Name, Password)
VALUES ("Lua", "Dickson", "password");

INSERT INTO user (Last_Name, First_Name, Password)
VALUES ("Asok", "Mara", "password");

INSERT INTO user (Last_Name, First_Name, Password)
VALUES ("How about", "Abstain", "password");

INSERT INTO election (Election_Name, Is_Open)
VALUES ("Presidential Election", true);

INSERT INTO election (Election_Name, Is_Open)
VALUES ("Secretarial Election", true);

INSERT INTO election (Election_Name, Is_Open)
VALUES ("Logistics Election", false);

INSERT INTO candidacy (User_Id, Election_Id, Platform)
VALUES (5, 1, "Test Platform 1");

INSERT INTO candidacy (User_Id, Election_Id, Platform)
VALUES (10, 1, "Test Platform 2");

INSERT INTO candidacy (User_Id, Election_Id, Platform)
VALUES (8, 2, "Test Platform 1");

INSERT INTO candidacy (User_Id, Election_Id, Platform)
VALUES (10, 2, "Test Platform 1");

INSERT INTO vote(User_Id, Election_Id, Candidacy_Id)
VALUES (3, 1, 1);