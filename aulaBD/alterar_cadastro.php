<?php
// conexao com o bd
include_once("conectar.php");

// variaveis de entrada
$id = $_GET['id'];
$nome = $_GET['Nome'];
$sobrenome = $_GET['Sobrenome'];
$telefone = $_GET['telefone'];
$email = $_GET['Email'];
$escolaridade = $_GET['Escolaridade'];
$curso = $_GET['Curso'];

// caso nao se conecte, vai cair
if (!$bancobd) {
    die('Não foi possível conectar ao Banco de Dados');
}

// comando sql para alterar as variaveis do cadastro, desde que o id seja tal qual fora passado
$sql = "UPDATE cadastrocurriculo SET 
Nome = '$nome', 
Sobrenome = '$sobrenome',
telefone = '$telefone',
Email = '$email',
Escolaridade = '$escolaridade',
Curso = '$curso'
WHERE id = $id";

mysqli_query($bancobd, $sql) or die("Erro ao tentar alterar registro");
mysqli_close($bancobd);
echo "Cliente Alterado com sucesso!<br>";
