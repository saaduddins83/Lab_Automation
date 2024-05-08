<?php
include "db_connection.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['selected_category'])) {
        // Handle category_name selection
        $selectedCategory = $_POST['selected_category'];

        $productNamesQuery = "SELECT DISTINCT product_name FROM products_table WHERE category_name = '$selectedCategory'";
        $result = mysqli_query($con, $productNamesQuery);

        $options = '';
        while ($row = mysqli_fetch_assoc($result)) {
            $productName = $row['product_name'];
            $options .= '<option value="' . $productName . '">' . $productName . '</option>';
        }

        mysqli_free_result($result);
        echo $options;
    } elseif (isset($_POST['product_name']) && $_POST['request_type'] == 'product_ids') {
        // Handle product_name selection for product_ids
        $selectedProductName = $_POST['product_name'];

        $productIdsQuery = "SELECT DISTINCT product_id FROM products_table WHERE product_name = '$selectedProductName'";
        $result = mysqli_query($con, $productIdsQuery);

        $options = '';
        while ($row = mysqli_fetch_assoc($result)) {
            $productId = $row['product_id'];
            $options .= '<option value="' . $productId . '">' . $productId . '</option>';
        }

        mysqli_free_result($result);
        echo $options;
    } elseif (isset($_POST['product_status']) && $_POST['request_type'] == 'product_status') {
        // Handle product_status selection
        $selectedStatus = $_POST['product_status'];
        $selectedProductName = $_POST['selected_product'];
        $data = [];

        $reManufacturedQuery = "SELECT revision_no, manufacturing_no FROM products_table WHERE product_name = '$selectedProductName' ORDER BY revision_no DESC LIMIT 1";
        $result = mysqli_query($con, $reManufacturedQuery);

        if (!$result) {
            die(mysqli_error($con));
        }

        while ($row = mysqli_fetch_assoc($result)) {
            $data['revision_no'] = $row['revision_no'];
            $data['manufacturing_no'] = $row['manufacturing_no'];
        }

        mysqli_free_result($result);
        echo json_encode($data);
    }
    elseif (isset($_POST['category_name']) && $_POST['request_type'] == 'category_names'){
        
        $category_name = $_POST["category_name"];
$categoryPrefix = strtoupper(substr($category_name, 0, 1)); // Get the first letter and convert to uppercase
// Generate a 3-digit random number
    $randomNumber = str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);
// Combine the prefix and random number
    $generatedtesting_roll_no = $categoryPrefix . $randomNumber;
    echo $generatedtesting_roll_no;
    }
    
    else {
        echo 'Invalid request';
    }
} else {
    echo 'Invalid request';
}



?>