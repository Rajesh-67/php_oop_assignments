<?php
// Defines a Person class
// Has a Name property
// Includes a constructor, destructor, and __toString() method
// Prompts the user for three names
// Stores them in an array
// Prints each object using __toString()

class Person
{
    public string $Name;

    // Constructor
    public function __construct(string $name)
    {
        $this->Name = $name;
    }

    // Destructor
    public function __destruct()
    {
        // When the object is destroyed, clear the name
        $this->Name = "";
    }

    // ToString equivalent in PHP
    public function __toString(): string
    {
        return "Person Name: " . $this->Name;
    }
}

// Array to store Person objects
$people = [];

echo "Enter 3 names:\n";

// Prompt for 3 names
for ($i = 1; $i <= 3; $i++) {
    echo "Enter name $i: ";
    $name = readline();
    $people[] = new Person($name);
}

echo "\n--- People List ---\n";

// Print each Person object
foreach ($people as $person) {
    echo $person . PHP_EOL;
}

?>
