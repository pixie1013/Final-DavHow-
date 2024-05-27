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
    <title>DavHow: Driver's License</title>
    <link rel="stylesheet" href="styles_validid.css">
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
    <!-- Document-Area -->
    <div class="whole-document-area">   
        <section class="document-area">
            <div class="image-wrapper">
                <img src="background-header.png" alt="">
                <div class="document-text">
                    <h1>Driver’s License</h1>
                    <p>
                        A driver's license is an identification of who can drive a vehicle in the Philippines. 
                        It has one (1) year of validity from the date of issuance but <br> the renewal may be down on or before the expiry date. 
                        There are three types of driver's licenses, namely the Student Permit, Non-Professional License, and Professional License.
                    </p>
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
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>STUDENT'S LICENSE</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement"><a target="_blank" rel="noopener noreferrer" href="https://lto.gov.ph/wp-content/uploads/2023/09/APL-Form_v3.pdf">Application for Permits and License</a></h3>
                        <p>The APL Form is available in any of the LTO offices in the Philippines.</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Medical certificate</h3>
                        <p>Original and one (1) photocopy of an electronically transmitted medical certificate from an <a rel="noopener noreferrer" href="https://www.listph.com/2021/12/davao-city-lto-accredited-medical-clinics-registered-physicians.html" target="_blank">LTO-accredited medical clinic</a>.</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Document copy</h3>
                        <p> Original and one (1) photocopy of any of the following documents:
                            <ul style="text-align: left; margin: 5px 0 0 30px;">
                                <li><a href="../documents/Birth-Certificate.html">PSA/NSO Certificate of Birth</a></li>
                                <li><a href="PhilSys ID.html">Philippine Identification Card</a></li>
                                <li><a href="Passport ID.html">Passport</a></li>
                                <li>Local Civil Registry (if PSA is not available)</li>
                                <li><a href="../documents/Marriage Certificate (PSA).html">PSA Certificate of Marriage</a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Valid ID</h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Taxpayer's Identification Number (TIN)</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Certificate of Completion of the 15-hours Theoretical Driving Course (TDC)</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>PROFESSIONAL LICENSE</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Application for Permits and License (APL) Form</h3>
                        <p>The APL Form is available in any of the LTO offices in the Philippines or you can download a digital copy <a rel="noopener noreferrer" href="https://lto.gov.ph/lto-forms/file/1162-application-for-student-driver-s-permit-driver-s-license-conductor-s-license-apl.html" target="_blank">here</a>.</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Medical certificate</h3>
                        <p>Original and one (1) photocopy of an electronically transmitted medical certificate from an LTO-accredited medical clinic. Check the list of accredited clinics <a rel="noopener noreferrer"  href="https://www.listph.com/2021/12/davao-city-lto-accredited-medical-clinics-registered-physicians.html" target="_blank">here</a>.</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Practical Driving Course (PDC) completion certificate</h3>
                        <p>Original and one (1) photocopy of the Practical Driving Course (PDC) completion certificate.</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Original and valid license</h3>
                        <p>Original valid student permit or non-professional driver's license.</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">PSA Certificate of Birth</h3>
                        <p>Original and one (1) photocopy of PSA Certificate of Birth.</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Valid NBI Clearance or Police Clearance</h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">LTO Client ID (Register <a rel="noopener noreferrer"  href="https://portal.lto.gov.ph/ords/f?p=1200:HOME::::::" target="_blank">here</a>)</h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Taxpayer's Identification Number (TIN) ID, if employed.</h3>
                        <p>This requirement applies only to those who are employed.</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Proof of negative drug test result</h3>
                        <p>A document proof from the Department of Health (DOH) - accredited testing center or government hospital.</p>                
                    </div>                
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>NON-PROFESSIONAL LICENSE</p></strong>
                    </div>                    
                    <div class="info-box">
                        <h3 class="requirement">Application for Permits and License (APL) Form</h3>
                        <p>The APL Form is available in any of the LTO offices in the Philippines.</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Medical certificate</h3>
                        <p>Submit an original and one (1) photocopy of an electronically transmitted medical certificate from an <a rel="noopener noreferrer"  href="https://www.listph.com/2021/12/davao-city-lto-accredited-medical-clinics-registered-physicians.html" target="_blank">LTO-accredited medical clinic</a>.</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Practical Driving Course (PDC) completion certificate</h3>
                        <p>Submit an original and one (1) photocopy. </p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Valid Student-Driver's Permit</h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Notarized parent or guardian's consent</h3>
                        <p>If the applicant is seventeen (17) years old, with a photo of valid government ID and signature.</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Taxpayer's Identification Number (TIN)</h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Proof of negative drug test result</h3>
                        <p>A document proof from the Department of Health (DOH) - accredited testing center or government hospital.</p>
                    </div>
                </div>
            </div> 

            <!-- Procedure -->
            <div class="procedure-info" hidden> 
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>ONSITE REGISTRATION</p></strong>   
                    </div>
                    <hr> 
                    <div class="info-box">       
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div> 
                        <div class="info-details">
                            <h3 class="requirement">Visit LTO Branch</h3>
                            <p>Visit the nearest LTO Branch in Davao City.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>2</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Queue and Submit Documents</h3>
                            <p>Ask for a queue number, and submit an accomplished Application for Permits and License (APL) form and the other requirements once called.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>3</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Read Safety Pledge</h3>
                            <p>Read the Driver's Road Safety Pledge.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>4</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Photo and Signature Capture</h3>
                            <p>Accomplish the photo and signature capture.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>5</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Pay Fees and Receive Documents</h3>
                            <p>Once approved, proceed to the Cashier to pay the fees, and you will receive your Official Receipt (OR) and Student Permit.</p>
                        </div>
                    </div>    
                </div>
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>ONLINE REGISTRATION</p></strong>   
                    </div>
                    <hr>                     <div class="info-box">       
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div> 
                        <div class="info-details">
                            <h3 class="requirement">Visit LTMS Portal</h3>
                            <p>Visit the LTMS portal at <a rel="noopener noreferrer"  href="https://portal.lto.gov.ph/" target="_blank">https://portal.lto.gov.ph/</a>.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>2</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Login or Register</h3>
                            <p>Login using your email address and password or sign up to register for a new account.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>3</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Access Licensing</h3>
                            <p>On your dashboard, click "Licensing".</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>4</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Accept Terms and Conditions</h3>
                            <p>Click "accept" after reading the terms and conditions.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>5</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Choose License Type</h3>
                            <p>Choose the license type you would like to apply for.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>6</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Add Medical Certificate</h3>
                            <p>Click "Add medical certificate" and click "Next".</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>7</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Verify Medical Certificate</h3>
                            <p>Verify your medical certificate number.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>8</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Apply or Renew License</h3>
                            <p>If you wish to apply for a new license, click "New" or "Renewal" for the reapplication of the permit.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>9</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Complete Application</h3>
                            <p>Comply with the remaining information needed and finish the application.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>10</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Book Appointment and Pay</h3>
                            <p>Book an online appointment and pay online.</p>
                        </div>
                    </div>                
                </div>
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>RENEWAL</p></strong>   
                    </div>
                    <hr>                     <div class="info-box"> 
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>!</p>
                            </div>
                        </div>        
                        <div class="info-details">
                            <h3>Holder's case</h3>
                            <p>Renewal of license varies from the holder’s case and type of license. 
                                There are two things that are required to secure, a 15-hour mandatory theoretical driving course (TDC) and an expired license. 
                            </p>                    
                        </div>
                    </div>
                </div>
            </div>

            <!-- Location -->
            <div class="location-info" hidden>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.562328902512!2d125.56228567488752!3d7.060599792941869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f91642bc6ac679%3A0xeafac967b296db3a!2sDITE%20Davao%20Institute%20of%20Technical%20Education%20Inc!5e0!3m2!1sen!2sph!4v1716515720284!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <iframe hidden src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63350.014258238574!2d125.54824935867094!3d7.082347788108269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96c59ef5948a9%3A0x3a78368cdb8fcda5!2sGood%20Sign%20Tutorial%20Driving%20Academy%20-%20Buhangin!5e0!3m2!1sen!2sph!4v1716516985093!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <iframe hidden src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.7871918626597!2d125.65672637488848!3d7.150587692853756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96964718575e7%3A0xe349933ed9b8f6bb!2sAnsuico%20Foundation%20Advance%20Technical%20School%2C%20Inc.!5e0!3m2!1sen!2sph!4v1716517196873!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <iframe hidden src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63354.25772000515!2d125.51269244863279!3d7.051390200000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d81ed0f8aef%3A0x9117f74599d00d05!2sLand%20Transportation%20Office%20-%20Regional%20Office%20XI!5e0!3m2!1sen!2sph!4v1716517283628!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <iframe hidden src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.8862883740703!2d125.49825257488733!3d7.0226504929790465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f90d7c85c5677b%3A0x3173f55a3596a994!2sLTO%20Driver&#39;s%20License%20Renewal%20Office%20-%20Toril!5e0!3m2!1sen!2sph!4v1716517333637!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <iframe hidden src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126716.36318879189!2d125.41842544664742!3d7.022643295717226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f90d7c85c5677b%3A0x3173f55a3596a994!2sLTO%20Driver&#39;s%20License%20Renewal%20Office%20-%20Toril!5e0!3m2!1sen!2sph!4v1716517368062!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="details-container">
                    <!-- LIST OF LOCATIONS -->
                    <div class="location-details">
                        <strong><p>Davao Institute of Technical Education, Inc. (DITE)</p></strong>                                                         
                        <p>488 Mc Arthur Highway, Matina Crossing, Davao City</p>
                        <table>
                            <tr>
                                <td>Email</td>
                                <td>ditedavao@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>(082) 296 2132 / 0920 533 7204</td>
                            </tr>
                        </table>                    
                    </div>
                    <div class="location-details">
                        <strong><p>Good Sign Tutorial Driving Academy</p></strong>                 
                        <p>G/F #52 JM Bldg. Km 5, Buhangin, Davao City</p>
                        <table>
                            <tr>
                                <td>Phone</td>
                                <td>(082) 227 2140 / 0939 906 9670</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>goodsigndriving@gmail.com</td>
                            </tr>
                        </table>                    
                    </div>                    
                    <div class="location-details" >
                        <strong><p>Ansuico Foundation Advance Technical School Inc.</p></strong>                 
                        <p>Km. 13, Brgy. Panacan, Davao City</p>
                        <table>
                            <tr>
                                <td>Phone</td>
                                <td>(082) 234 0361 / 0950 565 2997</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>ansuicofoundation@gmail.com</td>
                            </tr>
                        </table>
                    </div>
                    <div class="location-details" >
                        <strong><p>Davao City North District Office</p></strong>                 
                        <p>LTO MVIS Compound Quimpo Boulevard, Davao City</p>
                    </div>
                    <div class="location-details">
                        <strong><p>LTO Driver's License Renewal Office - Toril</p></strong>
                        <p>Ground Floor, Felcris Supermarket Toril, Crossing Bayabas, Davao City</p>
                    </div>
                    <div class="location-details">
                        <strong><p>LTO Driver's License Renewal Office - Buhangin</p></strong>
                        <p>Gaisano Grand City Gate Mall, Buhangin, Davao City</p>
                    </div>
                    <p><em>Nothing as follows.</em></p>
                </div>
            </div>

            <!--Fees-->
            <div class="fee-info">
                <strong><div class="category">RENEWAL</div></strong>
                <div class="fee">
                    <table>
                        <tr>
                            <strong><td class="fee-name">One (1) Day to One (1) Year Expired DL</td></strong>
                            <td rowspan="2">PHP 660.00</td>
                        </tr>
                        <tr>
                            <td class="fee-location">License Fee: P 585.00<br>Penalty: P 75.00</td>                    
                        </tr>
                    </table>
                </div>
                <div class="fee">
                    <table>
                        <tr>
                            <strong><td class="fee-name">Renewal of More than One (1) Year to Two (2) Years Expired DL</td></strong>
                            <td rowspan="2">PHP 735.00</td>
                        </tr>
                        <tr>
                            <td class="fee-location">License Fee: P 585.00<br>Penalty: P 150.00</td>                    
                        </tr>
                    </table>
                </div>
                <div class="fee">
                    <table>
                        <tr>
                            <strong><td class="fee-name">Renewal of DL Expired for More than Two (2) Years</td></strong>
                            <td rowspan="2">PHP 910.00</td>
                        </tr>
                        <tr>
                            <td class="fee-location">License Fee: P 585.00<br>Penalty: P 225.00<br>Application Fee: P 100.00</td>                    
                        </tr>
                    </table>
                </div>
                <div class="fee">
                    <table>
                        <tr>
                            <strong><td class="fee-name">Change Classification Fee</td></strong>
                            <td rowspan="2">PHP 100.00</td>
                        </tr>
                        <tr>
                            <td class="fee-location"></td>                    
                        </tr>
                    </table>
                </div>
                <div class="fee">
                    <table>
                        <tr>
                            <strong><td class="fee-name">Additional Restriction Code (ARC)</td></strong>
                            <td rowspan="2">PHP 100.00</td>
                        </tr>
                        <tr>
                            <td class="fee-location">
                                <div style="font-size: 10px;">
                                    Note: The Change Classification fee only applies if you wish to change a Valid Non-Professional Driver's License (NPDL) 
                                    to Professional Driver's License (PDL), a valid Professional Driver's License (PDL) to a Non-Professional Driver's License (NPDL), 
                                    or an Expired NPDL to PDL / PDL to NPDL.
                                </div>
                            </td>                    
                        </tr>
                    </table>
                </div>
                <div class="total-fee fee">
                    <table>
                            <tr>
                                <td class="fee-total">Total to pay:</td>
                                <td rowspan="2"><strong>-</strong></td>
                            </tr>
                    </table>
                </div>
            </div>     
            
            <!--Sample Photo-->
            <div class="samplephoto-info">
                <p>DISCLAIMER: This is a sample photo of a document.</p>
                <div class="img-magnifier-container">
                    <img id="reference-photo" src="id photos/student permit.jpg" alt="">
                </div>
                <div class="img-magnifier-container">
                    <img id="reference-photo" src="id photos/non professional license.png" alt="">
                </div>
                <div class="img-magnifier-container">
                    <img id="reference-photo" src="id photos/professional license.jpg" alt="">
                </div>
            </div>

            <!--References-->
            <div class="reference-info">
                <div class="article-reference">
                    <a rel="noopener noreferrer"  target="_blank" href="https://ltoportal.ph/lto-drivers-license/#Online_via_the_LTMS_Portal">How To Get LTO Driver's License in the Philippines</a>
                </div>
                <div class="article-reference">
                    <a rel="noopener noreferrer"  target="_blank" href="https://www.globe.com.ph/go/travel-food/article/lto-philippines-drivers-license-how-to-apply-renew.html">Getting Your LTO Philippines Driver’s License: How to Apply or Renew</a>
                </div>
                <div class="article-reference">
                    <a rel="noopener noreferrer"  target="_blank" href="https://media-transformation.canva.com">Sample Non-Professional License</a>
                </div>
                <div class="article-reference">
                    <a rel="noopener noreferrer"  target="_blank" href="https://digido.ph">Sample Student Permit</a>
                </div>
            </div>
        </section>
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
    <!-- Back to Top Button -->
    <a href="#"><button id="back-to-top-btn" title="Back to top"><i class="ri-arrow-up-s-fill"></i></button></a>
    <script src="script.js">          
    </script>
</body>
</html>