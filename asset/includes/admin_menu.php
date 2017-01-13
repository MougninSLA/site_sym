<?php

  if(isset($_POST['accepter'])) {

    #-----------------------------------------------------------------------------------------#
    $notification=$_POST['notification'];
    accept_domain($notification);
    #-----------------------------------------------------------------------------------------#
  }
  
  if(isset($_POST['refuser'])) {

    #-----------------------------------------------------------------------------------------#
    $notification=$_POST['notification'];
    refuse_domain($notification);
    #-----------------------------------------------------------------------------------------#

  }

?>

<!-- start: Header -->
<nav class="navbar navbar-default header navbar-fixed-top">
  <div class="col-md-12 nav-wrapper">
    <div class="navbar-header" style="width:100%;">
      <div class="opener-left-menu is-open">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>
        <a href="<?php echo '?index=index'; ?>" class="navbar-brand"> 
         <b>SYM</b>
        </a>

      <ul class="nav navbar-nav search-nav">
        <li>
           <div class="search">
            <span class="fa fa-search icon-search" style="font-size:23px;"></span>
            <div class="form-group form-animate-text">
              <input type="text" class="form-text" required>
              <span class="bar"></span>
              <label class="label-search"> Une question ? <b>Recherche</b> </label>
            </div>
          </div>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right user-nav">
        <li class="user-name"><span>Administrateur</span></li>
          <li class="dropdown avatar-dropdown">
           <img src="./asset/images/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
           <ul class="dropdown-menu user-dropdown">
             <li><a href="<?php echo '?index=view_admin_profil' ?>"><span class="fa fa-user"></span> Mon profil </a></li>
             <li role="separator" class="divider"></li>
             <li class="more">
              <ul>
                <li><a href="<?php echo '?index=deconnexion' ?>"><span class="fa fa-power-off "></span> Deconnexion</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="fa fa-comment-o fa-2x"></span>
            <style type="text/css">
              #moncercle{
                background:red;
                border-radius:50%;
                width:30px;
                height:30px;
                border:2px solid grey;
                text-align: center;
                position: relative; 
                top: -40px; 
                left: 10px;
              }
            </style>
            <div id="moncercle">
              <?php
                $notification=count_notif_admin();
                echo($notification['COUNT(*)']);
              ?>
            </div>
          </a>

          <ul class="dropdown-menu">
            <li class="divider"></li>
            <?php
              global $bdd;

              $x=0;

              //REQUETE SUR LA BASE DE DONNEES
              $connection = 'SELECT * FROM notifications WHERE id_destinataire = 0 and affichage = 1';

              try {
                $requete = $bdd->query($connection);
                while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {
                $x++;
            ?>
            <li>
              <a href="#">
                <center>
                  <?php
                    echo $datas['contenu_notif'];
                  ?>
                </center>
              </a>
            </li>

            <center>
              <li style="width: 80%; height: 35px;">
                  <form method="POST" style="float: left; width: 50%;">
                    <input type="hidden" name="notification" value="<?php echo $datas['id_notif_admin']; ?>">
                    <input type="submit" name="accepter" value="accepter" class="btn btn-succes" style="width: 80%;">
                  </form>
                  <form method="POST" style="float: right; width: 50%;">
                    <input type="hidden" name="notification" value="<?php echo $datas['id_notif_admin']; ?>">
                    <input type="submit" name="refuser" value="refuser" class="btn btn-danger" style="width: 80%;">
                  </form>
              </li>
            </center>

            <li class="divider"></li>
            <?php          
                  }
              } catch (PDOException $error) {
                  echo "<script language=\"javascript\">";
                  echo "alert('ERREUR DE CONNECTION A LA BASE DE DONNéE')";
                  echo "</script>";
              }
            ?>
            <li class="divider"></li>
            <li>
              <a tabindex="-1" href="#">
                <center>Montrer les autres notifications</center>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end: Header -->

<div class="container-fluid mimin-wrapper">

<!-- start:Left Menu -->
  <div id="left-menu">
    <div class="sub-left-menu scroll">
      <ul class="nav nav-list">
          <li><div class="left-bg"></div></li>
          <li class="time">
            <h1 class="animated fadeInLeft"><?php setlocale (LC_TIME, 'fr_FR.utf8','fra'); echo (strtoupper(strftime("%H:%M"))); ?></h1>
            <p class="animated fadeInRight"><?php setlocale (LC_TIME, 'fr_FR.utf8','fra'); echo (strtoupper(strftime("%A %d %B %Y"))); ?></p>
          </li>

          <ol class="ripple">
            <a href="<?php echo '?index=view_admin_index' ?>" class="ripple"><span class="fa-home fa"></span>
              Tableau de bord 
            </a>
          </ol>

          <ol class="ripple">
            <a href="<?php echo '?index=view_admin_users' ?>" class="ripple"><span class="fa-users fa"></span>
              Utilisateurs 
            </a>
          </ol>

          <ol class="ripple">
            <a href="<?php echo '?index=view_admin_domaines' ?>" class="ripple"><span class="fa-diamond fa"></span>
              Domaines 
            </a>
          </ol>

          <ol class="ripple">
            <a class="tree-toggle nav-header">
              <span class="fa-list fa">
              </span>
              Listes
              <span class="fa-angle-right fa right-arrow text-right">
              </span>
            </a>
            <ul class="nav nav-list tree">
              <ol><a href="<?php echo '?index=view_admin_whitelists' ?>">Whitelist</a></ol>
              <ol><a href="<?php echo '?index=view_admin_blacklists' ?>">Blacklist</a></ol>
            </ul>
          </ol>
          
        </ul>
      </div>
  </div>
<!-- end: Left Menu -->