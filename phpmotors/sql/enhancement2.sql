/*Insert a new client*/
INSERT INTO clients (clientFirstname, clientLastname, clientEmail, clientPassword, clientLevel, comment) 
Values('Tony','Stark','tony@starkent.com','Iam1ronM@n', 1, 'I am the real Iron Man');

/*Modify the Tony Stark record*/
UPDATE clients
SET clientLevel = 3
WHERE client_id = 1;

/*Modify the "GM Hummer" record to read "spacious interior"*/
UPDATE inventory
set invDescription = REPLACE(invDescription, 'small interior', 'spacious interior')
WHERE invId = '12'; 

/*inner join */
SELECT inventory.invModel, carclassification.classificationName
FROM inventory
INNER JOIN carclassification ON inventory.classificationId = carclassification.classificationId
WHERE carclassification.classificationName = 'SUV';


/*Delete the Jeep Wrangler*/
DELETE FROM inventory
WHERE invModel = 'Wrangler' ;

/*add "/phpmotors" to the beginning of the file path in the invImage and invThumbnail columns*/
UPDATE inventory
SET invImage = CONCAT("/phpmotors", invImage),
  invThumbnail = CONCAT("/phpmotors", invThumbnail);