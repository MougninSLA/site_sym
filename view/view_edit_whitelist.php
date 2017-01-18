<!DOCTYPE html>
<html>
  <body>        
                <form action="<?php echo INDEX ?>?index=edit_whitelist" method="POST">
                <table width="300">
                  <tr>
                    <td>Nom whitelist</td>
                    <td><input type="textbox" value="<?php echo $select_whitelist['nom_whitelist']; ?>" name="nom_whitelist"></td>
                  </tr>
                  <tr>
                    <td>Adresse IP</td>
                    <td><input type="textbox" value="<?php echo $select_whitelist['adresse_whitelist']; ?>" name="adresse_whitelist"></td>
                  </tr>
                  <tr>
                    <td>Pays</td>
                    <td><input type="textbox" value="<?php echo $select_whitelist['pays_whitelist']; ?>" name="pays_whitelist"></td>
				  </tr>                
				  <tr>
                    <td>Ville</td>
                    <td><input type="textbox" value="<?php echo $select_whitelist['ville_whitelist']; ?>" name="ville_whitelist"></td>
				  </tr>                <tr>
                    <td>Créateur</td>
                    <td><input type="textbox" value="<?php echo $select_whitelist['nom']; ?>" name="nom" disabled></td>
				  </tr>
                </table>
                <button type="submit" name="modifier" value="<?php echo $select_whitelist['id_whitelist']; ?>" class="btn btn-primary">Modifier</button>
			</form>	
			  <form action="<?php echo INDEX ?>?index=view_admin_whitelists" method="POST">
				<button type="submit" name="fermer" class="btn btn-default">Fermer</button>
			</form>
		
</body>
</html>