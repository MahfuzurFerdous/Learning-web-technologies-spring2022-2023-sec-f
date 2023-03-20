<!DOCTYPE html>
<html>
<head>
	<title>Transaction History</title>
</head>
<body>
	<h1>Transaction History</h1>

	<form method="POST" action="">
		<label for="from_date">From:</label>
		<input type="date" id="from_date" name="from_date" required>
		<label for="to_date">To:</label>
		<input type="date" id="to_date" name="to_date" required>
		<button type="submit" name="submit">Search</button>
	</form>

	<?php
		if(isset($_POST['submit'])) {
			$from_date = $_POST['from_date'];
			$to_date = $_POST['to_date'];

			// Validate dates
			if($from_date > $to_date) {
				echo "<p>Error: Invalid date range</p>";
			} else {
				// Read transactions from file
				$transactions = array();
				$file = fopen("history.txt", "r");
				if ($file) {
				    while (($line = fgets($file)) !== false) {
				        $transaction = explode(",", $line);
				        if(count($transaction) == 4 && $transaction[0] >= $from_date && $transaction[0] <= $to_date) {
				        	array_push($transactions, $transaction);
				        }
				    }
				    fclose($file);
				}

				if(count($transactions) > 0) {
					// Output table of transactions
					echo "<table border='1'>";
					echo "<tr><th>Date</th><th>Description</th><th>Amount</th><th>Path</th></tr>";
				    foreach($transactions as $transaction) {
				        echo "<tr><td>".$transaction[0]."</td><td>".$transaction[1]."</td><td>".$transaction[2]."</td><td>".$transaction[3]."</td><td>".$transaction[4]."</td></tr>";
				    }
				    echo "</table>";

				} else {
					echo "<p>No transactions found for the selected date range.</p>";
				}
				
            }
        }
                ?>
				<button onclick="location.href='LastFive.php'">Last Five Transactions</button>
				
				<button onclick="location.href='user.php'">Home</button>

</body>
</html>
		
