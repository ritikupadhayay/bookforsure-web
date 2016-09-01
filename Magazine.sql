CREATE TABLE magazine
(
id int(10) NOT NULL,
mgid int(10) NOT NULL AUTO_INCREMENT,
college varchar(50) NOT NULL,
mgname varchar(255) NOT NULL,
mgsprice int(10) NOT NULL,
mgcond varchar(10),
mgdesc varchar(500) NOT NULL,
mgsname varchar(20) NOT NULL,
mgsemail varchar(20) NOT NULL,
mgsmobile varchar(11) NOT NULL,
mgsaddr varchar(500) NOT NULL,
PRIMARY KEY (mgid)
);