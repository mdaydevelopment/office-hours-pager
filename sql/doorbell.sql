--drop database doorbell;

create database doorbell;

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
