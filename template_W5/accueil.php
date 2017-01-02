<main class="container-fluid">
	<div class="row">
		<h1>>> Recherche d'Evénements</h1></br>

		<!-- Formulaire -->
		<section class="col-lg-5 col-sm-5">
			<form class="form-horizontal" id="formRecherche">
					<div class="form-group">
						<label for="ville" class="col-lg-2 col-sm-2 control-label">Ville</label>
						<div class="col-lg-10 col-sm-10">
							<input type="text" class="form-control" name="ville" placeholder="...">
						</div>
					</div>
					<div class="form-group">
						<label for="date" class="col-lg-2 col-sm-2 control-label">Dates</label>
						<div class="col-lg-10 col-sm-10">
							<input type="date" class="form-control" name="date_debut" placeholder="...">
							<input type="date" class="form-control" name="date_fin" placeholder="...">
						</div>
					</div>
					<div class="form-group">
						<label for="niveau" class="col-lg-2 col-sm-2 control-label">Niveau</label>
						<div class="col-lg-10 col-sm-10">
							<select class="form-control" name="niveau">
								<option>Débutant</option>
								<option>Intermédiaire</option>
								<option>Confirmé</option>
							</select>		  		 
						</div>
					</div>
					<div class="form-group">
						<label for="categorie" class="col-lg-2 col-sm-2 control-label">Catégorie</label>
						<div class="col-lg-10 col-sm-10">
							<select class="form-control" name="sexe">
								<option>Homme</option>
								<option>Femme</option>
								<option>Mixte</option>
							</select>		  		 
						</div>
					</div>
					<div class="form-group">
						<label for="duree" class="col-lg-2 col-sm-2 control-label">Durée</label>
						<div class="col-lg-10 col-sm-10">
							<select class="form-control" name="duree">
								<option>1h</option>
								<option>2h</option>
							</select>		  		 
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2 col-sm-10 col-sm-offset-2">
							<button type="reset" class="btn btn-default">Reset</button>
							<button type="submit" class="btn btn-primary" id="couleurWe5">Résultats</button>
						</div>
					</div>
			</form>
		</section> <!-- End col-lg-5 -->

		<!--3 Asides -->
		<div class="col-lg-4 col-lg-offset-3 col-sm-5 col-sm-offset-2 couleursAside" id="couleursAside">
			<a href="#" class="btn btn-primary">Créer Match</a>
			<!-- Premier Panel -->
			<aside class="panel panel-default">
				<div class="panel-heading">
					<h4 class="list-group-item-heading">Résultats des Derniers Matchs :</h4>
				</div>
				<div class="panel-body">			  			
					<div class="row">
						<section class="col-lg-10 col-lg-offset-1">
							<a href="#" class="list-group-item">
								<table class="table table-striped table-hover colorTable">
									<tbody>
										<tr class="active">
											<td>28/12/2016</td>
											<td>Paris</td>   
											<td>3-2</td>
											<td>Gagné</td> 
										</tr>
									</tbody>
								</table> 
							</a>
						</section>	
					</div>  <!-- End Tableau des matchs (row) -->		  		
				</div>
			</aside>
			<!-- Deuxième Panel -->
			<aside class="panel panel-default">
				<div class="panel-heading">
					<h4 class="list-group-item-heading">Prochain(s) Rdv(s) :</h4>
				</div>
				<div class="panel-body">			  			
					<div class="row">
						<section class="col-lg-10 col-lg-offset-1">
							<a href="#" class="list-group-item">
								<table class="table table-striped table-hover colorTable">
									<tbody>
										<tr class="active">
											<td>28/12/2016</td>
											<td>Paris</td>
										</tr>
									</tbody>
								</table> 
							</a>	  			
						</section>	
					</div>  <!-- End Tableau des matchs (row) -->		  		
				</div>
			</aside>
		</div> <!-- End col-lg-4 col-lg-offset-3 -->
	</div> <!-- End row -->

	<!-- Tableau Liste des Matchs -->
	<div class="row">
		<h2>>> Liste des Matchs :</h2></br>
		<section class="col-lg-8">
			<table class="table table-striped table-hover colorTable">
				<thead>
					<tr>
						<th></th>
						<th>Date</th>
						<th>Ville</th>
						<th>Niveau</th>
						<th>Catégorie</th>
						<th>Durée</th>
					</tr>
				</thead>
				<tbody>
					<tr class="active">
						<td></td>
						<td>30/12/2016</td>
						<td>Paris</td>
						<td>Intermédiaire</td>
						<td>Mixte</td>
						<td>1h</td>
					</tr>
				</tbody>
			</table> 
		</section>	
	</div>  <!-- End Tableau des matchs (row) -->

	<!-- Liste événement(s) -->
	<div class="row">
		<section class="col-xs-10 col-xs-offset-1"> 
			<div class="article col-sm-10 col-sm-offset-1" id="visuMatch">
				<div class="row">
					<div class="col-xs-6">
						<img src="assets/img/arena3.png" alt="image de l'event">
					</div>
					<div class="col-xs-6">
						<p>titre de l'événement</p>
						<p>Lieu / date </p>
						<p>Nombres de joueurs inscrits 1/10</p>
					</div> 
				</div>
			</div>	

			<div class="article col-sm-10 col-sm-offset-1">
				<div class="row">
					<div class="col-xs-6">
						<img src="assets/img/arena3.png" alt="image de l'event">
					</div>
					<div class="col-xs-6">
						<p>titre de l'événement</p>
						<p>Lieu / date </p>
						<p>Nombres de joueurs inscrits 1/10</p>
					</div> 
				</div>
			</div> <!-- End col-sm-10 col-sm-offset-1 -->	
		</section> <!-- End col-xs-10 col-xs-offset-1 --> 	
	</div> <!-- End row Liste événement(s) -->

	<!-- Debut Pagination -->
	<div class="row">
		<div class="col-lg-offset-1 col-sm-offset-1">
			<ul class="pagination pagination-sm">
				<li><a href="#">&laquo;</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">&raquo;</a></li>
			</ul>
		</div> <!-- End col-lg-offset-1 col-sm-offset-1 --> 
	</div> <!-- End Pagination row -->
</main>
