<?php
 include 'head.php';
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .media-card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            height: 200px; /* Set a fixed height */
            overflow: hidden; /* Hide overflow content */
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative; /* Needed for absolute positioning */
        }

        .media-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        .media-card-header {
            background-color: #FF7900;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            font-weight:500;
        }

        .media-card-body {
            padding: 20px;
        }

        .media-source {
            font-size: 14px;
            color: #555;
        }

        .media-news-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .media-read-more {
            position: absolute;
            bottom: 20px;
            right: 20px; /* Align button to the right */
            text-align: center;
        }

        .media-read-more button {
            background-color: #001055;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .media-read-more button a{
            text-transform:none;
            color:#fff;
        }

        .media-read-more button:hover {
            background-color: #FF7900;
            color:#fff;
        }

        .media-thumb {
            width: 100px;
            height: auto;
            float: left;
            margin-right: 20px;
            border-radius: 5px;
        }

        .media-text {
            overflow: hidden;
        }

         
    </style>

<body>

<!-- Page Title
		============================================= -->
		<section class="page-title page-title-parallax parallax dark page-title-center include-header position-relative bg-overlay-tmu" style="padding: 30px 0 30px;">
			<div class="container">
				<div class="page-title-row">

					<div class="page-title-content">
						<h1 class="text-uppercase">Media Coverage</h1>
					</div>

				</div>
			</div>
		</section><!-- .page-title end -->


