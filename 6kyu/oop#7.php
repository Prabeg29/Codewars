<?php

/* 
Object-Oriented PHP #7 - The "Final" Keyword

Task

1. Copy and paste a working solution from Kata #4 of this Series
2. Since all humans greet extraterrestrials in the exact same way, declare the greet_extraterrestrials static method as final.
3. Since all people also describe their jobs in the same way, make the describe_job method final too.
Declare and define a new class, ComputerProgrammer, which "is a" Person ;)
4. In the ComputerProgrammer class, override the introduce method such that it returns a string of the format "Hello, my name is NAME_HERE and I am a OCCUPATION_HERE"
*/

// Code Here :)
class Person {
  
    const species = "Homo Sapiens";
    public $name, $age, $occupation;
    
    public function __construct($name, $age, $occupation){
      $this->name = $name;
      $this->age = $age;
      $this->occupation = $occupation;
    }
    
    public function introduce(){
      return "Hello, my name is $this->name";
    }
    
    final public function describe_job(){
      return "I am currently working as a(n) $this->occupation";
    }
    
    final public static function greet_extraterrestrials($species){
      return "Welcome to Planet Earth $species!";
    }
    
  }
  
  class ComputerProgrammer extends Person {
    
    public function __construct($name, $age, $occupation) {
      parent::__construct($name, $age, 'Computer Programmer');
      $this->occupation = $occupation;
    }
    
    public function introduce(){
      return parent::introduce() . ' and I am a ' . $this->occupation;
    }
  }