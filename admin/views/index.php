<?php 
session_start();
if(!isset($_SESSION['is_logged_admin_in'])){
	header('location:../index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
Đây là giao diện admin
<?php 
include '../menu.php';
?>
</body>
</html>