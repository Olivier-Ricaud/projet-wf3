<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 'On');

$fichier = "accueil.php";

if(isset($_GET['page']) ) {
	$page = $_GET['page'];

	switch ($page) {
		case 'connexion':
			$fichier = "connexion.php";
			break;

		case 'inscription':
			$fichier = "inscription.php";
			break;

		case 'charte':
			$fichier = "charte.php";
			break;

		case 'cgu':
			$fichier = "cgu.php";
			break;

		case 'contact':
			$fichier = "contact.php";
			break;
			
		case 'detail':
			$fichier = "detail_event.php";
			break;

		case 'feuille-match':
			$fichier = "feuille_match.php";
			break;

		case 'profil':
			$fichier = "page_profil_accueil.php";
			break;

		case 'profil-editer':
			$fichier = "page_editer_profil.php";
			break;

		default:
			$fichier = "accueil.php";
			break;
	}
} else {
  $fichier = "accueil.php";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="UTF-8">

	<title>Template</title>
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
	<header>
		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="nav pull-right">
					<img src="assets/img/Anais1.jpg" alt="profile picture" class=" img-circle dropdown-toggle" data-toggle="dropdown" width="50" height="50"></a>
					<ul class="dropdown-menu inverse-dropdown">
						<li><a href="index.php?page=accueil">Accueil</a></li>
						<li><a href="index.php?page=profil">Profil</a></li>
						<li><a href="index.php?page=contact">Page de contact</a></li>
						<li><a href="#">Déconnexion</a></li>
					</ul>
				</div> <!-- End Navbar-right -->

				<div class="navbar-header">
					<a class="navbar-brand" data-toggle="collapse" data-target="#myNavbar">WE5</a>
				</div> <!-- End Navbar header-->
				
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="<?= ( $page === 'accueil') ? "active" : "" ?>"><a href="index.php?">Accueil</a></li>
						<li class="<?= ( $page === 'profil') ? "active" : "" ?>"><a href="index.php?page=profil">Profil</a></li>
						<li class="<?= ( $page === '') ? "active" : "" ?>"><a href="">Création d'événement</a></li>
					</ul>
				</div> <!-- End collapse navbar-->
			</div> <!-- End container-fluid-->
		</nav>
	</header>
	
	<?php include "$fichier"; ?>

	<!-- Footer -->
	<footer class="footer text-center">
		<div class="footer-above">
			<div class="container">
				<div class="row">
					<div class="footer-col col-sm-4">
						<p><a href="index.php?page=cgu">CGU</a></p>
						<p><a href="#">Charte de confidentialité</a></p>
					</div>

					<div class="footer-col col-sm-4">
						<p><a href="index.php?page=contact">Nous contacter</a></p>
					</div>

					<div class="footer-col col-sm-4">
						<p>Nombre d'inscrits</p>
						<p>Nombre d'événements</p>
					</div>
				</div> <!-- End Row -->
			</div> <!-- End container -->
		</div>  <!-- End Footer-above -->

		<div class="footer-below">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook fa-3x"></i></a>
						<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus fa-3x"></i></a>             <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter fa-3x"></i></a>                
						<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin fa-3x"></i></a>
						<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble fa-3x"></i></a>
						<p>Copyright &copy; 2016 - Webforce3 Project</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- <script src="assets/js/script.js"></script> -->

</body>
</html>