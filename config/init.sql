create database sns_php;

grant all on sns_php.* to dbuser@localhost identified by 'tP9qUn7a';

use sns_php

usersテーブル
---------------------------------------------
create table users (
  id int not null auto_increment primary key,
  email varchar(255) unique,
  password varchar(255),
  created datetime,
  modified datetime
);

desc users;

alter table users add name varchar(32);


truncate table users;
---------------------------------------------

chatsテーブル
---------------------------------------------
create table chats (
  id int not null auto_increment primary key,
  user_id int,
  comment text,
  created_at timestamp not null default current_timestamp,
  updated_at timestamp not null default current_timestamp on update current_timestamp
);

insert into chats (user_id, comment) values
(1, 'hogehoge'),
(1, 'hugahuga'),
(1, 'pigepige');
---------------------------------------------