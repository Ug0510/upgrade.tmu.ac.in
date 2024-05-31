<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta name="robots" content="noindex">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="SemiColonWeb">
    <meta name="description"
        content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Icons -->
    <link rel="stylesheet" href="css/font-icons.css">
    
    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="css/swiper.css">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="demos/landing/landing.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- Document Title
	============================================= -->
    <title>Canvas | The Multi-Purpose HTML5 Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/0fb07c839c.js" crossorigin="anonymous"></script>


    <style>
        /* Marquee by Latimer Design 🚀 */
        .marquee {
            display: flex;
            overflow-x: hidden;
            flex-wrap: nowrap;
            white-space: nowrap;
            min-width: 100%;
        }

        .marquee:hover .marquee-content {
            animation-play-state: paused;
        }

        .marquee:hover .marquee-logo {
            filter: grayscale(1) contrast(0) blur(1px);
        }

        .marquee-block {
            padding-left: 4em;
            height: 100%;
            width: 100%;
            display: flex;
            cursor: pointer;
        }

        .marquee-block:hover .marquee-logo {
            filter: unset;
        }

        .marquee-logo {
            filter: grayscale(1) contrast(0);
        }

        .marquee-content {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            animation: slide-left 15s linear infinite;
        }

        @keyframes slide-left {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-100%);
            }
        }
    </style>


    <!---------- Cards CSS Start -------->
    <style type="text/css">
        .card {
            background-color: #fff;
            border-radius: 10px;
            border: none;
            position: relative;
            margin-bottom: 30px;
            box-shadow: 0 0.46875rem 2.1875rem rgba(90, 97, 105, 0.1),
                0 0.9375rem 1.40625rem rgba(90, 97, 105, 0.1),
                0 0.25rem 0.53125rem rgba(90, 97, 105, 0.12),
                0 0.125rem 0.1875rem rgba(90, 97, 105, 0.1);
        }

        .l-bg-cherry {
            background: linear-gradient(to right, #ffffff, #eeeeee) !important;
            color: #fff;
        }

        .l-bg-blue-dark {
            background: linear-gradient(to right, #ffffff, #eeeeee) !important;
            color: #fff;
        }

        .l-bg-green-dark {
            background: linear-gradient(to right, #ffffff, #eeeeee) !important;
            color: #fff;
        }

        .l-bg-orange-dark {
            background: linear-gradient(to right, #ffffff, #eeeeee) !important;
            color: #fff;
        }

        .card .card-statistic-3 .card-icon-large .fas,
        .card .card-statistic-3 .card-icon-large .far,
        .card .card-statistic-3 .card-icon-large .fab,
        .card .card-statistic-3 .card-icon-large .fal {
            font-size: 110px;
        }

        .card .card-statistic-3 .card-icon {
            text-align: center;
            line-height: 50px;
            margin-left: 15px;
            color: #FF7900;
            position: absolute;
            right: -5px;
            top: 20px;
            opacity: .7;
        }

        .card-text {
            font-family: 'Poppins', sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            color: #353535;
        }

        @media (max-width: 576px) {
            .card {
                margin-bottom: 15px;
            }

            .card .card-statistic-3 {
                text-align: left;
            }

            .card .card-icon.card-icon-large {
                position: absolute;
                top: 50%;
                right: 5px;
                transform: translateY(-50%);
                font-size: 11px;
            }
        }

        @media (max-width: 768px) {
            .card {
                margin-bottom: 20px;
            }

            .card .card-statistic-3 {
                text-align: left;
            }

            .card .card-icon.card-icon-large {
                position: absolute;
                top: 50%;
                right: 5px;
                transform: translateY(-50%);
                font-size: 11px;
            }
        }

        @media (max-width: 992px) {
            .card {
                margin-bottom: 25px;
            }

            .card .card-statistic-3 {
                text-align: left;
            }

            .card .card-icon.card-icon-large {
                position: absolute;
                top: 50%;
                right: 5px;
                transform: translateY(-50%);
                font-size: 11px;
            }
        }


        @media (max-width: 1200px) {
            .card {
                margin-bottom: 30px;
            }

            .card .card-statistic-3 {
                text-align: left;
            }

            .card .card-icon.card-icon-large {
                position: absolute;
                top: 50%;
                right: 5px;
                transform: translateY(-50%);
                font-size: 11px;
            }
        }


        .career-tran__prev-decs {
            text-align: center;
            font-size: 12px;
            line-height: 24px;
            letter-spacing: .15px;
            color: rgba(0, 0, 0, .56);
        }

        .career-tran__prev-role {
            text-align: center;
            font-size: 14px;
            line-height: 16px;
            font-weight: 500;
            color: rgba(0, 0, 0, .56);
            margin-top: 20px;
        }

        .career-tran__prev-comp {
            text-align: center;
            font-size: 14px;
            line-height: 16px;
            font-weight: 500;
            color: rgba(0, 0, 0, .72);
            margin-top: -20px;
        }

        .career-tran__arrow {
            height: 50px;
            width: 50px;
            margin-top: 16px;
        }
    </style>
    <!---------- Cards CSS End -------->

    <!-- side toggle form star  -->
    <style>
        .sidebar-contact {
            position: fixed;
            top: 50%;
            right: -350px;
            transform: translateY(-50%);
            width: 350px;
            height: auto;
            padding: 40px;
            background: #fff;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .5);
            box-sizing: border-box;
            transition: 0.5s;
            z-index: 10;
        }

        .sidebar-contact.active {
            right: 0;
        }

        .sidebar-contact input,
        .sidebar-contact textarea {
            width: 100%;
            height: 36px;
            padding: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid rgba(0, 0, 0, .5);
            outline: none;
        }

        .sidebar-contact h2 {
            margin: 0 0 20px;
            padding: 0;
        }

        .sidebar-contact textarea {
            height: 60px;
            resize: none;
        }

        .sidebar-contact input[type="submit"] {
            background: #00bcd4;
            color: #fff;
            cursor: pointer;
            border: none;
            font-size: 18px;
        }

        .toggle-side {
            position: absolute;
            height: 180px;
            width: 48px;
            text-align: center;
            cursor: pointer;
            background: #f00;
            top: 0;
            right: 345px;
            line-height: 48px;
            border-radius: 10px;
            
        }

        

        .toggle-side:before {
            content: '\f003';
            font-family: fontAwesome;
            font-size: 18px;
            color: #fff;
        }

        .toggle-side.active:before {
            content: '\f00d';
        }

        @media(max-width:450px) {
            .sidebar-contact {
                width: 100%;
                height: 100%;
                left: -100%;
                box-shadow: 0px 0px
            }

        }
        
        .vericaltext{
        writing-mode: vertical-lr;
        margin-left: 0px;
        font-size: 20px;
        font-weight: 500;
        padding-left: 0px;
        color: #eeeeee
        }

    </style>
    <!-- side toggle form end  -->


    <style>
        /* table Css start */

        /* RESET & BASIC STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        @import url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap");

        :root {
            --white: #fff;
            --darkblue: #000000;
            --lightblue: #dfdfdf;
        }


        .table-container {
            max-width: 70%;
            padding: 0 15px;
            margin: 0 auto;
            align-items: center;


        }

        @media (max-width: 420px) {
            .table-container {
                max-width: 100%;
                padding: 0 10px;
            }
        }

        h1 {
            font-size: 1.5em;
        }

        /* TABLE STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        .table-wrapper {
            overflow-x: auto;
            margin-bottom: 75px;

        }

        .table-wrapper::-webkit-scrollbar {
            height: 8px;
        }

        .table-wrapper::-webkit-scrollbar-thumb {
            background: var(--darkblue);
            border-radius: 40px;
        }

        .table-wrapper::-webkit-scrollbar-track {
            background: var(--white);
            border-radius: 40px;
        }

        .table-wrapper table {
            margin: 50px 0 20px;
            border-collapse: collapse;
            text-align: center;
        }

        .table-wrapper table th {
            padding: 10px;
            min-width: 75px;
            border: 2px solid rgb(238, 238, 238);
            text-align: left;
        }


        .table-wrapper table td {
            padding: 10px;
            min-width: 175px;
            border: 2px solid rgb(255, 255, 255);
            text-align: left;
        }

        .table-wrapper table th {
            color: var(--white);
            background: var(--darkblue);
            font-size: 22px;
        }

        .table-wrapper table tbody tr:nth-of-type(even)>* {
            background: var(--lightblue);
        }

        .table-wrapper table td:first-child {
            grid-template-columns: 25px 1fr;
            grid-gap: 10px;
            text-align: left;
        }

        .table-credits {
            font-size: 12px;
            margin-top: 10px;
        }

        /* FOOTER STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        .page-footer {
            position: fixed;
            right: 0;
            bottom: 50px;
            display: flex;
            align-items: center;
            padding: 5px;
            z-index: 1;
            background: var(--white);
        }

        .page-footer a {
            display: flex;
            margin-left: 4px;
        }

        /* table css end */
    </style>

    <style>
        .block-tab-4 .nav-link {
            padding-top: 20px;
            padding-bottom: 20px;
            font-weight: 500;
            color: #222;
            transition: none;
        }

        .block-tab-4 .nav-link.active,
        .block-tab-4 .tab-pane {
            color: #FFF;
            background-color: #125715;
        }

        .block-tab-4 .nav-link:nth-child(2).active,
        .block-tab-4 .tab-pane:nth-child(2) {
            background-color: #6d0f0f;
        }

        .block-tab-4 .nav-link:nth-child(3).active,
        .block-tab-4 .tab-pane:nth-child(3) {
            background-color: #1d0f6d;
        }

        .block-tab-4 .nav-link:nth-child(4).active,
        .block-tab-4 .tab-pane:nth-child(4) {
            background-color: #0f6d60;
        }

        .block-tab-4 .nav-link:nth-child(5).active,
        .block-tab-4 .tab-pane:nth-child(5) {
            background-color: #6d6b0f;
        }

        .block-tab-4 .nav-link:nth-child(6).active,
        .block-tab-4 .tab-pane:nth-child(6) {
            background-color: #0f676d;
        }

        .block-tab-4 .nav-link:nth-child(7).active,
        .block-tab-4 .tab-pane:nth-child(7) {
            background-color: #6d0f55;
        }
    </style>



</head>

<body class="stretched is-expanded-menu" data-menu-breakpoint="1200">

    <!-- ======================Document Wrapper============================================= -->
    <div id="wrapper">
        <div class="container">
            <div class="sidebar-contact">
                <div class="toggle-side"><p class="vericaltext">Enquire now</p></div>
                <h2>Contact Us</h2>
                <div class="scroll">
                    <form>
                        <input type="text" name="" placeholder="Name">
                        <input type="email" name="" placeholder="Email">
                        <input type="rel" name="" placeholder="Phone Number">
                        <textarea placeholder="Message here.."></textarea>
                        <input type="submit" name="" value="send">
                    </form>
                </div>
            </div>
        </div>


        <!-- Header
			============================================= -->
        <header id="header" class="transparent-header semi-transparent dark" style="color:rgb(255, 0, 0)"
            data-sticky-class="not-dark" data-responsive-class="not-dark">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
							============================================= -->
                        <div id="logo" class="me-lg-5;">
                            <a href="index.html">
                                <img class="logo-default"
                                    srcset="images/logo/logo_dark.png, images/logo/logo_dark.png 2x"
                                    src="images/logo/logo_dark.png" alt="Canvas Logo">
                                <img class="logo-dark" srcset="images/logo/logo.png, images/logo/logo.png 2x"
                                    src="images/logo/logo.png" alt="Canvas Logo">
                            </a>
                        </div><!-- #logo end -->



                        <div class="primary-menu-trigger">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>

                        <!-- Primary Navigation
							============================================= -->
                        <nav class="primary-menu mobile-menu-off-canvas flex-xl-fill me-auto">

                            <ul class="menu-container">
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>Who We Are</div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2 border-0 rounded not-dark">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="sub-menu-container mega-menu-column col-lg-5 dark bg-cover bg-center bg-overlay-mask overflow-hidden"
                                                    data-class="down-xl:rounded up-xl:rounded-start"
                                                    style="background-image: url(images/nav/who_we_are.jpg); --cnvs-bg-overlay-mask-opacity: 0;">

                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col border-start-0">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>University Glimpse</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="about.html">
                                                                    <div>TMU at glance</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="gdpr.html">
                                                                    <div>Vision and mission</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="jobs.html">
                                                                    <div>Accolades</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="profile.html">
                                                                    <div>Governance</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="profile.html">
                                                                    <div>Organogram</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="profile.html">
                                                                    <div>administration</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="profile.html">
                                                                    <div>statutory approvals</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="profile.html">
                                                                    <div>Get a tour</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Executive Dsk</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="services.html">
                                                                    <div>Chancellor</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Founder Chancellor</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="faqs.html">
                                                                    <div>Vice Chancellor</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Campus Policies</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="full-width.html">
                                                                    <div>IIC</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>NSS</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="page-submenu.html">
                                                                    <div>IQAC</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="side-navigation.html">
                                                                    <div>Disiplinary Policies</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Highlights</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="login-register.html">
                                                                    <div>Past-Events</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="coming-soon.html">
                                                                    <div>Media Coverage</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="404.html">
                                                                    <div>Convocation</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>Academics</div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2 border-0 rounded not-dark">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="sub-menu-container mega-menu-column col-lg-8 dark bg-cover bg-center bg-overlay-mask overflow-hidden"
                                                    data-class="down-xl:rounded up-xl:rounded-start"
                                                    style="background-image: url(images/nav/academics.jpg); --cnvs-bg-overlay-mask-opacity: 0;">

                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col border-start-0">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Examination</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="about.html">
                                                                    <div>Overview</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="gdpr.html">
                                                                    <div>Oridance</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="jobs.html">
                                                                    <div>Result</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Curriculum</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="services.html">
                                                                    <div>Syllabus</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Open Elective courses(cbcs)</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Online Learning</div>
                                                        </a>
                                                        <!-- <ul class="sub-menu-container">
																<li class="menu-item">
																	<a class="menu-link" href="full-width.html">
																		<div>IIC</div>
																	</a>
																</li>
																<li class="menu-item">
																	<a class="menu-link" href="#">
																		<div>NSS</div>
																	</a>
																</li>
																<li class="menu-item">
																	<a class="menu-link" href="page-submenu.html">
																		<div>IQAC</div>
																	</a>
																</li>
																<li class="menu-item">
																	<a class="menu-link" href="side-navigation.html">
																		<div>Disiplinary Policies</div>
																	</a>
																</li>
															</ul> -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="menu-item">
                                    <a class="menu-link" href="#">
                                        <div>Programmes</div>
                                    </a>
                                    <ul class="sub-menu-container not-dark">
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="fa-solid fa-graduation-cap fa-beat"
                                                        style="color: #FF7900;"></i>Undergraduate</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item mega-menu mega-menu-small">
                                                    <a class="menu-link" href="#">
                                                        <div>Computer Sciences & IT</div>
                                                    </a>
                                                    <div class="mega-menu-content">
                                                        <div class="row mx-0">
                                                            <ul class="sub-menu-container mega-menu-column col">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>BCA</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>BCA for Visually Challanged</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>BCA-Big Data and Visualization</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>BCA-Cyber Security</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>BCA-Digital Marketing</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>BCA-Informational Security</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>BCA-Internet Technologies</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>BCA (CT-IS In Collab With iNurture)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>BCA (Mobile Applications & Web Technology
                                                                            In Collab With i-Nurture)</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <ul class="sub-menu-container mega-menu-column col">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>B.Sc-Cognitive Science</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>B.Sc (Animation)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>B.Sc-Hons(CS)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>B.Tech</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>B.Tech (Data Science)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>B.Tech-Cse-Big Data and Analytics (In
                                                                            Collab with i-Nurture)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>B.Tech-CT-IS</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>B.Tech-AI(In Collab with iNurture)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>CSE (In Collab with IBM) Application
                                                                            Development using Cloud and Analytics
                                                                            Platform</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>CSE (In Collab with TCSion Data Science)
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="rs-demos.html">
                                                        <div>Agriculture Science</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.Sc.(H) Agriculture</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-revolution.html">
                                                        <div>Dental</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>BDS (Bachelor of Dental Surgery)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-revolution-fullwidth.html">
                                                        <div>Education</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.A.</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.Ed. (Bachelor of Education)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.El.Ed. (4 Yrs. BTC)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.Sc. (ZBC with PCM)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>D.Eled. (BTC)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item mega-menu mega-menu-small">
                                                    <a class="menu-link" href="#">
                                                        <div>Engineering</div>
                                                    </a>
                                                    <div class="mega-menu-content">
                                                        <div class="row mx-0">
                                                            <ul class="sub-menu-container mega-menu-column col">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Sc Hons(Chemistry)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Sc Hons(Mathematics)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Sc Hons(Physics)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Sc Hons Environment and sustainability
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Tech (IoT)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Tech (Mechatronics)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Tech (2ndYear Lateral Entry) Civil</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Tech (2ndYear Lateral Entry) Electrical
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <ul class="sub-menu-container mega-menu-column col">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Tech (2ndYear Lateral Entry) Electronics
                                                                            and Communication</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Tech (2ndYear Lateral Entry) Mechanical
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Tech Civil</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Tech Electrical</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Tech Electronics and Communication</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="">
                                                                        <div>B.Tech Mechanical</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Fine Arts</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>BFA (Bachelor of Fine Arts)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Management</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.Com (Hons.)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.Com (Hons.) Financial Markets</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.Com (Pass)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.B.A.</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.B.A. Specilaization in International Business and
                                                                    Entrepreneur Development in Collaboration with
                                                                    Services</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Medical</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>MBBS (Bachelor of Medicine and Bachelor of Surgery)
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Nursing</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.Sc Nursing</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>Nursing ANM (Auxillary Nursing and Midwifery)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>Post Basic B.Sc Nursing</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Paramedical</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.Optom. (Bachelor of Optometry)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.Sc (Forensic Sciences) Postmortem Facility</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>BMLT (B.SC.in Medical Lab Technology)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>BRIT (B.SC. IN Medical Radiography Imaging
                                                                    Techniques)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Pharmacy</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.Pharma</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.Pharma (2nd Year Lateral Entry) B.Pharma
                                                                    (Practice)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>PharmaD</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>PharmaD (Post Baccalaureate)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Physical Education</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.P.ES (Bachelor of Physical Education & Sports)
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>B.P.ED (Bachelor of Physical Education)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Physiotherapy</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="">
                                                                <div>BPT (Bachelor of Physiotherapy) Lateral</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>


                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="fa-solid fa-building-columns"
                                                        style="color: #FF7900;"></i>Postgraduate</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item mega-menu mega-menu-small">
                                                    <a class="menu-link" href="#">
                                                        <div>Medical</div>
                                                    </a>
                                                    <div class="mega-menu-content">
                                                        <div class="row mx-0">
                                                            <ul class="sub-menu-container mega-menu-column col">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Anatomy)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Physiology)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Forensic Medicine)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Biochemistry)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Microbiology)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Pharmacology)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Pathology)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (General Medicine)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Radiodiagnosis)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Paediatrics)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Psychiatry)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Dermatology,Venereology &Leprosy)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Anaesthesia)</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <ul class="sub-menu-container mega-menu-column col">

                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MD (Respiratory Medicine)</div>
                                                                    </a>
                                                                </li>


                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MS (ENT)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MS (General Surgery)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MS (Opthalomology)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MS (Orthopeadics)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>MS (Obstetrics and Gynaecology)</div>
                                                                    </a>
                                                                </li>


                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>M.Sc. Medical Anatomy</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>M.Sc. Medical Biochemistry</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>M.Sc. Medical Microbiology</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>M.Sc. Medical Pharmacology</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>M.Sc. Medical Physiology</div>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>


                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Computing Sciences & IT</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MCA</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MCA (Software Development)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MCA (Machine Learning)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MCA (Network Technologie)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MCA (Data Science & Analytics and Advance
                                                                    Technologies)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Tech (CSE)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Dental</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div> MDS (Conservative Dentistry and Endodontics)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MDS (Oral and Maxillofacial Surgery)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MDS (Orthodontics and Dentofacial Orthopedics)
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MDS (Prosthodontics and Crown and Bridge)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MDS (Paedodontics and Preventive Dentistry)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MDS (Periodontology)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MDS (Public Health Dentistry)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MDS (Oral Medicine and Radiology)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MDS (Oral Pathology and Microbiology)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Education</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Ed. (Master of Education)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Engineering</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Tech (Specialization Machine Learning & Data
                                                                    Sciences) for working professionals</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Sc (Chemistry)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Sc (Mathematics)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Sc (Physics)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Fine Arts</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.F.A. (Master of Fine Arts)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Management</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MBA (Master of Business Administration)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Nursing</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Sc (Community Health Nursing)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Sc (Medical Surgical Nursing)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Sc (Obstetrics and Gynaecology Nursing)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Sc (Paediatric Nursing)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Sc (Psychiatry Nursing)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Paramedical</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Sc (Forensic Science)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Sc (Medical Laboratory Techniques)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Sc (Optometry)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Sc (Radiological Imaging Techniques)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Pharmacy</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Pharm (Pharmacology)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.Pharm (Pharmaceutics)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>Pharm.D (Doctorate in Pharmacy)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Phusical Education</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>M.P.Ed (Master of Physical Education)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>physiotherapy</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MPT (Cardiopulmonary)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MPT (Neurosciences)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MPT (Orthopaedics)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MPT(Paediatrics)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>MPT (Sports)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="fa-solid fa-user-graduate"
                                                        style="color: #FF7900;"></i>Doctorate</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Computer Sciences & IT</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>Premium Templates</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Computer Application</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Computer Engineering</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Dental</div>
                                                    </a>
                                                    <ul class="sub-menu-container">

                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Conservative Densistry Endodontics</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Oral And Maxillofacial Pathology </div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Oral Medicine and Radiology</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Orthodontics and Dentofacial Orthopaedics</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Pedodontics and Preventive Dentistry</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Periodontology</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Public Health Dentistry</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-flex.html">
                                                        <div>Education</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Education</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-flex.html">
                                                        <div>Engineering</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Electronics & Communication Engineering</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Chemistry Engineering</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Civil Engineering</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Electrical Engineering</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Mathematics Engineering</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Mechanical Engineering</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Physics Engineering</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-flex.html">
                                                        <div>Jain Studies</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Jainogloy</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-flex.html">
                                                        <div>Law & Legal Studies</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Law & Legal Studies </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-flex.html">
                                                        <div>Management</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Management</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-flex.html">
                                                        <div>Medical</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Medical Anatomy</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Medical Biochemistry</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Medical Microbiology</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Medical Pharmacology</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Medical Physilogy</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-flex.html">
                                                        <div>Nursing</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Management</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-flex.html">
                                                        <div>Paramedical</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD MLT(Biochemistry)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Optemetry</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Radio Imaging Techniques</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-flex.html">
                                                        <div>Pharmacy</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Pharmacy</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-flex.html">
                                                        <div>Physical Education</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Physical Education</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-flex.html">
                                                        <div>Physiotherapy</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>PHD Physiotherapy</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="fa-solid fa-newspaper"
                                                        style="color: #FF7900;"></i>Diploma</div>
                                            </a>

                                            <ul class="sub-menu-container">
                                                <li class="menu-item mega-menu mega-menu-small">
                                                    <a class="menu-link" href="#">
                                                        <div>Paramedical</div>
                                                    </a>
                                                    <div class="mega-menu-content">
                                                        <div class="row mx-0">
                                                            <ul class="sub-menu-container mega-menu-column col">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>D.Optom (Diploma in Opeometry)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Anasthesia and Critical care
                                                                            Technician</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Audio and Speach Therapy
                                                                            Technician</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Blood Transfusion Technician
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in C.T. Scan Technician</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Cardiology Technician</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Dialysis Technician</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <ul class="sub-menu-container mega-menu-column col">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Emergency and Trauma Technician
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Intervention Radiology
                                                                            Technician </div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in M.R.I Technician</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Neonatal Care Technician</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Orthopedic and Plaster
                                                                            Technician</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in DMLT (Diploma in Medical Lab
                                                                            Technician)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>DXRT (Diploma in X-Ray Techinician)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>OT Technician</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>


                                                <li class="menu-item mega-menu mega-menu-small">
                                                    <a class="menu-link" href="#">
                                                        <div>Polytechnic</div>
                                                    </a>
                                                    <div class="mega-menu-content">
                                                        <div class="row mx-0">
                                                            <ul class="sub-menu-container mega-menu-column col">

                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Civil </div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Civil Lateral</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Computer Science
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Computer Science
                                                                            Lateral</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Electrical </div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Electrical Lateral
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Electronics</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Electronics Lateral
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <ul class="sub-menu-container mega-menu-column col">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Mechanical
                                                                            (Automobiles)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Mechanical
                                                                            (Automobiles) (2nd year Lateral Entry)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Mechanical
                                                                            (production)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Mechanical
                                                                            (production) (2nd year Lateral Entry)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering Mechanical
                                                                            (Refrideration and Air Conditioning)</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>Diploma in Engineering (Refrideration and
                                                                            Air Conditioning) (2nd year Lateral Entry)
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                <li class="menu-item mega-menu mega-menu-small">
                                                    <a class="menu-link" href="#">
                                                        <div>Nursing</div>
                                                    </a>
                                                    <div class="mega-menu-content">
                                                        <div class="row mx-0">
                                                            <ul class="sub-menu-container mega-menu-column col">

                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>ANM</div>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>GNM (Diploma in General Nursing and Mid
                                                                            Wifery)</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                <li class="menu-item mega-menu mega-menu-small">
                                                    <a class="menu-link" href="#">
                                                        <div>Pharmacy</div>
                                                    </a>
                                                    <div class="mega-menu-content">
                                                        <div class="row mx-0">
                                                            <ul class="sub-menu-container mega-menu-column col">

                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>D.Pharma</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                <li class="menu-item mega-menu mega-menu-small">
                                                    <a class="menu-link" href="#">
                                                        <div>Physical Education</div>
                                                    </a>
                                                    <div class="mega-menu-content">
                                                        <div class="row mx-0">
                                                            <ul class="sub-menu-container mega-menu-column col">

                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                        <div>PGDYED (Post Graduation Diploma in Yoga
                                                                            Education)</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="fa-solid fa-dice-two"
                                                        style="color: #FF7900;"></i>Integrated</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Education</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>B.A-B.ED (Integrated)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>B.SC-B.ED (Integrated)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Law & Legal Studies</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>B.A-LLB (Hons)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>B.B.A-LLB (Hons)</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>B.COM-LLB (Hons)</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>Colleges</div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2 border-0 rounded not-dark">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="sub-menu-container mega-menu-column col-lg-3 dark bg-cover bg-center bg-overlay-mask overflow-hidden"
                                                    data-class="down-xl:rounded up-xl:rounded-start"
                                                    style="background-image: url(images/nav/colleges.jpg); --cnvs-bg-overlay-mask-opacity: 0;">
                                                    <!-- <li class="menu-item">
															<div class="widget px-3">
																<h3 class="mb-2">Templates</h3>
																<p class="mb-0">More than 1350+ Sample Design Templates
																	included for getting quickly started with Canvas.</p>
															</div>
														</li> -->
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col border-start-0">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Medical</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="about.html">
                                                                    <div>Medical College & Research Centre</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="gdpr.html">
                                                                    <div>Dental College & Research Centre</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="jobs.html">
                                                                    <div>College of Nursing</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="profile.html">
                                                                    <div>College of Pharmacy</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Utility &amp; Specials</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="services.html">
                                                                    <div>College of Paramedical Sciences</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Department of Physiotherapy</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="faqs.html">
                                                                    <div>Tmimt College of Management</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="index-rtl.html">
                                                                    <div>Faculty of Education</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Layouts &amp; PageNavs</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="full-width.html">
                                                                    <div>College of Computing Sciences & IT</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Faculty of Engineering</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="page-submenu.html">
                                                                    <div>College of Fine Arts</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="side-navigation.html">
                                                                    <div>College of Law & legal Studies</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Miscellaneous</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="login-register.html">
                                                                    <div>College of Agricultural sciences</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="coming-soon.html">
                                                                    <div>Coming SoonCenter for Jain Studies</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="404.html">
                                                                    <div>Tmimt College of Physical Education</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>Research</div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2 border-0 rounded not-dark">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="sub-menu-container mega-menu-column col-lg-6 dark bg-cover bg-center bg-overlay-mask overflow-hidden"
                                                    data-class="down-xl:rounded up-xl:rounded-start"
                                                    style="background-image: url(images/nav/research.jpg); --cnvs-bg-overlay-mask-opacity: 0;">

                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col border-start-0">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Research Development Centre</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Overview</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Code of Ethics</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Conferences</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Research Publications</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Sponsored Projects</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Patents</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Seed Money</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Awards</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>University Ethics Committee</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>UAIP / CAIP</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>PH.D. PROGRAMME</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Overview</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Ordinances & SOP</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Research Scholars</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Semester Progress Report</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="menu-item">
                                    <a class="menu-link" href="intro.html#niche-demos">
                                        <div>Placement</div>
                                    </a>
                                    <ul class="sub-menu-container not-dark">
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>CRC</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Students Placement</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>CTLD</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item">
                                    <a class="menu-link" href="intro.html#niche-demos">
                                        <div>Publications</div>
                                    </a>
                                    <ul class="sub-menu-container not-dark">
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Annual report</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>journals</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Conference proceedings</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>TMU blogs</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item">
                                    <a class="menu-link" href="intro.html#niche-demos">
                                        <div>Student Life</div>
                                    </a>
                                    <ul class="sub-menu-container not-dark">
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>University Campus</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Hospital</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Hostel</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Plaza</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Sports</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Transportation</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>gym</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Temple</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Library</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Auditorium</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Riddhi Siddhi bhavan</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="bi-hypnotize"></i>Ragging free Campus</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                        </nav><!-- #primary-menu end -->

                        <form class="top-search-form" action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value=""
                                placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Slider
		============================================= -->
