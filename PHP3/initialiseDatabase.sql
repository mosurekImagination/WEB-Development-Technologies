CREATE TABLE Users (
    id int AUTO_INCREMENT NOT NULL,
    login varchar(50) UNIQUE NOT NULL,
    password varchar(50) NOT NULL, 
    nazwisko varchar(50),
    imie varchar(50),
    Address varchar(200),
    City varchar(50),
    PRIMARY KEY (ID)
);

CREATE TABLE Friendships(
    id int AUTO_INCREMENT,
    firstFriend int,
    secondFriend int,
    dataZawarcia VARCHAR(200),
    PRIMARY KEY (id),
    FOREIGN KEY (firstFriend) REFERENCES Users(id),
    FOREIGN KEY (secondFriend) REFERENCES Users(id)
);