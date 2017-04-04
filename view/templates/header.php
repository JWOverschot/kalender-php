<!doctype html>
<?php
$cookie_mode = "mode";
$cookie_value = "day";
setcookie($cookie_mode, $cookie_value, time() + (86400 * 30)); // 86400 = 1 day
?>
<html>
	<head>
		<title>Verjaardagskalender</title>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?= URL . '/public/css/materialize.min.css' ?>" media="screen,projection">
        <!-- Import main.css -->
        <link type="text/css" rel="stylesheet" href="<?= URL . '/public/css/main.css' ?>">
        <!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      	<link rel="icon" href="<?= URL . '/public/img/ic_today_black_24dp_1x.png' ?>" type="image/png" sizes="24x24">
	</head>

	<body onload="<?php if ($_COOKIE["mode"] == "day") {?>day()<?php } elseif ($_COOKIE["mode"] == "night") { ?>night()<?php } ?>">
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?= URL . '/public/js/materialize.min.js' ?>"></script>
      <script type="text/javascript" src="<?= URL . '/public/js/main.js' ?>"></script>
      <script>
		$(document).ready(function() {
	    	$('select').material_select();
			window.picker = $('.datepicker').pickadate({
		    	selectYears: 4035,
		    	format: 'dd-mm-yyyy'
			});
		});
	</script>
	<div class="right-align">
        <a onclick="changeBG()"
        id="bg-color"
        class="btn-floating waves-effect waves-circle waves-yellow grey secundary-content">
        <i class="material-icons">wb_incandescent</i>
        </a>
    </div>