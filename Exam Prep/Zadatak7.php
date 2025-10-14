<?php
$a = 7;
$b = 9;

if ($a < 10 && $b < 10) {
    echo "Brojevi a i b su manji od broja 10";
} elseif ($a < 10 || $b < 10) {
    echo "Samo jedan od brojeva a i b je manji od broja 10";
} else {
    echo "Nijedan od brojeva a i b nije manji od 10";
}

// This is the second task within Z7
$i = 1;

do {
    echo $i . "<br>";
    $i++;
} while ($i <= 10);

?>