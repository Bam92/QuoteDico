drop table if exists t_quote;

create table t_quote (
q_id integer not null primary key auto_increment,
q_author varchar(50) not null,
q_description varchar(2000) not null

) engine=innodb character set utf8 collate utf8_unicode_ci;