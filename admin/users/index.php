
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
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
            <div class="container">
              <a class="navbar-brand" href="#">CINEMA</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Trangchu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
    <main  class="container">
        <section id="page-content ">
            <div class=" account bg-light card p-5 mt-5">
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="avatar">
                                    <img src="http://rapchieuphim.com/images/avatar.png" alt="">
                                    <h4>TÊN NGƯỜI DÙNG</h4>
                                </a>
                            </div>
                            <div class="list-group no-radius alt">
                                <a href="https://rapchieuphim.com/account" class="list-group-item">
                                    <i class="fa fa-cog fa-fw text-muted">
                                    </i>
                                    Cập nhật tài khoản
                                </a>
                                <a href="https://rapchieuphim.com/account/password" class="list-group-item">
                                    <i class="fa fa-shield fa-fw text-muted">
                                    </i>
                                    Đổi mật khẩu
                                </a>
                                <a href="https://rapchieuphim.com/logout" class="list-group-item">
                                    <i class="fa fa-power-off fa-fw text-muted">
                                    </i>
                                    Đăng xuất
                                </a>
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-9 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form name="user" method="post" action="https://rapchieuphim.com/account" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="DzSyIMFgEg3np4ZZH9tLJTJ6QiTLKdUjr7NfSkzE">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label required" for="user_username">Tên tài khoản
                                                </label>
                                                <input type="text" id="user_username" name="name" disabled="" required="required" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label required" for="user_email">Email
                                                </label>
                                                <input type="email" id="user_email" name="email" disabled="" required="required" class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label" for="user_fullname">Họ và tên
                                                </label>
                                                <input type="text" id="user_fullname" name="fullname" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label" for="user_gender">Giới tính
                                                </label>
                                                <select id="user_gender" name="sex" class="form-control">
                                                    <option value="male">Nam
                                                    </option>
                                                    <option value="female">Nữ
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label" for="user_dob">Ngày sinh
                                                </label>
                                                <input type="text" id="user_dob" name="birthday" class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="user_file">Giới thiệu
                                        </label>
                                        <textarea name="about" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="user_file">Ảnh đại diện
                                        </label>
                                        <input type="file" id="user_file" name="avatar" accept="image/gif, image/jpeg, image/png">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" id="user_save" class="btn btn-success">Cập nhật
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="  card p-5 mt-3">
            <H1 class="text-center">Thông tin phim </H1>
            <div class="row">
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card mt-3">
                        <img class="img-thumbnai " src="https://tse2.mm.bing.net/th?id=OIP.RijT8oSxJf-i79ZdzAEsQAHaLH&pid=Api&P=0">
                        <div class="card-body">
                            <h5>Người nhện mất nhà (2022)</h5>
                            <p>thời lượng: 2h </p>
                            <p>mô tả:</p>
                            <p> <i class="fa fa-fa-clock-o"></i> Lịch chiếu: </p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">MUA VÉ</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card mt-3">
                        <img class="img-thumbnai " src="https://tse2.mm.bing.net/th?id=OIP.RijT8oSxJf-i79ZdzAEsQAHaLH&pid=Api&P=0">
                        <div class="card-body">
                            <h5>Người nhện mất nhà (2022)</h5>
                            <p>thời lượng: 2h </p>
                            <p>mô tả:</p>
                            <p> <i class="fa fa-fa-clock-o"></i> Lịch chiếu: </p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">MUA VÉ</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="">
            <h1>Các xuất chiếu phim</h1>
            <div class="row">
                <div class="col-md-4 col-sm-6 card p-1 mr-3">
                    <img class ="img-fluid" src="https://tse2.mm.bing.net/th?id=OIP.-aV-WvotI3XEao2MpzKSPQHaK-&pid=Api&P=0"  alt="">
                    <div class="col-8 p-5">
                        <h4 class=""> Khắc tin của quỷ</h4>
                        <p>thời lượng: 1h30</p>
                        <h5>Xuất chiếu</h5>
                        <a href="#" data-cineplex="cinestar" class="btn btn-sm btn-showtime btn-outline-dark is-ticketing is-show-price" data-reference="118366_e11fd1c2-438f-4ca3-b893-09c75eb89ba2">
                            <span class="time">21:20</span>
                        </a>
                        <a href="#" data-cineplex="cinestar" class="btn btn-sm btn-showtime btn-outline-dark is-ticketing is-show-price" data-reference="118366_e11fd1c2-438f-4ca3-b893-09c75eb89ba2">
                            <span class="time">19:20</span>
                        </a>
    
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 card p-1 mr-3">
                    <img class ="img-fluid" src="https://tse2.mm.bing.net/th?id=OIP.-aV-WvotI3XEao2MpzKSPQHaK-&pid=Api&P=0"  alt="">
                    <div class="col-8 p-5">
                        <h4 class=""> Khắc tin của quỷ</h4>
                        <p>thời lượng: 1h30</p>
                        <h5>Xuất chiếu</h5>
                        <a href="#" data-cineplex="cinestar" class="btn btn-sm btn-showtime btn-outline-dark is-ticketing is-show-price" data-reference="118366_e11fd1c2-438f-4ca3-b893-09c75eb89ba2">
                            <span class="time">21:20</span>
                        </a>
    
                    </div>
                </div>
            </div>
            
        </section>
        <section>
            <h1 class="text-center">chọn ghế</h1>
            <div class="card">
                <table class="col-8 m-auto " style="font-size:40px">
                    <tr>
                        <th>*</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                    </tr>
                   <tr>
                        <td>A</td>
                        <td><input type="checkbox" ></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                   </tr>
                   <tr>
                        <td>B</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td>C</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td>D</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
           
                </table>
            </div>
           
            
        </section>
    </main>
   
</body>
</html>

