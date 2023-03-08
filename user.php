<?php $city="India"; ?>
<?php $breadcrumbs_last="User"; ?>
<?php $last_dom="user"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include'include/stactic-meta.php'; ?>


    <title>ShiftingWay User - Shiftingway India Packers</title>

    <meta property="og:title" content="ShiftingWay User - Shiftingway India Packers" />
    <meta property="og:url" content="https://www.shiftingway.com/<?php echo $last_dom; ?>" />
    <meta property="al:ios:url" content=" shiftingway.com/<?php echo $last_dom; ?>" />

    <link rel="canonical" href="https://www.shiftingway.com/<?php echo $last_dom; ?>" />

    <link rel="preload" as="image" href="images/thank-barner.gif">

    <style>
        .thank-you-container{
            padding: 30px 0px 0px 0px;
        }
        .thank-main-heading{
            text-align: center;
            margin-top: 110px;
            color: #292929;
        }
        .thank-sub-heading{
            color: #363636;
            font-size: 32px;
            font-weight: 700;
        }
        .thank-left{
            max-width: 400px;
        }
        .thank-left img {
            width: 100%;
        }
        .thank-right{
            max-width: 500px;
        }
        .thank-hero-btn{
            margin-top: 30px;
            width: 100%;
        }
        .thank-hero-btn .herobtn{
            padding: 12px 0px;
            width: 50%;
            font-size: 18px;
            font-weight: 600;
            color: #000000;
        }
        .hero-call-btn{
            background-color: #fabd14;
            border-radius: 7px;
            position: relative;
            transition: all 0.3s ease-in-out;
        }
        .hero-call-btn::after{
            content: "";
            background-color: #fabd14;
            border-radius: 7px;
            width: 100%;
            height: 100%;
            position: absolute;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out;
            z-index: -1;
        }
        .hero-call-btn:hover{
            background-color: #00000000;
        }
        .hero-call-btn:hover.hero-call-btn::after{
            transform: scaleX(1);
            background-color: #fabd14;
        }
        @media (max-width: 700px){
            .thank-hero-box{
                flex-direction: column;
            }
            .thank-main-heading{
                font-size: 24px;
                text-align: start;
                margin-top: 50px;
            }
            .thank-sub-heading{
                font-size: 20px;
            }
            .thank-left{
                max-width: 260px;
            }
            .thank-hero-btn{
                flex-direction: row-reverse;
            }
            .thank-hero-btn .herobtn{
                font-size: 15px;
            }
        }   

    </style>
</head>
<body>
    <!-- ============ header ========== -->
    <?php include'include/header.php'; ?>
    <!-- =========== header close =========== -->

    <!-- ========== hero section =========== -->
    <main>
        <section class="thank-you-hero">
            <div class="container">
                <div class="thank-you-container">
                    <div class="breadcrumbs r-flex ali-c">
                        <a href="/" title="Home">Home /</a> &nbsp
                        <span title="User"><?php echo $breadcrumbs_last; ?></span>
                    </div>
                    <div class="thank-you-box">
                        <h1 class="thank-main-heading">Thank You For Submit Information</h1>
                        <div class="thank-hero-box r-flex ali-c jut-se">
                            <div class="thank-left">
                                <img width="100%" src="images/thank-barner.gif" alt="packers and movers services">
                            </div>
                            <div class="thank-right">
                                <h2 class="thank-sub-heading">Your Information is Securely Received, We will call you few minutes</h2>
                                <div class="thank-hero-btn r-flex ali-c">
                                    <a href="tel:+91 9817326797" class="herobtn r-flex ali-c jut-c hero-call-btn">Urgent Call</a>
                                    <a href="https://www.shiftingway.com/packers-and-movers-in-hisar#service" class="herobtn r-flex ali-c jut-c">Relative Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- =========== hero section close =========== -->


    <!-- ============= footer ============== -->

    <?php include'include/footer.php'?>

    <!-- ============= footer close ============== -->


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
        "name": "contact",
        "item": "https://www.shiftingway.com/<?php echo $last_dom; ?>"  
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