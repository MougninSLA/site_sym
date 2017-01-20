<!DOCTYPE html>
<!--
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++
    AUTHOR : Serge Mougnin
    PROJECT :SYM
    VERSION : 1.0
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++
-->
<html>
<head>

	<title>Secure Your Mail</title>
	<?php include "./asset/includes/home_css.php" ?>

</head>
<body >
  <div class="preloader">
      <div class="loader theme_background_color">
        <span>
        </span>
      </div>
  </div>

  <div class="wrapper">
    <nav  class=" nim-menu navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index.php"><img width="15%" src="./asset/images/logo_bouclier(1).png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a target="_blank" href="#home" class="page-scroll">Accueil</a></li>
            <li><a target="_blank" href="#one" class="page-scroll">Nos Services</a></li>
            <li><a target="_blank" href="#two" class="page-scroll">La Team</a></li>
            <li><a target="_blank" href="#three" class="page-scroll">Statistiques de SYM</a></li>
            <li><a target="_blank" href="#four" class="page-scroll">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <section class="main-heading" id="home">
       <div class="overlay">
           <div class="container">
               <div class="row">
                   <div class="main-heading-content col-md-12 col-sm-12 text-center">
                   		<br />
                   		<br />
                   		<br />
	        			<h1 class="main-heading-title">We are<span class="main-element themecolor" data-elements="Mail Security,Active Wrestlers,Antispam,SYM"></span></h1>
	        			<br />
	        			<p class="main-heading-text">
	        				Secure Your Mail (SYM) est un service de sécurisation de Mails.
	        			</p>
	        			<div class="btn-bar">
	        				<a target="_blank" href="#mod_connexion" data-toggle="modal" class="btn btn-custom theme_background_color">Connexion</a>
	          				<a target="_blank" href="#mod_inscription" data-toggle="modal" class="btn btn-custom-outline">Inscription</a>
	        			</div>
	      			</div>
               </div>
           </div>
       </div>  
    </section>

    <section class="services white-background black" id="one">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
              <h3 class="title">Nos <span class="themecolor">Services</span></h3>
            <p class="a-slog">S'inscrire sur notre solution, c'est bénéficier immédiatement de </p>
          </div> <!-- /col -->
        </div> <!-- /row -->
        <div class="gap"></div>

        <div class="row">
          <div class="col-sm-4">
            <div class="nim-service margin-bottom">
              <i class="fa fa-check"></i>
              <div class="nim-service-detail">
                <h4>Antispam</h4>
                <p>Grâce à nos logiciels de détection de spams que nous avons implémenté, nous vous garantissons la tranquilité vis à vis des spams.</p>
              </div> <!-- /nim-service-detail -->
            </div> <!-- /nim-service margin-bottom -->
          </div> <!-- /col -->

          <div class="col-sm-4">
            <div class="nim-service margin-bottom">
              <i class="fa fa-shield"></i>
              <div class="nim-service-detail">
                <h4>Antivirus</h4>
                <p>Finis les messages infectés ! Grâce à nos antivirus de haute précision, nous vous assurons de filtrer tous vos mails avant que vous les receviez.</p>
              </div> <!-- /nim-service-detail -->
            </div> <!-- /nim-service margin-bottom -->
          </div> <!-- /col -->

          <div class="col-sm-4">
            <div class="nim-service margin-bottom">
              <i class="fa fa-leaf"></i>
              <div class="nim-service-detail">
                <h4>La tranquilité</h4>
                <p>Nous vous garantissons la tranquilité grâce à une technologie que nous avons implémenté et qui va faire mal aux spammeurs : Le tarpitting.</p>
              </div> <!-- /nim-service-detail -->
            </div> <!-- /nim-service margin-bottom -->
          </div> <!-- /col -->
        </div> <!-- end row -->

        <div class="row">
          <div class="col-sm-4">
            <div class="nim-service margin-bottom">
              <i class="fa fa-truck"></i>
              <div class="nim-service-detail">
                <h4>Relais</h4>
                <p>Nous relayons tous vos mails afin qu'ils puissent passer dans tous nos différents filtres. Ainsi, vous êtes sûrs qu'un mail reçu est un mail de confiance.</p>
              </div> <!-- /nim-service-detail -->
            </div> <!-- /nim-service margin-bottom -->
          </div> <!-- /col -->       

          <div class="col-sm-4">
            <div class="nim-service margin-bottom">
              <i class="fa fa-thumbs-up"></i>
              <div class="nim-service-detail">
                <h4>Whitelist</h4>
                <p>Vous voulez continuer de recevoir les mails d'un domaine spécifique ? Ajouter le à la whitelist grâce à la gestion univrselle des sites de confiance</p>
              </div> <!-- /nim-service-detail -->
            </div> <!-- /nim-service margin-bottom -->
          </div> <!-- /col -->

          <div class="col-sm-4">
            <div class="nim-service margin-bottom">
              <i class="fa fa-thumbs-down"></i>
              <div class="nim-service-detail">
                <h4>Blacklist</h4>
                <p>Vous ne faites pas confiance en un site ? G^râce à la gestion univrselle des sites qui font du spam. Vous etes en sécurité.</p>
              </div> <!-- /nim-service-detail -->
            </div> <!-- /nim-service margin-bottom -->
          </div> <!-- /col -->         
        </div> <!-- end row -->

        <div class="row">
          <div class="col-sm-4">
            <div class="nim-service margin-bottom">
              <i class="fa fa-pie-chart"></i>
              <div class="nim-service-detail">
                <h4>Statistiques des sites spammeurs</h4>
                <p>Grâce à un programme (Crawler) developpé en Python3, nous vous fournirons en temps et en heures les statistiques des sites à éviter.</p>
              </div> <!-- /nim-service-detail -->
            </div> <!-- /nim-service margin-bottom -->
          </div> <!-- /col -->

          <div class="col-sm-4">
            <div class="nim-service margin-bottom">
              <i class="fa fa-envelope"></i>
              <div class="nim-service-detail">
                <h4>Statistiques des mails recus</h4>
                <p>Vous aurez en temps et en heure, les statistiques de tous les mails que vous aurez récu.</p>
              </div> <!-- /nim-service-detail -->
            </div> <!-- /nim-service margin-bottom -->
          </div> <!-- /col -->

          <div class="col-sm-4">
            <div class="nim-service margin-bottom">
              <i class="fa fa-trash"></i>
              <div class="nim-service-detail">
                <h4>Statistiques des spams recus</h4>
                <p>Vous aurez en temps et en heure, les statistiques de tous les mails que vous aurez récu et pouvoir bloques ou non les domaines qui les envoient.</p>
              </div> <!-- /nim-service-detail -->
            </div> <!-- /nim-service margin-bottom -->
          </div> <!-- /col -->                      
        </div> <!-- end row -->

      </div>  <!-- container -->
    </section>

    <section class="our-team white-background black" id="two">
        <div class="container">
         <div class="row text-center">
            <div class="col-md-12">
                <h3 class="title">SYM <span class="themecolor">Team</span></h3>
              <p class="a-slog">Secure Your Mail a été developpé par </p>
            </div> 
          </div>
            <div class="row text-center">
            <div class="col-sm-3">
              <img src="./asset/images/team-3.png" alt="team-member" class="img-responsive">
              <h4>Steephenraaj Ilangovane</h4>
              <h5>Scrum Master & developpeur</h5>
              <p>Hey, Je suis Steephenraaj. Scrum Master de cette belle équipe.</p>
              <ul class="list-inline top20">
                <li><a target="_blank" href="https://www.facebook.com/steephen.ilangovane?fref=ts"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div> <!-- team-member -->

            <div class="col-sm-3">
              <img src="./asset/images/team-1.png" alt="team-member" class="img-responsive">
              <h4>Serge Mougnin</h4>
              <h5>Web Designer et developpeur</h5>
              <p>Salut, je suis Serge ! Aidez -moi ! Il n'y a pas un problème de couleur ?</p>
              <ul class="list-inline top20">
                <li><a target="_blank" href="https://www.facebook.com/a.mougnin"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div> <!-- team-member -->

            <div class="col-sm-3">
              <img src="./asset/images/team-2.png" alt="team-member" class="img-responsive">
              <h4>Hassane Sangare</h4>
              <h5>Equipier & Developpeur</h5>
              <p>Yo les gens ! Ici Hassane. Je developpe très bien en PHP5.</p>
              <ul class="list-inline top20">
                <li><a target="_blank" href="https://www.facebook.com/shassaneibrahim?fref=ts"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div> <!-- team-member -->

            <div class="col-sm-3">
              <img src="./asset/images/team-4.png" alt="team-member" class="img-responsive">
              <h4>Adjevi Koudossou</h4>
              <h5>Enseignant Référant</h5>
              <p>Hey, Ce site n'est n'est pas assez sexy à mon goût.</p>
              <ul class="list-inline top20">
                <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div> <!-- team-member -->
          </div> <!-- end row -->
        </div>
    
        <div class="container">
          <div class="row">
            <div class="col-md-12">
            	<center>
            		<h3 class="title">Nos projets <span class="themecolor">Passés</span></h3>
              	<p class="a-slog">Une petite liste des projets que nous avons developpés ensemble</p>
            	</center>
            </div> 
          </div>
            
            <div class="gap"></div>

          <div class="row">
            <div class="col-sm-6 port-item margin-bottom">
              <div class="item-img-wrap">
                <img src="./asset/images/work-1.jpg" class="img-responsive" alt="workimg">
                <div class="item-img-overlay">
                  <a target="_blank" href="./asset/images/work-1.jpg" class="show-image">
                    <span></span>
                  </a>
                </div>
              </div>
              <div class="work-desc">
                <h3><a target="_blank" href="https://www.intechinfo.fr/projects/beep/">Beep</a></h3>
                <span>IPBX ATTA basé sur la VOIP. Solution developpée avec Asterisk / SIP / Dahdi, Shell, Perl, SSH, SNMP, RRDTOOL</span>
              </div>
            </div> <!-- /portfolio-item -->

            <div class="col-sm-6 port-item margin-bottom">
              <div class="item-img-wrap">
                <img src="./asset/images/work-2.jpg" class="img-responsive" alt="workimg">
                <div class="item-img-overlay">
                  <a target="_blank" href="./asset/images/work-2.jpg" width="800" class="show-image">
                    <span></span>
                  </a>
                </div>
              </div>
              <div class="work-desc">
                <h3><a target="_blank" href="#">OpenWorld</a></h3>
                <span>Solution d'hébergement mutualisé. Proposant la création de blogs, de mails, d'antisapams et FQDN</span>
              </div>
            </div> <!-- /portfolio-item -->
        </div> <!-- /container -->
    </section>

    <section class="our-stats" id="three">
      <div class="container">
              <div class="row">
                  <div class="col-md-3 col-sm-6">
                      <div class="our-stats-box text-center">
                          <div class="our-stat-icon">
                              <span class="fa fa-ge"></span>
                          </div>
                          <div class="our-stat-info">
                              <span class="stats" data-from="4763904" data-to="4764504" data-speed="5000"
                                    data-refresh-interval="50"></span>

                              <h5>Inscrits</h5>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="our-stats-box text-center">
                          <div class="our-stat-icon">
                              <span class="fa fa-git-square"></span>
                          </div>
                          <div class="our-stat-info">
                              <span class="stats" data-from="1" data-to="504" data-speed="5000"
                                    data-refresh-interval="50"></span>

                              <h5>Ajouts et téléchargements</h5>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="our-stats-box text-center">
                          <div class="our-stat-icon">
                              <span class="fa fa-globe"></span>
                          </div>
                          <div class="our-stat-info">
                              <span class="stats" data-from="1" data-to="150" data-speed="5000"
                                    data-refresh-interval="50"></span>

                              <h5>Langues détectées</h5>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="our-stats-box text-center">
                          <div class="our-stat-icon">
                              <span class="fa fa-gears"></span>
                          </div>
                          <div class="our-stat-info">
                              <span class="stats" data-from="3500" data-to="4700" data-speed="5000"
                                    data-refresh-interval="50"></span>

                              <h5>Clients heureux</h5>
                          </div>
                      </div>
                  </div>
              </div>
      </div>
    </section>

    <section class="client-testimonial text-center white" id="six">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title">Avis des <span class="themecolor">Clients</span></h3>            
          </div> 
          
          <div class="col-md-8 col-md-offset-2 grey">
              <div id="testimonial" class="owl-carousel owl-theme">
                  <div class="item">
                      <h5>Avant, j'étais la cible des pirates ... Depuis que j'utilise cet outil, je ne me soucis même plus pour ma sécurité.</h5>
                      <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                  </div>

                  <div class="item">
                      <h5>J'ai fais des économies grâce à cet outil. Plus besoin d'ingénieurs en sécurité.</h5>
                      <p><strong>Jacques Bonsergent</strong>, Directeur 0DFinders.</p>
                  </div>

                  <div class="item">
                      <h5>This tool is a good one.</h5>
                      <p><strong>Richard Lenoir</strong>, Administrator Timmxware</p>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sub-form text-center" id="four">
      <div class="container">
        <div class="col-md-12">
            <h3 class="title">Des préoccupations ? <span class="themecolor"> Contactez nous</span></h3>
                <p class="lead">Envoyez nous votre adresse mail et nous nous engageons de vous recontacter</p>
        </div> 
        <div class="row">
            <div class="col-md-3 col-sm-3"></div>
          <div class="col-md-6 center-block col-sm-6 ">
            <form method="POST">
              <div class="input-group" id="mc-form">
                <input type="email" class="form-control" placeholder="Adresse Mail" name="email" required id="mc-email">
                <span class="input-group-btn">
                <button type="submit" name="envoyer_message" class="btn btn-default">Envoyer <i class="fa fa-envelope"></i> </button>
                </span> </div>
              <label for="mc-email" id="mc-notification"></label>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="site-footer section-spacing text-center ">
        
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <p class="footer-links"><a target="_blank" href="#">Conditions d'utilisation</a></p>
          </div>
          <div class="col-md-4"> <small>&copy; 2016 SYM. Tous droits réservés.</small></div>
          <div class="col-md-4"> 
            <!--social-->
            
            <ul class="social">
              <li><a target="_blank" href="https://twitter.com/" target="_blank"><i class="fa fa-linkedin "></i></a></li>
              <li><a target="_blank" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a target="_blank" href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
            
            <!--social end--> 
            
          </div>
        </div>
      </div>
    </footer>
  </div>

  <?php include "./asset/includes/home_js.php" ?>

  <?php include ('view_modals.php') ?>
  
</body>


</html>