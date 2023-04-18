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

        require_once '../../db/connect.php';
        include '../menu.php';

        $stmt = $pdo->prepare('SELECT * FROM films WHERE id = :id');
        $stmt->execute(array('id' => $id));

        $film = $stmt->fetch(PDO::FETCH_ASSOC);
            
	?>
    <form action='edit_process.php' method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        Name
        <input type="text" name="name" value="<?php echo $film['name'] ?>">
        <br>
        Description
        <textarea name="description"><?php echo $film['description'] ?></textarea>
        <br>
        Length(minute)
        <input type="text" name="length" value="<?php echo $film['length'] ?>" >
        <br>
        Link image
        <input type="text" name="cover_image" value="<?php echo $film['cover_image'] ?>" >
        <br>
        release_year
        <input type="text" name="release_year" value="<?php echo $film['release_year'] ?>" >
        <br>
        <button>Edit</button>
    </form>
</body>
</html>