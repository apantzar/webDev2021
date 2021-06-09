CREATE TABLE comments(
	CommentID int(11) not null AUTO_INCREMENT PRIMARY KEY,
    UserID Varchar(128) not null,
    Date datetime not null,
    message TEXT not null
);

CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  userType varchar(100) NOT NULL DEFAULT 'user'
);