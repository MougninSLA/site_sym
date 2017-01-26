<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include"./asset/includes/admin_head.php"; ?>
</head>

<body id="mimin" class="dashboard">
  <?php include"./asset/includes/admin_menu.php"; ?>
  <?php if(isset($msg)){
			echo $msg;
		}
  ?>
          <!-- start: content -->
          <div id="content">
            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">LES UTILISATEURS INSCRITS</h3>
					  <h3><?php if(isset($msg)){echo $msg;} ?></h3>
                  </div>
                </div>
            </div>
			
				<center><button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ajouter">
					<i class="fa fa-plus"></i> Ajouter un utilisateur
				</button></center>
			  
            <div class="col-md-12 top-20 padding-0">
              <div class="col-md-12">
                <div class="panel">
                  <div class="panel-body">
                  <div class="responsive-table">
                    
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th style="width: 20%;">Nom</th>
                        <th style="width: 20%;">Prenom</th>
                        <th style="width: 20%;">Login</th>
                        <th style="width: 20%;">Mail</th>
                        <th style="width: 20%;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <?php
                          global $bdd;

                              $x=0;

                              //REQUETE SUR LA BASE DE DONNEES
                              $connection = 'SELECT * FROM users WHERE affichage = 1';

                              try {
                                  $requete = $bdd->query($connection);
                                  while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {
                                    $x++;
                        ?>

                        <tr>
                          <td style="width: 20%;"><?php echo $datas['nom']; ?></td>
                          <td style="width: 20%;"><?php echo $datas['prenom']; ?></td>
                          <td style="width: 20%;"><?php echo $datas['login']; ?></td>
                          <td style="width: 20%;"><?php echo $datas['mail']; ?></td>
                          <td style="width: 20%;">
              							<center>
                              <a data-toggle="modal" style="width: 7%;" data-target="#modal_show_user" class="LienModal" rel="<?php echo $datas['id_user']; ?>">
                                <button>
                                  <i class="fa fa-binoculars" aria-hidden="true"></i>
                                </button>
                              </a>
                              &nbsp;
                              <a data-toggle="modal" style="width: 7%;" data-target="#modal_edit" class="LienModale" rel="<?php echo $datas['id_user']; ?>">
                                <button>
                                  <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                              </a>
                              &nbsp;
                              <form action="<?php echo INDEX ?>?index=del_user" method="post" style="width: 7%; display: inline;">
                                <input type="hidden" name="id_user" value="<?php echo $datas['id_user']; ?>">
                                <button type ="submit" name="remove_levels" value="delete"><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i></button>
                              </form>       
                            </center>
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
      </div>
		<div id="modal_show_user" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Détails de l'utilisateur</h4>
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
<div id="modal_edit" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modifier l'utilisateur</h4>
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
                <h4 class="modal-title" id="myModalLabel">Supprimer l'utilisateur</h4>
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

		<!-- Modal -->
        <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un uilisateur</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=add_user" method="POST">
                <table width="300">
                  <tr>
                    <td style="width: 20%;">Nom</td>
                    <td style="width: 20%;"><input type="textbox" placeholder="Nom" name="nom" required pattern="[a-zA-Z]+[A-Za-zéèç\0\s\-]{1,32}"></td>
                  </tr>                  <tr>
                    <td style="width: 20%;">Prénom</td>
                    <td style="width: 20%;"><input type="textbox" placeholder="Prénom" name="prenom" required pattern="[a-zA-Z]+[A-Za-zéèç\0\s\-]{1,32}"></td>
                  </tr>                  
				  <tr>
                    <td style="width: 20%;">Login</td>
                    <td style="width: 20%;"><input type="textbox" placeholder="Login" name="login" required></td>
                  </tr>  
				  <tr>
                    <td style="width: 20%;">Mot de passe</td>
                    <td style="width: 20%;"><input type="password" name="mdp" id="password" class="password" required>
					<button class="unmask" type="button" title="Mask/Unmask password to check content">Unmask</button></td>
                  </tr> 
				  <tr>
                    <td style="width: 20%;">Email</td>
                    <td style="width: 20%;"><input type="textbox" placeholder="Email" name="mail" required></td>
				  </tr>  
				  <tr>
                    <td style="width: 20%;">Entreprise</td>
                    <td style="width: 20%;"><input type="textbox" name="entreprise" ></td>
                  </tr>                  
				  <tr>
                    <td style="width: 20%;">Poste</td>
                    <td style="width: 20%;"><input type="textbox" name="poste" ></td>
                  </tr>                  
				  <tr>
                    <td style="width: 20%;">Adresse</td>
                    <td style="width: 20%;"><input type="textbox" name="adresse" ></td>
                  </tr>                  
				  <tr>
                    <td style="width: 20%;">Ville</td>
                    <td style="width: 20%;"><input type="textbox" name="ville" ></td>
                  </tr>                  
				  <tr>
                    <td style="width: 20%;">Pays</td>
                    <td style="width: 20%;"><input type="textbox" name="pays" ></td>
                  </tr>                  
				  <tr>
                    <td style="width: 20%;">Code Postal</td>
                    <td style="width: 20%;"><input type="textbox" name="code_postal" ></td>
                  </tr>                  
				  <tr>
                    <td style="width: 20%;">A propos</td>
                    <td style="width: 20%;"><input type="textbox" name="a_propos"></td>
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

  <?php include"./asset/includes/admin_js.php"; ?>
      <script>
$(".LienModal").click(function(oEvt){
    oEvt.preventDefault();
    var Id=$(this).attr("rel");
        $(".modal-body").fadeIn(1000).html('<div style="text-align:center; margin-right:auto; margin-left:auto">Patientez...</div>');
        $.ajax({
            type:"GET",
            data : "Id="+Id,
            url:"<?php echo INDEX ?>?index=show_user",
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
$(".LienModale").click(function(oEvt){
    oEvt.preventDefault();
    var Id=$(this).attr("rel");
        $(".modal-body").fadeIn(1000).html('<div style="text-align:center; margin-right:auto; margin-left:auto">Patientez...</div>');
        $.ajax({
            type:"GET",
            data : "Id="+Id,
            url:"<?php echo INDEX ?>?index=show_edit_user",
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

$('.unmask').on('click', function(){
  
  if($(this).prev('input').attr('type') == 'password')
    changeType($(this).prev('input'), 'text');
  
  else
    changeType($(this).prev('input'), 'password');
  
  return false;
});


function changeType(x, type) {
    if(x.prop('type') == type)
        return x; 
    try {
        return x.prop('type', type);
    } catch(e) {
        var html = $("<div>").append(x.clone()).html();
        var regex = /type=(\")?([^\"\s]+)(\")?/; 
        var tmp = $(html.match(regex) == null ?
            html.replace(">", ' type="' + type + '">') :
            html.replace(regex, 'type="' + type + '"') );
        tmp.data('type', x.data('type') );
        var events = x.data('events');
        var cb = function(events) {
            return function() {
                for(i in events)
                {
                    var y = events[i];
                    for(j in y)
                        tmp.bind(i, y[j].handler);
                }
            }
        }(events);
        x.replaceWith(tmp);
        setTimeout(cb, 10); 
        return tmp;
    }
}
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

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