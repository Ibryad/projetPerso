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

										<form class="form-horizontal" method="post" action="ciblePDOco.php">

											<div class="form-group">
												<label for="text" class="cols-sm-2 control-label">Votre Nom</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
														<input type="text" class="text" name="nom" id="text" placeholder="Entrer Votre Nom" />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="text" class="cols-sm-2 control-label">Votre Prenom</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
														<input type="text" class="text" name="prenom" id="text" placeholder="Entrer Votre Prenom" />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="text" class="cols-sm-2 control-label">Votre Age</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
														<input type="text" class="text" name="age" id="text" placeholder="Entrer Votre Age" />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="text" class="cols-sm-2 control-label">Votre Email</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
														<input type="text" class="form-control" name="email" id="text" placeholder="Entrer Votre Email" />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="password" class="cols-sm-2 control-label">Votre Mot de Passe</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
														<input type="password" class="password" name="mdp" id="password" placeholder="Entrer Votre Mot de Passe" />
													</div>
												</div>
											</div>
										   
												<a href="indexconnecte.html"><input type="submit" value="Inscription"></a>

											<div class="login-register">
												<a href="hadiths.html">Vous avez un compte ? Connecté-vous </a>
											</div>
										</form>
									</div>

								</div>
							</div>
						</div>
		</div>

</html>