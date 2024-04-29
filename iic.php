<?php
include 'head.php';
?>

<style>
	.big-card {
		width: 70vw;
		box-shadow: 2px 2px 10px 2px rgba(0, 0, 0, 0.3);
		height: auto;
		margin: auto;
		position: relative;
		padding-bottom: 50px;
	}

	.big-card-heading {
		width: 95%;
		height: 4rem;

		position: absolute;
		top: 0;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: #001055;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.big-card-heading p {
		color: white;
		margin-bottom: 0;
		font-size: 28px;
		text-transform: uppercase;
		font-weight: 500;
	}

	.big-card .min-text {
		color: #fe8d00;
		font-size: 12px;
		margin: 0;
		padding: 0;
		width: fit-content;
	}

	.big-card .main-text {
		font-size: 18px;
		text-align: justify;
	}

	.m-custom-card {
		height: 150px;
		box-shadow: 4px 4px 6px 1px rgba(0, 0, 0, 0.06);
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		/* background: linear-gradient(115deg, rgba(251, 215, 134, 0.3), rgba(198, 255, 221, 0.3)); */
		background-color: rgba(205, 205, 205, 0.2);
		/* border:1px solid rgba(0, 0, 0, 0.01);  */
		transition: 0.2s all;
	}

	.m-custom-card img {
		width: 20%;
	}

	.m-custom-card span {
		text-transform: uppercase;
		font-size: 12px;
		margin-top: 20px;
		width: fit-content;
		font-weight: 500;
		text-align: center;
	}

	.m-custom-card:hover {
		scale: 0.99;
		box-shadow: 1px 1px 3px 1px rgba(0, 0, 0, 0.05);
		cursor: pointer;
	}

	@media screen and (max-width:992px) {
		.big-card {
			width: 90vw;
		}
	}

	@media screen and (max-width:480px) {
		.big-card {
			width: 90vw;
		}

		.big-card-heading {
			width: 85%;
		}

		.big-card-heading p {
			font-size: 19px;
		}

		.big-card .main-text {
			font-size: 14px;
		}

		.m-custom-card span {
			font-size: 15px;
		}
	}
</style>


<style>
	.undernav-locator {
		font-size: 16px;
		margin-left: 25px;
	}
</style>

<!-- Content
		============================================= -->

<?php
include 'sidebar/iic_sidebar.php';
?>


