<?php
  require("Connection.php");
  $phone = $_POST["phone"];

  if (empty($phone)) {
    exit('1');
  }

  $connection = (new Connection())->getConnection();

  $statement = $connection->prepare("INSERT INTO `callbacks`(`phone`) VALUES (?)");
  $statement->execute(array($phone));

  // Telegram API

  exit('0');
?>
