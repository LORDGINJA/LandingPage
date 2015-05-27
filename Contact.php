<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet"  href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet"  href="css/bootstrap-theme.css">
    <link type="text/css" rel="stylesheet"  href="css/bootstrap-theme.css.map">
    <link type="text/css" rel="stylesheet"  href="css/bootstrap.css.map">
	<title>Maxwell Karp</title>
</head>
<header>
		Contact Me
	</header>
<body>
	
	<?php
			require_once(__DIR__ . "/model/config.php");

			//store email, username, and password into the database
			$email = filter_input(INPUT_POST, "email" , FILTER_SANITIZE_EMAIL);
			$username = filter_input(INPUT_POST, "username" , FILTER_SANITIZE_STRING);
			$password = filter_input(INPUT_POST, "password" , FILTER_SANITIZE_STRING);

			//creates the salt, which adds a bunch of random integers and letters to my password, making it harder to guess
			$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
			//combines the password and the salt to make an encrypted password
			$hashedPassword = crypt($password, $salt);
			//a query that inserts into the users' table
			$query = $_SESSION["connection"]->query("INSERT INTO users SET "
				//sets email
				. "email = '$email', "
				//sets username
				. "username = '$username', "
				//sets password
				. "password = '$hashedPassword', "
				//sets salt
				. "salt = '$salt'");

			//checks to see if the query is working
			if ($query) {
				echo "<div id='message'>";
				echo "You have successfully created the user: $username";
				echo "</div>";
			}
			//if the query isnt working, says why not
			else{
				echo "<p>" . $_SESSION["connection"]->error . "</p>";
			}

		?>


		  <div role="tabpanel" id="thingamabob">

    <ul class="nav nav-tabs" role="tablist" id="myTab">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
  </ul>

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">...</div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

  <script>
    $(function () {
      $('#myTab a:last').tab('show')
    })
  </script>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
</html>