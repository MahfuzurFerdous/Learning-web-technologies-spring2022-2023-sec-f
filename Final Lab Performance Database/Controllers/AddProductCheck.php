<?php 
    session_start();
    require_once '../models/ProductModel.php';

    if(isset($_REQUEST['save'])){


        $name = $_REQUEST['name']; 
        $buyingPrice = $_REQUEST['buyingprice '];
        $sellingPrice= $_REQUEST['sellingprice'];
        $display = $_REQUEST['display'];
      




        if($name == "" && $buyingPrice == "" && $sellingPrice == ""&& $display) {
            echo "Null value ..";
        }else{
            $product = ['name'=>$name,  'buyingprice'=>$buyingPrice,'sellingprice'=>$sellingPrice,'display'=>$display];
            $status = addProduct($product);
            
            if($status){
                echo "Product Added Successfully";
            }else{
                echo "DB error, please try again...";
            }

        }
    }else{
        echo "invalid request...";
    }
?>