
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    password VARCHAR(20),
    name VARCHAR(40),
    email VARCHAR(45),
    user_pic BLOB(100)
);

CREATE TABLE films(
    film_id INT PRIMARY KEY,
    title VARCHAR(60),
    description TEXT,
    genre VARCHAR(45),
    country VARCHAR(45),
    year VARCHAR(45)
);


INSERT INTO FILMS (film_id, title, description, genre, country, year) VALUES ('1','1+1','французская комедийная драма 2011 года, основанная на реальных событиях об успешном аристократе Филиппе, который в результате несчастного случая оказывается в инвалидном кресле и берёт себе в качестве помощника чернокожего, бывшего мелкого правонарушителя — Дрисса.', 'комедия', 'Франция', '2011');
INSERT INTO FILMS (film_id, title, description, genre, country, year) VALUES ('2','Мальчишник в Вегасе','Перед тем, как отпраздновать предстоящую свадьбу, Даг со своими друзьями Филом и Стю и братом невесты Аланом отправляются на мальчишник в Лас-Вегас, где они устраивают грандиозный мальчишник, а затем пытаются восстановить события прошлой ночи.', 'комедия', 'США', '2009');
INSERT INTO FILMS (film_id, title, description, genre, country, year) VALUES ('3','Отель «Гранд Будапешт»','Комедийный фильм о приключениях горничной и портье в вымышленном европейском городе по мотивам рассказов Стефана Цвейга.', 'комедия', 'США', '2014');
INSERT INTO FILMS (film_id, title, description, genre, country, year) VALUES ('4','Матрица','Фильм о том, как программист становится героем, спасающим мир, который на самом деле является симуляцией компьютерной программы.', 'боевик', 'США', '1999');
INSERT INTO FILMS (film_id, title, description, genre, country, year) VALUES ('5','Бэтмен: Начало','Фильм о том, как молодой Брюс Уэйн начинает свою карьеру в качестве Бэтмена в Готэме.', 'боевик', 'США', '2005');
INSERT INTO FILMS (film_id, title, description, genre, country, year) VALUES ('6','Джанго освобожденный','Фильм о бывшем рабе, который становится наёмным охотником за головами, чтобы отомстить хозяину своей бывшей рабской жизни.', 'боевик', 'США', '2012');
INSERT INTO FILMS (film_id, title, description, genre, country, year) VALUES ('7','Титаник','Эпическая драма о знаменитом кораблекрушении и романе между Роуз и Джеком на борту.', 'драма', 'США', '1997');
INSERT INTO FILMS (film_id, title, description, genre, country, year) VALUES ('8', 'Интерстеллар','Фантастический фильм о космической экспедиции на поиски других обитаемых планет.', 'драма', 'США', '2014');
INSERT INTO FILMS (film_id, title, description, genre, country, year) VALUES ('9', 'Достать ножи',' Семья богатого детективного писателя Харлана Тромби собирается на праздновании его 85-летия в особняке в Массачусетсе. На следующее утро Харлана находят мёртвым с перерезанным горлом. Полиция считает, что это было самоубийство, но неизвестный нанимает знаменитого частного сыщика Бенуа Бланка для проведения расследования.', 'драма', 'США', '2019');
INSERT INTO FILMS (film_id, title, description, genre, country, year) VALUES ('10', ' Заклятие ',' Фильм о семье Уорренов – детективов, которые расследуют паранормальные явления. К ним обращается семья, и Эду и Лорейн предстоит сразиться с сильным духом.', 'ужасы', 'США', '2013');
INSERT INTO FILMS (film_id, title, description, genre, country, year) VALUES ('11', ' Прочь ','Темнокожий фотограф Крис, и его девушка Роуз достигли того момента в отношениях, когда уже пора знакомиться с родителями друг друга. Поэтому Крис и Роуз отправляются на выходные в гости к родителям девушки. Парень совершает несколько невероятно тревожных открытий об этих людях, что приводят его к пониманию шокирующей правды.', 'ужасы', 'США', '2017');
INSERT INTO FILMS (film_id, title, description, genre, country, year) VALUES ('12', ' Оно ',' Фильм рассказывает историю о клоуне-убийце Пенивайзе, который живет в небольшом городке Дерри и очень любит лакомиться маленькими детьми.', 'ужасы', 'США', '2017');



CREATE TABLE saved (
    saved_id INT PRIMARY KEY,
    u_id INT,
    f_id INT
);

SELECT u_id, f_id FROM saved
INNER JOIN users ON u_id = user_id
INNER JOIN films ON f_id = film_id;

CREATE TABLE comment (
    comment_id INT PRIMARY KEY,
    u_id INT,
    f_id INT,
    publicated TIMESTAMP,
    comment_text TEXT
);

SELECT u_id, f_id FROM comment
INNER JOIN users ON u_id = user_id
INNER JOIN films ON f_id = film_id;

CREATE TABLE review (
    review_id INT PRIMARY KEY,
    u_id INT,
    f_id INT,
    publicated TIMESTAMP,
    review_text TEXT
);

SELECT u_id, f_id FROM review 
INNER JOIN users ON u_id = user_id
INNER JOIN films ON f_id = film_id;

CREATE TABLE recommendation (
    recommendation_id INT PRIMARY KEY,
    f_id INT
);

SELECT f_id FROM recommendation
INNER JOIN films ON f_id = film_id;

CREATE TABLE rating (
    rating_id INT PRIMARY KEY,
    u_id INT,
    f_id INT
);

SELECT u_id, f_id FROM rating 
INNER JOIN users ON u_id = user_id
INNER JOIN films ON f_id = film_id;




