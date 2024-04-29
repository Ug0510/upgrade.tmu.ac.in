<?php
include './ccsit/head_ccsit.php';
?>
<div id="main-content">
<style>
	/* banner section css */

	.featured-slider-container {
		position: relative;
		width: 100%;
		max-width: 1600px;
		/* Maximum width for the slider */
		height: auto;
		overflow: hidden;
		margin: 0 auto;
	}

	.featured-slider {
		display: flex;
		transition: transform 0.5s ease;
	}

	.featured-slide {
		flex: 0 0 100%;
	}

	.featured-slide img {
		width: 100%;
		height: auto;
		object-fit: cover;
	}

	.featured-arrow {
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

	.featured-arrow:hover {
		background-color: rgba(255, 255, 255, 0.8);
	}

	.featured-arrow-prev {
		left: 10px;
	}

	.featured-arrow-next {
		right: 10px;
	}

	@media (max-width: 768px) {
		.featured-arrow {
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
</style>


<link rel="stylesheet" href="./assets/css/swiper2.css">

<!-- CSS for programs offered  -->
<style>
	#myTabs {
		background-color: white;
		border: 1px solid #001055;
		border-radius: 10px;
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0;
	}

	#myTabs .nav-link {
		background-color: white;
		color: black;
	}

	#myTabs .nav-link {
		color: #FF7A00;
	}

	.tab-content.second {
		border: 1px solid #001055;
	}

	#myTabs .nav-link.active {
		background-color: #0010551e;
		color: #001055;
	}

	.tab-content.second h2 {
		color: #001055;
		font-weight: 700;
	}

	@media screen and (max-width:480px) {
		.tab-content.second h2 {
			font-size: 18px;
			margin-left: -20px;
		}
	}
</style>


<style>
	.tab-main-content {
		border-radius: 20px;
		box-shadow: 4xp 4px 8px 3px black;
	}

	.tab-main-content>h2 {
		font-weight: 700;
		color: #FF7A00;
	}

	.side-tablayout .card {
		color: #FF7A00;
	}

	.side-tablayout .card h5 {
		font-weight: 700 !important;
	}

	.side-tablayout .card h5 i {
		margin-right: 7px;
	}

	.side-tablayout .card.active {
		background-color: #FF7A001e;
		color: #001055;
	}

	.side-tablayout .card span {
		/* font-size: 14px !important; */
		font-weight: 700;
		color: #FF7A00;
	}

	.side-tablayout .card.active span {

		color: #001055 !important;
	}

	#selected-content {
		border-radius: 20px;
		box-shadow: 4xp 4px 8px 3px black;
	}

	@media screen and (max-width:480px) {
		.card h5 {
			font-weight: 500 !important;
		}

		.card span {
			/* font-size: 14px !important; */
			font-weight: 500;
		}
	}
</style>


<div class="featured-slider-container" onmouseover="stopAuto()" onmouseout="startAuto()">
	<button class="featured-arrow featured-arrow-prev" onclick="prevSlide()">←</button>
	<div class="featured-slider">
		<div class="featured-slide"><img src="assets/img/banner/111.webp" alt="Image 1"></div>
		<div class="featured-slide"><img src="assets/img/banner/111.webp" alt="Image 1"></div>
	</div>
	<button class="featured-arrow featured-arrow-next" onclick="nextSlide()">→</button>
</div>

<!-----Upper card start-->
<section id="content" class="d-none d-sm-block" style="margin-top: 1rem; margin-bottom: 22px;">
	<div class="content-wrap pb-0 pt-3">
		<div class="row justify-content-center g-3 me-5 ms-5">
			<div class="col-md-12 ">
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="card l-bg-cherry">
							<div class="card-statistic-3 p-4">
								<div class="card-icon card-icon-large"><i class="fa fa-id-card fa-5x" style="padding-right:10px; padding-top:7px;"></i></div>
								<div class="mb-4">
									<strong class="card-strong-text">400+</strong>
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
								<div class="card-icon card-icon-large"><i class="fa fa-search fa-5x" style="padding-right:10px; padding-top:10px;"></i></div>
								<div class="mb-4">
									<strong class="card-strong-text">82%</strong>
									<div class="card-text">Placement in 2022-23
									</div>
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
								<div class="card-icon card-icon-large"><i class="fa fa-building fa-5x" style="padding-right:10px; padding-top:10px;"></i></div>
								<div class="mb-4">
									<strong class="card-strong-text">62 LPA</strong>
									<div class="card-text">Highest Placement</div>
								</div>
								<!-- <div class="row align-items-center mb-2 d-flex">
										<div class="col-8">
											<h2 class="d-flex align-items-center mb-0">
												<a href="#" class="btn btn-success">Colleges</a>
											</h2>
										</div>

									</div> -->

							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="card l-bg-orange-dark">
							<div class="card-statistic-3 p-4">
								<div class="card-icon card-icon-large"><i class="fa fa-graduation-cap fa-5x" style="padding-right:10px; padding-top:7px;"></i>
								</div>
								<div class="mb-4">
									<strong class="card-strong-text">25000+</strong>
									<div class="card-text">World Wide Alumni</div>
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


