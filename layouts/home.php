	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tugas 2</title>
		<link rel="stylesheet" href="<?php echo AST; ?>/css/bootstrap.min.css">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container">
			<a class="navbar-brand" href="<?php echo URL; ?>/dashboard">Tugas 2 PBWL</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="<?php echo URL; ?>/dashboard">Home</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?php echo URL; ?>/golongan">Golongan</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?php echo URL; ?>/pelanggan">Pelanggan</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?php echo URL; ?>/user">User</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?php echo URL; ?>/dashboard">Logout</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Dropdown link
				</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Action</a></li>
					<li><a class="dropdown-item" href="#">Another action</a></li>
					<li><a class="dropdown-item" href="#">Something else here</a></li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
		</nav>
		<div class="container">
		<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</div>

		<script src="<?php echo  AST; ?>/js/bootstrap.bundle.js"></script>
	</body>

	</html>
