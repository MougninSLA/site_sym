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
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Mes listes</h4>
										<a target="_blank" href="#add_domain" data-toggle="modal" class="btn pull-right" rel="tooltip" title="Ajout domaine">
											<i class="material-icons">add</i>
										</a>
	                                <p class="category">Les blacklists que vous gérez</p>
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
												$connection = 'SELECT * FROM domains where id_createur = '.$_SESSION['id_user_result'].'';

												try {
													$requete = $bdd->query($connection);
													while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {
													$x++;
											?>

	                                        <tr>
	                                        	<td><?php echo "<small>".$datas['nom_domain']."</small>"; ?></td>
	                                        	<td><?php echo "<small>".$datas['pays_domain']."</small>"; ?></td>
	                                        	<td><?php echo "<small>".$datas['ville_domain']."</small>"; ?></td>
												<td class="text-primary"><?php echo "<small>".$datas['adresse_ip']."</small>"; ?></td>
												<td class="td-actions text-right">
													<button type="button" rel="tooltip" title="Modifier le domaine" class="btn btn-primary btn-simple btn-xs">
														<i class="material-icons">edit</i>
													</button>
													<button type="button" rel="tooltip" title="Supprimer le domaine" class="btn btn-danger btn-simple btn-xs">
														<i class="material-icons">close</i>
													</button>
												</td>
	                                        </tr>

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

	<!--   Core JS Files   -->
	<script src="./asset/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="./asset/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="./asset/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="./asset/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="./asset/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="./asset/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="./asset/js/demo.js"></script>

	<?php include ('view_modals.php'); ?>

</html>