<?php
$temp = 20;
$cloudy = true;

if ($temp < 0 || $temp > 30) {
    echo "The weather is bad.<br>";
} else {
    echo "The weather is good.<br>";
}

if (!$cloudy) {
    echo "It's sunny.<br>";
} else {
    echo "It's cloudy.<br>";
}

if ($cloudy && $temp > 15 && $temp < 35) {
    echo "Weather is good for exercise.<br>";
} else {
    echo "Weather is not great for exercise.<br>";
}
?>