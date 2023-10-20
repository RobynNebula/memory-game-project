/* Story 1 */

CREATE DATABASE IF NOT EXISTS services_db CHARACTER SET 'utf8';

USE services_db;

/* Story 1*/

CREATE TABLE utilisateurs (
  id                INT UNSIGNED NOT NULL AUTO_INCREMENT,
  pseudo            VARCHAR(40) UNIQUE NOT NULL,
  email             VARCHAR(90) UNIQUE NOT NULL,
  mot_de_passe      VARCHAR(191) NOT NULL,
  adresse           VARCHAR(80) DEFAULT NULL,
  code_postal       VARCHAR(80) DEFAULT NULL,
  ville             VARCHAR(80) DEFAULT NULL,
  pays              VARCHAR(80) DEFAULT NULL,
  portable          VARCHAR(30) DEFAULT NULL,
  fixe              VARCHAR(30) DEFAULT NULL,
  date_inscription  DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(id)
) ENGINE = INNODB;

CREATE TABLE services (
  id                INT UNSIGNED NOT NULL AUTO_INCREMENT,
  id_utilisateur    INT UNSIGNED NOT NULL,
  nom               VARCHAR(80) NOT NULL,
  description       VARCHAR(80) NOT NULL,
  adresse           VARCHAR(80) NOT NULL,
  code_postal       VARCHAR(80) NOT NULL,
  ville             VARCHAR(80) NOT NULL,
  pays              VARCHAR(80) NOT NULL,
  date_service      DATETIME NOT NULL,
  informations      TEXT DEFAULT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (id_utilisateur)  REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = INNODB;

CREATE TABLE services_utilisateurs (
  id                INT UNSIGNED NOT NULL AUTO_INCREMENT,
  id_service        INT UNSIGNED NOT NULL,
  id_utilisateur    INT UNSIGNED NOT NULL,
  date_inscription  DATETIME NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (id_service)      REFERENCES services(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (id_utilisateur)  REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = INNODB;

CREATE TABLE messages (
  id              INT UNSIGNED NOT NULL AUTO_INCREMENT,
  id_expediteur   INT UNSIGNED NOT NULL,
  id_receveur     INT UNSIGNED NOT NULL,
  contenu         TEXT,
  date_envoie     DATETIME NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (id_expediteur)   REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (id_receveur)     REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = INNODB;

/* Story 2 */

INSERT INTO utilisateurs (pseudo, email, mot_de_passe, date_inscription)
VALUES ('Pseudo1', 'hello@free.fr', '123456', NOW());

INSERT INTO utilisateurs (pseudo, email, mot_de_passe, adresse, code_postal, ville, pays, portable, fixe, date_inscription)
VALUES
('Pseudo2', 'hello2@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo3', 'hello3@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo4', 'hello4@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo5', 'hello5@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo6', 'hello6@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo7', 'hello7@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo8', 'hello8@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo9', 'hello9@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo10', 'hello10@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo11', 'hello11@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW());

/* Story 3 */

UPDATE utilisateurs set adresse = '2 rue du lac', code_postal = '75019', ville = 'Paris', pays = 'France', portable = '0602030405', fixe = '0102030405'
WHERE id = 1;

/* Story 4 */

INSERT INTO services (id_utilisateur, nom, description, adresse, code_postal, ville, pays, date_service)
VALUES
(1, 'Laver ma vaisselle', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-28 15:01'),
(7, 'Laver ma voiture', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-18 13:01'),
(5, 'Peindre mes murs', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-18 15:01'),
(4, 'Chasser les pokemons', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-16 15:01'),
(3, 'Monter mon lave vaisselle', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-13 15:01'),
(3, 'Repasser mes chemises', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-12 12:01'),
(9, 'M''aider à trouver une idée de service', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-09 15:01'),
(11, 'Sortir mes chiens', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-02 11:01'),
(1, 'Dire bonjour à mes chats', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-25 12:22'),
(7, 'Aller se promener', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-01 09:01');

/* Story 5 */

INSERT INTO services_utilisateurs (id_service, id_utilisateur, date_inscription)
VALUES
(1, 5, '2019-11-15 11:18'),
(2, 6, '2019-11-15 11:18'),
(3, 8, '2019-11-15 11:18'),
(4, 2, '2019-11-15 11:18'),
(5, 4, '2019-11-15 11:18'),
(6, 9, '2019-11-15 11:18'),
(7, 10, '2019-11-15 11:18'),
(8, 11, '2019-11-15 11:18'),
(3, 8, '2019-11-15 11:18'),
(10, 3, '2019-11-15 11:18'),
(6, 2, '2019-11-15 11:18'),
(7, 10, '2019-11-15 11:18');


/* story 7 */
INSERT INTO messages (id_expediteur, id_receveur, contenu, date_envoie)
VALUES
(2, 1, 'Bonjour, j''aimerais m''inscrire pour un service', '2023-10-18 11:22'),
(1, 2, 'Bonjour, de quel service aimeriez-vous profiter ? ', '2023-10-18 11:27'),
(2, 1, 'j''aimerais le service: dire bonjour à mes chats', '2023-10-18 11:32'),
(1, 2, 'pas de problème donnez moi une date et une adresse', '2023-10-18 11:38'),
(2, 1, 'bien sure! adresse: adresse random date: date random', '2023-10-18 11:43'),
(1, 2, 'pas de soucis je vous notes pour date random', '2023-10-18 11:47'),
(2, 1, 'merci aurevoir', '2023-10-18 11:52'),
(10, 5, 'Bonjour','2023-10-18 11:31'),
(5, 10, 'Bonjour','2023-10-18 11:36'),
(10, 5, 'J''aimerais votre service poour peindre mes murs du salon','2023-10-18 11:41'),
(5, 10, 'Pas de probleme, je vais vous donnez un rendez vous pour lundi','2023-10-18 11:46'),
(6, 11, 'Bonjour','2023-10-18 11:33'),
(11, 6, 'Bonjour','2023-10-18 11:38'),
(6, 11, 'J''aimerais que vous sortiez mes chiens mardi','2023-10-18 11:43'),
(11, 6, 'Bien sur je prend note','2023-10-18 11:47'),
(7, 4, 'Bonjour','2023-10-18 11:34'),
(4, 7, 'Bonjour','2023-10-18 11:39'),
(7, 4, 'On peut aller ensemble se promener et chasser les pokemons ensemble ?','2023-10-18 11:44'),
(4, 7, 'Bien sur, c''est super !','2023-10-18 11:49'),
(3, 7, 'Bonjour','2023-10-18 11:36'),
(7, 3, 'Salut !','2023-10-18 11:41'),
(3, 7, 'Pourriez vous venir monter mon lave vaisselle dans la matiné de demain ?','2023-10-18 11:46'),
(7, 3, 'Oui, avec plaisir ! Je viens demain pour 10h','2023-10-18 11:51'),
(3, 7, 'Merci beaucoup ! A demain !','2023-10-18 11:57'),
(7, 3, 'A demain !', '2023-10-18 11:52' );

/* story 8 */
SELECT DISTINCT U1.pseudo AS expediteur, U2.pseudo AS receveur, M.contenu, M.date_envoie
FROM messages AS M
INNER JOIN utilisateurs AS U1 
  ON U1.id = M.id_expediteur
INNER JOIN utilisateurs AS U2
  ON U2.id = M.id_receveur
WHERE (M.id_expediteur = 7 AND M.id_receveur != 7) 
ORDER BY date_envoie ASC;

/* story 9 */
SELECT U1.pseudo AS expediteur,M.contenu, U2.pseudo AS receveur, M.date_envoie
FROM messages AS M
INNER JOIN utilisateurs AS U1 
  ON U1.id = M.id_expediteur
INNER JOIN utilisateurs AS U2
  ON U2.id = M.id_receveur
WHERE (M.id_expediteur = 1 AND M.id_receveur = 2) OR (M.id_receveur = 1 AND M.id_expediteur = 2)
ORDER BY date_envoie DESC;

/* story 10 */
SELECT S.nom, S.code_postal, S.ville, S.pays, SU.id_service
FROM services AS S
LEFT JOIN services_utilisateurs AS SU
  ON S.id = SU.id_utilisateur 
WHERE date_service >= NOW() && SU.id !=8
ORDER BY date_service DESC, ville ASC;

/* story 11 */
SELECT S.*, U1.pseudo AS proposeur, U1.portable AS proposeur_num, U2.pseudo AS inscrit
FROM services AS S 
LEFT JOIN utilisateurs AS U1 
  ON U1.id = S.id_utilisateur
LEFT JOIN services_utilisateurs AS SU 
  ON S.id = SU.id_service
LEFT JOIN utilisateurs AS U2 
  ON U2.id = SU.id_utilisateur
WHERE S.id = 2;

/* story 12 */
DELETE FROM services
WHERE id = 3; 

/* story 13 */
DELETE FROM services_utilisateurs
WHERE id_service = 8 && id_utilisateur = 11; 

/* story 14 */
DELETE FROM utilisateurs
WHERE id = 6;

/* story 15 */
DELETE FROM messages
WHERE id = 7; 

/* story 16 */
SELECT S.* , U1.pseudo AS proposeur, U2.*, COUNT(SU.id_utilisateur) AS nombre
FROM services AS S 
LEFT JOIN utilisateurs AS U1
  ON  S.id_utilisateur = U1.id
LEFT JOIN services_utilisateurs AS SU 
  ON S.id = SU.id_utilisateur
LEFT JOIN utilisateurs AS U2 
  ON U2.id = SU.id_utilisateur
GROUP BY S.id
ORDER BY S.date_service DESC, S.ville ASC; 

/* story 17 */
SELECT S.*, U.pseudo AS proposeur, U2.*
FROM services AS S 
LEFT JOIN utilisateurs AS U 
  ON S.id_utilisateur = U.id
LEFT JOIN services_utilisateurs AS SU
  ON S.id = SU.id_utilisateur
LEFT JOIN utilisateurs AS U2 
  ON U2.id = SU.id_utilisateur
WHERE U2.id = 2;

/* story 18 */

SELECT tab.mois, (SELECT pseudo
                  FROM utilisateurs
                  WHERE utilisateurs.id = 10 ) AS pseudo_utilisateur, 
    (SELECT COUNT(SU.id_utilisateur)
    FROM services_utilisateurs AS SU 
    INNER JOIN services AS S 
     	ON S.id = SU.id_service
    WHERE MONTH(S.date_service) = tab.mois && SU.id_utilisateur =10
)AS participations_total
FROM 
((SELECT 01 AS mois) UNION (SELECT 02) UNION (SELECT 03) UNION (SELECT 04) UNION (SELECT 05) UNION (SELECT 06) 
UNION (SELECT 07) UNION (SELECT 08) UNION (SELECT 09) UNION (SELECT 10)  UNION (SELECT 11) UNION (SELECT 12)) AS tab;
