<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Alterar Cadastro</title>
    <link rel="stylesheet" type="text/css" href="estilo_edicao.css">
</head>

<body>
    <header>
        <h1>Editar Currículo</h1>
    </header>
	<main>
		<?php
        //conexao com o banco de dados
        include_once("conectar.php");
        $sql = "SELECT * FROM cadastrocurriculo";
        $resultado = mysqli_query($bancobd, $sql) or die("Erro ao retornar dados");
        //o "resultado" cria um índice dos dados no bd

        //laço de repetição para mostrar os registros no bd
        while ($registro = mysqli_fetch_array($resultado))
        //o "registro" recebe os dados de acordo com o índice.
        {
            $id = $registro['id'];
            $nome = $registro['Nome'];
            $sobrenome = $registro['Sobrenome'];
            $telefone = $registro['telefone'];
            $email = $registro['Email'];
            $escolaridade = $registro['Escolaridade'];
            $curso = $registro['Curso'];

            echo "<span></span><hr>";
            echo "<form method='GET' action='alterar_cadastro.php'>";
            echo "<input type='hidden' name='id' value='$id'>";

            echo "<label for='nome'>Nome:</label>";
            echo "<input type='text' id='nome' name='Nome' placeholder='Digite o nome completo' value='$nome'><span></span>";

            echo "<label for='sobrenome'>Sobrenome:</label>";
            echo "<input type='text' id='sobrenome' name='Sobrenome' placeholder='Digite o seu sobrenome' value='$sobrenome'><span></span>";

            echo "<label for='telefone'>Telefone:</label>";
            echo "<input type='text' id='telefone' name='telefone' placeholder='Digite o telefone' value='$telefone'><span></span>";

            echo "<label for='email'>Email:</label>";
            echo "<input type='email' id='email' name='Email' placeholder='Digite o email' value='$email'><span></span>";

            echo "<label for='escolaridade'>Escolaridade:</label>";
            echo "<input type='text' id='escolaridade' name='Escolaridade' placeholder='Digite a escolaridade' value='$escolaridade'><span></span>";

            echo "<label for='curso'>Curso:</label>";
            echo "<input type='text' id='curso' name='Curso' placeholder='Digite o curso' value='$curso'><span></span>";

            echo "<input type='submit' value='Editar'>";
            echo "</form>";
        }

        mysqli_close($bancobd);

        ?>
    </main>
</body>

</html>