CREATE TABLE member (
    id varchar(16) not null PRIMARY KEY,
    pw varchar(20) not null,
    email varchar(30) not null,
    date datetime not null,
    permit tinyint(3) unsigned 
);
