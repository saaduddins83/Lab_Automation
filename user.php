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

        $name_query = "SELECT fname FROM `role` WHERE email = '" . $_SESSION['email'] . "'";
        $name_result = mysqli_query($con, $name_query);

        if ($row = mysqli_fetch_assoc($name_result)) {
            $name = $row['fname'];

            $query = "SELECT 
                tr.testing_id,
                p.product_name,
                tr.testing_roll_number,
                tr.test_result,
                tr.remarks,
                tr.tester_name
              FROM 
                products_table p
              JOIN 
                testing_records tr ON p.product_id = tr.product_id
              WHERE 
                tr.tester_name = '$name'";

            $result = mysqli_query($con, $query);

            echo "<div class='recent-orders'>
            <h2>Recent Tests by $name</h2>";

            if ($result && mysqli_num_rows($result) > 0) {
                echo "<table border='1'>
                <thead>
                    <tr>
                        <th>Testing ID</th>
                        <th>Product Name</th>
                        <th>Testing Roll Number</th>
                        <th>Result</th>
                        <th>Remarks</th>
                        <th>Tester Name</th>
                    </tr>
                </thead>
                <tbody>";

                while ($row = mysqli_fetch_assoc($result)) {
                    $resultClass = ($row['test_result'] === 'Declined') ? 'danger' : (($row['test_result'] === 'Pending') ? 'warning' : 'primary');
                    echo "<tr>
                    <td>{$row['testing_id']}</td>
                    <td>{$row['product_name']}</td>
                    <td>{$row['testing_roll_number']}</td>
                    <td class={$resultClass}>{$row['test_result']}</td>
                    <td class='remarks-cell'>
                    <button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#remarksModal{$row['testing_id']}'>View Remarks</button>
                </td>
                    <td>{$row['tester_name']}</td>
                  </tr>";
                    // Modal for each row
                    echo "<div class='modal fade light-mode' id='remarksModal{$row['testing_id']}' tabindex='-1' aria-labelledby='remarksModalLabel{$row['testing_id']}' aria-hidden='true'>
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
            } else {
                echo "No test results found for $name";
            }
        } else {
            echo "No Tester Name found";
        }
        ?>
        </tbody>
        </table>
        <!-- <a href="#">Show All</a> -->
        </div>
    </main>
    <!-- End of Main Content -->
    <?php

    include("./include/user-nav.php");
    include("./include/right-section.php");
    include("./include/script.php");
    ?>