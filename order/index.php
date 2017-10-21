<?php
  require("Connection.php");
  $json = $_POST["data"];

  if (empty($json)) {
    exit('1');
  }

  $connection = (new Connection())->getConnection();

  /*
    Process & validate data
  */

  $row = array($_POST["name"], $_POST["phone"], $json);

  $statement = $connection->prepare("INSERT INTO `orders`(`name`,`phone`,`data`) VALUES (?,?,?)");
  $statement->execute($row);

  exit('0');
?>
