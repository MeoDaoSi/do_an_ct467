<?php 
    require '../check_admin.php'; 
?>
<?php
    require_once '../../db/connect.php';

    $stmt = $pdo->prepare('SELECT * FROM films');
    $stmt->execute();

    $result = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/assets/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/assets/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  	<div class="wrapper">
		<div class="preloader flex-column justify-content-center align-items-center">
        <!-- loading -->
        <img class="animation__shake" src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
		</div>
		<!-- sidebar -->
		<?php include '../sidebar.php' ?>
    	<!-- content -->
		<div class="content-wrapper">
			<div class="content-main">
				<div class="view">
					<h1>Xem thông tin phim</h1>
					<a href="create.php" class="card-footer">
						<button class="btn btn-primary">Create</button>
					</a>
					<section>
						<div class="container row">
						<div class="col-sm-12 col-6">
						<?php foreach ($result as $each): ?>
							<table class="table table-dark">
								<thead>
									<tr>
										<th scope="col">id</th>
										<th scope="col">name</th>
										<th scope="col">description</th>
										<th scope="col">length(minute)</th>
										<th scope="col">cover_image</th>
										<th scope="col">release_year</th>
										<th scope="col">Hành động</th>
										<th scope="col">Detail</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?php echo $each['id'] ?></td>
										<td><?php echo $each['name'] ?></td>
										<td><?php echo $each['description'] ?></td>
										<td><?php echo $each['length'] ?></td>
										<td><img height="100" src="<?php echo $each['cover_image'] ?>"></td>
										<td><?php echo $each['release_year'] ?></td>
										<td>
											<a href="edit.php?id=<?php echo $each['id'] ?>"><i class="fa fa-edit"></i></a></a>
											<a href="delete.php?id=<?php echo $each['id'] ?>"><i class="fa fa-trash"></i></a>
										</td>
										<td>
											<a href="../premieres/index.php?film_id=<?php echo $each['id'] ?>">View</a>
										</td>
									</tr>
								</tbody>
							</table>
						<?php endforeach ?>
						</div> 
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<script src="/assets/plugins/jquery/jquery.min.js"></script>
	<script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/plugins/chart.js/Chart.min.js"></script>
	<script src="/assets/plugins/sparklines/sparkline.js"></script>
	<script src="/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<script src="/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
	<script src="/assets/plugins/moment/moment.min.js"></script>
	<script src="/assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<script src="/assets/plugins/summernote/summernote-bs4.min.js"></script>
	<script src="/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<script src="/assets/dist/js/adminlte.js"></script>
	<script src="/assets/dist/js/pages/dashboard.js"></script>
</body>
</html>