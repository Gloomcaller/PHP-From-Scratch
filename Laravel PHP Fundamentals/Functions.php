<?php
//Functions are essential building blocks in PHP. 
//They help organize code, make it reusable, and prevent repetition.

//Creating a function in PHP is simple.
function sayHello()
{
    echo "Hello!";
}

// Call the function
sayHello();

//Passing data to functions through parameters is possible.
function greet($name)
{
    echo "Hello, $name!";
}

greet("John");    // outputs: Hello, John!

// Multiple parameters
function add($a, $b)
{
    return $a + $b;
}

$result = add(5, 3);    // returns: 8

//Functions can send back results using the ⁠return statement.
function getStatus($score)
{
    if ($score >= 75) {
        return "Passed";
    }

    return "Failed";
}

$status = getStatus(80);    // returns: "Passed"

//PHP allows setting default values for parameters.
//If an argument isn't provided, the default value is used.
function greeting($name = "Guest")
{
    echo "Hello, $name!";
}

greeting();          // outputs: Hello, Guest!
greeting("John");    // outputs: Hello, John!

//PHP can specify types for parameters and return values.
function addition(int $a, int $b): int
{
    return $a + $b;
}

function getUserName(array $user): string
{
    return $user['name'];
}

//PHP also supports anonymous functions.
$greet = function ($name) {
    echo "Hello, $name!";
};

$greet("John");    // outputs: Hello, John!
?>