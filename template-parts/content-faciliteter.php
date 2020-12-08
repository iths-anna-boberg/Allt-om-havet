<?php


$facilities = get_field('faciliteter');
$options = get_field_object('faciliteter');
// echo '<pre>',print_r($options),'</pre>';
echo "<h2 class='capitalize'>".$options['name']."</h2>";
$options = $options['choices'];


// var_dump($facilities);

echo "<ul>";

foreach ($options as $option => $value) {
    if (in_array($option, $facilities)) {
        echo "<li class='aoh-listitem-checked'>$value</li>";
    } else {
        echo "<li class='aoh-listitem-unchecked'>$value</li>";
    }
}
echo "</ul>";

?>