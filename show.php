
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
            <h2>Stanza</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>Piano</th>
                  <th>Numero Letti</th>
                  <th>Data creazione</th>
                  <th>Aggiornamento</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $row['floor'];?></td>
                  <td><?php echo $row['beds'];?></td>
                  <td><?php echo $row['created_at'];?></td>
                  <td><?php echo $row['updated_at'];?></td>
                  <td><a href="index.php" class="btn btn.primary">Indietro</a></td>
                </tr>
              </tbody>
            </table>
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
