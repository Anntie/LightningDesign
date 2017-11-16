<?php
  session_start();
  session_regenerate_id();
  if(!isset($_SESSION['lightning']))
  {
      header("Location: ./");
  }

  require("Connection.php");
  $pdo = (new Connection())->getConnection();

  $exe = $pdo->prepare("SELECT * FROM `orders` ORDER BY `id`");
  $exe->execute();
  $rows = $exe->fetchAll(PDO::FETCH_ASSOC);

  $set = array();

  foreach ($rows as $row) {
    $data = json_decode($row["data"]);
    foreach ($data as $item) {
      $item = (array) $item;
      $client = "<tr data-id=\"" . $row["id"] . "\" class=\"table-info text-left\"><td>" . $row['name'] . "</td><td>" . $row['phone'] . "</td><td style=\"right 0;\" colspan=\"2\"></td><td><span class=\"btn btn-sm btn-danger delete-item pull-right\"><i class=\"fa fa-times fa-1x\"></i></span></td></tr>";
      $entry = array(
        "id" => $row["id"],
        "name" => $row["name"],
        "model" => $item["model"],
        "phone" => $row["phone"],
        "adress" => $row["adress"],
        "date" => $row["date"],
        "data" => $item["value"]
      );
      if (empty($set[$client])) {
        $set[$client] = array();
      }
      array_push($set[$client], $entry);
    }
  }

?>
<!DOCTYPE html>
<html lang="ru">
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
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">lightning</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Заказы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="callbacks.php">Callback</a>
            </li>
          </ul>
          <a href="logout.php" class="btn btn-outline-primary my-2 my-sm-0">Выйти</a>
        </div>
      </nav>
    </header>
    <table class="table table-striped" id="orders-table">
      <thead class="thead-inverse">
        <tr>
          <th>Дата</th>
          <th>Модель</th>
          <th>Название услуги</th>
          <th>Цена</th>
          <th>Адрес</th>
        </tr>
      </thead>
      <tbody id="orders-list" class="text-center">
        <?php
          foreach ($set as $client => $orders) {
            echo $client;
            foreach ($orders as $order) {
              echo "<tr data-id=\"" . $order["id"] . "\"><td>" . $order["date"] . "</td><td>" . $order["model"] . "</td>" . $order["data"] . "<td>" . $order["adress"] . "</td></tr>";
            }
          }
        ?>
      </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="js/orders.js"></script>
  </body>
  </html>
