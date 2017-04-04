<?php
function getBirthday($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays WHERE birthday_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}
function getAllBirthdays() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays ORDER BY birthday_month, birthday_day ASC";
	$query = $db->prepare($sql);
		$query->execute();
	$db = null;

	return $query->fetchAll();
}
function editBirthday() {
	$date = isset($_POST['date']) ? $_POST['date'] : null;
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$surname = isset($_POST['surname']) ? $_POST['surname'] : null;
	$description = isset($_POST['description']) ? $_POST['description'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	list($year, $month, $day) = explode('-', $date);
	
	if (strlen($month) == 0 && strlen($day) == 0 && strlen($name) == 0 && strlen($surname) == 0 && strlen($year) == 0 && strlen($description) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "UPDATE birthdays SET birthday_month = :month, birthday_day = :day, birthday_name = :name, birthday_surname = :surname, birthday_year = :year, birthday_description = :description WHERE birthday_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':month' => $month,
		':day' => $day,
		':name' => $name,
		':surname' => $surname,
		':year' => $year,
		':description' => $description,
		':id' => $id));
	$db = null;
	
	return true;
}
function deleteBirthday($id) {
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "DELETE FROM birthdays WHERE birthday_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	
	return true;
}
function createBirthday() {
	$date = isset($_POST['date']) ? $_POST['date'] : null;
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$surname = isset($_POST['surname']) ? $_POST['surname'] : null;
	$description = isset($_POST['description']) ? $_POST['description'] : null;
	
	list($year, $month, $day) = explode('-', $date);

	if (strlen($month) == 0 && strlen($day) == 0 && strlen($name) == 0 && strlen($surname) == 0 && strlen($year) == 0 && strlen($description) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "INSERT INTO birthdays(birthday_month, birthday_day, birthday_name, birthday_surname, birthday_year, birthday_description) VALUES (:month, :day, :name, :surname, :year, :description)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':month' => $month,
		':day' => $day,
		':name' => $name,
		':surname' => $surname,
		':year' => $year,
		':description' => $description));
	$db = null;
	
	return true;
}