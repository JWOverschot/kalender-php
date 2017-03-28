<?php
function getBirthday($id) {
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
	$month = isset($_POST['month']) ? $_POST['month'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	$year = isset($_POST['year']) ? $_POST['year'] : null;
	
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