<!-----Upper card start mobile-->
<section id="content" class="d-block d-sm-none">
	<div class="row justify-content-center ">
		<div class="col-md-12 ">
			<div class="row ">
				<div class="owl-carousel" id="owl-carousel1">
					<div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="card l-bg-cherry">
							<div class="card-statistic-3 p-4">
								<div class="card-icon card-icon-large"><i class="fa fa-id-card fa-7x" style="padding-right:10px; padding-top:7px;"></i></div>
								<div class="mb-4">
									<strong style="font-size: 40px; color: #424242;">400+</strong>
									<div class="card-text" style="font-size: 14px;">Visited Companies
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="card l-bg-blue-dark">
							<div class="card-statistic-3 p-4">
								<div class="card-icon card-icon-large"><i class="fa fa-search fa-7x" style="padding-right:10px; padding-top:10px;"></i></div>
								<div class="mb-4">
									<strong style="font-size: 40px; color: #424242;">82%</strong>
									<div class="card-text" style="font-size: 14px;">Placement in 2022-23
									</div>
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
								<div class="card-icon card-icon-large"><i class="fa fa-building fa-7x" style="padding-right:10px; padding-top:10px;"></i></div>
								<div class="mb-4">
									<strong style="font-size: 40px; color: #424242;">60 LPA</strong>
									<div class="card-text" style="font-size: 14px;">Highest Placement
									</div>
								</div>
								<!-- <div class="row align-items-center mb-2 d-flex">
										<div class="col-8">
											<h2 class="d-flex align-items-center mb-0">
												<a href="#" class="btn btn-success">Colleges</a>
											</h2>
										</div>

									</div> -->

							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="card l-bg-orange-dark">
							<div class="card-statistic-3 p-4">
								<div class="card-icon card-icon-large"><i class="fa fa-graduation-cap fa-7x" style="padding-right:10px; padding-top:7px;"></i>
								</div>
								<div class="mb-4">
									<strong style="font-size: 40px; color: #424242;">25K+</strong>
									<div class="card-text" style="font-size: 14px;">World Wide Alumni
									</div>
								</div>
								<!-- <div class="row align-items-center mb-2 d-flex">
										<div class="col-8">
											<h2 class="d-flex align-items-center mb-0">
												<a href="#" class="btn btn-success">Scholership</a>
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
</section>
<!-----Upper card mobile End-->

<!-----Upper card start-->
<section id="content" class="d-block d-sm-none">
	<div class="content-wrap pb-0 pt-3">
		<div class="row justify-content-center g-3 mb-3 me-5 ms-5">
			<div class="col-md-12 ">
				<div class="row ">
					<div class="owl-carousel">
						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="card l-bg-cherry">
								<div class="card-statistic-3 p-4">
									<div class="card-icon card-icon-large"><i class="fa fa-id-card fa-7x" style="padding-right:10px; padding-top:7px;"></i></div>
									<div class="mb-4">
										<strong style="font-size: 40px; color: #001055;">400+</strong>
										<div class="card-text">Visited Companies</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="card l-bg-blue-dark">
								<div class="card-statistic-3 p-4">
									<div class="card-icon card-icon-large"><i class="fa fa-search fa-7x" style="padding-right:10px; padding-top:10px;"></i></div>
									<div class="mb-4">
										<strong style="font-size: 40px; color: #001055;">82%</strong>
										<div class="card-text">Placement in 2022-23</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="card l-bg-green-dark">
								<div class="card-statistic-3 p-4">
									<div class="card-icon card-icon-large"><i class="fa fa-building fa-7x" style="padding-right:10px; padding-top:10px;"></i></div>
									<div class="mb-4">
										<strong style="font-size: 40px; color: #001055;">62 LPA</strong>
										<div class="card-text">Highest Placement</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="card l-bg-orange-dark">
								<div class="card-statistic-3 p-4">
									<div class="card-icon card-icon-large"><i class="fa fa-graduation-cap fa-7x" style="padding-right:10px; padding-top:7px;"></i>
									</div>
									<div class="mb-4">
										<strong style="font-size: 40px; color: #001055;">25000+</strong>
										<div class="card-text">World Wide Alumni</div>
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


<div class="box-container">
	<div class="box">
		<h2 Class="h2-line" style="font-weight: 800;">Welcome to the College of Computing Sciences & IT</h2>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 col-sm-10">
				<p style="text-align: justify;">The College of Computing Sciences & IT established in 2014 (formerly
					known as the Department of Computer Applications, established in 2001),is a leading private
					computing sciences college in UP. <br>With a strong emphasis on emerging technologies such as
					Artificial Intelligence (AI), Machine Learning (ML), and Deep Learning (DL), the college equips
					students with the in-demand skills to thrive in the rapidly evolving IT industry.
					Beyond technical expertise, the CCS&IT also fosters an entrepreneurial mindset, nurturing the next
					generation of innovators and visionaries.<br>
					</p>
					<a href="#" class="button button-3d button-medium button rounded-pill button-blue d-block mx-auto" style="margin-top: 20px; width:fit-content">Know More!</a>
				
			</div>
			<div class="col-md-1"></div>

		</div>
	</div>
</div>

