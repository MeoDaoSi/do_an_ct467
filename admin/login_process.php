<?php

require_once '../db/connect.php';

$taikhoan = $_POST['taikhoan'];
$password = $_POST['password'];

$stmt = $pdo->prepare('SELECT * FROM admins WHERE username = :username AND password = :password');
$stmt->execute(array('username' => $taikhoan, 'password' => $password));

$admins = $stmt->fetch(PDO::FETCH_ASSOC);

if ($admins) {
    session_start();
    $_SESSION['is_logged_admin_in'] = true;
    $_SESSION['username'] = $admins['username'];
}

header('Location: /admin/views');