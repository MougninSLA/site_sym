<!DOCTYPE html>
<html>
  <body>        
                <form action="<?php echo INDEX ?>?index=edit_domain" method="POST">
                <table width="300">
                  <tr>
                    <td>Nom de domaine</td>
                    <td><input type="textbox" value="<?php echo $select_domain['nom_domain']; ?>" name="nom_domaine"></td>
                  </tr>
                  <tr>
                    <td>Adresse IP</td>
                    <td><input type="textbox" value="<?php echo $select_domain['adresse_ip']; ?>" name="ip"></td>
                  </tr>
                  <tr>
                    <td>Pays</td>
                    <td><input type="textbox" value="<?php echo $select_domain['pays_domain']; ?>" name="pays"></td>
				  </tr>                
				  <tr>
                    <td>Ville</td>
                    <td><input type="textbox" value="<?php echo $select_domain['ville_domain']; ?>" name="ville"></td>
				  </tr>                <tr>
                    <td>Créateur</td>
                    <td><input type="textbox" value="<?php echo $select_domain['nom']; ?>" name="nom" disabled></td>
				  </tr>
                </table>
                <button type="submit" name="modifier" value="<?php echo $select_domain['id_domain']; ?>" class="btn btn-primary">Modifier</button>
			</form>	
			  <form action="<?php echo INDEX ?>?index=view_admin_domaines" method="POST">
				<button type="submit" name="fermer" class="btn btn-default">Fermer</button>
			</form>
		
</body>
</html>