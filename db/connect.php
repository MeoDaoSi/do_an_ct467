<?php

$username = 'root';
$password = '';

$pdo = new PDO('mysql:host=localhost;dbname=qtdl', $username, $password);

// $stmt->setFetchMode(PDO::FETCH_ASSOC);

// $stmt = $conn->prepare('INSERT INTO users (name, email, age) values (:name, :mail, :age)');