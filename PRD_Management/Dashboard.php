<?php
session_start();


//Display a welcome message to the user
echo "Welcome, " . $_SESSION['username'] . "!"."<br>";
?>

<table border="1">
    <tr>
        <td><button onclick="location.href='Profile.php'">Profile</button></td>
        <td><button onclick="location.href='Feature.php'">Feature</button></td>
        <td><button onclick="location.href='Specification.php'">Specification</button></td>
        <td><button onclick="location.href='Diagram.php'">Diagram</button></td>
    </tr>
    <tr>
        <td><button onclick="location.href='ProductBacklog.php'">Product Backlog</button></td>
        <td><button onclick="location.href='TestFeedback.php'">Testing and Feedback</button></td>
        <td><button onclick="location.href='Report.php'">Report</button></td>
        <td><button onclick="location.href='ContactUs.php'">Contact Us</button></td>
    </tr>
</table>

<button onclick="location.href='LogOut.php'">LogOut</button>
