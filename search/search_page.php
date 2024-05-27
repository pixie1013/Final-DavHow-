<?php 
session_start();

include("../connection.php");
include("../functions.php");

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
  <link rel="stylesheet" href="../index.css">
  <link rel="stylesheet" href="search.css">
  <link rel="icon" type="image/x-icon" href="/photos/logo.png">
  <title>DavHow: Search</title>
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
                <img src="../photos/logo.png" alt="DavHow: Unsaon ni Bai?">
                <p class="Brand">DavHow</p>
                <p class="Tagline">UNSAON NI BAI?</p>
            </div>
            <nav class="nav1">
                <?php if (isset($user_data)): ?>
                <span class="greeting">Madayaw, <?php echo htmlspecialchars($user_data['user_name']); ?></span>
                <a href="#" onclick="logout()" class="logout-button" id="logout-btn"><i class="ri-logout-box-r-line"></i></a>
                <?php else: ?>
                <a href="../login.php"><ion-icon name="person-circle-outline" class="nav_login" id="login-btn"></ion-icon></a>
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
  
    <div class="banner">
        <div class="content">
            <h1>
                <a class="a1">Explore</a>
                <a class="a1"> and</a>
                <a class="a1"> Discover</a>
            </h1>
            <form id="form">
                <div class="input-group">
                    <div class="form-outline">
                        <input type="text" id="form1" class="form-control" placeholder="What are you looking for?"/>
                        <button type="submit" class="btn btn-primary" id="searchButton">
                            <div class="search-label">
                                <label class="form-label" for="form1">Search</label>
                            </div>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="message_result">
        <img src="../photos/no-results-found.svg">
        <h2>No Results Found</h2>
        <p>We couldn't find what you're searching for.</p>
        <p>Try searching again.</p>
    </div>
    <section class="product"> 
      <button class="pre-btn"><img src="../photos/arrow.png" alt=""></button>
      <button class="nxt-btn"><img src="../photos/arrow.png" alt=""></button>
      <div class="product-container">
        <div class="product-card" data-id="1">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Affidavit to Use Surname of Father.png" class="product-thumb" alt="">
                <a href="../documents/Affidavit to Use the Surname of the Father.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand" >Affidavit to Use Surname of Father</h2>
            </div>
        </div>
        <div class="product-card" data-id="2">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Annual Income Tax for Individuals Earning Solely from Compensation (Including Non-BusinessNon-Profession Related Income).png" class="product-thumb" alt="">
                <a href="../documents/Annual Income Tax for Individuals.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Annual Income Tax for Individuals Earning Solely From Compensation (Including Non-Business and Non-Profession Related)</h2>
            </div>
        </div>
        <div class="product-card" data-id="3">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Annual Income Tax for Individuals, Estates, and Trusts.png" class="product-thumb" alt="">
                <a href="../documents/Annual Income Tax for Inviduals, Estates and Trusts.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Annual Income Tax for Individuals, Estates, and Trusts</h2>
            </div>
        </div>
        <div class="product-card" data-id="4">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Annual Income Tax for Partnerships and Corporations.png" class="product-thumb" alt="">
                <a href="../documents/Annual Income Tax for Corporations and Partnerships.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info" data-id="5">
                <h2 class="product-brand">Annual Income Tax for Partnerships and Corporations</h2>
            </div>
        </div>
        <div class="product-card" data-id="5">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Barangay Certificate.png" class="product-thumb" alt="">
                <a href="../documents/Barangay Certificate.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Barangay Certificate</h2>
            </div>
        </div>
        <div class="product-card" data-id="6">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Business Permit.png" class="product-thumb" alt="">
                <a href="../documents/Issuance of Business Permit.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Business Permit - Issuance</h2>
            </div>
        </div>
        <div class="product-card" data-id="7">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Business Permit.png" class="product-thumb" alt="">
                <a href="../documents/Renewal of Business Permit.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Business Permit - Renewal</h2>
            </div>
        </div>
        <div class="product-card" data-id="8">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Certificate of Death.png" class="product-thumb" alt="">
                <a href="../documents/Certificate of Death - DROD.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of Death - Delayed Registration</h2>
            </div>
        </div>
        <div class="product-card" data-id="9">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Certificate of Death.png" class="product-thumb" alt="">
                <a href="../documents/Certificate of Death - TROD.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of Death - Timely Registration</h2>
            </div>
        </div>
        <div class="product-card" data-id="10">
            <div class="product-image">
                <img src="../photos/DOCS Photos/PSA Death Certificate.png" class="product-thumb" alt="">
                <a href="../documents/PSA Issued Death Certificate.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of Death (PSA)</h2>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image" data-id="11">
                <img src="../photos/DOCS Photos/Certificate of Indigency.png" class="product-thumb" alt="">
                <a href="../documents/Certificate of Indigency.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of Indigency</h2>
            </div>
        </div>
        <div class="product-card" data-id="12">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Certificate of Live Birth.png" class="product-thumb" alt="">
                <a href="../documents/Certificate Of Live Birth - DROB.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of Live Birth - Delayed Registration</h2>
            </div>
        </div>
        <div class="product-card" data-id="13">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Certificate of Live Birth.png" class="product-thumb" alt="">
                <a href="../documents/Certificate of Live Birth - OTR.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of Live Birth - Out of Town Registration</h2>
            </div>
        </div>
        <div class="product-card" data-id="14">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Certificate of Live Birth.png" class="product-thumb" alt="">
                <a href="../documents/Certificate of Live Birth-TROB.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info" data-id="15">
                <h2 class="product-brand">Certificate of Live Birth - Timely Registration</h2>
            </div>
        </div>
        <div class="product-card" data-id="15">
            <div class="product-image">
                <img src="../photos/DOCS Photos/PSA Birth Certificate.png" class="product-thumb" alt="">
                <a href="../documents/PSA Issued Birth Certififcate.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of Live Birth (PSA)</h2>
            </div>
        </div>
        <div class="product-card" data-id="16">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Certificate of Marriage.png" class="product-thumb" alt="">
                <a href="../documents/Certificate of Marriage - DROM.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of Marriage - Delayed Registration</h2>
            </div>
        </div>
        <div class="product-card" data-id="17">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Certificate of Marriage.png" class="product-thumb" alt="">
                <a href="../documents/PSA Issued Marriage Certificate.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of Marriage (PSA)</h2>
            </div>
        </div>
        <div class="product-card" data-id="18">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Certificate of Marriage.png" class="product-thumb" alt="">
                <a href="../documents/Certificate of Marriage - TROM.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of Marriage - Timely Registration</h2>
            </div>
        </div>
        <div class="product-card" data-id="19">
            <div class="product-image">
                <img src="../photos/DOCS Photos/CENOMAR.png" class="product-thumb" alt="">
                <a href="../documents/PSA Issued CENOMAR.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of No Marriage Record (CENOMAR)</h2>
            </div>
        </div>
        <div class="product-card" data-id="20">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Certificate of Residency.png" class="product-thumb" alt="">
                <a href="../documents/Certificate of Residency.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of Residency</h2>
            </div>
        </div>
        <div class="product-card" data-id="21">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Certificate of Exemption.png" class="product-thumb" alt="">
                <a href="../documents/Certificate of Exemption.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Certificate of Tax Exemption</h2>
            </div>
        </div>
        <div class="product-card" data-id="22">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Cedula.png" class="product-thumb" alt="">
                <a href="../documents/Community Tax Certificate.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Community Tax Certificate (CEDULA)</h2>
            </div>
        </div>
        <div class="product-card" data-id="23">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Full Retirement of Business Permit.png" class="product-thumb" alt="">
                <a href="../documents/Full Retirement of Business Permit.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Full Retirement of Business Permit</h2>
            </div>
        </div>
        <div class="product-card" data-id="24">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Legal Instruments for Legitimation.png" class="product-thumb" alt="">
                <a href="../documents/Legal Instruments for Legitimation.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Legal Instruments for Legitimation</h2>
            </div>
        </div>
        <div class="product-card" data-id="25">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Manual Tax Declaration.png" class="product-thumb" alt="">
                <a href="../documents/Manual Tax Declaration.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Manual Tax Declaration</h2>
            </div>
        </div>
        <div class="product-card" data-id="26">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Marriage License.png" class="product-thumb" alt="">
                <a href="../documents/Marriage License.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Marriage License</h2>
            </div>
        </div>
        <div class="product-card" data-id="27">
            <div class="product-image">
                <img src="../photos/DOCS Photos/NBI Clearance.png" class="product-thumb" alt="">
                <a href="../documents/NBI Clearance.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">NBI Clearance</h2>
            </div>
        </div>
        <div class="product-card" data-id="28">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Occupational Permit.png" class="product-thumb" alt="">
                <a href="../documents/Occupational Permit.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Occupational Permit</h2>
            </div>
        </div>
        <div class="product-card" data-id="29">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Police Clearance.png" class="product-thumb" alt="">
                <a href="../documents/Police Clearance.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Police Clearance Certificate</h2>
            </div>
        </div>
        <div class="product-card" data-id="30">
            <div class="product-image">
                <img src="../photos/DOCS Photos/Tax Clearance Certificate.png" class="product-thumb" alt="">
                <a href="../documents/Tax Clearance Certificate.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Tax Clearance Certificate</h2>
            </div>
        </div>
        <div class="product-card" data-id="31">
            <div class="product-image">
                <img src="../photos/ID Photos/BRGYID.png" class="product-thumb" alt="">
                <a href="../valid_id/BARANGAY ID.php"><button class="card-btn">Know More</button></a>
            </div>
            <div class="product-info">
                    <h2 class="product-brand">Barangay ID</h2>
                </div>
            </div>
            <div class="product-card" data-id="32">
                <div class="product-image">
                    <img src="../photos/ID Photos/GSIS ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/GSIS UMID ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">GSIS Unified Multi-Purpose ID</h2>
                </div>
            </div>
            <div class="product-card" data-id="33">
                <div class="product-image">
                    <img src="../photos/ID Photos/IBP ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/IBP ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Integrated Bar of the Philippines ID (IBP)</h2>
                </div>
            </div>
            <div class="product-card" data-id="34">
                <div class="product-image">
                    <img src="../photos/ID Photos/FIREARMS ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/Firearms License.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info" data-id="35">
                    <h2 class="product-brand">License to Own and Possess Firearms (LTOPF)</h2>
                </div>
            </div>
            <div class="product-card" data-id="35">
                <div class="product-image">
                    <img src="../photos/ID Photos/NON PROF  DL.png" class="product-thumb" alt="">
                    <a href="../valid_id/Drivers License.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Non-Professional Driver's License</h2>
                </div>
            </div>
            <div class="product-card" data-id="36">
                <div class="product-image">
                    <img src="../photos/ID Photos/OWWA ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/OWWA ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Overseas Workers Welfare Administration Card (OWWA)</h2>
                </div>
            </div>
            <div class="product-card" data-id="37">
                <div class="product-image">
                    <img src="../photos/ID Photos/4Ps ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/4Ps ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Pantawid Pamilyang Pilipino Program I (4Ps)</h2>
                </div>
            </div>
            <div class="product-card" data-id="38">
                <div class="product-image">
                    <img src="../photos/ID Photos/PASSPORT ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/Passport ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Passport ID</h2>
                </div>
            </div>
            <div class="product-card" data-id="39">
                <div class="product-image">
                    <img src="../photos/ID Photos/PWD ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/PWD ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Persons with Disabilities ID (PWD)</h2>
                </div>
            </div>
            <div class="product-card" data-id="40">
                <div class="product-image">
                    <img src="../photos/ID Photos/PhilHealth ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/PhilHealth ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">PhilHealth ID</h2>
                </div>
            </div>
            <div class="product-card" data-id="41">
                <div class="product-image">
                    <img src="../photos/ID Photos/PRC ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/PRC ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Philippine Regulation Commission ID (PRC)</h2>
                </div>
            </div>
            <div class="product-card" data-id="42">
                <div class="product-image">
                    <img src="../photos/ID Photos/PhilSys ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/PhilSys ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Philippine System ID</h2>
                </div>
            </div>
            <div class="product-card" data-id="43">
                <div class="product-image">
                    <img src="../photos/ID Photos/POSTAL ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/POSTAL ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Postal ID</h2>
                </div>
            </div>
            <div class="product-card" data-id="44">
                <div class="product-image">
                    <img src="../photos/ID Photos/PROF DL.png" class="product-thumb" alt="">
                    <a href="../valid_id/Drivers License.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Professional Driver's License</h2>
                </div>
            </div>
            <div class="product-card" data-id="45">
                <div class="product-image">
                    <img src="../photos/ID Photos/SNCT ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/Senior Citizen ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Senior Citizen ID</h2>
                </div>
            </div>
            <div class="product-card" data-id="46">
                <div class="product-image">
                    <img src="../photos/ID Photos/SOLO PARENT ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/Solo Parent ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Solo Parent ID</h2>
                </div>
            </div>
            <div class="product-card" data-id="47">
                <div class="product-image">
                    <img src="../photos/ID Photos/STUDENT PERMIT.png" class="product-thumb" alt="">
                    <a href="../valid_id/Drivers License.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Student Driver's Permit</h2>
                </div>
            </div>
            <div class="product-card" data-id="48">
                <div class="product-image">
                    <img src="../photos/ID Photos/TIN ID.png" class="product-thumb" alt="">
                    <a href="../valid_id/TIN ID.php"><button class="card-btn">Know More</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Taxpayer Identification Number ID (TIN)</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container1">
        <h1>DavHow Catalog</h1>
        <div class="catalog">
            <div class="column">
                <div class="letter-section">
                    <h2>A</h2>
                    <ul>
                        <li><a href="../documents/Affidavit to Use the Surname of the Father.php">Affidavit to Use Surname of Father</a></li>
                        <li><a href="../documents/Annual Income Tax for Individuals.php">Annual Income Tax for Individuals Earning Solely From Compensation (Including Non-Business and Non-Profession Related)</a></li>
                        <li><a href="../documents/Annual Income Tax for Inviduals, Estates and Trusts.php">Annual Income Tax for Individuals, Estates, and Trusts</a></li>
                        <li><a href="../documents/Annual Income Tax for Corporations and Partnerships.php">Annual Income Tax for Partnerships and Corporations</a></li>
                    </ul>
                </div>
                <div class="letter-section">
                    <h2>B</h2>
                    <ul>
                        <li><a href="../documents/Barangay Certificate.php">Barangay Certificate</a></li>
                        <li><a href="../valid_id/BARANGAY ID.php">Barangay ID</a></li>
                        <li><a href="../documents/Issuance of Business Permit.php">Business Permit - Issuance</a></li>
                        <li><a href="../documents/Renewal of Business Permit.php">Business Permit - Renewal</a></li>
                    </ul>
                </div>
                <div class="letter-section">
                    <h2>C</h2>
                    <ul>
                        <li><a href="../documents/Certificate of Death - DROD.php">Certificate of Death - Delayed Registration</a></li>
                        <li><a href="../documents/Certificate of Death - TROD.php">Certificate of Death - Timely Registration</a></li>
                        <li><a href="../documents/PSA Issued Death Certificate.php">Certificate of Death (PSA)</a></li>
                        <li><a href="../documents/Certificate of Indigency.php">Certificate of Indigency</a></li>
                        <li><a href="../documents/Certificate Of Live Birth - DROB.php">Certificate of Live Birth - Delayed Registration</a></li>
                        <li><a href="../documents/Certificate of Live Birth - OTR.php">Certificate of Live Birth - Out of Town Registration</a></li>
                        <li><a href="../documents/Certificate of Live Birth-TROB.php">Certificate of Live Birth - Timely Registration</a></li>
                        <li><a href="../documents/PSA Issued Birth Certififcate.php">Certificate of Live Birth (PSA)</a></li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <div class="letter-section">
                    <h2>C</h2>
                    <ul>
                        <li><a href="../documents/Certificate of Marriage - DROM.php">Certificate of Marriage - Delayed Registration</a></li>
                        <li><a href="../documents/PSA Issued Marriage Certificate.php">Certificate of Marriage (PSA)</a></li>
                        <li><a href="../documents/Certificate of Marriage - TROM.php">Certificate of Marriage - Timely Registration</a></li>
                        <li><a href="../documents/PSA Issued CENOMAR.php">Certificate of No Marriage Record (CENOMAR)</a></li>
                        <li><a href="../documents/Certificate of Residency.php">Certificate of Residency</a></li>
                        <li><a href="../documents/Community Tax Certificate.php">Community Tax Certificate (CEDULA)</a></li>
                        <li><a href="../documents/Certificate of Exemption.php">Certificate of Tax Exemption</a></li>
                    </ul>
                </div>
                <div class="letter-section">
                    <h2>F</h2>
                    <ul>
                        <li><a href="../documents/Full Retirement of Business Permit.php">Full Retirement of Business Permit</a></li>
                    </ul>
                </div>
                <div class="letter-section">
                    <h2>G</h2>
                    <ul>
                        <li><a href="../valid_id/GSIS UMID ID.php">GSIS Unified Multi-Purpose ID</a></li>
                    </ul>
                </div>
                <div class="letter-section">
                    <h2>I</h2>
                    <ul>
                        <li><a href="../valid_id/IBP ID.php">Integrated Bar of the Philippines ID (IBP)</a></li>
                    </ul>
                </div>
                <div class="letter-section">
                    <h2>L</h2>
                    <ul>
                        <li><a href="../documents/Legal Instruments for Legitimation.php">Legal Instruments for Legitimation</a></li>
                        <li><a href="../valid_id/Firearms License.php">License to Own and Possess Firearms (LTOPF)</a></li>
                    </ul>
                </div>
                <div class="letter-section">
                    <h2>M</h2>
                    <ul>
                        <li><a href="../documents/Manual Tax Declaration.php">Manual Tax Declaration</a></li>
                        <li><a href="../documents//Marriage License.php">Marriage License</a></li>
                    </ul>
                </div>
            </div>
            <div class="column">
            <div class="letter-section">
                    <h2>N</h2>
                    <ul>
                        <li><a href="../documents/NBI Clearance.php">NBI Clearance</a></li>
                        <li><a href="../valid_id/Drivers License.php">Non-Professional Driver's License</a></li>
                    </ul>
                </div>
                <div class="letter-section">
                    <h2>O</h2>
                    <ul>
                        <li><a href="../documents/Occupational Permit.php">Occupational Permit</a></li>
                        <li><a href="../valid_id/OWWA ID.php">Overseas Workers Welfare Administration Card (OWWA)</a></li>
                    </ul>
                </div>
                <div class="letter-section">
                    <h2>P</h2>
                    <ul>
                        <li><a href="../valid_id/4Ps ID.php">Pantawid Pamilyang Pilipino Program ID (4Ps)</a></li>
                        <li><a href="../valid_id/Passport ID.php">Passport ID</a></li>
                        <li><a href="../valid_id/PWD ID.php">Persons with Disabilities ID (PWD)</a></li>
                        <li><a href="../valid_id/PhilHealth ID.php">PhilHealth ID</a></li>
                        <li><a href="../valid_id/PRC ID.php">Philippine Regulation Commission ID</a></li>
                        <li><a href="../valid_id/PhilSys ID.php">Philippine System ID</a></li>
                        <li><a href="../documents/Police Clearance.php">Police Clearance Certificate</a></li>
                        <li><a href="../valid_id/POSTAL ID.php">Postal ID</a></li>
                        <li><a href="../valid_id/Drivers License.php">Professional Driver's License</a></li>
                    </ul>
                </div>
                <div class="letter-section">
                    <h2>S</h2>
                    <ul>
                        <li><a href="../valid_id/Senior Citizen ID.php">Senior Citizen ID</a></li>
                        <li><a href="../valid_id/Solo Parent ID.php">Solo Parent ID</a></li>
                        <li><a href="../valid_id/Drivers License.php">Student Driver's Permit</a></li>
                    </ul>
                </div>
                <div class="letter-section">
                    <h2>T</h2>
                    <ul>
                        <li><a href="../documents/Tax Clearance Certificate.php">Tax Clearance Certificate</a></li>
                        <li><a href="../valid_id/TIN ID.php">Taxpayer Identification Number ID (TIN)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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
    <script src="search.js"></script>
</body>
</html>