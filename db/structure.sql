drop table if exists t_quote;
drop table if exists t_author;
drop table if exists t_category;
drop table if exists t_quote_category;

create table t_author ( -- a stands for author
a_id integer not null primary key auto_increment,
a_fullName varchar(50) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_quote ( -- q stands for quote
q_id integer not null primary key auto_increment,
q_description varchar(2000) not null,
q_date datetime,
a_id integer not null,
constraint fk_q_a foreign key(a_id) references t_author(a_id)

) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_category ( -- store quote tag
cat_id integer not null primary key auto_increment,
cat_name varchar(50) not null

) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_quote_category (
q_id integer not null,
cat_id integer not null

) engine=innodb character set utf8 collate utf8_unicode_ci;
