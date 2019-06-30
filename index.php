
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

      $sql = "SELECT room_number, floor, id FROM stanze";
      $result = $conn->query($sql);

      if ($result && $result->num_rows > 0) {
        // output data of each row
    ?>

          <div class="titolo">
            <h2>Tabella stanze</h2>
            <a href="create.php" class="btn btn-default" >Crea</a>
          </div>
          <div class="container">
            <table class="table">
              <thead>
                <tr>
                  <th>Stanza numero</th>
                  <th>Piano</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  while($row = $result->fetch_assoc()){
                ?>
                <tr>
                  <td><?php echo $row['room_number'];?></td>
                  <td><?php echo $row['floor'];?></td>
                  <td>
                    <a href="show.php?id=<?php echo $row['id'];?>" class="btn btn-default" >Visualizza</a>
                    <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-default" >Modifica</a>
                    <form class="cancellazione" action="delete.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                      <input type="submit" value="Cancella">
                    </form>
                  </td>
                  <?php
                  } //fine while ?>
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
