<?php

$weather = array("+4", "8m/s");

$station = get_field('weather');
?>

<p><strong>Temperatur:</strong> <span id="temperatur"><?php echo $weather[0]; ?></span> </p>
<p><strong>Vindhastighet:</strong> <span id="vindhastighet"><?php echo $weather[1]; ?></span> </p>