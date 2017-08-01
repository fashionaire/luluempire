CREATE DATABASE VISIOLA_LIBRARY

	CREATE TABLE books (
		book_id      int(6) NOT NULL PRIMARY KEY,
		Name         varchar(30),
		Volumes      int(3),
		Types        char(25),
		Author       char(30),
	    Releaseyear  int(10)
	     );

	CREATE TABLE staffs (
		Firstname   char(15) NOT NULL PRIMARY KEY,
		Middlename    char(15),
		lastname      char(15),
		Gender       char(7),
		phonenumber   varchar(20),
		dateofbirth varchar(20),
		email  varchar(30),
		position char(20),
		address  varchar(50)
		);

	CREATE TABLE customers (
        firstname char(15) NOT NULL PRIMARY KEY,
		lastname   char(15),
		gender      char(7),
		phonenumber int(20),
		email       varchar(30),
		address     varchar(50)
		);

	INSERT INTO customers (firstname,lastname, Gender, phonenumber, email, address)
	VALUES ('khan', 'obibo', 'male', '08065859595', 'ksdvihwwpigh@gmail.com', 'house nymber 45 ikiko street garki'),
	 ('bio', 'milano', 'male','09076238558', 'hiubiomilo@yahoo.com', 'efiko street of amino kano number'),
	 ('nene', 'okon', 'female', '+2340968421858', 'nfubjbjngu@yahoo.com', 'mararaba jikwe lane opposite mr biggz'),
	 ('ifeoma', 'james', 'female', '+234768668668', 'jhiguh68687@gmail.com', 'gudu'),
	 ('katherin', 'uju', 'female', '+234808074213', 'ujukaka@gmail.com', 'suncity estate')




	INSERT INTO books (book_id, Name, Volumes, Types, Author, Releaseyear)
    VALUES ('101', 'Harry potter', '2', 'fantasy', 'j.k Rowlings', '2001'),
        ('121', 'Return of the beast', '1', 'horror', 'milani gowan', '2016')


INSERT INTO staffs  (Firstname, Middlename, lastname, Gender, phonenumber, dateofbirth, email, position, address)
VALUES ('luciana', 'imaobong', 'Ebito', 'female', '2348094440537', '05-sept-1990', 'ebitolucy@gmail.com', 'ceo', 'area8 section2 house number17 off ile ife street'),
 ('tunnie', 'debby', 'adeeyo', 'female', '2348094440767', '21-oct-1960', 'dunniedebby@gmail.com', 'manager', 'zone 4 house number25 off katampe street'),
 	('lemmy', 'akan', 'Ebito', 'male', '238042648532','09-oct-1983', 'lemmyboy@gmail.com', 'admin officer', 'lake chad cresent numer18 maitaima')
		eav