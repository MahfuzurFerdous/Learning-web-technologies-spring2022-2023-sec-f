<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['username'])) {
    header('location: login.php');
    exit;
}

// Get user's information from user.txt file
$users = file('user.txt');
$currentUser = null;

foreach($users as $user) {
    $userData = explode('|', $user);

    if($userData[0] == $_SESSION['username']) {
        $currentUser = $userData;
        break;
    }
}

// Display user's information on page
if($currentUser) {
    $name = $currentUser[0];
    $email = $currentUser[1];
    $gender = $currentUser[2];
    $dob = $currentUser[3];
    $user_type = $currentUser[5];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h2>Profile</h2>
    <table border="1">
        <tr>
            <td>Name:</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td><?php echo $dob; ?></td>
        </tr>
        <tr>
            <td>User Type:</td>
            <td><?php echo $user_type; ?></td>
        </tr>
    </table>
    <br>
    
</body>
</html>

<?php
} else {
    echo "User not found...";
}
?>
<button onclick="location.href='User.php'">Home</button>