<section id="content">
<div class="container mt-4">
<div class="row">
    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="media-card">
            <div class="media-card-header">Feb, 2024</div>
            <div class="media-card-body">
                <img src="https://www.tmu.ac.in//img/media_coverage/gravitas-2.jpg" alt="Thumbnail" class="media-thumb">
                <div class="media-text">
                    <p class="media-source mb-0">Himalyakishakti</p>
                    <p class="media-news-name">तीर्थंकर महावीर यूनिवर्सिटी मुरादाबाद का रंग बिरंगी आतिशबाजी मशाल के संग मार्च पास्ट के बीच पवेलियन में भव्य शुभारंभ हुआर जताई खुशी</p>
                </div>
                <div class="media-read-more">
                    <button><a href="https://himalyakishakti.com/tirthankar-mahavir-university-moradabad-was-inaugurated-grandly-in-the-pavilion-amidst-march-past-with-colorful-fireworks-and-torches/">Read More</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="media-card">
            <div class="media-card-header">Feb, 2024</div>
            <div class="media-card-body">
                <img src="https://www.tmu.ac.in//img/media_coverage/ignities.jpg" alt="Thumbnail" class="media-thumb">
                <div class="media-text">
                    <p class="media-source mb-0">Ravivar Delhi</p>
                    <p class="media-news-name">टीएमयू एजुकेशन की इग्नाइट्स में हुनर का जलवा</p>
                </div>
                <div class="media-read-more">
                    <button><a href="https://ravivardelhi.com/tmu-educations-ignite-showcases-talent/">Read More</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="media-card">
            <div class="media-card-header">Feb, 2024</div>
            <div class="media-card-body">
                <img src="https://www.tmu.ac.in//img/media_coverage/road-safety.jpg" alt="Thumbnail" class="media-thumb">
                <div class="media-text">
                    <p class="media-source mb-0">Samarsaleel</p>
                    <p class="media-news-name">कर्मयोग के संदेश संग सड़क सुरक्षा के प्रति किया जागरूकंजीवनी की मानिंद</p>
                </div>
                <div class="media-read-more">
                    <button><a href="https://samarsaleel.com/made-aware-about-road-safety-with-the-message-of-karmayoga/383626">Read More</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="media-card">
            <div class="media-card-header">Feb, 2024</div>
            <div class="media-card-body">
                <img src="https://www.tmu.ac.in//img/media_coverage/mahaveerji.jpg" alt="Thumbnail" class="media-thumb">
                <div class="media-text">
                    <p class="media-source mb-0">Himalyakishakti</p>
                    <p class="media-news-name">भगवान महावीर के सिद्धांतों को बढ़ाने मैं टीएमओअग्रणीर जताई खुशी</p>
                </div>
                <div class="media-read-more">
                    <button><a href="https://himalyakishakti.com/tmo-leader-in-promoting-the-principles-of-lord-mahavir/">Read More</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="media-card">
            <div class="media-card-header">Feb, 2024</div>
            <div class="media-card-body">
                <img src="https://www.tmu.ac.in//img/media_coverage/max-hospital.jpg" alt="Thumbnail" class="media-thumb">
                <div class="media-text">
                    <p class="media-source mb-0">Careers360</p>
                    <p class="media-news-name">74 NURSING STUDENTS OF TEERTHANKER MAHAVEER UNIVERSITY GET JOB OFFERS FROM MAX HOSPITAL</p>
                </div>
                <div class="media-read-more">
                    <button><a href="https://news.careers360.com/74-nursing-students-of-teerthanker-mahaveer-university-get-job-offers-from-max-hospital">Read More</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="media-card">
            <div class="media-card-header">Feb, 2024</div>
            <div class="media-card-body">
                <img src="https://www.tmu.ac.in//img/media_coverage/shodh-cover.jpg" alt="Thumbnail" class="media-thumb">
                <div class="media-text">
                    <p class="media-source mb-0">Ravivar Delhi</p>
                    <p class="media-news-name">उत्तर प्रदेशराज्य शोध डेटा में सांख्यिकी विश्लेषण संजीवनी की मानिंद</p>
                </div>
                <div class="media-read-more">
                    <button><a href="https://ravivardelhi.com/statistical-analysis-is-like-a-lifesaver-in-research-data/">Read More</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="media-card">
            <div class="media-card-header">Feb, 2024</div>
            <div class="media-card-body">
                <img src="https://www.tmu.ac.in//img/media_coverage/unnayan.jpg" alt="Thumbnail" class="media-thumb">
                <div class="media-text">
                    <p class="media-source mb-0">Ravivar Delhi</p>
                    <p class="media-news-name">टीएमयू फार्मेसी की उन्नयन में बिखरा हुनर का जादूमिलने पर जताई खुशी</p>
                </div>
                <div class="media-read-more">
                    <button><a href="https://ravivardelhi.com/the-magic-of-talent-spread-in-the-upgrade-of-tmu-pharmacy/">Read More</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="media-card">
            <div class="media-card-header">Jan, 2024</div>
            <div class="media-card-body">
                <img src="https://www.tmu.ac.in//img/media_coverage/inivitation-2024.jpg" alt="Thumbnail" class="media-thumb">
                <div class="media-text">
                    <p class="media-source mb-0">ABP Live</p>
                    <p class="media-news-name">RAM MANDIR OPENING: टीएमयू के चांसलर सुरेश जैन को मिला रामलला की प्राण प्रतिष्ठा का निमंत्रण, न्योता मिलने पर जताई खुशी</p>
                </div>
                <div class="media-read-more">
                    <button><a href="https://www.abplive.com/states/up-uk/ayodhya-ram-mandir-inauguration-tmu-chancellor-suresh-jain-in-moradabad-also-got-ramlala-pran-pratistha-invitation-ann-2578353">Read More</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="media-card">
            <div class="media-card-header">Jan, 2024</div>
            <div class="media-card-body">
                <img src="https://www.tmu.ac.in//img/media_coverage/IPR_Workshop.jpg" alt="Thumbnail" class="media-thumb">
                <div class="media-text">
                    <p class="media-source mb-0">Shiksha</p>
                    <p class="media-news-name">TEERTHANKER MAHAVEER UNIVERSITY SECURES 45TH RANK IN TOP PRIVATE UNIVERSITIES IN INDIA</p>
                </div>
                <div class="media-read-more">
                    <button><a href="https://www.shiksha.com/university/teerthanker-mahaveer-university-moradabad-38056/news-articles">Read More</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="media-card">
            <div class="media-card-header">Jan, 2024</div>
            <div class="media-card-body">
                <img src="https://www.tmu.ac.in//img/media_coverage/Lord_Ram's_called_Chancellor.jpg" alt="Thumbnail" class="media-thumb">
                <div class="media-text">
                    <p class="media-source mb-0">Khabar Partal</p>
                    <p class="media-news-name">अयोध्या धाम मुझे भगवान श्रीराम ने बुलाया है: कुलाधिपति</p>
                </div>
                <div class="media-read-more">
                    <button><a href="https://khabarpartal.com/religious/ayodhya-dham-lord-shri-ram-has-called-me-chancellor/">Read More</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="media-card">
            <div class="media-card-header">Jan, 2024</div>
            <div class="media-card-body">
                <img src="https://www.tmu.ac.in//img/media_coverage/Jain_Samaj.jpg" alt="Thumbnail" class="media-thumb">
                <div class="media-text">
                    <p class="media-source mb-0">ABP Live</p>
                    <p class="media-news-name">टीएमयू के कुलाधिपति का जैन समाज आज करेगा अभिनंदन</p>
                </div>
                <div class="media-read-more">
                    <button><a href="https://ravivardelhi.com/jain-community-will-felicitate-tmu-chancellor-today/">Read More</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="media-card">
            <div class="media-card-header">Jan, 2024</div>
            <div class="media-card-body">
                <img src="https://www.tmu.ac.in//img/media_coverage/inivitation-2024.jpg" alt="Thumbnail" class="media-thumb">
                <div class="media-text">
                    <p class="media-source mb-0">ABP Live</p>
                    <p class="media-news-name">NIRF 2023 RANKINGS: TOP RESEARCH INSTITUTES IN INDIA ANNOUNCED</p>
                </div>
                <div class="media-read-more">
                    <button><a href="https://bnnbreaking.com/world/india/nirf-2023-rankings-top-research-institutes-in-india-announced/">Read More</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add more media cards here -->
</div>
</div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</section>


<?php 
include "footer.php";
?>



    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Coverage</title>



