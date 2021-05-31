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
	shiftDays VARCHAR(255),
	shiftHours VARCHAR(255),
);

CREATE TABLE roster(
	staffId INT REFERENCES staff(staffId),
	shiftId INT REFERENCES shifts(shiftsId)
)

CREATE TABLE notice(
	noticeId INT PRIMARY KEY,
	dateSent DATENAME,
	timeSent TIME,
	header VARCHAR(255),
	notification VARCHAR(255)
)

CREATE TABLE notifs(
	staffId INT REFERENCES staff(staffId),
	noticeId INT REFERENCES ntofis(notifsId)
)

INSERT INTO staff VALUES(0, 'root', 'root', 'John', 'Doe', "manager");

INSERT INTO notice VALUES(0, NULL, NULL, "TitleInit", "NoticeInit")