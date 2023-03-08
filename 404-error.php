<?php $city="India"; ?>
<?php $breadcrumbs_last="404"; ?>
<?php $last_dom="404-error"; ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include'include/stactic-meta.php'; ?>


    <title>404 Error | Not Found Page - Shifting way</title>

    <meta property="og:title" content="404 Error | Not Found Page - Shifting way" />
    <meta property="og:url" content="https://www.shiftingway.com/<?php echo $last_dom; ?>" />
    <meta property="al:ios:url" content=" shiftingway.com/<?php echo $last_dom; ?>" />
    <link rel="canonical" href="https://www.shiftingway.com/<?php echo $last_dom; ?>" />
    <link rel="preload" as="image" href="images/404-barner-2.gif?version=0.0.2">
    <style>
        .error-hero-section{
            padding: 50px 0px;
        }
        .error-hero-container{
            margin-top: 50px;
        }
        .error-hero-img{
            max-width: 600px;
        }
        .error-hero-img img {
            width: 100%;
        }
        .error-content-box{
            width: 100%;
            max-width: 400px;
        }
        .help-heading{
            font-size: 18px;
            color: #faa70e;
            font-weight: 900;
            margin-left: 3px;
        }
        .lost-code{
            font-size: 60px;
            color: #dfdfdf;
        }
        .error-main-heading{
            font-size: 42px;
        }
        .error-hero-cont{
            font-size: 22px;
            margin-top: 15px;
            margin-left: 3px;
            color: #464646;
        }
        .hero-pages-btn{
            width: 100%;
        }
        .hero-pages-btn .go-back {
            width: 50%;
            display: flex;
            justify-content: center;
            padding: 12px;
            color: #000000;
            font-size: 18px;
            font-weight: 500;
            margin-top: 30px;
        }
        .home-back-btn{
            background-color: #ffb30e;
            border-radius: 7px;
            position: relative;
            transition: all 0.3s ease-in-out;
            color:#000000;
        }
        .home-back-btn::after{
            content: "";
            width: 100%;
            position: absolute;
            background-color: #ffbc2c;
            border-radius: 7px;
            height: 100%;
            top: 0;
            z-index: -1;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out;
        }
        .home-back-btn:hover{
            background-color: #00000000;
            color: #000000;
        }
        .home-back-btn:hover.home-back-btn::after{
            transform: scaleX(1);
        }
        @media (max-width:800px){
            .error-hero-section{
                padding: 13px 0px;
            }
            .error-hero-container{
                margin-top: 0px;
            }
            .error-hero-container{
                flex-direction: column-reverse;
            }
            .error-hero-img{
                position: absolute;
                top: 250px;
            }
            .error-hero-img{
                max-width: 340px;
            }
            .error-main-heading{
                margin-top: 260px;
                font-size: 26px;
            }
            .error-content-box{
                margin-top: 50px;
            }
            .error-hero-cont{
                font-size: 16px;
                max-width: 300px;
                margin-top: 5px;
            }
            .hero-pages-btn{
                flex-direction: row-reverse;
            }
        }
    </style>
</head>
<body>
    <!-- ============ header ========== -->
    <?php include'include/header.php'; ?>
    <!-- =========== header close =========== -->


    <main>
        <section class="error-hero-section">
            <div class="container">
                <div class="breadcrumbs r-flex ali-c">
                    <a href="/" title="Home">Home /</a> &nbsp;
                    <span title="Page Not Found"><?php echo $breadcrumbs_last; ?></span>
                </div>
                <div class="error-hero-container r-flex ali-c jut-se">
                    <div class="error-hero-img">
                        <img src="images/404-barner-2.gif?version=0.0.2" alt="404 error" title="404 Error">
                    </div>
                    <div class="error-content-box">
                        <div class="help-heading ">Hey Dude!</div>
                        <div class="lost-code day-font">Error 404</div>
                        <h1 class="error-main-heading">Look Like You'r Lost</h1>
                        <p class="error-hero-cont">We can't seem to find the page you're  lokking for.</p>
                        <div class="hero-pages-btn r-flex ali-c ">
                            <a href="/" class="go-back home-back-btn" title="Home">Go Home</a>
                            <a href="/" class="go-back" title="Back">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


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