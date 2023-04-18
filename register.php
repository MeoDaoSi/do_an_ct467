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

    <section class="" style="background-color: #5d9cb1;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="text-center mt-5 pt-5">
                            <span class="h1 fw-bold mb-0 mt-5">Sign in</span>
                        </div>

                        <div class="row g-0">
                            <div class="col d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="/register_process.php" method="POST">


                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="dk_fuser" name="">Fullname:</label>
                                            <input type="text" name="fullname" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="dk_email" name="">Username:</label>
                                            <input type="Text" name="username" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="dk_email" name="">Email:</label>
                                            <input type="email" name="email" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="dk_pwd" name="">Mật khẩu:</label>
                                            <input type="password" name="password" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="birthday" name="">Ngày sinh:</label>
                                            <input type="date" name="birthday" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label ml-3" for="dk_pwd" name="">Giới tính: </label>
                                            <input id="men" type="radio" name="gender" value="1" /><label class="mr-3" for="men">Nam</label>
                                            <input id="woman" type="radio" name="gender" value="0" /><label for="woman">Nữ</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Đăng ký</button>
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Đã có tài khoản? <a href="/login.php" style="color: #393f81;">Đăng Nhập</a></p>
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