	<?php
		require_once 'include/init.php';
		require_once 'include/header.php';
	?>
	
	<h1 class="text-center display-4">Ajout employé</h1><hr>
	
		<form method="post" action="" class="col-md-6 offset-md-3">
		  <div class="form-group">
			<label for="prénom">Prénom</label>
			<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrer prénom">
		  </div>
		  <div class="form-group">
			<label for="nom">Nom</label>
			<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrer nom de famille">
		  </div>
		  <div class="form-group">
			<label for="sexe">Sexe</label>
			<select class="form-control" id="exampleFormControlSelect1">
			  <option>Homme</option>
			  <option>Femme</option>
			</select>
		  </div>
		  <div class="form-group">
			<label for="service">Service</label>
			<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Service concerné">
		  </div>
		 
		  <button type="submit" class="btn btn-dark col-md-12">Enregistrer</button>
		</form>