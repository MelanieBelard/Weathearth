<?php 

    require("./config.php");

	if (!empty($_GET['lat']) && !empty($_GET['long'])) {
		$lat = $_GET['lat'];
		$long = $_GET['long'];
		$meteoAPIFile = "https://api.darksky.net/forecast/".API_KEY."/{$lat},{$long}?exclude=minutely-hourly-daily&units=auto&lang=fr";
		$meteoAPI = fopen($meteoAPIFile,"r");
		$meteoJson = file_get_contents($meteoAPIFile);

		echo $meteoJson;
	} else {
		echo "Wrong request";
	}