        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
        <!-- Include jQuery -->
        

        <script>

document.addEventListener("DOMContentLoaded", function () {

    var role = "<?php echo isset($_SESSION['role']) ? $_SESSION['role'] : ''; ?>";

    var adminDiv = document.getElementById("adminDiv");
    var employeeDiv = document.getElementById("employeeDiv");
    var adminHeading = document.getElementById("adminHeading");

    if (role === 'admin') {
        adminDiv.style.display = "flex";
        // employeeDiv.style.display = "none";
    } else if (role === 'employee') {
        adminDiv.style.display = "none";
        employeeDiv.style.display = "flex";
        adminHeading.style.display = "none";
    } else {
        console.log("No matching role found");
    }

    
    var svgIcon = document.getElementById("svg");
    if (svgIcon) {
        svgIcon.style.display = "inline";
    }
});



            $(document).ready(function() {
                // Trigger the change event on page load
                $('#category_name, #product_status, #product_name').change();

                // When category_name selection changes
                $('#category_name').change(function() {
                    var selectedCategory = $(this).val();

                    // Fetch product names based on the selected category using PHP
                    $.ajax({
                        type: 'POST',
                        url: 'code.php', // Use the same PHP file for handling AJAX request
                        data: {
                            selected_category: selectedCategory
                        },
                        success: function(response) {
                            // Update the product_name dropdown with the retrieved options
                            $('#product_name').html(response);

                            // Trigger the change event for product_name to update product_ids
                            $('#product_name').change();
                        }
                    });
                });

                // When product_name selection changes
                $('#product_name').change(function() {
                    var selectedProductName = $(this).val();

                    // Fetch product_ids based on the selected product_name using PHP
                    $.ajax({
                        type: 'POST',
                        url: 'code.php', // Use the same PHP file for handling AJAX request
                        data: {
                            request_type: 'product_ids', // Add this line to indicate the request type
                            product_name: selectedProductName
                        },
                        success: function(response) {
                            // Update the product_id dropdown with the retrieved options
                            $('#product_id').html(response);
                        }
                    });
                });

                // When product_status selection changes
                $('#product_status').change(function() {
                    var selectedStatus = $(this).val();

                    // Fetch revision_no and manufacturing_no based on the selected status using PHP
                    $.ajax({
                        type: 'POST',
                        url: 'code.php',
                        data: {
                            request_type: 'product_status',
                            product_status: selectedStatus,
                            selected_product: $('#product_name').val()
                        },
                        success: function(response) {
                            console.log(response);

                            // Parse the JSON response
                            var data = JSON.parse(response);

                            // Update the revision_no and manufacturing_no fields
                            $('#revision_no').val(data.revision_no);
                            $('#manufacturing_no').val(data.manufacturing_no);
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                });
                // When product_name selection changes
                $('#category_name').change(function() {
                    var selectedCategoryName = $(this).val();

                    // Fetch product_ids based on the selected product_name using PHP
                    $.ajax({
                        type: 'POST',
                        url: 'code.php', // Use the same PHP file for handling AJAX request
                        data: {
                            request_type: 'category_names', // Add this line to indicate the request type
                            category_name: selectedCategoryName
                        },
                        success: function(response) {
                            // Update the product_id dropdown with the retrieved options
                            $('#testing_roll_no').val(response);
                        }
                    });
                });


            });
        </script>

        <script src="orders.js"></script>
        <script src="index.js"></script>
        </body>

        </html>