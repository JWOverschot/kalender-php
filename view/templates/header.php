<!doctype html>
<html>
	<head>
		<title>Verjaardagskalender</title>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?= URL . '/public/css/materialize.min.css' ?>" media="screen,projection">
        <!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	</head>
	<body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?= URL . '/public/js/materialize.min.js' ?>"></script>
      <script>
		$(document).ready(function() {
	    	$('select').material_select();
			window.picker = $('.datepicker').pickadate({
		    	selectYears: 4035,
		    	format: 'dd-mm-yyyy'
			});
		});
	</script>