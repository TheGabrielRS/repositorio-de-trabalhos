<?php
session_start();
include_once('PHP_BD/class.DBPDO.php');
$DB = new DBPDO();

if($DB->fetch("SELECT username, password FROM alm_users WHERE username = ? and password = ?", array($_POST['username'], md5($_POST['password']))))
{
    $_SESSION['is_successful_login'] = 1;
    $_SESSION['username'] = $_POST['username'];
    header('Location: welcome.php');
}
    