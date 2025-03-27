<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
	<div class="container-fluid d-flex justify-content-between align-items-center">
		<!-- Logo à esquerda -->
		<a class="navbar-brand d-flex align-items-center me-auto" href="../../index.php">
			<img src="../assets/img/logo-1.png" alt="Logo" style="height: 30px;">
		</a>

		<!-- Toggle button para dispositivos móveis -->
		<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navegação e formulário à direita -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<!-- <li class="nav-item">
          <a class="nav-link active text-dark fw-semibold" aria-current="page" href="dashboard_home.php">Home</a>
        </li> -->
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="leads.php">Leads cadastrados</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="cursos.php">Cursos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="blogs.php">Blogs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="banners.php">Banners enviados</a>
				</li>
			</ul>

			<!-- Formulário de logout -->
			<form class="d-flex ms-3">
				<button onclick="logout()" class="btn btn-outline-danger fw-bold" type="button">Sair</button>
			</form>

			<script src="./assets/js/logout.js"></script>

		</div>
	</div>
</nav>