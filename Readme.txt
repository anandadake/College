<!-- =======================================================
    20-MAR-19   A-01-01     aadake     ##1     Created.
    ======================================================= -->
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE `users` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `Name` varchar(30) DEFAULT NULL,
 `Email` varchar(20) DEFAULT NULL,
 `PhoneNo1` decimal(10,0) DEFAULT NULL,
 `PhoneNo2` int(10) DEFAULT NULL,
 `Address` varchar(50) DEFAULT NULL,
 `userName` varchar(20) DEFAULT NULL,
 `userPassword` varchar(20) DEFAULT NULL,
 `userType` varchar(10) NOT NULL DEFAULT 'Admin',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1

INSERT INTO `users` (`Name`, `Email`, `PhoneNo1`, `PhoneNo2`, `Address`, `userName`, `userPassword`, `userType`) VALUES ('Anand Vitthal Adake', 'anandadake007@gmail.com', '8007002257', NULL, 'At post Dawarwadi Tq Paithan Dist Abad', 'aadake', 'aadake', 'Admin');
INSERT INTO `users` (`Name`, `Email`, `PhoneNo1`, `PhoneNo2`, `Address`, `userName`, `userPassword`, `userType`) VALUES ('Vaibhav Babaso Shinde', 'vsshinde@gmail.com', '8000000000', NULL, 'Tasgoan', 'vs1326', 'vs1326', 'Admin');
INSERT INTO `users` (`Name`, `Email`, `PhoneNo1`, `PhoneNo2`, `Address`, `userName`, `userPassword`, `userType`) VALUES ('Andy', 'andy@gmail.com', '8007002257', NULL, 'Uran', 'andy', 'Andy', 'user');
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE course
(
	course_ID int(11) NOT NULL AUTO_INCREMENT, 
	course_Name varchar(50) NOT NULL,
	course_Fees decimal(10,2) default NULL,
	course_Duration int default NULL,
	PRIMARY KEY (course_ID)
);

INSERT INTO `course` (`course_Name`, `course_Fees`, `course_Duration`) VALUES ('JAVA', 10000.00, 3)
INSERT INTO `course` (`course_Name`, `course_Fees`, `course_Duration`, `course_DepartmentID`) VALUES ('PHP', 10000.00, 2)
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE departments 
(
	department_ID int NOT NULL AUTO_INCREMENT, 
	department_Name varchar(50), 
	PRIMARY KEY (department_ID)
);


INSERT INTO `departments` (`department_Name`) VALUES ('Management');
INSERT INTO `departments` (`department_Name`) VALUES ('Engineering');

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE staff (
  staff_ID int NOT NULL AUTO_INCREMENT,
  staff_Name varchar(10) default NULL,
  job varchar(9) default NULL,
  mgr decimal(4,0) default NULL,
  hiredate date default NULL,
  sal decimal(7,2) default NULL,
  deptno decimal(4,0) default NULL,
  PRIMARY KEY (staff_ID)
);

INSERT INTO staff VALUES ('SMITH','CLERK','7902','1980-12-17','800.00',NULL,'20');
INSERT INTO staff VALUES ('ALLEN','SALESMAN','7698','1981-02-20','1600.00','300.00','30');
INSERT INTO staff VALUES ('WARD','SALESMAN','7698','1981-02-22','1250.00','500.00','30');
INSERT INTO staff VALUES ('JONES','MANAGER','7839','1981-04-02','2975.00',NULL,'20');
INSERT INTO staff VALUES ('MARTIN','SALESMAN','7698','1981-09-28','1250.00','1400.00','30');
INSERT INTO staff VALUES ('BLAKE','MANAGER','7839','1981-05-01','2850.00',NULL,'30');
INSERT INTO staff VALUES ('CLARK','MANAGER','7839','1981-06-09','2450.00',NULL,'10');
INSERT INTO staff VALUES ('SCOTT','ANALYST','7566','1982-12-09','3000.00',NULL,'20');
INSERT INTO staff VALUES ('KING','PRESIDENT',NULL,'1981-11-17','5000.00',NULL,'10');



echo $_SESSION["userName"];



