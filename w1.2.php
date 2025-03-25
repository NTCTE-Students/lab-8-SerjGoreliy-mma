<?php
class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getInfo() {
        return "Employee: {$this->name}, Salary: {$this->salary}";
    }
}

class Manager extends Employee {
    public function manageTeam() {
        return "{$this->name} is managing the team.";
    }
}

class Developer extends Employee {
    public function writeCode() {
        return "{$this->name} is writing code.";
    }
}

class Designer extends Employee {
    public function design() {
        return "{$this->name} is designing.";
    }
}

$manager = new Manager("Джон", 14288);
$developer = new Developer("Bob", 55981);
$designer = new Designer("Charlie", 78912);