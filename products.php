<?php
      // connect to database
      include 'config/database.php';


      // get database connection
      $database = new Database();
      $db = $database->getConnection();
?>

<h1>Hello World!</h1>
