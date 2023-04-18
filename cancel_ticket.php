<?php
require_once 'db/connect.php';
session_start();

require 'components/check_login.php';

$stmt = $pdo->prepare('call delete_ticket(:ticket_id)');

$stmt->execute(array('ticket_id' => $_GET['ticket_id']));

header('Location: /my_tickets.php');