 CREATE TABLE cn_notes
(
id int(10) NOT NULL,
cnid int NOT NULL AUTO_INCREMENT,
cat varchar(100) NOT NULL,
college varchar(100) NOT NULL,
cnname varchar(255) NOT NULL,
cnsprice int(10) NOT NULL,
cncond varchar(10),
cndesc varchar(500) NOT NULL,
cnsname varchar(50) NOT NULL,
cnsemail varchar(20) NOT NULL,
cnsmobile varchar(11) NOT NULL,
cnsaddr varchar(500) NOT NULL,
PRIMARY KEY (cnid)
);