<?php
    session_start();
    if(isset($_REQUEST['submit'])){

        $amount = $_REQUEST['amount'];
        $receiver_email = $_REQUEST['receiver_email'];

        if($amount == "" || $receiver_email == "") {
            echo "Null value ..";
            
        }
        else{
            $file = fopen('user.txt', 'r');
            $found = false;
            while(!feof($file)) {
                $line = fgets($file);
                $user_data = explode("|", $line);
                if($user_data[3] == $receiver_email) {
                    $found = true;
                    break;
                }
            }
            fclose($file);
            if($found) {
        // Open history file for writing
        $file = fopen("history.txt", "a");

        // Create transaction record with current date
        $record = date("Y-m-d").",sent,".$amount.",".$receiver_email;

        // Write transaction record to file
        fwrite($file, $record.PHP_EOL);

        // Close file
        fclose($file);

        echo "<p>Transfer of $amount taka made to $receiver_email.</p>";

        
    }
    

    else {
        echo "Receiver email not found";}
            
        }
    }

?>


