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
    <title>DavHow: Annual Income Tax for Corporations and Partnerships</title>
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
                    <h1>ANNUAL INCOME TAX FOR CORPORATIONS AND PARTNERSHIPS</h1>
                    <p>Income Tax is a tax on a person's income, emoluments, profits arising from property, practice of profession, conduct of trade or business or on the pertinent items of gross income specified in the Tax Code of 1997 (Tax Code), as amended, less the deductions if any, authorized for such types of income, by the Tax Code, as amended, or other special laws.</p><br>
                    <p><strong>Note: </strong>Final Adjustment Return or Annual Income Tax Return - On or before the 15th day of the fourth month following the close of the taxpayer’s taxable year</p>
                    <p><strong>Eligibility: </strong>Individuals who are earning purely compensation income (Including Non-Business/Non-Profession Related Income)</p>
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
                    <h3 class="requirement">Certificate of Income Tax Withheld on Compensation (BIR Form 2316)</h3>
                    <p>Submit if applicable</p>
                </div>
                
                <div class="info-box">
                    <h3 class="requirement">Certificate of Income Payments Not Subjected to Withholding Tax (BIR Form 2304)</h3>
                    <p>Submit if applicable</p>
                </div>
                
                <div class="info-box">
                    <h3 class="requirement">Certificate of Creditable Tax Withheld at Source (BIR Form 2307)</h3>
                    <p>Submit if applicable</p>
                </div>
                
                <div class="info-box">
                    <h3 class="requirement">Duly approved Tax Debit Memo</h3>
                    <p>Submit if applicable</p>
                </div>
                
                <div class="info-box">
                    <h3 class="requirement">Proof of Foreign Tax Credits</h3>
                    <p>Submit if applicable</p>
                </div>
                
                <div class="info-box">
                    <h3 class="requirement">Income Tax Return previously filed and proof of payment</h3>
                    <p>Submit if filing an amended return for the same year</p>
                </div>
                
                <div class="info-box">
                    <h3 class="requirement">Account Information Form (AIF) or Certificate of the independent Certified Public Accountant (CPA) with Audited Financial Statements</h3>
                    <p>Required if the gross annual sales, earnings, receipts, or output exceed three million pesos (P3,000,000.00)</p>
                </div>
                
                <div class="info-box">
                    <h3 class="requirement">Account Information Form or Financial Statements not necessarily audited by an independent CPA</h3>
                    <p>Required if the gross annual sales, earnings, receipts, or output do not exceed P3,000,000.00 and are subject to graduated income tax rates under Section 24(A)(2)(a)</p>
                </div>
                
                <div class="info-box">
                    <h3 class="requirement">Proof of prior year’s excess tax credits</h3>
                    <p>Submit if applicable</p>
                </div>            
            </div>        

            <!-- Procedure -->
            <div class="procedure-info">
                <div class="subtype">
                    <div class="category">
                        <img src="/New DavHow/valid_id/icons/black_backto-icon.svg" alt="">
                        <p class="subtype-text"><strong> For Electronic Filing and Payment System (eFPS) Filer</strong></p>
                    </div><hr>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Fill-up BIR Form No. 1702</h3>
                            <p>Fill in all applicable fields in the BIR Form No. 1702 according to your financial information and tax obligations.</p>
                        </div>
                    </div>
                    
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>2</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Proceed to Payment</h3>
                            <p>After completing the form, proceed to payment by clicking the “Proceed to Payment” button.</p>
                        </div>
                    </div>
                    
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>3</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Fill-up eFPS Payment Form</h3>
                            <p>You will be directed to the eFPS Payment Form. Fill in the required fields accurately, providing your payment details.</p>
                        </div>
                    </div>
                    
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>4</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Submit Payment</h3>
                            <p>Once all required fields are filled out, click the “Submit” button to initiate the payment process.</p>
                        </div>
                    </div>
                    
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>5</p>
                            </div>
                        </div>         
                        <div class="info-details">
                            <h3 class="requirement">Payment Confirmation</h3>
                            <p>After submission, wait for the payment confirmation from eFPS-AABs (Authorized Agent Banks). This confirmation serves as proof of successful e-filing and e-payment.</p>
                        </div>
                    </div>                
                </div>

                    <div class="subtype">
                        <div class="category">
                            <img src="/New DavHow/valid_id/icons/black_backto-icon.svg" alt="">
                            <p class="subtype-text"><strong>For Non-eFPS Filer</strong></p>
                        </div><hr>
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>1</p>
                                </div>
                            </div>         
                            <div class="info-details">
                                <h3 class="requirement">Download and Fill-up BIR Form No. 1702</h3>
                                <p>Download the Electronic Bureau of Internal Revenue Form (eBIRForm) Package. Fill in all applicable fields in the downloaded BIR Form No. 1702 according to your financial information and tax obligations.</p>
                            </div>
                        </div>
                        
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>2</p>
                                </div>
                            </div>         
                            <div class="info-details">
                                <h3 class="requirement">Print the Duly Accomplished Form</h3>
                                <p>Once you have filled out the form, print the duly accomplished BIR Form No. 1702.</p>
                            </div>
                        </div>
                        
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>3</p>
                                </div>
                            </div>         
                            <div class="info-details">
                                <h3 class="requirement">Proceed to Authorized Agent Bank (AAB)</h3>
                                <p>Proceed to the nearest Authorized Agent Bank (AAB) under the jurisdiction of the Revenue District Office where you are registered.</p>
                                <p>Present the printed and duly accomplished BIR Form 1702 to the teller at the AAB.</p>
                                <p>Submit the required attachments along with your payment.</p>
                            </div>
                        </div>
                        
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>4</p>
                                </div>
                            </div>         
                            <div class="info-details">
                                <h3 class="requirement">Alternatively, proceed to Revenue Collection Officer or Municipal Treasurer</h3>
                                <p>In places where there are no AABs, proceed to the Revenue Collection Officer or duly Authorized City or Municipal Treasurer located within the Revenue District Office where you are registered.</p>
                                <p>Present the printed and duly accomplished BIR Form 1702 to the Revenue Collection Officer or Municipal Treasurer.</p>
                                <p>Submit the required attachments along with your payment.</p>
                            </div>
                        </div>
                        
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>5</p>
                                </div>
                            </div>         
                            <div class="info-details">
                                <h3 class="requirement">Receive Stamped and Validated Form</h3>
                                <p>After submission of the form and payment, receive your copy of the duly stamped and validated BIR Form No. 1702 from the teller of the AAB, Revenue Collection Officer, or Municipal Treasurer.</p>
                            </div>
                        </div>                    
                    </div>

                    <div class="subtype">
                        <div class="category">
                            <img src="/New DavHow/valid_id/icons/black_backto-icon.svg" alt="">
                            <p class="subtype-text"><strong>For Manual Filer</strong></p>
                        </div><hr>
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>1</p>
                                </div>
                            </div>         
                            <div class="info-details">
                                <h3 class="requirement">Fill-up BIR Form No. 1702</h3>
                                <p>Fill out the BIR Form No. 1702 in triplicate copies. Ensure that all applicable fields are accurately filled in according to your financial information and tax obligations.</p>
                            </div>
                        </div>
                        
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>2</p>
                                </div>
                            </div>         
                            <div class="info-details">
                                <h3 class="requirement">Proceed to RDO or Tax Filing Center</h3>
                                <p>Proceed to the Revenue District Office (RDO) where you are registered or to any Tax Filing Center established by the BIR.</p>
                                <p>Bring the triplicate copies of the duly accomplished BIR Form 1702, along with the required attachments as specified by the BIR.</p>
                            </div>
                        </div>
                        
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>3</p>
                                </div>
                            </div>         
                            <div class="info-details">
                                <h3 class="requirement">Submit Documents</h3>
                                <p>Present the triplicate copies of the duly accomplished BIR Form 1702 to the representative at the RDO or Tax Filing Center.</p>
                                <p>Submit the required attachments along with the forms for review and processing.</p>
                            </div>
                        </div>
                        
                        <div class="info-box">
                            <div class="circle-background">
                                <div class="procedure-number">
                                    <p>4</p>
                                </div>
                            </div>         
                            <div class="info-details">
                                <h3 class="requirement">Receive Stamped and Validated Form</h3>
                                <p>After submission, the representative at the RDO or Tax Filing Center will stamp and validate the triplicate copies of the BIR Form No. 1702.</p>
                                <p>Receive your copy of the duly stamped and validated form from the RDO or Tax Filing Center representative as proof of submission.</p>
                            </div>
                        </div>                    
                    </div>
                </div>

                <!-- Location -->
                <div class="location-info" hidden>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.556846931582!2d125.60522837304856!3d7.061240216684942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d7fa7426e87%3A0xcfcfd78a456fc418!2sBureau%20of%20Internal%20Revenue%20Region%20XI!5e0!3m2!1sen!2sph!4v1716643533053!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="details-container">
                    <!-- LIST OF LOCATIONS -->
                        <div class="location-details">
                            <strong><p><a target=”_blank” href="https://maps.app.goo.gl/rzkSmD93tfY7XmBn8">Bureau of Internal Revenue Region XI</a></p></strong>                                                         
                            <table>
                                <tr>
                                    <td>Address</td>
                                    <td>Room 302, 3rd Floor, BIR Building, Bolton Street, Davao City, 8000 Davao del Sur</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>rr_19csu@bir.gov.ph</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>(082) 224-44-72</td>
                                </tr>
                            </table>                    
                    </div>
                    </div>
                </div>

            <!--Fees-->
            <div class="fee-info" hidden>
                <div class=""no-fee>
                    <p>No fees mentioned.</p>
                </div>
            </div> 
            
            <!--Sample Photo-->
            <div class="samplephoto-info" >
                <p>DISCLAIMER: This is a sample photo of a document.</p>
                <div class="img-magnifier-container" onmouseover="magnify('reference-photo', 3)">
                    <img id="reference-photo" src="/New DavHow/documents/document_images/Annual Income Tax for Partnerships and Corporations.jpg" alt="">
                </div>
                <div class="img-magnifier-container" onmouseover="magnify('reference-photo-2', 3)">
                    <img id="reference-photo-2" src="/New DavHow/documents/document_images/1702-RT Jan 2018 ENCS Final v3_page-0002.jpg" alt="">
                </div>
                <div class="img-magnifier-container" onmouseover="magnify('reference-photo-3', 3)">
                    <img id="reference-photo-3" src="/New DavHow/documents/document_images/1702-RT Jan 2018 ENCS Final v3_page-0003.jpg" alt="">
                </div>
                <div class="img-magnifier-container" onmouseover="magnify('reference-photo-4', 3)">
                    <img id="reference-photo-4" src="/New DavHow/documents/document_images/1702-RT Jan 2018 ENCS Final v3_page-0004.jpg" alt="">
                </div>            
            </div>

            <!--References-->
            <div class="reference-info">
                <div class="article-reference">
                    <a href="https://www.bir.gov.ph/index.php/bir-forms/income-tax-return.html" target="_blank">Income Tax Return Description</a>
                </div>
                <div class="article-reference">
                    <a href="https://www.bir.gov.ph/images/bir_files/taxpayers_service_programs_and_monitoring_1/1702-RT%20Jan%202018%20ENCS%20Final%20v3.pdf" target="_blank">Sample Annual Income Tax for Corporations and Partnerships</a>
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
    <script src="script.js"></script>
</body>
</html>