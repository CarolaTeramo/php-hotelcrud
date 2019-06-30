
  <?php
    include 'layout/head.php';
    include 'layout/navbar.php';
  ?>


    <?php
      include 'db_config.php';
      include 'functions.php';
      // Connect
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn && $conn->connect_error) {
        echo ("Connection failed: " . $conn->connect_error);
        exit();
      }

      $id_stanza = intval($_GET['id']);

      $sql = "SELECT * FROM stanze WHERE id = $id_stanza";
      $result = $conn->query($sql);

      if ($result && $result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
    ?>


          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2>Modifica dati stanza</h2>
                <form class="" action="edit_manager.php" method="post">
                  <!-- inserisco un input nascosto hidden per prendere l'id da
                  dare a edit_manager -->
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Numero stanza</span>
                    <input type="text" class="form-control" placeholder="Numero stanza"
                    value="<?php echo $row['room_number'] ?>" name="room_number">
                  </div><!-- /input-group -->
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Piano</span>
                    <input type="text" class="form-control" placeholder="Piano"
                    value="<?php echo $row['floor'] ?>" name="floor">
                  </div><!-- /input-group -->
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Numero letti</span>
                    <input type="text" class="form-control" placeholder="Numero letti"
                    value="<?php echo $row['beds'] ?>" name="beds">
                  </div><!-- /input-group -->
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Salva</button>
                  </span>
                </form>
              </div>
            </div>
          </div> <!-- fine container -->
          <?php

      } elseif ($result) {
        echo "0 results";
      } else {
        echo "query error";
      }

    ?>



    <!-- foglio java -->
    <script src="public/js/app.js"></script>

  <?php
    include 'layout/footer.php';
  ?>
