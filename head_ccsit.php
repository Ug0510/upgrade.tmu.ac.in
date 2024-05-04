<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
	<meta name="robots" content="noindex">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<!-- Core Style -->
	<link rel="stylesheet" href="style.css">

	<!-- Font Icons -->
	<link rel="stylesheet" href="css/font-icons.css">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="css/swiper.css">
	<!-- <link rel="stylesheet" href="demos/landing/landing.css"> -->
	<!-- <link rel="stylesheet" href="demos/articles/articles.css"> -->
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<!-- Niche Demos -->
	<link rel="stylesheet" href="demos/insurance/insurance.css">
	<!-- managemt college css -->
	<link rel="stylesheet" href="assets/css/managemnt.css">
	<!-- Document Title
	============================================= -->
	<title>Teerthanker Mahaveer University</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<script src="https://kit.fontawesome.com/0fb07c839c.js" crossorigin="anonymous"></script>

	<!-- Niche Demos -->
	<link rel="stylesheet" href="demos/store/store.css">



	<style>
		:root {
			--cnvs-themecolor: #FF7900;
		}

		.bg-overlay-tmu::after {
			content: '';
			width: 100vw;
			height: 100%;
			background-color: #001055;
			/* background-color: #FF7900; */
			position: absolute;
			top: 0;
			left: 0;
			/* opacity: 0.8; */
		}

		.side-head::before {
			display: none !important;
		}

		.right-arrow {
			padding-left: 20px;
		}

		.navigation-button {
			font-size: 1.2vmax;
			;
		}

		.side-line {
			border-right: 0px solid #FF7900;
		}

		@media screen and (max-width:992px) {
			.navigation-button {
				font-size: 1.8vmax;
				;
				/* margin-top:-20px; */
			}
		}

		@media screen and (max-width:480px) {
			.navigation-button {
				font-size: 2.4vmax;
				margin-left: 0;
			}

			.side-line {
				border: 0;
			}

			.page-title-row {
				align-items: start !important;
				padding-left: 0;
			}

		}
	</style>


	<!-- -------------Main Navbar CSS BEGIN------------ -->
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
			user-select: none;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
			/* Transparent tap highlight */
		}

		/* ----------------------
CSS FOR THE NAVBAR
---------------------- */
		#main--menubar {
			width: 100vw;
			height: 0;
			overflow: hidden;
			background-color: #001055;
			display: flex;
			transition: all 0.5s ease-in;
			top: 0;
			left: 0;
			position: fixed;
			z-index: 9999999999;
			text-transform: capitalize;
		}

		.nav-filler {
			height: 4rem;
			width: 100%;
			background-color: #000b3a;
			border: 1px solid white;
			;
		}

		#main--menubar h1 {
			margin-bottom: 0 !important;
		}

		.menubar-viewer {
			/* width: 0 !important; */
			height: 100vh !important;
		}

		#menubar--open--button {
			width: 10vmax;
			height: 8vmin;
			background-color: #001055;
			position: fixed;
			z-index: 999999999;
			top: 20px;
			right: 5px;
			display: flex;
			cursor: pointer;
			justify-content: center;
			align-items: center;
			border: 0.5px solid rgba(256, 256, 256, 0.4);
		}

		#menubar--open--button>* {
			color: white;
			font-size: 1.5vmax;
			padding: 0.3vmax;
		}

		#menubar--open--button i {
			/* border:1px solid white; */
			/* font-size: 1.4vmax; */
			margin-right: 5px;
		}

		/* ----------------------
CSS FOR THE NAVBAR (Common CSS)
---------------------- */

		#main--menubar li a {
			text-decoration: none;
			color: white;
			cursor: pointer;
		}

		#main--menubar li {
			cursor: pointer;
		}

		.underline__effect {
			color: white;
			width: fit-content;
		}

		.underline__effect:after {
			display: block;
			content: '';
			border-bottom: solid 3px #FE5D01;
			transform: scaleX(0);
			transition: transform 250ms ease-in-out;
			transform-origin: 0% 50%;
		}

		.underline__effect_permanent {
			width: fit-content;
		}

		.underline__effect_permanent:after {
			display: block;
			content: '';
			border-bottom: solid 3px #FE5D01;
			transform: scaleX(1);
			transition: transform 250ms ease-in-out;
			transform-origin: 0% 50%;
		}

		.underline__effect:hover::after {
			transform: scaleX(1);
		}

		#main--menubar .additional-link {
			color: #ffffffbb;
		}

		#main--menubar .additional-link:hover {
			color: #FE5D01;
		}


		/* ----------------------
CSS FOR LEFT SECTION OF NAVBAR
---------------------- */
		#main--menubar .left-section {
			width: 30%;
			/* background-color: green; */
			display: flex;
			min-height: 100vh;
			flex-direction: column;
			padding-left: 3vw;
		}

		/* Logo CSS */
		#main--menubar>.left-section>div>a>img {
			width: 70%;
		}

		#main--menubar>.left-section>ul {
			margin-bottom: 3rem;
		}

		#main--menubar>.left-section>ul>li span {
			display: inline-block;
			min-width: 2rem;
			color: white;
		}

		#main--menubar>.left-section ul {
			list-style-type: none;
			display: flex;
			flex-direction: column;
			justify-content: space-evenly;
			/* background-color: pink; */
			height: 100%;
			padding: 0 1rem;
			overflow-y: scroll;
		}

		.sw-none {
			scrollbar-width: none;
		}

		#main--menubar>.left-section>ul {
			margin-top: 3rem;

		}

		#main--menubar>.left-section ul::-webkit-scrollbar {
			background: linear-gradient(#8b92b220, #ffffffc1, #8b92b220);
			width: 4px;
		}

		#main--menubar>.left-section ul li h1 {
			font-size: 1.4rem;
			/* letter-spacing: -0.1px; */
			font-weight: 500;
			text-wrap: nowrap;
			color: white;
			font-family: 'Poppins', sans-serif;
		}

		#main--menubar>.left-section ul li h1 i {
			margin-right: 0.5rem;
		}

		#main--menubar>.left-section ul {
			display: inline-block;
			height: fit-content;
		}

		/* ----------------------
CSS FOR RIGHT SECTION OF NAVBAR
---------------------- */
		#main--menubar .right-section {
			width: 70%;
			min-height: 100vh;
			display: flex;
			flex-direction: column;
			padding-right: 1rem;
		}

		#main--menubar .right-section .content {
			display: flex;
			height: 90vh;
			color: white;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		/* close button css */
		#main--menubar .right-section #close-btn-container {
			height: 10vh;
			display: flex;
			justify-content: flex-end;
			align-items: center;
			padding-right: 1rem;
			/* color:#ffffffd2; */
			color: white;
			font-size: 1.4vw;
		}

		#main--menubar .right-section #close-btn-container span {
			cursor: pointer;
		}

		#main--menubar .right-section #close-btn-container>span:last-child {
			display: none;
		}

		#main--menubar .right-section #close-btn-container span i {
			font-size: 2.4vw;
			transform: translateY(17%);
			color: #ffffffd2;
			margin-left: 5px;
			transition: all 0.3s ease;
		}

		#main--menubar .right-section #close-btn-container span:hover>i {
			color: #fff;
			transform: translateY(17%) rotate(90deg);
		}

		/* inner content css */
		#main--menubar #menubar__content ul>li>div {
			display: none;
			position: absolute;
			top: 50%;
			left: 25%;
			transform: translateY(-50%);
		}

		#menubar--subcategories {
			margin-top: 2rem;
			margin-left: 3rem;
		}

		#main--menubar #menubar__content ul {
			max-height: 75vh;
			width: fit-content;
			overflow-y: scroll;
			overflow-x: hidden;
			display: grid;
			grid-template-columns: 1fr;

		}

		#main--menubar #menubar__content ul li {
			font-size: 1.1rem;
			color: white;
			margin: 0.5rem 0;
			list-style-type: none;
			padding-right: 1rem;
		}

		#main--menubar #menubar__content ul li>div {
			max-height: 85vh;
		}

		#main--menubar #menubar__content ul>li:hover>div {
			display: block;
			z-index: 9;
		}

		#menubar__content {
			position: relative;
			flex: 1;
		}

		#menubar__content .menubar__submenu>ul>li>a {
			text-decoration: none;
			color: white;
		}

		#menubar__content .menubar__submenu>ul>li>a:hover {
			color: #FE5D01;
		}

		#menubar__content .menubar__submenu {
			padding: 1rem;
			padding-left: 0;
		}

		#menubar__content .menubar__submenu::-webkit-scrollbar {
			background-color: transparent;
			border: 0.5px solid white;
			border-radius: 10px;
		}

		#menubar__content .menubar__submenu::-webkit-scrollbar-thumb {
			background-color: white;
			border-radius: 10px;
		}

		#menubar__content>div {
			transition: opacity 0.8s ease;
			/* transition-delay: 0.s; */
			opacity: 0;
			width: fit-content;
			display: flex;
			align-items: center;
			height: 100%;
		}

		#menubar__content>div ul {
			height: inherit;
		}

		.super-active {
			/* display: block !important; */
			opacity: 1 !important;
		}

		#menubar__content ul::-webkit-scrollbar {
			background-color: transparent;
			/* border: 1px solid white; */
			width: 4px;
			border-radius: 10px;
		}

		#menubar__content ul::-webkit-scrollbar-thumb {
			background: linear-gradient(#8b92b220, #ffffffc1, #8b92b220);
			border-radius: 10px;
		}

		#menubar__content #menubar__submenu_content {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			left: 30%;

		}

		#menubar__submenu_courses {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			left: 62%;
			max-width: 20vw;
		}

		.nav-headings {
			color: white;
			opacity: 0.7;
			margin-top: 0rem;
			margin-bottom: 1.5rem;
		}

		.nav-headings:not(:first-child) {
			margin-top: 1.5rem;
		}

		#main--menubar>.left-section>ul>li {
			margin-bottom: 1rem;
			display: flex;
			justify-content: flex-start;
			align-items: center;
		}

		#main--menubar ul li i.bi {
			font-size: 1rem;
			color: white;
		}

		#main--menubar ul li h1 {
			width: 90%;
		}

		/* -------------------
CSS For Tablet View
-------------------  */
		@media screen and (max-width:933px) {
			#menubar--open--button {
				top: 20px;
			}

			#main--menubar>.left-section ul li h1 {
				font-size: 2.2vmin;
			}

			#main--menubar>.left-section {
				width: 45%;
			}
		}

		/* -------------------
CSS For Mobile View
-------------------  */
		@media screen and (max-width:480px) {
			#main--menubar>.left-section>ul>li {
				display: block;
				width: fit-content;
			}

			#main--menubar ul li i.bi {
				display: none;
			}

			#main--menubar {
				overflow: auto;
			}

			#menubar--open--button {
				top: 30px;
				transition: top 0.5s ease;
			}

			#menubar--open--button.scroll-down {
				top: 30px;
			}

			#main--menubar>.right-section>#menubar__content {
				display: none;
				height: 0 !important;
			}

			#main--menubar>.right-section>#menubar__content {
				/* height: fit-content; */
				height: 0;
			}

			#main--menubar>.right-section {
				height: fit-content;
			}

			#main--menubar .left-section {
				width: 50%;
			}

			#menubar--open--button {
				width: fit-content;
				height: fit-content;
				padding: 5px 10px;
				padding-left: 15px;
			}

			#menubar--open--button>* {
				font-size: 2.5vmax;
			}

			.super-fade {
				display: none;
			}

			#main--menubar #menubar__content ul {
				height: 80vh;
			}

			#main--menubar>.left-section>ul {
				display: block;
				overflow-y: scroll;
				overflow-x: hidden;
			}

			#main--menubar>.left-section>ul>li {
				margin-bottom: 5vh;
				padding: 5px;
				min-width: 60vh;
				/* background-color: pink; */
			}

			#main--menubar>.left-section ul li h1 {
				font-size: 3vh;
			}

			/* Logo css */
			#main--menubar>.left-section>div>a>img {
				width: 200%;
			}

			#main--menubar .right-section #close-btn-container>span:first-child {
				display: none;
			}

			#main--menubar .right-section #close-btn-container>span:last-child {
				display: block;
			}

			/* close button css */
			#main--menubar .right-section #close-btn-container {
				font-size: 2.6vh;
				padding-right: 17rem;
				/* align-items:last baseline; */
			}

			#main--menubar .right-section #close-btn-container span i {
				font-size: 4vh;
				color: white;
			}

			#main--menubar>.left-section>ul>li>ul {
				padding: 10px 0px;
				/* background-color: red; */
				padding-left: 1rem;
				color: white;
			}

			#main--menubar>.left-section>ul>li>ul>li {
				padding: 0.5rem 0;
			}

			.tester {
				margin-bottom: 1rem !important;
			}

			/* turn off underline hover effect  */
			.underline__effect:hover ::after {
				display: none;
			}



			.underline__effect_permanent:after {
				display: block;
				content: '';
				border-bottom: solid 3px #FE5D01;
				width: 0;
				/* Start with no width */
				transform-origin: 0% 50%;
				animation: underlineAnimation 0.5s ease-in-out forwards;
			}

			@keyframes underlineAnimation {
				from {
					width: 0;
					/* Start with no width */
					transform: scaleX(0);
				}

				to {
					width: 100%;
					/* Full width */
					transform: scaleX(1);
				}
			}

			#main--menubar .additional-link {
				color: #ffffffbb;
				position: relative;
				/* Make sure the ::after element is positioned relative to this */
			}

			#main--menubar .additional-link:active {
				color: #FE5D01;
			}

			#main--menubar .additional-link+i {
				color: #FE5D01;
				margin-left: 2px;
			}


			/* CSS for the back button */
			#main--menubar #menubar-back-button {
				font-size: 18px;
				color: white;
				margin: 2rem 0 1.5rem 1rem;
				white-space: nowrap;
			}

			#main--menubar #menubar-back-button>i {
				margin-right: 10px;
				align-items: center;
			}

			#main--menubar #menubar-back-button>span {
				border-bottom: 1px solid #FE5D01;
				white-space: nowrap;

			}

			#main--menubar .right-section {
				min-height: 12vh;
				height: 12vh;
				width: 10%;
			}

			#main--menubar .right-section #close-btn-container {
				height: 12vh;
			}

			#main--menubar>.left-section>ul>li {
				margin-bottom: 0;
				;
			}

			#main--menubar>.left-section>ul>li span {
				min-width: 2.3rem;
			}

			#main--menubar>.left-section>ul {
				margin-top: 0;
				margin-bottom: 0;
			}

			#main--menubar>.left-section ul li h1 {
				font-size: 1.2rem;
			}

			#main--menubar>.left-section ul {
				scrollbar-width: none;
				/* For Firefox */
				position: relative;
				-ms-overflow-style: none;
				scroll-behavior: smooth;
				overflow-y:auto;
				overflow-x: hidden;
			}

			#main--menubar>.left-section ul::-webkit-scrollbar {
				display: none;
			}

			#main--menubar>.left-section ul>i {
				position: absolute;
				bottom: 2rem;
				right: 1rem;
				color: white;
				font-size: 1.6rem;
				animation: moving 3s ease infinite, fade 3s ease infinite alternate-reverse;
			}

			@keyframes fade {
				0% {
					opacity: 0.3;
				}

				50% {
					opacity: 1;
				}

				100% {
					opacity: 0.3;
				}
			}

			@keyframes moving {
				0% {
					transform: translateY(0);
				}

				50% {
					transform: translateY(100%);
				}

				100% {
					transform: translateY(0);
				}
			}






			.mobile-inner-nav {
				width: 100%;
				margin: 0;
				padding: 0;
				margin-top: 1rem;
				padding-top: 2rem;
				margin-left: 1rem;
				padding-bottom: 4rem;
				border-top: 1px solid #656565;

			}

			#main--menubar .left-section {
				width: 90%;
			}

			.main-nav-logo {
				width: 60vw !important;
			}

			.mobile-inner-nav div div a {
				color: white;
			}

			.mobile-inner-nav div div a:hover {
				color: #fe8d00;
			}

			.mobile-inner-nav div {
				text-align: left;
			}

			.nav-headings {
				color: white;
				opacity: 0.7;
				margin-top: 0.5rem;
				margin-bottom: 0.5rem;
			}

			.nav-logo-container {
				margin-bottom: 1rem;
			}

		}
	</style>
	<!-- ---------------Main Navbar CSS COMPLETED----------- -->


    <!--notice board start-->
	<style>
	    .notice-board {
      border-radius: 10px;
      border-bottom: 10px solid #fff;
      background-color: #fff;
      max-height: 565px; /* Limit the height for scrollbar */
      overflow-y: auto; /* Enable vertical scrollbar */
    }
    .notice-header {
      font-size: 30px;
      font-weight: bold;
      height: 65px;
      display: flex;
      color: #001055;
      align-items: center;
      justify-content: center;
      position: sticky;
      top: 0;
      background-color: #fff;
      z-index: 1;
      border-bottom: 2px solid #Fe8d00;
      
    }
    
    .notice-body{
      padding: 10px 30px;
      margin-bottom: 20px;
    }
    
    .notice {
      display: flex;
      flex-direction: column;
      padding: 10px;
      background-color: #fff;
    }
    .notice p{
      font-size: 14px;
      line-height: 17px;
      font-weight: 400;
      margin: 20px;
      color: #001055;
      text-overflow: ellipsis;
      display: -webkit-box;
    -webkit-line-clamp: 2; /* Limit notice text to 2 lines */
    -webkit-box-orient: vertical;
  overflow: hidden;
    
      margin: 0px;
    }

    .notice-pub{
      margin-top: 0px;
      font-size: 12px;
      color: #666666;
      line-height: 14px;
      font-weight: 400;
    }

    .notice-meta {
      display: flex;
      margin-top: 15px;
      font-size: 12px;
      color: #666666;
      line-height: 14px;
      font-weight: 400;
    }
    .notice-separator {
      border-top: 1px solid #fe8d00;
      margin: 0px;
    }
    /* Custom scrollbar */
    .notice-board::-webkit-scrollbar {
      width: 5px;
    }
    .notice-board::-webkit-scrollbar-track {
      background: #f1f1f1;
    }
    .notice-board::-webkit-scrollbar-thumb {
      background-color: #fe8d00;
      border-radius: 6px;
    }
    .notice-board::-webkit-scrollbar-thumb:hover {
      background-color: #555;
    }
	</style>
