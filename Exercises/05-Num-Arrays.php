<?php
$arr = array(1, 2, 3, 4, 5);

echo "Array: ";
print_r($arr);

echo "<br>Third array element: " . $arr[2];

array_push($arr, 6);

echo "<br>Array after the new element: ";
print_r($arr);
?>