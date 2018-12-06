<?php include("shared/header.php"); ?>
    <!-- put custom style sheets here -->
<link href="css/login.css" rel="stylesheet" type="text/css">
<?php include("shared/navbar.php"); ?>
<?php include("/var/www/students/lorenk45/saving-paws/saving-paws/functions/login-functions.php");
if (!isset($_SESSION["username"])) {
    if(isset($_POST["username"])) {

        if (user_exists($_POST["username"])) {
            if (is_password_correct($_POST["username"], $_POST["password"])) {

                $role = get_user_role($_POST["username"]);
                $_SESSION["username"] = $_POST["username"];     # start session, remember user info
                $_SESSION["role"] = $role;     # start session, remember user info
                redirect("index.php");
            } else { ?>
                <p><?= "Incorrect password" ?></p><?php
            }
        }
        else { ?>
            <p><?= "Incorrect username" ?></p><?php
        }
    }
}
else {
    redirect("index.php");
}?>
<div class="login-page">
    <div class="form">
        <form class="login-form" action="" method="POST">
            <label for="username">Username: </label>
            <input type="text" class="form-control" placeholder="username" name="username" /><br>
            <label for="password">Password: </label>
            <input type="password" class="form-control" placeholder="password" name="password" />
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
<!-- put custom js here -->
<script type="text/javascript" src="login.js"></script>
<?php include("shared/footer.php");?>
