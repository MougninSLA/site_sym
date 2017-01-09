<!doctype html>
<html lang="en">
<head>
	<?php include("./asset/includes/dashboard_css.php"); ?>
	<title>Tableau de bord SYM</title>
</head>

<body>

		<?php include("./asset/includes/dashboard_menu.php"); ?>

			<div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Modifier votre profil</h4>
									<p class="category">Completez votre profil</p>
	                            </div>

	                            <form method="POST">
		                            <div class="card-content">
		                                <form>
		                                    <div class="row">
		                                        <div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Entreprise</label>
														<input type="text" class="form-control" value="<?php echo $_SESSION['entreprise_result']; ?>" name="entreprise">
													</div>
		                                        </div>
		                                        <div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Poste</label>
														<input type="text" class="form-control" value="<?php echo $_SESSION['poste_result']; ?>" name="poste">
													</div>
		                                        </div>
		                                    </div>

		                                    <div class="row">
		                                        <div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Login</label>
														<input type="text" class="form-control" value="<?php echo $_SESSION['login_result']; ?>" disabled>
													</div>
		                                        </div>
		                                        <div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Adresse e-mail</label>
														<input type="email" class="form-control" value="<?php echo $_SESSION['mail_result']; ?>" name="email">
													</div>
		                                        </div>
		                                    </div>

		                                    <div class="row">
		                                        <div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Nom</label>
														<input type="text" class="form-control" value="<?php echo $_SESSION['nom_result']; ?>" name="nom">
													</div>
		                                        </div>
		                                        <div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Prénom</label>
														<input type="text" class="form-control" value="<?php echo $_SESSION['prenom_result']; ?>" name="prenom">
													</div>
		                                        </div>
		                                    </div>

		                                    <div class="row">
		                                        <div class="col-md-12">
													<div class="form-group label-floating">
														<label class="control-label">Adresse</label>
														<input type="text" class="form-control" value="<?php echo $_SESSION['adresse_result']; ?>" name="adresse">
													</div>
		                                        </div>
		                                    </div>

		                                    <div class="row">
		                                        <div class="col-md-4">
													<div class="form-group label-floating">
														<label class="control-label">Ville</label>
														<input type="text" class="form-control" value="<?php echo $_SESSION['ville_result']; ?>" name="ville">
													</div>
		                                        </div>
		                                        <div class="col-md-4">
													<div class="form-group label-floating">
														<label class="control-label">Pays</label>
														<input type="text" class="form-control" value="<?php echo $_SESSION['pays_result']; ?>" name="pays">
													</div>
		                                        </div>
		                                        <div class="col-md-4">
													<div class="form-group label-floating">
														<label class="control-label">Code Postal</label>
														<input type="text" class="form-control" value="<?php echo $_SESSION['code_postal_result']; ?>" name="code_postal">
													</div>
		                                        </div>
		                                    </div>

		                                    <div class="row">
		                                        <div class="col-md-12">
		                                            <div class="form-group">
		                                                <label>A propos de moi</label>
														<div class="form-group label-floating">
										    				<label class="control-label"> </label>
									    					<textarea class="form-control" rows="2" name="a_propos"><?php echo $_SESSION['a_propos_result']; ?></textarea>
			                        					</div>
		                                            </div>
		                                        </div>
		                                    </div>

		                                    <input type="submit" name="maj" class="btn btn-primary pull-right" value="Mettre à jour"></input>
		                                    <div class="clearfix"></div>
		                                </form>
		                            </div>
		                        </form>
	                        </div>
	                    </div>
						<div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#pablo">
    									<img class="img" src="./asset/img/faces/marc.jpg" />
    								</a>
    							</div>

    							<div class="content">
    								<h6 class="category text-gray"><?php echo $_SESSION['poste_result']; ?></h6>
    								<h4 class="card-title"><?php echo $_SESSION['nom_result']; echo " "; echo $_SESSION['prenom_result']; ?></h4>
    								<p class="card-content">
    									<?php echo $_SESSION['a_propos_result']; ?>
    								</p>
    							</div>
    						</div>
		    			</div>
	                </div>
	            </div>
	        </div>

	        <footer class="footer">
	            <div class="container-fluid">
	                <p class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script> Secure Your Mail
	                </p>
	            </div>
	        </footer>
	    </div>
	</div>

</body>

	<?php include ('./asset/includes/dashboard_js.php'); ?>

</html>
