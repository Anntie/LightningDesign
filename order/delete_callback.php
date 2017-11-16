<?php
  require("Connection.php");
  $id = $_POST["id"];

  if (empty($id)) {
    exit('1');
  }

  $connection = (new Connection())->getConnection();

  /*
    Process & validate data
  */

  $statement = $connection->prepare("DELETE FROM `callbacks` WHERE `id` = ?");
  $statement->execute(array($id));

  exit('0');

?>
