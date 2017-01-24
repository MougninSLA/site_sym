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
						<div class="col-md-4">
							<div class="card">
								<div class="card-header card-chart" data-background-color="green">
									<div class="ct-chart" id="dailySalesChart"></div>
								</div>
								<div class="card-content">
									<h4 class="title">Nombre de spams recus - quotidiens</h4>
								<!--	<p class="category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 55%  </span> augmentation.</p> -->
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> Mis à jour il y'a 4 minutes
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-header card-chart" data-background-color="orange">
									<div class="ct-chart" id="emailsSubscriptionChart"></div>
								</div>
								<div class="card-content">
									<h4 class="title">Nombre de spams recus - mensuel</h4>
								<!--	<p class="category">Decembre</p> -->
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> Mis à jour il y'a 1 jour
									</div>
								</div>

							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-header card-chart" data-background-color="red">
									<div class="ct-chart" id="completedTasksChart"></div>
								</div>
								<div class="card-content">
									<h4 class="title">Nombre de spams recus - annuels</h4>
								<!--	<p class="category">Pour la journée d'aujourd'hui</p> -->
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> campaign sent 2 days ago
									</div>
								</div>
							</div>
						</div>
					</div>

							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="card card-nav-tabs">
										<div class="card-header" data-background-color="purple">
											<div class="nav-tabs-navigation">
												<div class="nav-tabs-wrapper">
													<span class="nav-tabs-title">Catégories:</span>
													<ul class="nav nav-tabs" data-tabs="tabs">
														<li class="active">
															<a href="#profile" data-toggle="tab">
																<i class="material-icons">thumb_down</i>
																à éviter
															<div class="ripple-container"></div></a>
														</li>
														<li class="">
															<a href="#messages" data-toggle="tab">
																<i class="material-icons">thumbs_up_down</i>
																Pas si sûrs
															<div class="ripple-container"></div></a>
														</li>
														<li class="">
															<a href="#settings" data-toggle="tab">
																<i class="material-icons">thumb_up</i>
																Sûrs
															<div class="ripple-container"></div></a>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="card-content">
											<div class="tab-content">
												<div class="tab-pane active" id="profile">
													<table class="table">
														<tbody>
															<tr>
																<td>
																	<div class="checkbox">
																		<label>
																			<input type="checkbox" name="optionsCheckboxes" checked>
																		</label>
																	</div>
																</td>
																<td>www.cpasbien.com</td>
															</tr>
															<tr>
																<td>
																	<div class="checkbox">
																		<label>
																			<input type="checkbox" name="optionsCheckboxes" checked>
																		</label>
																	</div>
																</td>
																<td>www.films-regarder.com</td>
															</tr>
															<tr>
																<td>
																	<div class="checkbox">
																		<label>
																			<input type="checkbox" name="optionsCheckboxes" checked>
																		</label>
																	</div>
																</td>
																<td>www.toto.com</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="tab-pane" id="messages">
													<table class="table">
														<tbody>
															<tr>
																<td>
																	<div class="checkbox">
																		<label>
																			<input type="checkbox" name="optionsCheckboxes" checked>
																		</label>
																	</div>
																</td>
																<td>www.tata.com</td>
															</tr>
															<tr>
																<td>
																	<div class="checkbox">
																		<label>
																			<input type="checkbox" name="optionsCheckboxes" checked>
																		</label>
																	</div>
																</td>
																<td>www.cbien.com</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="tab-pane" id="settings">
													<table class="table">
														<tbody>
															<tr>
																<td>
																	<div class="checkbox">
																		<label>
																			<input type="checkbox" name="optionsCheckboxes" checked>
																		</label>
																	</div>
																</td>
																<td>www.google.com</td>
															</tr>
															<tr>
																<td>
																	<div class="checkbox">
																		<label>
																			<input type="checkbox" name="optionsCheckboxes" checked>
																		</label>
																	</div>
																</td>
																<td>www.facebook.com</td>
															</tr>
															<tr>
																<td>
																	<div class="checkbox">
																		<label>
																			<input type="checkbox" name="optionsCheckboxes" checked>
																		</label>
																	</div>
																</td>
																<td>www.outlook.com</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
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

		<?php include("./asset/includes/dashboard_js.php"); ?>

</html>