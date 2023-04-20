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
Đây là khu vực quản lý users
<?php 
    require_once '../sidebar.php';
    require_once '../../db/connect.php';

    $stmt = $pdo->prepare('SELECT * FROM users');
    $stmt->execute();

    $result = $stmt->fetchAll();

?>
<table border="1" width="100%">
	<tr>
        <th>id</th>
		<th>username</th>
		<th>fullname</th>
		<th>gender</th>
		<th>birthday</th>
        <th>email</th>
		<th>Sửa</th>
		<th>Xoá</th>
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
		</tr>
	<?php endforeach ?>
</table>
</body>
</html>