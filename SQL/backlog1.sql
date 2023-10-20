CREATE DATABASE IF NOT EXISTS memory_database CHARACTER SET 'utf8'; 

USE memory_database;

/*---Table UTILISATEUR---*/
CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) UNIQUE NOT NULL,
    passwords VARCHAR(255) NOT NULL,
    pseudo VARCHAR(20) UNIQUE NOT NULL,
    inscription_hour DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    last_connexion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
)
ENGINE = INNODB;

/*---Table JEU---*/
CREATE TABLE IF NOT EXISTS game (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name_game TEXT NOT NULL,
    PRIMARY KEY (id)
)
ENGINE = INNODB;

/*---Table SCORE---*/
CREATE TABLE IF NOT EXISTS scores (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    users_id INT UNSIGNED NOT NULL, 
    game_id INT UNSIGNED NOT NULL, 
    level INT UNSIGNED NOT NULL, 
    score INT UNSIGNED NOT NULL,
    game_hour DATETIME NULL DEFAULT CURRENT_TIMESTAMP, 
    PRIMARY KEY (id),
    FOREIGN KEY (users_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (game_id) REFERENCES game(id) ON DELETE CASCADE
)
ENGINE = INNODB;

/*---Table MESSAGE---*/
CREATE TABLE IF NOT EXISTS message  (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    game_id INT UNSIGNED NOT NULL,
    users_id_from INT UNSIGNED NOT NULL,
    text_message TEXT NOT NULL,
    date_hour_message DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (game_id) REFERENCES game(id) ON DELETE CASCADE,
    FOREIGN KEY (users_id_from) REFERENCES users(id) ON DELETE CASCADE
)
ENGINE = INNODB;

/* story 6*/ 
INSERT INTO game (name_game)
VALUES (' The_power_of_memory');

/* story 2*/
INSERT INTO users (email,passwords,pseudo,inscription_hour,last_connexion)
VALUES ('jaques.j@gmail.com','jaquesboss','jaquesj','2023-10-21 15-30-20','2023-10-16 15:35:00'),
       ('tom.t@gmail.com','tommaster','tomt','2023-10-17 15-30-20','2023-10-17 15:35:00'),
       ('kaihcy.k@gmail.com','kaihcybauty','kaihcyk','2023-10-18 15-30-20','2023-10-18 15:35:00'),
       ('ilona.r@gmail.com','ilonarou','ilonar','2023-10-19 15-30-20','2023-10-19 15:35:00'),
       ('roger.g@gmail.com','rogerboss','rogerg','2023-10-20 15-30-20','2023-10-20 15:35:00');

INSERT INTO message (game_id,users_id_from,text_message,date_hour_message)
VALUES    ('1','1','salut','2023-10-21 15:35:00'),
          ('1','2','hello','2023-10-21 15:35:05'),
          ('1','3','bonjour','2023-10-21 15:35:10'),
          ('1','4','yo','2023-10-21 15:35:15'),
          ('1','5','wesh','2023-10-21 15:35:20'),
          ('1','1','ca va ? ','2023-10-21 15:35:25'),
          ('1','2','comment ça va ?','2023-10-21 15:35:30'),
          ('1','3','comment vas ? ','2023-10-21 15:35:40'),
          ('1','4','tranquille ? ','2023-10-21 15:35:45'),
          ('1','5','quoi de neuf ? ','2023-10-21 15:35:50'),
          ('1','1','je vais bien','2023-10-21 15:35:55'),
          ('1','2','on est là','2023-10-21 15:36:00'),
          ('1','3','moi ça va ','2023-10-21 15:36:05'),
          ('1','4','tranquille','2023-10-21 15:35:10'),
          ('1','5','oui','2023-10-21 15:35:15'),
          ('1','1','trop bien','2023-10-21 15:35:20'),
          ('1','2','trop fort','2023-10-21 15:35:25'),
          ('1','3','bien jouer','2023-10-21 15:35:30'),
          ('1','4','cool','2023-10-21 15:35:35'),
          ('1','5','lourd','2023-10-21 15:35:40'),
          ('1','1','tu veux jouer ?','2023-10-22 07:52:50'),
          ('1','2','wanna play ?','2023-10-22 07:54:55'),
          ('1','3','gaming ?', '2023-10-22 07:55:05'),
          ('1','4','on joue ?', '2023-10-22 07:57:10'),
          ('1','5','ça te dis une game ?', '2023-10-22 07:59:15');

INSERT INTO scores (users_id, game_id,level, score, game_hour)
VALUES  ('1','1','1','200','2023-10-21 15:35:00'),
        ('1','1','1','320','2023-10-21 15:35:05'),
        ('1','1','2','400','2023-10-21 15:35:10'),
        ('1','1','3','30','2023-10-21 15:35:15'),
        ('1','1','3','245','2023-10-21 15:35:20'),
        ('2','1','1','210','2023-10-21 15:35:25'),
        ('2','1','1','245','2023-10-21 15:35:30'),
        ('2','1','2','40','2023-10-21 15:35:40'),
        ('2','1','3','90','2023-10-21 15:35:45'),
        ('2','1','3','130','2023-10-21 15:35:50'),
        ('3','1','1','245','2023-10-21 15:35:55'),
        ('3','1','1','190','2023-10-21 15:36:00'),
        ('3','1','2','370','2023-10-21 15:36:05'),
        ('3','1','3','200','2023-10-21 15:35:10'),
        ('3','1','3','150','2023-10-21 15:35:15'),
        ('4','1','1','45','2023-10-21 15:35:20'),
        ('4','1','1','77','2023-10-21 15:35:25'),
        ('4','1','2','88','2023-10-21 15:35:30'),
        ('4','1','3','210','2023-10-21 15:35:35'),
        ('4','1','3','290','2023-10-21 15:35:40'),
        ('5','1','1','400','2023-10-22 08:13:45'),
        ('5','1','1','545','2023-10-22 08:14:50'),
        ('5','1','2','436','2023-10-22 08:15:55'),
        ('5','1','3','274','2023-10-22 08:17:05'),
        ('5','1','3','137','2023-10-22 08:18:16');

/* story 3*/
INSERT INTO users ( email, passwords, pseudo,inscription_hour )
VALUES ( 'kikoo95@gmail.com', 'kikoo95cergy', 'Kikooks', '2023-10-16 15:00:00');


/* story 4*/
UPDATE users
SET passwords = 'nv_mot_de_passe'
WHERE id = 1;

UPDATE users
SET email = 'nv email'
WHERE id = 1;

/* story 5 */ 
SELECT *
FROM users
WHERE email = 'monemail@gmail.com' AND passwords = 'mypasswords';


/* story 7/8 */
SELECT U.pseudo, S.level, S.score, G.name_game
FROM users as U
INNER JOIN scores as S
    ON U.id = S.users_id
INNER JOIN game as G 
    ON S.game_id = G.id
WHERE name_game = ' The_power_of_memory ' || pseudo = 'jaquesj' || level = 2
ORDER BY name_game ASC,level, score; 


/* story 9*/ 
SELECT *
FROM scores 
WHERE game_id = '1' && level= '2' && users_id = '3';
    
UPDATE scores
SET score = '900'
WHERE id = '2';

INSERT INTO scores (users_id, game_id,level,score,game_hour)
VALUES ('3','1','2','900','2023-10-22 14:27:58');

/* story 10*/ 
INSERT INTO message (game_id,users_id_from,text_message,date_hour_message)
VALUES ('1','1',' trop bien la game hier ','2023-10-23 15:35:47');

/* story 11 */ 
SELECT M.text_message, U.pseudo, M.date_hour_message, M.users_id_from = 3 AS isSender
FROM message AS M
INNER JOIN users AS U 
    ON M.users_id_from = U.id
WHERE date_hour_message >= NOW() - INTERVAL 1 DAY;

/* story 12*/ 
SELECT U.pseudo, S.*
FROM users AS U 
INNER JOIN scores AS S 
	ON U.id = S.users_id && U.pseudo LIKE '%AU%';
    
