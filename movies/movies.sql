DROP DATABASE IF EXISTS video;
CREATE DATABASE video DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE video;

CREATE TABLE movies
(
id int AUTO_INCREMENT,
title varchar(35) not null,
cover text not null,
description text not null,
release_year year(4) not null,
duration smallint not null,
primary key(id)
)engine=innodb;

CREATE TABLE actors
(
id int AUTO_INCREMENT,
name varchar(35) not null,
surname varchar(35) not null,
photo_url text not null,
bio text not null,
primary key(id)
)engine=innodb;

CREATE TABLE movies_actors
(
id_movies int not null,
id_actors int not null,
primary key(id_movies,id_actors),
foreign key(id_movies) REFERENCES movies(id) ON UPDATE CASCADE ON DELETE CASCADE,
foreign key(id_actors) REFERENCES actors(id) ON UPDATE CASCADE ON DELETE CASCADE
)engine=innodb;

INSERT INTO movies
VALUES
('','Aquaman','https://m.media-amazon.com/images/M/MV5BOTk5ODg0OTU5M15BMl5BanBnXkFtZTgwMDQ3MDY3NjM@._V1_UX182_CR0,0,182,268_AL_.jpg','Arthur Curry learns that he is the heir to the underwater kingdom of Atlantis, and must step forward to lead his people and be a hero to the world.','2018',143),
('','Avengers Infinity War','https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_UX182_CR0,0,182,268_AL_.jpg','The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.','2018',149),
('','Wonderwoman','https://m.media-amazon.com/images/M/MV5BNDFmZjgyMTEtYTk5MC00NmY0LWJhZjktOWY2MzI5YjkzODNlXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_UX182_CR0,0,182,268_AL_.jpg','When a pilot crashes and tells of conflict in the outside world, Diana, an Amazonian warrior in training, leaves home to fight a war, discovering her full powers and true destiny.','2017',141),
('','Fantastic Beasts: The Crimes of Grindelwald','https://m.media-amazon.com/images/M/MV5BZjFiMGUzMTAtNDAwMC00ZjRhLTk0OTUtMmJiMzM5ZmVjODQxXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_UX182_CR0,0,182,268_AL_.jpg','The second installment of the "Fantastic Beasts" series featuring the adventures of Magizoologist Newt Scamander.','2018',134),
('','Lucy','https://m.media-amazon.com/images/M/MV5BODcxMzY3ODY1NF5BMl5BanBnXkFtZTgwNzg1NDY4MTE@._V1_UX182_CR0,0,182,268_AL_.jpg','A woman, accidentally caught in a dark deal, turns the tables on her captors and transforms into a merciless warrior evolved beyond human logic.','2014',89),
('','Ghost in the Shell','https://m.media-amazon.com/images/M/MV5BMzJiNTI3MjItMGJiMy00YzA1LTg2MTItZmE1ZmRhOWQ0NGY1XkEyXkFqcGdeQXVyOTk4MTM0NQ@@._V1_UX182_CR0,0,182,268_AL_.jpg','In the near future, Major Mila Killian is the first of her kind: A human saved from a terrible crash, who is cyber-enhanced to be a perfect soldier devoted to stopping the world? most dangerous criminals.','2017',107),
('','Venom','https://m.media-amazon.com/images/M/MV5BNzAwNzUzNjY4MV5BMl5BanBnXkFtZTgwMTQ5MzM0NjM@._V1_UX182_CR0,0,182,268_AL_.jpg','When Eddie Brock acquires the powers of a symbiote, he will have to release his alter-ego ?enom?to save his life.','2018',112);


