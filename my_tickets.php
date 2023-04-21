<?php

require_once 'db/connect.php';

require 'components/check_login.php';


$stmt = $pdo->prepare('SELECT * FROM tickets where user_id = :user_id');
$stmt->execute(array('user_id' => $_SESSION['user']['id']));

$tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($tickets);

foreach ($tickets as $key => $ticket) {
    $stmt = $pdo->prepare('SELECT * FROM premieres where id = :premiere_id');
    $stmt->execute(array('premiere_id' => $tickets[$key]['premiere_id']));
    $tickets[$key]['premiere'] = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = $pdo->prepare('SELECT * FROM films where id = :film_id');
    $stmt->execute(array('film_id' => $tickets[$key]['premiere']['film_id']));
    $tickets[$key]['film'] = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = $pdo->prepare('SELECT * FROM seats where id = :seat_id');
    $stmt->execute(array('seat_id' => $tickets[$key]['seat_id']));
    $tickets[$key]['seat'] = $stmt->fetch(PDO::FETCH_ASSOC);
}

// echo json_encode($tickets);

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
            <H1 class="text-center">Vé Của Tôi</H1>
            <div class="row">
                <?php foreach ($tickets as $ticket) : ?>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="card mt-3">
                            <img class="img-thumbnai " src="<?php echo $ticket['film']['cover_image'] ?>">
                            <div class="card-body">
                                <h5><?php echo $ticket['film']['name'] ?></h5>
                                <p>thời lượng: <?php echo round($ticket['film']['length'] / 60, 1) ?>h </p>
                                <div class="time" style="font-size: 20px;  "><?php echo substr($ticket['premiere']['start'], 11, 5) ?></div>
                                <div class="time" style="font-size: 20px;  "><?php echo substr($ticket['premiere']['start'], 0, 11) ?></div>
                                <div style="font-size: 20px;  ">Ghế: <?php echo $ticket['seat']['row'] . ' - ' . $ticket['seat']['col'] ?></div>
                            </div>
                            <div class="card-footer">
                                <a href="/cancel_ticket.php?ticket_id=<?php echo $ticket['id'] ?>" class="btn btn-danger">HỦY VÉ</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <?php if (count($tickets) == 0): ?>
                    <p class="m-5">Bạn chưa có vé nào!</p>
                <?php endif ?>
            </div>
        </section>
    </main>

</body>

</html>