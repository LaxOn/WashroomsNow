<!-- WASHROOMS NOW | FINDER PAGE -->

<html>
	<head>
		<title>Washrooms Now</title>
		<link rel="stylesheet" type="text/css" href="WashroomCSS.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="jpg">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
		<script src = "GroceryJS.js"></script>
	</head>

	<body>
		<?php
		//Connect and Check
			try{
				$conn = new PDO("mysql:dbname=imdb;host=localhost", "root", "amber1122");
		?>

		<div id = "one2">

			<h1> Washrooms Now! </h1>
			<h2> la la la </h2>

		</div>

		<div id = "two2">

			<div id = "features">

				<div class = "left">

					<h3>Features</h3>

				</div>

				<div class = "right">

					<button onclick = "change()" value = "0" class = "feature" style="font-size:40px"><i class="fa fa-transgender-alt"></i></button>
					<button onclick = "change()" value = "1" class = "feature" style="font-size:40px"><i class="fa fa-venus"></i></button>
					<button onclick = "change()" value = "2" class = "feature" style="font-size:40px"><i class="fa fa-mars"></i></button>
					<button onclick = "change()" value = "0" class = "feature" style="font-size:40px"><i class="fa fa-transgender-alt"></i></button>
					<button onclick = "change()" value = "0" class = "feature" style="font-size:40px"><i class="fa fa-transgender-alt"></i></button>


				</div>

			</div>

		</div>

		<div id = "three2">

			<div id = "access">

				<div class = "left">

					<h3>Accessibility</h3>

				</div>

				<div class = "right">

					<button onclick = "change()" value = "0" class = "access" style="font-size:40px"><i class="fa fa-wheelchair-alt"></i></button>

				</div>
			</div>

		</div>

		<div id = "four2">

			<div id = "map">
				<?php
					include(mapping.html);
				?>

			</div>

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
