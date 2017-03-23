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
}
function createBirthday() {

}
