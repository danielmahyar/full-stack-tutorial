<?php

include "database.php";

class Person {
	public $first_name;
	public $last_name;
	public $age;
	public $gender;
	public $ID;

	public function __construct($first_name, $last_name, $age, $gender){
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->age = $age;
		$this->gender = $gender;

	}

	public static function getAll(){
		$database = new Database();
		return $database->getAllUsers();
	}

	public function getFullName() {
		return $this->first_name . ' ' . $this->last_name;
	}

	public function getAge() {
		return $this->age;
	}

	public function setID($ID){
		$this->ID = $ID;
	}
}

class Teacher extends Person{
	public $subject;
	public $classes;
	public function __construct($first_name, $last_name, $age, $gender, $subject, $classes){
		parent::__construct($first_name, $last_name, $age, $gender);

		$this->subject = $subject;
		$this->classes = $classes;

		$database = new Database();
		$database->newUser($this, "TEACHER");
	}

	public static function getAll(){
		$database = new Database();
		return $database->getAllTeachers();
	}
}


class Student extends Person{
	public $class;
	public function __construct($first_name, $last_name, $age, $gender, $class){
		parent::__construct($first_name, $last_name, $age, $gender);
		$this->class = $class;
		$database = new Database();

		$database->addUser($this);
	}

	public static function getAll(){
		$database = new Database();
		return $database->getAllStudents();
	}

}


