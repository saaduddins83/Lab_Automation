<?php
session_start();
include("db_connection.php");

if (!isset($_SESSION['role'])) {
    header("Location: signin.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>SRS Electrical Appliances</title>
   <style>
    table{
        margin-bottom: 15px;
    }
   </style>
</head>

<body>
<?php
include ("./include/sidebar.php");
?>
<main>
<div class="header-container d-flex justify-content-between">
            <h1>Analytics</h1>
            <div class="search ">
                <form action="search_results.php" method="GET" class='form-inline'>
                    <div class="input-group">
                        <input type='text' id='search' class="form-control search-form" name="query" placeholder="Search">
                        <select class="form-control custom-select search-select" name="category" style="max-width: 170px; max-height: 34px;">
                        <option value="" selected disabled hidden>Choose..</option>    
                        <option value="product">Product</option>
                            <option value="category">Category</option>
                            <option value="test">Test</option>
                            
                        </select>
                        <span class="input-group-btn" style="width:39px">
                            <button id="search-this" type="submit" class="pull-right btn btn-default search-btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
            <?php
// Fetch and display Product Categories
$productCategoryQuery = "SELECT category_name, product_code FROM categories";
$productCategoryResult = mysqli_query($con, $productCategoryQuery);
?>

<div class="recent-orders">
    <h2>Product Categories</h2>
    <?php
    if ($productCategoryResult && mysqli_num_rows($productCategoryResult) > 0) {
        echo "<table border='1'>
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Category Name</th>
                        <th>Product Code</th>
                    </tr>
                </thead>
                <tbody>";

        $serialNo = 1;
        while ($productCategoryRow = mysqli_fetch_assoc($productCategoryResult)) {
            echo "<tr>
                    <td>{$serialNo}</td>
                    <td>{$productCategoryRow['category_name']}</td>
                    <td>{$productCategoryRow['product_code']}</td>
                  </tr>";
            $serialNo++;
        }

        echo "</tbody></table>";
    } else {
        echo "No Product Categories found";
    }
    ?>
</div>

<?php
// Fetch and display Test Categories
$testCategoryQuery = "SELECT test_description, test_code FROM categories";
$testCategoryResult = mysqli_query($con, $testCategoryQuery);
?>

<div class="recent-orders">
    <h2>Test Categories</h2>
    <?php
    if ($testCategoryResult && mysqli_num_rows($testCategoryResult) > 0) {
        echo "<table border='1'>
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Test Description</th>
                        <th>Test Code</th>
                    </tr>
                </thead>
                <tbody>";

        $serialNo = 1;
        while ($testCategoryRow = mysqli_fetch_assoc($testCategoryResult)) {
            echo "<tr>
                    <td>{$serialNo}</td>
                    <td>{$testCategoryRow['test_description']}</td>
                    <td>{$testCategoryRow['test_code']}</td>
                  </tr>";
            $serialNo++;
        }

        echo "</tbody></table>";
    } else {
        echo "No Test Categories found";
    }
    ?>
</div>

        </main>
        <!-- End of Main Content -->
<?php

include ("./include/user-nav.php");
include ("./include/right-section.php");
include ("./include/script.php");
?>