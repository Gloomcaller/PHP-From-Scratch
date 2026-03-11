<?php
//PHP has evolved significantly in recent years.
//Some modern features that make PHP code cleaner, safer, and more enjoyable to write.
//These features are especially relevant when working with frameworks like Laravel.

//One of the most welcome improvements in modern PHP is constructor property promotion.
//It eliminates the boilerplate code of declaring properties and then assigning them in the constructor.

// Old way
class User
{
    public string $name;
    public string $email;
    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}
// Modern way
class Users
{
    public function __construct(
        public string $name,
        public string $email,
    ) {
    }
}

//Readonly Properties were added in modern versions of PHP.
//Once a property is set in the constructor, it cannot be changed.
class Price
{
    public function __construct(
        public readonly float $amount,
        public readonly string $currency
    ) {
    }
}

//The match expression is a modern replacement for the switch statement.
//It's more concise, returns values directly, and does strict comparisons by default.

// Old way with switch
switch ($status) {
    case 200:
        $result = 'success';
        break;
    case 404:
        $result = 'not found';
        break;
    case 500:
        $result = 'server error';
        break;
    default:
        $result = 'unknown status';
}

// Modern way with match
$result = match ($status) {
    200 => 'success',
    404 => 'not found',
    500 => 'server error',
    default => 'unknown status'
};

//The nullsafe operator (?->) helps prevent null reference errors when accessing properties or methods in a chain.

// Old way
$country = null;
if ($user !== null) {
    if ($user->getAddress() !== null) {
        $country = $user->getAddress()->getCountry();
    }
}

// Modern way
$country = $user?->getAddress()?->getCountry();

//Named arguments make function and method calls more explicit and self-documenting.
$user = new User("John", "[john@example.com](<mailto:john@example.com>)");

// Works the same
$user = new User(
    name: "John",
    email: "[john@example.com](<mailto:john@example.com>)"
);

//Type declarations for properties help catch errors early and make code more reliable.
//PHP will ensure that only values of the correct type can be assigned to these properties.
class CurrUser
{
    public string $name;
    public int $age;
    public ?string $email = null;  // Nullable string
}
?>