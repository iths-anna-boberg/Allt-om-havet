<?php

include __DIR__ . '/weather-data.php';


$station = get_field('weather');
$weather = getWeatherDataByID($station+0);

?>

<p><strong>Temperatur:</strong> <span id="temperatur"><?php echo $weather["temperature"]; ?></span>&#176; </p>
<p><strong>Vindhastighet:</strong> <span id="vindhastighet"><?php echo $weather["wind_speed"]; ?></span> m/s </p>