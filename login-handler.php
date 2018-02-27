<?php

session_start();

$name = $_POST['username'];

$_SESSION["username"] = $name;


?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome back</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<style type="text/css">
</style>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Welcome <?php echo $name;
									session_destroy(); 

									?></h1>
	

	</div>

<?php @include "index.html" ?>
</body>
</html>
