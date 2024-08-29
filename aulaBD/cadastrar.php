<?php
include_once("conectar.php");
$nome = $_GET['Nome'];
$sobrenome = $_GET['Sobrenome'];
$telefone = $_GET['telefone'];
$email = $_GET['Email'];
$escolaridade = $_GET['Escolaridade'];
$curso = $_GET['Curso'];

$sql = "INSERT INTO cadastrocurriculo (Nome, Sobrenome, telefone, Email, Escolaridade, Curso)
 VALUES 
('$nome','$sobrenome','$telefone','$email','$escolaridade','$curso')";

mysqli_query($bancobd, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($bancobd);
echo "Cliente cadastrado com sucesso!<br>";
