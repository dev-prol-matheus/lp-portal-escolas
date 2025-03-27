<!DOCTYPE html>
<html>

<head>
	<title>Recuperação de Senha - Escola de Enfermagem Israel</title>
	<link rel="icon" href="img/favicon.png">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
	<a href="index.php" class="back-button"><i class="fas fa-arrow-left"></i> Voltar</a>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Esqueceu sua Senha?</h3>
				</div>
				<div class="card-body">
					<form action="php/recuperacao-senha.php" method="post">
						<div class="input-group form-group">
							<p id="texto-esqueci-a-senha">Por favor, insira seu endereço de e-mail abaixo. Enviaremos uma nova senha para você por e-mail.</p>
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" id="email" name="email" class="form-control" placeholder="E-mail">

						</div>
						<div class="form-group">
							<input type="submit" value="Receber Nova Senha" class="btn float-right login_btn_recuperacao_senha">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Realizar o login?<a href="index.php">Clique aqui!</a>
					</div>
				</div><br>
				<p><?php
					if (!empty($_GET["recuperacao"])) {
						$recuperacao = $_GET["recuperacao"];
						if ($recuperacao == "s") {
							echo "
				<div id='reset-realizado' class='alert alert-success' role='alert'>
				Senha atualizada com sucesso! Um e-mail foi enviado com sua nova senha.
				</div>";
						} else {
							echo "
				<div id='loginIncorreto' id='reset-realizado' class='alert alert-success' role='alert'>
				Parece que seu e-mail não está em nosso banco de dados.<br>
				Entre em contato:<a class='linkWpp' href='https://api.whatsapp.com/send?phone=5581988343030&text=Ol%C3%A1%2C%20Professor%20Matheus%20Eloim%2C%20estou%20com%20dificuldade%20de%20resetar%20minha%20senha.'><strong> Clique aqui <i class='fab fa-whatsapp'></i> </strong></a>
				</div>";
						}
					}

					?></p>
			</div>

		</div>

	</div>
</body>

</html>