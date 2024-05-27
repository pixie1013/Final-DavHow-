
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DavHow: Discussion Forum</title>
    <link rel="stylesheet" href="forum.css">
    <link rel="stylesheet" href="/New DavHow/documents/header.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- HEADER -->
    <header class="header1">
        <div class="top-bar">
            <div class="socmeds">
                <a href="#"><i class="ri-facebook-circle-fill"></i></a>
                <a href="https://x.com/ART_Solutions23" rel="noopener noreferrer" target="_blank"><i class="ri-twitter-x-line"></i></a>
                <a href="#"><i class="ri-mail-fill"></i></a>
            </div>
            <div class="logo">
                <img src="/New DavHow/photos/logo.png" alt="DavHow: Unsaon ni Bai?">
                <p class="Brand">DavHow</p>
                <p class="Tagline">UNSAON NI BAI?</p>
            </div>
            <div class="time">
                <div class="display-date">
                    <span id="day">day<br></span>
                    <span id="month">month</span>
                    <span id="daynum">00</span>
                    <span id="year">0000</span>
                </div>
                <div class="display-time"></div>
        </div>
        </div>
    </header>
    <header class="header" id="header">
        <nav class="nav container">
            <p class="nav_tag"><em>Official website of ART Solutions</em></p>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#" class="nav_link">HOME</a>
                    </li>
        
                    <li class="nav_item">
                        <a href="#" class="nav_link">CATALOG</a>
                    </li>
        
                    <li class="nav_item">
                        <a href="#" class="nav_link">ABOUT US</a>
                    </li>
        
                    <li class="nav_item">
                        <a href="#" class="nav_link">DASHBOARD</a>
                    </li>
                </ul>
    
                <!-- Close button -->
                <div class="nav_close" id="nav-close">
                    <i class="ri-close-circle-line"></i>
                </div>
            </div>
    
            <div class="nav_actions">
                <!-- Search button -->
                <i class="ri-search-line nav_search" id="search-btn"></i>
    
                <!-- Login button -->
                <i class="ri-user-line nav_login" id="login-btn"></i>
    
                <!-- Toggle button -->
                <div class="nav_toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>
    
      <!--==================== SEARCH ====================-->
    <div class="search" id="search">
        <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="(e.g. NSO Birth Certificate)" class="search__input">
        </form>

        <i class="ri-close-circle-line search__close" id="search-close"></i>
    </div>
    
    <!--==================== LOGIN ====================-->
    <div class="login" id="login">
        <form action="" class="login__form">
        <h2 class="login__title">Log In</h2>
        
        <div class="login__group">
            <div>
                <label for="email" class="login__label">Email:</label>
                <input type="email" placeholder="Write your email" id="email" class="login__input">
            </div>
            
            <div>
                <label for="password" class="login__label">Password:</label>
                <input type="password" placeholder="Enter your password" id="password" class="login__input">
            </div>
        </div>
        
        <div>
            <p class="login__signup">Don't have an account? <a href="#">Sign up</a></p>
        
            <button type="submit" class="login__button">Log In</button>
        
            <a href="#" class="login__forgot">Forgot password?</a>
        </div>
        </form>
    
        <i class="ri-close-circle-line login__close" id="login-close"></i>
    </div>
    <!-- DISCUSSION FORUM -->
    <div class="whole-document-area">
        <div class="discussion">
            <form id="postForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input type="hidden" name="counter" value="your_counter_value_here">
                <div class="create-post">
                    <div class="user-icon">
                        <img src="valid_id/icons/user-icon.svg" alt="">                
                    </div>
                    <div class="input">
                        <div class="dropdown">
                            <select id="idType" name="idType" required>
                              <option value="" selected disabled>Select ID Type</option>
                              <option value="Integrated Bar of the Philippines">Integrated Bar of the Philippines</option>
                              <option value="Barangay ID">Barangay ID</option>
                              <option value="Driver’s License from Land Transportation Office (LTO)">Driver’s License from Land Transportation Office (LTO)</option>
                              <option value="Firearms License from Philippine National Police (PNP)">Firearms License from Philippine National Police (PNP)</option>
                              <option value="GSIS ID or GSIS UMID Card Government Service Insurance System (GSIS)">GSIS ID or GSIS UMID Card Government Service Insurance System (GSIS)</option>
                              <option value="iDOLE Card from Department of Labor and Employment (iDOLE)">iDOLE Card from Department of Labor and Employment (iDOLE)</option>
                              <option value="NBI Clearance from National Bureau of Investigation (NBI)">NBI Clearance from National Bureau of Investigation (NBI)</option>
                              <option value="OWWA ID Overseas Workers Welfare Administration (OWWA)">OWWA ID Overseas Workers Welfare Administration (OWWA)</option>
                              <option value="Persons with Disabilities (PWD) ID from Local Government Unit (LGU)">Persons with Disabilities (PWD) ID from Local Government Unit (LGU)</option>
                              <option value="PhilHealth ID (digitized PVC)">PhilHealth ID (digitized PVC)</option>
                              <option value="Philippine Passport from Department of Foreign Affairs">Philippine Passport from Department of Foreign Affairs</option>
                              <option value="Postal ID">Postal ID</option>
                              <option value="PRC ID from Professional Regulatory Commission (PRC)">PRC ID from Professional Regulatory Commission (PRC)</option>
                              <option value="Senior Citizen ID from Local Government Unit (LGU)">Senior Citizen ID from Local Government Unit (LGU)</option>
                              <option value="SSS ID or SSS UMID Card from Social Security System (SSS)">SSS ID or SSS UMID Card from Social Security System (SSS)</option>
                              <option value="TIN ID">TIN ID</option>
                              <option value="Voter’s Certification from the Officer of Election with Dry Seal">Voter’s Certification from the Officer of Election with Dry Seal</option>
                            </select>
                          </div>
                        <textarea placeholder="What is your concern?" name="content"></textarea>
                        <button type="submit" name="submit">POST</button>
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "davhow";

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Check if the form was submitted
                                if (isset($_POST['submit'])) {
                                    // Retrieve data from form fields
                                    $idType = $_POST['idType'];
                                    $content = $_POST['content'];
                                    
                                    // Insert data into the database
                                    $sql = "INSERT INTO posts (specified_concern, content, timestamp) VALUES (?, ?, NOW())";
                                    $stmt = $conn->prepare($sql);
                                    $stmt->bind_param("ss", $idType, $content);
                                    
                                    if ($stmt->execute()) {
                                        // Data inserted successfully
                                        echo "Post submitted successfully!";
                                    } else {
                                        // Error inserting data
                                        echo "Error: " . $conn->error;
                                    }
                                    
                                    // Close statement
                                    $stmt->close();
                            
                                    // Clear textarea value
                                    echo "<script>document.getElementById('content').value = '';</script>";
                                }
                            }
                            ?>
                    </div>
                </div><hr>
            </form>
            <!-- POST AREA -->
            <div class="post-area">
            <?php
                $sql = "SELECT post_id, username, content, specified_concern, timestamp FROM posts ORDER BY timestamp DESC";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        fetchPosts($conn, $row);
                    }
                } else {
                    echo "No posts found.";
                }

                // Function to fetch posts
                function fetchPosts($conn, $row) {
                    echo '<div class="post-area">';
                    echo '<div class="post">';
                    echo '<div class="specified-concern">';
                    echo '<strong><em><p>r/' . $row['specified_concern'] . ' </p></em></strong>';
                    echo '<em><p class="date">•' . $row['timestamp'] . '</p></em>';
                    echo '</div>';
                    echo '<div class="user-info">';
                    echo '<div class="user-icon">';
                    echo '<img src="valid_id/icons/user-icon.svg" alt="" style="width: 35px; height: 35px;">';
                    echo '</div>';
                    echo '<p class="username">' . $row['username'] . '</p>';
                    echo '</div>';
                    echo '<p class="content">' . $row['content'] . '</p>';

                    // Comment input form
                    echo '<div class="comment-section" id="comment-section-' . $row['post_id'] . '">';
                    echo '<div class="comment-outline" onclick="toggleComments(' . $row['post_id'] . ')">';
                    echo '<img src="/New DavHow/valid_id/icons/speech_bubble.svg" alt="">';
                    echo '<p>COMMENTS</p>';
                    echo '</div>';
                    echo '<div class="comments-content" id="comments-content-' . $row['post_id'] . '" style="display: none;"> <hr>';
                        echo '<div class="comment-input" id="comment-input-' . $row['post_id'] . '">';
                            echo'<img src="valid_id/icons/user-icon.svg">';
                            echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST">';
                            echo '<input type="hidden" name="post_id" value="' . $row['post_id'] . '">';
                            echo '<input type="text" name="comment_content" placeholder="Type comment here">';
                            echo '<button type="submit" onclick="submitCommentForm(' . $row['post_id'] . ')" name="submit_comment">POST</button>';
                            echo '</form>';
                    echo '</div>';
                    // Fetch comments for this post
                    fetchComments($conn, $row['post_id']);
                    echo '</div>';
                    
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }


                // Process comment submission
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_comment'])) {
                    // Retrieve data from the form
                    $postId = $_POST['post_id'];
                    $username = "root"; // Assuming you want to use a default username for now
                    $commentContent = $_POST['comment_content'];

                    // Insert the comment into the database
                    $sql = "INSERT INTO comments (post_id, username, comment_text, timestamp) VALUES (?, ?, ?, NOW())";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("iss", $postId, $username, $commentContent);

                    if ($stmt->execute()) {
                        // Comment inserted successfully
                        echo "Comment submitted successfully!";
                    } else {
                        // Error inserting comment
                        echo "Error: " . $conn->error;
                    }

                    // Close the statement
                    $stmt->close();
                }



                // Function to fetch comments for a post
                function fetchComments($conn, $postId) {
                    $sql = "SELECT username, comment_text, timestamp FROM comments WHERE post_id = $postId ORDER BY timestamp DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<hr><div class="comment">';
                            echo '<div class="user-info">';
                            echo '<div class="user-icon">';
                            echo '<img src="valid_id/icons/user-icon.svg" alt="">';
                            echo '</div>';
                            echo '<strong><p class="username"> ANONYMOUS </p></strong>';
                            echo '</div>';
                            echo '<div class="content">';
                            echo '<p>' . $row['comment_text'] . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } 
                }
            ?>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer>
        <div class="footerrow">
            <div class="col">
                <h3>What is Davhow?</h3>
                <p class="footertag">DavHow provides a comprehensive, user-friendly platform for accessing and acquiring various legal documents, complete with clear guidelines and requirements.</p>
                <div class="socmeds1">
                    <a rel="noopener noreferrer" href="#"><i class="ri-facebook-circle-fill"></i></a>
                    <a rel="noopener noreferrer" href="https://x.com/ART_Solutions23" target="_blank"><i class="ri-twitter-x-line"></i></a>
                    <a rel="noopener noreferrer" href="#"><i class="ri-mail-fill"></i></a>
                </div>
            </div>
            <div class="col">
                <h3>Visit Us</h3>
                <p>University of the Philippines Mindanao</p>
                <p>Tugbok, Davao City</p>
                <p>8000 Philippines</p>
            </div>
            <div class="col">
                <h3>Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Catalog</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Dashboard</a></li>
                </ul>
            </div>
            <div class="col">
              <h3>About DavHow</h3>
                <ul>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Rationale</a></li>
                    <li><a href="#">Vision and Mission</a></li>
                    <li><a href="#">Objectives</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">&copy; 2024 <i>ART Solutions. All rights reserved.</i></p>
    </footer>
    <script src="/New DavHow/index.js">
    </script>
</body>
</html>

