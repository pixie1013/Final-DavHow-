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

<htm>
    <head>
        <link rel="stylesheet" href="index.css">
    </head>
</htm>