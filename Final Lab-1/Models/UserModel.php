<?php 

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    $sql = "INSERT INTO USERTABLE";
    $result = mysqli_query($con, $sql);
    //print_r($result);
    //$user = mysqli_fetch_assoc($result);
    //print_r($user);
    
    while($row = mysqli_fetch_assoc($result)){
        print_r($row); echo "<br>";
    }


?>