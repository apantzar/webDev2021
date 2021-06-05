CREATE TABLE comments(
	CommentID int(11) not null AUTO_INCREMENT PRIMARY KEY,
    UserID Varchar(128) not null,
    Date datetime not null,
    message TEXT not null
);