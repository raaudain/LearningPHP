<?php 
// Submitted data becomes associative array
// If the post was submitted...
if (isset($_POST["submit"])) {
    // Pull data from post
    $username = $_POST["username"];
    $password = $_POST["password"];

    $name = ["Ramon", "Edwin", "Sam", "Peter", "Don", "Tom"];

    $mininum = 5;
    $maximum = 10;

    if (strlen($username) < $mininum) {
        echo "Username has to be longer than 5 characters";
    }

    if (strlen($username) > $maximum) {
        echo "Username cannot be longer than 10 characters";
    }

    if (!in_array($username, $name)) {
        echo "Invalid username";
    }
    else {
        echo "Welcome, " . $username . ".";
    }
}

?>