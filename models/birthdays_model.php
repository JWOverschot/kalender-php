<?php

function getBirthday($id) {
}
function getAllBirthdays() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays ORDER BY month ASC, day DESC";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;


	return $query->fetchAll();
}
function editBirthday() {
}
function deleteBirthday() {
}
function createBirthday() {
}

