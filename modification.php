<!DOCTYPE html>
<html>
	<head>
	<title>Inscription</title>
	<meta charset="utf-8">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->
	</head>


		<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Register</div>
						<div class="card-body">

						<form class="form-horizontal" method="post" action="ciblePDOmodif.php">

											<div class="form-group">
												<label for="text" class="cols-sm-2 control-label">Modifier le Nom</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
														<input type="text" class="text" name="nom" id="text" placeholder="Modifier le Nom" />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="text" class="cols-sm-2 control-label">Modifier Prenom</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
														<input type="text" class="text" name="prenom" id="text" placeholder="Modifier Prenom" />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="text" class="cols-sm-2 control-label">Modifier l'Age</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
														<input type="text" class="text" name="age" id="text" placeholder="Modifier l'Age" />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="text" class="cols-sm-2 control-label">Modifier l'Email</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
														<input type="text" class="form-control" name="email" id="text" placeholder="Modifier l'Email" />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="password" class="cols-sm-2 control-label">Modifer Votre Mot de Passe</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
														<input type="password" class="password" name="mdp" id="password" placeholder="Modifer Votre Mot de Passe" />
													</div>
												</div>
											</div>
										   
												<input type="submit" value="Modifier">
												

											
										</form>
					</div>

				</div>
			</div>
		</div>
	</div>

</html>