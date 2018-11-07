CREATE DATABASE practice07;
\c practice07

CREATE TABLE (
id serial primary key NOT NULL,
username varchar(60) UNIQUE NOT NULL,
password varchar(60) NOT NULL
);

CREATE USER practiceuser WITH PASSWORD 'password';
GRANT SELECT, INSERT, UPDATE ON login TO practiceuser;
GRANT USAGE, SELECT ON login_id_seq TO practiceuser;