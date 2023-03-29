<?php $city="India"; ?>
<?php $breadcrumbs_last="Contact"; ?>
<?php $last_dom="contact"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include'include/stactic-meta.php'; ?>

    <!-- =========== change meta tages ======== -->
    <title>Contact Us +91 9817326797 - ShiftingWay Packers</title>
    <meta name="description" content="we are best packers and movers company in india contect number: +91 9817326797 or shiftingway@gmail.com, contact us for shifting queries." />
    <meta name="keywords" content="shifting way packers and movers, packers and movers, packers and movers contact, movers contect number, packers and movers in contact us, movers contect us, shiftingway contect us, packers and movers contact number">
    <meta property="og:title" content="Contact Us +91 981732679 - ShiftingWay Packers" />
    <meta property="og:description" content="we are best packers and movers company in india contect number: +91 9817326797 or shiftingway@gmail.com, contact us for shifting queries." />
    <meta property="og:keywords" content="shifting way packers and movers, packers and movers, packers and movers contact, movers contect number, packers and movers in contact us, movers contect us, shiftingway contect us, packers and movers contact number" />
    <meta property="og:url" content="https://www.shiftingway.com/<?php echo $last_dom; ?>" />
    <meta property="al:ios:url" content=" shiftingway.com/<?php echo $last_dom; ?>" />

    <link rel="canonical" href="https://www.shiftingway.com/<?php echo $last_dom; ?>" />


    <style>
            .contact-hero-section{
                background: linear-gradient(0deg, #ffffff4d 0%, #ffe9ba 100%);
            }
            .contact-hero-container{
                padding: 70px 0px 100px 0px;
            }.contact-bgc-text{
                font-size: 32px;
                text-align: center;
            }
            .contact-hero-box{
                padding: 50px;
                border: 1px solid #e0dede ;
                background-color: #fffae6;
                border-radius: 15px;
                margin-top: 35px;
            }
            .contect-left{
                max-width: 550px;
                width: 100%;
            }
            .contect-left img {
                width: 100%;
            }
            .contact-left{
                max-width: 450px;
                width: 100%;
                gap: 25px;
            }
            .contact-mail-box{
                color: #000000;
                border: 1px solid #e2e2e2;
                width: 100%;
                padding: 15px 25px;
                border-radius: 9px;
                position: relative;
                box-shadow: -2px 2px 25px #ebebeb9f;
                background-color: #ffffff;
            }
            .contact-mail-box::after{
                content: '';
                width: 100%;
                height: 100%;
                position: absolute;
                background: linear-gradient(80deg, #fffdf74d 0%, #49494931 100%);
                left: 0;
                top: 0;
                display: none;
                border-radius: 9px;
                transition: all 0.9s ease-in-out;
            }
            .contact-mail-box:hover.contact-mail-box::after{
                display: block;
            }
            .contact-mail-head{
                font-size: 24px;
                font-weight: 700;
            }
            .contact-mail-cont{
                font-size: 18px;
                color: #595959;
                font-weight: 500;
                margin-top: 5px;
            }
            .contact-arrow{
                background-color: #000000;
                width: 30px;
                height: 30px;
                border-radius: 30px;
                margin-top: 10px;
                visibility: hidden;
                opacity: 0;
                transition: all 0.2s ease-in-out;
            }
            .contact-mail-box:hover .contact-arrow{
                visibility: visible;
                opacity: 1;
            }

            @media (max-width:850px){
                
                .contact-hero-container{
                    padding: 30px 0px 70px 0px;
                }
                .contact-bgc-text{
                    margin-top: 15px;
                    font-size: 24px;
                }
                .contact-hero-box{
                    padding: 30px 15px;
                    flex-direction: column;
                    margin-top: 20px;
                }
                .contact-mail-box{
                    padding: 5px 15px;
                }
                .contect-left{
                    max-width: 360px;
                    padding:0px 20px 20px 20px;
                }
                .contact-left{
                    max-width: 100%;
                }
                .contact-mail-head{
                    font-size: 20px;
                }
                .contact-mail-cont{
                    font-size: 14px;
                }
                .contact-mail-icon svg{
                    max-width: 50px;
                    max-height: 50px;
                    height: 100%;
                }
                .contact-mail-icon svg {
                    width: 100%;
                }
                .contact-arrow{
                    width: 20px;
                    height: 20px;
                    padding: 5px;
                    margin-top: 3px;
                }
                .contact-arrow svg {
                    width: 100%;
                }
            }
    </style>
</head>
<body>
    <!-- ============ header ========== -->
    <?php include'include/header.php'; ?>
    <!-- =========== header close =========== -->

    <!-- ========== hero section =========== -->
    <section class="contact-hero-section">
        <div class="container">
            <div class="contact-hero-container">
                <div class="breadcrumbs r-flex ali-c">
                    <a href="/" title="Home">Home /</a> &nbsp
                    <span title="Contact"><?php echo $breadcrumbs_last; ?></span>
                </div>
                <h1 class="contact-bgc-text">Contact Us</h1>
                <div class="contact-hero-box r-flex ali-c jut-sb">
                    <div class="contect-left">
                        <img src="images/contect-barner.png" alt="contact us">
                    </div>
                    <div class="contact-left c-flex ">
                        <a href="javascript:void(0)" class="contact-mail-box r-flex ali-c jut-sb">
                            <div class="contact-mail-item c-flex ">
                                <span class="contact-mail-head">Mail</span>
                                <span class="contact-mail-cont">contact@shiftingway.com</span>
                                <div class="contact-arrow r-flex ali-c jut-c">
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.77499 1.4L12.375 7H0.174988V9H12.375L6.77499 14.6L8.17499 16C8.17499 16 16.2132 8.35699 16.175 8C16.1368 7.64301 8.17499 0 8.17499 0L6.77499 1.4Z" fill="#FECF58"/>
                                    </svg>                                        
                                </div>
                            </div>
                           
                            <div class="contact-mail-icon">
                                <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="90" height="90" rx="45" fill="#FFE39B"/>
                                    <path d="M68.727 25C70.1255 25 71.4667 25.5268 72.4556 26.4645C73.4445 27.4021 74 28.6739 74 30V60C74 61.3261 73.4445 62.5979 72.4556 63.5355C71.4667 64.4732 70.1255 65 68.727 65H26.5431C25.1446 65 23.8034 64.4732 22.8145 63.5355C21.8256 62.5979 21.2701 61.3261 21.2701 60V57.5H26.5431V60H68.727V33.5575L50.4429 50.895C49.7013 51.598 48.6956 51.9929 47.6469 51.9929C46.5982 51.9929 45.5925 51.598 44.8509 50.895L26.5431 33.535V35H21.2701V30C21.2701 28.6739 21.8256 27.4021 22.8145 26.4645C23.8034 25.5268 25.1446 25 26.5431 25H68.727ZM31.8161 47.5C32.488 47.5007 33.1344 47.7447 33.623 48.1821C34.1117 48.6195 34.4057 49.2174 34.4451 49.8535C34.4845 50.4896 34.2662 51.1159 33.8349 51.6046C33.4036 52.0932 32.7918 52.4072 32.1245 52.4825L31.8161 52.5H18.6336C17.9616 52.4993 17.3152 52.2553 16.8266 51.8179C16.338 51.3805 16.0439 50.7826 16.0045 50.1465C15.9652 49.5104 16.1834 48.8841 16.6147 48.3954C17.046 47.9068 17.6578 47.5928 18.3251 47.5175L18.6336 47.5H31.8161ZM29.1796 40C29.8788 40 30.5494 40.2634 31.0438 40.7322C31.5383 41.2011 31.8161 41.837 31.8161 42.5C31.8161 43.163 31.5383 43.7989 31.0438 44.2678C30.5494 44.7366 29.8788 45 29.1796 45H21.2701C20.5708 45 19.9002 44.7366 19.4058 44.2678C18.9113 43.7989 18.6336 43.163 18.6336 42.5C18.6336 41.837 18.9113 41.2011 19.4058 40.7322C19.9002 40.2634 20.5708 40 21.2701 40H29.1796Z" fill="black"/>
                                </svg>                                    
                            </div>
                        </a>
                        
                        <a href="javascript:void(0)" class="contact-mail-box r-flex ali-c jut-sb">
                            <div class="contact-mail-item c-flex ">
                                <span class="contact-mail-head">Call us</span>
                                <span class="contact-mail-cont">+91 000-000-0000</span>
                                <div class="contact-arrow r-flex ali-c jut-c">
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.77499 1.4L12.375 7H0.174988V9H12.375L6.77499 14.6L8.17499 16C8.17499 16 16.2132 8.35699 16.175 8C16.1368 7.64301 8.17499 0 8.17499 0L6.77499 1.4Z" fill="#FECF58"/>
                                    </svg>                                        
                                </div>
                            </div>
                           
                            <div class="contact-mail-icon">
                                <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="90" height="90" rx="45" fill="#FFE39B"/>
                                    <path d="M26.9041 22.0905L29.5304 20.1155C31.9887 18.2653 35.3017 18.5728 37.2715 20.8315L41.1899 25.3291C42.8988 27.2892 43.1619 30.2389 41.8434 32.6185L38.1712 39.2407C39.3395 41.9636 41.1518 44.3997 43.6082 46.549C45.9557 48.6381 48.7319 50.2008 51.7724 51.1445L57.2931 46.8855C59.3878 45.2723 62.1747 45.2129 64.2157 46.7403L68.9639 50.2968C71.3337 52.071 72.0252 55.4713 70.5808 58.2453L69.0319 61.2249C67.4874 64.1872 64.5956 66.1238 61.4347 66.3037C53.9786 66.732 45.8324 62.8401 37.0025 54.6337C28.1621 46.4133 23.5058 38.391 23.0294 30.5672C22.8284 27.2744 24.3054 24.053 26.9062 22.0925L26.9041 22.0905Z" fill="black"/>
                                </svg>                                                                      
                            </div>
                        </a>
                        
                        <a href="javascript:void(0)" target="" class="contact-mail-box r-flex ali-c jut-sb">
                            <div class="contact-mail-item c-flex ">
                                <span class="contact-mail-head">What's app Chat</span>
                                <span class="contact-mail-cont">000-000-0000</span>
                                <div class="contact-arrow r-flex ali-c jut-c">
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.77499 1.4L12.375 7H0.174988V9H12.375L6.77499 14.6L8.17499 16C8.17499 16 16.2132 8.35699 16.175 8C16.1368 7.64301 8.17499 0 8.17499 0L6.77499 1.4Z" fill="#FECF58"/>
                                    </svg>                                        
                                </div>
                            </div>
                           
                            <div class="contact-mail-icon">
                                <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="90" height="90" rx="45" fill="#FFE39B"/>
                                    <path d="M16.0116 74L19.9324 59.5928C17.3489 55.1641 15.9916 50.1272 16 45C16 28.9833 28.9833 16 45 16C61.0167 16 74 28.9833 74 45C74 61.0167 61.0167 74 45 74C39.8751 74.0082 34.8403 72.652 30.413 70.0705L16.0116 74ZM34.5339 31.3932C34.1594 31.4164 33.7935 31.5151 33.458 31.6832C33.1434 31.8613 32.8563 32.084 32.6054 32.3444C32.2574 32.6721 32.0602 32.9563 31.8485 33.2318C30.7767 34.6267 30.2002 36.3389 30.21 38.098C30.2158 39.519 30.587 40.9023 31.167 42.1957C32.3531 44.8115 34.3048 47.581 36.8829 50.1475C37.5035 50.7652 38.1096 51.3858 38.7621 51.9629C41.962 54.7801 45.7751 56.8118 49.8981 57.8963L51.5482 58.1486C52.0847 58.1776 52.6212 58.137 53.1606 58.1109C54.0052 58.0673 54.8299 57.8386 55.5763 57.441C55.9561 57.2454 56.3267 57.0325 56.687 56.803C56.687 56.803 56.8117 56.7218 57.0495 56.542C57.441 56.252 57.6817 56.0461 58.0065 55.7068C58.2472 55.4574 58.456 55.1645 58.6155 54.831C58.8417 54.3583 59.0679 53.4564 59.1607 52.7053C59.2303 52.1311 59.21 51.8179 59.2013 51.6236C59.1897 51.3133 58.9316 50.9914 58.6503 50.8551L56.9625 50.0982C56.9625 50.0982 54.4395 48.9991 52.8996 48.2973C52.7373 48.2265 52.5633 48.1862 52.3863 48.1784C52.1879 48.158 51.9874 48.1803 51.7983 48.2439C51.6093 48.3074 51.436 48.4106 51.2901 48.5467V48.5409C51.2756 48.5409 51.0813 48.7062 48.9846 51.2466C48.8643 51.4083 48.6985 51.5305 48.5084 51.5976C48.3184 51.6648 48.1126 51.6738 47.9174 51.6236C47.7285 51.573 47.5434 51.5091 47.3635 51.4322C47.0039 51.2814 46.8792 51.2234 46.6327 51.1161L46.6182 51.1103C44.9592 50.3859 43.4231 49.4075 42.0652 48.2103C41.6998 47.8913 41.3605 47.5433 41.0125 47.2069C39.8716 46.1143 38.8773 44.8782 38.0545 43.5297L37.8834 43.2542C37.7605 43.0691 37.6612 42.8694 37.5876 42.6597C37.4774 42.2334 37.7645 41.8912 37.7645 41.8912C37.7645 41.8912 38.4692 41.1198 38.7969 40.7022C39.0698 40.3551 39.3244 39.9941 39.5596 39.6205C39.9018 39.0695 40.0091 38.504 39.8293 38.0661C39.0173 36.0825 38.1763 34.1076 37.3121 32.1472C37.141 31.7586 36.6335 31.4802 36.1724 31.4251C36.0158 31.4077 35.8592 31.3903 35.7026 31.3787C35.3132 31.3593 34.9229 31.3661 34.5339 31.3932Z" fill="black"/>
                                </svg>                                                                       
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== hero section close =========== -->

    <?php include'include/footer.php'; ?>

    
    <script src="js/script.js" defer> </script>
    <script type="application/ld+json">
        {
        "@context": "https://schema.org/", 
        "@type": "BreadcrumbList", 
        "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "home",
            "item": "https://www.shiftingway.com/"  
        },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "?php echo $breadcrumbs_last; ?>",
            "item": "https://www.shiftingway.com/<?php echo $breadcrumbs_last; ?>"  
        }]
        }
    </script>

    <!-- <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "https://www.shiftingway.com",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.shiftingway.com/<?php echo $last_dom; ?>",
                "query-input": "required name=search_term",
                "inLanguage":"en-US"
            }
            }
    </script> -->
    </body>
</html>