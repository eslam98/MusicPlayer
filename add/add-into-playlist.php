<?php
session_start();
if(!isset($_SESSION['signedin'])){
	header("location: player.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Calligraffitti|Coming+Soon" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="fav.ico"/>

	<script src="../js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div id="leftTable">
		<p id="info"></p>
		<table id="viewAddedTable">
		</table>
		<button id="save">Save</button>


	</div>

	<div id="rightTable">
		<table id='playlistTable'>
		</table>
	</div>



	<script src="playlist.js"></script>
</body>
</html>