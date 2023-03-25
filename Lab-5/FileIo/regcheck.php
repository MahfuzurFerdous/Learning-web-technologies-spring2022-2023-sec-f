<?php 
    session_start();
    if(isset($_REQUEST['register'])){

        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $gender = $_POST['gender']; 
        $dob = $_POST['dob'];
        $username = $_POST['username']; 
        $password = $_POST['password']; 
        $confirm_password = $_POST['confirm_password']; 

        $errors = array();

        // Validate name
        if(empty($name)){
            $errors[] = "Name is required";
        }

        // Validate email
        if(empty($email)){
            $errors[] = "Email is required";
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Invalid email format";
        }

        // Validate gender
        if(empty($gender)){
            $errors[] = "Gender is required";
        }

        // Validate date of birth
        if(empty($dob)){
            $errors[] = "Date of birth is required";
        }

        // Validate username
        if(empty($username)){
            $errors[] = "Username is required";
        }else{
            $file = fopen('user.txt', 'r');
            while(!feof($file)){
                $line = fgets($file);
                $existing_user = explode('|', $line)[0];
                if($username == $existing_user){
                    $errors[] = "Username already exists";
                    break;
                }
            }
            fclose($file);
        }

        // Validate password
        if(empty($password)){
            $errors[] = "Password is required";
        }else if(strlen($password) < 8){
            $errors[] = "Password should be at least 8 characters long";
        }

        // Validate confirm password
        if(empty($confirm_password)){
            $errors[] = "Confirm password is required";
        }else if($password != $confirm_password){
            $errors[] = "Password and confirm password do not match";
        }

        // Check for errors and display them
        if(!empty($errors)){
            foreach($errors as $error){
                echo "<p>$error</p>";
            }
        }else{
            $file = fopen('user.txt', 'a');
            $user = $username."|".$email."|".$gender."|".$dob."|".$password."\r\n";
            fwrite($file, $user);
            fclose($file);
            header('location: login.php');
        }
    }else{
        echo "Invalid request...";
    }
?>
