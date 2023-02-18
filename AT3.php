<?php
function check($number){
    if($number % 2 == 0){
        echo "Even Number"; 
    }
    else{
        echo "Odd Number";
    }
}
  
$number = 20;
check($number)
?>