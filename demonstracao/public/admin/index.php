<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../../img/favincon_israel.png" type="image/x-icon">
	<title>Login - Escola de Enfermagem Israel</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/access.css">

	<script src="./assets/js/script.js"></script>
</head>

<body>
	<a href="../home.php" class="back-button"><i class="fas fa-arrow-left"></i> Voltar</a>
	<div class="container">
		<div class="d-flex justify-content-center h-100 form-wrapper">
			<div class="card">
				<div class="card-header">
					<h3>Login - Escola Modelo</h3>
				</div>

				<div class="card-body">
					<form>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
						</div>
						<div class="form-group">
							<button type="button" onclick="login()" class="btn btn-primary">Entrar</button>
						</div>
					</form>
				</div>
				<!-- <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Esqueceu sua senha?<a href="recuperar-senha.php">Clique aqui!</a>
				</div>
			</div> -->
				<p id="mensagem"></p>
			</div>
		</div>
	</div>

	<script src="./assets/js/login.js"></script>
</body>

</html>