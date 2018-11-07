/*
* Each table is followed by a commented duplicate table with 
* duplicate code. It is for the purpose of pasting into the
* command line. The first of the duplicate tables is for 
* keeping things organized correctly. 
*/

CREATE TABLE attendance (
	id								SERIAL PRIMARY KEY,
	name			varchar(85)		NOT NULL,
	month_year		varchar(14)		NOT NULL,
	present			int,	
	absent   		int,
	FOREIGN KEY (id) REFERENCES users(id)
);

-- CREATE TABLE attendance (id SERIAL PRIMARY KEY, name varchar(85) NOT NULL, month_year varchar(14) NOT NULL, present int, absent int, FOREIGN KEY (id) REFERENCES users(id));

CREATE TABLE user_submitted_files (
	index							SERIAL PRIMARY KEY,
	name			varchar(85)		NOT NULL,
	name_of_file	varchar(100)	NOT NULL,	
	time_created	date			DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (index) REFERENCES users(id)
);

-- CREATE TABLE user_submitted_files (index SERIAL PRIMARY KEY, name varchar(85) NOT NULL, name_of_file varchar(100) NOT NULL, time_created date, FOREIGN KEY (index) REFERENCES users(id));

CREATE TABLE users (
	id								SERIAL PRIMARY KEY,
	username 		varchar(45)		NOT NULL UNIQUE,
	password		varchar(255)	NOT NULL,
	time_created	date    		DEFAULT CURRENT_TIMESTAMP
);

-- CREATE TABLE users (id SERIAL PRIMARY KEY, username varchar(45) NOT NULL UNIQUE, password varchar(255) NOT NULL, time_created date DEFAULT CURRENT_TIMESTAMP);

--test data
INSERT INTO users (username, password) VALUES ('testone', 'testone');
INSERT INTO users (username, password) VALUES ('testtwo', 'testtwo');
INSERT INTO attendance (name, month_year, present, absent) VALUES ('testone', 'january 2018', 4, 0);
INSERT INTO attendance (name, month_year, present, absent) VALUES ('testtwo', 'february 2018', 2, 2);
INSERT INTO user_submitted_files (name, name_of_file) VALUES ('testone', 'testone');
INSERT INTO user_submitted_files (name, name_of_file) VALUES ('testtwo', 'testtwo');

--retrieve data
SELECT * FROM attendance;
SELECT * FROM user_submitted_files;
SELECT * FROM users;