<?php
	$model = $_GET['model'];
	$lang = $_GET['lang'];

	if (empty($lang) || empty($model)) {
    	exit('1');
  	}

	$services = json_decode(file_get_contents("services.json"), true);
	$prices = json_decode(file_get_contents("prices.min.json"), true);

	$result = array();
	$list = $prices["iPhone " . $model];

	foreach ($list as $key => $value) {
		array_push($result, array(
			"name" => $services[$value["service_id"] - 1][$lang],
			"price" => $value["price"]
		));
	}

	echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>
