USE viduc;

CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100),
	sex VARCHAR(100),
	age VARCHAR(50),
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	created DATETIME,
	modified DATETIME
);

CREATE TABLE preferences (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(200) NOT NULL,
	created DATETIME,
	modified DATETIME,
	UNIQUE KEY (name)
)

CREATE TABLE users_preferences (
	user_id INT NOT NULL,
	preference_id INT NOT NULL,
	PRIMARY KEY(user_id, preference_id),
	FOREIGN KEY user_key(user_id) REFERENCES users(id),
	FOREIGN KEY preference_key(preference_id) REFERENCES preferences(id)
)