INSERT INTO actors
VALUES
('','Tom','Hardy','https://m.media-amazon.com/images/M/MV5BMTQ3ODEyNjA4Nl5BMl5BanBnXkFtZTgwMTE4ODMyMjE@._V1_UX214_CR0,0,214,317_AL_.jpg','With his breakthrough performance as Eames in Christopher Nolan? sci-fi thriller Inception (2010), English actor Tom Hardy has been brought to the attention of mainstream audiences worldwide. '),
('','Scarlett','Johansson','https://m.media-amazon.com/images/M/MV5BMTM3OTUwMDYwNl5BMl5BanBnXkFtZTcwNTUyNzc3Nw@@._V1_UY317_CR23,0,214,317_AL_.jpg','Scarlett Johansson was born in New York City. Her mother, Melanie Sloan, is from a Jewish family from the Bronx, and her father, Karsten Johansson, is a Danish-born architect, from Copenhagen.'),
('','Morgan','Freeman','https://m.media-amazon.com/images/M/MV5BMTc0MDMyMzI2OF5BMl5BanBnXkFtZTcwMzM2OTk1MQ@@._V1_UX214_CR0,0,214,317_AL_.jpg','With an authoritative voice and calm demeanor, this ever popular American actor has grown into one of the most respected figures in modern US cinema. Morgan was born on June 1, 1937 in Memphis, Tennessee, to Mayme Edna (Revere), a teacher, and Morgan Porterfield Freeman, a barber.'),
('','Johnny','Depp','https://m.media-amazon.com/images/M/MV5BMTM0ODU5Nzk2OV5BMl5BanBnXkFtZTcwMzI2ODgyNQ@@._V1_UY317_CR4,0,214,317_AL_.jpg','Johnny Depp is perhaps one of the most versatile actors of his day and age in Hollywood. He was born John Christopher Depp II in Owensboro, Kentucky, on June 9, 1963, to Betty Sue (Wells), who worked as a waitress, and John Christopher Depp, a civil engineer.'),
('','Carmen','Ejogo','https://m.media-amazon.com/images/M/MV5BMjI4NzA5NzI0MV5BMl5BanBnXkFtZTcwNTY3MDY0Ng@@._V1_UY317_CR12,0,214,317_AL_.jpg','Carmen Elizabeth Ejogo was born in Kensington, London, England, to a Nigerian father and a Scottish mother. Her television career began in the United Kingdom in the early 1990s, where she presented the children? series Saturday Disney (1990).'),
('','Gal','Gadot','https://m.media-amazon.com/images/M/MV5BMjUzZTJmZDItODRjYS00ZGRhLTg2NWQtOGE0YjJhNWVlMjNjXkEyXkFqcGdeQXVyMTg4NDI0NDM@._V1_UY317_CR51,0,214,317_AL_.jpg','Gal Gadot is an Israeli actress, singer, martial artist, and model. She was born in Rosh Ha?yin, Israel, to a Jewish family. Her parents are Irit, a teacher, and Michael, an engineer, who is a sixth-generation Israeli. She served in the IDF for two years, and won the Miss Israel title in 2004. '),
('','Robert','Downey Jr.','https://m.media-amazon.com/images/M/MV5BNzg1MTUyNDYxOF5BMl5BanBnXkFtZTgwNTQ4MTE2MjE@._V1_UX214_CR0,0,214,317_AL_.jpg','Robert Downey Jr. has evolved into one of the most respected actors in Hollywood. With an amazing list of credits to his name, he has managed to stay new and fresh even after over four decades in the business. Downey was born April 4, 1965 in Manhattan, New York, the son of writer, director and filmographer Robert Downey Sr. and actress.'),
('','Jason','Momoa','https://m.media-amazon.com/images/M/MV5BMTI5MTU5NjM1MV5BMl5BanBnXkFtZTcwODc4MDk0Mw@@._V1_UX214_CR0,0,214,317_AL_.jpg','Joseph Jason Namakaeha Momoa was born on August 1, 1979, in Honolulu, Hawaii. He is the son of Coni (Lemke), a photographer, and Joseph Momoa, a painter. His father is of Hawaiian descent and his mother, who is from Iowa, is of mostly German ancestry. Jason was raised in Norwalk, Iowa, by his mother.'),
('','Amber','Heard','https://m.media-amazon.com/images/M/MV5BMTQ0MjA1ODU0MV5BMl5BanBnXkFtZTgwNTczNTkwNjE@._V1_UY317_CR10,0,214,317_AL_.jpg','Amber Laura Heard was born in Austin, Texas, to Patricia Paige Heard (nee Parsons), an internet researcher, and David C. Heard (David Clinton Heard), a contractor. She has English, Irish, Scottish, German, and Welsh ancestry. Heard appeared in the Academy Award-nominated film, North Country (2005), in which she played Charlize Theron? character.');

INSERT INTO movies_actors
VALUES
(1,8),
(1,9),
(2,2),
(2,7),
(3,6),
(4,4),
(4,5),
(5,2),
(5,3),
(6,2),
(7,1);