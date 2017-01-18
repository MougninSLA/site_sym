<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include"./asset/includes/admin_head.php"; ?>
</head>

<body id="mimin" class="dashboard">
  <?php include"./asset/includes/admin_menu.php"; ?>
          <!-- start: content -->
          <div id="content">
             <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Les listes</h3>
						<h3><?php if(isset($msg)){echo $msg;} ?></h3>
                        <p class="animated fadeInDown">
                          Les listes <span class="fa-angle-right fa"></span>Les blacklists
                        </p>
                    </div>
                  </div>
              </div>
				<center><button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ajouter">
					<i class="fa fa-plus"></i> Ajouter un whitelist
				</button></center>
            <div class="col-md-12 top-20 padding-0">
              <div class="col-md-12">
                <div class="panel">
                  <div class="panel-body">
                  <div class="responsive-table">
                    
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Nom de la blacklist</th>
                        <th>Adresse IP</th>
                        <th>Pays</th>
                        <th>Ville</th>
                        <th>Créateur</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <?php
                          global $bdd;

                              $x=0;

                              //REQUETE SUR LA BASE DE DONNEES
                              $connection = 'SELECT * FROM blacklists WHERE affichage_blacklist = 2';

                              try {
                                  $requete = $bdd->query($connection);
                                  while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {
                                    $x++;

                                  //REQUETE SUR LA BASE DE DONNEES
                                  $req = $bdd->prepare("SELECT nom FROM users WHERE users.id_user = :id_createur");
                                  $req->execute(array("id_createur"=>$datas['id_createur']));

                                  while($results = $req->fetch()){
                                    $_SESSION['nom']= $results["nom"];
                                  }
                                  
                                  $req->closeCursor();
                        ?>

                        <tr>
                          <td><?php echo $datas['nom_blacklist']; ?></td>
                          <td><?php echo $datas['adresse_blacklist']; ?></td>
                          <td><?php echo $datas['pays_blacklist']; ?></td>
                          <td><?php echo $datas['ville_blacklist']; ?></td>
                          <td><?php echo $_SESSION['nom']; ?></td>
                          <td>
							<a data-toggle="modal" href="#" data-target="#modal_edit" class="LienModal" rel="<?php echo $datas['id_blacklist']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            &nbsp;
							<form action="<?php echo INDEX ?>?index=del_blacklist" method="post">
										<input type="hidden" name="id_blacklist" value="<?php echo $datas['id_blacklist']; ?>">
										<button type ="submit" name="remove_levels" value="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
							</form> 
                          </td> 
                          <td style="width:5%;">
                            <?php
                              $existe = whitelist($datas['adresse_blacklist']);
                              if($existe == "true"){
                                echo '<i class="fa fa-exclamation-triangle" style="color:red;" aria-hidden="true" title="Cette adresse existe dans la whitelist. Veuillez vérifier SVP."></i>';
                              } else {
                                echo "";
                              }
                            ?>
                          </td>
                        </tr>

                        <?php
                                    
                                  }
                              } catch (PDOException $error) {
                                  echo "<script language=\"javascript\">";
                                  echo "alert('Erreur de connexion à la base de données')";
                                  echo "</script>";
                              }
                        ?>
                    </tbody>
                  </table>
                  </div>
                  <div class="col-md-6">
                        <ul class="pagination pull-right">
                          <li>
                            <a href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="active"><a data-toggle="tab" href="#page1">1</a></li>
                          <li><a href="#">2</a></li>
                          <li>
                            <a href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- end: content -->
		<div id="modal_edit" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modifier le whitelist</h4>
                </div>
				<center>
                <div class="modal-body">
                    <p>Loading...</p>
                </div>
        </div>
        <!-- /.modal-content -->
    </div>
	
    <!-- /.modal-dialog -->
