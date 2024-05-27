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
    <title>DavHow: Occupational Permit</title>
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
                <h1>Occupational Permit</h1>
                <p>Occupational Permit is issued to any worker or employee who is not a holder of a validly issued Professional Tax Receipts, whether working on temporary and permanent basis. Occupational Permit is renewed annually on or before January 31. Late renewal is imposed a penalty of 25%</p><br>
                <p><strong>Eligibility: </strong>Any employee or worker who is a Filipino citizen and 18 years of age at the time of application. Foreigner may apply if he has already secured an Alien Employment Permit from the Department of Labor and Employment. In instances where the law allows a person below 18 years of age to work, the applicant shall submit an Affidavit of Consent from his/her parent or guardian</p>
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
        <div class="requirement-info">
            <div class="info-box">
                <h3 class="requirement">Application Form</h3>
                <p>Provide one original copy of the Application Form.</p>
            </div>
            
            <div class="info-box">
                <h3 class="requirement">Certificate of Employment</h3>
                <p>Include the Certificate of Employment.</p>
            </div>
            
            <div class="info-box">
                <h3 class="requirement">Affidavit of Consent for Minors</h3>
                <p>Submit one original copy of the Affidavit of Consent for minors (below 18 years old).</p>
            </div>
            
            <div class="info-box">
                <h3 class="requirement">Additional Requirements for Entertainers, Masseurs, Bar Attendants:</h3>
                <p><strong>Birth Certificate</strong></p>
                <p>Provide one original NSO Authenticated Birth Certificate.</p><br>
                <p><strong>Affidavit of Consent for 18 – 20 years old applicants</strong></p>
                <p>Include one original copy of the Affidavit of Consent with valid ID of parent or qualified guardian for 18 – 20 years old applicants.</p><br>
                <p><strong>Health ID</strong></h4>
                <p>Submit one original copy of the Health ID.</p>
            </div>
        </div>                

         <!-- Procedure -->
         <div class="procedure-info">
            <div class="subtype">
                <div class="category">
                    <img src="/New DavHow/valid_id/icons/black_backto-icon.svg" alt="">
                    <p class="subtype-text"><strong>Walk-in Application</strong></p>
                </div><hr>
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>1</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Fill Out Application Form</h3>
                        <p>Complete all sections of the application form accurately and thoroughly.</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>2</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Submit Duly Filled Application Form and Supporting Documents</h3>
                        <p>Present the completed application form along with all required supporting documents.</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>3</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Undergo Interview (If Below Age Requirement)</h3>
                        <p>If the applicant is below the age requirement, they must appear for an interview.</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>4</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Receive Order of Payment (OP)</h3>
                        <p>Upon submission, receive an Order of Payment detailing the required fees.</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>5</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Submit Order of Payment and Receive Official Receipt</h3>
                        <p>Proceed to the designated payment counter and submit the Order of Payment. Receive the Official Receipt after payment.</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>6</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Submit Official Receipt</h3>
                        <p>Return to the appropriate office and submit the Official Receipt as proof of payment.</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>7</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Claim Occupational Permit</h3>
                        <p>Once all requirements are fulfilled and payment is confirmed, claim the Occupational Permit.</p>
                    </div>
                </div>                                         
            </div>
            <div class="subtype">
                <div class="category">
                    <img src="/New DavHow/valid_id/icons/black_backto-icon.svg" alt="">
                    <p class="subtype-text"><strong>Online Application</strong></p>
                </div><hr>
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>1</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Login and Select Application Type</h3>
                        <p>Visit <a href="https://occupationalpermit.davaocity.gov.ph/">https://occupationalpermit.davaocity.gov.ph/</a> and choose "Create Application" for either New or Occupational Permit Renewal.</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>2</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Fill Out Online Application Form</h3>
                        <p>Complete the online application form with accurate information.</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>3</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Upload Required Documents</h3>
                        <p>Upload the following documents online:
                        <ul>
                            <li>Certificate of Employment</li>
                            <li>Health Certificate (if job requires)</li>
                            <li>Birth Certificate or Affidavit of Consent (if applicant is a minor)</li>
                        </ul>
                        </p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>4</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Interview (If Below Age Requirement)</h3>
                        <p>If the applicant is below the age requirement, they must present themselves for an interview.</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>5</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Submit Order of Payment (OP) and Payment</h3>
                        <p>Submit the Order of Payment (OP) and proceed with payment. Online payment is available and may precede the application without an order of payment, especially for online applicants. Receive the Official Receipt after payment.</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>6</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Submit Official Receipt</h3>
                        <p>Provide the Official Receipt as proof of payment.</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>7</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Check Application Status and Download Occupational Permit</h3>
                        <p>Visit <a href="https://occupationalpermit.davaocity.gov.ph/">https://occupationalpermit.davaocity.gov.ph/</a>, select "Check Application Status," and download the Occupational Permit. Alternatively, access the link sent automatically by the Online Occupational Permit System via email or SMS to download the Occupational Permit.</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>8</p>
                        </div>
                    </div>         
                    <div class="info-details">
                        <h3 class="requirement">Claim Occupational Permit</h3>
                        <p>Once all steps are completed, claim the Occupational Permit.</p>
                    </div>
                </div>
            </div>                  
        </div>
        

        <div class="location-info" hidden>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23914.91754813268!2d125.59983506196379!3d7.092275119269062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96c4d43af266b%3A0x9892745afc8ca94e!2sPhilippine%20Statistics%20Authority!5e0!3m2!1sen!2sph!4v1716411718076!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="details-container">
                <!-- LIST OF LOCATIONS -->
                <div class="location-details">
                    <strong><p>City Mayor's Office - Permits & Licenses Division</p></strong>    
                    <table>
                        <tr>
                            <td>Address</td>
                            <td>Building City Hall Dr, Poblacion District, Davao City, Davao del Sur</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>0822276271</td>
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
                            <strong><td class="fee-name">New Occupational Permit Application Fee</td></strong>
                            <td rowspan="2">PHP 125.00</td>
                        </tr>
                        <tr>
                            <td class="fee-location">Revenue Collection Officer- City Treasurer’s Office </td>                    
                        </tr>
                </table>
            </div>
            <div class="fee">
                <table>
                        <tr>
                            <strong><td class="fee-name">Renewal of Occupational Permit Fee</td></strong>
                            <td rowspan="2">PHP 125.00</td>
                        </tr>
                        <tr>
                            <td class="fee-location">Revenue Collection Officer- City Treasurer’s Office </td>                    
                        </tr>
                </table>
            </div>
            <div class="fee">
                <table>
                        <tr>
                            <strong><td class="fee-name">Late Renewal of Occupation Permit Fee</td></strong>
                            <td rowspan="2">PHP 156.25</td>
                        </tr>
                        <tr>
                            <td class="fee-location">Revenue Collection Officer- City Treasurer’s Office </td>                    
                        </tr>
                </table>
            </div>
        </div>     
        
        <!--Sample Photo-->
        <div class="samplephoto-info" >
            <p>DISCLAIMER: This is a sample photo of a document.</p>
            <div class="img-magnifier-container" onmouseover="magnify(reference-photo, 3)">
                <img id="reference-photo" src="/New DavHow/documents/document_images/Occupational Permit.jpg" alt="">
            </div>
        </div>

        <!--References-->
        <div class="reference-info">
            <div class="article-reference">
                <a href="https://www.davaocity.gov.ph/wp-content/uploads/2023/05/Citizens-Charter-Handbook-Volume-I-2023.pdf" target="_blank">Davao City Citizen Charter</a>
            </div>
            <div class="article-reference">
                <a href="httpswww.scribd.comdocument608076541Occupational-Permit-Form-with-checklist-of-requirements">Sample Occupational Permit</a>
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
    <!-- Back to Top Button -->
    <a href="#"><button id="back-to-top-btn" title="Back to top"><i class="ri-arrow-up-s-fill"></i></button></a>

    <script src="script.js"></script>
</body>
</html>