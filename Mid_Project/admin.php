<?php
session_start();

// Check if the user is logged in and has admin privileges
if (!isset($_SESSION['username']) || $_SESSION['user_type'] !== 'admin') {
    header('location: login.php');
    exit();
}

echo "Welcome, {$_SESSION['username']}! This is the admin page.";

// Add your admin-specific functionality here

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
        <td><button onclick="location.href='ContactUs.php'">Contuct Us</button></td>
    </tr>
</table>

<button onclick="location.href='LogOut.php'">LogOut</button>
