<?php 
	require_once '../check_admin.php';
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body> -->
<!-- Đây là giao diện admin -->
<!-- </body>
</html> -->
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
      <!-- <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div>
          </div>
        </div>
      </div> -->
      <div class="content-main">
        <div class="view">
          <h1>Xem thông tin phim</h1>
          <section>
            <div class="container row">
              <div class="col-sm-12 col-6">
                <!-- <h1>Xem thông tin phim</h1> -->
                <table class="table table-dark">
                  <thead>
                    
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Poster</th>
                      <th scope="col">Tên phim</th>
                      <th scope="col">mô tả</th>
                      <th scope="col">thời lượng</th>
                      <th scope="col">năm sản xuất</th>
                      <th scope="col">Hành động</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td><img src="https://tse2.mm.bing.net/th?id=OIP.-vvTJ3i8CKsVQHOSwHvbXAHaE8&pid=Api&P=0" class="img-thumbnail m-auto" style="max-width: 150px"   alt=""></td>
                      <td>Em là</td>
                      <td>none</td>
                      <td>2:30</td>
                      <td>2023</td>
                      <td>
                        <a href=""><i class="fa fa-edit"></i></a></a>
                        <a href=""><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div> 
              
            </div>
          </section>
          <h1>xem thông tin khách hàng</h1>
          <section>
            <div class="col-sm-12 col-6">
              <!-- <h1>Xem thông tin khách hàng</h1> -->
              <table class="table table-dark">
                <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Họ tên:</th>
                  <th scope="col">username:</th>
                  <th scope="col">password:</th>
                  <th scope="col">Giới tính:</th>
                  <th scope="col">sinh nhật:</th>
                  <th scope="col">email</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Nguyễn Văn A</td>
                  <td>username</td>
                  <td>123@A</td>
                  <td>nam</td>
                  <td><input type="date" value=""></td>
                  <td>@gmail.com</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Nguyễn Văn A</td>
                  <td>username</td>
                  <td>123@A</td>
                  <td>nam</td>
                  <td><input type="date" value=""></td>
                  <td>@gmail.com</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Nguyễn Văn A</td>
                  <td>username</td>
                  <td>123@A</td>
                  <td>nam</td>
                  <td><input type="date" value="11/05/2002"></td>
                  <td>@gmail.com</td>
                </tr>
                </tbody>
              </table>
              </div>
          </section>
        </div>
        <div class="add">
          <h1>Thông tin phim</h1>
          <section>
            <!-- <H1 class="text-center">Thông tin phim </H1> -->
            <div class="row">
                <div class="col-md-2 col-sm-3 col-4">
                    <div class="card mt-3">
                        <img class="img-thumbnai " src="https://tse2.mm.bing.net/th?id=OIP.RijT8oSxJf-i79ZdzAEsQAHaLH&pid=Api&P=0">
                        <div class="card-body">
                            <h5>Người nhện mất nhà (2022)</h5>
                            <p>thời lượng: 2h </p>
                            <p>mô tả:</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">MUA VÉ</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-4">
                    <div class="card mt-3">
                        <img class="img-thumbnai " src="https://tse2.mm.bing.net/th?id=OIP.RijT8oSxJf-i79ZdzAEsQAHaLH&pid=Api&P=0">
                        <div class="card-body">
                            <h5>Người nhện mất nhà (2022)</h5>
                            <p>thời lượng: 2h </p>
                            <p>mô tả:</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">MUA VÉ</button>
                        </div>
                    </div>
                </div>
            </div>
          </section>
          <h1>thêm lịch chiếu</h1>
          <section>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="" method="">
                  <!-- <h1>Xem </h1> -->
                  <div class="form-outline mb-4">
                          <label class="form-label" for="lc_fuser" name="" >TÊN PHIM:</label>
                      <input type="text" id="lc_fuser" class="form-control form-control-lg" placeholder="Nhập vào tên tài khoản" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="lc_DATE" name="" >NGÀY CHIẾU:</label>
                    <input type="DATE" id="lc_DATE" class="form-control form-control-lg" placeholder="Nhập vào email" />
                </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="lc_START" name="" >BẮT ĐẦU:</label>
                      <input type="TIME" id="lc_START" class="form-control form-control-lg" placeholder="Nhập vào email" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="lc_END" name="" >KẾT THÚC:</label>
                      <input type="tIME" id="lc_END" class="form-control form-control-lg" placeholder="Nhập vào tên tài khoản" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="lc_pwd" name="" >SỐ VÉ:</label>
                      <input type="NUMBER" id="lc_pwd" class="form-control form-control-lg" placeholder="Nhập vào SỐ VÉ" MIN="1"/>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block"  type="submit">UPLOAD</button>
                  </div>

          </section>
          <h1>Thêm mới phim</h1>
          <section>
            <div class="mt-5 card col-8 p-5">
              <form action="" method="post" class="col-8" enctype="multipart/form-data">
                  <!-- <h1 class="mt-5">Thêm mới phim</h1> -->
                  <div class="form-outline mb-4">           
                      <label class="form-label" for="tenphim">Tên phim (*)</label>
                      <input type="text" id="tenphim" class="form-control" required autocomplete="off" name="ten" />
                  </div>
                  <div class="form-outline mb-4">
                      <label class="form-label" for="dcr">Mô tả </label>
                      <input type="text" id="dcr" class="form-control" required autocomplete="off" name="" />
                  </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Chọn cover_image</label>
                      <input  type="file" id="formFileMultiple" multiple name="hinh">
                  </div>
                  <div class="form-outline mb-4">
                      <label class="form-label" for="dcr">Thời lượng</label>
                      <input type="text" id="dcr" class="form-control" required autocomplete="off" name="" />
                  </div>
                  <div class="form-outline mb-4">
                      <label class="form-label" for="date_c">Ngày sản xuất </label>
                      <input type="date" id="date_c" class="form-control" required autocomplete="off" name="" />
                  </div>
                  <button type="submit" class="text-center btn btn-primary mb-3 mt-3"><i class="fa fa-save"></i> Lưu phim</button>
                  </form>
          </div>
          </section>
        </div>
      </div>
    </div>
    <!-- footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
      </div>
    </footer>

  </div>

  <!-- user -->

 
