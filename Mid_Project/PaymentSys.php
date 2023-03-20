<?php
if(isset($_POST['submit'])) {
	// Read form data
	$amount = $_POST['amount'];
	$biller_id = $_POST['biller_id'];
	$option = $_POST['options'];

	// Validate form data
	if(empty($amount)) {
		echo "<p>Please enter a valid amount.</p>";
	} else if(empty($biller_id)) {
		echo "<p>Please enter a valid Biller ID.</p>";
	} else if(empty($option)) {
		echo "<p>Please select a payment option.</p>";
	} else {
		// Open history file for writing  
		$file = fopen("history.txt", "a");

		// Create transaction record with current date
		$record = date("Y-m-d").",Paid,".$amount.",".$biller_id.",".$option;

		// Write transaction record to file
		fwrite($file, $record.PHP_EOL);

		// Close file
		fclose($file);

		echo "<p>Payment of $amount taka made to Biller ID $biller_id with $option.</p>";
	}
}
?>
