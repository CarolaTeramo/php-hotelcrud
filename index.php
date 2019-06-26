<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="public/css/app.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>


    <?php
      // http://localhost:8888/Es_10_(26_Giugno)/index.php
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "data_hotel";

      // Connect
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn && $conn->connect_error) {
      echo ("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT room_number, floor FROM stanze";
      $result = $conn->query($sql);

      if ($result && $result->num_rows > 0) {
        // output data of each row
        ?>


          <div class="container">
            <h2>Tabella stanze</h2>
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
                  <td><?php echo $row['room_number'];
                  ?></td>
                  <td><?php echo $row['floor'];
                  } //fine while ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <?php

      } elseif ($result) {
        echo "0 results";
      } else {
        echo "query error";
      }

    ?>


    <!-- foglio java -->
    <script src="public/js/app.js"></script>

  </body>
</html>
