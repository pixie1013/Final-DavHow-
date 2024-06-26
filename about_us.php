<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = null;
if (isset($_SESSION['user_id'])) {
    $user_data = check_login($con);
}
?>

<!DOCTYPE php>
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/x-icon" href="./photos/logo.png">
  <title>DavHow: About Us</title>
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
  <section class="home section" id="home">
    <div class="aboutus__container container grid">
      <div class="home__data">
        <h1 class="aboutus__title">A team of visionaries united<br>to innovate byte by byte.</h1> 
        <p class="aboutus__description">
          Code and Curiosity Collide: Pioneering Tomorrow's Innovations
        </p>
      </div>
    </div>
  </section>

  <section>
    <div class="containerAboutUs">
      <div class="sub-container">
          <div class="teams">
              <img src="photos/1.png" alt="">
              <div class="name">Prescious Apple D. Sangria</div>
              <div class="desig">1st Year BS Computer Science</div>
              <div class="social-links">
                  <a href="https://web.facebook.com/presciousapple.sangria/"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/sciousday/"><i class="fa fa-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/prescious-apple-sangria-a59535309/"><i class="fa fa-linkedin"></i></a>
                  <a href="https://github.com/PASangria"><i class="fa fa-github"></i></a>
              </div>
              <div class="about">Apple is a first-year BS Computer Science student with a passion for innovation and problem-solving. She actively participates in computer science clubs and organizations, always seeking opportunities to collaborate with peers in the same field. She envisions a future where technology plays a vital role in addressing real-world challenges, and she is determined to make a positive impact through her work. </div>

              
          </div>

          <div class="teams">
              <img src="photos/2.png" alt="">
              <div class="name">Trixie Nicole A. Organiza</div>
              <div class="desig">1st Year BS Computer Science</div>
              <div class="social-links">
                  <a href="https://www.facebook.com/trickseekneecoal"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/trickslcn/"><i class="fa fa-instagram"></i></a>
                  <a href="www.linkedin.com/in/trixie-nicole-organiza-2a115a2aa"><i class="fa fa-linkedin"></i></a>
                  <a href="https://github.com/pixie1013"><i class="fa fa-github"></i></a>
              </div>
              <div class="about">Trixie is a first-year computer science student specializing in cybersecurity and blockchain. She has a keen interest in ethical hacking and spends her free time participating in attending workshops to enhance her skills. Trixie is meticulous about keeping up with the latest cybersecurity trends and vulnerabilities, aiming to contribute to the development of secure software systems.</div>

              
          </div>

          <div class="teams">
              <img src="photos/3.png" alt="">
              <div class="name">Roslyn Faith U. Guillermo</div>
              <div class="desig">1st Year BS Computer Science</div>
              <div class="social-links">
                  <a href="https://www.facebook.com/rfugxx"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/roslennnn_16/"><i class="fa fa-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/roslynfaith16/"><i class="fa fa-linkedin"></i></a>
                  <a href="https://github.com/png16"><i class="fa fa-github"></i></a>
              </div>
              <div class="about">Roslyn is a first-year computer science student with a focus on game development. She is passionate about designing user-friendly interfaces and improving the overall user experience in software applications. Roslyn envisions a career in UX/UI design, where she can contribute to the development of technology that positively impacts users' lives.</div>

              
          </div>
      </div>
    </div>
  </section>

  <div class="hero">
    <div class="content1">
      <p class="anim">Our Story</p>
        <h1 class="anim">Among Hinungdan</h1>
        <p class="anim">ART Solutions, comprised of Apple, Roslyn, and Trixie, embodies the fusion of creativity and technical prowess, as they embark on a mission to revolutionize problem-solving in the tech sphere. As Bachelor of Science in Computer Science students at the University of the Philippines Mindanao, their shared passion for innovation drives them to craft ingenious solutions that seamlessly blend artistry with technology. With Roslyn's design finesse, Trixie's coding expertise, Apple's intuitive user-centric approach, the team leverages their diverse skill set to tackle even the most complex tech challenges. Fueled by their unwavering commitment to excellence, ART Solutions is not just a team—it's a beacon of ingenuity, shaping the future of technology one creative solution at a time.</p>
    </div>
    <img src="photos/445573797_1637200113760498_9054673228171122051_n.jpg" alt="ART Solutions Team Photo" class="feature-img anim">
  </div>

  <div class="hero1">
    <div class="content2">
      <p class="anim">Why Davhow?</p>
        <h1 class="anim">Gigikanan</h1>
        <p class="anim">The web developers were born and grew up in the King City of the South, Davao City which creates the reason behind the name of the website. Aside from that, DavHow is designed for Dabawenyos redefining the approach to legal paperwork, gaining insights and information hassle-free.
          <br><br>
          DavHow started as a project developed for Computer Science 3- Introduction to Web Design of the University of the Philippines Mindanao, Bachelor of Science in Computer Science and is continued as a project for Computer Science 126- Web-based System Development. It is a website where you can easily find guidelines and requirements for various legal documents and identifications. It is designed to be user-friendly, providing a simple and centralized place for quick access to essential information. Our platform aims to meet your specific needs. We've created a practical interface to make the process of understanding legal document criteria straightforward and efficient. 
          <br><br>
          This is more than just a website; it's a practical solution at the intersection of legal documentation and computer science. Step into a world where accessing guidelines is intuitive, and requirements are presented with clarity.</p>
    </div>
    <img src="photos/why.png" alt="Why DavHow?" class="feature-img anim">
  </div>

  <section>
    <div class="contactUs">
      <div class="contactUsTitle">
        <h2>How can we help?</h2>
      </div>
      <div class="box">
        <div class="contact form">
          <h3>Send a message</h3>
          <form method="POST">
            <div class="formBox">
              <div class="row50">
                <div class="inputBox">
                  <span>First Name</span>
                  <input type="text" placeholder="Juan" name="first-name">
                </div>
                <div class="inputBox">
                  <span>Last Name</span>
                  <input type="text" placeholder="Dela Cruz" name="last-name">
                </div>
              </div>

              <div class="row50">
                <div class="inputBox">
                  <span>Email Address</span>
                  <input type="text" placeholder="juandelacruz@email.com" name="email">
                </div>
                <div class="inputBox">
                  <span>Mobile</span>
                  <input type="text" placeholder="09123456789" name="mobile-number">
                </div>
              </div>
              <div class="row100">
                <div class="inputBox title">
                  <span>Title</span>
                  <input type="text" placeholder="Input title here" name="title">
                </div>
              </div>
              <div class="row100">
                <div class="inputBox">
                  <span>Message</span>
                  <textarea placeholder="Write your message here..." name="message"></textarea>

                </div>
              </div>

              <div class="row100">
                <div class="inputBox send-button">
                  <span></span>
                  <button type="submit"> Send </button>
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class="contact info">
          <h3>Contact Info</h3>
          <div class="infoBox">
            <div>
              <span><ion-icon name="location"></ion-icon></span>
              <p>University of the Philippines Mindanao <br>Tugbok, Davao City <br> Philippines 8000</p>
            </div>
            <div>
              <span><ion-icon name="mail"></ion-icon></span>
              <a href="mailto:pependepen16@gmail.com">artsolutions24@gmail.com</a>
            </div>
            <div>
              <span><ion-icon name="call"></ion-icon></span>
              <a href="tel:+639123456789">+639 12 345 6789</a>
            </div>
            <ul class="sci">
              <li><a href="https://www.facebook.com/profile.php?id=61560047196528"><ion-icon name="logo-facebook"></ion-icon></a></li>
              <li><a href="https://x.com/ART_Solutions23"><i class="ri-twitter-x-line"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="contact map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.3468350854846!2d125.4841158!3d7.0857312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f9121ec4bf7e25%3A0xe1cad0747134bec5!2sUniversity%20of%20the%20Philippines%20Mindanao!5e0!3m2!1sen!2sph!4v1716659023728!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    <div class="contactField"></div>
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
</php>