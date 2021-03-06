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
  require("telegram.php");
  $message = "*Перезвони клиенту!*\nНомер: +38 " . $phone;

  // Andrew : 210219337
  sendMessage(210219337, $message);
  // Taras : 398164578
  sendMessage(398164578, $message);
  // Oleksiy : 287896231
  sendMessage(287896231, $message);
  // Shared : 451537258
  sendMessage(451537258, $message);

  exit('0');
?>
