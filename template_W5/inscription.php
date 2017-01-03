<main class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<h1>Inscription</h1>
		</div>
	</div> <!-- End of row h1-->
	
	<div class="row">
		<form class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
			
			<div class="form-group row">
				<label for="nom" class="col-xs-12 col-sm-2 col-form-label">Nom </label>
				<div class="col-xs-12 col-sm-8">
					<input type="text" class="form-control" name="nom" aria-describedby="Champ nom de l'utilisateur" placeholder="Votre nom...">
				</div>
			</div>

			<div class="form-group row">
				<label for="prenom" class="col-xs-12 col-sm-2 col-form-label">Prenom </label>
				<div class="col-xs-12 col-sm-8">
					<input type="text" class="form-control" name="prenom" aria-describedby="Champ email de l'utilisateur" placeholder="Votre prenom...">
				</div>
			</div>

			<div class="form-group row">
				<label for="email" class="col-xs-12 col-sm-2 col-form-label">Adresse E-mail </label>
				<div class="col-xs-12 col-sm-8">
					<input type="email" class="form-control" name="email" aria-describedby="Champ email de l'utilisateur" placeholder="Votre Email...">
				</div>
			</div>

			<fieldset class="form-group row">
				<label for="sexe" class="col-xs-12 col-sm-2 col-form-label">Sexe</label>
				<label class="form-check-inline col-sm-4">
					<input type="radio" class="form-check-input" name="sexe" value="Homme" checked> Homme  
				</label>
				<label class="form-check-inline col-sm-4">
					<input type="radio" class="form-check-input" name="sexe" value="Femme"> Femme
				</label>
			</fieldset>

			<div class="form-group row">
				<label for="lieu" class="col-xs-12 col-sm-2 col-form-label">Votre département </label>
				<div class="col-xs-12 col-sm-8">
					<input type="text" class="form-control" name="lieu" list="departement">
					<datalist id="departement">
						<option value="75 - Paris"></option>
						<option value="95 - Val-d-Oise"></option>
					</datalist>
				</div>	
			</div> <!-- End form-group row-->

			<div class="form-group row">
				<label for="password" class="col-xs-12 col-sm-2 col-form-label">Mot de Passe </label>
				<div class="col-xs-12 col-sm-8">
					<input type="password" class="form-control" name="password" aria-describedby="Champ mot de passe de l'utilisateur" placeholder="Votre mot de passe...">
				</div>
			</div>
			
			<div class="form-group row">
				<label for="confirm_password" class="col-xs-12 col-sm-2 col-form-label">Confirmation</label>
				<div class="col-xs-12 col-sm-8">
					<input type="password" class="form-control" name="confirm_password" placeholder="Confirmation de votre mot de passe... ">
				</div>
			</div>
			
			<div class="col-md-2 col-md-offset-4">
				<button type="submit" class="btn btn-primary">S'inscrire</button>
			</div> 

			<div class="col-md-2">
				<button type="reset" class="btn btn-default">Annuler</button>
			</div> 
		</form>
	</div>  <!-- End of row form-->
</main> <!-- End of main-->
