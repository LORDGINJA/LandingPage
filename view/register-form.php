<?php
	require_once(__DIR__ ."/../model/config.php");
?>

<h1>REGISTER</h1>
<!-- goes to create-user page and displays whatevers there -->   <!-- used to create users -->
<form class="register" method="post" action="<?php echo $path . "controller/create-user.php";?> ">
	<div id="username">
		<!-- input box for user's username  -->
		<label for="name">Name: </label>
		<input type="text" name="username"/>
	</div>
	<div id="number">
		<!-- input box for user's username  -->
		<label for="name">Number: </label>
		<input type="integer" name="number"/>
	</div>
	<div id="email">
		<!-- input box for user's email -->
		<label for="email">Email: </label>
		<input type="text" name="email"/>
	</div>
	<div id="other">
		<!-- input box for user's username  -->
		<label for="name">Other: </label>
		<input type="text" name="other" />
	</div>
	<div>
		<!-- button to submit previous three input values -->
		<button type="submit" class="btn btn-primary btn-lg" class="headingbutton" data-toggle="modal" data-target="#myModal">
			Submit
		</button>
	</div>
</form>

