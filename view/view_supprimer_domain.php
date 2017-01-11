<center>
  <table width="500">
    <tr>
      <th>
        <center>
          <label>
            Confirmer la suppression du domaine <?php echo $_SESSION['nom_domain_result']; ?> ?
          </label>
        </center>
      </th>
    </tr>
  </table>
</center>

<form action="" method="POST">
  <div class="modal-footer">
    <center>
      <button type="button" class="btn btn-default" data-dismiss="modal">NON</button>
      <button type="submit" class="btn btn-primary" name="oui" value="oui">OUI</button>
    </center>
  </div>
</form>