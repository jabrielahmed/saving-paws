<?php

require_once('db_credentials.php');

/* Connect to the database with the credentials given in the file above
   Return a handle to the PDO instance or output an error message and exit (stop execution)
 */
function db_connect() {

    try {
        $conn = new PDO("mysql:host=". DB_SERVER . ";dbname=" . DB_NAME, DB_USER, DB_PWD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

}

/* disconnect from the database, if needed
 */
function db_disconnect($db_connection) {
    $db_connection = null;
}

?>