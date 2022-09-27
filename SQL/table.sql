/* 
Horatio Grant
Table to capture user input for Horatio's website
2022-08-13
*/

CREATE TABLE UserMessage(
  messageId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(100),
   Name VARCHAR(40), 
    UserMessage VARCHAR(400),
    createdON DATE

);

SELECT * FROM UserMessage;