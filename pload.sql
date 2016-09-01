create table uplode(
    id int(10) auto_increment not null,
    name varchar(30) not null,
    type varchar(30) not null,
    size int(10) not null,
    content blob,
    primary key(id)
    );