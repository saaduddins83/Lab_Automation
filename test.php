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
// Fetch and display Test Records
$testRecordsQuery = "SELECT testing_id, product_id, testing_roll_number, test_result, remarks, tester_name FROM testing_records";
$testRecordsResult = mysqli_query($con, $testRecordsQuery);
?>

<div class="recent-orders">
    <h2>Test Records</h2>
    <?php
    if ($testRecordsResult && mysqli_num_rows($testRecordsResult) > 0) {
        echo "<table border='1'>
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Testing ID</th>
                        <th>Product ID</th>
                        <th>Testing Roll Number</th>
                        <th>Test Result</th>
                        <th>Remarks</th>
                        <th>Tester Name</th>
                    </tr>
                </thead>
                <tbody>";

        $serialNo = 1;
        while ($testRecordsRow = mysqli_fetch_assoc($testRecordsResult)) {
            echo "<tr>
                    <td>{$serialNo}</td>
                    <td>{$testRecordsRow['testing_id']}</td>
                    <td>{$testRecordsRow['product_id']}</td>
                    <td>{$testRecordsRow['testing_roll_number']}</td>
                    <td>{$testRecordsRow['test_result']}</td>
                    <td class='remarks-cell'>
                    <button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#remarksModal{$testRecordsRow['testing_id']}'>View Remarks</button>
                    </td>
                    <td>{$testRecordsRow['tester_name']}</td>
                  </tr>";
             // Modal for each row
    echo "<div class='modal fade light-mode ' id='remarksModal{$testRecordsRow['testing_id']}' tabindex='-1' aria-labelledby='remarksModalLabel{$testRecordsRow['testing_id']}' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='remarksModalLabel{$testRecordsRow['testing_id']}'>Remarks</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                {$testRecordsRow['remarks']}
            </div>
        </div>
    </div>
</div>";
                  $serialNo++;

        }

        echo "</tbody></table>";
    } else {
        echo "No Test Records found";
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