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
Đây là khu vực quản lý premieres
<?php 
    require_once '../menu.php';

    require_once '../../db/connect.php';
    $film_id = $_GET['film_id'];

    $stmt = $pdo->prepare('SELECT * FROM premieres where film_id = :film_id');
    $stmt->execute(array('film_id' => $film_id));

    $result = $stmt->fetchAll();

?>
<a href="create.php?film_id=<?php echo $film_id ?>">
	Create premieres
</a>
<table border="1" width="100%">
	<tr>
        <th>id</th>
		<th>film_id</th>
		<th>start</th>
		<th>end</th>
		<th>total_seats</th>
        <th>remaining_seats</th>
		<th>Sửa</th>
		<th>Xoá</th>
	</tr>
	<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo $each['id'] ?></td>
			<td><?php echo $each['film_id'] ?></td>
			<td><?php echo $each['start'] ?></td>
			<td><?php echo $each['end'] ?></td>
			<td><?php echo $each['total_seats'] ?></td>
            <td><?php echo $each['remaining_seats'] ?></td>
			<td>
				<a href="edit.php?id=<?php echo $each['id'] ?>&film_id=<?php echo $film_id?>">
					Sửa
				</a>
			</td>
			<td>
				<a href="delete.php?id=<?php echo $each['id'] ?>&film_id=<?php echo $film_id?>">
					Xoá
				</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
</body>
</html>