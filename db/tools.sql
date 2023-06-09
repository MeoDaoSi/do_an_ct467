-- users
DELIMITER / / DROP PROCEDURE IF EXISTS `edit_user` / / CREATE PROCEDURE `edit_user`(
  IN p_user_id bigINT,
  IN p_username VARCHAR(50),
  IN p_fullname VARCHAR(50),
  IN p_gender TINYINT,
  IN p_birthday DATE,
  IN p_email VARCHAR(50),
  IN p_password VARCHAR(50)
) BEGIN
UPDATE
  `users`
SET
  `username` = p_username,
  `fullname` = p_fullname,
  `gender` = p_gender,
  `birthday` = p_birthday,
  `email` = p_email,
  `password` = p_password
WHERE
  `id` = p_user_id;

END / / DROP PROCEDURE IF EXISTS `add_user` / / CREATE PROCEDURE `add_user`(
  IN p_username VARCHAR(50),
  IN p_fullname VARCHAR(50),
  IN p_gender TINYINT,
  IN p_birthday DATE,
  IN p_email VARCHAR(50),
  IN p_password VARCHAR(50)
) BEGIN
INSERT INTO
  `users` (
    `username`,
    `fullname`,
    `gender`,
    `birthday`,
    `email`,
    `password`
  )
VALUES
  (
    p_username,
    p_fullname,
    p_gender,
    p_birthday,
    p_email,
    p_password
  );

END / / DROP PROCEDURE IF EXISTS `remove_user` / / CREATE PROCEDURE `remove_user`(IN p_user_id bigINT) BEGIN
DELETE FROM
  `users`
WHERE
  `id` = p_user_id;

END / / -- admins
DROP PROCEDURE IF EXISTS `edit_admin` / / CREATE PROCEDURE `edit_admin`(
  IN p_admin_id bigINT,
  IN p_username VARCHAR(50),
  IN p_fullname VARCHAR(50),
  IN p_gender TINYINT,
  IN p_birthday DATE,
  IN p_email VARCHAR(50),
  IN p_password VARCHAR(50)
) BEGIN
UPDATE
  `admins`
SET
  `username` = p_username,
  `fullname` = p_fullname,
  `gender` = p_gender,
  `birthday` = p_birthday,
  `email` = p_email,
  `password` = p_password
WHERE
  `id` = p_admin_id;

END / / DROP PROCEDURE IF EXISTS `add_admin` / / CREATE PROCEDURE `add_admin`(
  IN p_username VARCHAR(50),
  IN p_fullname VARCHAR(50),
  IN p_gender TINYINT,
  IN p_birthday DATE,
  IN p_email VARCHAR(50),
  IN p_password VARCHAR(50)
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
    p_username,
    p_fullname,
    p_gender,
    p_birthday,
    p_email,
    p_password
  );

END / / DROP PROCEDURE IF EXISTS `remove_admin` / / CREATE PROCEDURE `remove_admin`(IN p_admin_id bigINT) BEGIN
DELETE FROM
  `admins`
WHERE
  `id` = p_admin_id;

END / / -- film
DROP PROCEDURE IF EXISTS `add_film` / / CREATE PROCEDURE `add_film`(
  IN p_name VARCHAR(50),
  IN p_description TEXT,
  IN p_length SMALLINT,
  IN p_cover_image TEXT,
  IN p_release_year SMALLINT
) BEGIN
INSERT INTO
  `films` (
    `name`,
    `description`,
    `length`,
    `cover_image`,
    `release_year`
  )
VALUES
  (
    p_name,
    p_description,
    p_length,
    p_cover_image,
    p_release_year
  );

END / / DROP PROCEDURE IF EXISTS `edit_film` / / CREATE PROCEDURE `edit_film`(
  IN p_id BIGINT,
  IN p_name VARCHAR(50),
  IN p_description TEXT,
  IN p_length SMALLINT,
  IN p_cover_image TEXT,
  IN p_release_year SMALLINT
) BEGIN
UPDATE
  `films`
SET
  `name` = p_name,
  `description` = p_description,
  `length` = p_length,
  `cover_image` = p_cover_image,
  `release_year` = p_release_year
WHERE
  `id` = p_id;

END / / DROP PROCEDURE IF EXISTS `delete_film` / / CREATE PROCEDURE `delete_film`(IN p_id BIGINT) BEGIN
DELETE FROM
  `films`
WHERE
  `id` = p_id;

END / / DROP PROCEDURE IF EXISTS `add_premiere` / / CREATE PROCEDURE `add_premiere` (
  IN p_film_id BIGINT,
  IN p_start_time TIMESTAMP,
  IN p_end_time TIMESTAMP,
  IN p_total_seats SMALLINT,
  IN p_remaining_seats SMALLINT
) BEGIN
INSERT INTO
  `premieres` (film_id, start,end,
  total_seats,
  remaining_seats
)
VALUES
  (
    p_film_id,
    p_start_time,
    p_end_time,
    p_total_seats,
    p_remaining_seats
  );

