<?php
session_start();

//Check if the user is logged in
if (!isset($_SESSION['username']) || $_SESSION['user_type'] !== 'user') {
    // If not, redirect to the login page
    header('location: login.php');
    exit();
}

//Display a welcome message to the user
echo "Welcome, " . $_SESSION['username'] . "!"."<br>";
?>

<table border="1">
    <tr>
        <td><button onclick="location.href='Profile.php'">Profile</button></td>
        <td><button onclick="location.href='Bill_Payment.php'">Bill Payment</button></td>
        <td><button onclick="location.href='DepositForm.php'">Deposit Money</button></td>
    </tr>
    <tr>
        <td><button onclick="location.href='SendMoneyForm.php'">Send Money</button></td>
        <td><button onclick="location.href='TransactionHistory.php'">Transaction History</button></td>
        <td><button onclick="location.href='ContactUs.php'">Contact Us</button></td>
    </tr>
</table>

<button onclick="location.href='LogOut.php'">LogOut</button>
