<!DOCTYPE html>
<html>
  <body>        
                <form action="<?php echo INDEX ?>?index=edit_blacklist" method="POST">
                <table width="300">
                  <tr>
                    <td>Nom blacklist</td>
                    <td><input type="textbox" value="<?php echo $select_blacklist['nom_blacklist']; ?>" name="nom_blacklist"></td>
                  </tr>
                  <tr>
                    <td>Adresse IP</td>
                    <td><input type="textbox" value="<?php echo $select_blacklist['adresse_blacklist']; ?>" name="adresse_blacklist"></td>
                  </tr>
                  <tr>
                    <td>Pays</td>
                    <td><input type="textbox" value="<?php echo $select_blacklist['pays_blacklist']; ?>" name="pays_blacklist"></td>
				  </tr>                
				  <tr>
                    <td>Ville</td>
                    <td><input type="textbox" value="<?php echo $select_blacklist['ville_blacklist']; ?>" name="ville_blacklist"></td>
				  </tr>                <tr>
                    <td>Créateur</td>
                    <td><input type="textbox" value="<?php echo $select_blacklist['nom']; ?>" name="nom" disabled></td>
				  </tr>
                </table>
                <button type="submit" name="modifier" value="<?php echo $select_blacklist['id_blacklist']; ?>" class="btn btn-primary">Modifier</button>
			</form>	
			  <form action="<?php echo INDEX ?>?index=view_admin_blacklists" method="POST">
				<button type="submit" name="fermer" class="btn btn-default">Fermer</button>
			</form>
		
</body>
</html>