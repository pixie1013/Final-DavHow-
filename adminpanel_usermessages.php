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
  <link rel="stylesheet" href="index.css">
  <link rel="icon" type="image/x-icon" href="./photos/logo.png">
  <title>DavHow: Admin Inbox</title>
</head>
<body>
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
  
    <section class="messages-section" id="message">
      <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Sender</th>
                    <th>Title</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
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
              
                    $sql = "SELECT * FROM user_messages ORDER BY created_at DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Inside the loop that fetches and displays messages
                        while ($row = $result->fetch_assoc()) {
                            $statusClass = $row['is_read'] ? 'read-message' : 'unread-message';
                            $toggleStatus = $row['is_read'] ? 'Mark as Unread' : 'Mark as Read';
                            echo "
                            <tr class='{$statusClass}'>
                                <td>{$row['created_at']}</td>
                                <td>{$row['first_name']} {$row['last_name']}</td>
                                <td>{$row['title']}</td>
                                <td>
                                    <button class='view-button' onclick='viewMessage({$row['message_id']})'>View</button>
                                    <button class='delete-button' onclick='deleteMessage({$row['message_id']})'>Delete</button>
                                    <button class='status-button' onclick='toggleReadStatus({$row['message_id']})'>{$toggleStatus}</button>
                                </td>
                            </tr>";
                        }

                    } else {
                        echo "<tr><td colspan='4'>No messages found</td></tr>";
                    }

                    $conn->close();
                    ?>
            </tbody>
        </table>
      </div>
        <div id="myModal" class="modal">
          <div class="modal-content">
              <span class="close" onclick="closeModal()">&times;</span>
              <p><strong>Date and Time:</strong> <span id="modal-date"></span></p>
              <p><strong>Name:</strong> <span id="modal-first-name"></span> <span id="modal-last-name"></</span></p>
              <p><strong>Email:</strong> <span id="modal-email"></span></p>
              <p><strong>Mobile Number:</strong> <span id="modal-mobile-number"></span></p><br><br>
              <p><strong>Title:</strong> <span id="modal-title"></span></p><br><br>
              <p><strong>Message:</strong><br><br><span id="modal-message"></span></p>
          </div>
        </div>
    </section>    
    <footer>
        <div class="footerrow">
        <div class="col">
            <h3>What is Davhow?</h3>
            <p class="footertag">DavHow provides a comprehensive, user-friendly platform for accessing and acquiring various legal documents, complete with clear guidelines and requirements.</p>
            <div class="socmeds1">
            <a href="https://www.facebook.com/profile.php?id=61560047196528" target="_blank"><i class="ri-facebook-circle-fill"></i></a>
            <a href="https://x.com/ART_Solutions23" target="_blank"><i class="ri-twitter-x-line"></i></a>
            <a href="mailto:artsolutions24@email.com" target="_blank"><i class="ri-mail-fill"></i></a>
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
    <!-- Back to Top Button -->
    <a href="#"><button id="back-to-top-btn" title="Back to top"><i class="ri-arrow-up-s-fill"></i></button></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="index.js"></script>
</body>
</html>