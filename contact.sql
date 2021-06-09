CREATE TABLE contact (
    messageID int(11) not null AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) not null,
    email VARCHAR(100) not null,
    phone INTEGER(15) not null,
    Date datetime not null,
    message VARCHAR(300) not null
 );