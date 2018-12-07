<?php

include("shared/header.php");
include("shared/navbar.php");
if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin")
{
	var_dump($_SESSION);
    //header("location: http://webdev.cs.uwosh.edu/students/team8/saving-paws/index.php");
	//exit;
}
include("database/database.php");

$success = true;
function getInput($name) {
	$input = htmlspecialchars($_POST[$name]);
	if ($input != "") {
		return $input;
	} else {
		$success = false;
	}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = getInput("name");
	$gender = getInput("gender");
	$isDog = getInput("species") == "dog" ? chr(1) : chr(0);
	$breed = getInput("breed");
	//$birthDate = date("Y-m-d", strtotime(getInput("birthDate")));
	$birthDate = getInput("birthDate");
	$size = getInput("size");
	$color = getInput("color");
	$fileName = "";
	if(is_uploaded_file($_FILES["image"]["tmp_name"]) && getimagesize($_FILES["image"]["tmp_name"]) != false) {
		$uploads = "/var/www/students/team8/saving-paws/images/uploads";
		$fileName = $_FILES["image"]["name"];
		//$fileName = basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $uploads."/".$fileName);
	} else {
		$success = false;
	}
	$fixed = chr(0);
	if (key_exists("checkbox1", $_POST) && $_POST["checkbox1"] == "fixed") {
			$fixed = chr(1);
	}
	$declawed = chr(0);
	if (key_exists("checkbox2", $_POST) && $_POST["checkbox2"] == "declawed") {
			$declawed = chr(1);
	}
	$houseTrained = chr(0);
	if (key_exists("checkbox3", $_POST) && $_POST["checkbox3"] == "housetrained") {
			$houseTrained = chr(1);
	}
	$site = getInput("site");
	$location = getInput("location");
	//$intakeDate = date("Y-m-d", strtotime(getInput("intakeDate")));
	$intakeDate = getInput("intakeDate");
	$description = getInput("description");
	if ($success) {
		$db = db_connect();
		$db->exec("INSERT INTO Animals (Name, Gender, IsDog, Breed, BirthDate, Color, Size, Picture, 
		Fixed, Declawed, Housetrained, Site, Location, IntakeDate, Description) VALUES (".$db->quote($name).", ".
		$db->quote($gender).", ".$db->quote($isDog).", ".$db->quote($breed).", ".$db->quote($birthDate).", ".
		$db->quote($color).", ".$db->quote($size).", ".$db->quote("http://webdev.cs.uwosh.edu/students/team8/saving-paws/images/uploads/$fileName")
		.", ".$db->quote($fixed).", ".$db->quote($declawed).", ".$db->quote($houseTrained).", ".$db->quote($site).", ".
		$db->quote($location).", ".$db->quote($intakeDate).", ".$db->quote($description).");");
		db_disconnect($db);
	}
}
?>
<h2>Add an Animal Listing</h2>
<form action="add-listing.php" method="POST" enctype="multipart/form-data">
	<label for="name">Name:</label>
	<input type="text" name="name" id="name"><br>
	<label for="gender">Gender:</label>
	<input type="text" name="gender" id="gender"><br>
	<label for="species">Species:</label>
	<select name="species" id="species">
		<option value="dog">Dog</option>
		<option value="cat">Cat</option>
	</select><br>
	<label for="breed">Breed:</label>
	<input type="text" name="breed" id="breed"><br>
	<label for="birthDate">Birth Date:</label>
	<input type="date" name="birthDate" id="birthDate"><br>
	<label for="size">Size:</label>
	<input type="text" name="size" id="size"><br>
	<label for="color">Color:</label>
	<input type="text" name="color" id="color"><br>
	<div>
	<label for="image">Picture:</label>
	<input type="file" name="image" accept="image/*" id="image">
	</div>
	<label for="checkbox1"></label>
	<input type="checkbox" name="checkbox1" value="fixed" id="checkbox1"> Fixed<br>
	<label for="checkbox2"></label>
	<input type="checkbox" name="checkbox2" value="declawed" id="checkbox2"> Declawed<br>
	<label for="checkbox3"></label>
	<input type="checkbox" name="checkbox3" value="housetrained" id="checkbox3"> Housetrained<br>
	<label for="site">Site:</label>
	<input type="text" name="site" id="site"><br>
	<label for="location">Location:</label>
	<input type="text" name="location" id="location"><br>
	<label for="intakeDate">Intake Date:</label>
	<input type="date" name="intakeDate" id="intakeDate"><br>
	<label for="description">Description:</label>
	<input type="text" name="description" id="description"><br>
	<label for="submit"></label>
	<input type="submit" value="Submit" id="submit">
</form>
<?php if($_SERVER["REQUEST_METHOD"] == "POST" && $success){
	?><p>Listing successfully added.</p><?php
} else if($_SERVER["REQUEST_METHOD"] == "POST"){
	?><p>Listing could not be added. Make sure all form fields are filled out.</p><?php
}
include("/var/www/students/team8/saving-paws/shared/footer.php");?>