END / / DROP PROCEDURE IF EXISTS `edit_premiere` / / CREATE PROCEDURE `edit_premiere` (
  IN p_premiere_id BIGINT,
  IN p_film_id BIGINT,
  IN p_start_time TIMESTAMP,
  IN p_end_time TIMESTAMP,
  IN p_total_seats SMALLINT,
  IN p_remaining_seats SMALLINT
) BEGIN
UPDATE
  `premieres`
SET
  film_id = p_film_id,
  start = p_start_time,
end = p_end_time,
total_seats = p_total_seats,
remaining_seats = p_remaining_seats
WHERE
  id = p_premiere_id;

END / / DROP PROCEDURE IF EXISTS `delete_premiere` / / CREATE PROCEDURE `delete_premiere` (IN p_premiere_id BIGINT) BEGIN
DELETE FROM
  `premieres`
WHERE
  id = p_premiere_id;

END / / DROP PROCEDURE IF EXISTS `add_seat` / / CREATE PROCEDURE `add_seat`(IN p_row TINYINT, IN p_col TINYINT) BEGIN
INSERT INTO
  `seats` (`row`, `col`)
VALUES
  (p_row, p_col);

END / / DROP PROCEDURE IF EXISTS `edit_seat` / / CREATE PROCEDURE `edit_seat`(
  IN p_seat_id BIGINT,
  IN p_row TINYINT,
  IN p_col TINYINT
) BEGIN
UPDATE
  `seats`
SET
  `row` = p_row,
  `col` = p_col
WHERE
  `id` = p_seat_id;

END / / DROP PROCEDURE IF EXISTS `delete_seat` / / CREATE PROCEDURE `delete_seat`(IN p_seat_id BIGINT) BEGIN
DELETE FROM
  `seats`
WHERE
  `id` = p_seat_id;

END / / DROP PROCEDURE IF EXISTS `add_ticket` / / CREATE PROCEDURE `add_ticket`(
  IN `p_user_id` bigINT,
  IN `p_premiere_id` bigINT,
  IN `p_created_at` TIMESTAMP,
  IN `p_status` char(10),
  IN `p_seat_id` bigINT
) BEGIN
INSERT INTO
  `tickets` (
    `user_id`,
    `premiere_id`,
    `created_at`,
    `status`,
    `seat_id`
  )
VALUES
  (
    `p_user_id`,
    `p_premiere_id`,
    `p_created_at`,
    `p_status`,
    `p_seat_id`
  );

END / / DROP PROCEDURE IF EXISTS `edit_ticket` / / CREATE PROCEDURE `edit_ticket`(
  IN `p_ticket_id` bigINT,
  IN `p_user_id` bigINT,
  IN `p_premiere_id` bigINT,
  IN `p_created_at` TIMESTAMP,
  IN `p_status` char(10),
  IN `p_seat_id` bigINT
) BEGIN
UPDATE
  `tickets`
SET
  `user_id` = `p_user_id`,
  `premiere_id` = `p_premiere_id`,
  `created_at` = `p_created_at`,
  `status` = `p_status`,
  `seat_id` = `p_seat_id`
WHERE
  `id` = `p_ticket_id`;

END / / DROP PROCEDURE IF EXISTS `delete_ticket` / / CREATE PROCEDURE `delete_ticket`(IN `p_ticket_id` bigINT) BEGIN
DELETE FROM
  `tickets`
WHERE
  `id` = `p_ticket_id`;

END / / drop function IF EXISTS getRemainingSeats / / CREATE FUNCTION getRemainingSeats(p_premiere_id bigINT) RETURNS INT DETERMINISTIC BEGIN DECLARE v_total_seats INT;

DECLARE v_sold_seats INT;

DECLARE v_remaining_seats INT;

SELECT
  total_seats INTO v_total_seats
FROM
  premieres
WHERE
  id = p_premiere_id;

SELECT
  COUNT(*) INTO v_sold_seats
FROM
  tickets
WHERE
  premiere_id = p_premiere_id;

SET
  v_remaining_seats = v_total_seats - v_sold_seats;

RETURN v_remaining_seats;

END / / drop trigger IF EXISTS update_remaining_seats_on_add_ticket / / CREATE TRIGGER update_remaining_seats_on_add_ticket
AFTER
INSERT
  ON tickets FOR EACH ROW BEGIN
UPDATE
  premieres
SET
  remaining_seats = getRemainingSeats(NEW.premiere_id)
WHERE
  id = NEW.premiere_id;

END / / drop trigger IF EXISTS update_remaining_seats_on_delete_ticket / / CREATE TRIGGER update_remaining_seats_on_delete_ticket
AFTER
  delete ON tickets FOR EACH ROW BEGIN
UPDATE
  premieres
SET
  remaining_seats = getRemainingSeats(OLD.premiere_id)
WHERE
  id = OLD.premiere_id;

END / /drop trigger IF EXISTS delete_premiere_and_ticket / / CREATE TRIGGER `delete_premiere_and_ticket`
AFTER
  DELETE ON `films` FOR EACH ROW BEGIN
DELETE FROM
  `premieres`
WHERE
  `film_id` = OLD.`id`;

DELETE FROM
  `tickets`
WHERE
  `premiere_id` IN (
    SELECT
      `id`
    FROM
      `premieres`
    WHERE
      `film_id` = OLD.`id`
  );

END / /