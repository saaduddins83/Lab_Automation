
        <style>
            select:hover,
select:focus {
  /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
  box-shadow: var(--box-shadow);
}
        </style>
        <!-- Main Content -->
        <main>
        <div class="header-container d-flex justify-content-between">
            <h1>Analytics</h1>
            <div class="search">
                <form action="search_results.php" method="GET" class='form-inline'>
                    <div class="input-group">
                        <input type='text' id='search' class="form-control search-form" name="query" placeholder="Search">
                        <div class="custom-select-wrapper">
                        <select class="form-control custom-select search-select" name="category">
                        <option value="" selected disabled hidden>Choose..</option>
                            <option value="product">Product</option>
                            <option value="category">Category</option>
                            <option value="test">Test</option>
                            
                        </select>
                        </div>
                        <span class="input-group-btn" style="width:39px">
                            <button id="search-this" type="submit" class="pull-right btn btn-default search-btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>

            <!-- Analyses -->
            <div class="top-products mt-2">
                <h2>Top Products</h2>
                <div class="analyse">
                    <div class="sales">
                        <div class="status">
                            <div class="info">
                                <h3>Total Products</h3>
                                <h1 style="margin-left: 1vh;">65,024</h1>
                            </div>
                            <div class="progresss">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 66 66" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path d="M58.77 2.45H7.23c-2.63 0-4.77 2.14-4.77 4.77v51.55c0 2.63 2.14 4.77 4.77 4.77h51.55c2.63 0 4.77-2.14 4.77-4.77V7.23c0-2.63-2.15-4.78-4.78-4.78zm2.87 56.32a2.86 2.86 0 0 1-2.86 2.86H7.23a2.86 2.86 0 0 1-2.86-2.86V7.23a2.86 2.86 0 0 1 2.86-2.86h51.55a2.86 2.86 0 0 1 2.86 2.86z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M54.95 8.18H11.04a2.86 2.86 0 0 0-2.86 2.86v43.91a2.86 2.86 0 0 0 2.86 2.86h43.91a2.86 2.86 0 0 0 2.86-2.86v-43.9a2.862 2.862 0 0 0-2.86-2.87zm.96 46.78c0 .53-.43.95-.95.95H11.04a.95.95 0 0 1-.95-.95V11.05c0-.53.43-.95.95-.95h43.91c.53 0 .95.43.95.95v43.91z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M30.99 32.52V16.85a.95.95 0 0 0-.95-.95H15.13a.95.95 0 0 0-.95.95v15.67l-.9 12.57c0 .06.02.11.02.17 0 .04-.01.08 0 .12l.95 3.99c.1.43.49.73.93.73h14.8c.44 0 .83-.3.93-.73l.95-3.99c.01-.04 0-.08 0-.12.01-.06.03-.11.02-.17zm-14.97.98h13.13l.76 10.7H15.26zm.07-15.69h13V31.6h-13zm13.14 30.38H15.94l-.5-2.08h14.29z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M23.25 19.46c-1.56 0-2.83 1.27-2.83 2.83s1.27 2.83 2.83 2.83 2.83-1.27 2.83-2.83-1.27-2.83-2.83-2.83zm0 3.75c-.51 0-.92-.41-.92-.92s.41-.92.92-.92.92.41.92.92c0 .5-.41.92-.92.92zM24.94 40.11h-3.75a.95.95 0 1 0 0 1.9h3.75a.95.95 0 1 0 0-1.9zM52.7 20.66c0-.04.01-.08 0-.12l-.95-3.91a.953.953 0 0 0-.93-.73h-14.8c-.44 0-.82.3-.93.73l-.95 3.91c-.01.04 0 .08 0 .12-.01.06-.03.11-.02.17L35 33.48v15.67c0 .53.43.95.95.95h14.91c.53 0 .95-.43.95-.95V33.48l.9-12.65c.01-.06-.01-.11-.01-.17zm-16.62 1.06h14.66l-.76 10.78H36.85zm.68-3.91h13.3l.49 2H36.27zm13.15 30.38h-13V34.41h13z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M43.51 23.09c-1.56 0-2.83 1.27-2.83 2.83s1.27 2.83 2.83 2.83 2.83-1.27 2.83-2.83-1.27-2.83-2.83-2.83zm0 3.75c-.51 0-.92-.41-.92-.92s.41-.92.92-.92.92.41.92.92-.42.92-.92.92zM41.45 46.54h3.75a.95.95 0 1 0 0-1.9h-3.75a.95.95 0 1 0 0 1.9z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="visits">
                        <div class="status">
                            <div class="info">
                                <h3>Test Conducted</h3>
                                <h1 style="margin-left: 1vh;">24,981</h1>
                            </div>
                            <div class="progresss">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 60 60" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <g fill="#000" fill-rule="nonzero">
                                            <path d="M50.267 1.164a4.094 4.094 0 0 0-5.657 0l-7.848 7.848a1.95 1.95 0 0 0-.51 1.933L10.944 36.254a1.992 1.992 0 0 0-1.932.508L1.163 44.61a4.006 4.006 0 0 0 0 5.657l8.57 8.569a4 4 0 0 0 5.657 0l7.848-7.848a1.95 1.95 0 0 0 .51-1.933l25.309-25.309c.688.2 1.43.005 1.931-.508l7.849-7.848a4.006 4.006 0 0 0 0-5.657zM37.473 12.552l4.281 4.28-2.14 2.14a1 1 0 0 0-.293.707v1.251a2.022 2.022 0 0 1-2.02 2.02H34.8a4.024 4.024 0 0 0-4.02 4.02v2.5a2.022 2.022 0 0 1-2.019 2.02h-2.5a4.024 4.024 0 0 0-4.02 4.02v2.5a2.023 2.023 0 0 1-2.02 2.02h-1.25a1 1 0 0 0-.707.293l-1.429 1.428-4.28-4.28zm-23.5 44.87a2.048 2.048 0 0 1-2.829 0l-8.57-8.569a2 2 0 0 1 0-2.829l7.849-7.848 11.4 11.4zm8.55-9.974-4.28-4.28 1.136-1.135h.836a4.025 4.025 0 0 0 4.02-4.02v-2.5a2.023 2.023 0 0 1 2.02-2.02h2.5a4.023 4.023 0 0 0 4.019-4.02v-2.5a2.023 2.023 0 0 1 2.02-2.02h2.5a4.025 4.025 0 0 0 4.02-4.02v-.837l1.847-1.847 4.28 4.28zm34.9-33.472-7.849 7.848-11.4-11.4 7.848-7.848a2.048 2.048 0 0 1 2.829 0l8.57 8.569a2 2 0 0 1 .002 2.831z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path d="M49.569 16.125a1 1 0 0 0-1.414 1.414l.712.712a1 1 0 0 0 1.414-1.414zM43.163 9.719a1 1 0 0 0-1.414 1.414l3.56 3.559a1 1 0 0 0 1.414-1.414zM16.837 50.281a1 1 0 0 0 1.414-1.414l-.712-.712a1 1 0 0 0-1.414 1.414zM9.719 41.749a1 1 0 0 0 0 1.414l3.558 3.559a1 1 0 0 0 1.414-1.414l-3.558-3.559a1 1 0 0 0-1.414 0z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="searches">
                        <div class="status">
                            <div class="info">
                                <h3>Total Passed</h3>
                                <h1 style="margin-left: 1vh;">14,147</h1>
                            </div>
                            <div class="progresss">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path d="M418.133 145.067v-34.133c0-25.148-45.664-41.319-102.4-47.873V8.533c0-4.713-3.82-8.533-8.533-8.533s-8.533 3.82-8.533 8.533v52.892A541.833 541.833 0 0 0 256 59.733c-14.352 0-28.718.584-42.667 1.692V8.533c0-4.713-3.82-8.533-8.533-8.533s-8.533 3.82-8.533 8.533V63.06c-56.736 6.554-102.4 22.725-102.4 47.873v34.133a30.04 30.04 0 0 0 17.103 24.441l.105 14.113c-11.417 5.871-17.208 12.996-17.208 21.179v256c0 26.274 49.889 42.707 110.132 48.651.264.068.531.121.801.161.097 0 .178-.052.274-.055C221.574 511.148 238.786 512 256 512s34.426-.852 50.926-2.443c.096.003.177.055.274.055.27-.04.537-.094.801-.161 60.243-5.945 110.132-22.377 110.132-48.651v-256c0-8.183-5.792-15.308-17.067-21.087v-14.225a30.017 30.017 0 0 0 17.067-24.421zM196.267 491.508c-55.583-6.742-85.333-21.89-85.333-30.708V229.241c22.964 14.392 63.423 20.905 85.333 23.492v238.775zm0-255.969c-57.946-6.952-85.17-22.059-85.319-30.665.151-.351 1.353-2.693 7.935-6.078A16.86 16.86 0 0 0 128 183.713v-5.965a283.11 283.11 0 0 0 68.267 15.137v42.654zm0-59.821a223.454 223.454 0 0 1-72.75-18.622c-9.275-5-12.583-9.492-12.583-12.029V135.02c18.289 11.639 49.525 19.65 85.333 23.786v16.912zm102.4 317.49c-13.084 1.07-27.239 1.726-42.667 1.726s-29.582-.656-42.667-1.726V160.442A541.833 541.833 0 0 0 256 162.134c14.352 0 28.718-.584 42.667-1.692v332.766zM256 145.067c-93.867 0-145.067-22.55-145.067-34.133 0-8.818 29.75-23.967 85.333-30.709v30.709c0 4.713 3.82 8.533 8.533 8.533s8.533-3.82 8.533-8.533V78.526c13.086-1.07 27.24-1.726 42.668-1.726s29.582.656 42.667 1.726v32.408c0 4.713 3.82 8.533 8.533 8.533s8.533-3.82 8.533-8.533v-30.71c55.583 6.741 85.333 21.891 85.333 30.709.001 11.584-51.199 34.134-145.066 34.134zm137.125 53.729c6.925 3.567 7.906 6.002 7.941 6.007-.006 8.593-27.234 23.766-85.333 30.736v-42.524c5.013-.58 10.245-1.27 16.075-2.141A254.64 254.64 0 0 0 384 177.826v5.885a16.85 16.85 0 0 0 9.125 15.085zm7.942 262.004c0 8.818-29.75 23.967-85.333 30.708V252.733c21.91-2.587 62.369-9.101 85.333-23.492V460.8zm-12.55-303.721A199.209 199.209 0 0 1 329.242 174a474.213 474.213 0 0 1-13.508 1.821v-17.015c35.808-4.136 67.045-12.147 85.333-23.786v10.047c0 2.537-3.309 7.029-12.55 12.012z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M230.4 213.333v51.2c.011 9.421 7.645 17.056 17.067 17.067h17.067c9.421-.011 17.056-7.646 17.067-17.067v-51.2c-.011-9.421-7.645-17.056-17.067-17.067h-17.067c-9.422.011-17.056 7.646-17.067 17.067zm34.142 51.2h-17.075v-51.2h17.067l.008 51.2zM264.533 375.467h-17.067c-9.421.011-17.056 7.646-17.067 17.067v51.2c.011 9.421 7.645 17.056 17.067 17.067h17.067c9.421-.011 17.056-7.646 17.067-17.067v-51.2c-.011-9.422-7.645-17.057-17.067-17.067zm-17.066 68.266v-51.2h17.067l.009 51.2h-17.076z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- New Users Section -->
            <!-- <div class="new-users">
                <h2>New Users</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="images/profile-2.jpg">
                        <h2>Jack</h2>
                        <p>54 Min Ago</p>
                    </div>
                    <div class="user">
                        <img src="images/profile-3.jpg">
                        <h2>Amir</h2>
                        <p>3 Hours Ago</p>
                    </div>
                    <div class="user">
                        <img src="images/profile-4.jpg">
                        <h2>Ember</h2>
                        <p>6 Hours Ago</p>
                    </div>
                    <div class="user">
                        <img src="images/plus.png">
                        <h2>More</h2>
                        <p>New User</p>
                    </div>
                </div>
            </div> -->
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Recent Tests</h2>
                <?php
                if ($result && mysqli_num_rows($result) > 0) {
                    echo "<table border='1'>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Testing ID</th>
                    <th>Result</th>
                    <th>Tester Name</th>
                </tr>
            

            </thead>
            <tbody>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        $resultClass = ($row['test_result'] === 'Declined') ? 'danger' : (($row['test_result'] === 'Pending') ? 'warning' : 'primary');
                        echo "<tr>
                <td>{$row['product_id']}</td>
                <td>{$row['product_name']}</td>
                <td>{$row['testing_id']}</td>
                <td class={$resultClass}>{$row['test_result']}</td>
                <td>{$row['tester_name']}</td>
              </tr>";
                    }

                    echo "</tbody></table>";
                } else {
                    echo "0 results";
                } ?>
                </tbody>

                </table>
                <!-- <a href="#">Show All</a> -->
            </div>
            <!-- End of Recent Tests -->

        </main>
        <!-- End of Main Content -->