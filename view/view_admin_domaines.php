<!DOCTYPE html>
<html lang="en">
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
                        <h3 class="animated fadeInLeft">Les domaines</h3>
						<h3><?php if(isset($msg)){echo $msg;} ?></h3>
                    </div>
                  </div>
              </div>

            <div class="col-md-12 top-20 padding-0">
              <div class="col-md-12">
                <div class="panel">
                  <div class="panel-body">
                  <div class="responsive-table">
                    
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nom du domaine</th>
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
                              $connection = 'SELECT * FROM domains WHERE affichage_domain = 1';

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
                          <td><?php echo $datas['id_domain']; ?></td>
                          <td><?php echo $datas['nom_domain']; ?></td>
                          <td><?php echo $datas['adresse_ip']; ?></td>
                          <td><?php echo $datas['pays_domain']; ?></td>
                          <td><?php echo $datas['ville_domain']; ?></td>
                          <td><?php echo $_SESSION['nom']; ?></td>
                          <td>
							<a data-toggle="modal" href="#" data-target="#modal_edit" class="LienModal" rel="<?php echo $datas['id_domain']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                           <!-- <button name=""><i class="fa fa-trash" aria-hidden="true"></i></button> -->
							<form action="<?php echo INDEX ?>?index=del_domain" method="post">
										<input type="hidden" name="id_domain" value="<?php echo $datas['id_domain']; ?>">
										<button type ="submit" name="remove_levels" value="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
							</form> 
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

		
		<div id="modal_edit" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modifier le domaine</h4>
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
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer le domaine</h4>
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
        <?php include"./asset/includes/admin_message.php"; ?>
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
            url:"<?php echo INDEX ?>?index=show_edit_domain",
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