<?php
session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['error'] = "Bạn cần phải đăng nhập để sử dụng chức năng này!";
    header("Location: /");
    exit();
}
