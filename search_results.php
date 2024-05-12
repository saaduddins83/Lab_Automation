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

</head>

<body>
    <?php
    include("./include/sidebar.php");
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

$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';
$searchCategory = isset($_GET['category']) ? $_GET['category'] : '';

switch ($searchCategory) {
    case 'product':
        $query = "SELECT `product_id`, `product_name`, `revision_no`, `manufacturing_no`, `category_name` FROM products_table WHERE product_id LIKE '%$searchQuery%' OR product_name LIKE '%$searchQuery%' OR category_name LIKE '%$searchQuery%' OR manufacturing_no LIKE '%$searchQuery%'";
        break;

    case 'test':
        // $query = "SELECT `testing_id`, `product_id`, `testing_code`, `testing_roll_number`, `test_result`, `remarks`, `tester_name` FROM testing_records WHERE testing_id LIKE '%$searchQuery%' OR product_id LIKE '%$searchQuery%' OR testing_code LIKE '%$searchQuery%' OR testing_roll_number LIKE '%$searchQuery%' OR test_result LIKE '%$searchQuery%' OR tester_name LIKE '%$searchQuery%'";
$query = "SELECT tr.`testing_id`, tr.`product_id`, p.`product_name`, tr.`testing_code`, tr.`testing_roll_number`, tr.`test_result`, tr.`remarks`, tr.`tester_name` FROM `testing_records` tr
JOIN `products_table` p ON tr.`product_id` = p.`product_id`
WHERE tr.`testing_id` LIKE '%$searchQuery%' OR tr.`product_id` LIKE '%$searchQuery%' OR p.`product_name` LIKE '%$searchQuery%' OR tr.`testing_code` LIKE '%$searchQuery%' OR tr.`testing_roll_number` LIKE '%$searchQuery%' OR tr.`test_result` LIKE '%$searchQuery%' OR tr.`tester_name` LIKE '%$searchQuery%'";

        break;

    default:
        echo "Invalid search category";
        exit; 
}

$result = mysqli_query($con, $query);

echo "<div class='recent-orders'>
        <h2>Search Results</h2>";

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <thead>
                <tr>";
    while ($fieldInfo = mysqli_fetch_field($result)) {
        echo "<th>{$fieldInfo->name}</th>";
    }
    echo "</tr>
            </thead>
            <tbody>";
// product table and category table doesn't have testing id thats why giving error
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            if ($key === 'remarks') {
                echo "<td class='remarks-cell'>
                        <button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#remarksModal{$row['testing_id']}'>View Remarks</button>
                      </td>";
            } else {
                echo "<td>$value</td>";
            }
        }
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "No matching results found.";
}

echo "</div>";

$result = mysqli_query($con, $query); // Reset the result pointer
while ($row = mysqli_fetch_assoc($result)) {
    foreach ($row as $key => $value) {
    if ($key === 'remarks') {
    echo "<div class='modal fade light-mode ' id='remarksModal{$row['testing_id']}' tabindex='-1' aria-labelledby='remarksModalLabel{$row['testing_id']}' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='remarksModalLabel{$row['testing_id']}'>Remarks</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                {$row['remarks']}
            </div>
        </div>
    </div>
</div>";
    }
    else {
        // echo "<td>$value</td>";
    }
}
}

?>


    </main>
    <!-- End of Main Content -->
    <?php

    include("./include/user-nav.php");
    include("./include/right-section.php");
    include("./include/script.php");
    ?>