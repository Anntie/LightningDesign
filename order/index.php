<?php
	session_start();
  $text = "";
	if(isset($_SESSION['lightning'])) {
		header("Location: orders.php");
	}
  elseif (isset($_POST["password"])) {
    if ($_POST["password"] == "xI5yPFQm") {
      $_SESSION['lightning'] = true;
  		header("Location: orders.php");
    } else {
      $text = '<div class="alert alert-danger col-md-12" role="alert">
        Меня не наебёшь))
      </div>';
    }
  }
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>YOU SHALL NOT PASS!!!</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
    <div class="container">
      <?php echo $text;  ?>
      <center><img src="../images/parol.gif" /></center>
      <form action="./" method="post" class="form-signin">
        <h2 class="form-signin-heading">Введите ваш</h2>
        <label for="password" class="sr-only">Парол</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Парол" required>
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Паджолоста" />
      </form>
    </div>
  </body>
</html>