<!--notice board end-->


	<!-------- TMU City In itself start------>
	<style>
		css-figma.txt Displaying css-figma.txt * {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}

		main1 {
			position: relative;
			width: calc(min(90rem, 90%));
			margin: 0 auto;
			margin-top: 21px;
			margin-bottom: 21px;
			min-height: 60vh;
			column-gap: 3rem;
			padding-block: min(20vh, 1rem);
		}

		.bg {
			position: fixed;
			top: -4rem;
			left: -12rem;
			z-index: -1;
			opacity: 0;
		}

		.bg2 {
			position: fixed;
			bottom: -2rem;
			right: -3rem;
			z-index: -1;
			width: 9.375rem;
			opacity: 0;
		}

		.bgcity {
			background: #ffca7a;
		}

		main1>div span {
			text-transform: uppercase;
			letter-spacing: 1.5px;
			font-size: 1rem;
			color: #717171;
		}

		main1>div h2 {
			position: relative;
			width: 226px;
			height: 103px;

			font-family: 'Poppins', sans-serif;
			font-style: normal;
			font-weight: 700;
			font-size: 90px;
			line-height: 123px;
			margin-top: -10px;

			color: #FF7900;
			/* Note: backdrop-filter has minimal browser support */
		}


		main1>div p {
			position: relative;
			height: 103px;
			width: 360px;
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 700;
			font-size: 70px;
			line-height: 105px;

			color: #FFFFFF;

		}

		main1 a {
			display: inline-block;
			text-decoration: none;
			text-transform: uppercase;
			color: #717171;
			font-weight: 500;
			background: #fff;
			border-radius: 3.125rem;
			transition: 0.3s ease-in-out;
		}

		main1>div>a {
			border: 2px solid #c2c2c2;
			margin-top: 2.188rem;
			padding: 0.625rem 1.875rem;
		}

		main1>div>a:hover {
			border: 0.125rem solid #aa9900;
			color: #005baa;
		}

		.swiper {
			width: 100%;
		}

		.swiper-pagination-bullet,
		.swiper-pagination-bullet-active {
			background: #fff;
		}

		.swiper-pagination {
			bottom: 1.25rem !important;
		}

		.swiper-slide {
			width: 18.75rem;
			height: 31.125rem;
			display: flex;
			flex-direction: column;
			justify-content: flex-end;
			align-items: flex-start;
		}

		.swiper-slide h2 {
			color: #fff;
			font-family: "Poppins", sans-serif;
			font-weight: 400;
			font-size: 1.4rem;
			line-height: 1.4;
			margin-bottom: 0.625rem;
			padding: 0 0 0 1.563rem;
			text-transform: uppercase;
		}

		.swiper-slide p {
			color: #000000;
			font-family: 'Poppins', sans-serif;
			font-weight: 400;
			padding: 0 1.563rem;
			line-height: 1.6;
			font-size: 1rem;
			display: -webkit-box;
			-webkit-line-clamp: 4;
			-webkit-box-orient: vertical;
			overflow: hidden;
		}

		.swiper-slide a {
			margin: 1.25rem 1.563rem 3.438rem 1.563rem;
			padding: 0.438em 1.875rem;
			font-size: 0.9rem;
		}

		.swiper-slide a:hover {
			color: #005baa;
		}

		.swiper-slide div {
			display: none;
			opacity: 0;
			padding-bottom: 0.625rem;
		}

		.swiper-slide-active div {
			display: block;
			opacity: 1;
		}

		.swiper-slide--one {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/1.jpg") no-repeat 50% 50% / cover;
		}

		.swiper-slide--two {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/2.jpg") no-repeat 50% 50% / cover;
		}

		.swiper-slide--three {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/3.jpg") no-repeat 50% 50% / cover;
		}

		.swiper-slide--four {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/4.jpg") no-repeat 50% 50% / cover;
		}

		.swiper-slide--five {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/5.jpg") no-repeat 50% 50% / cover;
		}

		.swiper-slide--six {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/6.jpg") no-repeat 50% 50% / cover;
		}

		.swiper-slide--seven {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/7.jpg") no-repeat 50% 50% / cover;
		}


		.swiper-3d .swiper-slide-shadow-left,
		.swiper-3d .swiper-slide-shadow-right {
			background-image: none;
		}

		@media screen and (min-width: 48rem) {
			main1 {
				display: flex;
				align-items: center;
			}

			.bg,
			.bg2 {
				opacity: 0.1;
			}
		}

		@media screen and (min-width: 93.75rem) {
			.swiper {
				width: 85%;
			}
		}

		@media screen and (max-width: 500px) {
			main1>div h2 {
				font-family: 'Poppins', sans-serif;
				font-style: normal;
				font-weight: 700;
				font-size: 30px;
				line-height: 70px;
				margin-left: 0px;
				margin-top: -0px;
				color: #FF7900;
			}

			main1>div p {
				text-align: Center;
				font-family: 'Poppins';
				font-style: normal;
				font-weight: 600;
				font-size: 30px;
				line-height: 40px;
				margin-top: 18px;
				margin-bottom: 0px;
				text-align: center;
				height: 66px;
				width: 100%;

				color: #FFFFFF;

			}


		}
	</style>
	<!-------- TMU City In itself End------>






	<!-------- TMU City In itself start------>
	<style>
		css-figma.txt Displaying css-figma.txt * {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}

		main1 {
			position: relative;
			width: calc(min(90rem, 90%));
			margin: 0 auto;
			margin-top: 21px;
			margin-bottom: 21px;
			min-height: 60vh;
			column-gap: 3rem;
			padding-block: min(20vh, 1rem);
		}

		.bg {
			position: fixed;
			top: -4rem;
			left: -12rem;
			z-index: -1;
			opacity: 0;
		}

		.bg2 {
			position: fixed;
			bottom: -2rem;
			right: -3rem;
			z-index: -1;
			width: 9.375rem;
			opacity: 0;
		}

		.bgcity {
			background: #ffca7a;
		}

		main1>div span {
			text-transform: uppercase;
			letter-spacing: 1.5px;
			font-size: 1rem;
			color: #717171;
		}

		main1>div h2 {
			position: relative;
			width: 226px;
			height: 103px;

			font-family: 'Poppins', sans-serif;
			font-style: normal;
			font-weight: 700;
			font-size: 90px;
			line-height: 123px;
			margin-top: -10px;

			color: #FF7900;
			/* Note: backdrop-filter has minimal browser support */
		}


		main1>div p {
			position: relative;
			height: 103px;
			width: 360px;
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 700;
			font-size: 70px;
			line-height: 105px;

			color: #FFFFFF;

		}

		main1 a {
			display: inline-block;
			text-decoration: none;
			text-transform: uppercase;
			color: #717171;
			font-weight: 500;
			background: #fff;
			border-radius: 3.125rem;
			transition: 0.3s ease-in-out;
		}

		main1>div>a {
			border: 2px solid #c2c2c2;
			margin-top: 2.188rem;
			padding: 0.625rem 1.875rem;
		}

		main1>div>a:hover {
			border: 0.125rem solid #aa9900;
			color: #005baa;
		}

		.swiper {
			width: 100%;
		}

		.swiper-pagination-bullet,
		.swiper-pagination-bullet-active {
			background: #fff;
		}

		.swiper-pagination {
			bottom: 1.25rem !important;
		}

		.swiper-slide {
			width: 18.75rem;
			height: 31.125rem;
			display: flex;
			flex-direction: column;
			justify-content: flex-end;
			align-items: flex-start;
		}

		.swiper-slide h2 {
			color: #fff;
			font-family: "Poppins", sans-serif;
			font-weight: 400;
			font-size: 1.4rem;
			line-height: 1.4;
			margin-bottom: 0.625rem;
			padding: 0 0 0 1.563rem;
			text-transform: uppercase;
		}

		.swiper-slide p {
			color: #000000;
			font-family: 'Poppins', sans-serif;
			font-weight: 400;
			padding: 0 1.563rem;
			line-height: 1.6;
			font-size: 1rem;
			display: -webkit-box;
			-webkit-line-clamp: 4;
			-webkit-box-orient: vertical;
			overflow: hidden;
		}

		.swiper-slide a {
			margin: 1.25rem 1.563rem 3.438rem 1.563rem;
			padding: 0.438em 1.875rem;
			font-size: 0.9rem;
		}

		.swiper-slide a:hover {
			color: #005baa;
		}

		.swiper-slide div {
			display: none;
			opacity: 0;
			padding-bottom: 0.625rem;
		}

		.swiper-slide-active div {
			display: block;
			opacity: 1;
		}

		.swiper-slide--one {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("https://www.tmu.ac.in/monaco/assets/image/infra/9.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--two {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("https://www.tmu.ac.in/monaco/assets/image/infra/11.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--three {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("https://www.tmu.ac.in/monaco/assets/image/infra/2.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--four {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("https://www.tmu.ac.in/monaco/assets/image/infra/4.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--five {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("https://www.tmu.ac.in/monaco/assets/image/infra/5.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--six {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("https://www.tmu.ac.in/monaco/assets/image/infra/7.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--seven {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("https://www.tmu.ac.in/monaco/assets/image/infra/8.webp") no-repeat 50% 50% / cover;
		}


		.swiper-3d .swiper-slide-shadow-left,
		.swiper-3d .swiper-slide-shadow-right {
			background-image: none;
		}

		@media screen and (min-width: 48rem) {
			main1 {
				display: flex;
				align-items: center;
			}

			.bg,
			.bg2 {
				opacity: 0.1;
			}
		}

		@media screen and (min-width: 93.75rem) {
			.swiper {
				width: 85%;
			}
		}

		@media screen and (max-width: 500px) {
			main1>div h2 {
				font-family: 'Poppins', sans-serif;
				font-style: normal;
				font-weight: 700;
				font-size: 30px;
				line-height: 70px;
				margin-left: 0px;
				margin-top: -0px;
				color: #FF7900;
			}

			main1>div p {
				text-align: Center;
				font-family: 'Poppins';
				font-style: normal;
				font-weight: 600;
				font-size: 30px;
				line-height: 40px;
				margin-top: 18px;
				margin-bottom: 0px;
				text-align: center;
				height: 66px;
				width: 100%;

				color: #FFFFFF;

			}

		}
	</style>
	<!-------- TMU City In itself End------>
	<style>
		.preloader {
			width: 100vw;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.loader {
			display: block;
			border: 10px solid #f3f3f3;
			/* Light grey */
			border-top: 10px solid #FF7900;
			/* Blue */
			border-radius: 50%;
			width: 100px;
			height: 100px;
			animation: spin 1s linear infinite;
			margin: 0 auto;
		}

		@keyframes spin {
			0% {
				transform: rotate(0deg);
			}

			100% {
				transform: rotate(360deg);
			}
		}

		body {
			height: 100vh;
			overflow: hidden;
		}


		/*career page css start*/

		/* Custom CSS for styling */
		.form-container {
			background-color: #f0f0f0;
			/* Change the color code as per your preference */
			padding: 20px;
			border-radius: 10px;
			margin-top: 20px;
			/* Add margin from the top */
			margin-bottom: 20px;
			/* Add margin from the bottom */
		}

		/* job container toggle button */
		#box {
			display: none;
			background-color: #f0f0f0;
			padding: 20px;
			margin-top: 20px;
		}

		.hidden {
			display: none;
		}



		/* box */
		.box-container {
			margin: 0;
			padding: 50px;
			font-family: Arial, sans-serif;
			display: flex;
			justify-content: center;
			align-items: center;
			width: auto;
			background-color: #001055;
		}



		.box {
			width: 90%;
			max-width: 1400px;
			/* optional max-width to prevent box from getting too wide on larger screens */
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			padding: 20px;
			text-align: center;
		}

		.h2-line {
			margin-bottom: 20px;
			position: relative;
			display: inline-block;
			transition: all 0.5s ease;
			/* Adding transition effect */
		}

		.h2-line:hover::after {
			content: '';
			position: absolute;
			width: 100%;
			height: 2px;
			background-color: #fe8d00;
			;
			bottom: 0;
			left: 0;
		}

		.list {
			width: 100%;
			margin: 10 auto;
			border-radius: 10px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			padding: 10px;
			list-style-type: none;
			background-color: #fff;
		}

		.list li {
			position: relative;
			padding-left: 20px;
			margin-bottom: 10px;
			line-height: 1.5;
			text-align: justify;
			font-size: 12px;
		}

		.list li::before {
			content: '\2192';
			position: absolute;
			left: 0;
			color: #007bff;
			/* You can change the color if needed */
		}

		/* job-card */

		.custom-card {
			border: none;
			border-radius: 10px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			/* padding: 20px; */
			margin-bottom: 20px;
			margin-top: 10px;
			font-family: 'Arial', sans-serif;
			font-weight: bold;
		}

		.custom-card.btn-primary {
			background-color: #fff;
			/* Light Blue */
			color: #fff;
			border: 2px solid #fe8d00;
			/* Darker Blue */
			transition: all 0.3s ease-in-out;
		}

		.custom-card.btn-secondary {
			background-color: #fff;
			/* Light Red */
			color: #fff;
			border: 2px solid #fe8d00;
			/* Darker Red */
			transition: all 0.3s ease-in-out;
		}

		.card-title-job {
			font-size: 24px;
			color: #001055;
			font-weight: 800;
		}

		.card-text {
			font-size: 18px;
		}

		.btn {
			font-size: 18px;
			font-weight: bold;
			border-radius: 20px;
			padding: 10px 20px;
			transition: all 0.3s ease-in-out;
		}

		.btn:hover {
			transform: translateY(-2px);
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
			background-color: #ffa133;
		}

		.btn:hover {
			color: #fff;
			background-color: #ffa133;
			border-color: #001055;
		}

		.btn-primary {
			background-color: #001055;
			border: 1px solid #fe8d00;
		}

		.btn-secondary {
			background-color: #001055;
			border: 1px solid #fe8d00;
		}

		/* why TMU section cards */
		.counter-card {
			border: none;
			border-radius: 10px;
			background-color: #f8f9fa;
			/* padding: 10px; */
			text-align: center;
			margin-bottom: 0px;
			/* height: 165px; */
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
		}

		.counter-card .card-body {
			flex-grow: 1;
		}

		.counter-card p {
			font-size: 12px;
			text-align: justify;

		}

		.counter-card h4 {
			font-size: 14px;
			text-align: justify;

		}


		/* banner section css */

		.slider-container {
			position: relative;
			width: 100%;
			max-width: 1600px;
			/* Maximum width for the slider */
			height: auto;
			overflow: hidden;
			margin: 0 auto;
		}

		.slider {
			display: flex;
			transition: transform 0.5s ease;
		}

		.slide {
			flex: 0 0 100%;
		}

		.slide img {
			width: 100%;
			height: auto;
			object-fit: cover;
		}

		.arrow {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			width: 30px;
			height: 30px;
			background-color: rgba(255, 255, 255, 0.5);
			border: none;
			cursor: pointer;
			outline: none;
			z-index: 1;
			/* Ensure arrows are above the slides */
		}

		.arrow:hover {
			background-color: rgba(255, 255, 255, 0.8);
		}

		.arrow-prev {
			left: 10px;
		}

		.arrow-next {
			right: 10px;
		}

		@media (max-width: 768px) {
			.arrow {
				width: 20px;
				height: 20px;
			}
		}

		/* banner section css end  */
		/* carrer accordian */
		.careers-accordion {
			background-color: white;
			color: #000;
			cursor: pointer;
			padding: 5px;
			width: 100%;
			text-align: left;
			border: none;
			outline: none;
			transition: background-color 0.3s ease;
			font-size: 18px;
			font-weight: bold;
			display: flex;
			/* Added */
			align-items: center;
			/* Added */
			justify-content: space-between;
			/* Added */
		}

		.careers-accordion:hover {
			background-color: #001055;
			color: #fff;
		}

		.panel {
			padding: 0 18px;
			display: none;
			overflow: hidden;
			border-top: 1px solid #ddd;
			max-height: 200px;
			/* Added */
			overflow-y: auto;
			/* Added */
		}

		.panel p {
			margin-top: 20px;
		}

		.panel.active {
			display: block;
		}

		.icon {
			font-size: 35px;
			font-weight: 400;
			margin-left: 5px;
		}

		/* Add style for the horizontal line */
		.horizontal-line {
			border-top: 1px solid #4f4f4f;
			margin: 0;
		}

		/* Added class for clicked state */
		.clicked {
			background-color: #001055;
			color: #fff;
		}

		.text-color {
			color: #212529;
			line-height: 18px;
			font-size: 12px;
			font-weight: 400;
			text-align: justify;
		}

		.hh1 {

			margin-top: 50px;
			background-color: #fff;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			padding: 20px;
			background-image: url('background.png');
			background-size: cover;
			border-radius: 10px;
		}

		#box {
			display: none;
			background-color: #f0f0f0;
			padding: 20px;
			margin-top: 20px;
		}

		.hidden {
			display: none;
		}


		/* Custom CSS for styling */
		.form-container {
			background-color: #f0f0f0;
			/* Change the color code as per your preference */
			padding: 20px;
			border-radius: 10px;
		}

		.image-container {
			padding: 20px;
			/* Add padding to the image container */
		}

		.image-container img {
			height: 65vh;
			/* Set the height of the image to 50% of viewport height */
			width: 100%;
			/* Ensure the image width fills the container */
			object-fit: cover;
			/* Maintain aspect ratio and cover the container */
		}

		@media (max-width: 767px) {

			/* Adjust image height for smaller devices */
			.image-container img {
				height: 30vh;
				/* Set the height of the image to 30% of viewport height */
			}
		}

		/*career page css end*/

		/*horizontal tabs start*/

		.nav-tabs {
			background-color: #001055;
			/* White background for tabs */
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			/* Shadow effect */
			border-radius: 8px;
			/* Rounded corners */
		}

		.nav-tabs .nav-item .nav-link {
			color: #ffffff;
			/* Dark blue text color */
			border: none;
			/* Remove borders */
			border-radius: 8px 8px 0 0;
			/* Rounded corners for top */
		}

		.nav-tabs .nav-item .nav-link.active {
			color: #ffffff;
			/* White text color for active tab */
			background-color: #FF7900;
			/* Dark blue background for active tab */
		}

		.tab-content {
			background-color: #ffffff;
			/* White background for tab content */
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			/* Shadow effect */
			border-radius: 0 0 8px 8px;
			/* Rounded corners for bottom */
			padding: 20px;
			/* Add some padding */
			margin-top: -1px;
			/* Offset border-top of tab content */
		}

		/*horizontal tabs end*/
	</style>





	<!-- Inner Navbar code  -->
	<style>
		.navbar-custom {
			background-color: #001055;
			border-bottom: thin solid #656565;
			padding: 0;
		}

		.navbar-custom .nav-link {
			color: #fff;
			font-size: 1.1rem;
			margin: 0 8px;
		}

		.navbar-custom .nav-link:hover {
			color: #001055 !important;
		}

		.navbar-custom .nav-item {
			/* border-radius: 5px; */
			padding: 0.3rem;
		}

		.navbar-custom .dropdown-menu {
			background-color: #001055;
			border-radius: 0px;
			border: 1px solid #fff;
			width: 350px;
			left: 50%;
			transform: translateX(-50%);
		}

		.navbar-custom .dropdown-menu a {
			color: #fff;
			font-size: 1.2rem;
			margin-bottom: 10px;
		}

		.navbar-custom .dropdown-menu a:hover {
			background-color: #fff;
			color: #001055 !important;
		}

		.navbar-custom .nav-item:hover {
			background-color: #fff;
			border-radius: 0;
			margin: 0;
		}

		.navbar-custom .nav-item:hover a {
			color: #001055 !important;
		}
	</style>


	<style>
		#nav-banner {
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
		}

		#nav-banner img {
			display: none;
		}

		#nav-banner.super-active img {
			display: block;
			height: 100%;
			width: auto;
			object-fit: cover;
		}

		.blue-overlay {
			position: absolute;
			width: 100%;
			height: 100%;
			background-color: #00105560;
			background: linear-gradient(#00105560, #00105580, black);

		}

		/* .dark-overlay{
			position: absolute;
			width:100%;
			height:105%;
			background-color: #00105560;
			transform: translateY(-1rem);
		} */
	</style>




</head>

<body class="stretched is-expanded-menu" data-menu-breakpoint="1200">

	<div class="preloader">
		<div class="loader"></div>
	</div>


	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">
		<section style="background-color: #001055;">
			<div class="container-fluid d-flex justify-content-start px-5 py-3 ps-4">
				<img src="./logo.png" alt="" style="width: 220px;">

			</div>
		</section>


		<!-- Header Code Section Begin -->
		<header>
			<nav id="main--menubar">


				<!-- Left Section of header -->
				<div class="left-section">
					<div class="nav-logo-container mt-4">
						<a href="#"><img src="./logo.png" alt="" class="main-nav-logo"></a>

					</div>

					<!-- Back button only activated in mobile view in under options -->
					<div id="menubar-back-button" style="display: none;">
						<i class="fa-solid fa-arrow-left"></i>
						<span id="back-button-text"></span>
					</div>




					<!-- First Menubar options -->


					<ul class="university-nav sw-none"></ul>

					<div class="container mobile-inner-nav d-block d-md-none">
						<div class="row p-0 m-0">
							<div class="col-4 mb-3">
								<a href="">ERP Login</a>
							</div>
							<div class="col-4 mb-3">
								<a href="">IQAC</a>
							</div>
							<div class="col-4 mb-3">
								<a href="">Blogs</a>
							</div>
							<div class="col-4 mb-3">
								<a href="">Allumni</a>
							</div>
							<div class="col-4 mb-3">
								<a href="">Placement</a>
							</div>
							<div class="col-4 mb-3">
								<a href="">Carrer</a>
							</div>
							<div class="col-4 mb-3">
								<a href="">News</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Right Section Code -->
				<div class="right-section">
					<div id="close-btn-container">
						<!-- For all screens -->
						<span onclick="closeMenubar()">Close
							<i class="fa-regular fa-circle-xmark"></i>
						</span>
						<!-- For mobile screens -->
						<span onclick="closeMenubar()">
							<i class="fa-regular fa-circle-xmark"></i>
						</span>
					</div>


					<nav class="navbar navbar-expand-lg navbar-dark navbar-custom d-none d-md-block">
						<div class="container-fluid">

							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav ms-auto">
									<li class="nav-item">
										<a class="nav-link" href="#">ERP Login</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">IQAC</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Blogs</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Allumni</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Placement</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Carrer</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">News</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>




					<!-- Bootstrap Bundle with Popper -->
					<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

					<!-- Custom JavaScript -->
					<script>
						// Enable dropdown on hover
						document.querySelectorAll('.navbar .nav-item.dropdown').forEach(function(everyDropdown) {
							everyDropdown.addEventListener('mouseover', function(e) {
								const _d = this.querySelector('.dropdown-menu');
								_d.classList.add('show');
							});
							everyDropdown.addEventListener('mouseout', function(e) {
								const _d = this.querySelector('.dropdown-menu');
								_d.classList.remove('show');
							});
						});
					</script>
					<div id="menubar__content">
						<div id="menubar--subcategories">
							<!-- Menbar categories will be shown dynamically -->
						</div>
						<div id="menubar__submenu_content">
							<!-- Menubar categories content will be displayed here  -->
						</div>
						<div id="menubar__submenu_courses">
							<!-- Menubar courses will be displayed here  -->
						</div>


						<div id="nav-banner">
							<img src="https://www.hindustantimes.com/ht-img/img/2023/08/08/550x309/Screenshot_2023-08-08_183058_1691499721701_1691499729400.png" class="w-100" alt="">
							<div class="blue-overlay"></div>
						</div>

						<!-- <img src="./assets/image/Asset 1@4x.png" alt="" style="width: 100%; margin:auto; "> -->
					</div>
				</div>
			</nav>
		</header>

		<!-- Header Code Section Completed -->


		<!-- Menubar Open Button Code  -->
		<div id="menubar--open--button" onclick="showMenubar()" style="display: none;">
			<i class="fa-solid fa-bars"></i>
			<span class="d-none d-md-block"> Menu</span>
		</div>
		<!-- Menubar Open Button Completed -->

		<script>
			const customMainMenubar = document.getElementById('main--menubar');

			//function to open menubar
			function showMenubar() {
				// reseting the navbar
				resetMainMenubar();
				showBanner();
				document.getElementById('menubar-back-button').style.display = 'none';
				customMainMenubar.classList.add('menubar-viewer');
			}

			function showBanner() {
				const imgBanner = document.getElementById('nav-banner');

				imgBanner.classList.add('super-active');

				const scrollbar = document.getElementById('main--menubar').querySelector('div>.university-nav');

				if (scrollbar) {
					scrollbar.classList.add('sw-none');
				}

			}

			function hideBanner() {
				const imgBanner = document.getElementById('nav-banner');

				const scrollbar = document.getElementById('main--menubar').querySelector('div>.university-nav');


				if (scrollbar) {
					scrollbar.classList.remove('sw-none');
				}
				console.log(imgBanner);
				if (imgBanner.classList.contains('super-active'))
					imgBanner.classList.remove('super-active');
			}

			function removeSuperActiveClass() {
				// Get all elements with the specified classes
				var elements = document.querySelectorAll('#menubar__submenu_courses, #menubar__submenu_content, #menubar--subcategories');

				// Iterate through each element
				elements.forEach(function(element) {
					// Check if the element has the class "super-active"
					if (element.classList.contains('super-active')) {
						// If it has the class, remove it
						element.classList.remove('super-active');
					}
				});
			}



			// function for the close button of navbar when it is in open state
			function closeMenubar() {
				const MenubarCloseBtn = document.getElementById('close-btn-container');

				// Add the 'menubar-remover' class to 'main--menubar'
				customMainMenubar.classList.remove('menubar-viewer');

			}




			// function to show subcategories of menubar
			async function showSubCategories(value) {


				try {
					const box = document.getElementById('menubar--subcategories');
					//resetting the div
					box.innerHTML = '';

					//fetching the json for data
					let categoryList;
					if (cachedData) {
						categoryList = cachedData;
					} else {
						const response = await fetch('menubarData.json');
						categoryList = await response.json();
					}


					// variable to store htmlContent
					let htmlContent = '';

					// iterating through json
					if (categoryList[value] && typeof categoryList[value] === 'object') {
						const category = categoryList[value];
						for (const itemName in category) {
							if (!category[itemName].link) {
								htmlContent += `<li class="underline__effect" onclick="openSubMenuContent('${value}','${itemName}',this)">${itemName}</li>`;
							} else {
								htmlContent += `<li><a href="${category[itemName].link}" class="additional-link">${itemName}</a></li>`;
							}
						}

						// concating data to DOM
						box.innerHTML = `<ul>${htmlContent}</ul>`;
					} else {
						console.log("Category not found or not in the expected format.");
					}
				} catch (err) {
					console.error(err);
				}
			}
			// function to control category content show and control hover effect
			function showMenuContent(choice, listItem) {
				hideBanner();


				if (innerWidth <= 480) {
					handleMainMenubar(choice, listItem);
					return;
				}

				// show content of choosen category
				showSubCategories(choice, listItem);

				const list = listItem.parentElement.querySelectorAll('li');
				const box = document.getElementById('menubar--subcategories');

				//closing submenu content
				document.getElementById('menubar__submenu_content').classList.remove('super-active');
				//closing submenu courses
				document.getElementById('menubar__submenu_courses').classList.remove('super-active');


				// handling if activated one is clicked again
				if (listItem.querySelector('h1').classList.contains('underline__effect_permanent')) {
					listItem.querySelector('h1').classList.remove('underline__effect_permanent');
					listItem.querySelector('h1').classList.add('underline__effect');

					//removing the categories menu and other sub-menu
					box.classList.remove('super-active');
					showBanner();
					return;
				}

				// removing permanent underline if present in any list selected previously
				list.forEach(items => {
					const item = items.querySelector('h1');
					if (item.classList.contains('underline__effect_permanent')) {
						item.classList.remove('underline__effect_permanent');
						item.classList.add('underline__effect');
					}
				})

				// adding permanent underline under selected list item
				listItem.querySelector('h1').classList.add('underline__effect_permanent');
				listItem.querySelector('h1').classList.remove('underline__effect');

				box.classList.add('super-active');
			}


			// function to show content of subMenus
			async function openSubMenuContent(value, menu, listItem) {
				try {
					const box = document.getElementById('menubar__submenu_content');
					box.innerHTML = '';

					//reseting submenu_courses
					document.getElementById('menubar__submenu_courses').classList.remove('super-active');

					// if already active then turn it off
					if (listItem.classList.contains('underline__effect_permanent')) {
						listItem.classList.remove('underline__effect_permanent');
						listItem.classList.add('underline__effect');
						box.classList.remove('super-active');
						return;
					}

					let htmlContent = '';

					const response = await fetch('menubarData.json');
					const catalogue = await response.json();

					for (let item in catalogue[value][menu]) {
						if (catalogue[value][menu][item].link) {
							htmlContent += `<li><a href="${catalogue[value][menu][item].link}" class="additional-link">${item}</a></li>`;
						} else {
							htmlContent += `<li class='underline__effect' onclick="showSubMenuCourse('${value}','${menu}','${item}',this)">${item}</li>`;
						}
					}

					box.innerHTML = `<ul>${htmlContent}</ul>`;
					box.classList.add('super-active');

					const list = listItem.parentElement.querySelectorAll('li');

					// removing permanent underline if present in any list selected previously
					list.forEach(item => {
						if (item.classList.contains('underline__effect_permanent')) {
							item.classList.remove('underline__effect_permanent');
							item.classList.add('underline__effect');
						}
					})

					// adding permanent underline under selected list item
					listItem.classList.add('underline__effect_permanent');
					listItem.classList.remove('underline__effect');

				} catch (err) {
					console.log(err);
				}
			}

			// function to show sub-sub-sub menu (courses list)
			async function showSubMenuCourse(value, menu, subMenu, listItem) {
				try {
					console.log('hi');
					const box = document.getElementById('menubar__submenu_courses');
					box.innerHTML = '';

					// Check if it's already active, if yes, turn it off
					if (listItem.classList.contains('underline__effect_permanent')) {
						listItem.classList.remove('underline__effect_permanent');
						listItem.classList.add('underline__effect');
						box.classList.remove('super-active');
						return;
					}

					let htmlContent = '';

					// Load data from the JSON file
					const response = await fetch('menubarData.json');
					const data = await response.json();




					// Check if the submenu exists in the JSON
					if (data[value] && data[value][menu] && data[value][menu][subMenu]) {
						const courses = data[value][menu][subMenu];
						for (let course in courses) {
							if (courses[course].link) {
								htmlContent += `<li><a href="${courses[course].link}" class="additional-link">${course}</a></li>`;
							} else {
								// You can handle sub-sub-sub menus here if needed
								htmlContent += `<li class='underline__effect' onclick='showSubSubMenuCourse(value, menu, subMenu, course, this)'>${course}</li>`;
							}
						}

						box.innerHTML = `<ul>${htmlContent}</ul>`;
						box.classList.add('super-active');

						// Handle underline effect for selected list item
						const list = listItem.parentElement.querySelectorAll('li');
						list.forEach(item => {
							if (item.classList.contains('underline__effect_permanent')) {
								item.classList.remove('underline__effect_permanent');
								item.classList.add('underline__effect');
							}
						});
						listItem.classList.add('underline__effect_permanent');
						listItem.classList.remove('underline__effect');
					}

				} catch (err) {
					console.log(err);
				}
			}

			// function to show sub-sub-sub menu (courses list) in mobile view
			async function showSubMenuCourseMobile(value, menu, subMenu) {
				try {
					// removing the options from menubar to insert submenucategories
					const ulBox = customMainMenubar.querySelector('.left-section > ul');
					ulBox.innerHTML = '';
					let htmlContent = '';

					// Load data from the JSON file
					const response = await fetch('menubarData.json');
					const data = await response.json();

					// Check if the submenu exists in the JSON
					if (data[value] && data[value][menu] && data[value][menu][subMenu]) {
						const courses = data[value][menu][subMenu];
						for (let course in courses) {
							if (courses[course].link) {
								htmlContent += `<li><a href="${courses[course].link}" class="additional-link">${course}</a><i class="bi bi-arrow-right-short"></i></i></li>`;
							} else {
								// You can handle sub-sub-sub menus here if needed
								htmlContent += `<li class='underline__effect' onclick='showSubSubMenuCourse(value, menu, subMenu, course)'>${course}</li>`;
							}
						}


						ulBox.innerHTML = htmlContent;

						// Set the text and make the back button visible
						const backButton = document.getElementById('menubar-back-button');
						const backButtonText = document.getElementById('back-button-text');
						backButtonText.textContent = subMenu;
						backButton.style.display = 'block';

						// removing margin
						if (ulBox) {
							const liElements = ulBox.querySelectorAll('li');

							liElements.forEach((li) => {
								li.style.marginBottom = '0';
							});
						}

						//setting back function 
						backButton.setAttribute('data-click-value', "1");
						backButton.setAttribute('data-value', value);
						backButton.setAttribute('data-menu', menu);
					}

				} catch (err) {
					console.log(err);
				}
			}

			// Function to add class 'super-fade'
			function addSuperFadeClass(element) {
				element.classList.add('super-fade');
			}

			// Event listener for scrolling
			document.querySelector('.university-nav').addEventListener('scroll', function() {
				var icon = this.querySelector('.bi-chevron-double-down');
				addSuperFadeClass(icon);
			});


			function scrollToBottom(element) {
				var ulElement = element.parentElement;
				ulElement.scrollTop = ulElement.scrollHeight;
				addSuperFadeClass(element);
			}



			// Function to reset Main Menubar
			function resetMainMenubar() {
				const ulElement = document.getElementById('main--menubar').querySelector('div>.university-nav');
				ulElement.innerHTML = `
						<h2 class="nav-headings " >CCSIT</h2>
						<li onclick="showMenuContent(0,this)"><h1 class="underline__effect">
							<span><i class="fas fa-user"></i></span>
							Home </h1><i class="bi bi-caret-right-fill"></i> </li>
						<li onclick="showMenuContent(1,this)"><h1 class="underline__effect">
							<span><i class="fas fa-graduation-cap"></i></span>
							About College</h1> <i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(2,this)"><h1 class="underline__effect">
							<span><i class="fas fa-book"></i></span>
							Academics </h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(3,this)"><h1 class="underline__effect">
							<span><i class="fas fa-briefcase"></i></span>
							Training & Placement </h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(4,this)"><h1 class="underline__effect">
							<span><i class="far fa-newspaper"></i></span>
							Student Corner </h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(5,this)"><h1 class="underline__effect">
							<span><i class="fas fa-building"></i></span>
							Quick Link </h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(6,this)"><h1 class="underline__effect">
							<span><i class="fas fa-building"></i></span>
							College IQAC </h1><i class="bi bi-caret-right-fill"></i></li>

						<h2 class="nav-headings">University</h2>
						<li onclick="showMenuContent(0,this)" ><h1 class="underline__effect">
							<span><i class="fas fa-user"></i></span>
							Who We Are </h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(1,this)"><h1 class="underline__effect">
							<span><i class="fas fa-graduation-cap"></i></span>
							Academics</h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(2,this)"><h1 class="underline__effect">
							<span><i class="fas fa-book"></i></span>
							Programmes</h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(3,this)"><h1 class="underline__effect">
							<span><i class="fas fa-briefcase"></i></span>
							Placement</h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(4,this)"><h1 class="underline__effect">
							<span><i class="far fa-newspaper"></i></span>
							Publications</h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(5,this)"><h1 class="underline__effect">
							<span><i class="fas fa-building"></i></span>
							Active Links</h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(6,this)"><h1 class="underline__effect">
							<span><i class="fas fa-building"></i></span>
							Colleges</h1><i class="bi bi-caret-right-fill"></i></li>

						<i class="bi bi-chevron-double-down" onclick="scrollToBottom(this)"></i>
					`;


				removeSuperActiveClass();
			}




			// function to show content of subMenus in mobile view
			async function openSubMenuContentMobile(value, menu) {

				try {

					// removing the options from menubar to insert submenucategories
					const ulBox = customMainMenubar.querySelector('.left-section > ul');
					ulBox.innerHTML = '';
					let htmlContent = '';

					const response = await fetch('menubarData.json');
					const catalogue = await response.json();

					for (let item in catalogue[value][menu]) {
						if (catalogue[value][menu][item].link) {
							htmlContent += `<li><a href="${catalogue[value][menu][item].link}" class="additional-link">${item}</a><i class="fa-solid fa-caret-right"></i></li>`;
						} else {
							htmlContent += `<li class='underline__effect' onclick="showSubMenuCourseMobile('${value}','${menu}','${item}',this)">${item}</li>`;
						}
					}

					ulBox.innerHTML = htmlContent;

					// Set the text and make the back button visible
					const backButton = document.getElementById('menubar-back-button');
					const backButtonText = document.getElementById('back-button-text');
					backButtonText.textContent = menu;
					backButton.style.display = 'block';

					//setting back function 
					backButton.setAttribute('data-click-value', "0");


					// Setting margin to 0 in all li's
					if (ulBox) {
						const liElements = ulBox.querySelectorAll('li');

						liElements.forEach((li) => {
							li.style.marginBottom = '0';
						});
					}


				} catch (err) {
					console.log(err);
				}
			}

			// function to activate the onclick in back button in main menubar
			document.getElementById('menubar-back-button').addEventListener('click', function() {
				closeBox = document.getElementById('menubar-back-button');

				// getting data value
				const value = closeBox.getAttribute('data-click-value');
				if (value == '0') {
					closeBox.style.display = 'none';
					resetMainMenubar();
				}
				if (value == '1') {
					const value = closeBox.getAttribute('data-value');
					const menu = closeBox.getAttribute('data-menu');
					openSubMenuContentMobile(value, menu);
				}

			})



			// function to handle click event of menubar category 
			async function handleMainMenubar(value, listItem) {


				// Get the h1 element within the list item
				const h1Element = listItem.querySelector('h1');

				if (h1Element.classList.contains('underline__effect_permanent')) {
					// If the h1 element has the permanent underline class, remove it
					h1Element.classList.remove('underline__effect_permanent');

					if (window.innerWidth > 480) {
						h1Element.parentElement.style.marginBottom = '5vh';
					}
				} else {

					// closing all other menu's 
					// Get the parent <ul> element containing all the <li> elements
					const parentUl = listItem.parentElement;

					// Get all <li> elements within the parent <ul>
					const liElements = parentUl.querySelectorAll('li');

					// Loop through all <li> elements to remove any nested <ul> elements
					liElements.forEach((li) => {
						// Get the nested <ul> element within the <li>
						const nestedUl = li.querySelector('ul');

						// Check if there's a nested <ul> element
						if (nestedUl) {
							// Remove the nested <ul> element
							li.removeChild(nestedUl);
							let hElement = li.querySelector('h1');
							if (hElement.classList.contains('underline__effect_permanent')) {
								// If the h1 element has the permanent underline class, remove it
								hElement.classList.remove('underline__effect_permanent');
								if (window.innerWidth > 480) {
									li.style.marginBottom = '5vh';
								}
							}

						}
					});



					// If the h1 element doesn't have the permanent underline class, add it
					h1Element.classList.add('underline__effect_permanent');
					h1Element.classList.remove('underline__effect');
					h1Element.parentElement.style.marginBottom = '0vh';
					// Add scroll effect here 
					// scroll effect for every item except first one
					if (h1Element.parentElement.previousElementSibling !== null) {
						setTimeout(function() {
							h1Element.parentElement.scrollIntoView({
								behavior: 'smooth'
							});
						}, 50);
					}
				}

				// Toggle the visibility of the nested ul element
				const ulElement = listItem.querySelector('ul');
				if (ulElement) {
					if (ulElement.style.display === 'none') {
						ulElement.style.display = 'block';
					} else {
						ulElement.style.display = 'none';
					}
				} else {
					// If there's no nested <ul>, fetch and add the data
					const response = await fetch('menubarData.json');
					const categoryList = await response.json();

					let htmlContent = '';
					if (categoryList[value] && typeof categoryList[value] === 'object') {
						const category = categoryList[value];
						for (const itemName in category) {
							if (!category[itemName].link) {
								htmlContent += `<li onclick="openSubMenuContentMobile('${value}','${itemName}')">${itemName}</li>`;
							} else {
								htmlContent += `<li><a href="${category[itemName].link}" class="additional-link">${itemName}</a><i class="fa-solid fa-caret-right"></i></li>`;
							}
						}
					}
					// Create and append the nested <ul> with the fetched data
					const ul = document.createElement('ul');
					ul.innerHTML = htmlContent;
					listItem.appendChild(ul);

				}
			}

			// 			horizontal tabs start
			document.addEventListener("DOMContentLoaded", function() {
				var myTab = new bootstrap.Tab(document.getElementById('myTab'));
				myTab.show();
			});

			// 			horizontal tabs ends
		</script>

		<script>
			function checkAndApplyAlignment() {

				setTimeout(function() {
					let ulElements;
					ulElements = document.querySelectorAll('#menubar__content ul');

					ulElements.forEach(ul => {
						// Check if the element's scrollHeight is greater than its clientHeight

						if (ul.scrollHeight <= ul.clientHeight) {
							ul.style.alignContent = 'center';
						} else {
							ul.style.alignContent = 'normal';
						}
					});
				}, 10);
			}


			// Call the function when the DOM is ready and whenever a user clicks something inside #main--menubar
			// document.addEventListener('DOMContentLoaded', checkAndApplyAlignment);
			if (window.innerWidth > 480) {
				document.querySelector('#main--menubar').addEventListener('click', checkAndApplyAlignment);
			}
		</script>
		<!-- Javascript for navbar content fetching -->
		<script>
			let cachedData;

			// Function to fetch and cache JSON data during page load
			async function fetchAndCacheData() {
				try {
					const response = await fetch('menubarData.json');
					cachedData = await response.json();
					console.log(cachedData);
				} catch (err) {
					console.error('Error fetching data:', err);
				}
			}

			document.addEventListener('DOMContentLoaded', function() {
				// Call your function here
				console.log('called');
				fetchAndCacheData();
			});
		</script>