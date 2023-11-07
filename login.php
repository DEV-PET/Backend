<?php

include("conecta.php"); // Aqui eu estou chamando o 'conect.php', para realizar a conexão com o DB

if (empty($_POST['user']) || empty($_POST['password'])) {
    header('Location: index.php');
} // Este if verificou se os campos estavam vazios. 

$_usuario = $_POST['user'];
$_senha = $_POST['password'];
?>