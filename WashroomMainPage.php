<!-- WASHROOMS NOW | HOME PAGE -->

<html>
	<head>
		<title>Washrooms Now</title>
		<link rel="stylesheet" type="text/css" href="WashroomCSS.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="jpg">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
	</head>

	<body>
		<?php
		//Connect and Check
			try{
				$conn = new PDO("mysql:dbname=imdb;host=localhost", "root", "amber1122");
		?>

		<div id = "one1">

			<h1> Washrooms Now! </h1>
			<h2> la la la </h2>

		</div>

		<div id = "two1">

			<div class = "mainLink"><a href="WashroomFind.php">FIND</a></div>

		</div>

		<div id = "three1">

			<div class = "mainLink"><a href="WashroomFavourites.php">FAVOURITES</a></div>

		</div>

		<div id = "four1">

			<div id = "bottomLink"><a href="url">la di da</a></div>

		</div>

		<?php
			}
			catch(PDOException $e)
			{
				echo "Connection failed: ".$e->getMessage();
				die();
			}
		?>

	</body>

</html>






