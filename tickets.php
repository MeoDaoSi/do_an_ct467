<?php

require_once 'db/connect.php';
session_start();

$stmt = $pdo->prepare('SELECT * FROM premieres where id = :premiere_id');
$stmt->execute(array('premiere_id' => $_GET['premiere_id']));

$premiere = $stmt->fetch(PDO::FETCH_ASSOC);
// echo json_encode($premiere);

$stmt = $pdo->prepare('SELECT * FROM tickets where premiere_id = :premiere_id');
$stmt->execute(array('premiere_id' => $_GET['premiere_id']));

$tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($tickets);

function seatOccupied($seat_id, $tickets)
{
    foreach ($tickets as $ticket) {
        if ($seat_id == $ticket['seat_id'])
            return true;
    }
    return false;
};

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
    <style>
        input {
            display: none;
        }

        label {
            width: 50px;
            height: 50px;
            border: 1px solid #11111111
        }

        input:disabled+label {
            background-color: grey;
            color: white;
        }

        input:checked+label {
            background-color: green;
            color: white;
        }
    </style>
</head>

<body class="">

    <?php require 'components/header.php'; ?><main class="container">
        <section>
            <h1 class="text-center">chọn ghế</h1>
            <form action="/order_process.php" method="POST">
                <input type="text" name="premiere_id" value="<?php echo $premiere['id'] ?>">
                <button class="btn btn-primary mb-3">Đặt vé</button>
                <div class="card">
                    <table class="col m-auto text-center" style="font-size:15px">
                        <thead>
                            <tr>
                                <td colspan="99" class="border p-2" style="font-size:50px;">Màn hình</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="mr-3">*</th>
                                <?php foreach (range(1, 20) as $i) : ?>
                                    <th class="mr-3"><?php echo $i ?></th>
                                <?php endforeach ?>
                            </tr>
                            <?php foreach (range(1, 20) as $i) : ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <?php foreach (range(1, 20) as $j) : ?>
                                        <?php if ((seatOccupied(($i - 1) * 20 + $j, $tickets))) : ?>
                                            <td>
                                                <input type="radio" disabled>
                                                <label class="text-center">
                                                    <?php echo $i . ' - ' . $j ?>
                                                </label>
                                            </td>
                                        <?php else : ?>
                                            <td>
                                                <input type="radio" name="seat_id" id="seat_<?php echo (($i - 1) * 20 + $j); ?>" value="<?php echo (($i - 1) * 20 + $j); ?>">
                                                <label class="" for="seat_<?php echo (($i - 1) * 20 + $j) ?>">
                                                    <?php echo $i . ' - ' . $j ?>
                                                </label>
                                            </td>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </tr>
                            <?php endforeach ?>
                        </tbody>

                    </table>
                </div>

            </form>

        </section>
    </main>

</body>

</html>