<div class="container my-5">
			<ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button" role="tab" aria-controls="Tab1" aria-selected="true"><i class="fas fa-lightbulb"></i> Key Highlights</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button" role="tab" aria-controls="Tab2" aria-selected="false"><i class="fas fa-briefcase"></i> Placement</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button" role="tab" aria-controls="Tab3" aria-selected="false"><i class="fas fa-book"></i> Curriculum</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab4" type="button" role="tab" aria-controls="Tab4" aria-selected="false"><i class="fas fa-building"></i> Infrastructure</button>
				</li>
			</ul>
			<div class="tab-content second ps-5 px-md-5" id="myTabContent">
				<div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
					<h2>Key Highlights</h2>
					<ul class="m-ol-list ps-4">
						<li>The only management college in the region with IACBE membership, an international accreditation body.</li>
						<li>The college offers a wide range of specializations in BBA / B. Com/ MBA including Block Chain Technology, Marketing, Logistics and Supply Chain Management, International Business, Human Resources, Finance, Financial Market, Cyber Security, Agricultural Management, Hospital Management, etc.</li>
						<li>Dedicated Incubation and Entrepreneurship Cell with a focus on establishing an innovation and entrepreneurship-based ecosystem that will help in converting ideas into sustainable start-ups.</li>
						<li>Domestic and international extrusions tours for better national and global connections</li>
						<li>Regular mentoring and counseling sessions by trained industry professionals.</li>
						<li>Implementation of NEP-2020 through a vigorous academic environment supported by various FDPs, MOOCs, Workshops, Conferences, Industry Competitions, Guest Talks, and Seminars.</li>
						<li>The college has been consistently rated high in Business School surveys and has been conferred with numerous awards and honors.</li>
					</ul>
					<p>All these factors make Teerthanker Mahaveer Institute of Management and Technology (TMIMT), the best management college in Uttar Pradesh, India.</p>
				</div>
				<div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
					<h2>Placement/Internship</h2>
					<p>The college has established strong ties with national and international institutions, allowing students to gain valuable work experience through internships and co-op programs. Additionally, the college provides robust job placement assistance and career counseling services to help students secure rewarding employment opportunities.
						<br><br>
						A remarkable 93% of eligible TMIMTians have been successfully placed with top multinational corporations (MNCs), a testament to the quality of education and training they receive at our institution and 35% of our graduating students have received multiple job offers. This outstanding accomplishment highlights the exceptional caliber of education and training at TMIMT College of Management.
						<br><br>
						We are dedicated to nurturing our students' potential and providing them with the tools they need to succeed in their professional journeys. With a focus on academic excellence and industry relevance, TMIMT College of Management continues to shape the leaders of tomorrow and empower them for successful and fulfilling careers.
					</p>
				</div>
				<div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
					<h2>Curriculum</h2>
					<p>The curriculum of this top management college is thoughtfully designed as per the National Education Policy (NEP 2020) to impart a well-rounded education that equips students with the knowledge and skills necessary to excel in the dynamic business world. The curriculum is continuously updated to stay relevant and in sync with the latest industry trends.
						<br><br>
						Through a mix of theoretical learning and practical applications, students gain a comprehensive understanding of business dynamics, problem-solving abilities, and effective decision-making skills. Moreover, our curriculum emphasizes the importance of experiential learning, case studies, industry projects, and internships, ensuring that students are well-prepared to tackle real-world challenges and adapt to the ever-evolving industry landscape.
					</p>
				</div>
				<div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
					<h2>Infrastructure</h2>
					<p>TMIMT College of Management provides modern infrastructure and state-of-the-art facilities, including well-equipped classrooms, projectors, computer labs, and dedicated spaces for group discussions and collaborations. These facilities create an optimal learning environment and help in enhancing the overall educational experience for students.
						<br><br>
						Additionally, the college is a hub of multifaceted academic research, thus equipping students with crucial research skills. It has a library with the latest world-class books, journals, periodicals, newspapers, and a digital library for academic excellence in the domain.
					</p>
				</div>
			</div>
		</div>

<!------VIDEO TESTIMONIALS START------->
<section id="content">
	<div class="content-wrap py-0" style="margin-top: 23px; margin-bottom: 37px;">

		<div class="col-xl-12 col-lg-10 text-center d-none d-sm-block">
			<h3 class="h1 fw-bold" style="font-size: 48px; font-weight: 600; line-height: 64px; color:#000000; margin-bottom: 22px;">
				SUCCESS STORIES</h3>
		</div>
		<div class="col-xl-12 col-lg-10 text-center d-block d-sm-none">
			<h3 class="h1 fw-bold" style="font-size: 30px; font-weight: 600; line-height: 40px; color:#000000; margin-bottom: 18px;">
				SUCCESS STORIES</h3>
		</div>

		<div class="owl-carousel" id="owl-carousel4">
			<div class="item">
				<div class="card shadow-sm ">
					<!-- <div class="card-img-top ratio-16x9" >
														<iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													</div> -->
					<a href="#block-modal-ticket1" data-lightbox="inline"><img src="video-testimonial/1.svg" class="card-img-top" alt="..."></a>
					<div class="card-body">
						<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
						<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
						<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt="" class="img-fluid career-tran__arrow"></center>
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
									<!-- <iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe> -->
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
					<a href="#block-modal-ticket2" data-lightbox="inline"><img src="video-testimonial/2.svg" class="card-img-top" alt="..."></a>
					<div class="card-body">
						<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
						<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
						<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt="" class="img-fluid career-tran__arrow"></center>
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
									<!-- <iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe> -->
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
					<a href="#block-modal-ticket3" data-lightbox="inline"><img src="video-testimonial/3.svg" class="card-img-top" alt="..."></a>
					<div class="card-body">
						<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
						<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
						<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt="" class="img-fluid career-tran__arrow"></center>
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
									<!-- <iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe> -->
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
					<a href="#block-modal-ticket4" data-lightbox="inline"><img src="video-testimonial/4.svg" class="card-img-top" alt="..."></a>
					<div class="card-body">
						<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
						<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
						<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt="" class="img-fluid career-tran__arrow"></center>
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
									<!-- <iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe> -->
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
					<a href="#block-modal-ticket5" data-lightbox="inline"><img src="video-testimonial/5.svg" class="card-img-top" alt="..."></a>
					<div class="card-body">
						<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
						<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
						<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt="" class="img-fluid career-tran__arrow"></center>
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
									<!-- <iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe> -->
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
					<a href="#block-modal-ticket5" data-lightbox="inline"><img src="video-testimonial/5.svg" class="card-img-top" alt="..."></a>
					<div class="card-body">
						<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
						<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
						<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt="" class="img-fluid career-tran__arrow"></center>
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
									<!-- <iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe> -->
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
					<a href="#block-modal-ticket5" data-lightbox="inline"><img src="video-testimonial/5.svg" class="card-img-top" alt="..."></a>
					<div class="card-body">
						<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
						<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
						<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt="" class="img-fluid career-tran__arrow"></center>
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
									<!-- <iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe> -->
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
</section><!-- #content end -->




