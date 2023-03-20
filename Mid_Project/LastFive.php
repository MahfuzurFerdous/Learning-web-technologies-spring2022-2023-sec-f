<?php
// Read the contents of the history.txt file
$contents = file_get_contents('history.txt');

// Split the contents into an array of transactions
$transactions = explode("\n", $contents);

// Reverse the array so the most recent transactions are at the beginning
$transactions = array_reverse($transactions);

// Get the last five transactions
$last_five = array_slice($transactions, 0, 6);

// Display the last five transactions in a table
if(count($last_five) > 0) {
    echo "<h2>Last Five Transactions</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Date</th><th>Description</th><th>Amount</th><th>Path</th></tr>";
    foreach($last_five as $transaction) {
        // Split the transaction into its components
        $components = explode(",", $transaction);
        echo "<tr><td>".$components[0]."</td><td>".$components[1]."</td><td>".$components[2]."</td><td>".$components[3]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p>No transactions found.</p>";
}
?>
<button onclick="location.href='User.php'">Home</button>
<button onclick="location.href='TransactionHistory.php'">Back</button>
