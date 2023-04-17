<?php

$username = 'root';
$password = '';

$pdo = new PDO('mysql:host=localhost;dbname=qtdl', $username, $password);

// $stmt = $pdo->prepare('INSERT INTO users (name, email, age) values (:name, :mail, :age)');
// $stmt->setFetchMode(PDO::FETCH_ASSOC);
