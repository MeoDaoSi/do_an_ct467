<?php

    require_once '../../db/connect.php';

    $id = $_GET['id'];
    $film_id = $_GET['film_id'];

    $stmt = $pdo->prepare('call delete_premiere(
    :id)');
    $stmt->execute(array('id' => $id));
    header('Location:/admin/premieres/index.php?film_id='. $film_id);