<?php
session_start();
session_destroy();
header('location:users_connect_login.php');
?>