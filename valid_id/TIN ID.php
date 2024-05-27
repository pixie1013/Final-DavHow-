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
    <link rel="icon" type="image/x-icon" href="../photos/logo.png">
    <title>DavHow: TIN ID</title>
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
    <!-- Document-Area -->
    <div class="whole-document-area">
        <section class="document-area">
            <div class="image-wrapper">
                <img src="background-header.png" alt="">
                <div class="document-text">
                    <h1>TIN ID</h1>
                    <p>The Tax Identification Number Identification Card (TIN ID) is a valid document issued to Filipino taxpayers, <br> including unemployed citizens or students. According to the country's Tax Code, 
                        anyone required to file a tax return or copy shall be given a TIN ID. 
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
                        <strong><p>BIR APPLICATION FORM LINKS</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement"><a target="_blank" href="https://www.bir.gov.ph/images/bir_files/taxpayers_service_programs_and_monitoring_1/1901%20Jul%202021%20ENCS%20-%20Final.pdf">BIR Form No. 1901</a></h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement"><a target="_blank" href="https://www.bir.gov.ph/images/bir_files/taxpayers_service_programs_and_monitoring_1/1902%20Jul%202021%20ENCS%20-%20Final.pdf">BIR Form No. 1902</a></h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement"><a target="_blank" href="https://www.bir.gov.ph/images/bir_files/taxpayers_service_programs_and_monitoring_1/1903%20Jul%202021%20ENCS%20-%20Final.pdf">BIR Form No. 1903</a></h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement"><a target="_blank" href="https://www.bir.gov.ph/images/bir_files/taxpayers_service_programs_and_monitoring_1/1904%20Jul%202021%20ENCS%20-%20Final.pdf">BIR Form No. 1904</a></h3>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>FOR SELF-EMPLOYED AND MIXED-INCOME INDIVIDUALS</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form No. 1901 version 2018</h3>
                        <p>(Application for Registration for Self-Employed and Mixed Income Individuals, Non-Resident Alien Engaged in Trade/Business, Estates/Trusts)</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Any identification issued by an authorised government body</h3>
                        <p>(e.g. <a href="../documents/Birth-Certificate.html">Birth Certificate</a>, <a href="Passport ID.html">passport</a>, <a href="PhilSys ID.html">Philippine System Identification Card</a>, <a href="Drivers-License.html">driver’s license</a>, Community Tax Certificate) that shows the name, address, and birthdate of the applicant</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Payment of P500.00 for Registration Fee and P30.00 for loose DST or Proof of Payment of Annual Registration Fee (ARF)</h3>
                        <p>If with existing TIN or applicable after TIN issuance</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Printed Receipts/Invoices</h3>
                        <p>Final & clear sample of Principal Receipts/ Invoices</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Special Power of Attorney (SPA) and ID of authorised person</h3>
                        <p>In case of an authorised representative who will transact with the Bureau</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">DTI Certificate</h3>
                        <p>If with business name</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Franchise Documents</h3>
                        <p>(e.g. Certificate of Public Convenience) (for Common Carrier)</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Photocopy of the Trust Agreement</h3>
                        <p>(for Trusts)</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Photocopy of the <a href="../documents/Death Certificate.html">Death Certificate</a> of the deceased</h3>
                        <p>(for Estate under judicial settlement)</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Certificate of Authority</h3>
                        <p>(if Barangay Micro Business Enterprises (BMBE) registered entity)</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Proof of Registration/Permit to Operate</h3>
                        <p>(BOI/BOI-ARMM, PEZA, BCDA and SBMA)</p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>ESTATES (under judicial settlement)</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Photocopy of the <a href="../documents/Death Certificate.html">Death Certificate</a> of the deceased and judicial settlement</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">DTI Certificate of Registration Business Name</h3>
                        <p>If business trade name shall be used</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Certificate of Authority</h3>
                        <p>If Barangay Micro Business Enterprises (BMBE) registered entity</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Proof of Registration/Permit to Operate</h3>
                        <p>With Board of Investment (BOI/BOI-ARMM), Philippine Export Zone Authority (PEZA), Bases Conversion Development Authority (BCDA), and Subic Bay Metropolitan Authority (SBMA)</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Franchise Documents</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Marriage Contract</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>TRUSTS</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Photocopy of Trust Agreement</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">DTI Certificate of Registration Business Name</h3>
                        <p>If business trade name shall be used</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Certificate of Authority</h3>
                        <p>If Barangay Micro Business Enterprises (BMBE) registered entity</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Proof of Registration/Permit to Operate</h3>
                        <p>With Board of Investment (BOI/BOI-ARMM), Philippine Export Zone Authority (PEZA), Bases Conversion Development Authority (BCDA), and Subic Bay Metropolitan Authority (SBMA)</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Franchise Documents</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>INDIVIDUALS EARNING PURELY COMPENSATION INCOME</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Any identification issued by an authorized government body</h3>
                        <p>For employers using eREG System, the mentioned requirements shall be required from their employees.<br><div style="margin-top: 10px;">The document must show the name, address and birthdate of the applicant;</div></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Marriage Contract (if applicable)</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">For Alien Employee - Passport</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Working Permit or Photocopy of duly received Application for Alien Employment Permit (AEP) by the Department of Labor and Employment (DOLE)</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>OCWs/SEAMEN EARNING PURELY FOREIGN-SOURCED INCOME</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement"><a href="../documents/Birth-Certificate.html">Birth certificate</a> or any valid identification showing name, address, and birth date; or Passport with visa or PhilID</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Employment contract</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Accomplished BIR Form 1904 - Application for Registration for One-Time Taxpayer and Person Registering under E.O. 98</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>CORPORATIONS/PARTNERSHIPS (Including Government-Owned and -Controlled Corporations) (Taxable /Non-Taxable)</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form No. 1903 version 2018</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Photocopy of SEC Certificate of Incorporation or Photocopy Certificate of Recording</h3>
                        <p>(in case of partnership); or Photocopy of License to Do Business in the Philippines (in case of a foreign corporation);</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Articles of Incorporation or Articles of Partnerships</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Payment of P500.00 for Registration Fee and P30.00 for loose DST or Proof of Payment of Annual Registration Fee (ARF)</h3>
                        <p>(not applicable to those exempt from the imposition of ARF);</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Printed Receipts/Invoices or Final & clear sample of Principal Receipts/ Invoices</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Board Resolution indicating the name of the authorised representative or Secretary’s Certificate</h3>
                        <p>(in case of authorised representative who will transact with the Bureau);</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Franchise Documents (e.g. Certificate of Public Convenience)</h3>
                        <p>(for Common Carrier);</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Memorandum of Agreement (for JOINT VENTURE)</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Franchise Agreement</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Certificate of Authority</h3>
                        <p>(if Barangay Micro Business Enterprises (BMBE) registered entity);</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Proof of Registration/Permit to Operate</h3>
                        <p>(with BOI, BOI-ARMM, SBMA, BCDA, PEZA);</p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>COOPERATIVES</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Copy of Cooperative Development Authority (CDA) Certificate of Registration and Articles of Cooperation</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>For GAIs, GOCCs and LGUs</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Copy of the Unit or Agency's Charter</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>For Home Owner's Association</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Copy of Certificate of Registration issued by Housing and Land Use Regulatory Board (HLURB) and Articles of Association</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>In the case of registration of branch/facility type</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form No. 1903 version 2018</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Printed Receipts/Invoices or Final & clear sample of Principal Receipts/ Invoices</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Payment of P500.00 for Registration Fee (if applicable) and P30.00 for loose DST or Proof of Payment of Annual Registration Fee (ARF)</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Accomplished BIR Form 1903</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>GOVERNMENT AGENCIES, LOCAL GOVERNMENT UNITS (LGU) AND INSTRUMENTALITIES</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Unit or Agency’s Charter</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form 1903 - Application for Registration for Corporations/Partnerships (Taxable/Non-Taxable), including GAIs and LGUs</h3>
                        <p></p>
                    </div>
                </div>
                <hr>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>INDIVIDUALS EARNING PURELY COMPENSATION INCOME</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Any identification issued by an authorized government body</h3>
                        <p>For employers using eREG System, the mentioned requirements shall be required from their employees.<br><div style="margin-top: 10px;">The document must show the name, address and birthdate of the applicant;</div></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Marriage Contract (if applicable)</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">For Alien Employee - Passport</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Working Permit or Photocopy of duly received Application for Alien Employment Permit (AEP) by the Department of Labor and Employment (DOLE)</h3>
                        <p></p>
                    </div>

                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>OCWs/SEAMEN EARNING PURELY FOREIGN-SOURCED INCOME</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement"><a href="../documents/Birth-Certificate.html">Birth certificate</a> or any valid identification showing name, address, and birth date; or Passport with visa or PhilID</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Employment contract</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Accomplished BIR Form 1904 - Application for Registration for One-Time Taxpayer and Person Registering under E.O. 98</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>CORPORATIONS/PARTNERSHIPS (Including Government-Owned and -Controlled Corporations) (Taxable /Non-Taxable)</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form No. 1903 version 2018</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Photocopy of SEC Certificate of Incorporation or Photocopy Certificate of Recording</h3>
                        <p>(in case of partnership); or Photocopy of License to Do Business in the Philippines (in case of a foreign corporation);</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Articles of Incorporation or Articles of Partnerships</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Payment of P500.00 for Registration Fee and P30.00 for loose DST or Proof of Payment of Annual Registration Fee (ARF)</h3>
                        <p>(not applicable to those exempt from the imposition of ARF);</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Printed Receipts/Invoices or Final & clear sample of Principal Receipts/ Invoices</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Board Resolution indicating the name of the authorised representative or Secretary’s Certificate</h3>
                        <p>(in case of authorised representative who will transact with the Bureau);</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Franchise Documents (e.g. Certificate of Public Convenience)</h3>
                        <p>(for Common Carrier);</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Memorandum of Agreement (for JOINT VENTURE)</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Franchise Agreement</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Certificate of Authority</h3>
                        <p>(if Barangay Micro Business Enterprises (BMBE) registered entity);</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Proof of Registration/Permit to Operate</h3>
                        <p>(with BOI, BOI-ARMM, SBMA, BCDA, PEZA);</p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>COOPERATIVES</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Copy of Cooperative Development Authority (CDA) Certificate of Registration and Articles of Cooperation</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>For GAIs, GOCCs and LGUs</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Copy of the Unit or Agency's Charter</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>For Home Owner's Association</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Copy of Certificate of Registration issued by Housing and Land Use Regulatory Board (HLURB) and Articles of Association</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>In the case of registration of branch/facility type</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form No. 1903 version 2018</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Printed Receipts/Invoices or Final & clear sample of Principal Receipts/ Invoices</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Accomplished BIR Form 1903</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>GOVERNMENT AGENCIES, LOCAL GOVERNMENT UNITS (LGU) AND INSTRUMENTALITIES</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Unit or Agency’s Charter</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form 1903 - Application for Registration for Corporations/Partnerships (Taxable/Non-Taxable), including GAIs and LGUs</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>NONRESIDENT FOREIGN CORPORATIONS</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">A scanned copy of any Apostillized official documentation issued by an authorised government body</h3>
                        <p>(e.g. government agency (tax authority) thereof, or a municipality) that includes the name of the non-individual and the address of its principal office in the jurisdiction in which the non-individual was incorporated or organised (e.g. Articles of Incorporation, Certificate of Tax Residency);</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">If transacting through a Representative:</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">1.1 Apostillized Board Resolution/Secretary’s Certificate (or equivalent)</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">1.2 Any government-issued ID of the authorised representative</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>GOVERNMENT AGENCIES AND INSTRUMENTALITIES</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form 1903 - Application for Registration for Corporations/Partnerships (Taxable/Non-Taxable), including GAIs and LGUs</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Unit or Agency's Charter</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>LOCAL GOVERNMENT UNITS</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form 1903 - Application for Registration for Corporations/Partnerships (Taxable/Non Taxable), including GAIs and LGUs</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Unit or Agency's Charter</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>PERSONS REGISTERING UNDER E.O. 98 (securing a TIN to be able to transact with any government office, e.g. LTO, NBI, DFA, etc.)</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form 1904 - Application for Registration of One Time Taxpayer And Persons Registering Under EO 98</h3>
                        <p>(securing a TIN to be able to transact with any government office)</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">INDIVIDUAL</h3>
                        <p>Any identification issued by an authorized government body (e.g. Birth Certificate, passport, PhilID, driver’s license, Community Tax Certificate) that shows the name, address and birthdate of the applicant;<br>Passport (in case of non-resident alien not engaged in trade or business);<br>Marriage Contract, if the applicant is a married woman;</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">NON-INDIVIDUAL</h3>
                        <p>Document to support transaction between a non-resident foreign corporation and the withholding agent (e.g. bank certification, invoice, contract, etc.).</p>
                    </div>
                </div>
                <hr>
                <div class="subtype">
                    <div class="category">       
                        <strong><p>ONE TIME TAXPAYERS (With No Previously Issued TIN)</p></strong>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>NONRESIDENT FOREIGN CORPORATIONS</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">A scanned copy of any Apostillized official documentation issued by an authorised government body</h3>
                        <p>(e.g. government agency (tax authority) thereof, or a municipality) that includes the name of the non-individual and the address of its principal office in the jurisdiction in which the non-individual was incorporated or organised (e.g. Articles of Incorporation, Certificate of Tax Residency);</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">If transacting through a Representative:</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">1.1 Apostillized Board Resolution/Secretary’s Certificate (or equivalent)</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">1.2 Any government-issued ID of the authorised representative</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>GOVERNMENT AGENCIES AND INSTRUMENTALITIES</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form 1903 - Application for Registration for Corporations/Partnerships (Taxable/Non-Taxable), including GAIs and LGUs</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Unit or Agency's Charter</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>LOCAL GOVERNMENT UNITS</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form 1903 - Application for Registration for Corporations/Partnerships (Taxable/Non Taxable), including GAIs and LGUs</h3>
                        <p></p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Unit or Agency's Charter</h3>
                        <p></p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>PERSONS REGISTERING UNDER E.O. 98 (securing a TIN to be able to transact with any government office, e.g. LTO, NBI, DFA, etc.)</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">BIR Form 1904 - Application for Registration of One Time Taxpayer And Persons Registering Under EO 98</h3>
                        <p>(securing a TIN to be able to transact with any government office)</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">INDIVIDUAL</h3>
                        <p>Any identification issued by an authorized government body (e.g. Birth Certificate, passport, PhilID, driver’s license, Community Tax Certificate) that shows the name, address and birthdate of the applicant;<br>Passport (in case of non-resident alien not engaged in trade or business);<br>Marriage Contract, if the applicant is a married woman;</p>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">NON-INDIVIDUAL</h3>
                        <p>Document to support transaction between a non-resident foreign corporation and the withholding agent (e.g. bank certification, invoice, contract, etc.).</p>
                    </div>
                </div>
            </div> 

            <!-- Procedure -->
            <div class="procedure-info">
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>FOR SELF-EMPLOYED AND MIXED INCOME INDIVIDUALS</p></strong>   
                    </div><hr>
                    <div class="subtype">
                        <strong><p class="subtype-text">Online registration</p></strong><hr>
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>!</p>
                                </div>
                            </div>         
                            <div class="info-details">
                                <h3 class="requirement">ONLINE REGISTRATION</h3>
                                <p>Visit the <a target="_blank" href="https://www.bir.gov.ph/newbizreg/">BIR New Business Registration Portal</a> and comply with the necessary documents.</p>
                            </div>
                        </div>
                    </div>
                    <div class="subtype">
                        <strong><p class="subtype-text">Walk-ins</p></strong>
                        <hr>
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>1</p>
                                </div>
                            </div>
                            <div class="info-details">
                                <h3 class="requirement">Submit your documentary requirements</h3>
                                <p>Including the BIR Form 1901 version 2018 at the New Business Registrant Counter.</p>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>2</p>
                                </div>
                            </div>
                            <div class="info-details">
                                <h3 class="requirement">Pay the fees required.</h3>
                                <p>Annual Registration Fee (P500.00), loose DST (P30.00), and/or payment for the BIR Printed Receipt/Invoice (if the taxpayer opted to buy for use).</p>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>3</p>
                                </div>
                            </div>
                            <div class="info-details">
                                <h3 class="requirement">A Certificate of Registration (Form 2303)</h3>
                                <p>Including the “Notice to Issue Receipt/Invoice”, Authority to Print, BIR Printed Receipts/Invoices (if applicable), and eReceipt will be issued as a proof of payment.</p>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>ESTATES (under judicial settlement) & TRUSTS</p></strong>   
                    </div><hr>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Submit your accomplished BIR FORM 1901</h3>
                            <p>Including the other requirements to the Revenue District Office.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>2</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Pay for the fees</h3>
                            <p>Annual Registration Fee (P500.00) at the <a target="_blank" href="https://www.bir.gov.ph/images/bir_files/collection_programs/AAB_BY_RDO_JAN2023/RDO%20113_2023.pdf">Authorized Agent Banks of the RDO</a></p>
                        </div>
                    </div>
                </div>
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>INDIVIDUALS EARNING PURELY COMPENSATION INCOME</p></strong>   
                    </div><hr>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Submit the BIR Form 1902 and the other requirements to your employer.</h3>
                            <p>Some sections of the application form must be accomplished by the employer.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>2</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Submit BIR Form 1902 to the Revenue District Office (RDO) having jurisdiction over the place of office of the employer where such employee is expected to report for work within ten (10) days from the date of employment.</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>OCWs/SEAMEN EARNING PURELY FOREIGN-SOURCED INCOME</p></strong>   
                    </div><hr>
                    <hr>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Fill out the BIR Form 1904.</h3>
                            <p>Submit the accomplished BIR Form 1904 on the nearest RDO from the residence of the applicant.</p>
                        </div>
                    </div>
                </div>
                
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>CORPORATIONS/PARTNERSHIPS (Including Government-Owned and Government-Controlled Corporations) (Taxable /Non-Taxable)</p></strong>   
                    </div><hr>
                    <hr>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Fill out the BIR Form 1903 - Application for Registration for Corporations/Partnerships (Taxable/Non-Taxable).</h3>
                            <p>For non-individual business taxpayers who prefer to submit online, you may visit the BIR New Business Registration (NewBizReg) Portal and comply with the necessary documents. <a href="https://www.bir.gov.ph/newbizreg/" target="_blank">NewBizReg Portal</a></p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>2</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Submit the accomplished BIR Form 1903 together with the necessary documents on the nearest RDO from the residence of the applicant.</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>3</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Pay the following at the New Business Registrant Counter in the BIR Office:</h3>
                            <p>
                                <ol type="i">
                                    <li>Annual Registration Fee (P500.00);</li>
                                    <li>Documentary Stamp Tax (P30.00) (if applicable);</li>
                                    <li>BIR Printed Receipt/Invoice (if opted to buy for use).</li>
                                </ol>
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
                            <h3 class="requirement">A Certificate of Registration (Form 2303), “Notice to Issue Receipt/Invoice”, Authority to Print, BIR Printed Receipts/Invoices (if applicable), and eReceipt will be issued to the applicant as proof of the transaction.</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>GOVERNMENT AGENCIES, LOCAL GOVERNMENT UNITS AND INSTRUMENTALITIES</p></strong>   
                    </div><hr>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Fill out the accomplished BIR Form 1903.</h3>
                            <p>Submit the accomplished BIR Form 1903 and the required documents to the nearest RDO from the registered address of the government agencies and instrumentalities or local government units.</p>
                        </div>
                    </div>
                </div>
                
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>NONRESIDENT FOREIGN CORPORATIONS</p></strong>   
                    </div><hr>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Visit the <a href="https://orus.bir.gov.ph/home" target="_blank">BIR Online Registration and Update System (ORUS)</a></h3>
                            <p>Create an account and complete the online application form.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>2</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Scan and upload the necessary documents.</h3>
                            <p>Within three (3) working days, an email notification of the status of the application will be sent regarding the status of the application.</p>
                        </div>
                    </div>
                </div>
                
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>ONE TIME TAXPAYERS (With No Previously Issued TIN)</p></strong>   
                    </div><hr>
                    <hr>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Fill out the BIR Form 1904.</h3>
                            <p>Submit the BIR Form 1904 and the required documents to the Revenue District Office of the applicant.</p>
                        </div>
                    </div>
                </div>
                
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>PERSONS REGISTERING UNDER E.O. 98 (securing a TIN to be able to transact with any government office, e.g. LTO, NBI, DFA, etc.)</p></strong>   
                    </div><hr>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Fill out the BIR Form 1904.</h3>
                            <p>Submit the BIR Form 1904 and the required documents to the Revenue District Office of the applicant.</p>
                        </div>
                    </div>
                </div>                
            </div>

            <!-- Location -->
            <div class="location-info">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253501.1597727046!2d125.31813324319947!3d6.895911794641313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d7fa7426e87%3A0xcfcfd78a456fc418!2sBureau%20of%20Internal%20Revenue%20Region%20XI!5e0!3m2!1sen!2sph!4v1716544739430!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="details-container">
                    <!-- LIST OF LOCATIONS -->
                    <div class="location-details">
                        <strong><p>Bureau of Internal Revenue Region XI</p></strong>                 
                        <p>Room 302, 3rd Floor, BIR Building, Bolton Street, Davao City, 8000 Davao del Sur</p>
                    </div>
                    <p><em>Nothing as follows.</em></p>
                </div>
            </div>

            <!--Fees-->
            <div class="fee-info" hidden>
                <div class="fee">
                    <table>
                            <tr>
                                <strong><td class="fee-name">Registration Fee</td></strong>
                                <td rowspan="2">PHP 500.00</td>
                            </tr>
                            <tr>
                                <td class="fee-location">-</td>                    
                            </tr>
                    </table>
                </div>
                <div class="fee">
                    <table>
                            <tr>
                                <strong><td class="fee-name">Proof of Payment of Annual Registration Fee (ARF)</td></strong>
                                <td rowspan="2">PHP 30.00</td>
                            </tr>
                            <tr>
                                <td class="fee-location">-</td>                    
                            </tr>
                    </table>
                </div>
                <div class="total-fee fee">
                    <table>
                            <tr>
                                <td class="fee-total">Total to pay:</td>
                                <td rowspan="2"><strong>PHP 530.00</strong></td>
                            </tr>
                    </table>
                </div>
            </div>     
            
            <!--Sample Photo-->
            <div class="samplephoto-info">
                <p>DISCLAIMER: This is a sample photo of a document.</p>
                <div class="img-magnifier-container">
                    <img id="reference-photo" src="id photos/tin id.png" alt="">
                </div>
            </div>

            <!--References-->
            <div class="reference-info">
                <div class="article-reference">
                    <a target="_blank" href="https://www.bir.gov.ph/index.php/registration-requirements/primary-registration/application-for-tin.html#description">Application for Taxpayer Identification Number (TIN)</a>                </div>
                <div class="article-reference">
                    <a target="_blank" href="https://www.metrobankcard.com">Sample TIN ID</a>
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
    <script src="script.js">          
    </script>
</body>
</html>