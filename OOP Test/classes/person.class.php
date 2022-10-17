<?php

// class Person {
//     protected $name = "Presy";
//     private $age = 25;
//     private $job = "Web Developer";
// }

// class Person_extended extends Person {
//     public function name(){
//         $personName = $this->name;
//         return $personName;
//     }
// }

class Person {
    private $name;
    private $age;
    private $job;

    public static $company = "JBBGI";

    public function __construct($name,$age,$job) {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;

    }

    public static function getCompany(){
        return self::$company;
    }

}