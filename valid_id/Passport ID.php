<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DavHow: Passport ID</title>
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
            <i class="ri-user-line nav_login" id="login-btn"></i>
            </div>
        </header>
        <header class="header" id="header">
            <nav class="nav container">
            <p class="nav_tag"><em>Official website of ART Solutions</em></p>
        
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#" class="nav_link">HOME</a>
                    </li>
        
                    <li class="nav_item">
                        <a href="../catalog.php" class="nav_link">CATALOG</a>
                    </li>
        
                    <li class="nav_item">
                        <a href="#" class="nav_link">ABOUT US</a>
                    </li>
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
    <!-- Document-Area -->
    <div class="whole-document-area">
        <section class="document-area">
            <div class="image-wrapper">
                <img src="background-header.png" alt="">
                <div class="document-text">
                    <h1>PHILIPPINE PASSPORT</h1>
                    <p>
                        The Philippine passport is a travel document and a primary national identity issued by the Department of Foreign Affairs valid for 
                        ten (10) years to those 18 years or older holder and five (5) years validity for Filipinos under 18 years old.      
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
                <div class="info-box">
                    <h3 class="requirement">Application Form and Birth Certificate</h3>
                </div>
                <div class="info-box">
                    <h3 class="requirement">PSA-authenticated birth certificate</h3>
                    <p>An original and photocopy of PSA-authenticated birth certificate on security paper. For married females, provide an original and a photocopy of the PSA Authenticated Marriage Contract on Security Paper or Report of Marriage. 
                        A backup document of Local Civil Registrar Copy may also be required if the information on the PSA Birth certificate is not legible.
                    </p>
                </div>
                <div class="info-box">
                    <h3 class="requirement">Government-Issued IDs</h3>
                    <p>A photocopy of any government-issued IDs:</p>
                    <ul>
                        <li><a href="SSS UMID ID.html">Social Security System (SSS) card</a></li> 
                        <li><a href="GSIS UMID Card.html">Government Service Insurance System (GSIS) card</a></li>   
                        <li><a href="SSS UMID ID.html">Unified Multi-Purpose Identification (UMID) card</a></li>
                        <li><a href="Drivers-License.html">Land Transportation Office (LTO) Driver's License (Note: Student Permit in card format is accepted.)</a></li>
                        <li><a href="PhilSys ID.html">Philippine Identification (PhilID)/ePhilID</a></li>
                        <li><a href="GSIS UMID Card.html">Government Service Insurance System (GSIS) Card</a></li>
                        <li><a href="SSS UMID ID.html">Unified Multi-Purpose Identification (UMID) Card</a></li>
                        <li><a href="Drivers-License.html">Land Transportation Office (LTO) Driver’s License (Driver’s License cards expiring on 24 April until 31 October 2023 and said expired cards perforated during the renewal process are accepted together with the temporary license in paper format).</a></li>
                        <li><a href="PRC ID.html">Professional Regulatory Commission (PRC) ID</a></li>
                        <li><a href="OWWA ID.html">Overseas Workers Welfare Administration (OWWA) E-Card</a></li>
                        <li><a href="#">Commission on Elections (COMELEC) Voter’s ID or Voter’s Certificate issued from COMELEC</a></li>
                        <li><a href="Firearm's License.html">Philippine National Police (PNP) Permit to Carry Firearms Outside Residence</a></li>
                        <li><a href="Senior Citizen's ID.html">Senior Citizen ID</a></li>
                        <li>Airman License (issued August 2016 onwards)</li>
                        <li><a href="POSTAL ID.html">Philippine Postal ID (issued November 2016 onwards)</a></li>
                        <li><a href="">Seafarer’s Record Book (SRB) or Seafarers Identity Document (SID) (*must be issued Feb 2020 onwards) issued by the Maritime Industry Authority (MARINA)</a></li>
                        <li>School ID (if applicable)</li>
                    </ul>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>MINOR APPLICANTS ADDITIONAL REQUIREMENTS <br>
                            If school ID is not applicable</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Certificate of Enrollment with a photo of the minor and a dry seal of the school</h3>
                    </div>
                    <div class="info-box">
                        <h3>A photocopy of either the parent's Passport or a Valid Government-issued ID.</h3>                        
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>ADULT APPLICANTS ADDITIONAL REQUIREMENTS</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">School ID</h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Certificate of Registration</h3>
                    </div>
                </div>
                <div class="subtype">
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>RENEWAL</p></strong>
                    </div>
                    <div class="info-box">
                        <h3>Duly accomplished application form</h3>
                    </div>
                    <div class="info-box">
                        <h3>Original <a href="../documents/Birth-Certificate.html">PSA Birth Certificate</a></h3>
                    </div>
                    <div class="info-box">
                        <h3>Scheduled <a target="_blank" href="https://www.passport.gov.ph/">online appointment</a></h3>
                    </div>
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>LOST VALID ePASSPORT</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Police Report in English (Original and photocopy)</h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Affidavit of Loss in English(Original and photocopy)</h3>
                    </div>
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>LOST EXPIRED ePASSPORT</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Affidavit of Loss in English (Original and photocopy)</h3>
                    </div>
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>MUTILATED OR DAMAGED PASSPORT</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Affidavit of Explanation</h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Applicant must surrender mutilated/damaged passport</h3>
                    </div>
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>DUAL CITIZENSHIP</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Any government issued valid ID</h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">If the parents possess dual citizenship since birth, provide an original and a photocopy of PSA birth certificate.</h3>
                    </div>
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>NATURALIZED CITIZEN</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Identification Certificate of Naturalization from Bureau of Immigration</h3>
                    </div>
                    <div class="category">       
                        <img src="icons/backto-icon.svg" alt="">
                        <strong><p>FILIPINO CITIZEN BY ELECTION</p></strong>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Affidavit of Election of Philippine Citizenship</h3>
                    </div>
                    <div class="info-box">
                        <h3 class="requirement">Identification Certificate of Election from BI</h3>
                    </div>
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
                        <h3 class="requirement">Schedule an Appointment</h3>
                        <p>Schedule a passport application appointment through the official <a target="_blank" href="https://www.passport.gov.ph/">Department of Foreign Affairs (DFA)</a>. There are limited meeting slots, and the applicant should schedule an appointment at least a month before their flight.</p>
                    </div>
                </div>
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>2</p>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3 class="requirement">Complete the Appointment Form</h3>
                        <p>Click "Schedule an Appointment" and supply the necessary details on the form.</p>
                    </div>
                </div>
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>3</p>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3 class="requirement">Pay the Processing Fee</h3>
                        <p>After the completion of the application form, pay for the processing fee that costs PHP 950 for regular processing (twelve (12) working days) and PHP 1200 (six (6) or seven (7) working days) for special processing costs.</p>
                    </div>
                </div>
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>4</p>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3 class="requirement">Receive and Present Documents</h3>
                        <p>An email will be sent to the applicant with the transaction receipt, a copy of your application form, and the passport application checklist. Present the files sent by the DFA in an A4 paper on the day of your appointment.</p>
                    </div>
                </div>
                <div class="subtype">
                    <div class="subtype-text">
                        <img src="icons/black_backto-icon.svg" alt="">
                        <strong><p>RENEWAL</p></strong>   
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h4 class="requirement">Lost Valid ePassport</h4>
                            <p>The motion for application will be considered as a new application. Note that 15 days clearing period is required in lost valid passports and an online appointment must be scheduled beforehand. Thus, requirements from new adult applicants must be submitted. For additional requirements, note the following:</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>2</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h4 class="requirement">Lost Expired ePassport</h4>
                            <p>Similar to a lost valid ePassport, this will also be considered as a new application. Requirements for new adult applicants must be submitted and a scheduled online appointment. The following are the additional requirements:</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>3</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h4 class="requirement">Mutilated or Damaged Passport</h4>
                            <p>Secure an online appointment and submit requirements for new adult applicants. The following are the additional requirements:</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>4</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h4 class="requirement">Dual Citizenship</h4>
                            <p class="requirement">If the Filipino citizenship is reacquired or retained as specified in RA 9225, provide the original and photocopy of the identification certificate issued by a Philippine Foreign Service Post (FSP) or by the Bureau of Immigration (BI)</p>
                        </div>
                    </div>
                </div>           
            </div>
             
            <!-- Location -->
            <div class="location-info">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5287217599525!2d125.60519157488761!3d7.06452499293806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d78c3c50cd1%3A0xe2da0fc53e9c675f!2sDavao%20City%20Hall!5e0!3m2!1sen!2sph!4v1715686561597!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="details-container">
                    <!-- LIST OF LOCATIONS -->
                    <div class="location-details"></div>
                    <p><em>Nothing as follows. Location may vary within Davao City.</em></p>
                </div>
            </div>

            <!--Fees-->
            <div class="fee-info" hidden>
                <div class="fee">
                    <table>
                        <tr>
                            <strong><td class="fee-name">Passport Fee</td></strong>
                            <td rowspan="2">PHP 950.00</td>
                        </tr>
                        <tr>
                            <td class="fee-location">-</td>                    
                        </tr>
                    </table>
                </div>
                <div class="fee">
                    <table>
                       <tr>
                           <strong><td class="fee-name">Penalty Fee</td></strong>
                           <td rowspan="2">PHP 350.00</td>
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
                            <td rowspan="2"><strong>-</strong></td>
                        </tr>
                    </table>
                </div>
            </div>     
            
            <!--Sample Photo-->
            <div class="samplephoto-info">
                <p>DISCLAIMER: This is a sample photo of a document.</p>
                <div class="img-magnifier-container">
                    <img id="reference-photo" src="id photos/passport id.jpg" alt="">
                </div>
            </div>


            <!--References-->
            <div class="reference-info">
                <div class="article-reference">
                    <a target="_blank" href="https://dfa-oca.ph/valid-ids-for-passport-application/">Valid IDs For Passport Application - Department Of Foreign Affairs</a>
                </div>
                <div class="article-reference">
                    <a target="_blank" href="https://psahelpline.ph/blogs/passport-application-and-renewal-the-ultimate-guide">Passport Application and Renewal: The Ultimate Guide</a>
                </div>
                <div class="article-reference">
                    <a target="_blank" href="https://dfa-oca.ph/passport/passport-requirements/requirements-for-minors/core-requirements-for-minor-new-applications/">Core Requirements for New Minor Applicants</a>
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