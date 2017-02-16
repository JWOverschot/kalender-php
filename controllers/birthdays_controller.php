<?php

require(ROOT . "models/birthdays_model.php");

$birthdays = getAllBirthdays();

require(ROOT . "view/templates/header.php");
require(ROOT . "view/birthdays/index.php");
require(ROOT . "view/templates/footer.php");