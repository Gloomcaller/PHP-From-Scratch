<?php
//Classes are a fundamental part of modern PHP development acting as blueprints.
//They define what properties (data) and methods (functions) objects will have.
//Objects in PHP organize related data and functionality together in a reusable way.

//Basic Class Structure
class Product
{
    public string $name;
    public float $price;
    public function isExpensive(): bool
    {
        return $this->price > 100;
    }
}
$product = new Product();
$product->name = "Phone";
$product->price = 99.99;

echo $product->name; // returns “Phone”
var_dump($product->isExpensive());  // returns false

//Constructor Method make classes better by using constructors.
//Constructor is a special method that runs when creating a new object.
//It adds data while creating a new object instance.
class Products
{
    public function __construct(
        public string $name,
        public float $price
    ) {
    }
}
$product = new Products("Phone", 99.99);

//PHP provides three visibility levels for properties and methods.
class AcessProducts
{
    public string $name;      // Accessible from anywhere
    private float $price;     // Only inside this class
    protected bool $active;   // Inside this class and child classes
}

//Classes can inherit properties and methods from other classes.
//This is useful when there are similar types of objects that share common features but need some additional functionality.
//Instead of duplicating code, base class is extended.
class Production
{
    public function __construct(
        public string $name,
        public float $price
    ) {
    }
    public function hasDiscount(): bool
    {
        return $this->price < 100;
    }
    public function getDescription(): string
    {
        return "{$this->name} costs {$this->price}€";
    }
}
class DigitalProduct extends Production
{
    public function __construct(
        public string $name,
        public float $price,
        public string $downloadLink
    ) {
    }
    public function download(): string
    {
        return "Downloading {$this->name} from {$this->downloadLink}";
    }
}
$course = new DigitalProduct('PHP Course', 99.99, 'course.zip');
echo $course->getDescription();  // inherited method
echo $course->hasDiscount();     // inherited method
echo $course->download();        // new method
?>