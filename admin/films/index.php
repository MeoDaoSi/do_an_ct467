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
Đây là khu vực quản lý films
<?php 
    require_once '../menu.php';
?>
<a href="create.php">
	Create film
</a>
<?php
    require_once '../../db/connect.php';

    $stmt = $pdo->prepare('SELECT * FROM films');
    $stmt->execute();

    $result = $stmt->fetchAll();

?>
<table border="1" width="100%">
	<tr>
        <th>id</th>
		<th>name</th>
		<th>description</th>
		<th>length(minute)</th>
		<th>cover_image</th>
        <th>release_year</th>
		<th>Sửa</th>
		<th>Xoá</th>
		<th>Xem</th>
	</tr>
	<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo $each['id'] ?></td>
			<td><?php echo $each['name'] ?></td>
			<td><?php echo $each['description'] ?></td>
			<td><?php echo $each['length'] ?></td>
			<td>
				<img height="100" src="<?php echo $each['cover_image'] ?>">
			</td>
            <td><?php echo $each['release_year'] ?></td>
			<td>
				<a href="edit.php?id=<?php echo $each['id'] ?>">
					Sửa
				</a>
			</td>
			<td>
				<a href="delete.php?id=<?php echo $each['id'] ?>">
					Xoá
				</a>
			</td>
			<td>
				<a href="../premieres/index.php?film_id=<?php echo $each['id'] ?>">
					Xem
				</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
</body>
</html>