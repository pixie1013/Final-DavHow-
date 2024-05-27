<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = null;
if (isset($_SESSION['user_id'])) {
    $user_data = check_login($con);
}
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
  <title>DavHow: Home Page</title>
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
              <a href="https://www.facebook.com/profile.php?id=61560047196528" target="_blank"><i class="ri-facebook-circle-fill"></i></a>
              <a href="https://x.com/ART_Solutions23" target="_blank"><i class="ri-twitter-x-line"></i></a>
              <a href="mailto:artsolutions24@email.com" target="_blank"><i class="ri-mail-fill"></i></a>
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
      </div>
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
  
  <!-- Welcoming Section -->
  <section class="home section" id="home">
    <div class="home__container container grid">
      <div class="home__data">
        <h1 class="home__title">HELP IS HERE</h1> 

        <p class="home__description">
          DavHow is a one-stop site for Dabawenyos in <br>knowing the processes and requirements for legal documents.
        </p>

        

        <div class="home__button">
          <a href="catalog.php" class="catalog_button">Catalog</a>
        </div>
      </div>
      <img src="photos/welcome.svg" alt="Card" class="home__img">
    </div>
  </section>

  <!-- Services -->
  <section class="services-wrapper scrollable-section" id="services1">
    <div class="service">
      <h1>Our Services</h1>
      <div class="cards">
        <div class="card">
          <i class="ri-file-text-fill"></i>
          <h2>Acquisition Guidelines</h2>
          <p>DavHow offers comprehensive and user-friendly guidelines for acquiring various legal documents. We provide
            clear, step-by-step instructions and requirements for obtaining documents such as certificates,identifications, and other legal papers. With a focus on simplicity and clarity, our platform ensures that users, regardless of their familiarity with legal processes, can easily navigate the acquisition procedures.</p>
        </div>
        <div class="card">
          <i class="ri-book-marked-fill"></i>
          <h2>Agency Directory</h2>
          <p>DavHow provides a comprehensive listing of various government agencies across the country. Our website allows
          individuals to easily search and access contact information and location details about different government entities. Whether you're seeking assistance, information, or collaboration with specific agencies, our directory simplifies the process by offering a one-stop solution.</p>
        </div>
        <div class="card">
          <i class="ri-list-check-3"></i>
          <h2>Necessity Tracker</h2>
          <p>DavHow helps users to effortlessly track and manage the documents they plan to acquire in the future. By simply listing the desired documents on our platform, users can organize their needs and stay on top of their document requirements. Whether it's for professional, academic, or personal purposes, this website ensures you to never lose track of important documents you need to retrieve.</p>
      </div>
    </div>
  </section>

  <!-- Rationale, Vision, Mission -->
  <section class="rationale scrollable-section" id="rationale">
    <div class="skewed" data-aos="fade-up">
      <div class="text">
        <h1>Rationale</h1>
        <p>DavHow is a comprehensive web-based platform developed as a project for CMSC 126 - Web-based System Development,
          under the University of the Philippines Mindanao, with a primary focus on facilitating the acquisition of legal
          documents by providing clear guidelines, requirements, and a user-friendly interface. This project aims to bridge
          the gap between legal professionals, businesses, and individuals in need of legal documents by leveraging
          technology to simplify the document acquisition process.</p>  
      </div>
      <div class="imgRationale">
        <div>
          <img src="photos/4218778635_a45c68f004_b.jpg" alt="UP Mindanao Oblation">
        </div>
      </div>
    </div>

    <div class="skewed skewed-left" data-aos="fade-up">
      <div class="imgRationale">
        <div>
          <img src="photos/pexels-fauxels-3183197.jpg" alt="DavHow Vision">
        </div>
      </div>
      <div class="text scrollable-section" id="vision">
        <h1>Vision</h1>
        <p>We envision a future where legal document acquisition is seamlessly facilitated through an innovative online
        platform. Our goal is to redefine industry standards by providing an easily accessible resource that transforms
        the way requirements and guidelines for diverse legal documents are presented.</p>
      </div>
    </div>

    <div class="skewed" data-aos="fade-up">
      <div class="text" id="mission">
        <h1>Mission</h1>
        <p>Our mission is to develop a user-friendly online environment that makes acquiring legal documents easier. We intend to empower the citizens by providing a resource that is not only simple to use but also sets new
          standards for clarity in conveying the needs and norms for various sorts of legal papers.</p>
      </div>
      <div class="imgRationale">
        <div>
          <img src="photos/pexels-cottonbro-8088450.jpg" alt="DavHow Mission">
        </div>
      </div>
    </div>
  </section>

  <section class="objectives scrollable-section" id="objectives">
    <div class="card__container">
      <h1>Objectives</h1>
      <div class="card__content">
        <article class="card__article">
          <div class="card__data">
            <h3 class="card__name">Centralized Database</h3>
            <p class="card__description">
              For every form of document, precise rules and specifications will be provided, simplifying user comprehension and compliance. The goal of the repository is to improve legal document management's accuracy and efficiency.
            </p>
          </div>
        </article>
        <article class="card__article">
          <div class="card__data">
            <h3 class="card__name">User-Friendly Interface</h3>
            <p class="card__description">
              The interface design will prioritize user-friendliness, making it accessible for everyone. The aim is to create a website that is easy to use and understand.
            </p>
          </div>
        </article>
        <article class="card__article">
          <div class="card__data">
            <h3 class="card__name">Progress Checking</h3>
            <p class="card__description">
              Provides users with a personalized checklist allowing them to keep track of their progress in acquiring valid ID and documents.
            </p>
          </div>
        </article>
        <article class="card__article">
          <div class="card__data">
            <h3 class="card__name">Frequent Content Updates</h3>
            <p class="card__description">
              Regularly update the content of the website to ensure that it remains relevant and up-to-date. This ensures that users are always in compliance with the latest legal guidelines and requirements.
            </p>
          </div>
        </article>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="index.js"></script>
  
</body>
</html>