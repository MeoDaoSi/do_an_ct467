<?php

require_once 'db/connect.php';
session_start();

// echo json_encode($_SESSION['user']) ?? null;

$stmt = $pdo->prepare('SELECT * FROM films');
$stmt->execute();

$films = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script scr="/public/js/jquery-3.5.1.min.js"></script>
    <title>Document</title>
</head>

<body class="">
    <?php require 'components/header.php'; ?>
    <main class="container">
        <section class="  card p-5 mt-3">
            <H1 class="text-center">Thông tin phim </H1>
            <div class="row">
                <?php foreach ($films as $film) : ?>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="card mt-3">
                            <img class="img-thumbnai " src="<?php echo $film['cover_image'] ?>">
                            <div class="card-body">
                                <h5><?php echo $film['name'] ?></h5>
                                <p>thời lượng: <?php echo round($film['length'] / 60, 1) ?>h </p>
                                <p>mô tả:<?php echo $film['description'] ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="/premieres.php?film_id=<?php echo $film['id'] ?>" class="btn btn-primary">MUA VÉ</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </section>
    </main>

</body>

</html>