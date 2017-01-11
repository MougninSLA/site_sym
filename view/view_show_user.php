<!DOCTYPE html>
<html>
  <body>        
                <table width="300">
                  <tr>
                    <td><b>Nom</b></td>
                    <td><?php echo $select_show_user['nom']; ?></td>
                  </tr>                  
				  <tr>
                    <td><b>Prénom</b></td>
                    <td><?php echo $select_show_user['prenom']; ?></td>
                  </tr>                  
				  <tr>
                    <td><b>Login</b></td>
                    <td><?php echo $select_show_user['login']; ?></td>
                  </tr>                  
				  <tr>
                    <td><b>Email</b></td>
                    <td><?php echo $select_show_user['mail']; ?></td>
                  </tr>                  
				  <tr>
                    <td><b>Nom</b></td>
                    <td><?php echo $select_show_user['nom']; ?></td>
                  </tr>                  
				  <tr>
                    <td><b>Entreprise</b></td>
                    <td><?php echo $select_show_user['entreprise']; ?></td>
                  </tr>                  
				  <tr>
                    <td><b>Poste</b></td>
                    <td><?php echo $select_show_user['poste']; ?></td>
                  </tr>                  
				  <tr>
                    <td><b>Adresse</b></td>
                    <td><?php echo $select_show_user['adresse']; ?></td>
                  </tr>                  
				  <tr>
                    <td><b>Ville</b></td>
                    <td><?php echo $select_show_user['ville']; ?></td>
                  </tr>                  
				  <tr>
                    <td><b>Code Postal</b></td>
                    <td><?php echo $select_show_user['code_postal']; ?></td>
                  </tr>
				  <tr>
                    <td><b>Pays</b></td>
                    <td><?php echo $select_show_user['pays']; ?></td>
                  </tr>
				  <tr>
                    <td><b>A propos</b></td>
                    <td><?php echo $select_show_user['a_propos']; ?></td>
                  </tr>
                </table>
			  <form action="<?php echo INDEX ?>?index=view_admin_users" method="POST">
				<button type="submit" name="fermer" class="btn btn-primary">Fermer</button>
			</form>
		
</body>
</html>