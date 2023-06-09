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


  <section class="vh-100" style="background-color: #85d192;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-6 ">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="login_process.php" method="POST">

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <span class="h1 fw-bold mb-0">Đăng nhập Admin</span>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" name="taikhoan" class="form-control form-control-lg" />
                      Tài khoản:
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" name="password" class="form-control form-control-lg" />
                      Mật khẩu:
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block">Đăng nhập</button>
                    </div>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>