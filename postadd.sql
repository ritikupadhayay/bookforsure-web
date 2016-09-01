CREATE TABLE post
(
id int(10) NOT NULL,
ptype varchar(30) NOT NULL,
pid int NOT NULL AUTO_INCREMENT,
cat varchar(30) NOT NULL,
college varchar(100) NOT NULL,
pname varchar(255) NOT NULL,
psprice integer(10) NOT NULL,
pmprice integer(10),
pcond varchar(10),
pstar varchar(5),
pisbn_no varchar(50),
pdesc varchar(500) NOT NULL,
pdate timestamp NOT NULL,
sname varchar(50) NOT NULL,
semail varchar(50) NOT NULL,
smobile varchar(15) NOT NULL,
saddr varchar(500) NOT NULL,
sedu varchar(200) NOT NULL,
sexpert varchar(200) NOT NULL,
sexp varchar(200) NOT NULL,
sabout varchar(500) NOT NULL,
name varchar(30) not null,
    type varchar(30) not null,
    size int(10) not null,
    content blob,
PRIMARY KEY (pid)
);