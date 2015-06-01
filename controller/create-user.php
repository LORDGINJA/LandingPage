<!DOCTYPE html>
<html>
<head>
  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet"  href="/../css/bootstrap.css">
    <link type="text/css" rel="stylesheet"  href="/../css/bootstrap-theme.css">
    <link type="text/css" rel="stylesheet"  href="/../css/bootstrap-theme.css.map">
    <link type="text/css" rel="stylesheet"  href="/../css/bootstrap.css.map">
    <link type="text/css" rel="stylesheet"  href="/../css/fin.css">
    <title>Maxwell Karp</title>
	<title></title>
</head>
<header>
	<h1>Thank You</h1>
</header>

<body>

	<?php
		require_once(__DIR__ . "/../connect.php"); 
		require_once(__DIR__ . "/../model/config.php");

		//store email, username, and password into the database
		$name = filter_input(INPUT_POST, "name" , FILTER_SANITIZE_EMAIL);
		$number = filter_input(INPUT_POST, "number" , FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, "email" , FILTER_SANITIZE_STRING);
		$other = filter_input(INPUT_POST, "other" , FILTER_SANITIZE_STRING);

		//a query that inserts into the users' table
		$query = $_SESSION["connection"]->query("INSERT INTO contact SET "
			//sets email
			. "email = '$email', "
			//sets username
			. "name = '$name', "
			//sets password
			. "number = '$number', "
			//sets salt
			. "other = '$other'");

		//checks to see if the query is working
		if ($query) {
			echo "<div id='message'>";
			echo "I will contact you ($name) as soon as possible";
			echo "</div>";
		}
		//if the query isnt working, says why not
		else{
			echo "<p>" . $_SESSION["connection"]->error . "</p>";
		}

	?>

	<div class="links">
		<ul>
			<button type="button" class="btn btn-default btn-lg link">
				<a href="<?php echo $path . "Contact.php"?>"><span class="glyphicon glyphicon-home "></span></p> Back </a>
			</button>
		</ul>
	</div>
</body>
</html>