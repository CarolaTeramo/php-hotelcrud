
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

      if (empty($_POST)) {
        echo "non ha caricato dato post";
        exit();
      }

      //prendo i dati dal post

      $id_stanza = intval($_POST['id']);
      $room_number = intval($_POST['room_number']);
      $floor = intval($_POST['floor']);
      $beds = intval($_POST['beds']);

      $sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES ($room_number, $floor, $beds, NOW(), NOW())";
      $result = $conn->query($sql);

    ?>

    <div class="container">
      <?php
        //var_dump($result);
        echo "Operazione conclusa con successo!"
      ?>
    </div> <!-- fine container -->




    <!-- foglio java -->
    <script src="public/js/app.js"></script>

  <?php
    include 'layout/footer.php';
  ?>
