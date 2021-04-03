-- (1)
-- make changes in the Branch table
-- replace currentDate with d(date), m(month) and y(year)

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

INSERT INTO Branch VALUES(1,'G-8/1','Islamabad',0517946368,NULL); -- this is the GPO
INSERT INTO Branch VALUES(2,'F-7/2','Islamabad',0516793645,1);
INSERT INTO Branch VALUES(3,'E-9','Islamabad',0517593756,1);

-- Collections

-- Staff
INSERT INTO Staff VALUES(1,'Ahmad','Bajwa','61101-7492549-5',1000,'F-7/2','Islamabad',03452947946,2,NULL,'1234');
INSERT INTO Staff VALUES(50,'Adnan','Ahmad','61101-9204736-7',2000,'G-9/4','Islamabad',03411848483,1,NULL,'67394');
INSERT INTO Staff VALUES(33,'Haris','Sohail','61101-4947290-6',1000,'H-8/1','Islamabad',03338572947,1,NULL,'84928A');
INSERT INTO Staff VALUES(5,'Mohammad','Fawad','61101-9857398-4',8000,'H-11','Islamabad',03218739498,1,1,'847Qui93');
INSERT INTO Staff VALUES(8,'Daud','Ahmed','61101-8472058-1',8000,'G-13','Islamabad',03417648291,2,50,'7628yT939');
INSERT INTO Staff VALUES(90,'Jawad','Waseem','61101-3762045-1',8000,'F-10/1','Islamabad',032475902841,3,33,'abcd');
--INSERT INTO Staff VALUES(90,'Mudassar','Rehman','61101-2848010-4',3000,'F-10/1','Islamabad',032475902841,3,NULL,'84Y93');

-- Mail
INSERT INTO Mail VALUES(1,'Sent','parcel',2,'regular',3,DATE '2019-09-04','No',1);
INSERT INTO Mail VALUES(2,'Delieverd','letter',1,'one day',1,DATE '2018-12-1','No',90);
INSERT INTO Mail VALUES(30,'Sent','parcel',2,'regular',3,DATE '2019-09-04','No',1);

-- Customer
INSERT INTO Customer VALUES(1,'Ahmed','Bilawal','61101-3421093-7','6','H-11/1','Islamabad',03348346763);
INSERT INTO Customer (custID,fname,lname,street,sector,city) VALUES(2,'Ehsan','Tahir','324','G-8/2','Islamabad');

-- Tracking_history
INSERT INTO Tracking_history VALUES(1,1,'Islamabad',DATE '2019-09-04','11:30:00 AM','Departed from Origin');
INSERT INTO Tracking_history VALUES(2,1,'Islamabad',DATE '2019-09-06','02:45:00 PM','DELIEVERED');
INSERT INTO Tracking_history VALUES(1,2,'Islamabad',DATE '2018-12-01','03:30:00 PM','Departed from Origin');
INSERT INTO Tracking_history VALUES(2,2,'Islamabad',DATE '2019-09-05','12:00:00 PM','DELIEVERED');

-- Shipment_Details
INSERT INTO Shipment_Details VALUES(1,1,'SETCON','Islamabad','Islamabad',DATE '2019-09-04');
INSERT INTO Shipemnt_Details VALUES(90,2,'SETCON','Islamabad','Islamabad',DATE '2018-12-01');

-- Invoice
INSERT INTO Invoice VALUES(1,2,1,200);
INSERT INTO Invoice VALUES(1,2,30,400);


COMMIT;

SET TERMOUT ON
PROMPT Demonstration table build is complete.
