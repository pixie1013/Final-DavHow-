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
    <title>DavHow: Death Certificate - Timely Registration</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="header.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                            <a href="../homepage.php" class="nav_link">HOME</a>
                        </li>
                        <li class="nav_item">
                            <a href="../catalog.php" class="nav_link">CATALOG</a>
                        </li>
                        <li class="nav_item">
                            <a href="../about_us.php" class="nav_link">ABOUT US</a>
                        </li>
                        <li class="nav_item">
                            <a href="../discussionforum.php" class="nav_link">FORUM</a>
                        </li>
                        <li class="nav_item">
                            <a href="../adminpanel_usermessages.php" class="nav_link">MESSAGES</a>
                        </li>';
                    } elseif ($isLoggedIn) {
                        echo '
                        <li class="nav_item">
                            <a href="../homepage.php" class="nav_link">HOME</a>
                        </li>
                        <li class="nav_item">
                            <a href="../catalog.php" class="nav_link">CATALOG</a>
                        </li>
                        <li class="nav_item">
                            <a href="../about_us.php" class="nav_link">ABOUT US</a>
                        </li>
                        <li class="nav_item">
                            <a href="../discussionforum.php" class="nav_link">FORUM</a>
                        </li>';
                    } else {
                        echo '
                        <li class="nav_item">
                            <a href="../homepage.php" class="nav_link">HOME</a>
                        </li>
                        <li class="nav_item">
                            <a href="../catalog.php" class="nav_link">CATALOG</a>
                        </li>
                        <li class="nav_item">
                            <a href="../about_us.php" class="nav_link">ABOUT US</a>
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
                <a href="../search/search_page.php"><i class="ri-search-line nav_search" id="search-btn"></i></a>
    
                <!-- Toggle button -->
                <div class="nav_toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>
    <div class="whole-document-area">
    <!-- Document-Area -->
    <section class="document-area">
        <div class="image-wrapper">
            <img src="background-header.png" alt="">
            <div class="document-text">
                <h1>DEATH CERTIFICATE - Timely Registration</h1>
                <p>A legal document that verifies someone’s passing. This official document is issued by the relevant government authority, usually the vital records office or a similar agency, and serves as conclusive proof of an individual's death. It includes essential information such as the person's name, date of birth, date and cause of death, and is crucial for various legal and administrative purposes, including inheritance, insurance claims, and estate settlement.</p>
                <p>This applies to all deaths occurring within Davao City within 30 days from the date of death.</p>
            </div>
        </div>
    </section>    
    <section class="button-area">
        <div class="information-option">
            <input type="radio" id="tap1" name="tap" checked>
            <input type="radio" id="tap2" name="tap">
            <input type="radio" id="tap3" name="tap">
            <input type="radio" id="tap4" name="tap">
            <input type="radio" id="tap5" name="tap">
            <input type="radio" id="tap6" name="tap">

            <!-- Curved Navigation Menu Indicator -->
            <div class="slider"></div>      
            
            <!--Buttons -->
            <div>
                <div>
                    <label for="tap1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 31 31">
                        <g clip-path="url(#a)">
                            <path stroke="#FFF3F3" stroke-linecap="round" stroke-linejoin="round" d="M25.823 27.353a2.149 2.149 0 0 1-2.149 2.15H4.333a2.15 2.15 0 0 1-2.15-2.15V3.714a2.149 2.149 0 0 1 2.15-2.15h12.004c.57 0 1.116.227 1.52.63l7.337 7.338c.403.403.63.95.63 1.52v16.301ZM15.204 14.19h5.372m-5.372 7.455h5.372"/>
                            <path stroke="#FFF3F3" stroke-linecap="round" stroke-linejoin="round" d="m6.893 21.523 1.8 1.8 3.002-4.2m-4.802-5.189 1.8 1.801 3.002-4.202"/>
                        </g>
                        <defs>
                            <clipPath id="a">
                            <path fill="#fff" d="M.64.49h30.086v30.086H.64z"/>
                            </clipPath>
                        </defs>
                        </svg>           
                    </label>
                </div>
                <span>Requirements</span>
            </div>
            <div>
                <div>
                    <label for="tap2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 32 32">
                        <g clip-path="url(#a)">
                            <path stroke="#FFF1F1" stroke-linecap="round" stroke-linejoin="round" d="M28.2 2.593H3.434a2.251 2.251 0 0 0-2.252 2.25v9.006a2.251 2.251 0 0 0 2.252 2.252h24.764a2.251 2.251 0 0 0 2.252-2.252V4.844a2.251 2.251 0 0 0-2.252-2.251Z"/>
                            <path stroke="#FFF1F1" stroke-linecap="round" stroke-linejoin="round" d="M7.937 10.472a1.126 1.126 0 1 0 0-2.251 1.126 1.126 0 0 0 0 2.251Zm9.006-1.125h7.88M3.435 16.1a2.251 2.251 0 0 0-2.252 2.252v9.005a2.251 2.251 0 0 0 2.252 2.252h24.764a2.252 2.252 0 0 0 2.252-2.252v-9.005a2.252 2.252 0 0 0-2.252-2.251"/>
                            <path stroke="#FFF1F1" stroke-linecap="round" stroke-linejoin="round" d="M7.937 23.98a1.126 1.126 0 1 0 0-2.251 1.126 1.126 0 0 0 0 2.251Zm9.006-1.125h7.88"/>
                        </g>
                        <defs>
                            <clipPath id="a">
                            <path fill="#fff" d="M.058.341h31.519V31.86H.058z"/>
                            </clipPath>
                        </defs>
                        </svg>          
                    </label>
                </div>
                <span>Procedures</span>
            </div>
            <div>
                <div>
                    <label for="tap3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 34 34">
                        <path stroke="#000"/>
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M27.997 12.11c0 7.06-10.822 15.298-10.822 15.298S6.353 19.17 6.353 12.11c0-5.768 4.928-10.591 10.822-10.591 5.895 0 10.822 4.823 10.822 10.591Z"/>
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M17.175 15.64c1.992 0 3.607-1.58 3.607-3.53 0-1.95-1.615-3.531-3.607-3.531-1.992 0-3.607 1.58-3.607 3.53 0 1.95 1.615 3.53 3.607 3.53Zm9.805 8.238h2.22l3.607 8.238H1.544l3.607-8.238H7.37"/>
                        </svg> 
                    </label>       
                </div>
                <span>Location</span>
            </div>
            <div>
                <div>
                    <label for="tap4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 31 31">
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M19.654 16.508c5.214 0 9.44-1.879 9.44-4.196 0-2.317-4.226-4.196-9.44-4.196-5.213 0-9.44 1.879-9.44 4.196 0 2.317 4.227 4.196 9.44 4.196Z"/>
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M10.214 12.312v12.587c0 2.308 4.196 4.196 9.44 4.196 5.245 0 9.44-1.888 9.44-4.196V12.312"/>
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M29.095 18.605c0 2.308-4.196 4.196-9.44 4.196-5.245 0-9.44-1.888-9.44-4.195m9.23-14.667a14.202 14.202 0 0 0-8.182-2.098c-5.224 0-9.44 1.888-9.44 4.196 0 1.238 1.217 2.35 3.147 3.147"/>
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M4.97 21.77c-1.93-.796-3.147-1.908-3.147-3.146V6.037"/>
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M4.97 15.477c-1.93-.797-3.147-1.909-3.147-3.146"/>
                        </svg> 
                    </label>         
                </div>
                <span>Fees</span>
            </div>
            <div>
                <div>
                    <label for="tap5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 32 32">
                        <g clip-path="url(#a)">
                            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M3.435 30.734h24.764a2.251 2.251 0 0 0 2.252-2.251V3.718a2.251 2.251 0 0 0-2.252-2.251H3.435a2.251 2.251 0 0 0-2.252 2.251v24.765a2.251 2.251 0 0 0 2.252 2.251Z"/>
                            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="m3.997 30.735 16.435-15.49a1.125 1.125 0 0 1 1.441 0l8.578 6.146M10.189 13.85a3.377 3.377 0 1 0 0-6.755 3.377 3.377 0 0 0 0 6.754Z"/>
                        </g>
                        <defs>
                            <clipPath id="a">
                            <path fill="#fff" d="M.058.341h31.519V31.86H.058z"/>
                            </clipPath>
                        </defs>
                        </svg> 
                    </label>         
                </div>
                <span>Preview</span>
            </div>
            <div>
                <div>
                    <label for="tap6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 30 30">
                        <g clip-path="url(#a)">
                            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M21.469 26.714a5.244 5.244 0 1 0 0-10.49 5.244 5.244 0 0 0 0 10.49Zm7.341 2.096-3.63-3.629M15.175 4.686a3.147 3.147 0 0 0-3.147-3.146H1.54v20.978h10.49m3.145-17.832v9.44m0-9.44a3.147 3.147 0 0 1 3.147-3.147h10.49v14.685"/>
                        </g>
                        <defs>
                            <clipPath id="a">
                            <path fill="#fff" d="M.49.49h29.37v29.37H.49z"/>
                            </clipPath>
                        </defs>
                        </svg>  
                    </label>  
                </div>
                <span>References</span>
            </div>            
        </div>
    </section>
    <!-- Information sections -->
    <section class="information-area">
        <!-- Requirements -->
        <div class="requirement-info info-box requirement-details">
            <p>Note: As per Memo Circular No. 2008-26, a Death Certificate will not be registered if there is no name of the deceased and the cause of death is not determined.</p>
        </div>
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/backto-icon.svg" alt="">
                <h2>If death happened in Hospital</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">Filled-out death certificate</h3>
                <p>4 original</p>
            </div>
        </div>
        
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/backto-icon.svg" alt="">
                <h2>If death happened at Home</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">Barangay Certification</h3>
                <p>1 original</p>
            </div>
        </div>
        
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/backto-icon.svg" alt="">
                <h2>If Dead on the Spot (DOS)</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">Police Report</h3>
                <p>1 original</p>
            </div>
        </div>
        
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/backto-icon.svg" alt="">
                <h2>If Dead on Arrival (DOA)</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">Certificate from the hospital</h3>
                <p>1 original, 1 photocopy</p>
            </div>
        </div>
        

         <!-- Procedure -->
        <div class="procedure-info">
            <div class="info-box">
                <div class="circle-background">
                    <div class="procedure-number">
                        <p>1</p>
                    </div>
                </div>         
                <div class="info-details">
                    <h3 class="requirement">Fill Out Death Certificate</h3>
                    <p>Complete the Death Certificate form.</p>                    
                </div>
            </div>
            
            <div class="info-box">
                <div class="circle-background">
                    <div class="procedure-number">
                        <p>2</p>
                    </div>
                </div>         
                <div class="info-details">
                    <h3 class="requirement">Signature of Embalmer</h3>
                    <p>Go to the concerned Funeral Parlor for the embalmer's signature on the Death Certificate.</p>                    
                </div>
            </div>
            
            <div class="info-box">
                <div class="circle-background">
                    <div class="procedure-number">
                        <p>3</p>
                    </div>
                </div>         
                <div class="info-details">
                    <h3 class="requirement">Review and Approval by City Health Officer</h3>
                    <p>Proceed to the City Health Office for the review and approval/signature of the City Health Officer.</p>
                    <p>Pay the required fee (Php 50.00) at the Treasurer's office.</p>
                </div>
            </div>
            
            <div class="info-box">
                <div class="circle-background">
                    <div class="procedure-number">
                        <p>4</p>
                    </div>
                </div>         
                <div class="info-details">
                    <h3 class="requirement">Submission to Death Division in City Civil Registrar’s Office</h3>
                    <p>Go to the Death Division in the City Civil Registrar’s Office.</p>
                    <p>Submit the completed Death Certificate and required documents for registration.</p>
                </div>
            </div>
            
            <div class="info-box">
                <div class="circle-background">
                    <div class="procedure-number">
                        <p>5</p>
                    </div>
                </div>         
                <div class="info-details">
                    <h3 class="requirement">Payment of Burial Permit Fee</h3>
                    <p>Proceed to the City Treasurer's Office to pay the burial permit fee.</p>
                    <p>The fee for public and private burial permits is Php 75.00.</p>
                </div>
            </div>
            
            <div class="info-box">
                <div class="circle-background">
                    <div class="procedure-number">
                        <p>6</p>
                    </div>
                </div>         
                <div class="info-details">
                    <h3 class="requirement">Submission of Official Receipt</h3>
                    <p>Return to the Death Division in the City Civil Registrar’s Office.</p>
                    <p>Submit the official receipt of the burial permit fee payment.</p>
                    <p>Wait for the release of the registered Death Certificate.</p>
                </div>
            </div>            
        </div>
        

        <div class="location-info" hidden>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5322302331024!2d125.60625507397847!3d7.0641153166471105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d78bad7d1a3%3A0x438c5f019b392085!2sCity%20Civil%20Registrar&#39;s%20Office!5e0!3m2!1sen!2sph!4v1716121610242!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="details-container">
                <!-- LIST OF LOCATIONS -->
                <div class="location-details">
                    <strong><p>City Civil Registrar’s Office - Death Division</p></strong>    
                    <table>
                        <tr>
                            <td>Address</td>
                            <td>Ground Floor, SP Building, San Pedro Street, Davao City</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>lcr@davaocity.gov.ph</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>(082) 241-1000 local 364/365</td>
                        </tr>
                    </table>   
                                     
                </div>
            </div>
        </div>
        

        <!--Fees-->
        <div class="fee-info" hidden>
            <div class="fee">
                <table>
                        <tr>
                            <strong><td class="fee-name">City Health Office Review and Approval Fee</td></strong>
                            <td rowspan="2">PHP 50.00</td>
                        </tr>
                        <tr>
                            <td class="fee-location">City Treasurer's Office</td>                    
                        </tr>
                </table>
            </div>
            <div class="fee">
                <table>
                        <tr>
                            <strong><td class="fee-name">Burial Permit Fee</td></strong>
                            <td rowspan="2">PHP 75.00</td>
                        </tr>
                        <tr>
                            <td class="fee-location">City Treasurer's Office</td>                    
                        </tr>
                </table>
            </div>
            <div class="total-fee fee">
                <table>
                        <tr>
                            <td class="fee-total">Total to pay:</td>
                            <td rowspan="2"><strong>PHP 125.00</strong></td>
                        </tr>
                </table>
            </div>
        </div>     
        
        <!--Sample Photo-->
        <div class="samplephoto-info" >
            <p>DISCLAIMER: This is a sample photo of a document.</p>
            <div class="img-magnifier-container" onmouseover="magnify(reference-photo, 3)">
                <img id="reference-photo" src="/New DavHow/documents/document_images/Certificate-of-Death_page-0001.jpg" alt="">
            </div>
            <div class="img-magnifier-container" onmouseover="magnify(reference-photo, 3)">
                <img id="reference-photo" src="/New DavHow/documents/document_images/Certificate-of-Death_page-0002.jpg" alt="">
            </div>
        </div>

        <!--References-->
        <div class="reference-info">
            <div class="article-reference">
                <a href="https://www.davaocity.gov.ph/wp-content/uploads/2023/05/Citizens-Charter-Handbook-Volume-I-2023.pdf" target="_blank">Davao City Citizen Charter</a>
            </div>
            <div class="article-reference">
                <a href="httpstuybatangas.gov.phwp-contentuploads201707Certificate-of-Death.pdf" target="_blank">Sample Certificate of Death</a>
            </div>
        </div>
    </section>
</div>
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

    <script src="script.js"></script>
</body>
</html>