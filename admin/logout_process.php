<?php

session_start();
unset($_SESSION['is_logged_admin_in']);

header('Location: /admin/login.php');