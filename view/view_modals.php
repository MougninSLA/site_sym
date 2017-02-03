<!----------------------------------------- Inscription ---------------------------------------------------->
<div class="modal fade" id="mod_inscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel"> Inscris toi et viens découvrir l'aventure SYM </h4></center>
      </div>
      <div class="modal-body">
        <center>
        <form action="" method="POST">
        <table width="500">
          <tr>
            <th>
            	<label>Votre nom</label>
            </th>
            <th>
              <input type="textbox" name="nom">
			       </th>
          </tr>
          <tr>
            <th>
              <label>Votre prénom</label>
            </th>
            <th>
              <input type="textbox" name="prenom">
             </th>
          </tr>
          <tr>
            <th>
              <label>Votre login</label>
            </th>
            <th>
              <input type="textbox" name="login">
             </th>
          </tr>
          <tr>
            <th>
              <label>Votre adresse mail</label>
            </th>
            <th>
              <input type="textbox" name="mail">
             </th>
          </tr>
          <tr>
            <th>
              <label>Le mot de passe</label>
            </th>
            <th>
              <input type="password" name="mdp">
             </th>
          </tr>
          <tr>
            <th>
              <label>Confirmer le mot de passe</label>
            </th>
            <th>
              <input type="password" name="mdp2">
             </th>
          </tr>
          <tr>
            <th colspan="2">
              <input type="checkbox" name="" required="required">&nbsp
              <label><h5>En cochant cette case, vous acceptez les conditions générales</h5></label>
            </th>
          </tr>
        </table>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary" name="confirmer">Enregistrer</button>
      </div>
	  </form>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------- Connexion ---------------------------------------------------->
<div class="modal fade" id="mod_connexion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel"> Déjà inscrit ? </h4></center>
      </div>
      <div class="modal-body">
        <center>
        <form action="" method="POST">
        <table width="500">
          <tr>
            <th>
              <label>Entrer le pseudo</label>
            </th>
            <th>
              <input type="textbox" name="pseudo">
             </th>
          </tr>
          <tr>
            <th>
              <label>Le mot de passe</label>
            </th>
            <th>
              <input type="password" name="password">
             </th>
          </tr>
          <tr>
          </tr>
          <tr>
            <th colspan="2">
              <label><h5>En vous connectant, vous acceptez les conditions générales de SYM</h5></label>
            </th>
          </tr>
        </table>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary" name="connexion">Se Connecter</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------- Ajout de domaine ---------------------------------------------------->
<div class="modal fade" id="add_domain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel"> Ajout de domaine à rélayer </h4></center>
      </div>
      <div class="modal-body">
        <center>
        <form action="" method="POST">
        <table width="500">
          <tr>
            <th>
              <label>Le nom de votre domaine</label>
            </th>
            <th>
              <input type="textbox" name="nom">
             </th>
          </tr>
          <tr>
            <th>
              <label>L'adresse IP du serveur</label>
            </th>
            <th>
              <input type="textbox" name="adresse">
             </th>
          </tr>
          <tr>
            <th>
              <label>Le pays où est hébergé votre domaine</label>
            </th>
            <th>
              <input type="textbox" name="pays">
             </th>
          </tr>
          <tr>
            <th>
              <label>La ville où est hébergée votre domaine</label>
            </th>
            <th>
              <input type="textbox" name="ville">
             </th>
          </tr>
        </table>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary" name="confirmer">Ajouter</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------- Ajout de blacklist ---------------------------------------------------->
<div class="modal fade" id="add_blacklist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel"> Ajout d'un domaine dans la blacklist </h4></center>
      </div>
      <div class="modal-body">
        <center>
        <form action="" method="POST">
        <table width="500">
          <tr>
            <th>
              <label>Le nom du domaine</label>
            </th>
            <th>
              <input type="textbox" name="nom">
             </th>
          </tr>
          <tr>
            <th>
              <label>L'adresse IP du domaine</label>
            </th>
            <th>
              <input type="textbox" name="adresse">
             </th>
          </tr>
          <tr>
            <th>
              <label>Le pays où est hébergé le domaine</label>
            </th>
            <th>
              <input type="textbox" name="pays">
             </th>
          </tr>
          <tr>
            <th>
              <label>La ville où est hébergée le domaine</label>
            </th>
            <th>
              <input type="textbox" name="ville">
             </th>
          </tr>
        </table>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary" name="confirmer">Ajouter</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------- Ajout de whitelist ---------------------------------------------------->
<div class="modal fade" id="add_whitelist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel"> Ajout d'un domaine dans la whitelist </h4></center>
      </div>
      <div class="modal-body">
        <center>
        <form action="" method="POST">
        <table width="500">
          <tr>
            <th>
              <label>Le nom du domaine</label>
            </th>
            <th>
              <input type="textbox" name="nom">
             </th>
          </tr>
          <tr>
            <th>
              <label>L'adresse ÏP du domaine</label>
            </th>
            <th>
              <input type="textbox" name="adresse">
             </th>
          </tr>
          <tr>
            <th>
              <label>Le pays où est hébergé le domaine</label>
            </th>
            <th>
              <input type="textbox" name="pays">
             </th>
          </tr>
          <tr>
            <th>
              <label>La ville où est hébergée le domaine</label>
            </th>
            <th>
              <input type="textbox" name="ville">
             </th>
          </tr>
        </table>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary" name="confirmer">Ajouter</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------- Modification de domaine ---------------------------------------------------->
<div class="modal fade" id="modif_domain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel"> Modification de domaine </h4></center>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!------------------------------------ Confirmation de suppression de domaine ---------------------------------------------->
<div class="modal fade" id="suppr_domain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel"> Confirmer la suppression du domaine </h4></center>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------- Modification de whiteliste ---------------------------------------------------->
<div class="modal fade" id="modif_whitelist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel"> Modification de la whitelist </h4></center>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!------------------------------------ Confirmation de suppression de whiteliste ---------------------------------------------->
<div class="modal fade" id="suppr_whitelist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel"> Confirmer la suppression de la whitelist </h4></center>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------- Modification de blackliste ---------------------------------------------------->
<div class="modal fade" id="modif_blacklist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel"> Modification de la blacklist </h4></center>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!------------------------------------ Confirmation de suppression de blackliste ---------------------------------------------->
<div class="modal fade" id="suppr_blacklist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel"> Confirmer la suppression de la blacklist </h4></center>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->