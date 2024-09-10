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

// comando sql para deletar o cadastro, desde que o id, nome e sobrenome sejam iguais aos que foram passados
$sql = "DELETE FROM cadastrocurriculo WHERE 
id = $id AND
Nome = '$nome' AND 
Sobrenome = '$sobrenome'";


mysqli_query($bancobd, $sql) or die("Erro ao tentar excluir registro");
mysqli_close($bancobd);
echo "Cliente excluído com sucesso!<br>";
