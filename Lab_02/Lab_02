<?php

// Name: Abdul Ghafar Nazari 
// RollNumber: 20
// ==================== TASK 1 ====================

// This is our class. Think of a class like a "form" or "blueprint" for making students.
class StudentAccount {

    // public means: anyone can see and use this, even outside the class.
    public $name;

    // private means: only this class can use it. No one outside can touch it.
    private $studentId;

    // protected means: this class and its child classes can use it. Outside code cannot.
    protected $department;

    // The constructor runs automatically when we create a new student.
    // It takes 3 pieces of information and saves them inside the object.
    public function __construct($name, $studentId, $department) {
        $this->name = $name;             // save the name we got into this object
        $this->studentId = $studentId;   // save the student ID into this object
        $this->department = $department; // save the department into this object
    }

    // This method prints all three values.
    // We can do this because we are INSIDE the class, so we are allowed to see everything,
    // even the private and protected ones.
    public function showInfo() {
        echo "Name: " . $this->name ."<br>";
        echo "Student ID: " . $this->studentId ."<br>";
        echo "Department: " . $this->department ."<br>";
    }

    // Since $studentId is private, no one outside the class can read it directly.
    // So we make this small "helper" method. Its only job is to give the private value
    // to anyone who asks for it, in a safe way.
    public function getStudentId() {
        return $this->studentId;
    }
}

// Now we create one real student object from our class.
// We give it a name, a student ID, and a department.
$student1 = new StudentAccount("Ahmad", 1001, "Computer Science");

// This calls the method that prints everything.
$student1->showInfo();

// This calls the small helper method to get the private student ID.
echo "Student ID from method: " . $student1->getStudentId() ."<br>";


// Experiment - testing the properties from outside the class

// echo $student1->name;
// this one works fine. output: Ahmad
// reason: $name is public, so we can use it from anywhere, even outside the class.

// echo $student1->studentId;
// this one gives an error.
// reason: $studentId is private, so only the StudentAccount class itself can use it.
// outside code like this line cannot touch it.

// echo $student1->department;
// this one also gives an error.
// reason: $department is protected, so only the class and its child classes
// can use it. outside code (like here) is not allowed.



// ==================== TASK 2 ====================





// This is the PARENT class. "Person" is a general class.
class Person {

    // protected means: this class and any CHILD class can use it, but outside code cannot.
    protected $name;

    // Constructor runs when we make a new Person. It saves the name.
    public function __construct($name) {
        $this->name = $name;
    }

    // This method shows the person's name.
    public function introduce() {
        echo "My name is " . $this->name ."<br>";
    }
}

// This is the CHILD class. "Student extends Person" means:
// Student gets everything Person has (the $name property and the introduce() method) for free.
class Student extends Person {

    // This is a NEW method, only Student has this one, Person does not have it.
    public function study() {
        echo $this->name . " is studying"."<br>";
    }
}

// Create a new Student object, give it the name "Sara"
$student2 = new Student("Sara");

// introduce() is not written inside Student, but Student "inherited" it from Person.
$student2->introduce();

// study() is written inside Student itself.
$student2->study();


// Think about it:
// The Student class does not declare $name and does not define introduce().
// Why can the Student object still use them?

// because Student extends Person, so it inherits everything from Person.
// this means $name property and introduce() method are automatically available
// inside Student too, we don't need to write them again.
// also $name is protected (not private), so the child class Student is allowed
// to use it. if it was private, Student could not access it at all.




// ==================== TASK 3 ====================

// Parent class - Employee
class Employee {

    // public: anyone can use this, from anywhere
    public $company;

    // protected: this class AND child classes can use it, but outside code cannot
    protected $name;

    // private: only THIS class can use it, not even child classes
    private $salary;

    // Constructor saves all three values when we create an Employee
    public function __construct($name, $company, $salary) {
        $this->name = $name;
        $this->company = $company;
        $this->salary = $salary;
    }

    // Shows all three values. We can do this because we are inside the class.
    public function showEmployee() {
        echo "Name: " . $this->name ."<br>";
        echo "Company: " . $this->company ."<br>";
        echo "Salary: " . $this->salary ."<br>";
    }

    // Salary is private, so we make a small helper method to give it out safely.
    public function getSalary() {
        return $this->salary;
    }
}

// Child class - Manager
class Manager extends Employee {

    // A new method, only Manager has it.
    public function manageTeam() {
        // $name is protected, so Manager (child class) is allowed to use it here.
        echo $this->name . " is managing the team"."<br>";
    }
}

// Create one Manager object: name = Ali, company = Kabul Tech, salary = 30000
$manager1 = new Manager("Ali", "Kabul Tech", 30000);

// Call the inherited method from Employee
$manager1->showEmployee();

// Call the inherited helper method to get the private salary
echo "Salary from method: " . $manager1->getSalary() ."<br>";

// Call the new method that only Manager has
$manager1->manageTeam();




// 5. Short Questions

// 1. What does public mean?
// public means we can use it from anywhere. inside the class, in a child class,
// or even outside the class. no restriction at all.

// 2. What does private mean?
// private means only the same class can use it. even a child class cannot use it.
// so it is the most closed/hidden one.

// 3. What does protected mean?
// protected means the class and its child classes can use it, but outside code
// cannot touch it. it is in the middle between public and private.

// 4. What is the purpose of extends?
// extends is used to make a child class from a parent class. the child class
// automatically gets the parent's public and protected stuff, so we don't
// need to write the same code again.

// 5. Which class is called the parent class?
// the parent class is the first class, the one that other classes inherit from.
// in this lab Person and Employee are the parent classes.

// 6. Which class is called the child class?
// the child class is the one that uses extends to get stuff from the parent.
// here Student and Manager are the child classes.

// 7. Why is protected useful in inheritance?
// because it lets the child class use the parent's property directly (like
// $name), but outside code still cannot touch it. so it is safe but also
// still usable inside the family of classes.



// Simple summary:
// Modifier:	Same class:	Child class:	Outside code:
// public		Yes	         Yes		    Yes
// protected	Yes		     Yes		    No
// private		Yes	       	 No	            No



?>