</div>
        <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un blacklist</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=add_blacklist" method="POST">
                <table width="300">
                  <tr>
                    <td>Nom de domaine</td>
                    <td><input type="textbox" placeholder="Nom de domaine" name="nom_domaine" required></td>
                  </tr>                  <tr>
                    <td>Adresse IP</td>
                    <td><input type="textbox" placeholder="Adresse IP" name="ip" required></td>
                  </tr>                  
				  <tr>
                    <td>Pays</td>
                    <td><input type="textbox" placeholder="Pays" name="pays" required></td>
                  </tr>				  
				  <tr>
                    <td>Ville</td>
                    <td><input type="textbox" placeholder="Ville" name="ville" required></td>
                  </tr>  
				  <tr>
                    <td>Utilisateur</td>
                    <td><input type="textbox" placeholder="Administrateur" disabled></td>	
				  </tr>                
                </table>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
			</form>
            </div>
          </div>
        </div> 
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer le blacklist</h4>
              </div>
              <div class="modal-body">
                <center>
                    <table width="300">
                      <tr>
						<button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Supprimer</button>
						<button type="button" data-dismiss="modal" class="btn">Annuler</button>	
                      </tr>
                    </table>
                </center>
              </div>
            </div>
          </div>
        </div>
            <!-- start: right menu -->
            <div id="right-menu">
              <div class="tab-content">
                <div id="right-menu-user" class="tab-pane fade in active">
                  <div class="search col-md-12">
                    <input type="text" placeholder="search."/>
                  </div>
                  <div class="user col-md-12">
                   <ul class="nav nav-list">
                    <li class="online">
                      <img src="./asset/images/tim.png" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="away">
                      <img src="./asset/images/tim.png" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-desktop"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="./asset/images/tim.png" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                  </ul>
                </div>
                <!-- Chatbox -->
                <div class="col-md-12 chatbox">
                  <div class="col-md-12">
                    <a href="#" class="close-chat">X</a><h4>Akihiko Avaron</h4>
                  </div>
                  <div class="chat-area">
                    <div class="chat-area-content">
                      <div class="msg_container_base">
                        <div class="row msg_container send">
                          <div class="col-md-9 col-xs-9 bubble">
                            <div class="messages msg_sent">
                              <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                              </div>
                            </div>
                            <div class="col-md-3 col-xs-3 tim.png                             <img src="./asset/images/tim.png" class=" img-responsive " alt="user name">
                            </div>
                          </div>

                          <div class="row msg_container receive">
                            <div class="col-md-3 col-xs-3 tim.png                             <img src="./asset/images/tim.png" class=" img-responsive " alt="user name">
                            </div>
                            <div class="col-md-9 col-xs-9 bubble">
                              <div class="messages msg_receive">
                                <p>that mongodb thing looks good, huh?
                                  tiny master db, and huge document store</p>
                                  <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                </div>
                              </div>
                            </div>

                            <div class="row msg_container send">
                              <div class="col-md-9 col-xs-9 bubble">
                                <div class="messages msg_sent">
                                  <p>that mongodb thing looks good, huh?
                                    tiny master db, and huge document store</p>
                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                  </div>
                                </div>
                                <div class="col-md-3 col-xs-3 tim.png                                 <img src="./asset/images/tim.png" class=" img-responsive " alt="user name">
                                </div>
                              </div>

                              <div class="row msg_container receive">
                                <div class="col-md-3 col-xs-3 tim.png                                 <img src="./asset/images/tim.png" class=" img-responsive " alt="user name">
                                </div>
                                <div class="col-md-9 col-xs-9 bubble">
                                  <div class="messages msg_receive">
                                    <p>that mongodb thing looks good, huh?
                                      tiny master db, and huge document store</p>
                                      <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                  </div>
                                </div>

                                <div class="row msg_container send">
                                  <div class="col-md-9 col-xs-9 bubble">
                                    <div class="messages msg_sent">
                                      <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                      </div>
                                    </div>
                                    <div class="col-md-3 col-xs-3 tim.png                                     <img src="./asset/images/tim.png" class=" img-responsive " alt="user name">
                                    </div>
                                  </div>

                                  <div class="row msg_container receive">
                                    <div class="col-md-3 col-xs-3 tim.png                                     <img src="./asset/images/tim.png" class=" img-responsive " alt="user name">
                                    </div>
                                    <div class="col-md-9 col-xs-9 bubble">
                                      <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh?
                                          tiny master db, and huge document store</p>
                                          <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="chat-input">
                                <textarea placeholder="type your message here."></textarea>
                              </div>
                            </div>
                          </div>
                </div>
              </div>
            </div>  
          <!-- end: content -->
      </div>
  <?php include"./asset/includes/admin_js.php"; ?>
      <script>
$(".LienModal").click(function(oEvt){
    oEvt.preventDefault();
    var Id=$(this).attr("rel");
        $(".modal-body").fadeIn(1000).html('<div style="text-align:center; margin-right:auto; margin-left:auto">Patientez...</div>');
        $.ajax({
            type:"GET",
            data : "Id="+Id,
            url:"<?php echo INDEX ?>?index=show_edit_blacklist",
            error:function(msg){
                $(".modal-body").addClass("tableau_msg_erreur").fadeOut(800).fadeIn(800).fadeOut(400).fadeIn(400).html('<div style="margin-right:auto; margin-left:auto; text-align:center">Impossible de charger cette page</div>');
            },
            success:function(data){
                $(".modal-body").fadeIn(1000).html(data);
            }
        });
    });
   </script> 
     <script>
		$('button[name="remove_levels"]').on('click', function(e){
			var $form=$(this).closest('form');
			e.preventDefault();
			$('#confirm').modal({ backdrop: 'static', keyboard: false })
				.one('click', '#delete', function (e) {
					$form.trigger('submit');
				});
		});
	</script>
</body>
</html>