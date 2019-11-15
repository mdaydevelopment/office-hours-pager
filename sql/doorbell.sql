
CREATE TABLE users (
    userID       INT          NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name         VARCHAR(20)  NOT NULL,
    isAdmin      BOOLEAN      DEFAULT 0,
    userpassword VARCHAR(255));

CREATE TABLE terms (
    termID    INT  NOT NULL PRIMARY KEY AUTO_INCREMENT,
    startdate DATE NOT NULL,
    enddate   DATE NOT NULL);

CREATE TABLE office_hours (
    id          INT  NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userID      INT  NOT NULL,
    termID      INT  NOT NULL,
    day_of_week CHAR NOT NULL,
    hourstart   TIME NOT NULL,
    hourend     TIME NOT NULL,
    FOREIGN KEY (userID) REFERENCES users(userID),
    FOREIGN KEY (termID) REFERENCES terms(termID));

CREATE TABLE requests (
    id     INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userID INT NOT NULL,
    FOREIGN KEY (userID) REFERENCES users(userID));

<<<<<<< HEAD
=======
use doorbell;

--drop user 'kelli'@'localhost';
--drop user 'michelle'@'localhost' ;

--create user 'kelli'@'localhost' identified by 'password';
--create user 'michelle'@'localhost' identified by 'password';

--grant all on doorbell.* to 'kelli'@'localhost';
--grant all on doorbell.* to 'michelle'@'localhost';

create table users (userID int not null primary key auto_increment, name varchar(255) not null, isAdmin Boolean, userpassword varchar(255));

create table terms (termID int not null primary key auto_increment, startdate date, enddate date);

create table office_hours (id int not null primary key auto_increment, userID int not null, 
termID int not null, day_of_week date, hourstart time, hourend time, foreign key (userID) references users(userID),
foreign key (termID) references terms(termID));

create table requests (id int not null primary key auto_increment, userID int not null, foreign key (userID) references users(userID));
>>>>>>> fbe90b0f3aba4a94bb1167d300eecf8da2b14eb2
