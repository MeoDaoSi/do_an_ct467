
-- users
DELIMITER / / 
CREATE PROCEDURE `edit_user`(
  IN user_id INT,
  IN username VARCHAR(50),
  IN fullname VARCHAR(50),
  IN gender TINYINT,
  IN birthday DATE,
  IN email VARCHAR(50),
  IN password VARCHAR(50)
) BEGIN
UPDATE
  `admins`
SET
  `username` = username,
  `fullname` = fullname,
  `gender` = gender,
  `birthday` = birthday,
  `email` = email,
  `password` = password
WHERE
  `id` = user_id;

END / / 

CREATE PROCEDURE `add_user`(
  IN username VARCHAR(50),
  IN fullname VARCHAR(50),
  IN gender TINYINT,
  IN birthday DATE,
  IN email VARCHAR(50),
  IN password VARCHAR(50)
) BEGIN
INSERT INTO
  `admins` (
    `username`,
    `fullname`,
    `gender`,
    `birthday`,
    `email`,
    `password`
  )
VALUES
  (
    username,
    fullname,
    gender,
    birthday,
    email,
    password
  );

END / / CREATE PROCEDURE `remove_user`(IN user_id INT) BEGIN
DELETE FROM
  `admins`
WHERE
  `id` = user_id;

END / /

-- admins
 CREATE PROCEDURE `edit_admin`(
  IN admin_id INT,
  IN username VARCHAR(50),
  IN fullname VARCHAR(50),
  IN gender TINYINT,
  IN birthday DATE,
  IN email VARCHAR(50),
  IN password VARCHAR(50)
) BEGIN
UPDATE
  `admins`
SET
  `username` = username,
  `fullname` = fullname,
  `gender` = gender,
  `birthday` = birthday,
  `email` = email,
  `password` = password
WHERE
  `id` = admin_id;

END / / 

CREATE PROCEDURE `add_admin`(
  IN username VARCHAR(50),
  IN fullname VARCHAR(50),
  IN gender TINYINT,
  IN birthday DATE,
  IN email VARCHAR(50),
  IN password VARCHAR(50)
) BEGIN
INSERT INTO
  `admins` (
    `username`,
    `fullname`,
    `gender`,
    `birthday`,
    `email`,
    `password`
  )
VALUES
  (
    username,
    fullname,
    gender,
    birthday,
    email,
    password
  );

END / / 

CREATE PROCEDURE `remove_admin`(IN admin_id INT) BEGIN
DELETE FROM
  `admins`
WHERE
  `id` = admin_id;

END / /

-- film
CREATE PROCEDURE `add_film`(
  IN name VARCHAR(50),
  IN description TEXT,
  IN length SMALLINT,
  IN cover_image TEXT,
  IN release_year SMALLINT
)
BEGIN
  INSERT INTO `films` (`name`, `description`, `length`, `cover_image`, `release_year`)
  VALUES (name, description, length, cover_image, release_year);
END / / 

CREATE PROCEDURE `edit_film`(
  IN id BIGINT,
  IN name VARCHAR(50),
  IN description TEXT,
  IN length SMALLINT,
  IN cover_image TEXT,
  IN release_year SMALLINT
)
BEGIN
  UPDATE `films`
  SET `name` = name, `description` = description, `length` = length, `cover_image` = cover_image, `release_year` = release_year
  WHERE `id` = id;
END
 / / 

CREATE PROCEDURE `delete_film`(
  IN id BIGINT
)
BEGIN
  DELETE FROM `films` WHERE `id` = id;
END
 / / 

CREATE PROCEDURE `add_premiere` (
  IN film_id BIGINT,
  IN start_time TIMESTAMP,
  IN end_time TIMESTAMP,
  IN total_seats SMALLINT
)
BEGIN
  DECLARE remaining_seats SMALLINT;
  SET remaining_seats = total_seats;
  
  INSERT INTO `premieres` (film_id, start, end, total_seats, remaining_seats)
  VALUES (film_id, start_time, end_time, total_seats, remaining_seats);
END
 / / 

CREATE PROCEDURE `edit_premiere` (
  IN premiere_id BIGINT,
  IN film_id BIGINT,
  IN start_time TIMESTAMP,
  IN end_time TIMESTAMP,
  IN total_seats SMALLINT,
  IN remaining_seats SMALLINT
)
BEGIN
  UPDATE `premieres`
  SET film_id = film_id, start = start_time, end = end_time, total_seats = total_seats, remaining_seats = remaining_seats
  WHERE id = premiere_id;
END
 / / 

CREATE PROCEDURE `delete_premiere` (
  IN premiere_id BIGINT
)
BEGIN
  DELETE FROM `premieres` WHERE id = premiere_id;
END
 / / 

CREATE PROCEDURE `add_seat`(
  IN row TINYINT,
  IN col TINYINT
)
BEGIN
  INSERT INTO `seats` (`row`, `col`)
  VALUES (row, col);
END
 / / 

CREATE PROCEDURE `edit_seat`(
  IN seat_id BIGINT,
  IN row TINYINT,
  IN col TINYINT
)
BEGIN
  UPDATE `seats`
  SET `row` = row, `col` = col
  WHERE `id` = seat_id;
END
 / / 

CREATE PROCEDURE `delete_seat`(
  IN seat_id BIGINT
)
BEGIN
  DELETE FROM `seats`
  WHERE `id` = seat_id;
END
 / / 

CREATE PROCEDURE `add_ticket`(
  IN `user_id` INT,
  IN `premiere_id` INT,
  IN `created_at` TIMESTAMP,
  IN `status` INT,
  IN `seat_id` INT
)
BEGIN
  INSERT INTO `tickets` (`user_id`, `premiere_id`, `created_at`, `status`, `seat_id`)
  VALUES (`user_id`, `premiere_id`, `created_at`, `status`, `seat_id`);
END / /

CREATE PROCEDURE `edit_ticket`(
  IN `ticket_id` INT,
  IN `user_id` INT,
  IN `premiere_id` INT,
  IN `created_at` TIMESTAMP,
  IN `status` INT,
  IN `seat_id` INT
)
BEGIN
  UPDATE `tickets`
  SET `user_id` = `user_id`,
      `premiere_id` = `premiere_id`,
      `created_at` = `created_at`,
      `status` = `status`,
      `seat_id` = `seat_id`
  WHERE `id` = `ticket_id`;
END / / 

CREATE PROCEDURE `delete_ticket`(
  IN `ticket_id` INT
)
BEGIN
  DELETE FROM `tickets`
  WHERE `id` = `ticket_id`;
END / / 

-- drop function getRemainingSeats;
CREATE FUNCTION getRemainingSeats(p_premiere_id INT) 
RETURNS INT DETERMINISTIC
BEGIN
    DECLARE v_total_seats INT;
    DECLARE v_sold_seats INT;
    DECLARE v_remaining_seats INT;
    
    SELECT total_seats INTO v_total_seats
    FROM premieres
    WHERE id = p_premiere_id;

    SELECT COUNT(*) INTO v_sold_seats
    FROM tickets
    WHERE premiere_id = p_premiere_id;

    SET v_remaining_seats = v_total_seats - v_sold_seats;
    
    RETURN v_remaining_seats;
END / /


-- select getRemainingSeats(1);   

CREATE TRIGGER update_remaining_seats
AFTER INSERT ON tickets
FOR EACH ROW
BEGIN
    UPDATE premieres
    SET remaining_seats = (total_seats - (
        SELECT COUNT(*) FROM tickets WHERE premiere_id = NEW.premiere_id
    ))
    WHERE id = NEW.premiere_id;
END / /









DELIMITER ;                           