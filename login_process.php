<?php

require_once 'db/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
$stmt->execute(array('username' => $username, 'password' => $password));

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    session_start();
    $_SESSION['is_logged_in'] = true;
}

header('Location: /');