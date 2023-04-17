<?php
$customerName = $_POST['customer_name'];
$customerEmail = $_POST['customer_email'];
$premiereId = $_POST['premiere_id'];
$seatId = $_POST['seat_id'];
$price = $_POST['price'];

$stmt = $pdo->prepare("CALL add_ticket(?, ?, ?, ?, ?)");

$stmt->bindParam(1, $customerName, PDO::PARAM_STR);
$stmt->bindParam(2, $customerEmail, PDO::PARAM_STR);
$stmt->bindParam(3, $premiereId, PDO::PARAM_INT);
$stmt->bindParam(4, $seatId, PDO::PARAM_INT);
$stmt->bindParam(5, $price, PDO::PARAM_STR);
$stmt->execute();

header('Location: tickets.php');
exit();
?>
