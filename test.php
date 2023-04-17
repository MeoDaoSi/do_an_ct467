<?php

require_once 'db/connect.php';

$username = $_GET['username'];
$password = $_GET['password'];

$stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
$stmt->execute(array('username' => $username, 'password' => $password));

$user = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($user);