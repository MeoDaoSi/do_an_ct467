<?php 
    require '../check_admin.php'; 
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
						<h1>Thêm mới phim</h1>
						<!-- <div class="mt-5 card col-8 p-5"> -->
						<form action="create_process.php" method="POST" class="col-8" enctype="multipart/form-data">
							<div class="form-outline mb-4">           
								<label class="form-label" for="tenphim">Tên</label>
								<input type="text" id="tenphim" class="form-control" name="name" />
							</div>
							<div class="form-outline mb-4">
								<label class="form-label" for="dcr">Mô tả</label>
								<textarea class="form-control" id="dcr" name="description"></textarea>
							</div>
							<div class="form-outline mb-4">           
								<label class="form-label">Thời lượng(phút)</label>
								<input type="text" class="form-control" name="length" />
							</div>
							<div class="mb-3">
								<label for="formFileMultiple" class="form-label">Ảnh</label>
								<input type="text" class="form-control" id="formFileMultiple" name="cover_image">
							</div>
							<div class="form-outline mb-4">
								<label class="form-label" for="dcr">Năm phát hành</label>
								<input type="text" id="dcr" class="form-control" required autocomplete="off" name="release_year" />
							</div>
							<button type="submit" class="text-center btn btn-primary mb-3 mt-3"><i class="fa fa-save"></i> Lưu phim</button>
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