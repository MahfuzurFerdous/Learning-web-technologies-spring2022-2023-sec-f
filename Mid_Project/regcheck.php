<?php 
    session_start();
    if(isset($_REQUEST['register'])){

        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $gender = $_POST['gender']; 
        $dob = $_POST['dob'];
        $password = $_POST['password']; 
        $confirm_password = $_POST['confirm_password']; 
        $user_type = $_POST['user_type']; 

        // Validate name
        if(empty($name)) {
            echo "Please enter your name.<br>";
        } else if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
            echo "Only letters and space allowed in name.<br>";
        }

        // Validate email
        if(empty($email)) {
            echo "Please enter your email.<br>";
        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.<br>";
        }

        // Validate gender
        if(empty($gender)) {
            echo "Please select your gender.<br>";
        }

        // Validate date of birth
        if(empty($dob)) {
            echo "Please enter your date of birth.<br>";
        } else if(!preg_match("/^\d{4}-\d{2}-\d{2}$/", $dob)) {
            echo "Invalid date of birth format. Please use yyyy-mm-dd format.<br>";
        }

        // Validate password
        if(empty($password)) {
            echo "Please enter a password.<br>";
        } else if(strlen($password) < 8) {
            echo "Password must be at least 8 characters long.<br>";
        }

        // Validate confirm password
        if(empty($confirm_password)) {
            echo "Please confirm your password.<br>";
        } else if($password != $confirm_password) {
            echo "Passwords do not match.<br>";
        }

        // Validate user type
        if(empty($user_type)) {
            echo "Please select a user type.<br>";
        }

        // If all inputs are valid, save to file
        if(!empty($name) && !empty($email) && !empty($gender) && !empty($dob) && !empty($password) && !empty($confirm_password) && !empty($user_type) && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z ]*$/", $name) && preg_match("/^\d{4}-\d{2}-\d{2}$/", $dob) && ($password == $confirm_password)) {
            $file = fopen('user.txt', 'a');
            $user = $name."|".$email."|".$gender."|".$dob."|".$password."|".$user_type."\r";
            fwrite($file, $user);  
            fclose($file);
            header('location: login.php');
        }
    } else {
        echo "Invalid request...";
    }
?>
