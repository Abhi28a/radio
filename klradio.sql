CREATE TABLE `user`( 
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    email varchar(255), name varchar(255),
    sid varchar(255), mobile varchar(255), 
    password varchar(255), 
    createdOn DATETIME,
    designation INT 
);

ALTER TABLE `user` ADD(profile varchar(255));

CREATE TABLE `login_history` ( 
    id INT NOT NULL,
    log_count INT NOT NULL,
    last_login DATETIME 
);

CREATE TABLE `update_history`(
    id INT NOT NULL,
    updatedOn DATETIME
    );

CREATE TABLE `session_history`( 
    id INT NOT NULL,
    session DATETIME
    );

ALTER TABLE `user` ADD (status INT);

CREATE TABLE `team_members`( 
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    name varchar(255), sid varchar(255), 
    branch varchar(255), 
    wing varchar(255), 
    twitter varchar(255), 
    facebook varchar(255), 
    instagram varchar(255), 
    linkedin varchar(255), 
    image varchar(255), 
    addedOn DATETIME 
    );

CREATE TABLE `student_block`( 
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    sid varchar(255), title varchar(255), 
    description varchar(1000), 
    image varchar(255), 
    addedOn DATETIME 
    );

