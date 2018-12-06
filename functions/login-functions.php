<?php
require('/var/www/students/team8/saving-paws/database/db_credentials.php');
require_once('/var/www/students/team8/saving-paws/database/database.php');

$db = db_connect();

# Returns TRUE if given password is correct password for this user name.
function is_password_correct($username, $password) {
    try {
        $conn = db_connect();
        $stmt = $conn->prepare("SELECT Password,Salt FROM Users WHERE Username = :username");
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))    {
            $salt = $row["Salt"];
            $password_from_db = $row["Password"];
        }
            $salted_and_hashed_password = hash_password($password, $salt);
            return $salted_and_hashed_password == $password_from_db;
        //}
        //else {
            return false;
        //}
    }
    catch (PDOException $e) {

        echo $e;
    }
}

function user_exists($username) {
    $conn = db_connect();
    $stmt = $conn->prepare('SELECT Username from Users WHERE Username=:username');
    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    $stmt->execute();
    db_disconnect($conn);
    return($stmt->rowCount() > 0);
}

function is_password_valid($password) {
    // needs to have a letter, number, and special character
    return preg_match("/^(?=.*[a-z0-9])[a-z0-9!@#$%&*.]{7,}$/i", $password);
}

function generate_salt() {
    $salt = uniqid(mt_rand(), true);
    return $salt;
}

function hash_password($password, $salt) {
    $hashed_password = crypt($password, '$2y$12$'.$salt.'$');
    return $hashed_password;
}

function create_account($username, $password, $salt) {

    if (!user_exists($username)) {
        if (is_password_valid($password)) {
            try {
                $conn = db_connect();
                $hashed_pass = hash_password($password, $salt);
                $stmt = $conn->prepare("INSERT INTO Users (Username,Password,Salt) VALUES (:username,:password,:salt)");
                $stmt->bindParam(":username", $username, PDO::PARAM_STR);
                $stmt->bindParam(":password", $hashed_pass, PDO::PARAM_STR);
                $stmt->bindParam(":salt", $salt, PDO::PARAM_STR);
                $stmt->execute();
                db_disconnect($conn);
            }
            catch (PDOException $e) {
                echo $e;
            }
            return "User created successfully.";
        }
        else {
            return "Password is invalid! You must have at least one letter, one number, and one special character.";
        }
    }
    else {
        return "User does not exist!";
    }
}

function login($username, $password) {
    return (user_exists($username) && is_password_correct($username, $password));
}

function get_user_role($username) {
    try {
        $role = "";
        $conn = db_connect();
        $stmt = $conn->prepare("SELECT Role from Users WHERE Username = :username");
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_LAZY))    {
            $role = $row["Role"];
        }
        db_disconnect($conn);
        return $role;
    }
    catch (PDOException $e) {
        echo $e;
    }
}

# Redirects current page to login.php if user is not logged in.
function ensure_logged_in() {
    if (!isset($_SESSION["name"])) {
        redirect("login.php", "You must log in before you can view that page.");
    }
}

# Redirects current page to the given URL and optionally sets flash message.
function redirect($url) {

    header("Location: $url");
    die();
}
