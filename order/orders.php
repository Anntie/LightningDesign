<?php
  require("Connection.php");
  $pdo = (new Connection())->getConnection();

  $exe = $pdo->prepare("SELECT * FROM `orders` ORDER BY `id`");
  $exe->execute();
  $rows = $exe->fetchAll(PDO::FETCH_ASSOC);

  $set = array(
    "5" => array(),
    "5s" => array(),
    "SE" => array(),
    "6" => array(),
    "6s" => array(),
    "7" => array()
  );

  foreach ($rows as $row) {
    $data = json_decode($row["data"]);
    foreach ($data as $item) {
      $item = (array) $item;
      $model = $item["model"];
      $entry = array(
        "id" => $row["id"],
        "name" => $row["name"],
        "phone" => $row["phone"],
        "adress" => $row["adress"],
        "date" => $row["date"],
        "data" => $item["value"]
      );
      array_push($set[$model], $entry);
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
    <table class="table table-striped" id="orders-table">
      <thead class="thead-inverse">
        <tr>
          <th>Имя заказчика</th>
          <th>Телефон</th>
          <th>Адрес</th>
          <th>Дата</th>
          <th>Название услуги</th>
          <th colspan="2" style="text-align: right;">Стоимость</th>
        </tr>
      </thead>
      <tbody id="orders-list" class="text-center">
        <?php
          foreach ($set as $model => $orders) {
            echo "<tr class=\"table-info text-left\"><td colspan=\"7\">iPhone {$model}</td></tr>";
            foreach ($orders as $order) {
              echo "<tr data-id=\"" . $order["id"] . "\"><td>" . $order["name"] . "</td><td>" . $order["phone"] . "</td><td>" . $order["adress"] . "</td><td>" . $order["date"] . "</td>" . $order["data"] . '<td width="5% !important"><span class="btn btn-sm btn-danger delete-item"><i class="fa fa-times fa-1x"></i></span></td></tr>';
            }
          }
        ?>
      </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>
