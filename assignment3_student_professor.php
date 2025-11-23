<?php

// =============== Person Class ===============
class Person
{
    public string $name;
    public int $age;

    public function __construct(string $name = "")
    {
        $this->name = $name;
        $this->age = 0;
    }

    public function Greet()
    {
        echo "Hello!\n";
    }

    public function SetAge(int $age)
    {
        $this->age = $age;
    }
}


// =============== Student Class ===============
class Student extends Person
{
    public function Study()
    {
        echo "I'm studying\n";
    }

    public function ShowAge()
    {
        echo "My age is: {$this->age} years old\n";
    }
}


// =============== Professor Class ===============
class Professor extends Person
{
    public function Explain()
    {
        echo "I'm explaining\n";
    }
}


// =============== Test Class ===============
class StudentProfessorTest
{
    public static function Main()
    {
        echo "===== TESTING PERSON =====\n";
        $personName = readline("Enter name for Person: ");
        $person = new Person($personName);
        $person->Greet();

        echo "\n===== TESTING STUDENT =====\n";
        $studentName = readline("Enter name for Student: ");
        $studentAge = (int)readline("Enter student's age: ");

        $student = new Student($studentName);
        $student->SetAge($studentAge);
        $student->Greet();
        $student->ShowAge();
        $student->Study();

        echo "\n===== TESTING PROFESSOR =====\n";
        $profName = readline("Enter name for Professor: ");
        $profAge = (int)readline("Enter professor's age: ");

        $professor = new Professor($profName);
        $professor->SetAge($profAge);
        $professor->Greet();
        $professor->Explain();
    }
}


// Run the program
StudentProfessorTest::Main();

?>
