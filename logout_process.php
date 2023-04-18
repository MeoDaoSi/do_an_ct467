<?php

require_once 'db/connect.php';
session_start();

require 'components/check_login.php';

unset($_SESSION['user']);

header('Location: /');
