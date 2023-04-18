<?php

    require_once '../../db/connect.php';

    $id = $_POST['id'];
    $film_id = $_POST['film_id'];
    $start = strtotime($_POST['start']);
    $end = strtotime($_POST['end']);
    $total_seats = $_POST['total_seats'];

    if( empty($start) || empty($end) || empty($total_seats)){
        header('Location: /admin/premieres/index.php?film_id='. $film_id);
    }

    $stmt = $pdo->prepare("CALL edit_premiere(
        :id, :film_id, :start, :end, :total_seats, :remaining_seats
    )");
    $stmt->execute(array('id' => $id, 'film_id' => $film_id, 'start' => date('Y/m/d h:i:s', $start),'end' => date('Y/m/d h:i:s', $end), 'total_seats' => $total_seats, 'remaining_seats' => $total_seats));
    header('Location:/admin/premieres/index.php?film_id='. $film_id);