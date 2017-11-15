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
      <!--<li class="list-group-item"></li>-->
      <?php
        foreach ($rows as $row) {
          echo '<li data-id="' . $row['id'] . '" class="list-group-item d-flex justify-content-between align-items-center">' . $row["phone"] . "&nbsp;<strong>" . date("d.m.Y H:i:s", strtotime($row["date"])) . '</strong><a href="#" class="badge badge-danger badge-pill delete-item">Удалить</a></li>';
        }
      ?>
    </ul>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="js/callbacks.js"></script>
  </body>
</html>
