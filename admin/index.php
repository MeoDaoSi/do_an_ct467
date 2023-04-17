<?php
    session_start();
    if(isset($_SESSION['is_logged_admin_in'])){
        header('location:/admin/views/index.php');
    }
    require_once 'login.php';
?>