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
  <link rel="stylesheet" href="admin.css">
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
            <img src="/New DavHow/photos/logo.png" alt="DavHow: Unsaon ni Bai?">
            <p class="Brand">DavHow</p>
            <p class="Tagline">UNSAON NI BAI?</p>
          </div>
          <!-- Login button -->
          <ion-icon name="person-circle-outline" class="nav_login" id="login-btn"></ion-icon>
        </div>
      </header>
      <header class="header" id="header">
        <nav class="nav container">
           <p class="nav_tag"><em>Official website of ART Solutions</em></p>
    
           <div class="nav_menu" id="nav-menu">
            <ul class="nav_list">
            <?php
                  // Check if the user is logged in as admin
                  $isAdmin = false; // Set this based on your authentication logic
                  $isLoggedIn = true; // Set this based on your authentication logic

                  if ($isAdmin) {
                      echo '
                      <li class="nav_item">
                          <a href="homepage.html" class="nav_link">HOME</a>
                      </li>
                      <li class="nav_item">
                          <a href="catalog.html" class="nav_link">CATALOG</a>
                      </li>
                      <li class="nav_item">
                          <a href="about_us.html" class="nav_link">ABOUT US</a>
                      </li>
                      <li class="nav_item">
                          <a href="#" class="nav_link">FORUM</a>
                      </li>';
                  } else if ($isLoggedIn) {
                      echo '
                      <li class="nav_item">
                          <a href="homepage.html" class="nav_link">HOME</a>
                      </li>
                      <li class="nav_item">
                          <a href="catalog.html" class="nav_link">CATALOG</a>
                      </li>
                      <li class="nav_item">
                          <a href="about_us.html" class="nav_link">ABOUT US</a>
                      </li>
                      <li class="nav_item">
                          <a href="#" class="nav_link">FORUM</a>
                      </li>';
                  } else {
                      echo '
                      <li class="nav_item">
                          <a href="homepage.html" class="nav_link">HOME</a>
                      </li>
                      <li class="nav_item">
                          <a href="catalog.html" class="nav_link">CATALOG</a>
                      </li>
                      <li class="nav_item">
                          <a href="about_us.html" class="nav_link">ABOUT US</a>
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
              <i class="ri-search-line nav_search" id="search-btn"></i>
    
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
            <p class="login__signup">
               Don't have an account? <a href="#">Sign up</a>
            </p>
    
            <button type="submit" class="login__button">Log In</button>
    
            <a href="#" class="login__forgot">
               Forgot password?
            </a>
         </div>
        </form>
    
        <i class="ri-close-circle-line login__close" id="login-close"></i>
      </div>
    </div>
    <section class="messages-section" id="message">
      <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Sender</th>
                    <th>Title</th>
                    <th colspan="2">Action</th>
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

                    $sql = "SELECT * FROM messages";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                                <td>{$row['created_at']}</td>
                                <td>{$row['first_name']} {$row['last_name']}</td>
                                <td>{$row['title']}</td>
                                <td>
                                    <button class='view-button' onclick='viewMessage({$row['id']})'>View</button>
                                    <button class='delete-button' onclick='deleteMessage({$row['id']})'>Delete</button>
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
              <p><strong>Message:</strong> <span id="modal-message"></span></p>
          </div>
        </div>
    </section>    
    <footer>
        <div class="footerrow">
        <div class="col">
            <h3>What is Davhow?</h3>
            <p class="footertag">DavHow provides a comprehensive, user-friendly platform for accessing and acquiring various legal documents, complete with clear guidelines and requirements.</p>
            <div class="socmeds1">
            <a href="#"><i class="ri-facebook-circle-fill"></i></a>
            <a href="https://x.com/ART_Solutions23" target="_blank"><i class="ri-twitter-x-line"></i></a>
            <a href="#"><i class="ri-mail-fill"></i></a>
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
            <li><a href="homepage.html">Home</a></li>
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
    <script src="index.js"></script>
</body>
</html>