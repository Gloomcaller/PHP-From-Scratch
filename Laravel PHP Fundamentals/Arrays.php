<?php
//In PHP, we have two main types of arrays.
//Numeric arrays which use numbers as their keys starting from 0.
//Associative arrays which use named keys.
//The great thing about PHP arrays is that they can also mix both styles.

// Numeric array
$colors = ['red', 'blue', 'green'];

// Associative array
$user = [
    'name' => 'John',
    'age' => 25
];

// Mixed array
$mixed = [
    42,                  // index 0
    'key' => 'value',    // key 'key'
    'another value'      // index 1
];

//Syntax for creating arrays is also simple in PHP.

// Modern syntax
$array1 = ['a', 'b', 'c'];

// Creating with specific keys
$user = [
    'name' => 'John',
    'age' => 25
];

//Accessing array elements is straightforward.
//For numeric arrays use the index number, for associative arrays use the key name.
$colors = ['red', 'blue', 'green'];
echo $colors[0];    // outputs: red

$user = ['name' => 'John', 'age' => 25];
echo $user['name']; // outputs: John

//Arrays can be nested, allowing the creation of more complex data structures.
$blogPost = [
    'title' => 'Getting Started with PHP',
    'author' => [
        'name' => 'John',
        'role' => 'editor'
    ],
    'comments' => [
        ['user' => 'Jane', 'text' => 'Great article!'],
        ['user' => 'Bob', 'text' => 'Thanks for sharing']
    ]
];

echo $blogPost['title'];                  // outputs: Getting Started with PHP
echo $blogPost['author']['name'];         // outputs: John
echo $blogPost['comments'][0]['text'];    // outputs: Great article!

//There are many ways to work with or traverse arrays in PHP.

// Adding elements
$colors[] = 'yellow';           // Add to numeric array
$user['email'] = 'john@example.com';  // Add to associative array

// Checking elements
isset($user['email']);          // Check if key exists
in_array('red', $colors);       // Check if value exists

// Array size
count($colors);                 // Get number of elements

// Remove elements
unset($user['email']);          // Remove specific element
?>