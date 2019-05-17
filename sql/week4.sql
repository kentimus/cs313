CREATE TABLE users (
	id SERIAL PRIMARY KEY,
	username varchar,	
	email varchar,
	password varchar
);
CREATE TABLE vocab_lists(
	id SERIAL PRIMARY KEY,
	name varchar,
	language varchar
);
CREATE TABLE vocab_words(
	id SERIAL PRIMARY KEY,
	vocab_list_id integer REFERENCES vocab_lists(id),
	word varchar,
	english_word varchar
);
CREATE TABLE quiz_results(
	id SERIAL PRIMARY KEY,
	vocab_list_id integer references vocab_lists(id),
	user_id integer references users(id),
	score float,
	date date
);
INSERT INTO vocab_lists (name, language)
	VALUES ('Fruits', 'German'),
	('Vegetables', 'German'),
	('Furniture', 'German');
INSERT INTO vocab_words (vocab_list_id, word, english_word)
	VALUES (1, 'der Apfel', 'the apple'),
	(1, 'die Birne', 'the pear'),
	(1, 'die Kirsche', 'the cherry'),
	(1, 'die Banane', 'the banana'),
	(1, 'die Ananas', 'the pineapple'),
	(1, 'die Orange', 'the orange'),
	(1, 'die Melone', 'the melon'),
	(1, 'die Traube', 'the grape');


