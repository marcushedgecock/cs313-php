/*
* Each table is followed by a commented duplicate table with 
* duplicate code. It is for the purpose of pasting into the
* command line. The first of the duplicate tables is for 
* keeping things organized correctly. 
*/

/*
* present = number of times present at sunday school
* absent = number of times absent from sunday school
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
	time_created	date,
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