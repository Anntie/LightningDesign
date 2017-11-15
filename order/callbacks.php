<?php
  date_default_timezone_set('Europe/Kiev');
  require("Connection.php");
  $pdo = (new Connection())->getConnection();

  $exe = $pdo->prepare("SELECT * FROM `callbacks` ORDER BY `id`");
  $exe->execute();
  $rows = $exe->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
		<title>Lightning Service</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!--<link rel="shortcut icon" href="images/favicon.ico">-->
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/lightning.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
  </head>
  <body>
    <ul class="list-group">
      <li class="list-group-item"></li>
      <?php
        foreach ($rows as $row) {
          echo '<li class="list-group-item d-flex justify-content-between align-items-center">' . $row["phone"] . "&nbsp;<strong>" . date("d.m.Y H:i:s", strtotime($row["date"])) . '</strong><a href="#" class="badge badge-danger badge-pill">Удалить</a></li>';
        }
      ?>
    </ul>
  </body>
</html>