<!-----City in Itself Start-->
<section id="content">
	<div class="content-wrap py-0" style="background-color: #001055;">

		<div class="container-fluid py-md-5">
			<div class="row pt-5">
				<div class="col-md-3">
					<div class="d-none d-sm-block">
						<!-- <span>discover</span> -->
						<h1 style="color:white;font-size: 3.5rem; font-weight: 600; text-align:left;"><span style="color: #FF7A00;">Tech-Enhanced</span> Learning</h1>
						<!-- <p></p>
                <p></p> -->
						<!-- <a href="#">Explore More</a> -->
					</div>
					<div class="d-block d-sm-none">
						<!-- <span>discover</span> -->
						<p style="text-align: center; color:white; font-size:1.8rem;"><span style="color: #FF7A00;">Tech-Enhanced</span> Learning</span>
							<!-- <a href="#">Explore More</a> -->
					</div>
				</div>
				<div class="col-md-9">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="https://www.tmu.ac.in/monaco/assets/image/infra/9.webp" alt="Slide 1"></div>
							<div class="swiper-slide"><img src="https://www.tmu.ac.in/monaco/assets/image/infra/2.webp" alt="Slide 3"></div>

							<div class="swiper-slide"><img src="https://www.tmu.ac.in/monaco/assets/image/infra/4.webp" alt="Slide 4"></div>

							<div class="swiper-slide"><img src="https://www.tmu.ac.in/monaco/assets/image/infra/5.webp" alt="Slide 5"></div>

							<div class="swiper-slide"><img src="https://www.tmu.ac.in/monaco/assets/image/infra/6.webp" alt="Slide 6"></div>

							<div class="swiper-slide"><img src="https://www.tmu.ac.in/monaco/assets/image/infra/7.webp" alt="Slide 7"></div>

						</div>
						<!-- Add pagination -->
						<div class="swiper-pagination"></div>
						<!-- Add navigation buttons -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
			</div>
		</div>



	</div>
</section>
<!-----City in Itself End-->


