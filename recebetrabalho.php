<?php
session_start();
include_once('PHP_BD/class.DBPDO.php');
$DB = new DBPDO();
$usuario = $DB->fetch('SELECT id FROM alm_users WHERE username = ?', $_SESSION['username']);
$usuarioid = $usuario['id'];
$titulo = $_POST['titulo'];
$materia = $_POST['materia'];
$data = date('Y-m-d', time());
$atual = getcwd();
$uploaddir = $atual.'/trabalhos';
$flag;
if(!file_exists($uploaddir.'/'.$materia))
    mkdir($uploaddir.'/'.$materia, 0777, true);
if(move_uploaded_file($_FILES['trabalho']['tmp_name'], $uploaddir.'/'.$materia.'/'.$titulo.'-'.$_FILES['trabalho']['name']))
    $flag = true;
else
    $flag = false;

$caminho = 'trabalhos'.'/'.$materia.'/'.$titulo.'-'.$_FILES['trabalho']['name'];



if($flag)
{
    $DB->execute("INSERT INTO trabalho (titulo, caminho, usuario, materia, dataUpload) VALUES (?, ?, ?, ?, ?)", array($titulo, $caminho, $usuarioid, $materia, $data));
    header('Location: welcome.php');
}
else
    header('Location: welcome.php?erro=1');