<?php

// ===================== Abstract Animal Class =====================
abstract class Animal
{
    protected string $Name;

    public function SetName(string $name)
    {
        $this->Name = $name;
    }

    public function GetName(): string
    {
        return $this->Name;
    }

    // Abstract method
    abstract public function Eat(): void;
}


// ===================== Dog Class =====================
class Dog extends Animal
{
    public function Eat(): void
    {
        echo $this->Name . " is Eating.\n";
    }
}


// ===================== MAIN PROGRAM =====================
echo "Enter the dog's name: ";
$dogName = readline();

// Create Dog object
$dog = new Dog();

// Set the name
$dog->SetName($dogName);

// Display name
echo "The dog's name is: " . $dog->GetName() . "\n";

// Dog eats
$dog->Eat();

?>
