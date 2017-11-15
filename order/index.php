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

  $row = array($_POST["name"], $_POST["phone"], $_POST['date'], $_POST['adress'], $json);

  $statement = $connection->prepare("INSERT INTO `orders`(`name`, `phone`, `date`, `adress`, `data`) VALUES (?,?,?,?,?)");
  $statement->execute($row);

  // Telegram API

  exit('0');
?>
