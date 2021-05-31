create database rostersys;
use rostersys;

CREATE TABLE staff(
	staffId INT PRIMARY KEY,
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	firstname VARCHAR(255) NOT NULL,
	lastname VARCHAR(255) NOT NULL,
	priority ENUM("employee", "manager") default "staff"
);

CREATE TABLE shifts(
	shiftId INT PRIMARY KEY,
	DAY VARCHAR(255),
	shiftStart TIME,
	shiftEnd TIME
);

CREATE TABLE roster(
	staffId INT REFERENCES staff(staffId),
	shiftId INT REFERENCES shifts(shiftsId)
)

INSERT INTO staff VALUES(0, 'root', 'root', 'John', 'Doe', "manager");