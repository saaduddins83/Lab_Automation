 <?php 
include("db_connection.php");
 ?>
 <!-- Right Section -->
 <div class="right-section">
            <div class="nav">
                <div class="day-night">
                    <button id="menu-btn">
                        <span class="material-icons-sharp">
                            menu
                        </span>
                    </button>
                    <div class="dark-mode">
                        <span class="material-icons-sharp active">
                            light_mode
                        </span>
                        <span class="material-icons-sharp">
                            dark_mode
                        </span>
                    </div>
                </div>

                <div class="profile">
                    <div class="info">
                        <h6>Hey, <b><?php if(isset($_SESSION['email'])){
                $query = "SELECT * FROM `role` WHERE email = '$_SESSION[email]'";
                $res = mysqli_query($con,$query);
                $row = mysqli_fetch_assoc($res);
                echo $row['fname'] . " " . $row['lname'];
                        }
             ?></b></h6>
                        <small class="text-muted" style="text-align:left;"><?php  echo $row['role']  ?></small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/profile-1.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->