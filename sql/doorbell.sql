
CREATE TABLE users (
    userID       INT          NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email	 VARCHAR(30)  NOT NULL,
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
    day_of_week INT  NOT NULL,
    hourstart   TIME NOT NULL,
    hourend     TIME NOT NULL,
    FOREIGN KEY (userID) REFERENCES users(userID),
    FOREIGN KEY (termID) REFERENCES terms(termID));

CREATE TABLE requests (
    id     INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userID INT NOT NULL,
    FOREIGN KEY (userID) REFERENCES users(userID));

