<?php
  //-------------------------------------------------------------------------------------------------------------
  //Fonction qui verifie si un compte existe
  function compte($login)
  {

     global $bdd;

     //REQUETE SUR LA BASE DE DONNEES
     $connection = 'SELECT * FROM users';

     try {
         $requete = $bdd->query($connection);
         while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {

             if ($login === $datas['login']) {
                 $testLog = "true";
                 break;

             } elseif ($login !== $datas['login']) {
                 $testLog = "false";

             } else {
                 $testLog = "false";
                 break;
             }
         }
     } catch (PDOException $error) {
         echo "<script language=\"javascript\">";
         echo "alert('ERREUR DE CONNECTION A LA BASE DE DONNEES')";
         echo "</script>";
     }

     return $testLog;
  }
  //-------------------------------------------------------------------------------------------------------------


  //-------------------------------------------------------------------------------------------------------------
  //Fonction qui verifie si un domaine existe
  function domain($adresse)
  {

     global $bdd;

     //REQUETE SUR LA BASE DE DONNEES
     $connection = 'SELECT * FROM domains';

     try {
         $requete = $bdd->query($connection);
         while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {

             if ($adresse === $datas['adresse_ip']) {
                 $testLog = "true";
                 break;

             } elseif ($adresse !== $datas['adresse_ip']) {
                 $testLog = "false";
                 
             } else {
                 $testLog = "false";
                 break;
             }
         }
     } catch (PDOException $error) {
         echo "<script language=\"javascript\">";
         echo "alert('ERREUR DE CONNECTION A LA BASE DE DONNEES')";
         echo "</script>";
     }

     return $testLog;
  }
  //-------------------------------------------------------------------------------------------------------------


  //-------------------------------------------------------------------------------------------------------------
  //Fonction qui verifie si une blacklist existe
  function blacklist($adresse)
  {

     global $bdd;

     //REQUETE SUR LA BASE DE DONNEES
     $connection = 'SELECT * FROM blacklists';

     try {
         $requete = $bdd->query($connection);
         while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {

             if ($adresse === $datas['adresse_blacklist']) {
                 $testLog = "true";
                 break;

             } elseif ($adresse !== $datas['adresse_blacklist']) {
                 $testLog = "false";
                 
             } else {
                 $testLog = "false";
                 break;
             }
         }
     } catch (PDOException $error) {
         echo "<script language=\"javascript\">";
         echo "alert('ERREUR DE CONNECTION A LA BASE DE DONNEES')";
         echo "</script>";
     }

     return $testLog;
  }
  //-------------------------------------------------------------------------------------------------------------


  //-------------------------------------------------------------------------------------------------------------
  //Fonction qui verifie si une blacklist existe
  function whitelist($adresse)
  {

     global $bdd;

     //REQUETE SUR LA BASE DE DONNEES
     $connection = 'SELECT * FROM whitelists';

     try {
         $requete = $bdd->query($connection);
         while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {

             if ($adresse === $datas['adresse_whitelist']) {
                 $testLog = "true";
                 break;

             } elseif ($adresse !== $datas['adresse_whitelist']) {
                 $testLog = "false";
                 
             } else {
                 $testLog = "false";
                 break;
             }
         }
     } catch (PDOException $error) {
         echo "<script language=\"javascript\">";
         echo "alert('ERREUR DE CONNECTION A LA BASE DE DONNEES')";
         echo "</script>";
     }

     return $testLog;
  }
  //-------------------------------------------------------------------------------------------------------------


  //-------------------------------------------------------------------------------------------------------------
  //Fonction qui retrouve un compte
  function select_user($login)
  {
    global $bdd;
    $req = $bdd->prepare("SELECT * FROM users WHERE users.login = :login");
    $req->execute(array("login"=>$login));

    while($results = $req->fetch()){

      $_SESSION['id_user_result'] = $results["id_user"];
      $_SESSION['nom_result'] = $results["nom"];
      $_SESSION['prenom_result'] = $results["prenom"];
      $_SESSION['login_result'] = $results["login"];
      $_SESSION['mail_result'] = $results["mail"];
      $_SESSION['mdp_result'] = $results["mdp"];
      $_SESSION['entreprise_result'] = $results["entreprise"];
      $_SESSION['poste_result'] = $results["poste"];
      $_SESSION['adresse_result'] = $results["adresse"];
      $_SESSION['ville_result'] = $results["ville"];
      $_SESSION['pays_result'] = $results["pays"];
      $_SESSION['code_postal_result'] = $results["code_postal"];
      $_SESSION['a_propos_result'] = $results["a_propos"];
      $_SESSION['photo_result'] = $results["photo"];
      $_SESSION['affichage_result'] = $results["affichage"];
    }
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------


  //-------------------------------------------------------------------------------------------------------------
  //Fonction qui retrouve une notification
  function select_notif($notification)
  {
    global $bdd;
    $req = $bdd->prepare("SELECT * FROM notifications WHERE notifications.id_notif_admin = :notification");
    $req->execute(array("notification"=>$notification));

    while($results = $req->fetch()){

      $_SESSION['type']= $results["type"];
      $_SESSION['adresse_domaine'] = $results["adresse_domaine"];
    }
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------


  //-------------------------------------------------------------------------------------------------------------
  //Fonction qui retrouve un compte
  function select_domain($domain)
  {
    global $bdd;
    $req = $bdd->prepare("SELECT * FROM domains WHERE domains.id_domain = :domain");
    $req->execute(array("domain"=>$domain));

    while($results = $req->fetch()){

      $_SESSION['id_domain_result'] = $results["id_domain"];
      $_SESSION['nom_domain_result']= $results["nom_domain"];
      $_SESSION['adresse_ip_result'] = $results["adresse_ip"];
      $_SESSION['pays_domain_result'] = $results["pays_domain"];
      $_SESSION['ville_domain_result'] = $results["ville_domain"];
      $_SESSION['id_createur_domain_result'] = $results["id_createur"];
      $_SESSION['affichage_result'] = $results["affichage_domain"];
    }
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Fonction qui retrouve une whitelist
  function select_whitelist($whitelist)
  {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM whitelists WHERE whitelists.id_whitelist = :whitelist");
    $req->execute(array("whitelist"=>$whitelist));
    while($results = $req->fetch()){

      $_SESSION['id_whitelist_result'] = $results["id_whitelist"];
      $_SESSION['nom_whitelist_result']= $results["nom_whitelist"];
      $_SESSION['adresse_whitelist_result'] = $results["adresse_whitelist"];
      $_SESSION['pays_whitelist_result'] = $results["pays_whitelist"];
      $_SESSION['ville_whitelist_result'] = $results["ville_whitelist"];
      $_SESSION['id_createur_whitelist_result'] = $results["id_createur"];
      $_SESSION['affichage_whitelist_result'] = $results["affichage_whitelist"];
    }
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Fonction qui retrouve une blacklist
  function select_blacklist($blacklist)
  {
    global $bdd;
    $req = $bdd->prepare("SELECT * FROM blacklists WHERE blacklists.id_blacklist = :blacklist");
    $req->execute(array("blacklist"=>$blacklist));

    while($results = $req->fetch()){

      $_SESSION['id_blacklist_result'] = $results["id_blacklist"];
      $_SESSION['nom_blacklist_result']= $results["nom_blacklist"];
      $_SESSION['adresse_blacklist_result'] = $results["adresse_blacklist"];
      $_SESSION['pays_blacklist_result'] = $results["pays_blacklist"];
      $_SESSION['ville_blacklist_result'] = $results["ville_blacklist"];
      $_SESSION['id_createur_blacklist_result'] = $results["id_createur"];
      $_SESSION['affichage_blacklist_result'] = $results["affichage_blacklist"];
    }
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Fonction pour ajouter un utilisateur dans notre BDD
  function add_user($nom,$prenom,$login,$mail,$mdp)
  {
    global $bdd;

    //REQUETE SUR LA BASE DE DONNEES
    $req = $bdd->prepare("INSERT INTO `users` (`nom`,`prenom`,`login`,`mail`,`mdp`,`affichage`) values (:nom,:prenom,:login,:mail,:mdp,1);");
    $req->execute(array(
    'nom'=>$nom,
    'prenom'=>$prenom,
    'login'=>$login,
    'mail'=>$mail,
    'mdp'=>$mdp
    ));
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------


  //-------------------------------------------------------------------------------------------------------------
  //Fonction pour ajouter un domaine dans notre BDD
  function add_domain($nom,$adresse,$pays,$ville,$createur)
  {
    global $bdd;

    //REQUETE SUR LA BASE DE DONNEES
    $req = $bdd->prepare("INSERT INTO `domains` (`nom_domain`,`adresse_ip`,`pays_domain`,`ville_domain`,`id_createur`,`affichage_domain`) values (:nom,:adresse,:pays,:ville,:createur,1);");
    $req->execute(array(
    'nom'=>$nom,
    'adresse'=>$adresse,
    'pays'=>$pays,
    'ville'=>$ville,
    'createur'=>$createur
    ));
    $req->closeCursor();
  }

  //Fonction pour ajouter un domaine dans notre BDD
  function add_admin_domain($nom,$adresse,$pays,$ville,$createur)
  {
    //Execution de script
    exec('sudo /usr/bin/perl /var/www/scripts/add_domain_relay.pl '.$nom.' '.$adresse);

    global $bdd;

    //REQUETE SUR LA BASE DE DONNEES
    $req = $bdd->prepare("INSERT INTO `domains` (`nom_domain`,`adresse_ip`,`pays_domain`,`ville_domain`,`id_createur`,`affichage_domain`) values (:nom,:adresse,:pays,:ville,:createur,2);");
    $req->execute(array(
    'nom'=>$nom,
    'adresse'=>$adresse,
    'pays'=>$pays,
    'ville'=>$ville,
    'createur'=>$createur
    ));
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------


  //-------------------------------------------------------------------------------------------------------------
  //Fonction pour ajouter une blacklist dans notre BDD
  function add_whitelist($nom,$adresse,$pays,$ville,$createur)
  {
    global $bdd;

    //REQUETE SUR LA BASE DE DONNEES
    $req = $bdd->prepare("INSERT INTO `whitelists` (`nom_whitelist`,`adresse_whitelist`,`pays_whitelist`,`ville_whitelist`,`id_createur`,`affichage_whitelist`) values (:nom,:adresse,:pays,:ville,:createur,1);");
    $req->execute(array(
    'nom'=>$nom,
    'adresse'=>$adresse,
    'pays'=>$pays,
    'ville'=>$ville,
    'createur'=>$createur
    ));
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------
  //------------

  //Fonction pour ajouter une blacklist dans notre BDD
  function add_admin_whitelist($nom,$adresse,$pays,$ville,$createur)
  {
    //Execution de script
    exec('sudo /var/www/scripts/add_whitelist.sh '.$adresse);

    global $bdd;

    //REQUETE SUR LA BASE DE DONNEES
    $req = $bdd->prepare("INSERT INTO `whitelists` (`nom_whitelist`,`adresse_whitelist`,`pays_whitelist`,`ville_whitelist`,`id_createur`,`affichage_whitelist`) values (:nom,:adresse,:pays,:ville,:createur,2);");
    $req->execute(array(
    'nom'=>$nom,
    'adresse'=>$adresse,
    'pays'=>$pays,
    'ville'=>$ville,
    'createur'=>$createur
    ));
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------
  //------------
  //Fonction pour ajouter une blacklist dans notre BDD
  function add_blacklist($nom,$adresse,$pays,$ville,$createur)
  {
    global $bdd;

    //REQUETE SUR LA BASE DE DONNEES
    $req = $bdd->prepare("INSERT INTO `blacklists` (`nom_blacklist`,`adresse_blacklist`,`pays_blacklist`,`ville_blacklist`,`id_createur`,`affichage_blacklist`) values (:nom,:adresse,:pays,:ville,:createur,1);");
    $req->execute(array(
    'nom'=>$nom,
    'adresse'=>$adresse,
    'pays'=>$pays,
    'ville'=>$ville,
    'createur'=>$createur
    ));
    $req->closeCursor();
  }

  //-------------------------------------------------------------------------------------------------------------
  //Fonction pour ajouter une blacklist dans notre BDD
  function add_admin_blacklist($nom,$adresse,$pays,$ville,$createur)
  {
    //Execution de script
    exec('sudo /var/www/scripts/add_blacklist.sh '.$adresse);

    global $bdd;

    //REQUETE SUR LA BASE DE DONNEES
    $req = $bdd->prepare("INSERT INTO `blacklists` (`nom_blacklist`,`adresse_blacklist`,`pays_blacklist`,`ville_blacklist`,`id_createur`,`affichage_blacklist`) values (:nom,:adresse,:pays,:ville,:createur,2);");
    $req->execute(array(
    'nom'=>$nom,
    'adresse'=>$adresse,
    'pays'=>$pays,
    'ville'=>$ville,
    'createur'=>$createur
    ));
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------


  //-------------------------------------------------------------------------------------------------------------
  //Fonction pour modifier un domaine dans notre BDD
  function update_domain($nom,$adresse,$pays,$ville,$domaine)
  {
    global $bdd;
    $req = $bdd->query("UPDATE domains SET nom_domain='$nom', adresse_ip='$adresse', pays_domain='$pays', ville_domain='$ville' WHERE id_domain='$domaine'");
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------


  //-------------------------------------------------------------------------------------------------------------
  //Fonction pour modifier une blacklist dans notre BDD
  function update_blacklist($nom,$adresse,$pays,$ville,$domaine)
  {
    global $bdd;
    $req = $bdd->query("UPDATE blacklists SET nom_blacklist='$nom', adresse_blacklist='$adresse', pays_blacklist='$pays', ville_blacklist='$ville' WHERE id_blacklist='$domaine'");
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------


  //-------------------------------------------------------------------------------------------------------------
  //Fonction pour modifier une whitelist dans notre BDD
  function update_whitelist($nom,$adresse,$pays,$ville,$domaine)
  {
    global $bdd;
    $req = $bdd->query("UPDATE whitelists SET nom_whitelist='$nom', adresse_whitelist='$adresse', pays_whitelist='$pays', ville_whitelist='$ville' WHERE id_whitelist='$domaine'");
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Fonction pour supprimer un utilisateur de notre BDD
  function del_user($login)
  {
    global $bdd;
    $req = $bdd->query("DELETE FROM users WHERE id_user = '$login'");
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Fonction pour supprimer un domaine de notre BDD
  function del_domain($domain)
  {
    //Execution de script
    //exec('/var/www/scripts/del_domain_relay.sh $domain');

    global $bdd;
    $req = $bdd->query("DELETE FROM domains WHERE id_domain = '$domain'");
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  // Fonction delete user admin
  function del_user_domain($id_user)
  {
    //Execution de script
    //exec('/var/www/scripts/del_domain_relay.sh $domain');

  	global $bdd;
  	$req = $bdd->query("DELETE FROM domains WHERE id_createur = '$id_user'");
  	$req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Fonction pour supprimer une blacklist de notre BDD
  function del_blacklist($blacklist)
  {
    //Execution de script
    exec('sudo /var/www/scripts/rm_blacklist.sh '.$blacklist);

    global $bdd;
    $req = $bdd->query("DELETE FROM blacklists WHERE id_blacklist = '$blacklist'");
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Fonction delete user blacklist
  function del_user_blacklist($id_user)
  {
    //Execution de script
    exec('sudo /var/www/scripts/rm_blacklist.sh '.$blacklist);

  	global $bdd;
  	$req = $bdd->query("DELETE FROM blacklists WHERE id_createur = '$id_user'");
  	$req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Fonction pour supprimer une whitelist de notre BDD
  function del_whitelist($whitelist)
  {
    //Execution de script
    exec('sudo /var/www/scripts/rm_whitelist.sh '.$whitelist);

    global $bdd;
    $req = $bdd->query("DELETE FROM whitelists WHERE id_whitelist = '$whitelist'");
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Fonction delete user whitelist
  function del_user_whitelist($id_user)
  {
    //Execution de script
    exec('sudo /var/www/scripts/rm_whitelist.sh '.$whitelist);

  	global $bdd;
  	$req = $bdd->query("DELETE FROM whitelists WHERE id_createur = '$id_user'");
  	$req->closeCursor();
  }

  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Mis à jour des utilisateurs
  function update_users($login,$nom,$prenom,$email,$entreprise,$poste,$adresse,$ville,$pays,$code_postal,$a_propos)
  {
    global $bdd;
    $req = $bdd->query("UPDATE users SET nom='$nom', prenom='$prenom', mail='$email', entreprise='$entreprise', poste='$poste', adresse='$adresse', ville='$ville', pays='$pays', code_postal='$code_postal', a_propos='$a_propos' WHERE login='$login'");
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //--------------------------------------------------------------------------------------------------------------
  //Fonction pour la deconnecttion
  function deconnexion()
  {
    session_destroy();
    header('Location: ?index=index');
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Fonction qui compte les notifications admin
  function count_notif_admin()
  {
    global $bdd;

       //REQUETE SUR LA BASE DE DONNEES
       $connection = 'SELECT COUNT(*) FROM notifications WHERE id_destinataire = 0 and affichage = 1';

       try {
           $requete = $bdd->query($connection);
           while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {

                    $testLog = $datas;
                    break;

           }
       } catch (PDOException $error) {
           echo "<script language=\"javascript\">";
           echo "alert('ERREUR DE CONNECTION A LA BASE DE DONNEES')";
           echo "</script>";
       }

       return $testLog;

    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Fonction qui compte les notifications admin
  function count_notif_users($id_user)
  {
    global $bdd;

       //REQUETE SUR LA BASE DE DONNEES
       $connection = "SELECT COUNT(*) FROM notifications WHERE id_expediteur = '$id_user' and affichage = 2";

       try {
           $requete = $bdd->query($connection);
           while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {

                    $testLog = $datas;
                    break;
           }
       } catch (PDOException $error) {
           echo "<script language=\"javascript\">";
           echo "alert('ERREUR DE CONNECTION A LA BASE DE DONNEES')";
           echo "</script>";
       }

       return $testLog;

    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //--------------------------------------------------------------------------------------------------------------
  //Fonction ajouter notification création de domaine
  function add_notification($type, $contenu, $expediteur, $destinataire, $domaine, $affichage)
  {
    global $bdd;

    //REQUETE SUR LA BASE DE DONNEES
    $req = $bdd->prepare("INSERT INTO `notifications` (`type`,`contenu_notif`,`id_expediteur`,`id_destinataire`,`adresse_domaine`,`affichage`) values (:type,:contenu,:expediteur,:destinataire,:domaine,:affichage);");
    $req->execute(array(
    'type'=>$type,
    'contenu'=>$contenu,
    'expediteur'=>$expediteur,
    'destinataire'=>$destinataire,
    'domaine'=>$domaine,
    'affichage'=>$affichage
    ));
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //View Notifications
  function view_notif($notification)
  {
    global $bdd;
    $req = $bdd->query("UPDATE notifications SET affichage='3' WHERE id_notif_admin='$notification'");
    $req->closeCursor();
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Accepter les domaines
  function accept_domain($notification)
  {
    select_notif($notification);

    $reponse = "accepté";
    $domaine = $_SESSION['adresse_domaine'];

    if ($_SESSION['type'] == "Ajout de Domaine") {

      global $bdd;
      $req = $bdd->prepare("SELECT * FROM domains WHERE adresse_ip = '$domaine'");
      $req->execute(array("notification"=>$notification));
      while($results = $req->fetch()){
        $nom_domain = $results["nom_domain"];
        $adresse_ip = $results["adresse_ip"];
      }
      $req->closeCursor();

      //Execution de script
      exec('sudo /usr/bin/perl /var/www/scripts/add_domain_relay.pl '.$nom_domain.' '.$adresse_ip);

      global $bdd;
      $req = $bdd->query("UPDATE notifications SET contenu_notif='Votre demande d''ajout de domaine a été acceptée par l''administrateur',affichage='2' WHERE id_notif_admin='$notification'");
      $req = $bdd->query("UPDATE domains SET affichage_domain='2' WHERE adresse_ip='$domaine'");
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT id_expediteur FROM notifications WHERE notifications.id_notif_admin = :notification");
      $req->execute(array("notification"=>$notification));
      while($results = $req->fetch()){
        $id_expediteur = $results["id_expediteur"];
      }
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT mail FROM users WHERE users.id_user = :id_expediteur");
      $req->execute(array("id_expediteur"=>$id_expediteur));
      while($results = $req->fetch()){
        $adresse = $results["mail"];
      }
      $req->closeCursor();

      $nom = "domaine";
      send_mail($adresse, $reponse, $nom);

    } elseif ($_SESSION['type'] == "Ajout de Whitelist") {

      //Execution de script
      exec('sudo /var/www/scripts/add_whitelist.sh '.$domaine); 

      global $bdd;
      $req = $bdd->query("UPDATE notifications SET contenu_notif='Votre demande d''ajout de whitelist a été acceptée par l''administrateur',affichage='2' WHERE id_notif_admin='$notification'");
      $req = $bdd->query("UPDATE whitelists SET affichage_whitelist='2' WHERE adresse_whitelist='$domaine'");
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT id_expediteur FROM notifications WHERE notifications.id_notif_admin = :notification");
      $req->execute(array("notification"=>$notification));
      while($results = $req->fetch()){
        $id_expediteur = $results["id_expediteur"];
      }
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT mail FROM users WHERE users.id_user = :id_expediteur");
      $req->execute(array("id_expediteur"=>$id_expediteur));
      while($results = $req->fetch()){
        $adresse = $results["mail"];
      }
      $req->closeCursor();

      $nom = "whitelist";
      send_mail($adresse, $reponse, $nom);

    } elseif ($_SESSION['type'] == "Ajout de Blacklist") {

      //Execution de script
      exec('sudo /var/www/scripts/add_blacklist.sh '.$domaine);

      global $bdd;
      $req = $bdd->query("UPDATE notifications SET contenu_notif='Votre demande d''ajout de Blacklist a été acceptée par l''administrateur',affichage='2' WHERE id_notif_admin='$notification'");
      $req = $bdd->query("UPDATE blacklists SET affichage_blacklist='2' WHERE adresse_blacklist='$domaine'");
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT id_expediteur FROM notifications WHERE notifications.id_notif_admin = :notification");
      $req->execute(array("notification"=>$notification));
      while($results = $req->fetch()){
        $id_expediteur = $results["id_expediteur"];
      }
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT mail FROM users WHERE users.id_user = :id_expediteur");
      $req->execute(array("id_expediteur"=>$id_expediteur));
      while($results = $req->fetch()){
        $adresse = $results["mail"];
      }
      $req->closeCursor();

      $nom = "blacklist";
      send_mail($adresse, $reponse, $nom);

    } else {

      global $bdd;
      $req = $bdd->query("UPDATE notifications SET contenu_notif='Votre demande a été acceptée par l''administrateur',affichage='2' WHERE id_notif_admin='$notification'");
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT id_expediteur FROM notifications WHERE notifications.id_notif_admin = :notification");
      $req->execute(array("notification"=>$notification));
      while($results = $req->fetch()){
        $id_expediteur = $results["id_expediteur"];
      }
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT mail FROM users WHERE users.id_user = :id_expediteur");
      $req->execute(array("id_expediteur"=>$id_expediteur));
      while($results = $req->fetch()){
        $adresse = $results["mail"];
      }
      $req->closeCursor();

      $nom = " ";
      send_mail($adresse, $reponse, $nom);

    }
  }
  //-------------------------------------------------------------------------------------------------------------

  //-------------------------------------------------------------------------------------------------------------
  //Refuser les domaines
  function refuse_domain($notification)
  {
    select_notif($notification);
    
    $reponse = "réfusé";
    $domaine = $_SESSION['adresse_domaine'];

    if ($_SESSION['type'] == "Ajout de Domaine") {
      
      global $bdd;
      $req = $bdd->query("UPDATE notifications SET contenu_notif='Votre demande d''ajout de domaine a été réfusée par l''administrateur',affichage='2' WHERE id_notif_admin='$notification'");
      $req = $bdd->query("UPDATE domains SET affichage_domain='3' WHERE adresse_ip='$domaine'");
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT id_expediteur FROM notifications WHERE notifications.id_notif_admin = :notification");
      $req->execute(array("notification"=>$notification));
      while($results = $req->fetch()){
        $id_expediteur = $results["id_expediteur"];
      }
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT mail FROM users WHERE users.id_user = :id_expediteur");
      $req->execute(array("id_expediteur"=>$id_expediteur));
      while($results = $req->fetch()){
        $adresse = $results["mail"];
      }
      $req->closeCursor();

      $nom = "domaine";
      send_mail($adresse, $reponse, $nom);
    
    } elseif ($_SESSION['type'] == "Ajout de Whitelist") {
      
      global $bdd;
      $req = $bdd->query("UPDATE notifications SET contenu_notif='Votre demande d''ajout de whitelist a été réfusée par l''administrateur',affichage='2' WHERE id_notif_admin='$notification'");
      $req = $bdd->query("UPDATE whitelists SET affichage_whitelist='3' WHERE adresse_whitelist='$domaine'");
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT id_expediteur FROM notifications WHERE notifications.id_notif_admin = :notification");
      $req->execute(array("notification"=>$notification));
      while($results = $req->fetch()){
        $id_expediteur = $results["id_expediteur"];
      }
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT mail FROM users WHERE users.id_user = :id_expediteur");
      $req->execute(array("id_expediteur"=>$id_expediteur));
      while($results = $req->fetch()){
        $adresse = $results["mail"];
      }
      $req->closeCursor();

      $nom = "whitelist";
      send_mail($adresse, $reponse, $nom);

    } elseif ($_SESSION['type'] == "Ajout de Blacklist") {

      global $bdd;
      $req = $bdd->query("UPDATE notifications SET contenu_notif='Votre demande d''ajout de Blacklist a été réfusée par l''administrateur',affichage='2' WHERE id_notif_admin='$notification'");
      $req = $bdd->query("UPDATE blacklists SET affichage_blacklist='3' WHERE adresse_blacklist='$domaine'");
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT id_expediteur FROM notifications WHERE notifications.id_notif_admin = :notification");
      $req->execute(array("notification"=>$notification));
      while($results = $req->fetch()){
        $id_expediteur = $results["id_expediteur"];
      }
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT mail FROM users WHERE users.id_user = :id_expediteur");
      $req->execute(array("id_expediteur"=>$id_expediteur));
      while($results = $req->fetch()){
        $adresse = $results["mail"];
      }
      $req->closeCursor();

      $nom = "blacklist";
      send_mail($adresse, $reponse, $nom);

    } else {

      global $bdd;
      $req = $bdd->query("UPDATE notifications SET contenu_notif='Votre demande a été réfusée par l''administrateur',affichage='3' WHERE id_notif_admin='$notification'");
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT id_expediteur FROM notifications WHERE notifications.id_notif_admin = :notification");
      $req->execute(array("notification"=>$notification));
      while($results = $req->fetch()){
        $id_expediteur = $results["id_expediteur"];
      }
      $req->closeCursor();

      global $bdd;
      $req = $bdd->prepare("SELECT mail FROM users WHERE users.id_user = :id_expediteur");
      $req->execute(array("id_expediteur"=>$id_expediteur));
      while($results = $req->fetch()){
        $adresse = $results["mail"];
      }
      $req->closeCursor();

      $nom = " ";
      send_mail($adresse, $reponse, $nom);

    }
  }

  //-------------------------------------------------------------------------------------------------------------
  //Envoyer des messages
  function send_message()
  {
        $to = "mougnin@intechinfo.fr,sangare@intechinfo.fr,ilangovane@intechinfo.fr";

        $email = $_POST['email'];

        $subject = 'Un utilisateur de SYM souhaite vous contacter';
        $subject = mb_encode_mimeheader($subject,"UTF-8");

        $headers = "From: noreply@sym.itinet.fr\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $message = file_get_contents('./asset/includes/mail_home.php', true);
        $message = utf8_decode($message);
        $message = str_replace ( '{mail_user}', $email, $message) ;

        mail($to, $subject, $message, $headers);
  }
  //-------------------------------------------------------------------------------------------------------------


  //-------------------------------------------------------------------------------------------------------------
  //Envoyer des messages aux utilisateurs
  function send_mail($adresse, $reponse, $nom)
  {
        $to = "$adresse";

        $subject = 'Réponse à votre demande de '.$nom;
        $subject = mb_encode_mimeheader($subject,"UTF-8");

        $headers = "From: noreply@sym.itinet.fr\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $message = file_get_contents('./asset/includes/mail.php', true);
        $message = str_replace ( '{reponse}', $reponse, $message) ;
        $message = str_replace ( '{nom}', $nom, $message) ;
        $message = utf8_decode($message);

        mail($to, $subject, $message, $headers);
  }
  //-------------------------------------------------------------------------------------------------------------
?>