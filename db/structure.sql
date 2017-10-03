drop table if exists t_quote;
drop table if exists t_author;
drop table if exists t_category;
drop table if exists t_quote_category;

create table t_author ( -- a stands for author, f 1st, m middle, l last
a_id integer not null primary key auto_increment,
a_fName varchar(25),
a_mName varchar(50),
a_lName varchar(50) not null,
a_link varchar(50)

) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_quote ( -- q stands for quote
q_id integer not null primary key auto_increment,
q_description varchar(2000) not null,
-- q_category varchar(25) default 'général',
q_date datetime,
a_id integer not null,
constraint fk_q_a foreign key(a_id) references t_author(a_id)

) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_category ( -- store quote tag
cat_id integer not null primary key auto_increment,
cat_name varchar(50) not null

) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_quote_category ( -- q stands for quote
q_id integer not null,
cat_id integer not null

) engine=innodb character set utf8 collate utf8_unicode_ci;
