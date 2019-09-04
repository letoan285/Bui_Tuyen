-- xampp/mysql/bin
mysql -uroot -p; 
show database -- show databases;
create database tuyen_database;
create database bui_tuyen_database CHARACTER SET utf8 collate utf8_general_ci;
show tables;
create table users(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username varchar(100) not null,
    email varchar(100) not null,
    password varchar(255) not null,
    avatar varchar(255)
);
 describe users;
-- data type mysql 
-- char, 
-- varchar,
-- tinitext
-- text 65.000 ky tu
-- blob
-- mediumtext; 167.000.000 char
--longtext -- 42.000.000.000 char
-- tinyint 127
--int 11
-- smallint
-- mediumint
-- date
-- time
-- date time
-- timestime
-- true --> 1
-- false -- 0

-- CRUD
-- c: Create hien thi form -- them vao db
-- R: read/retrieve - read single - read many 
-- U: update - hien thi form update - update vao db
-- D: delete/destroy - xoa khoi db

-- Insert into table
insert into users(username, email, password) values('admin', 'admin@gmail.com', '123456');
insert into users(username, email, password) values('toan', 'toan@gmail.com', md5('12345'));
select username, email, password from users;
select * from users;
insert into users set username='tuyen', email='tuyen@gmail.com', password='123456';
update users set password=md5('123456') where id= 3;
delete from users where id = 2;

create table products(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) not null,
    slug varchar(255) not null,
    description TEXT,
    category_id INT not null,
    supplier_id INT,
    price INT not null,
    image varchar(255)
);
create table categories(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) not null,
    slug varchar(255) not null,
    description TEXT,
    parent_id INT default 0,
    image varchar(255)
);
-- sản phẩm của iphone 5s
-- san-pham-cua-iphone-5s
 update products set category_id=1 where price=5800 limit 1;

 -- Insert multiple rows
 insert into categories(name, slug) values('May de ban', 'may-de-ban'), ('May laptop', 'may-laptop');
 alter table products add column status int(11);
 update products set status = 1 where id % 2 = 0;
 update products set status = 0 where id % 2 = 1;
 update products set supplier_id=1 where id % 2 = 1 and supplier_id=2 where id % 2 = 0;
 UPDATE products SET supplier_id = IF(id % 2 = 0, 1, 2);
 select * from products group by supplier_id;
 select count(*) from products;
select *, price*stock from products;
select *, price*stock as 'stock total' from products;
select p.name, p.slug, p.price, price*stock from products as p;
select max(price) from products;
select min(price) from products;
select avg(price) from products;
subquery
select * from products where id in (select id from products where id % 2 = 2);
select * from products where price >= (select avg(price) from products);