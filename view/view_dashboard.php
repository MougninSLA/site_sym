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