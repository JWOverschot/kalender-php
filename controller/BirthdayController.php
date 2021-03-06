<?php
require(ROOT . "model/BirthdayModel.php");
function index()
{
	render("birthday/index", array(
		'birthdays' => getAllBirthdays()
	));
}
function create()
{
	render("birthday/create");
}
function createSave()
{
	if (!createBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "birthday/index");
}
function edit($id)
{
	render("birthday/edit", array(
		'birthday' => getBirthday($id)
	));
}
function editSave()
{
	if (!editBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "birthday/index");
} 
function delete($id)
{
	if (!deleteBirthday($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "birthday/index");
}
function cookie() {
	if ($_COOKIE["mode"] === "day") {
        	setcookie("mode", "night", time() + (86400 * 30));
        }
        else {
        	setcookie("mode", "day", time() + (86400 * 30));
        }
        header("Location:" . URL);
}