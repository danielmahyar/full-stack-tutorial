<?php

$test = "Test";

class Database {
	private $connect;

	public function __construct(){
		$this->connect = mysqli_connect('localhost', 'root', '', 'testapp');
		if(!$this->connect){
			echo("Could not connect to Database");
		}

	}

	public function newUser($person, $ROLE){
		$USER_NAME = $person->first_name;
		$LAST_NAME = $person->last_name;
		$AGE = $person->age;
		$GENDER = $person->gender;
		
		$SQL_DECLARTION = "INSERT INTO users (USER_NAME, LAST_NAME, AGE, GENDER, ROLE) VALUES ('${USER_NAME}', '${LAST_NAME}', ${AGE}, ${GENDER}, '${ROLE}')";
		$query = mysqli_query($this->connect, $SQL_DECLARTION);
		if(!$query){
			var_dump($SQL_DECLARTION);
		}

	}

	public function addUser($user){
		$this->user = $user;
	}

	public function getAllTeachers(){
		$SQL = "SELECT * FROM users WHERE ROLE='TEACHER'";
		$result = mysqli_query($this->connect, $SQL);
		if($result){
			return $result;
		}
	}

	public function getAllStudents(){
		$SQL = "SELECT * FROM users WHERE ROLE='STUDENT'";
		$result = mysqli_query($this->connect, $SQL);
		if($result){
			return $result;
		}
	}

	public function getAllUsers(){
		$SQL = "SELECT * FROM users";
		$result = mysqli_query($this->connect, $SQL);
		if($result){
			return $result;
		}	
	}
}