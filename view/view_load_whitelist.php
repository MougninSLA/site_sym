<form action="" method="POST">
  <div class="modal-body">
    <center>
      <table width="500">
        <tr>
          <th>
            <label>Le nom de la whitelist</label>
          </th>
          <th>
            <input type="textbox" name="nom" value="<?php echo $_SESSION['nom_whitelist_result']; ?>">
           </th>
        </tr>
        <tr>
          <th>
            <label>L'adresse de la whitelist</label>
          </th>
          <th>
            <input type="textbox" name="adresse" value="<?php echo $_SESSION['adresse_whitelist_result']; ?>">
           </th>
        </tr>
        <tr>
          <th>
            <label>Le pays de la whitelist</label>
          </th>
          <th>
            <input type="textbox" name="pays" value="<?php echo $_SESSION['pays_whitelist_result']; ?>">
           </th>
        </tr>
        <tr>
          <th>
            <label>La ville de la whitelist</label>
          </th>
          <th>
            <input type="textbox" name="ville" value="<?php echo $_SESSION['ville_whitelist_result']; ?>">
           </th>
        </tr>
      </table>
    </center>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.location.reload()">Fermer</button>
    <button type="submit" class="btn btn-primary" name="confirmer">Modifier</button>
  </div>
</form>