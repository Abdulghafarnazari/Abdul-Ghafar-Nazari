<?php


// Full Name: Abdul Ghafar Nazari
// Student ID: 20
// Kabul University - Faculty of Computer Science
// Department: IT
// Class: 4th(7th semester)




// PART A & B — Student class 
// Note: Part A and Part B both use a class named "Student".
// In PHP we cannot create two classes with the same name in one file,
// so both versions are combined here into a single Student class.

class Student {
    public $name;
    public $studentId;
    public $department;

    // constructor runs automatically when we make a new Student
    function __construct($name, $studentId, $department) {
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    // from Part A
    function sayHello() {
        echo "Hello! I am a student.<br>";
    }

    // from Part B
    function showInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }
}


// ---------- Part A demo ----------
// create an object just to test sayHello()
$studentA = new Student("Test", 0000, "Test");
$studentA->sayHello();


// ---------- Part B demo ----------
$student1 = new Student("Ahmad", 1001, "Computer Science");
$student1->showInfo();


// ---------- Part C demo ----------
$student2 = new Student("Sara", 1002, "Information Systems");
$student2->showInfo();

// Question: How many classes did you create?
// Answer: 1 class (Student)

// Question: How many objects did you create?
// Answer: 3 objects ($studentA, $student1, $student2)


// ==================== PART D — Access Modifiers ====================

class BankAccount {
    public $ownerName;
    private $balance;

    function __construct($ownerName, $balance) {
        $this->ownerName = $ownerName;
        $this->balance = $balance;
    }

    function showBalance() {
        echo "Balance: " . $this->balance . "<br>";
    }
}

$account1 = new BankAccount("Ahmad", 5000);

echo "Owner: " . $account1->ownerName . "<br>";
$account1->showBalance();

// Try This:
// echo $account1->balance;

// Question: Does it work?
// Answer: No

// Why?
// because $balance is private, so it can only be used inside the BankAccount
// class itself. outside code (like this echo line) is not allowed to touch it.
// that's why we made showBalance() - it is a safe way to show the balance
// from outside the class.


// ==================== PART E — Simple Inheritance ====================

class Person {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }

    function introduce() {
        echo "My name is " . $this->name . "<br>";
    }
}

class StudentChild extends Person {
    // Note: renamed to StudentChild here because "Student" is already
    // used above by the Part A/B/C class. The lab originally calls it
    // "Student" but PHP does not allow the same class name twice.
    function study() {
        echo $this->name . " is studying.<br>";
    }
}

$student3 = new StudentChild("Ahmad");

$student3->introduce();
$student3->study();


// ==================== PART F — Understanding Inheritance ====================

// Question 1: Which class is the parent class?
// Answer: Person

// Question 2: Which class is the child class?
// Answer: Student (called StudentChild in this file to avoid a name conflict)

// Question 3: Which keyword creates the inheritance relationship?
// Answer: extends

// Question 4: The introduce() method was written inside which class?
// Answer: Person

// Question 5: Can the $student1 object call introduce()?
// Answer: Yes

// Question 6: Why can $student1 use introduce() even though it is not
// written inside the Student class?
// Answer: because Student extends Person, so Student inherits everything
// from Person, including the introduce() method. we don't need to write
// it again inside Student.


// ==================== PART G — Vehicle and Car ====================

class Vehicle {
    protected $brand;

    function __construct($brand) {
        $this->brand = $brand;
    }

    function start() {
        echo "The vehicle is starting.<br>";
    }
}

class Car extends Vehicle {
    function showBrand() {
        echo "Car brand: " . $this->brand . "<br>";
    }
}

$car1 = new Car("Toyota");
$car1->start();
$car1->showBrand();

?>
