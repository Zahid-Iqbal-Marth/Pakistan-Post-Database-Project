SET TERMOUT ON
PROMPT Building demonstration tables.  Please wait.
SET TERMOUT OFF

DROP TABLE Invoice;
DROP TABLE Shipment_Details;
DROP TABLE Tracking_history;
DROP TABLE Customer;
DROP TABLE Mail;
DROP TABLE Staff;
DROP TABLE Branch;

COMMIT;

SET TERMOUT ON
PROMPT Demonstration table build is complete.
