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
	Name
	<input type="text" name="name">
	<br>
	Description
	<textarea name="description"></textarea>
	<br>
	Length(minute)
	<input type="text" name="length">
	<br>
	Link image
	<input type="text" name="cover_image">
	<br>
    release_year
	<input type="text" name="release_year">
    <br>
	<button>Create</button>
</form>
</body>
</html>