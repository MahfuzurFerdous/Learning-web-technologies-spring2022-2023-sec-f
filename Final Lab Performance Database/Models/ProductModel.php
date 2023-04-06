<?php 
    require_once('db.php');

    // function auth($email, $password){

    //     $con = getConnection();
    //     $sql = "SELECT * FROM userTable WHERE email='$email' AND password='$password'";
    //     $result = mysqli_query($con, $sql);
    //     $count = mysqli_num_rows($result);

    //     if($count == 1){
    //         return true;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }

    function addProduct($product){
        $con = getConnection();
        $sql = "insert into products values('{$product['name']}', '{$product['buyingprice']}', '{$product['sellingprice']}', '{$product['display']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function searchproduct($email){

        $con = getConnection();
        $sql = "SELECT * FROM products WHERE email = '$email'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0){
            // Fetch the data from the result set
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            return $row;
        }else{
   
            return "No results found";
        }

        mysqli_close($con);
    }
    

    

    
?>