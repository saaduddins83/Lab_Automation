<?php
session_start();
include "db_connection.php";

if (isset($_POST["addproduct"])) {
    $product_name = $_POST["product_name"];
    $category_name = $_POST["category_name"];
    $revision_no = $_POST["revision_no"];
    $manufacturing_no = $_POST["manufacturing_no"];

    $product_category_query = "SELECT product_code FROM categories WHERE category_name = '$category_name'";
    $category_res = mysqli_query($con, $product_category_query);

    if (!$category_res) {
        die("Invalid product code");
    }

    $show_res = mysqli_fetch_assoc($category_res);
    $resultProductCode = $show_res['product_code'];
    if (!$resultProductCode) {
        die("Invalid category code");
    }

    $product_id = $resultProductCode . $revision_no . $manufacturing_no;
    echo "<script>console.log('Product Code: $product_id')</script>";

    $product_query = "INSERT INTO `products_table`(`product_id`, `product_name`, `revision_no`, `manufacturing_no`, `category_name`) VALUES ('$product_id','$product_name','$revision_no','$manufacturing_no','$category_name')";

    $result = mysqli_query($con, $product_query);

    header("Location: index.php");
 
}


if(isset($_POST['addtest'])){
    

    $test_code_query = "SELECT test_code FROM categories WHERE category_name = '$category_name'";
    $test_code_res = mysqli_query($con, $test_code_query);
    $show_res = mysqli_fetch_assoc($test_code_res);
    $resulttestCode = $show_res['test_code'];

    $product_id = $_POST["product_id"];
    $testing_roll_no = $_POST["testing_roll_no"];
    $test_result = $_POST["test_result"];
    $remarks = $_POST["remarks"];
    $tester_name = $_POST["tester_name"];

    $revision_no = $_POST["revision_no"];
    $manufacturing_no = $_POST["manufacturing_no"];
    
    $revision_update_query = "SELECT revision_no FROM products_table WHERE revision_no = '$revision_no'";
    $revision_update_query_result = mysqli_query($con, $revision_update_query);
    if(!$revision_update_query_result){
        $revision_update_query = "UPDATE `products_table` SET `revision_no`='$revision_no'";
        mysqli_query($con, $revision_update_query);
    }
    
    $manufacturing_update_query = "SELECT manufacturing_no FROM products_table WHERE manufacturing_no = '$manufacturing_no'";
    $manufacturing_update_query_result = mysqli_query($con, $manufacturing_update_query);
    if(!$manufacturing_update_query_result){
        $manufacturing_update_query = "UPDATE `products_table` SET `manufacturing_no`='$manufacturing_no'";
        mysqli_query($con, $manufacturing_update_query);
    }
    $product_category_query = "SELECT product_code FROM categories WHERE category_name = '$category_name'";
    $category_res = mysqli_query($con, $product_category_query);
    $show_res = mysqli_fetch_assoc($category_res);
    $resultProductCode = $show_res['product_code'];
    $testing_id = $resultProductCode . $revision_no . $resulttestCode . $testing_roll_no;
    $remanufacturing_status = ($test_result === "Fail") ? 1 : 0;

  $query = "INSERT INTO `testing_records`(`testing_id`, `product_id`, `testing_code`, `testing_roll_number`, `test_result`, `remarks`, `tester_name`, `remanufacturing_status`) VALUES ('$testing_id','$product_id','$resulttestCode','$testing_roll_no','$test_result','$remarks','$tester_name','$remanufacturing_status')";
mysqli_query($con,$query);
header("Location: index.php");
mysqli_close($con);
}

if (isset($_POST["btnregister"])) {
   
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $role = $_POST["role"];
        
    if($password === $cpassword){
        $query = "INSERT INTO `role`( `fname`, `lname`, `email`, `pass`, `role`) VALUES
                                           ('$fname','$lname','$email','$password','$role')";
        mysqli_query($con,$query);
        header("Location: signin.php");
    }
    else{
        echo "<script>alert('Password does not match!');
       </script>"; 
    }
   
}
if(isset($_POST["btnlogin"])) {
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    $query = "SELECT * FROM `role` WHERE email = '$email' AND pass = '$password'";
    $res = mysqli_query($con, $query);
    
    $row = mysqli_fetch_assoc($res);
    
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['pass'];
        $_SESSION['role'] = $row['role'];

        // Redirect to index.php
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Invalid')</script>";
    }
}

?>