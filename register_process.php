<?php

require_once 'db/connect.php';


$username = $_POST['username'];
$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $pdo->prepare("CALL add_user(?, ?, ?, ?, ?, ?)");
$stmt->bindParam(1, $username, PDO::PARAM_STR);
$stmt->bindParam(2, $fullname, PDO::PARAM_STR);
$stmt->bindParam(3, $gender, PDO::PARAM_INT);
$stmt->bindParam(4, $birthday, PDO::PARAM_STR);
$stmt->bindParam(5, $email, PDO::PARAM_STR);
$stmt->bindParam(6, $password, PDO::PARAM_STR);

$stmt->execute();

header('Location: /login.php');