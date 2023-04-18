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
        $id = $_GET['id'];
		$film_id = $_GET['film_id'];

        require_once '../../db/connect.php';
        include '../menu.php';

        $stmt = $pdo->prepare('SELECT * FROM premieres WHERE id = :id');
        $stmt->execute(array('id' => $id));

        $premiere = $stmt->fetch(PDO::FETCH_ASSOC);
            
	?>
<form action='edit_process.php' method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<input type="hidden" name="film_id" value="<?php echo $film_id ?>">
	<br>
	start
	<input type="datetime-local" name="start" value="<?php echo $premiere['start'] ?>" >
	<br>
	end
	<input type="datetime-local" name="end" value="<?php echo $premiere['end'] ?>" >
	<br>
	total_seats
	<input type="radio" name="total_seats" value="400" checked>
	400
	<br>
	<button>Edit</button>
</form>
</body>
</html>