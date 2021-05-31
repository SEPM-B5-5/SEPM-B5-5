-- Copy paste this file into PHPmyADMIN SQL console query to create the database with its associated tables

-- Admin account credentials are: Username/email="admin", Password="admin1234"
-- Dummy Staff account also created, credentials: user= "staff@dummy.com", password="staff1234"

--YOU CAN'T DELETE SHIFTS !!! DON'T DROP THEM FROM THE TABLE, RUINS SHIFT ALLOCATION! 
create database rostery;
use rostery;

CREATE TABLE employees(
employeeID INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(255) NOT NULL,
employeePassword VARCHAR(20) NOT NULL,
firstname VARCHAR(20),
lastname VARCHAR(20),
availableHours int NOT NULL,
phone VARCHAR(25),
address VARCHAR(255),
role ENUM('none', 'staff', 'manager') DEFAULT 'none'
);

CREATE TABLE shift_list(
shiftID INT AUTO_INCREMENT PRIMARY KEY,
startTime TIME,
endTime TIME,
shiftDay VARCHAR(20),
shiftLocation VARCHAR(255)
);

CREATE TABLE shift_allocations(
allocationID INT AUTO_INCREMENT PRIMARY KEY,
shiftID INT REFERENCES shift_list (shiftID),
employeeID INT REFERENCES employees (employeeID),
shiftState ENUM('none','rejected','accepted')
);

INSERT INTO employees VALUES(NULL, 'admin', 'admin1234', 'Admin', 'Account', 0, '+6142345678', '1337 Admin Street', 'manager');
INSERT INTO employees VALUES(NULL, 'staff@dummy.com', 'staff1234', 'Vernon', 'Dudley', 40, '+0412345678', '4 Privet Drive', 'staff');