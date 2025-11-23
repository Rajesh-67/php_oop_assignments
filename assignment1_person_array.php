<?php


// ===================== Person Class =====================
class Person
{
    public string $Name;

    public function __construct(string $name)
    {
        $this->Name = $name;
    }

    // ToString method
    public function __toString(): string
    {
        return "Person Name: " . $this->Name;
    }
}


// ===================== MAIN PROGRAM =====================
$people = [];

echo "Enter 3 names:\n\n";

for ($i = 1; $i <= 3; $i++) {
    $name = readline("Enter name $i: ");
    $people[] = new Person($name);
}

echo "\n=== People ===\n";

foreach ($people as $person) {
    echo $person . "\n";   // calls __toString()
}

?>
