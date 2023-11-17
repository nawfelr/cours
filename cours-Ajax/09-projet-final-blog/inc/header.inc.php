	<!DOCTYPE html>
	<html lang="fr">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="un blog">
	<meta name="author" content="mila">
	<link rel="icon" href="img/favicon.png">

	<title>Blog</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- FONT ROBOTO font-family: 'Roboto', sans-serif  -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	</head>

	<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top">
	<a class="navbar-brand" href="index.php">Blog</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
	<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
		<a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
		<a class="nav-link" data-toggle="modal" data-target="#exampleModal" id="connexion">Connexion</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" data-toggle="modal" data-target="#exampleModalInscription" id="inscription">Inscription</a>
		</li>
		<?php if(!empty($_SESSION['user'])) : ?>
		<li class="nav-item">
		<a class="nav-link" href="creation_article.php">Créer un article</a>
		</li>
		<?php endif; ?>

	</ul>
	<form class="form-inline my-2 my-lg-0">
		<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
	</form>
	</div>
	</nav>