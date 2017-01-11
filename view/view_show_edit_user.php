<!DOCTYPE html>
<html>
  <body>        
                <form action="<?php echo INDEX ?>?index=edit_user" method="POST">
                <table width="300">
                  <tr>
                    <td>Nom</td>
                    <td><input type="textbox" value="<?php echo $select_show_user['nom']; ?>" name="nom" required pattern="[a-zA-Z]+[A-Za-zéèç\0\s\-]{1,32}"></td>
                  </tr>                  
				  <tr>
                    <td>Prénom</td>
                    <td><input type="textbox" value="<?php echo $select_show_user['prenom']; ?>" name="prenom" required pattern="[a-zA-Z]+[A-Za-zéèç\0\s\-]{1,32}"></td>
                  </tr>                  
				  <tr>
                    <td>Login</td>
                    <td><input type="textbox" value="<?php echo $select_show_user['login']; ?>" name="login" required></td>
                  </tr>  
				  <tr>
                    <td>Mot de passe</td>
                    <td><input type="password" value="<?php echo $select_show_user['mdp']; ?>" name="mdp" id="password" class="password" required>
					<button class="unmask" type="button" title="Mask/Unmask password to check content">Unmask</button></td>
                  </tr>  				  
				  <tr>
                    <td>Email</td>
                    <td><input type="textbox" value="<?php echo $select_show_user['mail']; ?>" name="mail" required></td>
                  </tr>                                 
				  <tr>
                    <td>Entreprise</td>
                    <td><input type="textbox" value="<?php echo $select_show_user['entreprise']; ?>" name="entreprise" required></td>
                  </tr>                  
				  <tr>
                    <td>Poste</td>
                    <td><input type="textbox" value="<?php echo $select_show_user['poste']; ?>" name="poste" required></td>
                  </tr>                  
				  <tr>
                    <td>Adresse</td>
                    <td><input type="textbox" value="<?php echo $select_show_user['adresse']; ?>" name="adresse" required pattern="[0-9]+\s[a-z\s]{1,30}$"></td>
                  </tr>                  
				  <tr>
                    <td>Ville</td>
                    <td><input type="textbox" value="<?php echo $select_show_user['ville']; ?>" name="ville" required pattern="[a-zA-Zéè]+[a-zA-Z\s\-]{2,20}"></td>
                  </tr>                  
				  <tr>
                    <td>Pays</td>
                    <td><input type="textbox" value="<?php echo $select_show_user['pays']; ?>" name="pays" required></td>
                  </tr>                  
				  <tr>
                    <td>Code Postal</td>
                    <td><input type="textbox" value="<?php echo $select_show_user['code_postal']; ?>" name="code_postal" required pattern="[0-9]{5}"></td>
                  </tr>                  
				  <tr>
                    <td>A propos</td>
                    <td><input type="textbox" value="<?php echo $select_show_user['a_propos']; ?>" name="a_propos"></td>
                  </tr>				  
                </table>
                <button type="submit" name="modifier" value="<?php echo $select_show_user['id_user']; ?>" class="btn btn-primary">Modifier</button>
			</form>	
			  <form action="<?php echo INDEX ?>?index=view_admin_users" method="POST">
				<button type="submit" name="fermer" class="btn btn-default">Fermer</button>
			</form>

<script>
/* 
  Switch actions
*/
$('.unmask').on('click', function(){
  
  if($(this).prev('input').attr('type') == 'password')
    changeType($(this).prev('input'), 'text');
  
  else
    changeType($(this).prev('input'), 'password');
  
  return false;
});


function changeType(x, type) {
    if(x.prop('type') == type)
        return x; //That was easy.
    try {
        return x.prop('type', type); //Stupid IE security will not allow this
    } catch(e) {
        //Try re-creating the element (yep... this sucks)
        //jQuery has no html() method for the element, so we have to put into a div first
        var html = $("<div>").append(x.clone()).html();
        var regex = /type=(\")?([^\"\s]+)(\")?/; //matches type=text or type="text"
        //If no match, we add the type attribute to the end; otherwise, we replace
        var tmp = $(html.match(regex) == null ?
            html.replace(">", ' type="' + type + '">') :
            html.replace(regex, 'type="' + type + '"') );
        //Copy data from old element
        tmp.data('type', x.data('type') );
        var events = x.data('events');
        var cb = function(events) {
            return function() {
                //Bind all prior events
                for(i in events)
                {
                    var y = events[i];
                    for(j in y)
                        tmp.bind(i, y[j].handler);
                }
            }
        }(events);
        x.replaceWith(tmp);
        setTimeout(cb, 10); //Wait a bit to call function
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
		
</body>
</html>