<h2 class="text-center">Xem vé đã đặt</h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th col="2">Tên vé</th> 
    <th>Vị trí</th>
    <th>Giá</th> 
    <th>Số lượng</th> 
    <th>Thành tiền</th> 
    <th></th> 
   </tr> 
  </thead> 
  <tbody>
  <tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-6"><img src="http://hinhnenhd.com/anh-naruto/kho-600-hinh-anh-naruto-dep-kho-cuong-chat-luong-full-hd-13/" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-6">  
      <p>Tên vé phim</p> 
     </div> 
    </div> 
   </td> 
   <td>H-6</td> 
   <td>200.000 đ</td> 
   <td><input class="form-control text-center" style="max-width: 100px" value="1" type="number"></td> 
   <td>200.000 đ</td> 
   <td>
    <button class="btn btn-info btn-sm"><i class="fa fa-edit">Đổi chỗ</i></button>
    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o">Xóa vé</i></button>
   </td> 
  </tr> 
  <tr> 
    <td data-th="Product"> 
     <div class="row"> 
      <div class="col-sm-6"><img src="http://hinhnenhd.com/anh-naruto/kho-600-hinh-anh-naruto-dep-kho-cuong-chat-luong-full-hd-13/" alt="Sản phẩm 1" class="img-responsive" width="100">
      </div> 
      <div class="col-sm-6">  
       <p>Tên vé phim</p> 
      </div> 
     </div> 
    </td> 
    <td>H-6</td> 
    <td>200.000 đ</td> 
    <td><input class="form-control text-center" style="max-width: 100px" value="1" type="number"></td> 
    <td>200.000 đ</td> 
    <td>
     <button class="btn btn-info btn-sm"><i class="fa fa-edit">Đổi chỗ</i></button>
     <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o">Xóa vé</i></button>
    </td> 
   </tr> 
  </tbody><tfoot> 
   <tr class="visible-xs"> 
    <td class="text-center"><strong>Tổng 200.000 đ</strong>
    </td> 
   </tr> 
   <tr> 
    <td><a href="http://hocwebgiare.com/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục đặt vé</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong>
    </td> 
    <td><a href="http://hocwebgiare.com/" class="btn btn-danger btn-block">Hủy đặt vé<i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
  </tfoot> 
 </table>
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