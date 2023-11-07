<?php

define("HOST","localhost");
define("USUARIO","root");
define("SENHA","");
define("DB","devpet");

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die(mysqli_connect_error());
?> 