<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Conexão ao banco de dados </title>
		<link rel="stylesheet" href="styles.css">
	</head>

	<body>
        <div class="container">
            <header>
                <h3>Sistema de Cadastro de Currículo</h3><br>
            </header>


            <form class="form-cadastro" name="Cadastro" action="cadastrar.php" method="GET">
                <div class="form-content">
					<label>Nome: </label>
					<input type="text" name="Nome" size="30"><br>
					<label>Sobrenome: </label>
					<input type="text" name="Sobrenome" size="45"><br>
					<label>Telefone: </label>
					<input type="text" name="telefone" size="45"><br>
					<label>E-mail: </label>
					<input type="text" name="Email" size="45"><br>
					<label>Escolaridade: </label>
					<select name="Escolaridade">
						<option value="">Selecione uma opção</option>
						<option value="M">Ensino Médio</option>
						<option value="T">Ensino Técnico</option>
						<option value="S">Ensino Superior</option>
					</select><br>
					<label>Curso: </label>
					<input type="text" name="Curso" size="45"><br>
				</div>

				<button class="btn-enviar" type="submit" name="enviar" value="Enviar">Enviar</button>
			</form>

			<span>
				<hr>
			</span>


			<form class="form-consulta" name="Consultar_Cadastro" action="consultar.php" method="POST">
				<div class="form-content">
					<h4>Dados Registrados no Banco de Dados Cadastro de Curriculo</h4>
					<button class="btn-consultar" type="submit" name="consulta-completa" value="Consultar">PROCURAR</button>
				</div>
			</form>

		</div>
	</body>

</html>