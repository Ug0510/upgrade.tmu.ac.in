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
			margin-left: -15px;
		}

		.side-line {
			border-right: 2px solid #FF7900;
		}

		@media screen and (max-width:992px) {
			.navigation-button {
				font-size: 1.8vmax;
				margin-left: -15px;
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
			padding-right: 10px;
			text-transform: capitalize;
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
			width: 25%;
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

		#main--menubar>.left-section ul {
			list-style-type: none;
			display: flex;
			flex-direction: column;
			justify-content: space-evenly;
			/* background-color: pink; */
			height: 100%;
			padding: 0 1rem 3rem;
			/* border-right: 1px solid lightgrey; */
			overflow-y: scroll;
			overflow-x: hidden;
		}

		#main--menubar>.left-section ul::-webkit-scrollbar {
			background: linear-gradient(#8b92b220, #ffffffc1, #8b92b220);
			width: 4px;
		}

		#main--menubar>.left-section ul li h1 {
			font-size: 2.2vmax;
			/* letter-spacing: -0.1px; */
			font-weight: 500;
			color: white;
			font-family: 'Poppins', sans-serif;
		}

		#main--menubar>.left-section ul li h1 i {
			margin-right: 0.5rem;
		}


		/* ----------------------
CSS FOR RIGHT SECTION OF NAVBAR
---------------------- */
		#main--menubar .right-section {
			width: 75%;
			min-height: 100vh;
			padding-left: 3rem;
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

		#main--menubar #menubar__content ul {
			max-height: 85vh;
			width: fit-content;
			overflow-y: scroll;
			overflow-x: hidden;
			display: grid;
			grid-template-columns: 1fr;

		}

		#main--menubar #menubar__content ul li {
			font-size: 1.6vw;
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
			height: 85vh !important;
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
			max-width: 25vw;
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
				width: 30%;
			}
		}

		/* -------------------
CSS For Mobile View
-------------------  */
		@media screen and (max-width:480px) {

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
				padding-left:15px;
			}

			#menubar--open--button>* {
				font-size: 2.5vmax;
			}

			#main--menubar ul {
				width: 80vw;
				overflow: visible;
				/* background-color: pink; */
			}

			#main--menubar #menubar__content ul {
				height: 80vh;
			}

			#main--menubar>.left-section>ul {
				display: block;
			}

			#main--menubar>.left-section>ul>li {
				margin-bottom: 5vh;
				padding: 5px;
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

			#main--menubar>.left-section ul::-webkit-scrollbar {
				background: linear-gradient(#8b92b200, #ffffff9f, #8b92b200);
				width: 2px;
				overflow-y: auto;
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
		}
	</style>
	<!-- ---------------Main Navbar CSS COMPLETED----------- -->




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
				url("card/1.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--two {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/2.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--three {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/3.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--four {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/4.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--five {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/5.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--six {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/6.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--seven {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/7.webp") no-repeat 50% 50% / cover;
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
				url("card/1.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--two {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/2.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--three {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/3.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--four {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/4.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--five {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/5.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--six {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/6.webp") no-repeat 50% 50% / cover;
		}

		.swiper-slide--seven {
			background: linear-gradient(to top, #ffffff00, #203a4300, #2c536400),
				url("card/7.webp") no-repeat 50% 50% / cover;
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
      background-color: #f0f0f0; /* Change the color code as per your preference */
      padding: 20px;
      border-radius: 10px;
    }
    .image-container {
      padding: 20px; /* Add padding to the image container */
    }
    .image-container img {
      height: 65vh; /* Set the height of the image to 50% of viewport height */
      width: 100%; /* Ensure the image width fills the container */
      object-fit: cover; /* Maintain aspect ratio and cover the container */
    }
    @media (max-width: 767px) {
      /* Adjust image height for smaller devices */
      .image-container img {
        height: 30vh; /* Set the height of the image to 30% of viewport height */
      }
    }
    
    /*career page css end*/
    
    /*horizontal tabs start*/
    
    .nav-tabs {
        background-color: #001055; /* White background for tabs */
        box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Shadow effect */
        border-radius: 8px; /* Rounded corners */
    }
    .nav-tabs .nav-item .nav-link {
        color: #ffffff; /* Dark blue text color */
        border: none; /* Remove borders */
        border-radius: 8px 8px 0 0; /* Rounded corners for top */
    }
    .nav-tabs .nav-item .nav-link.active {
        color: #ffffff; /* White text color for active tab */
        background-color: #FF7900; /* Dark blue background for active tab */
    }
    .tab-content {
        background-color: #ffffff; /* White background for tab content */
        box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Shadow effect */
        border-radius: 0 0 8px 8px; /* Rounded corners for bottom */
        padding: 20px; /* Add some padding */
        margin-top: -1px; /* Offset border-top of tab content */
    }
    
    /*horizontal tabs end*/
    
    
    
	</style>




</head>

<body class="stretched is-expanded-menu" data-menu-breakpoint="1200">

	<div class="preloader">
		<div class="loader"></div>
	</div>



<!--css for left section-->
<style>
    .left-section>ul>li:first-child{
        display:none;
    }
    @media screen and (max-width:480px)
    {
        .left-section>ul>li:first-child{
            display:block;
        }
    }
</style>


	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">
	

		<!-- Header Code Section Begin -->
		<header>
			<nav id="main--menubar">
				<!-- Left Section of header -->
				<div class="left-section">
					<div style="margin-top: 1rem;">
						<a href="index.php"><img src="./logo.png" alt=""></a>

					</div>

					<!-- Back button only activated in mobile view in under options -->
					<div id="menubar-back-button" style="display: none;">
						<i class="fa-solid fa-arrow-left"></i>
						<span id="back-button-text"></span>
					</div>


					<!-- First Menubar options -->
					<ul>
						<li style="margin-top: 3rem;" onclick="showMenuContent(0,this)">
							<h1 class="underline__effect">
								<i class="fas fa-user"></i>
								University Menu
							</h1>
						</li>
						<li style="margin-top: 3rem;" onclick="showMenuContent(1,this)">
							<h1 class="underline__effect">
								<i class="fas fa-user"></i>
								About Us
							</h1>
						</li>
						<li onclick="showMenuContent(2,this)">
							<h1 class="underline__effect">
								<i class="fas fa-graduation-cap"></i>
								Institution’s Innovation Council (IIC)
							</h1>
						</li>
						<li onclick="showMenuContent(3,this)">
							<h1 class="underline__effect">
								<i class="fas fa-book"></i>
								Successful Startup Story
							</h1>
						</li>
						<li onclick="showMenuContent(4,this)">
							<h1 class="underline__effect">
								<i class="fas fa-briefcase"></i>
								Contact Us
							</h1>
						</li>
						
					</ul>
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
				document.getElementById('menubar-back-button').style.display = 'none';
				customMainMenubar.classList.add('menubar-viewer');
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
						const response = await fetch('assets/json/iic_menubarData.json');
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

					const response = await fetch('assets/json/iic_menubarData.json');
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
					const response = await fetch('assets/json/iic_menubarData.json');
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
					const response = await fetch('assets/json/iic_menubarData.json');
					const data = await response.json();

					// Check if the submenu exists in the JSON
					if (data[value] && data[value][menu] && data[value][menu][subMenu]) {
						const courses = data[value][menu][subMenu];
						for (let course in courses) {
							if (courses[course].link) {
								htmlContent += `<li><a href="${courses[course].link}" class="additional-link">${course}</a><i class="fa-solid fa-caret-right"></i></li>`;
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

			// Function to reset Main Menubar
			function resetMainMenubar() {
				const ulElement = document.getElementById('main--menubar').querySelector('div>ul');
				ulElement.innerHTML = `
						<li style="margin-top: 3rem;" onclick="showMenuContent(0,this)"><h1 class="underline__effect ">
							<i class="fas fa-user"></i>
							University Menu</h1></li>
						<li style="margin-top: 3rem;" onclick="showMenuContent(1,this)"><h1 class="underline__effect">
							<i class="fas fa-user"></i>
							About Us</h1></li>
						<li onclick="showMenuContent(2,this)"><h1 class="underline__effect">
							<i class="fas fa-graduation-cap"></i>
							Institution’s Innovation Council (IIC)</h1></li>
						<li><h1 class="underline__effect">
							<i class="fas fa-book"></i>
							<a href="iic-successful-startup-story.php">Successful Startup Story</h1></li>
						<li><h1 class="underline__effect">
							<i class="fas fa-briefcase"></i>
							<a href="iic-contact.php">Contact Us</h1></li>
						
							
					`;
			}

			// function to show content of subMenus in mobile view
			async function openSubMenuContentMobile(value, menu) {

				try {

					// removing the options from menubar to insert submenucategories
					const ulBox = customMainMenubar.querySelector('.left-section > ul');
					ulBox.innerHTML = '';
					let htmlContent = '';

					const response = await fetch('assets/json/iic_menubarData.json');
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
					h1Element.parentElement.style.marginBottom = '5vh';
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
								li.style.marginBottom = '5vh';
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
					const response = await fetch('assets/json/iic_menubarData.json');
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
					const response = await fetch('assets/json/iic_menubarData.json');
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