<?php 

	if (!empty($_GET['lat']) && !empty($_GET['long'])) {
		$lat = $_GET['lat'];
		$long = $_GET['long'];
		// $meteoAPIFile = 'https://api.darksky.net/forecast/8e3584c81b63a5c4157f4c04d2eda60c/44.9227473,2.8034529?exclude=minutely-hourly-daily&lang=fr';
		$meteoAPIFile = "https://api.darksky.net/forecast/8e3584c81b63a5c4157f4c04d2eda60c/{$lat},{$long}?exclude=minutely-hourly-daily&units=auto&lang=fr";
		$meteoAPI = fopen($meteoAPIFile,"r");
		$meteoJson = file_get_contents($meteoAPIFile);

		echo $meteoJson;
	} else {
		echo "Wrong request";
	}