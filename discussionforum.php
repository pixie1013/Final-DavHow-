
<?php 
session_start();

include("connection.php");
include("functions.php");

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If the user is not logged in, redirect to the login page
    header("Location: login.php");
    die;
}

// If the user is logged in, fetch their data
$user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="forum.css">
    <link rel="stylesheet" href="/New DavHow/documents/header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DavHow: Discussion Forum</title>
</head>
<body>
    <!-- HEADER -->
    <header class="header1">
        <div class="top-bar">
          <div class="top-left">
            <div class="time">
              <div class="display-time"></div>
              <div class="display-date">
                <span id="month">month</span>
                <span id="daynum">00</span>
                <span id="year">0000</span>
                <span id="day">day</span>
              </div>
            </div>
            <div class="socmeds">
              <a href="#"><i class="ri-facebook-circle-fill"></i></a>
              <a href="https://x.com/ART_Solutions23" target="_blank"><i class="ri-twitter-x-line"></i></a>
              <a href="#"><i class="ri-mail-fill"></i></a>
            </div>
          </div>
          
          <div class="logo">
            <img src="photos/logo.png" alt="DavHow: Unsaon ni Bai?">
            <p class="Brand">DavHow</p>
            <p class="Tagline">UNSAON NI BAI?</p>
          </div>
          <nav class="nav1">
            <?php if (isset($user_data)): ?>
            <span class="greeting">Madayaw, <?php echo htmlspecialchars($user_data['user_name']); ?></span>
            <a href="#" onclick="logout()" class="logout-button" id="logout-btn"><i class="ri-logout-box-r-line"></i></a>
            <?php else: ?>
            <a href="login.php"><ion-icon name="person-circle-outline" class="nav_login" id="login-btn"></ion-icon></a>
            <?php endif; ?>
        </nav>
        </div>
  </header>
  <header class="header" id="header">
        <nav class="nav container">
           <p class="nav_tag"><em>Official website of ART Solutions</em></p>
    
           <div class="nav_menu" id="nav-menu">
           <ul class="nav_list">
           <?php
                // Assume $isLoggedIn and $isAdmin are set based on authentication logic
                $isLoggedIn = isset($_SESSION['user_id']); // Check if user is logged in
                $isAdmin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1; // Check if user is logged in as admin

                // Check if the user is logged in as admin, user, or not logged in
                if ($isAdmin) {
                    echo '
                    <li class="nav_item">
                        <a href="homepage.php" class="nav_link">HOME</a>
                    </li>
                    <li class="nav_item">
                        <a href="catalog.php" class="nav_link">CATALOG</a>
                    </li>
                    <li class="nav_item">
                        <a href="about_us.php" class="nav_link">ABOUT US</a>
                    </li>
                    <li class="nav_item">
                        <a href="discussionforum.php" class="nav_link">FORUM</a>
                    </li>
                    <li class="nav_item">
                        <a href="adminpanel_usermessages.php" class="nav_link">MESSAGES</a>
                    </li>';
                } elseif ($isLoggedIn) {
                    echo '
                    <li class="nav_item">
                        <a href="homepage.php" class="nav_link">HOME</a>
                    </li>
                    <li class="nav_item">
                        <a href="catalog.php" class="nav_link">CATALOG</a>
                    </li>
                    <li class="nav_item">
                        <a href="about_us.php" class="nav_link">ABOUT US</a>
                    </li>
                    <li class="nav_item">
                        <a href="discussionforum.php" class="nav_link">FORUM</a>
                    </li>';
                } else {
                    echo '
                    <li class="nav_item">
                        <a href="homepage.php" class="nav_link">HOME</a>
                    </li>
                    <li class="nav_item">
                        <a href="catalog.php" class="nav_link">CATALOG</a>
                    </li>
                    <li class="nav_item">
                        <a href="about_us.php" class="nav_link">ABOUT US</a>
                    </li>';
                }
                ?>

          </ul>
    
              <!-- Close button -->
              <div class="nav_close" id="nav-close">
                <i class="ri-close-circle-line"></i>
              </div>
           </div>
    
           <div class="nav_actions">
              <!-- Search button -->
              <a href="search/search_page.php"><i class="ri-search-line nav_search" id="search-btn"></i></a>
    
              <!-- Toggle button -->
              <div class="nav_toggle" id="nav-toggle">
                 <i class="ri-menu-line"></i>
              </div>
           </div>
        </nav>
  </header>
    
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

                                    // Retrieve username from the users table
                                    $user_name = $_SESSION['user_name'];
                                    $is_admin = $_SESSION['is_admin'];

                                    // Insert data into the database
                                    $sql = "INSERT INTO posts (username, is_admin, specified_concern, content, timestamp) VALUES (?, ?, ?, ?, NOW())";
                                    $stmt = $conn->prepare($sql);
                                    $stmt->bind_param("siss", $user_name, $is_admin, $idType, $content);
                                    
                                    if ($stmt->execute()) {
                                        // Data inserted successfully
                                        echo '<p class="verify-post">Post submitted successfully!</p>';
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

                                // Function to retrieve username from users table
                                function getUsername($conn, $username) {
                                    $sql = "SELECT user_name FROM users WHERE user_name = ?";
                                    $stmt = $conn->prepare($sql);
                                    $stmt->bind_param("s", $username);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        return $row["user_name"];
                                    } else {
                                        return false;
                                    }
                                }
                            ?>

                    </div>
                </div><hr>
            </form>
            <!-- POST AREA -->
            <div class="post-area">
            <?php
                $sql = "SELECT post_id, username, content, specified_concern, timestamp, time, is_admin 
                FROM posts 
                ORDER BY time DESC";        
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        fetchPosts($conn, $row);
                    }
                } else {
                    echo '<p class="verify">No posts found.</p>';
                }

                // Function to fetch posts
                function fetchPosts($conn, $row) {
                    // Check if user is admin based on the is_admin attribute in the posts table
                    $is_admin = $row['is_admin'] == 1 ? true : false;
                    echo '<div class="post-area">';
                    echo '<div class="post">';
                    echo '<div class="specified-concern">';
                    echo '<strong><em><p>r/' . $row['specified_concern'] . ' </p></em></strong>';
                    echo '<em><p class="date">•' . $row['timestamp'] . '</p></em>';
                    echo '</div>';
                    // Check if user is admin and provide delete option
                    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
                        echo '<div class="delete">';
                        echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST">';
                        echo '<input type="hidden" name="post_id" value="' . $row['post_id'] . '">';
                        echo '<button type="submit" name="delete_post" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">';
                        echo '<img src="valid_id/icons/remove.svg" alt="Delete">';
                        echo '</button>';
                        echo '</form>';
                        echo '</div>'; //div for delete
                    }
                    echo '<div class="user-info">';
                    echo '<div class="user-icon">';
                    echo '<img src="valid_id/icons/user-icon.svg" alt="" style="width: 35px; height: 35px;">';
                    echo '</div>';
                    
                    // Display username
                    echo '<div class="username-container">';
                    echo '<p class="username">@' . $row['username'] . '</p>';
                    
                    // Display admin tag if user is admin
                    if ($is_admin) {
                        echo '<p class="admin"> ADMIN </p>';
                    }

                    echo '</div>'; // Close username-container
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

                // Process post deletion
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_post'])) {
                    $postId = $_POST['post_id'];
                    
                    // Delete the post from the database
                    $sql = "DELETE FROM posts WHERE post_id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $postId);
                    
                    if ($stmt->execute()) {
                        echo '<p class="verify-post">Post deleted successfully!</p>';
                    } else {
                        echo "Error: " . $conn->error;
                    }
                    
                    $stmt->close();
                }


                // Process comment submission
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_comment'])) {
                    // Retrieve data from the form
                    $postId = $_POST['post_id'];
                    
                    // Retrieve username from the users table
                    $username = $_SESSION['user_name'];
                    $is_admin = $_SESSION['is_admin'];

                    $commentContent = $_POST['comment_content'];

                    // Insert the comment into the database
                    $sql = "INSERT INTO comments (post_id, username, comment_text, timestamp, is_admin) VALUES (?, ?, ?, NOW(), ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("isss", $postId, $username, $commentContent, $is_admin);
                    
                    // Execute the statement
                    if (!$stmt->execute()) {
                        echo "Commenting error: " . $conn->error;
                    }

                    // Close the statement
                    $stmt->close();
                }

                // Function to fetch comments for a post
                function fetchComments($conn, $postId) {
                    // Check if user is logged in
                    if (!isset($_SESSION['user_name'])) {
                        echo '<p class="error">Error: User not logged in.</p>';
                        return;
                    }
                
                    // Fetch comments for the post
                    $sql_comments = "SELECT comment_id, comment_text, timestamp, username, is_admin FROM comments WHERE post_id = ? ORDER BY timestamp DESC";
                    $stmt_comments = $conn->prepare($sql_comments);
                    $stmt_comments->bind_param("i", $postId);
                    $stmt_comments->execute();
                    $result_comments = $stmt_comments->get_result();
                
                    // Display comments
                    if ($result_comments->num_rows > 0) {
                        while ($row = $result_comments->fetch_assoc()) {
                            $is_admin = $row['is_admin'] == 1;
                            echo '<hr><div class="comment">';
                            echo '<div class="user-info">';
                            echo '<div class="user-icon">';
                            echo '<img src="valid_id/icons/user-icon.svg" alt="">';
                            echo '</div>';
                            // Display username
                            echo '<div class="username-container">';
                            echo '<strong><p class="username">' . htmlspecialchars($row['username']) . '</p></strong>'; // htmlspecialchars for safety
                
                            // Display admin tag if user is admin
                            if ($is_admin) {
                                echo '<p class="admin"> ADMIN </p>';
                            }
                            echo '</div>'; // Close username-container
                
                            // Check if user is admin and provide delete option
                            if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
                                echo '<div class="comment-delete">';
                                echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST">';
                                echo '<input type="hidden" name="comment_id" value="' . $row['comment_id'] . '">';
                                echo '<input type="hidden" name="post_id" value="' . $postId . '">';
                                echo '<button type="submit" name="delete_comment" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">';
                                echo '<img src="valid_id/icons/remove.svg" alt="Delete">';
                                echo '</button>';
                                echo '</form>';
                                echo '</div>'; //div for delete
                            }
                            echo '</div>';
                            echo '<div class="content">';
                            echo '<p>' . htmlspecialchars($row['comment_text']) . '</p>'; // htmlspecialchars for safety
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<hr><p class="error">No comments found.</p>';
                    }

                    // Process comment deletion
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_comment'])) {
                        $commentId = $_POST['comment_id'];
                        
                        // Delete the comment from the database
                        $sql = "DELETE FROM comments WHERE comment_id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $commentId);
                        
                        if (!$stmt->execute()) {
                            echo '<p class="verify-comment">Comment deleted successfully!</p>';
                        } else {
                            echo "Error: " . $conn->error;
                        }
                        
                        $stmt->close();
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
            <a href="https://www.facebook.com/profile.php?id=61560047196528"><i class="ri-facebook-circle-fill"></i></a>
            <a href="https://x.com/ART_Solutions23" target="_blank"><i class="ri-twitter-x-line"></i></a>
            <a href="mailto:artsolutions24@email.com"><i class="ri-mail-fill"></i></a>
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
            <li><a href="homepage.php">Home</a></li>
            <li><a href="catalog.php">Catalog</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="discussionforum.php">Forum</a></li>
            </ul>
        </div>
        <div class="col">
            <h3>About DavHow</h3>
            <ul>
                <li><a href="homepage.php#services1">Our Services</a></li>
                <li><a href="homepage.php#rationale">Rationale</a></li>
                <li><a href="homepage.php#vision">Vision and Mission</a></li>
                <li><a href="homepage.php#objectives">Objectives</a></li>
            </ul>
        </div>
        </div>
        <hr>
        <p class="copyright">&copy; 2024 <i>ART Solutions. All rights reserved.</i></p>
    </footer>
    <script src="index.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>

