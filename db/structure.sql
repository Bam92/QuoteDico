-- Drop existing tables
drop table if exists t_quote;
drop table if exists t_author;
drop table if exists t_category;
drop table if exists t_quote_category;
drop table if exists t_tag;
drop table if exists t_quote_tag;

-- Then Recreate them
create table t_author ( -- a stands for author
a_id integer not null primary key auto_increment,
a_fullName varchar(50) not null

) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_quote ( -- q stands for quote
q_id integer not null primary key auto_increment,
q_description varchar(255) not null,
a_id integer not null,
constraint fk_q_a foreign key(a_id) references t_author(a_id)

) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_tag ( -- store quote tag, t stands for tag
t_id integer not null primary key auto_increment,
t_name varchar(50) not null

) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_quote_tag (
q_id integer not null,
t_id integer not null

) engine=innodb character set utf8 collate utf8_unicode_ci;
