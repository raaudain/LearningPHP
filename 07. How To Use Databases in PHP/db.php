<?php 

// Connect to server
// myqli_connect("Server_URL", "username", "password", "name_of_database")
$connection = mysqli_connect("localhost", "root", "", "loginapp");

if (!$connection) {
    // Error message
    die("Database connection failed");
}

?>