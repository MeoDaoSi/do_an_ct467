<?php

require_once 'db/connect.php';
session_start();

$stmt = $pdo->prepare('SELECT * FROM films where id = :film_id');
$stmt->execute(array('film_id' => $_GET['film_id']));

$film = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare('SELECT * FROM premieres where film_id = :film_id');
$stmt->execute(array('film_id' => $_GET['film_id']));

$premieres = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($premieres);

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
    <title>Cinema</title>
</head>

<body class="">

    <?php require 'components/header.php'; ?><main class="container">
        <section class="">
            <h1>Các xuất chiếu phim: </h1>
            <h3><?php echo $film['name'] ?></h3>
            <div class="row">
                <?php foreach ($premieres as $premiere) : ?>
                    <div class="col-4  p-1 mr-3  ">
                        <div class="col p-5">
                            <div href="" data-cineplex="cinestar" class="btn btn-sm btn-showtime btn-outline-dark is-ticketing is-show-price  d-flex flex-column" data-reference="118366_e11fd1c2-438f-4ca3-b893-09c75eb89ba2">
                                <span class="time" style="font-size: 50px;  "><?php echo substr($premiere['start'], 0, 11) ?></span>
                                <span class="time" style="font-size: 50px;  "><?php echo substr($premiere['start'], 11, 5) ?></span>
                                <a href="/tickets.php?premiere_id=<?php echo $premiere['id'] ?>" class="btn btn-primary">Mua Vé</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <?php if (count($premieres) == 0): ?>
                    <p class="m-5">Hiện không có xuất chiếu nào!</p>
                <?php endif ?>
            </div>
        </section>
    </main>
</body>

</html>