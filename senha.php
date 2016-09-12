<?php
session_start();
include_once('PHP_BD/class.DBPDO.php');
$DB = new DBPDO();

if($DB->execute("UPDATE alm_users SET password = ? WHERE username = ? and password = ?", array($_POST['nova'], $_SESSION['username'], $_POST['atual'])))
{
    $_SESSION['senha'] = md5(session_id());
    header('Location: meuperfil.php');
}