<div id="slider" class="slider-element min-vh-0">
    <div class="container">
        <div class="row justify-content-between align-items-center align-items-xl-end">
            <div class="col-lg-6 col-xxl-5 py-5 py-lg-6 my-lg-5 text-center text-lg-start">
                <h1 class="display-4 fw-bolder ls-n-1">Build Powerful Websites in a flash.</h1>
                <p class="lead fw-normal mb-5">Transforming Your Ideas into Stunning Websites with Intuitive Tools and Limitless Possibilities.</p>
                <a href="#" class="button button-large px-lg-5 py-lg-3 rounded-pill m-0 mb-4"><i class="fa-solid fa-star"></i>Get Started</a>
                <a href="#" class="button button-large px-lg-5 py-lg-3 button-dark button-border button-black border-contrast-500 rounded-pill ms-1 mb-4"><i class="fa-solid fa-headset"></i>Contact Us</a>
            </div>
            <div class="col-lg-6 col-xxl-7">
                <img src="demos/saas-2/images/hero.svg" alt="..">
            </div>
        </div>
    </div>
</div>

        <!-- <section id="slider" class="slider-element py-5 mt-lg-5">

			<div class="container">
				<div class="row flex-sm-row-reverse justify-content-center justify-content-lg-between col-mb-80">
					<div class="col-lg-6 col-8">
						<div class="dotted-bg">
							<img src="demos/landing/images/section/sideimg.png" alt="Image 1" class="d-flex z-1 ms-auto w-100 position-relative" style="border-radius: 2rem;">
						</div>
					</div>
					<div class="col-lg-12">
                        <div class="heading-block text-center mx-auto" style="max-width: 700px">
						<h2 class="mb-2 text-transform-none ls-0">About TMU</h2>
                        
                    </div>
						<h2 class="display-3 text-stretch" style="font-size: 30px;">Welcome to the Faculty of Engineering (FOE)</h2>
						<p class="mb-5 text-larger font-primary me-3">where brilliance meets innovation. As an AICTE approved institute, 
                            we nurture bright minds in Engineering, Technology, and Sciences. Our B.Tech CS&E programme is accredited (tier-1 category) by the National 
                            Board of Accreditation (NBA). 100% Placement assistance, and Global exposure, makes us the Top Private Engineering College in UP.
                        </p></p>
						<div class="d-flex align-items-center mb-6">
							<a href="#" class="button button-xlarge bg-opacity-10 bg-color color ms-0 px-5 px-md-6 py-3 m-0">Download Curriculum</a>
							<small class="ms-4 op-06 font-primary">Read More</small>
						</div>
                        
					</div>
				</div>
			</div>

		</section> -->

        <br><br>


        <!-----Upper card start-->

        <section id="content">
            <div class="d-none d-sm-block">
                <div class="content-wrap pb-0 pt-3">
                    <div class="row justify-content-center g-3 me-5 ms-5">
                        <div class="col-md-12 ">
                            <div class="row ">
                                <div class="col-xl-3 col-lg-6 col-sm-6">
                                    <div class="card l-bg-cherry">
                                        <div class="card-statistic-3 p-4">
                                            <div class="card-icon card-icon-large"><i class="fa fa-id-card fa-5x"
                                                    style="padding-right:10px; padding-top:7px;"></i></div>
                                            <div class="mb-4">
                                                <strong style="font-size: 40px; color: #424242;">320+</strong>
                                                <div class="card-text">Companies for placement</div>
                                            </div>
                                            <!-- <div class="row align-items-center mb-2 d-flex">
										<div class="col-8">
											<h2 class="d-flex align-items-center mb-0">
												<a href="#" class="btn btn-danger">Apply Online</a>
											</h2>
										</div>

									</div> -->

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6">
                                    <div class="card l-bg-blue-dark">
                                        <div class="card-statistic-3 p-4">
                                            <div class="card-icon card-icon-large"><i class="fa fa-search fa-5x"
                                                    style="padding-right:10px; padding-top:10px;"></i></div>
                                            <div class="mb-4">
                                                <strong style="font-size: 40px; color: #424242;">Rs 10 LPA</strong>
                                                <div class="card-text">1 in 3 B.Tech Students Placed Above</div>
                                            </div>
                                            <!-- <div class="row align-items-center mb-2 d-flex">
										<div class="col-8">
											<h2 class="d-flex align-items-center mb-0">
												<a href="#" class="btn btn-danger">Find Program</a>
											</h2>
										</div>

									</div> -->

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6">
                                    <div class="card l-bg-green-dark">
                                        <div class="card-statistic-3 p-4">
                                            <div class="card-icon card-icon-large"><i class="fa fa-building fa-5x"
                                                    style="padding-right:10px; padding-top:10px;"></i></div>
                                            <div class="mb-4">
                                                <strong style="font-size: 40px; color: #424242;">1.2 Crore PA</strong>
                                                <div class="card-text">Highest Package</div>
                                            </div>
                                            <!-- <div class="row align-items-center mb-2 d-flex">
										<div class="col-8">
											<h2 class="d-flex align-items-center mb-0">
												<a href="#" class="tmu-btn btn-1">Colleges</a>
											</h2>
										</div>

									</div> -->

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6">
                                    <div class="card l-bg-orange-dark">
                                        <div class="card-statistic-3 p-4">
                                            <div class="card-icon card-icon-large"><i class="fa fa-graduation-cap fa-5x"
                                                    style="padding-right:10px; padding-top:7px;"></i>
                                            </div>
                                            <div class="mb-4">
                                                <strong style="font-size: 40px; color: #424242;">Rs 4.20Lac pm</strong>
                                                <div class="card-text">Highest Internship Stipend</div>
                                            </div>
                                            <!-- <div class="row align-items-center mb-2 d-flex">
										<div class="col-8">
											<h2 class="d-flex align-items-center mb-0">
												<a href="#" class="tmu-btn btn-1">Scholership</a>
											</h2>
										</div>

									</div> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-----Upper card End-->


        <!-----Upper card start-->
        <section id="content">
            <div class="d-block d-sm-none">
                <div class="content-wrap pb-0 pt-3">
                    <div class="row justify-content-center g-3 mb-3 me-5 ms-5">
                        <div class="col-md-12 ">
                            <div class="row ">
                                <div class="owl-carousel">
                                    <div class="col-xl-3 col-lg-6 col-sm-6">
                                        <div class="card l-bg-cherry">
                                            <div class="card-statistic-3 p-4">
                                                <div class="card-icon card-icon-large"><i class="fa fa-id-card fa-7x"
                                                        style="padding-right:10px; padding-top:7px;"></i></div>
                                                <div class="mb-4">
                                                    <strong style="font-size: 40px; color: #424242;">400+</strong>
                                                    <div class="card-text">Visited Companies</div>
                                                </div>
                                                <!-- <div class="row align-items-center mb-2 d-flex">
										<div class="col-8">
											<h2 class="d-flex align-items-center mb-0">
												<a href="#" class="btn btn-danger">Apply Online</a>
											</h2>
										</div>

									</div> -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-sm-6">
                                        <div class="card l-bg-blue-dark">
                                            <div class="card-statistic-3 p-4">
                                                <div class="card-icon card-icon-large"><i class="fa fa-search fa-7x"
                                                        style="padding-right:10px; padding-top:10px;"></i></div>
                                                <div class="mb-4">
                                                    <strong style="font-size: 40px; color: #424242;">82%</strong>
                                                    <div class="card-text">Placement in 2022-23</div>
                                                </div>
                                                <!-- <div class="row align-items-center mb-2 d-flex">
										<div class="col-8">
											<h2 class="d-flex align-items-center mb-0">
												<a href="#" class="btn btn-danger">Find Program</a>
											</h2>
										</div>

									</div> -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-sm-6">
                                        <div class="card l-bg-green-dark">
                                            <div class="card-statistic-3 p-4">
                                                <div class="card-icon card-icon-large"><i class="fa fa-building fa-7x"
                                                        style="padding-right:10px; padding-top:10px;"></i></div>
                                                <div class="mb-4">
                                                    <strong style="font-size: 40px; color: #424242;">62 LPA</strong>
                                                    <div class="card-text">Highest Placement</div>
                                                </div>
                                                <!-- <div class="row align-items-center mb-2 d-flex">
										<div class="col-8">
											<h2 class="d-flex align-items-center mb-0">
												<a href="#" class="tmu-btn btn-1">Colleges</a>
											</h2>
										</div>

									</div> -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-sm-6">
                                        <div class="card l-bg-orange-dark">
                                            <div class="card-statistic-3 p-4">
                                                <div class="card-icon card-icon-large"><i
                                                        class="fa fa-graduation-cap fa-7x"
                                                        style="padding-right:10px; padding-top:7px;"></i>
                                                </div>
                                                <div class="mb-4">
                                                    <strong style="font-size: 40px; color: #424242;">25000+</strong>
                                                    <div class="card-text">World Wide Alumni</div>
                                                </div>
                                                <!-- <div class="row align-items-center mb-2 d-flex">
										<div class="col-8">
											<h2 class="d-flex align-items-center mb-0">
												<a href="#" class="tmu-btn btn-1">Scholership</a>
											</h2>
										</div>

									</div> -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-----Upper card End-->



        <!------VIDEO TESTIMONIALS START------->
        <section id="content">
            <div class="content-wrap py-0 mb-5 mt-5">
                <div class="col-xl-12 col-lg-10 text-center">
                    <h3 class="h1 fw-bold mb-3">Success Stories</h3>
                </div>

                <div class="owl-carousel">
                    <div class="item">
                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
                                <iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> -->
                            <a href="#block-modal-ticket1" data-lightbox="inline"><img src="video-testimonial/1.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65"></p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
                                    <div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
                                    <div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
                                    <div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
                                    <div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
                                </div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
                                                        <h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
                                                    <p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">

                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
                                <iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> -->
                            <a href="#block-modal-ticket2" data-lightbox="inline"><img src="video-testimonial/2.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65"></p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
                                    <div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
                                    <div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
                                    <div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
                                    <div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
                                </div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket2">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
                                                        <h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
                                                    <p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">

                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
                                <iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> -->
                            <a href="#block-modal-ticket3" data-lightbox="inline"><img src="video-testimonial/3.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65"></p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
                                    <div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
                                    <div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
                                    <div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
                                    <div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
                                </div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket3">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
                                                    <h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
                                                <p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">

                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
                                <iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> -->
                            <a href="#block-modal-ticket4" data-lightbox="inline"><img src="video-testimonial/4.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65"></p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
                                    <div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
                                    <div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
                                    <div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
                                    <div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
                                </div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket4">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
                                                        <h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
                                                    <p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">

                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
                                <iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> -->
                            <a href="#block-modal-ticket5" data-lightbox="inline"><img src="video-testimonial/5.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65"></p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
                                    <div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
                                    <div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
                                    <div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
                                    <div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
                                </div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket5">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
                                                    <h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
                                                <p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>





                    </div>

                    <div class="item">

                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
							<iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div> -->
                            <a href="#block-modal-ticket5" data-lightbox="inline"><img src="video-testimonial/5.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65">
                                </p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
								<div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
								<div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
								<div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
								<div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
							</div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket5">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
												<h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
											<p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>





                    </div>

                    <div class="item">

                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
						<iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div> -->
                            <a href="#block-modal-ticket5" data-lightbox="inline"><img src="video-testimonial/5.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65"></p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
							<div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
							<div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
							<div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
							<div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
						</div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket5">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
											<h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
										<p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>





                    </div>



                </div>

                <!-- Code for the Desktop view Ends -->


                <!-- Code for the Mobile View Starts Here -->




                <!-- Code for the Mobile View Ends Here -->

            </div>
        </section><!-- #coqntent end -->



        <div class="marquee">
            <section class="marquee-content">
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Forbes.svg?v=1593719066"
                            alt="Forbes"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Inc.svg?v=1593719066" alt="Inc"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Nat_Geo.svg?v=1593719066"
                            alt="Nat Geo"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Red_Cross.svg?v=1593719066"
                            alt="Red Cross"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066"
                            alt="Discovery Channel"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/REI.svg?v=1593719066" alt="REI"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Fortune.svg?v=1593719066"
                            alt="Fortune"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066"
                            alt="Discovery Channel"></a>
                </div>
            </section>
            <section class="marquee-content">
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Forbes.svg?v=1593719066"
                            alt="Forbes"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Inc.svg?v=1593719066" alt="Inc"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Nat_Geo.svg?v=1593719066"
                            alt="Nat Geo"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Red_Cross.svg?v=1593719066"
                            alt="Red Cross"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066"
                            alt="Discovery Channel"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/REI.svg?v=1593719066" alt="REI"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Fortune.svg?v=1593719066"
                            alt="Fortune"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066"
                            alt="Discovery Channel"></a>
                </div>
            </section>
        </div>



        <br><br>





        <div class="table-container">
            <div class="heading-block text-center mx-auto" style="max-width: 1200px; text-align: left;">
                <h2 class="mb-2 text-transform-none ls-0">Fee Structure for <span style="color: #ff6803;">B.Tech
                        CSE</span></h2>
            </div>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>B.Tech</th>
                            <th>Fee Type</th>
                            <th>Year 1</th>
                            <th>Year 2</th>
                            <th>Year 3</th>
                            <th>Year 4</th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span>
                                    <span class="fi fi-af"></span>
                                </span>
                                <span>Academic Fees</span>
                            </td>
                            <td>Tuition Fee</td>
                            <td>3,70,000</td>
                            <td>3,70,000</td>
                            <td>3,70,000</td>
                            <td>3,70,000</td>
                            <td>14,80,000</td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <span class="fi fi-af"></span>
                                </span>
                                <span>&nbsp;</span>
                            </td>
                            <td>Registration Fees One Time (INR) (Non-Refundable)</td>
                            <td>45,000</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>45,000</td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <span class="fi fi-al"></span>
                                </span>
                                <span>&nbsp;</span>
                            </td>
                            <td>One Time Security Deposit (Refundable) (INR)</td>
                            <td>30,000</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>30,000</td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <span class="fi fi-dz"></span>
                                </span>
                                <span>Living expenses #1</span>
                            </td>
                            <td>Annual Hostel Charges (INR) (Twin Sharing) (incl. boarding, lodging and laundry)</td>
                            <td>1,80,000</td>
                            <td>1,80,000</td>
                            <td>1,80,000</td>
                            <td>1,80,000</td>
                            <td>7,20,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>








        <div class="table-container">
            <div class="heading-block text-center mx-auto" style="max-width: 1200px; text-align: left;">
                <h2 class="mb-2 text-transform-none ls-0"><span style="color: #ff6803;">B.Tech CSE</span> Scholerships
                    2023</h2>
            </div>

            <p style="text-align: justify; margin-top: 20px;">The Teerthanker Mahaveer University Admission Scholarships
                is awarded for the first year of the Undergraduate program. Continuation of Admission
                Scholarship in subsequent years is subject to obtaining CGPA of 8 on a scale of 10, having no backlog
                and no discipline case being recorded
                against the student. The decision for this scholarship is based on the candidate's scores in qualifying
                examinations, i.e., 10+2 score or
                JEE Mains 2023 score or SAT Score. In case candidate is not meeting the Admission scholarship criteria,
                he/she may be eligible for Academic
                Scholarships as outlined in the next section.</p><br>
            <p>In case candidate is not meeting the Admission scholarship criteria, he/she may be eligible for Academic
                Scholarships as outlined in the next section.</p>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Scholarship Range</th>
                            <th>XII Score (Best of 3)*</th>
                            <th>JEE Mains 2023 Score</th>
                            <th>SAT Score</th>
                            <th>IB Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span>
                                    <span class="fi fi-af"></span>
                                </span>
                                <span>50%</span>
                            </td>
                            <td>>=95</td>
                            <td>>=90</td>
                            <td>>=1401</td>
                            <td>>=40</td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <span class="fi fi-af"></span>
                                </span>
                                <span>35%</span>
                            </td>
                            <td>90-94.99</td>
                            <td>75-89.99</td>
                            <td>1301-1400</td>
                            <td>34-39</td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <span class="fi fi-al"></span>
                                </span>
                                <span>20%;</span>
                            </td>
                            <td>85-89.99</td>
                            <td>70-74.99</td>
                            <td>1201-1300</td>
                            <td>32-33</td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <span class="fi fi-al"></span>
                                </span>
                                <span>10%;</span>
                            </td>
                            <td>80-84.99</td>
                            <td>65-69.99</td>
                            <td>1150-1200</td>
                            <td>30-31</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap py-lg-0">

                <div class="container" style="margin-bottom: -150px;">

                    <!-- Section light
					============================================= -->
                    <div class="block-hero-25">

                        <div class="row align-items-lg-center min-vh-lg-100 gutter-50">
                            <div class="col-lg-6">
                                <img src="eligiblity.jpg" alt="Girl in a jacket">
                            </div>

                            <div class="col-lg-6 align-self-center">
                                <h1 class="h1 fw-semibold lh-X padding-bottom: 0px" >B.Tech CSE Eligibility
                                    Criteria & Selection Process</h1>

                                <div class="row col-mb-50">
                                    <div class="col-sm-6">
                                        <div class="feature-box fbox-plain fbox-sm flex-column">
                                            <div class="fbox-content">
                                                <h3 class="text-transform-none ls-0 mb-3">Eligiblity</h3>
                                                <p>Passed XII standard from any recognised Education Board with Physics
                                                    and Mathematics as compulsory subjects and obtained minimum 60%
                                                    marks along with any other third subject OR IB Board with minimum
                                                    score of 24</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="feature-box fbox-plain fbox-sm flex-column">
                                            <div class="fbox-content">
                                                <h3 class="text-transform-none ls-0 mb-3">Selection</h3>
                                                <p>Selection will be based on the merit of Class XII Best of 3 subjects
                                                    score (comprising of Physics and Maths as compulsory subjects and
                                                    any other third subject with highest score)</p>
                                                <p
                                                    style="color: #FF7900; font-size: 15px; margin-top: 2px; font-weight: bold;">
                                                    OR</p>
                                                <p>on the JEE 2023 score</p>
                                                <p
                                                    style="color: #FF7900; font-size: 15px; margin: 0px; font-weight: bold;">
                                                    OR</p>
                                                <p>SAT score</p>
                                                <p
                                                    style="color: #FF7900; font-size: 15px; margin: 0px; font-weight: bold;">
                                                    OR</p>
                                                <p>CUET Percentile score</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- #content end -->




        <div class="section my-0 bg-transparent">
            <div class="container py-lg-5">
                <div class="row justify-content-center gy-5" style="--bs-gutter-x: 60px">
                    <div class="col-lg-12 mt-lg-6">                                        
                        <div class="heading-block text-center mx-auto" style="max-width: 1200px; text-align: left;">
                            <h2 class="mb-2 text-transform-none ls-0"><span style="color: #ff6803;">B.Tech CSE</span> Frequently Asked Questions</h2>
                        </div>
                        <div class="px-lg-6 p-5 rounded"
                            style="background: linear-gradient( to bottom left, rgba(255, 224, 54, .15), rgba(216, 220, 232, .3) 70% );">
                            <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                <div class="toggle-header align-items-center">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed bi-check-lg"></i>
                                        <i class="toggle-open bi-check-lg"></i>
                                    </div>
                                    <div class="toggle-title fw-semibold">
                                        How will I get my Project after Subscribed?
                                    </div>
                                    <div class="toggle-icon">
                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                    </div>
                                </div>
                                <div class="toggle-content fs-6">Competently myocardinate sticky technology through
                                    competitive testing procedures. Progressively engineer customer directed e-services
                                    before frictionless scenarios. Objectively strategize next-generation web services for
                                    professional catalysts for change. Quickly productize clicks-and-mortar schemas for
                                    collaborative e-business. Dynamically customize user friendly leadership skills and
                                    interactive e-services. Objectively actualize virtual imperatives vis-a-vis enabled.
                                </div>
                            </div>

                            <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                <div class="toggle-header align-items-center">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed bi-credit-card"></i>
                                        <i class="toggle-open bi-credit-card"></i>
                                    </div>
                                    <div class="toggle-title fw-semibold">
                                        Can I cancel anytime my Subscription?
                                    </div>
                                    <div class="toggle-icon">
                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                    </div>
                                </div>
                                <div class="toggle-content fs-6">Competently myocardinate sticky technology through
                                    competitive testing procedures. Progressively engineer customer directed e-services
                                    before frictionless scenarios. Objectively strategize next-generation web services for
                                    professional catalysts for change. Quickly productize clicks-and-mortar schemas for
                                    collaborative e-business. Dynamically customize user friendly leadership skills and
                                    interactive e-services. Objectively actualize virtual imperatives vis-a-vis
                                    enabled.<br><br>Voluptates doloribus quae nisi tempore necessitatibus dolores ducimus
                                    enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis?
                                    Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                <div class="toggle-header align-items-center">
                                    <div class="toggle-title fw-semibold">
                                        How does Business Plan work?
                                    </div>
                                    <div class="toggle-icon">
                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                    </div>
                                </div>
                                <div class="toggle-content fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam
                                    cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero
                                    eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                    aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle toggle-lg py-4 mb-0">
                                <div class="toggle-header align-items-center">
                                    <div class="toggle-title fw-semibold">
                                        Is there any hidden charges?
                                    </div>
                                    <div class="toggle-icon">
                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                    </div>
                                </div>
                                <div class="toggle-content fs-6">Compellingly morph virtual niche markets vis-a-vis
                                    excellent paradigms. Assertively orchestrate quality deliverables vis-a-vis cross-unit
                                    e-commerce. Proactively deploy fully tested paradigms for cross-media content.
                                    Conveniently implement cross-media processes whereas highly efficient opportunities.
                                    Objectively scale flexible partnerships vis-a-vis end-to-end meta-services.
                                    <br><br>Conveniently synergize front-end content rather than high-payoff users.
                                    Professionally parallel.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>



        <footer id="footer" class="dark">
            <div class="container">
                <!-- Footer Widgets
				============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row col-mb-50">
                        <div class="col-md-12">
                            <div class="widget">

                                <!-- <img src="https://www.smart2020.tmu.ac.in/image/tmu-logo.png" alt="Image" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A; height: 120px;">

								<p>Teerthanker Mahaveer University, the Best Private University in UP, established by an 'Act' (No. 30) of 2008 of the Government of Uttar Pradesh, approved by the University Grants Commission (UGC) in 2008, vide letter No. F. 9-31/2008 (CPP-1) dated October 2008. <br> On National Highway 9, 144 Km from New Delhi, TMU stands committed to the ideals of Lord Mahaveer - Right Philosophy, Right Knowledge and Right Conduct in all spheres of activity and aspires to be the ultimate destination for world-class education.</p> -->

                                <div class="line" style="margin: 30px 0;"></div>

                                <div class="row col-mb-30">


                                    <div class="col-lg-4 widget_links">
                                        <div class="widget">

                                            <img alt="Teertahnker mahaveer university logo with name" class="img-fluid"
                                                src="images/logo/logo.png">


                                            <!-- <div style="background: url('') no-repeat center center; background-size: 100%;">
												<address>
													<strong>Delhi Office</strong>
												</address>
												<abbr title="Address"><strong>Address:</strong></abbr> 1004-1005-1006, 10th Floor, <br> Mercantile House, <br> 15 Kasturba Gandhi Marg, <br> New Delhi-110001<br>
												<abbr title="contactus"><strong>Contact Us:</strong></abbr> 1800-270-1490<br>
												<abbr title="Email Address"><strong>Email:</strong></abbr> admissions@tmu.ac.in
											</div> -->
                                            <br>
                                            <div style="margin-top:30px;">
                                                <address>
                                                    <strong>TMU stands committed to the ideals of Lord Mahaveer - Right
                                                        Philosophy, Right Knowledge and Right Conduct in all spheres of
                                                        activity and aspires to be the ultimate destination for
                                                        world-class education.</strong>

                                                </address>
                                                <abbr title="Address"><strong>Address:</strong></abbr> N.H.-9, Delhi
                                                Road, <br> Moradabad - 244001, <br> Uttar Pradesh<br>
                                                <abbr title="contactus"><strong>Contact Us:</strong></abbr>
                                                1800-270-1490<br>
                                                <abbr title="Email Address"><strong>Email:</strong></abbr>
                                                university@tmu.ac.in
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-lg-2 widget_links">
                                        <h4>Apply Now</h4>
                                        <ul>
                                            <li><a href="#">Application Form</a></li>
                                            <li><a href="#">Entrance Test</a></li>
                                            <li><a href="#">Education Loan</a></li>
                                            <li><a href="#">Scholarships</a></li>
                                            <li><a href="#">How to Apply</a></li>
                                            <li><a href="#">Brochure</a></li>
                                            <li><a href="#">Campus View</a></li>
                                            <li><a href="#">FAQs</a></li>

                                        </ul>
                                    </div>

                                    <div class="col-6 col-lg-2 widget_links">
                                        <h4>Programmes</h4>
                                        <ul>
                                            <li><a href="#">Under Graduate</a></li>
                                            <li><a href="#">Post Graduate</a></li>
                                            <li><a href="#">Doctratre Programs</a></li>
                                            <li><a href="#">Diploma Programs</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-6 col-lg-2 widget_links">
                                        <h4>Student Life</h4>
                                        <ul>
                                            <li><a href="#">University Campus</a></li>
                                            <li><a href="#">Hostels</a></li>
                                            <li><a href="#">Gym</a></li>
                                            <li><a href="#">Transportation</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Auditorium</a></li>
                                            <li><a href="#">Mahaveer Ji Jainalya</a></li>
                                            <li><a href="#">Food Plaza</a></li>
                                            <li><a href="#">Hospital</a></li>

                                        </ul>
                                    </div>

                                    <div class="col-6 col-lg-2 widget_links">
                                        <h4>Useful Links</h4>
                                        <ul>
                                            <li><a href="#">Convocation</a></li>
                                            <li><a href="#">Gallery</a></li>
                                            <li><a href="#">News</a></li>
                                            <li><a href="#">Join TMU</a></li> <!--- CAREERS -->
                                            <!-- <li><a href="#">About City</a></li> -->
                                            <li><a href="#">IQAC</a></li>
                                            <li><a href="#">ERP Login</a></li>
                                            <li><a href="#">Blogs</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                            <li><a href="#">Feedback</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="widget">

                                <div class="row col-mb-30">

                                </div>

                            </div>


                        </div>
                    </div><!-- .footer-widgets-wrap end -->
                </div>

            </div>
            <!-- Copyrights
			============================================= -->
            <div id="copyrights">
                <div class="container">

                    <div class="row justify-content-between col-mb-30">
                        <div class="col-12 col-lg-auto text-center text-lg-start">
                            <div class="copyrights-menu copyright-links">
                                <a href="#">Anti Ragging</a>/<a href="#">Contact</a>/<a href="#">Disclaimer</a>/<a
                                    href="#">NIRF</a>/<a href="#">NAAC</a>/<a href="#">Privacy</a>
                            </div>
                            Copyrights &copy; 2023 All Rights Reserved by Teerthanker Mahaveer University,Moradabad.
                        </div>

                        <div class="col-md-6 text-center text-md-end">
                            <div class="d-flex justify-content-center justify-content-md-end mb-2">
                                <a href="#" class="social-icon border-transparent si-small h-bg-facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>



                                <a href="#" class="social-icon border-transparent si-small h-bg-twitter">
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                </a>

                                <a href="#" class="social-icon border-transparent si-small h-bg-google">
                                    <i class="fa-brands fa-google"></i>
                                    <i class="fa-brands fa-google"></i>
                                </a>

                                <a href="#" class="social-icon border-transparent si-small me-0 h-bg-linkedin">
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>

                                <a href="#" class="social-icon border-transparent si-small me-0 h-bg-quora">
                                    <i class="fa-brands fa-quora"></i>
                                    <i class="fa-brands fa-quora"></i>
                                </a>

                                <a href="#" class="social-icon border-transparent si-small me-0 h-bg-youtube">
                                    <i class="fa-brands fa-youtube"></i>
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->



    </div>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>




    <!-- JavaScripts
	============================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/functions.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!--------- video testimonial carousel start--------->
    <script>
        $(document).ready(function () {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 4, // Number of items to display in desktop view
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 2000, // Auto-scroll interval
                responsive: {
                    0: {
                        items: 1 // Number of items to display in mobile view
                    },
                    768: {
                        items: 1 // Number of items to display in tablet view
                    },
                    992: {
                        items: 4 // Number of items to display in desktop view
                    }
                }
            });

            // Stop autoplay on hover
            owl.hover(function () {
                owl.trigger('stop.owl.autoplay');
            }, function () {
                owl.trigger('play.owl.autoplay', [3000]);
            });
        });
    </script>
    <!--------- video testimonial carousel end --------->
    <!--------- Side Enquire toggle form start --------->
    <script>
        $(document).ready(function(){
  $('.toggle-side').click(function(){
    $('.sidebar-contact').toggleClass('active')
    $('.toggle-side').toggleClass('active')
  })
})
    </script>
    <!--------- Side Enquire toggle form end --------->


</body>

</html>