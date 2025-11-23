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


// ===================== Student Class =====================
class Student extends Person
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function Study()
    {
        echo $this->Name . " is studying.\n";
    }
}


// ===================== Teacher Class =====================
class Teacher extends Person
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function Explain()
    {
        echo $this->Name . " is explaining.\n";
    }
}


// ===================== MAIN PROGRAM =====================
echo "Enter the name of Student 1: ";
$student1Name = readline();

echo "Enter the name of Student 2: ";
$student2Name = readline();

echo "Enter the name of the Teacher: ";
$teacherName = readline();

// Create objects
$people = [];
$people[] = new Student($student1Name);
$people[] = new Student($student2Name);
$people[] = new Teacher($teacherName);

// Output stored objects
echo "\n=== People Stored ===\n";
foreach ($people as $p) {
    echo $p . "\n"; // calls __toString()
}

echo "\n=== Actions ===\n";

// Execute the proper methods
foreach ($people as $p) {
    if ($p instanceof Student) {
        $p->Study();
    }
    elseif ($p instanceof Teacher) {
        $p->Explain();
    }
}

?>
