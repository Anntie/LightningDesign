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

  $statement = $connection->prepare("INSERT INTO `orders`(`name`, `phone`, `data`) VALUES (?,?,?)");
  $statement->execute($row);

  // Telegram API
  require("telegram.php");
  $message = "*Новый заказ!*\nЗаказчик: " . $_POST["name"] . "\nТелефон: +38 " . $_POST["phone"];

  // Andrew : 210219337
  sendMessage(210219337, $message);
  // Taras : 398164578
  sendMessage(398164578, $message);

  exit('0');
?>
