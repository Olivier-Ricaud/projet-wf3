<main class="container-fluid">

	<!-- IMAGE DE FOND astuce => https://gist.github.com/petehouston/85dd33210c0764eeae55 "ou"
	>>> faire un carousel d'une seul image => http://stackoverflow.com/questions/22122111/how-to-display-text-over-an-image-in-bootstrap-3-1 "ou"
	>>> simplement jouer avec les positions relat/absol -->
	<section>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<img class="img-responsive" src="assets/img/arena3.png" alt="exemple"> 
			</div>
		</div>
	</section>

	<!-- <div class="col-md-10 col-md-offset-1"> -->
	<!-- Détail de l'événement -->
	<section class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">lieu</div>
					<div class="panel-body">chez moi</div>
				</div>
			</div>

			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">date</div>
					<div class="panel-body">12/12/2016</div>
				</div>
			</div>

			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">nombre de joueurs inscrits</div>
					<div class="panel-body">10</div>
				</div>
			</div>

			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">sexe des joueurs recherché</div>
					<div class="panel-body">Mixte</div>
				</div>
			</div>

			<!-- 2nd row: not needed -->
			<!-- <div class="row"> -->
			<div class="col-xs-6 col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">tarif</div>
					<div class="panel-body">10€</div>
				</div>
			</div>

			<div class="col-xs-6 col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">durée</div>
					<div class="panel-body">1 heures</div>
				</div>
			</div>

			<div class="col-xs-6 col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">niveau recomendé</div>
					<div class="panel-body">Amateur</div>
				</div>
			</div>
	</section> <!-- End of Row -->

	<!-- Description -->
	<section class="row">
			<div class="col-md-6">
				<h2>Example body text</h2>
				<p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod nemo similique doloremque fuga nesciunt rerum illum, tenetur illo nobis dolor molestias nihil ea tempora necessitatibus, expedita dolorum omnis, aspernatur ad.</p>
			</div>

			<div class="col-md-6">
				<!-- Responsive Embeds voir: http://www.w3schools.com/bootstrap/bootstrap_images.asp -->
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d70660.21304508974!2d2.301146715383795!3d48.84055251038102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6724c27587c7d%3A0x9415be5e9053dcc3!2sUrbanSoccer+-+Porte+d&#39;Ivry!5e0!3m2!1sfr!2sfr!4v1482938030233"></iframe>
				</div>
			</div>
	</section>

	<!-- Liste des joueurs -->
	<section class="row">
		<!-- Liste des joueurs -->
		<div class="col-md-7">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
						<th>#</th>
						<th>Username</th>
						<th>Level</th>
						<th>Gender</th>
						<th>Edit (Admin)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td><a href="#">Alex</a></td>
						<td>Intermediaire</td>
						<td>M</td>
						<!-- Bouton START -->
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Status <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">En attente</a></li>
									<li><a href="#">Validée</a></li>
								</ul>
							</div>
							<a href="#" class="btn btn-danger">Retirer</a>
						</td>
						<!-- Bouton END -->	
					</tr> 

					<tr>
						<td>2</td>
						<td><a href="#">Alex</a></td>
						<td>Intermediaire</td>
						<td>M</td>
						<td>
						<div class="btn-group">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							Status <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">En attente</a></li>
								<li><a href="#">Validée</a></li>
							</ul>
						</div>
						<a href="#" class="btn btn-danger">Retirer</a></td>
					</tr>
					
					<tr>
								
						<td>3</td>
						<td><a href="#">Alex</a></td>
						<td>Intermediaire</td>
						<td>M</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Status <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">En attente</a></li>
									<li><a href="#">Validée</a></li>
								</ul>
							</div>
							<a href="#" class="btn btn-danger">Retirer</a>
						</td>
					</tr>
					
					<tr>
						<td>4</td>
						<td><a href="#">Alex</a></td>
						<td>Intermediaire</td>
						<td>M</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Status <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">En attente</a></li>
									<li><a href="#">Validée</a></li>
								</ul>
							</div>
							<a href="#" class="btn btn-danger">Retirer</a>
						</td>
					</tr>
					
					<tr>
						<td>5</td>
						<td><a href="#">Alex</a></td>
						<td>Intermediaire</td>
						<td>M</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									Status <span class="caret"></span></button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">En attente</a></li>
										<li><a href="#">Validée</a></li>
									</ul>
								</div>
								<a href="#" class="btn btn-danger">Retirer</a></td>
					</tr>
						
					<tr>
						<td>6</td>
						<td><a href="#">Alex</a></td>
						<td>Intermediaire</td>
						<td>M</td>
						<td>
							<div class="btn-group">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Status <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">En attente</a></li>
									<li><a href="#">Validée</a></li>
								</ul>
							</div>
							<a href="#" class="btn btn-danger">Retirer</a>
						</td>
					</tr>

					<tr>
						<td>7</td>
						<td><a href="#">Alex</a></td>
						<td>Intermediaire</td>
						<td>M</td>
						<td>
							<div class="btn-group">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							Status <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">En attente</a></li>
									<li><a href="#">Validée</a></li>
								</ul>
							</div>
							<a href="#" class="btn btn-danger">Retirer</a>
						</td>
					</tr>
					
					<tr>
						<td>8</td>
						<td><a href="#">Alex</a></td>
						<td>Intermediaire</td>
						<td>M</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Status <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">En attente</a></li>
									<li><a href="#">Validée</a></li>
								</ul>
							</div>
							<a href="#" class="btn btn-danger">Retirer</a>
						</td>
					</tr>

					<tr>
						<td>9</td>
						<td><a href="#">Alex</a></td>
						<td>Intermediaire</td>
						<td>M</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Status <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">En attente</a></li>
									<li><a href="#">Validée</a></li>
								</ul>
							</div>
							<a href="#" class="btn btn-danger">Retirer</a>
						</td>
					</tr>

					<tr>
						<td>10</td>
						<td><a href="#">Alex</a></td>
						<td>Intermediaire</td>
						<td>M</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Status <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">En attente</a></li>
									<li><a href="#">Validée</a></li>
								</ul>
							</div>
							<a href="#" class="btn btn-danger">Retirer</a>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
		<!-- CHAT -->
		<aside class="col-md-4 col-md-offset-1">
			<!-- Affichage du TEXT -->
			<!-- Astuce de l'offset apprise à la fin pour centrer du content , appliquer plus haut -->
			<!-- 
			Penser a ajuster les couleurs du chat façon discord:
			- choisir une font 
			- .small {colors: moins prononcé;}
			- mettre le pseudo dans un autre couleur et le faire ressortir
			- text chat en blanc + retirer les <br>
			-->
			<div class="well well-sm">ALEX <span class="small">Today at 10:00</span><br> How are you ?</div>
			<div class="well well-sm">ALEX <span class="small">Today at 10:01</span><br> Look, I'm fine</div>

			<!-- Champ d'input -->
			<div class="form-group">
				<label class="control-label">Alex</label>
				<div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Send</button>
					</span>
				</div>
			</div>
		</aside>
	</section>
</main>
