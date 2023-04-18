<?php

    require_once '../../db/connect.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $length = $_POST['length'];
    $cover_image = $_POST['cover_image'];
    $release_year = $_POST['release_year'];

    if(empty($name) || empty($description) || empty($length) || empty($cover_image) || empty($release_year)){
        header('Location: /admin/films');
    }

    $stmt = $pdo->prepare('call edit_film(
    :id,
    :name,
    :description,
    :length,
    :cover_image,
    :release_year)');
    $stmt->execute(array('id' => $id,'name' => $name, 'description' => $description,'length' => $length, 'cover_image' => $cover_image, 'release_year' => $release_year));
    header('Location: /admin/films');