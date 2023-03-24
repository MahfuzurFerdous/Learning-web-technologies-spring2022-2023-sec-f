<?php
session_start();

// Check if the form has been submitted
if (isset($_POST['login'])) {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Check if the username and password are empty
    if (empty($username) || empty($password)) {
        // If either field is empty, show an error message
        echo "Please enter both username and password!";
    } else {
        // Read the user.txt file to check if the user exists
        $file = fopen('user.txt', 'r');
        $userExists = false;
        while (!feof($file)) {
            $line = fgets($file);
            $userData = explode('|', $line);
            // Check if the username and password match
            if (trim($userData[0]) === $username && trim($userData[4]) === $password) {
                $userExists = true;
                // Set session variables for the user
                $_SESSION['username'] = $username;
                
                // If "Remember me" was checked, set a cookie with the username
                if (isset($_POST['remember']) && $_POST['remember'] === "on") {
                    setcookie("username", $username, time() + (86400 * 30), "/");
                } else {
                    setcookie("username", "", time() - 3600, "/");
                }
                
                // Redirect the user to the appropriate page based on their user type
                header('location: dashboard.php');
                exit();
            }
        }
        fclose($file);
        // If the user doesn't exist, show an error message
        if (!$userExists) {
            echo "Invalid username/password combination!";
        }
    }
} else {
    // If the form hasn't been submitted, redirect to the login page
    header('location: login.php');
    exit();
}
?>
<button onclick="location.href='login.php'">Back</button>
