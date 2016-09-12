<?php
include_once('PHP_BD/class.DBPDO.php');
$DB = new DBPDO();
$usernames = $DB->fetchAll("SELECT username FROM alm_users");

$flag = true;
foreach($usernames as $username)
{
    if($username['username'] == $_POST['login'])
        $flag = false;
}

if($flag)
{
    $DB->execute("INSERT INTO alm_users (username, password) VALUES (?, ?)", array($_POST['login'], md5($_POST['senha'])));
    header('Location: index.php');
}
else
    header('Location: index.php?erro=1');