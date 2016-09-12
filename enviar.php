<?php
session_start();
if(mail('gabrielrs.sh@gmail.com', 'Repositorio - '.$_POST['titulo'].' - '.$_POST['categoria'], $_POST['mensagem']))
    $_SESSION['contato'] = true;   
else
    $_SESSION['contato'] = false;
header('Location: contato.php');