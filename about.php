<?php $city="India"; ?>
<?php $breadcrumbs_last="About"; ?>
<?php $last_dom="about"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include'include/stactic-meta.php'; ?>

    <!-- =========== change meta tages ======== -->
    <title>About Shiftingway Packers and Movers - ShiftingWay Packers</title>
    <meta name="description" content="we provide the best packers and movers services in all cities. affordable and trusted packers and movers in india" />
    <meta name="keywords" content="shifting way packers and movers about, packers and movers about, best packers and movers in india, movers about, movers and packers, packers and movers near me">
    <meta property="og:title" content="About Shiftingway Packers and Movers - ShiftingWay Packers" />
    <meta property="og:description" content="" />
    <meta property="og:keywords" content="shifting way packers and movers about, packers and movers about, best packers and movers in india, movers about, movers and packers, packers and movers near me" />
    <meta property="og:url" content="https://www.shiftingway.com/<?php echo $last_dom; ?>" />
    <meta property="al:ios:url" content=" shiftingway.com/<?php echo $last_dom; ?>" />

    <link rel="canonical" href="https://www.shiftingway.com/<?php echo $last_dom; ?>" />

    <!-- ====== css link ======= -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">

    <style>
        .about-hero-section{
            background-color: #ffffff;
            padding: 70px 0px;
        }
        .about-hero-container{
            width: 100%;
            background-color: #000000;
            color: #ffffff;
            padding: 100px 50px;
            position: relative;
            border-radius: 25px;
            z-index: 0;
            margin-top: 35px;
        }
        .about-bgc-text{
            position: absolute;
            font-size: 208px;
            left: 20%;
            top: 20%;
            color: #51515150;
            top: 0;
        }
        .about-hero-box{
            gap: 35px;
        }
        .about-main-head{
            max-width: 750px;
            position: relative;
            z-index: 1;
            font-size: 70px;
            color: #ffffff;
            line-height: 85px;
            letter-spacing: 2px;
            word-spacing: 15px;
        }
        .about-color-head{
            color: #926c26;
        }
        .about-main-cont{
            position: relative;
            z-index: 1;
            line-height: 40px;
            font-size: 25px;
            max-width: 600px;
        }

        @media (max-width: 1346px){
            .about-main-head{
                font-size: 55px;
                max-width: 580px;
            }
            .about-main-cont{
                max-width: 450px;
            }
        }
        @media (max-width: 1186px){
            .about-bgc-text{
                font-size: 150px;
            }
            .about-main-head{
                font-size: 35px;
                max-width: 380px;
                line-height: 45px;
            }
            .about-main-cont{
                font-size: 18px;
                line-height: 25px;
                max-width: 600px;
            }
        }
        @media (max-width: 1156px){
            .about-hero-container{
                padding: 70px 40px;
            }
            .about-hero-box{
                flex-direction: column;
                align-items: flex-start;
            }
            .about-bgc-text{
                font-size: 150px;
                font-weight: 900;
                left: 15%;
            }
            .about-main-head{
                font-size: 35px;
                max-width: 350px;
                line-height: 45px;
            }
            .about-main-cont{
                font-size: 18px;
                line-height: 25px;
            }
        }
        @media (max-width: 820px){
        
        
            .about-bgc-text{
                font-size: 100px;
                font-weight: 900;
                left: 0;
                transform: translate(20%, 50%);
            }
            .about-main-head{
                font-size: 35px;
                max-width: 350px;
                line-height: 45px;
            }
            .about-main-cont{
                font-size: 18px;
                line-height: 25px;
            }
        }

        @media (max-width: 580px){
            .about-hero-section{
                padding: 40px 0px;
            }
            .about-hero-container{
                padding: 25px 15px;
                border-radius: 10px;
            }
            .about-hero-box{
                gap: 10px;
            }   
            .about-main-head{
                font-size: 28px;
                line-height: 34px;
            }
            .about-bgc-text{
                font-weight: 900;
                font-size: 60px;
                transform: translate(50%, 50%);
            }
            .about-main-cont{
                font-size: 15px;
            }
            
        }

        @media (max-width: 430px){
            .about-bgc-text{
                font-weight: 900;
                font-size: 80px;
                transform: translate(5%, 50%);
            }
        }
        @media (max-width: 380px){
            .about-bgc-text{
                font-size: 80px;
                font-weight: 900;
                transform: translate(0%, 50%);
            }
        }


        /* ============= achievements section ============= */
        .home-achievement-container{
            padding: 170px 0px 100px 0px;
            width: 100%;
            max-width: 1040px;
            margin: auto;
        }
        .home-achievement-box{
            gap: 50px;
            justify-content: space-evenly;
        }
        .home-achievements-heading{
            font-size: 32px;
            font-weight: 700;
            color: var(--heading-color);
            text-align: center;
            word-spacing: 2px;
            margin: 0px 0px 30px 0px;
        }
        .home-achievement-items {
            width: 100%;
            max-width: 250px;
            padding: 30px;
            border-radius: 12px;
        }
        .achiv-1{
            background-color: #ffe3e3;
        }
        .achiv-2{
            background-color: #e4ffea;
        }
        .achiv-3{
            background-color: #d7ddff;
        }
        .home-achievement-head{
            font-size: 32px;
            font-weight: 700;
        }
        .home-achievement-desc{
            font-size: 17px;
            color: var(--lite-font);
            font-weight: 500;
            margin-top: 5px;
            white-space: nowrap;
        }

        @media (max-width: 700px){
            .home-achievement-box{
                gap: 15px;
            }
            .home-achievement-items{
                max-width: 150px;
            }
            .home-achievement-head{
                font-size: 20px;
                font-weight: 700;
            }
            .home-achievement-desc{
                font-size: 16px;
            }
        }
        @media (max-width: 500px){
            .home-achievement-container{
                padding: 100px 0px;
            }
            .home-achievements-heading{
                font-size: 26px;
            }
            .home-achievement-box{
                gap: 10px;
            }
            .home-achievement-items{
                max-width: 100px;
                padding: 10px ;
            }
            .home-achievement-head{
                font-size: 18px;
            }
            .home-achievement-desc{
                font-size: 12px;
                white-space: normal;
                text-align: center;
            }
            
        }
        /* ============= achievements section close ============= */

        /* ============ bloge section button ============== */
        .home-blog-section{
            padding: 150px 0px;
        }
        .home-blog-sec-heading{
            font-size: 32px;
            font-weight: 700;
            text-align: center;
        }
        .home-blog-sub-heading{
            text-align: center;
            font-size: 18px;
            font-weight: 600;
            margin-top: 7px;
            color: var(--paragraph-light-color);
        }
        .home-blog-sec-box{
            gap: 30px;
            margin-top: 75px;
        }
        .home-blogs-items {
            width: 100%;
            max-width: 360px;
            padding: 17px 15px;
            border: 0.1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: -2px 4px 6px #b9b9b98e;
            display: inline-block;
            color: var(--heading-color);
        }
        .home-blog-item-head{
            font-size: 24px;
            font-weight: 700;
            line-height: 30px;
            margin: 15px 0px;
            transition: all 0.2s ease-in-out;
            text-decoration: none;
        }
        .home-show-font-img{
            width: 100%;
            border-radius: 6px;
            margin: auto;
        }
        .home-show-font-img img {
            width: 100%;
        }
        .home-blog-item-cont{
            font-size: 15px;
            font-weight: 500;
            color: var(--lite-font);
            line-height: 22px;
            /* -webkit-box-orient: vertical; */
            /* display: -webkit-box; */
            /* overflow: hidden; */
            /* -webkit-line-clamp: 2; */
        }
        .home-blog-footer{
            margin-top: 22px;
        }
        .home-posting-date{
            gap: 7px;
            font-size: 16px;
            font-weight: 700;
        }
        .home-read-more-blog{
            font-size: 18px;
            font-weight: 700;
            color: #000000;
            gap: 15px;
            transition: all 0.3s ease-in-out;
        }
        .home-blogs-items:hover .home-read-more-blog{
            color: #fc8702;
            gap: 7px;
        }
        .home-blogs-items:hover .home-blog-item-head{
            color: #fc8702;
            text-decoration: underline;
        }
        .home-read-more-blog svg{
            transition: all 0.3s ease-in-out;
            margin-top: 2.5px;
        }
        .home-read-more-blog svg path{
            transition: all 0.3s ease-in-out;
        }
        .home-blogs-items:hover .home-read-more-blog svg path{
            transition: all 0.3s ease-in-out;
            fill: #fc8702;
        }

        @media (max-width: 500px){
            .home-blog-section{
                padding: 100px 0px;
            }
            .home-blog-sec-box{
                margin-top: 50px;
                padding: 0px 15px;
            }
            .home-blog-sec-heading{
                font-size: 26px;
            }
            .home-blog-sub-heading{
                font-size: 14px;
            }
            .home-blog-item-head{
                font-size: 20px;
                line-height: 24px;
                margin: 7px 0px;
            }
            .home-blog-item-cont{
                font-size: 14px;
            }
            .home-posting-date{
                font-size: 14px;
            }
            .home-posting-date > svg {
                width: 16px;
            }
            .home-read-more-blog{
                font-size: 15px;
            }
            .home-read-more-blog svg{
                width: 11px;
                height: 11px;
            }
            
        }
        /* ============ bloge section button close ============== */


    </style>