<div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5">

	<div class="row mx-0">
		<h2 class=" text-center d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to <span>TMU IIC</span></h2>
		<h2 class=" text-center d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Welcome to <span>TMU IIC</span></h2>

		<p>
			Ministry of Education (MoE), Govt. of India has established ‘MoE’s Innovation Cell (MIC)’ to systematically foster the culture of Innovation amongst all Higher Education Institutions (HEIs). The primary mandate of MIC is to encourage, inspire and nurture young students by supporting them to work with new ideas and transform them into prototypes while they are in formative years.
		</p>
		<p>
			MIC has envisioned encouraging creation of ‘Institution’s Innovation Council (IICs)’ across selected HEIs. A network of these IICs will be established to promote innovation in the Institution through multitudinous modes leading to an innovation promotion eco-system in the campuses. <br>
		<h3 class="mb-2 pb-0"><b>Major focus of IIC</b> </h3>
		<ol class="m-ol-list ps-5">
			<li>To create a vibrant local innovation ecosystem.</li>
			<li>Start-up supporting mechanism in HEIs.</li>
			<li>Prepare institute for Atal Ranking of institutions on innovation achievements framework.</li>
			<li>Establish function ecosystem for scouting ideas and pre-incubation of ideas.</li>
			<li>Develop better cognitive ability for technology students.</li>
		</ol>

		<h3 class="mb-2 pb-0"><b>Functions of IICs</b> </h3>
		<ol class="m-ol-list ps-5">
			<li>To conduct various innovation and entrepreneurship-related activities prescribed by Central MIC in time bound fashion.</li>
			<li>Identify and reward innovations and share success stories.</li>
			<li>Organize periodic workshops/ seminars/ interactions with entrepreneurs, investors, professionals and create a mentor pool for student innovators.</li>
			<li>Network with peers and national entrepreneurship development organizations.</li>
			<li>Create an Institution’s Innovation portal to highlight innovative projects carried out by institution’s faculty and students.</li>
			<li>Organize Hackathons, idea competition, mini-challenges etc.</li>
		</ol>


		<div class="container">
			<div class="row px-2 px-md-0">
				<div class="col-12 col-md-3 py-4 py-md-2 px-3">
					<a href="https://www.tmu.ac.in/pdf/Innovation%20and%20Startup%20Policy%202019.pdf" target="_blank" style="color:rgba(0,0,0,0.9);">
						<div class="m-custom-card">
							<img src="https://cdn-icons-png.flaticon.com/128/5968/5968746.png" alt="">
							<span>Innovation and Startup policy</span>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-3 py-4 py-md-2 px-3">
					<a href="https://www.tmu.ac.in/pdf/research/innovation_fund.pdf" target="_blank" style="color:rgba(0,0,0,0.9);">
						<div class="m-custom-card">
							<img src="https://cdn-icons-png.flaticon.com/128/2991/2991109.png" alt="">
							<span>Vice Chancellor innovation fund </span>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-3 py-4 py-md-2 px-3">
					<a href="https://upgrade.tmu.ac.in/research_publication.php" target="_blank" style="color:rgba(0,0,0,0.9);">
						<div class="m-custom-card">
							<img src="https://cdn-icons-png.flaticon.com/128/6462/6462790.png" alt="">
							<span>Research publication</span>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-3 py-4 py-md-2 px-3">
					<a href="https://upgrade.tmu.ac.in/patent.php" target="_blank" style="color:rgba(0,0,0,0.9);">
						<div class="m-custom-card">
							<img src="https://cdn-icons-png.flaticon.com/128/2874/2874808.png" alt="">
							<span>patenting information</span>
						</div>
					</a>
				</div>
			</div>
		</div>

		<!-- Certificates section -->
		<div class="container">
			<h2 class=" text-center mt-5 mb-0 d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Certification <span>Gallery</span></h2>
			<h2 class=" text-center mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Certification <span>Gallery</span></h2>

			<div class="row d-none d-md-flex">
				<!-- <h2 class="mb-0">Certification Gallery</h2> -->

				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<img src="https://www.tmu.ac.in/img/tmu/iic_certificates/university_certificate.jpg" alt="">
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<img src="https://www.tmu.ac.in/img/tmu/iic_certificates/dr_aditya_sharma_certificate.jpg" alt="">
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<img src="https://www.tmu.ac.in/img/medical/iic_certificate_10.webp" alt="">
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<img src="https://www.tmu.ac.in/img/medical/iic_certificate_11.webp" alt="">
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<img src="https://www.tmu.ac.in/img/tmu/iic_certificates/dr_aditya_sharma_certificate.jpg" alt="">
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<img src="https://www.tmu.ac.in/img/tmu/iic_certificates/dr_manjula_jain_certificate.jpg" alt="">
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<img src="https://www.tmu.ac.in/img/tmu/iic_certificates/vivek_certicate.jpg" alt="">
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<img src="https://www.tmu.ac.in/img/tmu/iic_certificates/dr_geetanshu_dawar_certifcate.jpg" alt="">
				</div>
			</div>

			<div class="owl-carousel d-block d-md-none" id="owl-certificate">
				<div class="item"><img src="https://www.tmu.ac.in/img/tmu/iic_certificates/university_certificate.jpg" alt="Certificate"></div>
				<div class="item"><img src="https://www.tmu.ac.in/img/tmu/iic_certificates/dr_aditya_sharma_certificate.jpg" alt="Certificate"></div>
				<div class="item"><img src="https://www.tmu.ac.in/img/medical/iic_certificate_10.webp" alt="Certificate"></div>
				<div class="item"><img src="https://www.tmu.ac.in/img/medical/iic_certificate_11.webp" alt="Certificate"></div>
				<div class="item"><img src="https://www.tmu.ac.in/img/tmu/iic_certificates/dr_aditya_sharma_certificate.jpg" alt="Certificate"></div>
				<div class="item"><img src="https://www.tmu.ac.in/img/tmu/iic_certificates/dr_manjula_jain_certificate.jpg" alt="Certificate"></div>
				<div class="item"><img src="https://www.tmu.ac.in/img/tmu/iic_certificates/vivek_certicate.jpg" alt="Certificate"></div>
				<div class="item"><img src="https://www.tmu.ac.in/img/tmu/iic_certificates/dr_geetanshu_dawar_certifcate.jpg" alt="Certificate"></div>
			</div>

		</div>



		<!-- News Section -->
		<div class="section bg-transparent my-0 pt-2 pb-4 py-lg-5">
			<div class="container">

				<div class="row justify-content-between col-mb-50">
					<div class="col-lg-2 pb-0">
						<!-- <h4 class="color mb-2 fw-normal">Convocation <span style="color:#001055;">News</span></h4> -->
						<h2 class=" text-center mt-5 mb-0 d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">IIC <span>News</span></h2>
						<h2 class=" text-center mt-4 mb-3 pb-0 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">IIC <span>News</span></h2>

						<!-- <p class="font-primary fw-light text-black">Interactively seize bricks-and-clicks channels before empowered users.</p> -->
						<a href="/block-content-blog.html" class="button button-dark bg-dark bg-opacity-10 text-dark h-bg-color m-0 px-4 py-2 d-block mx-auto mx-md-1 d-none d-md-block">View all Posts</a>
					</div>

					<div class="col-lg-9">
						<div class="dotted-bg" style="--cnvs-dotted-opacity: .5; --cnvs-dotted-top: -10px; --cnvs-dotted-size: 150px; "></div>
						<div id="owl-demo" class="owl-carousel ">
							<div class="item entry mx-2">
								<div class="entry-image">
									<img src="https://www.tmu.ac.in/uploads/events/past_event/508_title_image.jpg" alt="...">
								</div>
								<div class="entry-meta mb-2 fw-normal">
									<ul>
										<li><a href="#">Feb 27, 2024</a></li>
									</ul>
								</div>
								<div class="entry-title title-sm mb-3">
									<h3 class="text-transform-none ls-0 fw-medium font-body"><a href="#">Guest Lecture on Cancer Prevention, Detection, and Management at TMU</a></h3>
								</div>
								<a href="https://www.tmu.ac.in/news/guest-lecture-on-cancer-prevention-detection-and-management-at-tmu" target="_blank " class="read-more stretched-link h-color h-op-08">Read More <i class="bi-arrow-up-right transform-ts"></i></a>
							</div>

							<div class="item entry mx-2">
								<div class="entry-image">
									<img src="https://www.tmu.ac.in/uploads/events/past_event/488_title_image.webp" alt="...">
								</div>
								<div class="entry-meta mb-2 fw-normal">
									<ul>
										<li><a href="#">Feb 21, 2024</a></li>
									</ul>
								</div>
								<div class="entry-title title-sm mb-3">
									<h3 class="text-transform-none ls-0 fw-medium font-body"><a href="#">Teerthanker Mahaveer University Launches Distance Education Programmes</a></h3>
								</div>
								<a href="https://www.tmu.ac.in/news/teerthanker-mahaveer-university-launches-distance-education-programmes" class="read-more stretched-link h-color h-op-08">Read More <i class="bi-arrow-up-right transform-ts"></i></a>
							</div>
							<div class="item entry mx-2">
								<div class="entry-image">
									<img src="https://www.tmu.ac.in/uploads/events/past_event/513_title_image.webp" alt="...">
								</div>
								<div class="entry-meta mb-2 fw-normal">
									<ul>
										<li><a href="#">Feb 03, 2024</a></li>
									</ul>
								</div>
								<div class="entry-title title-sm mb-3">
									<h3 class="text-transform-none ls-0 fw-medium font-body"><a href="#">Workshop on Integrating Nursing Theories into Clinical Practice</a></h3>
								</div>
								<a href="https://www.tmu.ac.in/news/workshop-on-integrating-nursing-theories-into-clinical-practice" target="_blank " class="read-more stretched-link h-color h-op-08">Read More <i class="bi-arrow-up-right transform-ts"></i></a>
							</div>
							<div class="item entry mx-2">
								<div class="entry-image">
									<img src="https://www.tmu.ac.in/uploads/events/past_event/479_title_image.jpg" alt="...">
								</div>
								<div class="entry-meta mb-2 fw-normal">
									<ul>
										<li><a href="#">Jan 24, 2024</a></li>
									</ul>
								</div>
								<div class="entry-title title-sm mb-3">
									<h3 class="text-transform-none ls-0 fw-medium font-body"><a href="#">National Conference Held at TMIMT College of Management</a></h3>
								</div>
								<a href="https://www.tmu.ac.in/news/national-conference-held-at-tmimt-college-of-management" class="read-more stretched-link h-color h-op-08">Read More <i class="bi-arrow-up-right transform-ts"></i></a>
							</div>
							<div class="item entry mx-2">
								<div class="entry-image">
									<img src="https://www.tmu.ac.in/uploads/events/past_event/497_title_image.webp" alt="...">
								</div>
								<div class="entry-meta mb-2 fw-normal">
									<ul>
										<li><a href="#">Feb 28, 2024</a></li>
									</ul>
								</div>
								<div class="entry-title title-sm mb-3">
									<h3 class="text-transform-none ls-0 fw-medium font-body"><a href="#">Guest Lecture on Cutting-Edge Instrumentation in Forensic Science</a></h3>
								</div>
								<a href="#" class="read-more stretched-link h-color h-op-08">Read More <i class="bi-arrow-up-right transform-ts"></i></a>
							</div>
						</div>

						<a href="https://www.tmu.ac.in/news/guest-lecture-on-cutting-edge-instrumentation-in-forensic-science" class="button d-block d-md-none button-dark bg-dark bg-opacity-10 text-dark h-bg-color m-0 px-4 py-2 d-block mx-auto mx-md-1 mt-4">View all Posts</a>

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



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

<?php
include 'footer.php';
?>