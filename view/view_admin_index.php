<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include"./asset/includes/admin_head.php"; ?>
</head>

<body id="mimin" class="dashboard">
  <?php include"./asset/includes/admin_menu.php"; ?>
          <!-- start: content -->
            <div id="content">

                <div class="panel">
                  <div class="panel-body">
                    <div class="col-md-6 col-sm-12">
                      <h3 class="animated fadeInLeft">Mon tableau de bord</h3>
                      <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Paris,France</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
                          <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Paris  </h3>
                          <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="wheather">
                            <div class="stormy rainy animated pulse infinite">
                              <div class="shadow">
                                
                              </div>
                            </div>
                            <div class="sub-wheather">
                              <div class="thunder">
                                
                              </div>
                              <div class="rain">
                                  <div class="droplet droplet1"></div>
                                  <div class="droplet droplet2"></div>
                                  <div class="droplet droplet3"></div>
                                  <div class="droplet droplet4"></div>
                                  <div class="droplet droplet5"></div>
                                  <div class="droplet droplet6"></div>
                                </div>
                            </div>
                          </div>
                        </div>                   
                    </div>
                  </div>                    
                </div>

                <div class="col-md-12" style="padding:20px;">
                    <div class="col-md-12 padding-0">
                      <div class="col-md-8 padding-0">
                        <div class="col-md-12 padding-0">
                          <div class="col-md-6">
                            <div class="panel box-v1">
                              <div class="panel-heading bg-white border-none">
                                <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                  <h4 class="text-left">Les visites</h4>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                   <h4>
                                   <span class="icon-basket-loaded icons icon text-right"></span>
                                   </h4>
                                </div>
                              </div>
                              <div class="panel-body text-center">
                                <h1>
                                	<?php
                                		count_ip();
                                	?>
                                </h1>
                                <p>Visteurs en ce moment</p>
                                <hr/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="panel box-v1">
                                <div class="panel-heading bg-white border-none">
                                  <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                    <h4 class="text-left">Utilisateurs</h4>
                                  </div>
                                  <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                     <h4>
                                     <span class="icon-user icons icon text-right"></span>
                                     </h4>
                                  </div>
                                </div>
                                <div class="panel-body text-center">
                                  <h1>
                                  	<?php
                                  		global $bdd;

										$req = $bdd->query("SELECT COUNT(*) FROM users WHERE affichage = 1");

										$donnees = $req->fetch();
										$req->closeCursor();

										echo ($donnees[0]);
                                  	?>
                                  </h1>
                                  <p>Inscrits</p>
                                  <hr/>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel box-v4">
                                <div class="panel-heading bg-white border-none">
                                  <h4><span class="icon-notebook icons"></span> Agenda</h4>
                                </div>
                                <div class="panel-body padding-0">
                                    <div class="col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert">
                                        <h2>Checking Your Server!</h2>
                                        <p>Daily Check on Server status, mostly looking at servers with alerts/warnings</p>
                                        <b><span class="icon-clock icons"></span> Today at 15:00</b>
                                    </div>
                                    <div class="calendar">
                                      
                                    </div>
                                </div>
                            </div> 
                        </div>
                      </div>

                        <div class="col-md-4">
                          <div class="col-md-12 padding-0">
                            <div class="panel box-v2">
                                <div class="panel-body">
                                  <div class="col-md-12 padding-0 text-center">
                                    <div>

                                    	<?php
											global $bdd;
											
											//REQUETE SUR LA BASE DE DONNEES
											$connection = 'SELECT * FROM temps_tarpit where idtemps_tarpit = 0';

											try {
												$requete = $bdd->query($connection);
												while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {
										?>

                                        <h3>Temps de Tarpit</h3>
                                        <form action="" method="POST">
											<input type="text" class="form-control" disabled=disabled value="<?php if ($datas['secondes']>=0 && $datas['secondes']<=59) { echo $datas['secondes'].' secondes'; } elseif ($datas['secondes']=='60') { echo '1 minute'; } else { $resultat = floor($datas['secondes'] / 60); $secondes=$datas['secondes'] % 60; echo $resultat.' minutes '.$secondes.' secondes'; } ?>">
											<div class="input-group" style="width: 100%; height: 100%;">
												<input type="number" class="form-control" style="width: 70%; height: 100%;" name="temps" value="<?php echo $datas['secondes'] ?>" min="0" max="99999" style="resize:none">
												<input type="submit" name="modifier_tarpit" class="btn btn-primary" style="width: 30%; height: 100%;" value="Modifier">
											</div>
                                        </form>

                                        <?php          
				                                  }
				                              } catch (PDOException $error) {
				                                  echo "<script language=\"javascript\">";
				                                  echo "alert('ERREUR DE CONNECTION A LA BASE DE DONNéE')";
				                                  echo "</script>";
				                              }
				                        ?>

                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>

                            <div class="col-md-12 padding-0">
                              <div class="panel box-v3">
                                <div class="panel-heading bg-white border-none">
                                  <h4>Report</h4>
                                </div>
                                <div class="panel-body">
                                    
                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-folder icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Document Handling</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-pie-chart icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">UI/UX Development</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-energy icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Server Optimation</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-user icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">User Status</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                   <div class="media">
                                    <div class="media-left">
                                        <span class="icon-fire icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Firewall Status</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel-footer bg-white border-none">
                                    <center>
                                      <input type="button" value="download as pdf" class="btn btn-danger box-shadow-none"/>
                                    </center>
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>
            </div>
          <!-- end: content -->
      </div>
  <?php include"./asset/includes/admin_js.php"; ?>
</body>
</html>