<?php

    require_once '../../db/connect.php';

    $id = $_GET['id'];

    $stmt = $pdo->prepare('call delete_film(
    :id)');
    $stmt->execute(array('id' => $id));
    header('Location: /admin/films');