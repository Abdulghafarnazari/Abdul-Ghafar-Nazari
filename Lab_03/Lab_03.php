<?php
// Full Name: Abdul Ghafar Nazari
// Student ID: 20
// Web Information Systems - PHP OOP LAB_03
// Kabul University - Faculty of Computer Science
// Department: IT
// Class: 4th(7th semester)


// Task 1: Class Constant

// using a class constant here because MAX_BOOKS is a fixed rule that
// belongs to the Library class itself, not to any single object.
// it should never change while the program runs, so const fits perfectly
// (unlike a normal property, a constant can't be changed later, not even
// from inside the class methods)
class Library {
    const MAX_BOOKS = 3;
}

echo "Maximum books allowed: " . Library::MAX_BOOKS ."<br>";



// Task 2: Static Property and Static Method

// static property/method because we want ONE shared counter for the
// whole class, not a separate counter per object. that's why we call
// addStudent() without ever making a StudentCounter object.
class StudentCounter {
    public static $count = 0;

    public static function addStudent() {
        self::$count++; // self:: refers to the class itself, not an instance
    }
}

// calling the static method 3 times, no object created
StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

echo "Total students: " . StudentCounter::$count ."<br>";



// Task 3: Abstract Class and Abstract Method

// Vehicle is abstract because it makes no sense to have a generic
// "Vehicle" object on its own - it just defines a contract (start())
// that every child class MUST implement in its own way.
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        echo "Car engine started"."<br>";
    }
}

class Bike extends Vehicle {
    public function start() {
        echo "Bike started". "<br>";
    }
}

$car = new Car();
$bike = new Bike();

$car->start();
$bike->start();
