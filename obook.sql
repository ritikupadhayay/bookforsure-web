CREATE TABLE obook
(
id int(10) NOT NULL,
bid int NOT NULL AUTO_INCREMENT,
cat varchar(100) NOT NULL,
college varchar(100) NOT NULL,
bname varchar(255) NOT NULL,
bsprice int(10) NOT NULL,
bmprice int(10),
bcond varchar(10),
bstar varchar(5),
bisbn_no varchar(50),
imageid int (10) NOT NULL AUTO_INCREMENT,
i1name varchar(50),
image1 blob,
i2name varchar(50),
image2 blob,
bdesc varchar(500) NOT NULL,
sname varchar(20) NOT NULL,
semail varchar(20) NOT NULL,
smobile varchar(11) NOT NULL,
saddr varchar(500) NOT NULL,
PRIMARY KEY (bid,imagid)
);