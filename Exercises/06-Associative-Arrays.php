<?php
$namesAndYears = array("Ana" => 1995, "Marko" => 1998, "Jovana" => 1996, "Petar" => 1997, "Milica" => 1999);

echo "Whole array and birth years:<br>";
foreach ($namesAndYears as $name => $year) {
    echo "$name: $year<br>";
}
echo "Birth year of the student named: 'Ana': " . $namesAndYears["Ana"] . "<br>";

echo "Names of all students:<br>";
foreach ($namesAndYears as $name => $year) {
    echo "$name<br>";
}
?>