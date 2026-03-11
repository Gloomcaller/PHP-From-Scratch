<?php
// PHP variables always start with a $ symbol.
//PHP variables can hold any type of data, and you don't need to declare types upfront.
$status = 404;      // integer
$status = "active"; // sting
$status = true;     // boolean

//Strings can created with single or double quotes.
//Double quotes allow embeding variables.
//Single quotes treat everything as literal text.
$name = 'John';
$greeting = "Hello $name";          // Hello John
$greeting = 'Hello $name';          // Hello $name
$fullName = 'John' . ' ' . 'Doe';   // John Doe

//There are only Int and Float/Double in PHP.
$age = 25;           // Integer
$price = 19.99;      // Float (double if the number is big)


//Booleans are the same as anywhere.
$isActive = true;
$isDeleted = false;

//Type Casting has a simple (type) syntax.
$result = "123" + 456;    // "123" becomes integer, result is 579
$sum = 42 . " items";     // 42 becomes string "42 items"
if ("hello") {
}         // string is coerced to true
?>