<!-----Courses section Start-->
<section id="content" class="prog-bm" style="margin-top: 22px; ">
	<div class="content-wrap py-0">
		<!-- Code for the Desktop view -->
		<div class="container d-none d-sm-block">

			<div class="col-xl-12 col-lg-10 text-center">
				<h1 class="h1 fw-bold" style="font-size: 48px; font-weight: 600; line-height: 64px; color:#000000; margin-bottom: 23px;">
					Discover Your Future with Our Programmes</h1>
			</div>

			<div class="row ">
				<div class="col-md-3">
					<div class="list-group" id="list-tab" role="tablist">
						<a class="pgroup list-group-item listream list-group-item-action rounded-3 shadow-sm active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home"><i class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;Computer
							Science
							&nbsp;&nbsp;<span class="badge rounded-pill">14</span>
						</a>
						<a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;Engineering
							&nbsp;&nbsp;<span class="badge rounded-pill">10</span></a>
						<a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages"><i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;Management
							&nbsp;&nbsp;<span class="badge rounded-pill">12</span></a>
						<a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings"><i class="fa-solid fa-scale-unbalanced fa-sm fakash"></i>&nbsp;Law
							&nbsp;&nbsp;<span class="badge rounded-pill">05</span></a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="tab-content" id="nav-tabContent">

						<!-- Home Tab starts here -->
						<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

							<div class="row">

								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm ">
										<img src="images/stock_images/ccsit/2.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Data Science)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="images/stock_images/ccsit/1.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info11 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Artificial Intelligence)
											</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="images/stock_images/ccsit/3.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Cyber Security)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


							</div>

							<div class="row">

								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="images/stock_images/ccsit/4.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Data Science)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="images/stock_images/ccsit/5.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Artificial Intelligence)
											</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="images/stock_images/ccsit/6.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Cyber Security)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


							</div>


						</div>

						<!-- Home Tab  Ends  here -->


						<!--  Home tab panel 2 Starts Here  --
								       ----------------------------- -->
						<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

							<div class="row">

								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVjaGFuaWNhbHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" height="178px" class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Mechanical Engineering</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm progcard">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/program/mit-data-science-machine-learning-program.jpg" height="178px" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Mtech (Machine learning & Computer Sciences)
											</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/security-plus-bootcamp.png" height="178px" class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Cyber Security)</h4>

										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


							</div>

						</div>
						<!-- 
									/////Home tab 2 Ends Here/////
								 -->

						<!-- 
									/////Home tab 3 Starts Here/////
								 -->

						<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">

							<div class="row">

								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/page-banners/home/great-learning-career-academy.png" height="178px" class="card-img-top" alt="Management  image ">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BBA International Business & Entrepreneurship
												(Collab with UR Services)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm progcard">
										<img src="https://images.pexels.com/photos/286565/pexels-photo-286565.jpeg?auto=compress&cs=tinysrgb&w=1600" height="178px" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BBA (Marketing, HR, IB, Finance)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="https://images.pexels.com/photos/286565/pexels-photo-286565.jpeg?auto=compress&cs=tinysrgb&w=1600" height="178px">
										<div class="card-body progcardbody">
											<span height="178px" class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">MBA Handicraft Export Management (Collab with EPCH)
											</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


							</div>

						</div>

						<!-- 
									/////Home tab 3 Ends Here/////
										 -->

						<!-- 
											/////Home tab 4 Starts Here/////
								 	-->

						<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">

							<div class="row">

								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="https://images.pexels.com/photos/5668772/pexels-photo-5668772.jpeg?auto=compress&cs=tinysrgb&w=1600" height="178px" class="card-img-top" alt="Law image ">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BA - LLB (Hons.)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm progcard">
										<img src="https://thumbs.dreamstime.com/b/compliance-rules-law-regulation-policy-business-technology-concept-compliance-rules-law-regulation-policy-business-technology-112471593.jpg?w=768" height="178px" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BBA - LLB (Hons.)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="https://img.freepik.com/free-photo/judges-gavel-book-wooden-table-law-justice-concept-background_1150-9097.jpg?size=626&ext=jpg&ga=GA1.2.718553843.1681214208&semt=ais" height="178px">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">LLM</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</div>


							</div>

						</div>

						<!-- 
									/////Home tab 4 Ends Here/////
								 -->
					</div>
				</div>
			</div>

		</div>

		<!-- Code for the Desktop view Ends -->


		<!-- Code for the Mobile View Starts Here -->
		<div class="container d-block d-sm-none">


			<div class="col-xl-12 col-lg-10 text-center">
				<h1 class="h1 fw-bold" style="font-size: 30px; font-weight: 600; line-height: 40px; color:#000000; margin-bottom: 19px;">
					Programmes Offered</h1>
			</div>


			<div class="accordion" id="accordionPanelsStayOpenExample">
				<div class="accordion-item">
					<h2 class="accordion-header" id="panelsStayOpen-headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
							<i class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;&nbsp;Undergraduate Programmes
						</button>
					</h2>
					<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
						<div class="accordion-body ">





							<ul class="progul">
								<li class="progli">
									<div class="card shadow-sm progcard">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/page-banners/home/great-learning-career-academy.png" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h5 class="mb-2">Btech Computer Science (Data Science)</h5>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</li>


								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/program/NCAI-program.png" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Artificial Intelligence)
											</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>

								</li>



								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/security-plus-bootcamp.png" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Cyber Security)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>

								</li>

							</ul>

						</div>
					</div>
				</div>

				<!-- -------------   Accordian 2 sarts here -------------
									       -------------------------      -------------------------  -->
				<div class="accordion-item">
					<h2 class="accordion-header" id="panelsStayOpen-headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false">
							<i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;&nbsp;Postgraduate Programmes</button>
					</h2>
					<div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
						<div class="accordion-body">


							<ul class="progul">
								<li class="progli">
									<div class="card shadow-sm progcard">
										<img src="https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVjaGFuaWNhbHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" height="178px" class="card-img-top" alt="Engineering image ">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Mechanical Engineering</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</li>


								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/program/applications-of-ai-domestic.jpeg" height="178px" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Mtech (Machine learning & Computer Sciences)
											</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>

								</li>



								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://e1.pxfuel.com/desktop-wallpaper/775/611/desktop-wallpaper-ece-study-materials-and-projects-ebooks-campus-preparations-ece-engineering-thumbnail.jpg" height="178px">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer & Communication Engineering</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>

								</li>

							</ul>
						</div>
					</div>
				</div>


				<!-- -------------   Accordian 2 Ends here -------------
									       -------------------------      -------------------------  -->



				<!-- -------------   Accordian 3 sarts here -------------
							-------------------------      -------------------------  -->
				<div class="accordion-item">
					<h2 class="accordion-header" id="panelsStayOpen-headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false">
							<i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;&nbsp;Doctrate Programmes</button>
					</h2>
					<div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
						<div class="accordion-body">

							<ul class="progul">
								<li class="progli">
									<div class="card shadow-sm progcard">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/page-banners/home/great-learning-career-academy.png" height="178px" class="card-img-top" alt="Management  image ">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BBA International Business & Entrepreneurship
												(Collab with UR Services)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</li>


								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://images.pexels.com/photos/286565/pexels-photo-286565.jpeg?auto=compress&cs=tinysrgb&w=1600" height="178px" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BBA (Marketing, HR, IB, Finance)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>

								</li>



								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://images.pexels.com/photos/286565/pexels-photo-286565.jpeg?auto=compress&cs=tinysrgb&w=1600" height="178px">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">MBA Handicraft Export Management (Collab with EPCH)
											</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>

								</li>

							</ul>

						</div>
					</div>
				</div>

				<!-- -------------   Accordian 3 Ends here -------------
							-------------------------      -------------------------  -->

				<!-- -------------   Accordian 4 Starts here -------------
							-------------------------      -------------------------  -->
				<div class="accordion-item">
					<h2 class="accordion-header" id="panelsStayOpen-headingFour">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false">
							<i class="fa-solid fa-scale-unbalanced fa-sm fakash"></i>&nbsp;Law
						</button>
					</h2>
					<div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
						<div class="accordion-body">

							<ul class="progul">
								<li class="progli">
									<div class="card shadow-sm progcard">
										<img src="https://images.pexels.com/photos/5668772/pexels-photo-5668772.jpeg?auto=compress&cs=tinysrgb&w=1600" height="178px" class="card-img-top" alt="Law image ">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BA - LLB (Hons.)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</li>


								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://thumbs.dreamstime.com/b/compliance-rules-law-regulation-policy-business-technology-concept-compliance-rules-law-regulation-policy-business-technology-112471593.jpg?w=768" height="178px" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BBA - LLB (Hons.)</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>

								</li>



								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://img.freepik.com/free-photo/judges-gavel-book-wooden-table-law-justice-concept-background_1150-9097.jpg?size=626&ext=jpg&ga=GA1.2.718553843.1681214208&semt=ais" height="178px">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">LLM</h4>
										</div>
										<div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>

								</li>

							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- -------------   Accordian 4 Ends here -------------
							-------------------------      -------------------------  -->

		<!-- Code for the Mobile View Ends Here -->

	</div>
