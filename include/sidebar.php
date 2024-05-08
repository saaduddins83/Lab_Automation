

    <div class="main-container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/logo-02.png">
                    <!-- <h2>SRS</h2> -->
                    <h7>
                        <div class="center">
                            <b class="danger">Electrical</b><br>
                            <b class="danger">Appliances</b>
                        </div>
                    </h7>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="index.php">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="user.php">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Users</h3>
                </a>
                <a href="categories.php">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Categories</h3>
                </a>
                <a href="test.php" class="">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Test Results</h3>
                </a>
                <!-- <a href="testResult.php">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    <h3>Test Results</h3>
                    
                </a> -->
                <a href="products.php">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Products</h3>
                </a>
                <!-- <a href="#">
                    <span class="material-icons-sharp">
                        report_gmailerrorred
                    </span>
                    <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a> -->
                <a href="signin.php">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>New Login</h3>
                </a>
                <a href="signout.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <script>
    $(document).ready(function() {
        // Get the current page URL
        var currentPageUrl = window.location.href;

        // Loop through each link in the sidebar
        $('.sidebar a').each(function() {
            // Get the link's href attribute
            var linkUrl = $(this).attr('href');

            // Check if the current page URL contains the link's URL
            if (currentPageUrl.indexOf(linkUrl) !== -1) {
                // Add the "active" class to the link
                $(this).addClass('active');
            }
        });
    });
</script>