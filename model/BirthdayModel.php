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
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	list($year, $month, $day) = explode('-', $date);
	
	if (strlen($month) == 0 && strlen($day) == 0 && strlen($person) == 0 && strlen($year) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "UPDATE birthdays SET birthday_month = :month, birthday_day = :day, birthday_person = :person, birthday_year = :year WHERE birthday_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':month' => $month,
		':day' => $day,
		':person' => $person,
		':year' => $year,
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
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	
	list($year, $month, $day) = explode('-', $date);

	if (strlen($month) == 0 && strlen($day) == 0 && strlen($person) == 0 && strlen($year) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "INSERT INTO birthdays(birthday_month, birthday_day, birthday_person, birthday_year) VALUES (:month, :day, :person, :year)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':month' => $month,
		':day' => $day,
		':person' => $person,
		':year' => $year));
	$db = null;
	
	return true;
}
