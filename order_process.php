<?php
require_once 'db/connect.php';
session_start();

require 'components/check_login.php';

$stmt = $pdo->prepare("CALL add_ticket(?, ?, ?, ?, ?)");

$stmt->execute(array($_SESSION['user']['id'], $_POST['premiere_id'], date('Y/m/d h:i:s', time()), 'pending', $_POST['seat_id']));

// echo json_encode($_POST);

header('Location: /tickets.php?premiere_id='.$_POST['premiere_id']);