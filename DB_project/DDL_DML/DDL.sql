--
-- Copyright (c) Oracle Corporation 1988, 1999.  All Rights Reserved.
--
--  NAME
--    demobld.sql
--
-- DESCRIPTION
--   This script creates the SQL*Plus demonstration tables in the
--   current schema.  It should be STARTed by each user wishing to
--   access the tables.  To remove the tables use the demodrop.sql
--   script.
--
--  USAGE
--       SQL> START demobld.sql
--
--

SET TERMOUT ON
PROMPT Building demonstration tables.  Please wait.
SET TERMOUT OFF

CREATE TABLE Branch(
	BranchID NUMBER(10) NOT NULL,
	sector VARCHAR(25) ,
	city VARCHAR(15) ,
	phone_no NUMBER(10) UNIQUE NOT NULL,
	GPO_ID NUMBER(10) ,
	CONSTRAINT B_Id PRIMARY KEY(BranchID) ,
	CONSTRAINT G_Id FOREIGN KEY(GPO_ID) REFERENCES Branch(BranchID)
);

CREATE TABLE Collections(
	BranchID NUMBER(10) NOT NULL,
	d NUMBER(2),
	m NUMBER(2),
	y NUMBER(4),
	amCollected NUMBER(7),
	amReturned NUMBER(7),
	NoOfCol NUMBER(10) ,
	CONSTRAINT collections_branchID_d_m_y_pk PRIMARY KEY(BranchID,d,m,y) ,
	CONSTRAINT collections_branchID_fk FOREIGN KEY(BranchID) REFERENCES Branch(BranchID)
);

CREATE TABLE Staff(
	staffID  NUMBER(10)  NOT NULL,
	fname VARCHAR(15) NOT NULL,
	lname VARCHAR(15) NOT NULL,
	CNIC VARCHAR(16) UNIQUE ,
	salary NUMBER(10) NOT NULL,
	sector VARCHAR(8),
	city VARCHAR(15),
	phone_no NUMBER(11) ,
	branchID NUMBER(10)  NOT NULL,
	headOfBranch NUMBER(10) ,
	password VARCHAR(15) UNIQUE NOT NULL,
	CONSTRAINT S_Id PRIMARY KEY(staffID) ,
	CONSTRAINT Head_Id FOREIGN KEY(headOfBranch) REFERENCES Staff(staffID) ,
	CONSTRAINT br_Id FOREIGN KEY(branchID) REFERENCES Branch(BranchID)
);

-- the following code is to make the primary key, mail_ID of table Mail auto-incremented


CREATE TABLE Mail(
	mail_ID NUMBER(10)  NOT NULL,
	status VARCHAR(15) ,
	mailType VARCHAR(15) ,
	duration VARCHAR(15) ,
	service_type VARCHAR(15) ,
	Qty NUMBER(10) ,
	CurrentDate date ,
	bounced VARCHAR(3) ,
	delievererID NUMBER (10) ,
	CONSTRAINT m_Id PRIMARY KEY(mail_ID) ,
	CONSTRAINT del_Id FOREIGN KEY(delievererID) REFERENCES Staff(staffID) 
);





CREATE TABLE Customer (
	custID VARCHAR(10) NOT NULL,
	fname VARCHAR(15) NOT NULL,
	lname VARCHAR(15) NOT NULL,
	CNIC VARCHAR(15) UNIQUE ,
	street VARCHAR(15) ,
	sector VARCHAR(25),
	city VARCHAR(15),
	mobile_no NUMBER(11)  ,
	CONSTRAINT C_Id PRIMARY KEY(custID) 
);

-- the following code is to make the primary key, trackNo of table Tracking_history auto-incremented

CREATE TABLE Tracking_history(
	TrackNo NUMBER(10) NOT NULL,
	mail_ID NUMBER(10) NOT NULL,
	location VARCHAR(15) ,
	Cdate date,
	Ctime VARCHAR(15),
	status VARCHAR(25) ,
	CONSTRAINT T_no PRIMARY KEY(TrackNo,mail_ID) ,
	CONSTRAINT T_Id FOREIGN KEY(mail_ID) REFERENCES Mail(mail_ID) 
);

CREATE TABLE Shipment_Details(
	ARN VARCHAR(15) NOT NULL ,
	mail_ID NUMBER(10) NOT NULL,
	consignee VARCHAR(25) ,
	origin VARCHAR(25) ,
	destination VARCHAR(25) ,
	Booking_Date date ,
	CONSTRAINT Sm_no PRIMARY KEY(ARN,mail_ID) ,
	CONSTRAINT ma_Id FOREIGN KEY(mail_ID) REFERENCES Mail(mail_ID) 
);

CREATE TABLE Invoice (
	senderId VARCHAR(10) NOT NULL ,
	receipentID VARCHAR(10) NOT NULL ,
	PackageID NUMBER(10) NOT NULL ,
	fee  NUMBER(10) ,
	CONSTRAINT Invo PRIMARY KEY(senderId,receipentID,PackageID) ,
	CONSTRAINT se_Id FOREIGN KEY(senderId) REFERENCES Customer(CustID),
	CONSTRAINT re_Id FOREIGN KEY(receipentID) REFERENCES Customer(CustID),
	CONSTRAINT P_Id FOREIGN KEY(PackageID) REFERENCES Mail(mail_ID) 
);


COMMIT;

SET TERMOUT ON
PROMPT Demonstration table build is complete.
