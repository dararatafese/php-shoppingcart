<?php
      // connect to database
      include 'config/database.php';


      // get database connection
      $database = new Database();
      $db = $database->getConnection();

      // set page title
      $page_title="Products";

      // page header html
      include 'layout_head.php';

      // contents will be here

      // layout footer code
      include 'layout_foot.php';
?>
