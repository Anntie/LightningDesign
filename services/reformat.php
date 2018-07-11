<?php
	
	echo "<h4>Price formater</h4>";

	$json = file_get_contents("prices.json");
	$list = json_decode($json, true);

	$result = array();

	echo "<h6>Loaded JSON ✅</h6><h6>Starting...<h6>";

	$i = 0;
	foreach ($list as $key => $value) {
		if(!isset($result[$value["phone_model"]])) {
			$result[$value["phone_model"]] = array();
		}
		array_push($result[$value["phone_model"]], array(
			"service_id" => $value["service_id"],
			"price" => $value["price"]
		));
		$i++;
	}

	echo "<h6>Made " . $i . " iterations. Done ✅</h6><h6>Saving to prices.min.json ...</h6>";
	$data = json_encode($result);
	file_put_contents("prices.min.json", $data);

	echo "<h6>Done ✅</h6>";

?>