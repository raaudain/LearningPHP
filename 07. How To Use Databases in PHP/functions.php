<?php include "db.php"; ?>

<?php

function createUser() {
    if(isset($_POST["submit"])) {
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        // Sanitizes files
        $username = mysqli_escape_string($connection, $username);
        $password = mysqli_escape_string($connection, $password);

        // Inserts into columns in users table
        $query = "INSERT INTO users(username, password) ";
        // ".=" concatentates queries
        $query .= "VALUES ('$username', '$password')";
    
        $result = mysqli_query($connection, $query);
    
        if (!$result) {
            die(mysqli_error($connection));
        }
    }
}



function showAllData(){
    global $connection; // Global brings in $connection from db.php

    $query = "SELECT * FROM users";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die("Query failed" . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"]; 
    
        echo "<option value='$id'>$id</option>";
    
    }
}

function updateTable() {
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];
    
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password'";
    $query .= "WHERE id = $id";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function deleteRows() {
    global $connection;
    $id = $_POST["id"];
    
    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

?>