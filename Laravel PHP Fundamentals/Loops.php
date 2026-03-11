<?php
//PHP supports most modern loops.

//Foreach Loop
$colors = ['red', 'blue', 'green'];

foreach ($colors as $color) {
    echo $color;
}

$invoiceItems = [
    ['item' => 'Laptop', 'price' => 1200],
    ['item' => 'Mouse', 'price' => 75],
    ['item' => 'Keyboard', 'price' => 100]
];

$total = 0;
foreach ($invoiceItems as $item) {
    $total += $item['price'];
}

//For Loop
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

//Counting backwards
for ($i = 10; $i > 0; $i--) {
    echo "$i seconds remaining...";
}

//Do-While Loop
$count = 0;
while ($count < 5) {
    echo $count;
    $count++;
}

//Do-while executes at least once
do {
    echo $count;
    $count++;
} while ($count < 5);

//Breaking and Continuing
$users = [
    ['name' => 'John', 'newsletter' => true],
    ['name' => 'Jane', 'newsletter' => false],
    ['name' => 'Bob', 'newsletter' => true]
];

foreach ($users as $user) {
    if (!$user['newsletter']) {
        continue;    // Skip users who didn't subscribe
    }
    sendNewsletter($user);
}

// Simple break example
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number) {
    if ($number === 3) {
        break;    // Stop the loop
    }
    echo $number;
}
?>