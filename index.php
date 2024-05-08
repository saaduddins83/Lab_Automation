<?php
session_start();

if (!isset($_SESSION['role'])) {
    header("Location: signin.php");
    exit();
}

include "db_connection.php";
$query = "SELECT 
p.product_id,
p.product_name,
tr.testing_id,
tr.test_result,
tr.tester_name
FROM 
products_table p
JOIN 
testing_records tr ON p.product_id = tr.product_id";
$result = mysqli_query($con, $query);
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
include ("./include/main.php");
include ("./include/user-nav.php");
include ("./include/right-section.php");
include ("./include/script.php");

?>