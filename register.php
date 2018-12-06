<?php include("shared/header.php"); ?>
    <!-- put custom style sheets here -->
<link href="css/login.css" rel="stylesheet" type="text/css">
<?php include("shared/navbar.php"); ?>
<?php include("/var/www/students/lorenk45/saving-paws/functions/login-functions.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
$salt =  generate_salt();
	if( create_account($_POST["username"],$_POST["password"],$salt) == "User created successfully."){
		?><p>Succefull register</p><?php
	}
	else if (user_exists($_POST["username"])) {
		?><p>Username Exists Try a Different One</p><?php
	}
	else { ?>
					<p>Incorrect combination either password is invalid or username </p><?php
					
				}
	
}

 ?>  




 

<div class="login-page">
    <div class="form">
        <form class="login-form" action="" method="POST">
            <label for="username">Username: </label>
            <input type="text" class="form-control" placeholder="username" name="username" /><br>
            <label for="password">Password: </label>
            <input type="password" class="form-control" placeholder="password" name="password" />
            <button type="submit" class="btn btn-primary">Register</button>
			<p class="message">already registered? <a href="login.php">Sign in</a></p>
        </form>
    </div>
</div>
<!-- put custom js here -->
<script type="text/javascript" src="login.js"></script>
