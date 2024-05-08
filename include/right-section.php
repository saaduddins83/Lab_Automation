<?php
include "db_connection.php";
?>
 <script>

</script>

<div class="user-profile">
                <div class="logo">
                    <img src="images/logo-02.png">
                    <h2>SRS</h2>
                    <p>Electrical Appliances</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header" id="adminHeading">
                    <h2>Product Information</h2>
                    <span class="material-icons-sharp">
                    inventory_2
                    </span>
                </div>
                <div class="notification a" id="adminDiv" data-bs-toggle="modal" data-bs-target="#productModal">
                    <div class="icon" id="svg">
                        <svg  xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="m59.71 25.517-5.4-5.4a1.2 1.2 0 0 0-.26-.188l-9.321-4.66a1 1 0 0 0-.895 1.789l7.532 3.766L32 30.507l-19.367-9.683 7.532-3.766a1 1 0 0 0-.895-1.79L9.95 19.93a1.207 1.207 0 0 0-.26.188l-5.402 5.4a1.008 1.008 0 0 0 .26 1.602l4.849 2.425v18.284a1 1 0 0 0 .552.895l21.603 10.801a1.001 1.001 0 0 0 .895 0L54.05 48.723a1 1 0 0 0 .553-.895V29.544l4.848-2.425a1.008 1.008 0 0 0 .26-1.602zm-53.026.434 3.91-3.91 19.717 9.858-3.91 3.91zM31 57.01 11.397 47.21V30.544L26.15 37.92a1.003 1.003 0 0 0 1.155-.187l3.693-3.694zm21.603-9.801L33 57.01V34.04l3.694 3.694a1.001 1.001 0 0 0 1.154.187l14.754-7.377zm-15.004-11.4-3.91-3.91 19.717-9.86 3.91 3.91z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                <path d="M27.889 14.823h3.11v3.111a1 1 0 1 0 2 0v-3.111h3.112a1 1 0 0 0 0-2H33V9.71a1 1 0 1 0-2 0v3.112h-3.111a1 1 0 0 0 0 2z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                <path d="M32 23.324a9.512 9.512 0 0 0 9.501-9.501c-.522-12.605-18.483-12.601-19.003 0A9.512 9.512 0 0 0 32 23.324zm0-17.002a7.51 7.51 0 0 1 7.5 7.5c-.351 9.929-14.651 9.926-15.002 0A7.51 7.51 0 0 1 32 6.323z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Add Product</h3>
                        </div>
                        <span class="arrow right "></span>
                        <!-- <span class="material-icons-sharp">
                        chevron_right
                        </span> -->
                    </div>
                </div>
                <!-- Product Modal Start -->
                <div class="modal light-mode" id="productModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Add Product</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form method="post" action="form.php">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="first_name">Product Name:</label>
                                            <input type="text" class="form-control" name="product_name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="product_code">Product Category:</label>
                                            <div class="custom-select-wrapper">

                                                <select class="form-control custom-select" name="category_name"  required>
                                                    <option value="" selected disabled hidden>Choose..</option>

                                                    <?php
                                                    $category_name = "SELECT DISTINCT category_name, product_code FROM categories";
                                                    $category_res = mysqli_query($con, $category_name);
                                                    while ($show_res = mysqli_fetch_assoc($category_res)) {
                                                        $categories = $show_res["category_name"];
                                                        echo '<option value="' . $show_res['category_name'] . '">' . $categories . '</option>';
                                                    }

                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="last_name">Revision No:</label>
                                            <input type="text" class="form-control" name="revision_no" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="first_name">Manufacturing No:</label>
                                            <input type="text" class="form-control" name="manufacturing_no" required>
                                        </div>
                                    </div>

                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="addproduct" class="btn btn-success">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Product Modal End -->

                <div class="header">
                    <h2>Test Information</h2>
                    <span class="material-icons-sharp">
                    science
                    </span>
                </div>

                <div class="notification a deactive " id="employeeDiv" data-bs-toggle="modal" data-bs-target="#TestModal">
                    <div class="icon" id="svg">
                        <svg  xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <rect width="682.667" height="682.667" rx="136.5334" ry="136.5334" fill="#ff3d5f" shape="rounded"></rect>
                            <g transform="matrix(0.9800000000000011,0,0,0.9800000000000011,6.826649627685015,6.826690292358023)">
                                <defs stroke-width="24" style="stroke-width: 24;">
                                    <clipPath id="a" clipPathUnits="userSpaceOnUse" stroke-width="24" style="stroke-width: 24;">
                                        <path d="M0 512h512V0H0Z" fill="#000000" opacity="1" data-original="#000000" class="" stroke-width="24" style="stroke-width: 24;"></path>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)" stroke-width="24" style="stroke-width: 24;">
                                    <path d="M0 0a149.617 149.617 0 0 0 47.75 25.237v188.872h90V25.237c60.855-19.114 105-75.964 105-143.128 0-82.843-67.158-150-150-150-37.22 0-71.273 13.556-97.493 35.999" style="stroke-width: 24; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 22.926; stroke-dasharray: none; stroke-opacity: 1;" transform="translate(199 282.891)" fill="none" stroke="#000000" stroke-width="24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path>
                                    <path d="M0 0h140.083" style="stroke-width: 24; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 22.926; stroke-dasharray: none; stroke-opacity: 1;" transform="translate(221.708 497)" fill="none" stroke="#000000" stroke-width="24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path>
                                    <path d="M0 0c7.305-2.949 14.448-7.048 22.169-7.048 12.06 0 22.711 10 34.77 10 12.06 0 22.711-10 34.771-10 12.06 0 22.71 10 34.77 10 12.06 0 22.711-10 34.77-10 12.06 0 22.711 10 34.771 10 12.06 0 23.18-6.667 34.77-10" style="stroke-width: 24; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 22.926; stroke-dasharray: none; stroke-opacity: 1;" transform="translate(201 182.048)" fill="none" stroke="#000000" stroke-width="24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path>
                                    <path d="M0 0c8.262 0 15 6.738 15 15S8.262 30 0 30s-15-6.738-15-15S-8.262 0 0 0" style="fill-opacity: 1; fill-rule: evenodd; stroke: none; stroke-width: 24;" transform="translate(286.75 109)" fill="#000000" data-original="#000000" class="" stroke-width="24"></path>
                                    <path d="M0 0c8.262 0 15 6.738 15 15S8.262 30 0 30s-15-6.738-15-15S-8.262 0 0 0" style="fill-opacity: 1; fill-rule: evenodd; stroke: none; stroke-width: 24;" transform="translate(330.791 228)" fill="#000000" data-original="#000000" class="" stroke-width="24"></path>
                                    <path d="M0 0c8.262 0 15 6.739 15 15 0 8.262-6.738 15-15 15s-15-6.738-15-15C-15 6.739-8.262 0 0 0" style="fill-opacity: 1; fill-rule: evenodd; stroke: none; stroke-width: 24;" transform="translate(341.75 79)" fill="#000000" data-original="#000000" class="" stroke-width="24"></path>
                                    <path d="M0 0v-305.99c0-30.798-25.2-56-56-56s-56 25.199-56 56V0Z" style="stroke-width: 24; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 22.926; stroke-dasharray: none; stroke-opacity: 1;" transform="translate(192.25 377.001)" fill="none" stroke="#000000" stroke-width="24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path>
                                    <path d="M0 0h132" style="stroke-width: 24; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 22.926; stroke-dasharray: none; stroke-opacity: 1;" transform="translate(70.25 377)" fill="none" stroke="#000000" stroke-width="24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path>
                                    <path d="M0 0h19" style="stroke-width: 24; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 22.926; stroke-dasharray: none; stroke-opacity: 1;" transform="translate(90.25 91)" fill="none" stroke="#000000" stroke-width="24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path>
                                    <path d="M0 0h19" style="stroke-width: 24; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 22.926; stroke-dasharray: none; stroke-opacity: 1;" transform="translate(90.25 151.001)" fill="none" stroke="#000000" stroke-width="24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path>
                                    <path d="M0 0h19" style="stroke-width: 24; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 22.926; stroke-dasharray: none; stroke-opacity: 1;" transform="translate(90.25 211.001)" fill="none" stroke="#000000" stroke-width="24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path>
                                    <path d="M0 0h97" style="stroke-width: 24; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 22.926; stroke-dasharray: none; stroke-opacity: 1;" transform="translate(90.25 268)" fill="none" stroke="#000000" stroke-width="24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Add Test</h3>
                        </div>
                        <span class="arrow right "></span>
                        <!-- <span class="material-icons-sharp">
                        chevron_right
                        </span> -->
                    </div>
                </div>

                <!-- Test Modal Start -->
                <div class="modal light-mode" id="TestModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Add Product</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form method="post" action="form.php">
                                   
                                    <div class="row">
                                       <div class="col-md-6">
                                       <label class="my-1" for="category_name">Category:</label>
                                       <select class="form-control custom-select" name="category_name" id="category_name" required>
                                                    <option value="" selected disabled>Choose..</option>
                                                    <?php
                                                    $category_name = "SELECT DISTINCT category_name, product_code FROM categories";
                                                    $category_res = mysqli_query($con, $category_name);
                                                    while ($show_res = mysqli_fetch_assoc($category_res)) {
                                                        $categories = $show_res["category_name"];
                                                        echo '<option value="' . $show_res['category_name'] . '">' . $categories . '</option>';
                                                    }

                                                    ?>
                                                </select>
                                       </div>
                                        <div class="col-md-6">
                                            <label class="my-1" for="test_result">Product Status:</label>
                                            <div class="custom-select-wrapper">
                                                <select class="form-control custom-select" name="product_status" id="product_status" required>
                                                    <option value="" disabled selected hidden>Choose...</option>
                                                    <option value="new">New</option>
                                                    <option value="re_manufactured">Re-Manufactured</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                            <label class="my-1" for="product_name">Products:</label>
                                            <select class="form-control" name="product_name" id="product_name" required>
                                                <option value="" selected disabled>Choose..</option>

                                                <?php
                                                $sql = "SELECT DISTINCT product_name, product_id FROM products_table";
                                                $select_res = mysqli_query($con, $sql);

                                                $addedProductNames = array();

                                                while ($show = mysqli_fetch_assoc($select_res)) {
                                                    $productName = $show["product_name"];

                                                    if (!in_array($productName, $addedProductNames)) {
                                                        echo '<option value="' . $productName . '">' . $productName . '</option>';
                                                        $addedProductNames[] = $productName;
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="my-1" for="product_id">Product Id:</label>

                                            <select class="form-control" name="product_id" id="product_id" required>
                                            <!-- product ids relevent to product name show here -->
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                            <label class="my-1" for="revision_no">Revision No:</label>
                                            <input type="text" class="form-control" value="" id="revision_no" name="revision_no" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="my-1" for="manufacturing_no">Manufacturing No:</label>
                                            <input type="text" readonly class="form-control" value="" id="manufacturing_no" name="manufacturing_no" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                            <label class="my-1" for="testing_roll_no">Testing Roll No:</label>
                                            <input class="form-control" readonly name="testing_roll_no" id="testing_roll_no" required></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="my-1" for="tester">Tester Name:</label>
                                            <input class="form-control" name="tester_name" required></input>
                                        </div>
                                    </div>
                                 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="test_result">Test Result:</label>
                                            <div class="custom-select-wrapper">
                                                <select class="form-control custom-select" name="test_result" required>
                                                    <option value="" disabled selected hidden>Choose...</option>
                                                    <option value="pass">Pass</option>
                                                    <option value="fail">Fail</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="my-1" for="remarks">Remarks:</label>
                                            <textarea class="form-control" name="remarks" cols="100" rows="10" required></textarea>
                                        </div>
                                    </div>

                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="addtest" class="btn btn-success">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Test Modal End -->

                <!-- <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div> -->
                <!-- Add this section in your right-section.php file -->



            </div>

        </div>


    </div>