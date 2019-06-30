
  <?php
    include 'layout/head.php';
    include 'layout/navbar.php';
  ?>


  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Inserisci i dati di una nuova stanza</h2>
        <form class="" action="create_manager.php" method="post">

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Numero stanza</span>
            <input type="text" class="form-control" placeholder="Numero stanza"
            value="" name="room_number">
          </div><!-- /input-group -->
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Piano</span>
            <input type="text" class="form-control" placeholder="Piano"
            value="" name="floor">
          </div><!-- /input-group -->
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Numero letti</span>
            <input type="text" class="form-control" placeholder="Numero letti"
            value="" name="beds">
          </div><!-- /input-group -->
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Crea</button>
          </span>
        </form>
      </div>
    </div>
  </div> <!-- fine container -->








    <!-- foglio java -->
    <script src="public/js/app.js"></script>

  <?php
    include 'layout/footer.php';
  ?>
