CREATE TABLE users (
	id SERIAL PRIMARY KEY,
	username varchar,	
	email varchar,
	password varchar
);
CREATE TABLE languages(
	id SERIAL PRIMARY KEY,
	name varchar
);
CREATE TABLE vocab_lists(
	id SERIAL PRIMARY KEY,
	name varchar,
	language_id integer REFERENCES languages(id)
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
INSERT INTO languages(name) VALUES ('German');
INSERT INTO vocab_lists (name, language_id)
	VALUES ('Fruits', 1),
	('Vegetables', 1),
	('Furniture', 1);
INSERT INTO vocab_words (vocab_list_id, word, english_word)
	VALUES (1, 'der Apfel', 'the apple'),
	(1, 'die Birne', 'the pear'),
	(1, 'die Kirsche', 'the cherry'),
	(1, 'die Banane', 'the banana'),
	(1, 'die Ananas', 'the pineapple'),
	(1, 'die Orange', 'the orange'),
	(1, 'die Melone', 'the melon'),
	(1, 'die Traube', 'the grape'),
	(2, 'der Blumenkohl', 'the cauliflower'),
	(2, 'der Brokkoli', 'the broccoli'),
	(2, 'der Spinat', 'the spinach'),
	(2, 'die Zucchini', 'the zucchini'),
	(2, 'der Knoblauch', 'the garlic'),
	(2, 'der Kürbis', 'the Pumpkin'),
	(3, 'die Uhr', 'the clock'),
	(3, 'das Bücherregal', 'the bookcase'),
	(3, 'die Dusche', 'the shower'),
	(3, 'der Tisch', 'the table'),
	(3, 'der Stuhl', 'the chair'),
	(3, 'der Backofen', 'the oven'),
	(3, 'der Wasserhahn', 'the faucet');