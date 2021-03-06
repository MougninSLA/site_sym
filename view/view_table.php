<!doctype html>
<html lang="fr">
<head>
	<?php include("./asset/includes/dashboard_css.php"); ?>
	<title>Tableau de bord SYM</title>
</head>

<body>

		<?php include("./asset/includes/dashboard_menu.php"); ?>

			<div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">MES DOMAINES</h4>
										<a target="_blank" href="#add_domain" data-toggle="modal" class="btn pull-right" rel="tooltip" title="Ajout d'un domaine">
											<i class="material-icons">add</i>
										</a>
	                                <p class="category">Les domaines que je relaye</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>Nom</th>
	                                    	<th>Pays</th>
	                                    	<th>Ville</th>
											<th>Adresse IP</th>
	                                    </thead>
	                                    <tbody>
											<?php
												global $bdd;

												$x=0;

												//REQUETE SUR LA BASE DE DONNEES
												$connection = 'SELECT * FROM domains where id_createur = '.$_SESSION['id_user_result'].' and affichage_domain = 2';

												try {
													$requete = $bdd->query($connection);
													while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {
													$x++;
											?>

											<form method="GET" name="formulaire">
		                                        <tr>
		                                        	<td><?php echo $datas['nom_domain']; ?></td>
		                                        	<td><?php echo $datas['pays_domain']; ?></td>
		                                        	<td><?php echo $datas['ville_domain']; ?></td>
													<td class="text-primary"><?php echo $datas['adresse_ip']; ?></td>
													<td class="td-actions text-right">
														<a href="#" data-toggle="modal" data-target="#suppr_domain" rel="<?php echo $datas['id_domain']; ?>" class="supprimer">
															<i title="Supprimer le domaine" class="btn btn-primary btn-simple btn-xs material-icons">close</i>
														</a>
													</td>
		                                        </tr>
	                                        </form>

	                                        <?php          
					                                  }
					                              } catch (PDOException $error) {
					                                  echo "<script language=\"javascript\">";
					                                  echo "alert('ERREUR DE CONNECTION A LA BASE DE DONNéE')";
					                                  echo "</script>";
					                              }
					                        ?>

	                                    </tbody>
	                                </table>

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

	<?php include ('view_modals.php'); ?>

</html>