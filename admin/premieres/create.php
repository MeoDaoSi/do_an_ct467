<?php 
    require '../check_admin.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		include '../menu.php';
	?>
<form action='create_process.php' method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $_GET['film_id'] ?>">
	<br>
	start
	<input type="datetime-local" name="start">
	<br>
	end
	<input type="datetime-local" name="end">
	<br>
	total_seats
	<input type="radio" name="total_seats" value="400" checked>
	400
	<br>
	<button>Create</button>
</form>
</body>
</html>