<!DOCTYPE html>
<html lang="en">
	<?php require 'header.php' ?>
	<body>
		<?php require 'navigation.php' ?>
		<div class="container" id="Not_Ajax_Output">
			<h1>login.php</h1>
			<form action="verify.php" method="post">
				<p>User Name:</p><input type="text" placeholder="User Name" name="usernameInput" id="usernameInput">
				<p>Password:</p><input type="text1" placeholder="Password1" name="passwordInput1" id="passwordInput1">
				<button>Log In</button>
			</form>

		</div>

	</body>

	<?php require 'footer.php' ?>
</html>