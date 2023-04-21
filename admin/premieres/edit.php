<?php 
    require '../check_admin.php';

	$id = $_GET['id'];
	$film_id = $_GET['film_id'];

    require_once '../../db/connect.php';

    $stmt = $pdo->prepare('SELECT * FROM premieres WHERE id = :id');
    $stmt->execute(array('id' => $id));

    $premiere = $stmt->fetch(PDO::FETCH_ASSOC);
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
					<section>
						<h1>Sửa xuất chiếu</h1>
						<!-- <div class="mt-5 card col-8 p-5"> -->
						<form action='edit_process.php' method="POST" class="col-8" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $id ?>">
							<input type="hidden" name="film_id" value="<?php echo $film_id ?>">
							<div class="form-outline mb-4">           
								<label class="form-label" for="tenphim">Thời gian bắt đầu</label>
								<input type="datetime-local" id="tenphim" class="form-control" name="start" value="<?php echo $premiere['start'] ?>" />
							</div>
							<div class="form-outline mb-4">           
								<label class="form-label">Thời gian kết thúc</label>
								<input type="datetime-local" class="form-control" name="end" value="<?php echo $premiere['end'] ?>" />
							</div>
							<div class="mb-3">
								<label for="formFileMultiple" class="form-label">Số ghế</label>
								<input type="radio"  id="formFileMultiple" name="total_seats" value="400" checked>
								400
							</div>
							<button type="submit" class="text-center btn btn-primary mb-3 mt-3"><i class="fa fa-save"></i>Sửa</button>
						</form>
						<!-- </div> -->
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