</section>
<!-----Courses section Start-->


<section id="content">
    <div class="content-wrap" style="background-color: #001055; ">
        <div class="container" style="margin-bottom: 17px;">


            <div class="row justify-content-center ">
                <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
                    <h2 class="h1 fw-bold" style="font-size: 48px; font-weight: 600; line-height: 64px; color:#FF7A00; margin-bottom: 22px;">
                        TMU <span style="color: #FFFFFF;">HIGHLIGHTS</span></h2>

                </div>
                <div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
                    <h2 class="h1 fw-bold" style="font-size: 30px; font-weight: 600; line-height: 64px; color:#FF7A00; margin-bottom: 9px; margin-top: -12px;">
                        TMU <span style="color: #FFFFFF;">HIGHLIGHTS</span></h2>

                </div>
            </div>


            <div class="row col-mb-37">
                <main class="postcontent col-lg-8 col-md-9">
                    <div class="row g-4">


                        <div class=" mb-0 entry col-lg-12 col-md-12">
                            <div class="owl-carousel" id="owl-carousel2">
                                <div class="item">

                                    <div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
                                        <div class="entry-image mb-0">
                                            <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-1.jpg" data-lightbox="gallery-item" style="background: url('images/news/ccsit/News_02.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
                                                        </div>
                                                        <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-2.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                        <!--</div>-->
                                                        <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-3.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="entry-title">
                                                <a herf="https://www.tmu.ac.in/news/mega-campus-placement-week-at-teerthanker-mahaveer-university" style="font-size: 18px; font-weight: 500; ">Mega Campus Placement Week at Teerthanker Mahaveer University</a>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><i class="uil uil-schedule"></i> 21st March 2024</li>
                                                    <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 10</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">

                                    <div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
                                        <div class="entry-image mb-0">
                                            <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-1.jpg" data-lightbox="gallery-item" style="background: url('images/news/ccsit/News_03.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
                                                        </div>
                                                        <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-2.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                        <!--</div>-->
                                                        <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-3.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="entry-title">
                                                <a herf="" style="font-size: 18px; font-weight: 500; ">TMU's Faculty of
                                                    Education Marks 24th Vijay Diwas.</a>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                                    <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 13</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="item">

                                    <div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
                                        <div class="entry-image mb-0">
                                            <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-1.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-1.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
                                                        </div>
                                                        <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-2.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                        <!--</div>-->
                                                        <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-3.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="entry-title">
                                                <a herf="" style="font-size: 18px; font-weight: 500; ">CTLD's Faculty
                                                    Development Programme Empowers Educators</a>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                                    <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 13</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Carousel Starts Here -->

                    <div class="row g-4 mb-0 d-none d-sm-block">

                        <div class="owl-carousel" id="owl-carousel3">
                            <div class="item">

                                <article class="mb-0 entry event col-12 ">
                                    <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
                                        <div class="col-md-4 mb-md-0">
                                            <a href="#" class="entry-image mb-0 h-100">
                                                <img src="images/blogs/CCSIT_03.webp" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                                                <div class="bg-overlay">
                                                    <div class="bg-overlay-content justify-content-start align-items-start">
                                                        <div class="badge bg-light text-dark rounded-pill">
                                                            Latest Blog</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-8 p-4">
                                            <div class="entry-meta no-separator mb-1 mt-0">
                                                <ul>
                                                    <li><a href="#" class="text-uppercase fw-medium">Sat, Feb 03</a></li>
                                                </ul>
                                            </div>

                                            <div class="entry-title nott">
                                                <a herf="https://www.tmu.ac.in/blog/best-civil-engineering-colleges-in-india" style="font-size: 18px; font-weight: 500; ">Best Civil Engineering Colleges in India</a>
                                            </div>
                                            <div class="entry-content my-3">
                                                <p style="font-size: 14px;">In today's fast-paced world, the demand for skilled civil engineers is on the rise. If you are aspiring to pursue a career in civil engineering [....]
                                                </p>
                                            </div>

                                            <div class="entry-meta no-separator">
                                                <ul>
                                                    <li><a href="#" class="fw-normal"><i class="uil uil-map-marker"></i>
                                                            TMU Moradabad</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>


                            <div class="item">

                                <article class="mb-0 entry event col-12 ">
                                    <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
                                        <div class="col-md-4 mb-md-0">
                                            <a href="#" class="entry-image mb-0 h-100">
                                                <img src="images/blogs/CCSIT_02.webp" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                                                <div class="bg-overlay">
                                                    <div class="bg-overlay-content justify-content-start align-items-start">
                                                        <div class="badge bg-light text-dark rounded-pill">
                                                            Latest Blog</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-8 p-4">
                                            <div class="entry-meta no-separator mb-1 mt-0">
                                                <ul>
                                                    <li><a href="#" class="text-uppercase fw-medium">Fri, Mar 01</a></li>
                                                </ul>
                                            </div>

                                            <div class="entry-title nott">
                                                <a herf="https://www.tmu.ac.in/blog/best-mechanical-engineering-colleges-in-india" style="font-size: 18px; font-weight: 500; ">Best Mechanical Engineering Colleges in India</a>
                                            </div>
                                            <div class="entry-content my-3">
                                                <p style="font-size: 14px;">Choosing the right mechanical engineering college is a pivotal decision that shapes a student's future. In India, where opportunities [...]</p>
                                            </div>

                                            <div class="entry-meta no-separator">
                                                <ul>
                                                    <li><a href="#" class="fw-normal"><i class="uil uil-map-marker"></i>
                                                           TMU Moradabad</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>



                            <div class="item">

                                <article class="mb-0 entry event col-12 ">
                                    <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
                                        <div class="col-md-4 mb-md-0">
                                            <a href="#" class="entry-image mb-0 h-100">
                                                <img src="images/blogs/CCSIT_01.webp" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                                                <div class="bg-overlay">
                                                    <div class="bg-overlay-content justify-content-start align-items-start">
                                                        <div class="badge bg-light text-dark rounded-pill">
                                                            Latest Blog</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-8 p-4">
                                            <div class="entry-meta no-separator mb-1 mt-0">
                                                <ul>
                                                    <li><a href="#" class="text-uppercase fw-medium">Mon, Feb 12</a></li>
                                                </ul>
                                            </div>

                                            <div class="entry-title nott">
                                                <a herf="" style="font-size: 18px; font-weight: 500; ">How to Build a Successful Career in IT with an MCA </a>
                                            </div>
                                            <div class="entry-content my-3">
                                                <p style="font-size: 14px;">With the ever-increasing demand for technology and the rise of digital transformation, there are man [...] </p>
                                            </div>

                                            <div class="entry-meta no-separator">
                                                <ul>
                                                    <li><a href="#" class="fw-normal"><i class="uil uil-map-marker"></i>
                                                            Chiang Mai,
                                                            Thailand</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>


                        </div>
                    </div>
                    <!-- 
														Blog Carousel Starts Here
														-->
                </main>
                <!-- 
												Side Menu Code start here
											 -->


                <aside class="sidebar col-md-12 d-block d-sm-none" style="margin-bottom: 35px;">
                    <div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">

                        <div class="widget">

                            <h4>Latest Blogs</h4>
                            <hr>
                            <div class="posts-sm row col-mb-30" id="post-list-sidebar" style="margin-top: -0.25rem;">



                                <div class="entry col-12">
                                    <div class="grid-inner row g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/events/thumbs/3.jpg" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>10th July 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="entry col-12">
                                    <div class="grid-inner row g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/events/thumbs/1.jpg" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>10th July 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry col-12">
                                    <div class="grid-inner row g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/events/thumbs/1.jpg" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>10th July 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="entry col-12">
                                    <div class="grid-inner row g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/events/thumbs/2.jpg" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>10th July 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="entry col-12">
                                    <div class="grid-inner row g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/events/thumbs/3.jpg" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>10th July 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="entry col-12">
                                    <div class="grid-inner row g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/events/thumbs/1.jpg" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>10th July 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                </aside>


                <aside class="sidebar col-lg-4 col-md-12">
                    <div class="notice-board">
                        <div class="notice-header">NOTICE BOARD</div>
                        <div class="notice-body">
                            
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>01, April</span>
                                </div>
                                <div class="notice-content">
                                    <p>The Women Empowerment Cell, Faculty of Engineering, and CCSIT are going to organise International Women's Day</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="assets/img/icons/placeholder.svg" width="20px" height="20px">
                                        LT-2, CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 09,
                                        March</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>01, April</span>
                                </div>
                                <div class="notice-content">
                                    <p>The Department of Mechanical Engineering is hosting a one-day workshop on "Drone Technology" in association with ESTC Ramnagar.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="assets/img/icons/placeholder.svg" width="20px" height="20px">
                                        LT-2, CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 15,
                                        March</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>01, April</span>
                                </div>
                                <div class="notice-content">
                                    <p>The Computer Science and Engineering Department is organising a Digital/Physical Poster Competition on the topic "Mera Pehla Vote-Desh ke liye</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="assets/img/icons/placeholder.svg" width="20px" height="20px">
                                        CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 21, March</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>01, April</span>
                                </div>
                                <div class="notice-content">
                                    <p>The Cultural Club of CCSIT is organisng a student fest for Holi, "SPLASH-The Joy of Colors".</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="assets/img/icons/placeholder.svg" width="20px" height="20px">
                                        CCSIT Compound and LT-2</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 20, March</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>01, April</span>
                                </div>
                                <div class="notice-content">
                                    <p>Students may register for the 14th edition of Mega Quiz Khoj-2024 which is being organised by the Techno Club (CCSIT).</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="assets/img/icons/placeholder.svg" width="20px" height="20px">
                                        LT-3, CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 14, March</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>01, April</span>
                                </div>
                                <div class="notice-content">
                                    <p>The Department of Physics is going to organise National Science Day with various activities and competitions</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="assets/img/icons/placeholder.svg" width="20px" height="20px">
                                        LT-2, CCSIT </span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 28, February</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>01, April</span>
                                </div>
                                <div class="notice-content">
                                    <p>The Electronics and Communication Engineering Department is organising a Guest Lecture on "Process of Innovation & Technology Readiness Level".</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="assets/img/icons/placeholder.svg" width="20px" height="20px">
                                        LT-2,CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 24, February</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <!--<div class="notice">-->
                            <!--    <div class="notice-pub">-->
                            <!--        <span>01, April</span>-->
                            <!--    </div>-->
                            <!--    <div class="notice-content">-->
                            <!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros eget nunc-->
                            <!--            tincidunt vestibulum.</p>-->
                            <!--    </div>-->
                            <!--    <div class="notice-meta">-->
                            <!--        <span style="margin-right: 15px;"><img src="assets/img/icons/placeholder.svg" width="20px" height="20px">-->
                            <!--            Conference Room</span>-->
                            <!--        <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 5,-->
                            <!--            April</span>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<hr class="notice-separator">-->
                            <!--<div class="notice">-->
                            <!--    <div class="notice-pub">-->
                            <!--        <span>01, April</span>-->
                            <!--    </div>-->
                            <!--    <div class="notice-content">-->
                            <!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros eget nunc-->
                            <!--            tincidunt vestibulum.</p>-->
                            <!--    </div>-->
                            <!--    <div class="notice-meta">-->
                            <!--        <span>01, April</span>-->
                            <!--        <span><img src="assets/img/icons/placeholder.svg" width="15px" height="15px"> Conference Room</span>-->
                            <!--        <span><img src="assets/img/icons/calendar.svg" width="15px" height="15px"> 5, April</span>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!-- Add more notices here -->
                        </div>
                    </div>
                </aside>
            </div>
            <!-- 
												Side Menu Code Ends Here
											 -->


        </div>
    </div>
</section><!-- #content end -->

<!-- marqueee starts here  -->
<div class="col-xl-12 col-lg-10 text-center">
	<h3 class="h1 fw-bold mb-3">Our Eminent Recruiters</h3>
</div>

<div class="marquee">
	<section class="marquee-content">
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Forbes.svg?v=1593719066" alt="Forbes"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Inc.svg?v=1593719066" alt="Inc"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Nat_Geo.svg?v=1593719066" alt="Nat Geo"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Red_Cross.svg?v=1593719066" alt="Red Cross"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066" alt="Discovery Channel"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/REI.svg?v=1593719066" alt="REI"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Fortune.svg?v=1593719066" alt="Fortune"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066" alt="Discovery Channel"></a>
		</div>
	</section>
	<section class="marquee-content">
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Forbes.svg?v=1593719066" alt="Forbes"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Inc.svg?v=1593719066" alt="Inc"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Nat_Geo.svg?v=1593719066" alt="Nat Geo"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Red_Cross.svg?v=1593719066" alt="Red Cross"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066" alt="Discovery Channel"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/REI.svg?v=1593719066" alt="REI"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Fortune.svg?v=1593719066" alt="Fortune"></a>
		</div>
		<div class="marquee-block">
			<a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066" alt="Discovery Channel"></a>
		</div>
	</section>
</div>
<!-- marquee Ends here  -->

<div class="container mb-5 mt-5">
	<h2 Class="h2-line" style="font-weight: 800;">FAQ</h2>
	<hr class="horizontal-line">

	<button class="careers-accordion">What undergraduate programmes are offered by the College of Computing Science and IT?<span class="icon">+</span></button>
	<div class="panel">
		<p>The College provides diverse programmes, including B.Tech and M.Tech in CSE, B.Sc, BCA, and MCA, aimed at building a strong foundation in computing, software development, and IT.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">

	<button class="careers-accordion">What facilities are available for computing science and IT students?<span class="icon">+</span></button>
	<div class="panel">
		<p>The College provides computing and IT students with advanced computing labs, high-configuration IT labs, and interactive classrooms. Facilities extend to on-campus hostels, diverse IT clubs, and regular tech events, workshops, and notable conferences, including IEEE SMART and ICAC.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">What career opportunities are available to graduates of the college?<span class="icon">+</span></button>
	<div class="panel">
		<p>Graduates of the college have a wide range of career opportunities available to them, including roles in software development, cybersecurity, data analysis, artificial intelligence, and more. TMU graduates get placement opportunities in leading tech companies, startups, government agencies, and research institutions.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">How does the College support students in securing internships and placements?<span class="icon">+</span></button>
	<div class="panel">
		<p>The College has a dedicated Corporate Resource Centre that works closely with students and industry partners to facilitate internships and placement opportunities. Regular workshops on resume writing, interview skills, and job search strategies are conducted to prepare students for their professional careers.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">Are there opportunities for international students to study at the college?<span class="icon">+</span></button>
	<div class="panel">
		<p>Yes, the College welcomes applications from international students and offers various programmes and services to support their academic and personal success. International students are encouraged to reach out to the college's admissions office for more information on the application process and available resources.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
</div>

<script>
	let currentIndex = 0;
	const slides = document.querySelectorAll('.featured-slide');
	const totalSlides = slides.length;
	let autoSlideInterval;

	function showSlide(index) {
		if (index < 0) {
			index = totalSlides - 1;
		} else if (index >= totalSlides) {
			index = 0;
		}
		const offset = -index * 100;
		document.querySelector('.featured-slider').style.transform = `translateX(${offset}%)`;
		currentIndex = index;
	}

	function nextSlide() {
		showSlide(currentIndex + 1);
	}

	function prevSlide() {
		showSlide(currentIndex - 1);
	}

	function startAuto() {
		autoSlideInterval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
	}

	function stopAuto() {
		clearInterval(autoSlideInterval);
	}

	startAuto();



	//   career accordian
	var acc = document.getElementsByClassName("careers-accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			var panel = this.nextElementSibling;
			if (panel.style.display === "block") {
				panel.style.display = "none";
				this.querySelector(".icon").innerHTML = "+";
				this.classList.remove("clicked"); // Remove clicked class when closing
			} else {
				// Close all other panels
				var allPanels = document.querySelectorAll('.panel');
				for (var j = 0; j < allPanels.length; j++) {
					allPanels[j].style.display = 'none';
					var accordion = allPanels[j].previousElementSibling;
					accordion.querySelector(".icon").innerHTML = "+";
					accordion.classList.remove("clicked"); // Remove clicked class from other accordions
				}
				panel.style.display = "block";
				this.querySelector(".icon").innerHTML = "-";
				this.classList.add("clicked"); // Add clicked class when opening
			}
		});
	}
</script>

<?php
include 'footer.php';
?>