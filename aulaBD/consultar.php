<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title> Conexão ao banco de dados </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    // Conecta ao banco de dados: 
    include_once("conectar.php");
    // Cria-se uma tabela e cabeçalho de dados: é possível
    // fazer isso de diversas formas, use a criatividade.
    echo "<table id='tbl'>";
    echo "<tr>";
    echo "<th>NOME</th>";
    echo "<th>SOBRENOME</th>";
    echo "<th>TELEFONE</th>";
    echo "<th>E-MAIL</th>";
    echo "<th>ESCOLARIDADE</th>";
    echo "<th>CURSO</th>";
    echo "</tr>";

    $sql = "SELECT * FROM cadastrocurriculo";
    $resultado = mysqli_query($bancobd, $sql) or die("Erro ao retornar dados");
    // a variável resultado cria um indíce dos dados do banco
    // Por meio do comando de repetição while obtemos os dados do banco
    while ($registro = mysqli_fetch_array($resultado))
    //a variável registro recebe os dados de acordo com o índice.
    {
        $id = $registro['id'];
        $nome = $registro['Nome'];
        $sobrenome = $registro['Sobrenome'];
        $telefone = $registro['telefone'];
        $email = $registro['Email'];
        $escolaridade = $registro['Escolaridade'];
        $curso = $registro['Curso'];
        echo "<tr>";
        echo "<td>" . $nome . "</td>";
        echo "<td>" . $sobrenome . "</td>";
        echo "<td>" . $telefone . "</td>";
        echo "<td>" . $telefone . "</td>";
        echo "<td>" . $email . "</td>";
        echo "<td>" . $escolaridade . "</td>";
        echo "<td>" . $curso . "</td>";
        echo "</tr>";
    }
    mysqli_close($bancobd);
    echo "</table>";
    ?>
</body>

</html>