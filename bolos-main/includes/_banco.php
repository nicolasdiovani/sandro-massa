<?php
$hostname = "localhost";
$bancodedados = "nicolas site";
$usuario = "root";
$senha="";
$conn = mysqli_connect($hostname,$usuario, $senha, $bancodedados);

if (!$conn){
    die ("Erro ao conectar no banco: " . mysqli_connect_error());
}

?>