</head>
<body>
    <!-- ============ header ========== -->
    <?php include'include/header.php'; ?>
    <!-- =========== header close =========== -->

    <!-- ========== hero section =========== -->
    <section class="about-hero-section">
        <div class="container">
            <div class="breadcrumbs r-flex ali-c">
                <a href="/" title="Home">Home /</a> &nbsp
                <span title="About"><?php echo $breadcrumbs_last; ?></span>
            </div>
            <div class="about-hero-container">
                <div class="about-bgc-text">A B O U T</div>
                <div class="about-hero-box r-flex ali-c">
                    <h1 class="about-main-head"> <span class="about-color-head">How everyone </span>is shifting safely with ShiftingWay</h1>
                    <p class="about-main-cont" >Shiftingway is the most trusted packers and movers company that provides A-to-Z shifting solutions all over India. Shiftingway is another big name in the Packer sand movers industry that everyone trusts because shiftingway has a vast satisfied customer base and received more than 13 thousand positive reviews so far.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== hero section close =========== -->


    <!-- ========== achievements section ========== -->
    <section class="W-100 home-achievement-section w-100">
        <div class="container">
          <div class="home-achievement-container">
            <div class="home-achievements-heading">Our Achievement</div>
                <div class="home-achievement-box r-flex ali-c">
                    <div class="home-achievement-items achiv-1 c-flex ali-c jut-c">
                        <div class="home-achievement-head">15.7K</div>
                        <div class="home-achievement-desc">Happy Customer</div>
                    </div>
                    <div class="home-achievement-items achiv-2 c-flex ali-c jut-c">
                        <div class="home-achievement-head">14.3K</div>
                        <div class="home-achievement-desc">Positive Reviews</div>
                    </div>
                    <div class="home-achievement-items achiv-3 c-flex ali-c jut-c">
                        <div class="home-achievement-head">12+</div>
                        <div class="home-achievement-desc">Years of Experienc</div>
                    </div>
                </div>
          </div>
        </div>
    </section>
    <!-- ========== achievements section close ========== -->


    <!-- ============ our team ========== -->
    <section class="our-team-section">
        <div class="container">
            <div class="our-team-container">
                <h2></h2>
            </div>
        </div>
    </section>
    <!-- ============ our team close ========== -->


        <!-- ========== blogs section ========== -->
        <?php include'include/bloges.php'; ?>

        <!-- ========== blogs section close ========== -->


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
                "name": "contact",
                "item": "https://www.shiftingway.com/<?php echo $breadcrumbs_last; ?>"  
            }]
            }
        </script>
        <script type="application/ld+json">
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
        </script>
    </body>
</html>