<?php
if(isset($_POST['submit'])) {
	// Read form data
	$amount = $_POST['amount'];
	$option = $_POST['deposit_option'];

	// Validate form data
	if(empty($amount)) {
		echo "<p>Please enter a valid amount.</p>";
	} else if(empty($option)) {
		echo "<p>Please select a deposit option.</p>";
	} else {
		// Open history file for writing  
		$file = fopen("history.txt", "a");

		// Create transaction record with current date
		$record = date("Y-m-d").",Deposited,".$amount.",".$option.",";

		// Write transaction record to file
		fwrite($file, $record.PHP_EOL);

		// Close file
		fclose($file);

		echo "<p>Deposit of $amount taka made with $option.</p>";
	}
}
?>

