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
                        <h3 class="animated fadeInLeft">Les domaines</h3>
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
                              $connection = 'SELECT * FROM domains WHERE affichage_domain = 2';

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
                            <button name=""><i class="fa fa-binoculars" aria-hidden="true"></i></button>
                            &nbsp;
                            <button name="" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            &nbsp;
                            <button name=""><i class="fa fa-trash" aria-hidden="true"></i></button>
                            &nbsp;
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
  <?php include"./asset/includes/admin_js.php"; ?>
</body>
</html>