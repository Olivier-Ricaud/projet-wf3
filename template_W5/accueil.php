<main class="container-fluid">
	<div class="row">
		<h1>Recherche d'Evénements</h1>
	</div>

		<!-- Formulaire -->
	<div class="row">
		<section class="col-md-5">
			<form class="form-horizontal" id="formRecherche">
				<div class="form-group row">
					<label for="lieu" class="col-sm-4 col-form-label">Département </label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="lieu" list="departement">
						<datalist id="departement">
							<option value="75 - Paris"></option>
							<option value="95 - Val-d-Oise"></option>
						</datalist>
					</div>	
				</div>

				<div class="form-group row">
					<label for="date" class="col-sm-4 col-form-label">Dates</label>
					<div class="col-sm-8">
						<input type="date" class="form-control" name="date_debut" placeholder="...">
						<input type="date" class="form-control" name="date_fin" placeholder="...">
					</div>
				</div>

				<div class="form-group row">
					<label for="niveau" class="col-sm-4 col-form-label">Niveau</label>
					<div class="col-sm-8">
						<select class="form-control" name="niveau">
							<option>Débutant</option>
							<option>Intermédiaire</option>
							<option>Confirmé</option>
						</select>		  		 
					</div>
				</div>

				<div class="form-group row">
					<label for="categorie" class="col-sm-4 col-form-label">Sexe</label>
					<div class="col-sm-8">
						<select class="form-control" name="sexe">
							<option>Homme</option>
							<option>Femme</option>
							<option>Mixte</option>
						</select>		  		 
					</div>
				</div>

				<div class="form-group row">
					<label for="duree" class="col-sm-4 col-form-label">Durée</label>
					<div class="col-sm-8">
						<select class="form-control" name="duree">
							<option>1h</option>
							<option>2h</option>
						</select>		  		 
					</div>
				</div>

				<div class="form-group row">
						<button type="reset" class="btn btn-default">Reset</button>
						<button type="submit" class="btn btn-primary" id="couleurWe5">Résultats</button>
				</div>
			</form>
		</section> <!-- End col-md-5 -->

		<!-- Asides -->
		<aside class="col-md-5 col-md-offset-2">
			<div id="aside">
				<a href="index.php?page=creer" class="btn btn-primary">Créer Match</a>
				<!-- Premier Panel -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="list-group-item-heading">Résultats des Derniers Matchs :</h4>
					</div>
					
					<table class="table table-striped table-hover">
						<tbody>
							<tr>
								<td>28/12/2016</td>
								<td>Paris</td>   
								<td>3-2</td>
					 			<td>Gagné</td> 
							</tr>
						</tbody>
					</table> 
				</div> <!-- End div panel-->
				<!-- Deuxième Panel -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="list-group-item-heading">Prochain(s) Rdv(s) :</h4>
					</div>
				
					<table class="table table-striped table-hover">
						<tbody data-link="row" class="rowlink">
							<tr> <!-- Fonction JQuery pour faire réagir la ligne au clique --> 
								<td><a href="index.php?page=detail">28/12/2016</a></td>
								<td>Paris</td>
							</tr>
						</tbody>
					</table> 
				</div> <!-- End div panel -->
			</div>
		</div> <!-- End col-sm-5 End col-sm-offset-2 -->
	</div> <!-- End row -->

	<!-- Liste événement(s) -->
	<div class="row">
		<section class="col-sm-10 col-sm-offset-1">
			<h2>Liste des résultats</h2>
				<figure class="col-sm-10 col-sm-offset-1">
					<div class="row">
						<a href="index.php?page=detail">
							<div class="col-xs-6">
								<img src="assets/img/arena3.png" alt="image de l'event">
							</div>
						</a>
						<div class="col-xs-6">
							<p>titre de l'événement</p>
							<p>Lieu / date </p>
							<p>Nombres de joueurs inscrits 1/10</p>
						</div> 
					</div>
				</figure>

				<figure class="col-sm-10 col-sm-offset-1">
					<div class="row">
						<a href="index.php?page=detail">
							<div class="col-xs-6">
								<img src="assets/img/terrainExterieur.jpg" alt="image de l'event">
							</div>
						</a>
						<div class="col-xs-6">
							<p>titre de l'événement</p>
							<p>Lieu / date </p>
							<p>Nombres de joueurs inscrits 1/10</p>
						</div> 
					</div>
				</figure>

				<figure class="col-sm-10 col-sm-offset-1">
					<div class="row">
						<a href="index.php?page=detail">
							<div class="col-xs-6">
								<img src="assets/img/arena3.png" alt="image de l'event">
							</div>
						</a>
						<div class="col-xs-6">
							<p>titre de l'événement</p>
							<p>Lieu / date </p>
							<p>Nombres de joueurs inscrits 1/10</p>
						</div> 
					</div>
				</figure>
		</section>
	</div> <!-- End row Liste événement(s) -->

	<!-- Debut Pagination -->
	<div class="row">
			<ul class="pagination pagination-sm">
				<li><a href="#">&laquo;</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">&raquo;</a></li>
			</ul>
	</div> <!-- End Pagination row -->
</main>
