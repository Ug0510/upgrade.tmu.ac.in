<?php
 include 'head.php';
?>

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
								<div class="card-icon card-icon-large"><i class="fa fa-id-card fa-5x"
										style="padding-right:10px; padding-top:7px;"></i></div>
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
								<div class="card-icon card-icon-large"><i class="fa fa-search fa-5x"
										style="padding-right:10px; padding-top:10px;"></i></div>
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
								<div class="card-icon card-icon-large"><i class="fa fa-building fa-5x"
										style="padding-right:10px; padding-top:10px;"></i></div>
								<div class="mb-4">
									<strong class="card-strong-text">62 LPA</strong>
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
								<div class="card-icon card-icon-large"><i class="fa fa-graduation-cap fa-5x"
										style="padding-right:10px; padding-top:7px;"></i>
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
								<div class="card-icon card-icon-large"><i class="fa fa-id-card fa-7x"
										style="padding-right:10px; padding-top:7px;"></i></div>
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
								<div class="card-icon card-icon-large"><i class="fa fa-search fa-7x"
										style="padding-right:10px; padding-top:10px;"></i></div>
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
								<div class="card-icon card-icon-large"><i class="fa fa-building fa-7x"
										style="padding-right:10px; padding-top:10px;"></i></div>
								<div class="mb-4">
									<strong style="font-size: 40px; color: #424242;">60 LPA</strong>
									<div class="card-text" style="font-size: 14px;">Highest Placement
									</div>
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
								<div class="card-icon card-icon-large"><i class="fa fa-graduation-cap fa-7x"
										style="padding-right:10px; padding-top:7px;"></i>
								</div>
								<div class="mb-4">
									<strong style="font-size: 40px; color: #424242;">25K+</strong>
									<div class="card-text" style="font-size: 14px;">World Wide Alumni
									</div>
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
									<div class="card-icon card-icon-large"><i class="fa fa-id-card fa-7x"
											style="padding-right:10px; padding-top:7px;"></i></div>
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
									<div class="card-icon card-icon-large"><i class="fa fa-search fa-7x"
											style="padding-right:10px; padding-top:10px;"></i></div>
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
									<div class="card-icon card-icon-large"><i class="fa fa-building fa-7x"
											style="padding-right:10px; padding-top:10px;"></i></div>
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
									<div class="card-icon card-icon-large"><i class="fa fa-graduation-cap fa-7x"
											style="padding-right:10px; padding-top:7px;"></i>
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
		<h2 Class="h2-line" style="font-weight: 800;">Welcome to College of Agriculture Sciences</h2>
		<div class="row">
		    <div class="col-md-1"></div>
			<div class="col-md-10 col-sm-10" >
				<p style="text-align: justify;">The College of Agriculture Sciences established in 2014, stands as a beacon of sustainable practices, student empowerment, and pioneering research in the realm of agriculture. Our unwavering commitment to excellence has positioned us as the top private agricultural college in Uttar Pradesh. Guided by the recommendations of the Vth Deans Committee of the Indian Council of Agricultural Research (ICAR), we have meticulously crafted a curriculum comprising each aspect of Agriculture. It is with great pride that we proclaim our accreditation by ICAR, which is a mark of quality and excellence in the field of agricultural education.<br>
					<a href="#" class="button button-3d button-medium button rounded-pill button-blue" style="margin-top: 20px;">Know More!</a>
				</p>
			</div>
			<div class="col-md-1"></div>

		</div>
	</div>
</div>

<!------VIDEO TESTIMONIALS START------->
<section id="content">
	<div class="content-wrap py-0" style="margin-top: 23px; margin-bottom: 37px;">

		<div class="col-xl-12 col-lg-10 text-center d-none d-sm-block">
			<h3 class="h1 fw-bold"
				style="font-size: 48px; font-weight: 600; line-height: 64px; color:#000000; margin-bottom: 22px;">
				SUCCESS STORIES</h3>
		</div>
		<div class="col-xl-12 col-lg-10 text-center d-block d-sm-none">
			<h3 class="h1 fw-bold"
				style="font-size: 30px; font-weight: 600; line-height: 40px; color:#000000; margin-bottom: 18px;">
				SUCCESS STORIES</h3>
		</div>

		<div class="owl-carousel" id="owl-carousel4">
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
		<main1>
			<div class="d-none d-sm-block">
				<!-- <span>discover</span> -->
				<p style="color: #FF7900;">Tech-</P>
				<p>Enhanced</p>
				<p>Learning</p>
				<!-- <a href="#">Explore More</a> -->
			</div>
			<div class="d-block d-sm-none">
				<!-- <span>discover</span> -->
				<p style="text-align: center;"><span style="color: #FF7900; font-size: 30px;">TMU</span> A CITY IN
					ITSELF</span>
					<!-- <a href="#">Explore More</a> -->
			</div>
			<div class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide swiper-slide--one">

						<div>
							<a href="#" class="button button-border button-circle button-amber"><i
									class="fa-solid fa-check"></i>Amber</a>
						</div>
					</div>
					<div class="swiper-slide swiper-slide--two">

						<div>
							<a href="#" target="_blank">explore</a>
						</div>
					</div>
					<div class="swiper-slide swiper-slide--three">
						<div>
							<a href="#" target="_blank">explore</a>
						</div>
					</div>

					<div class="swiper-slide swiper-slide--four">

						<div>
							<a href="#" target="_blank">explore</a>
						</div>
					</div>

					<div class="swiper-slide swiper-slide--seven">

						<div>
							<a href="#" target="_blank">explore</a>
						</div>
					</div>
					<div class="swiper-slide swiper-slide--six">

						<div>
							<a href="#" target="_blank">explore</a>
						</div>
					</div>

					<div class="swiper-slide swiper-slide--five">

						<div>
							<a href="#" target="_blank">explore</a>
						</div>
					</div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
			</main>
	</div>
</section>

<!-----City in Itself End-->
<!-----Courses section Start-->
<section id="content" class="prog-bm" style="margin-top: 22px; ">
	<div class="content-wrap py-0">
		<!-- Code for the Desktop view -->
		<div class="container d-none d-sm-block">

			<div class="col-xl-12 col-lg-10 text-center">
				<h1 class="h1 fw-bold"
					style="font-size: 48px; font-weight: 600; line-height: 64px; color:#000000; margin-bottom: 23px;">
					Discover Your Future with Our Programmes</h1>
			</div>

			<div class="row ">
				<div class="col-md-3">
					<div class="list-group" id="list-tab" role="tablist">
						<a class="pgroup list-group-item listream list-group-item-action rounded-3 shadow-sm active"
							id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab"
							aria-controls="list-home"><i class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;Computer
							Science
							&nbsp;&nbsp;<span class="badge rounded-pill">14</span>
						</a>
						<a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2"
							id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab"
							aria-controls="list-profile"><i
								class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;Engineering
							&nbsp;&nbsp;<span class="badge rounded-pill">10</span></a>
						<a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2"
							id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab"
							aria-controls="list-messages"><i
								class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;Management
							&nbsp;&nbsp;<span class="badge rounded-pill">12</span></a>
						<a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2"
							id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab"
							aria-controls="list-settings"><i
								class="fa-solid fa-scale-unbalanced fa-sm fakash"></i>&nbsp;Law
							&nbsp;&nbsp;<span class="badge rounded-pill">05</span></a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="tab-content" id="nav-tabContent">

						<!-- Home Tab starts here -->
						<div class="tab-pane fade show active" id="list-home" role="tabpanel"
							aria-labelledby="list-home-list">

							<div class="row">

								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm ">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/page-banners/home/great-learning-career-academy.png"
											class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Data Science)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/program/NCAI-program.png"
											class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info11 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Artificial Intelligence)
											</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/security-plus-bootcamp.png"
											class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Cyber Security)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/page-banners/home/great-learning-career-academy.png"
											class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Data Science)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/program/NCAI-program.png"
											class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Artificial Intelligence)
											</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/security-plus-bootcamp.png"
											class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Cyber Security)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
						<div class="tab-pane fade" id="list-profile" role="tabpanel"
							aria-labelledby="list-profile-list">

							<div class="row">

								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVjaGFuaWNhbHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"
											height="178px" class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Mechanical Engineering</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/program/mit-data-science-machine-learning-program.jpg"
											height="178px" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Mtech (Machine learning & Computer Sciences)
											</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/security-plus-bootcamp.png"
											height="178px" class="card-img-top" alt="...">
										<div class="card-body">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Cyber Security)</h4>

										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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

						<div class="tab-pane fade" id="list-messages" role="tabpanel"
							aria-labelledby="list-messages-list">

							<div class="row">

								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/page-banners/home/great-learning-career-academy.png"
											height="178px" class="card-img-top" alt="Management  image ">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BBA International Business & Entrepreneurship
												(Collab with UR Services)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
										<img src="https://images.pexels.com/photos/286565/pexels-photo-286565.jpeg?auto=compress&cs=tinysrgb&w=1600"
											height="178px" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BBA (Marketing, HR, IB, Finance)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
										<img src="https://images.pexels.com/photos/286565/pexels-photo-286565.jpeg?auto=compress&cs=tinysrgb&w=1600"
											height="178px">
										<div class="card-body progcardbody">
											<span height="178px"
												class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">MBA Handicraft Export Management (Collab with EPCH)
											</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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

						<div class="tab-pane fade" id="list-settings" role="tabpanel"
							aria-labelledby="list-settings-list">

							<div class="row">

								<div class="col-md-4">
									<!-- Card -->
									<div class="card shadow-sm">
										<img src="https://images.pexels.com/photos/5668772/pexels-photo-5668772.jpeg?auto=compress&cs=tinysrgb&w=1600"
											height="178px" class="card-img-top" alt="Law image ">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BA - LLB (Hons.)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
										<img src="https://thumbs.dreamstime.com/b/compliance-rules-law-regulation-policy-business-technology-concept-compliance-rules-law-regulation-policy-business-technology-112471593.jpg?w=768"
											height="178px" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BBA - LLB (Hons.)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
										<img src="https://img.freepik.com/free-photo/judges-gavel-book-wooden-table-law-justice-concept-background_1150-9097.jpg?size=626&ext=jpg&ga=GA1.2.718553843.1681214208&semt=ais"
											height="178px">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">LLM</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
				<h1 class="h1 fw-bold"
					style="font-size: 30px; font-weight: 600; line-height: 40px; color:#000000; margin-bottom: 19px;">
					Programmes Offered</h1>
			</div>


			<div class="accordion" id="accordionPanelsStayOpenExample">
				<div class="accordion-item">
					<h2 class="accordion-header" id="panelsStayOpen-headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
							aria-controls="panelsStayOpen-collapseOne">
							<i class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;&nbsp;Computer Science
						</button>
					</h2>
					<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
						aria-labelledby="panelsStayOpen-headingOne">
						<div class="accordion-body ">





							<ul class="progul">
								<li class="progli">
									<div class="card shadow-sm progcard">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/page-banners/home/great-learning-career-academy.png"
											class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h5 class="mb-2">Btech Computer Science (Data Science)</h5>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</li>


								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/program/NCAI-program.png"
											class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Artificial Intelligence)
											</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>

								</li>



								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/security-plus-bootcamp.png"
											class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer Science (Cyber Security)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
							data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false">
							<i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;&nbsp;Engineering</button>
					</h2>
					<div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
						aria-labelledby="panelsStayOpen-headingTwo">
						<div class="accordion-body">


							<ul class="progul">
								<li class="progli">
									<div class="card shadow-sm progcard">
										<img src="https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVjaGFuaWNhbHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"
											height="178px" class="card-img-top" alt="Engineering image ">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Mechanical Engineering</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</li>


								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/program/applications-of-ai-domestic.jpeg"
											height="178px" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Mtech (Machine learning & Computer Sciences)
											</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>

								</li>



								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://e1.pxfuel.com/desktop-wallpaper/775/611/desktop-wallpaper-ece-study-materials-and-projects-ebooks-campus-preparations-ece-engineering-thumbnail.jpg"
											height="178px">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">Btech Computer & Communication Engineering</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
							data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false">
							<i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;&nbsp;Management</button>
					</h2>
					<div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
						aria-labelledby="panelsStayOpen-headingThree">
						<div class="accordion-body">

							<ul class="progul">
								<li class="progli">
									<div class="card shadow-sm progcard">
										<img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/page-banners/home/great-learning-career-academy.png"
											height="178px" class="card-img-top" alt="Management  image ">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BBA International Business & Entrepreneurship
												(Collab with UR Services)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</li>


								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://images.pexels.com/photos/286565/pexels-photo-286565.jpeg?auto=compress&cs=tinysrgb&w=1600"
											height="178px" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BBA (Marketing, HR, IB, Finance)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>

								</li>



								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://images.pexels.com/photos/286565/pexels-photo-286565.jpeg?auto=compress&cs=tinysrgb&w=1600"
											height="178px">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">MBA Handicraft Export Management (Collab with EPCH)
											</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
							data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false">
							<i class="fa-solid fa-scale-unbalanced fa-sm fakash"></i>&nbsp;Law
						</button>
					</h2>
					<div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
						aria-labelledby="panelsStayOpen-headingFour">
						<div class="accordion-body">

							<ul class="progul">
								<li class="progli">
									<div class="card shadow-sm progcard">
										<img src="https://images.pexels.com/photos/5668772/pexels-photo-5668772.jpeg?auto=compress&cs=tinysrgb&w=1600"
											height="178px" class="card-img-top" alt="Law image ">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BA - LLB (Hons.)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>
								</li>


								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://thumbs.dreamstime.com/b/compliance-rules-law-regulation-policy-business-technology-concept-compliance-rules-law-regulation-policy-business-technology-112471593.jpg?w=768"
											height="178px" class="card-img-top" alt="...">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">BBA - LLB (Hons.)</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
											<div>
											</div>
											<a href="#" class="button button-black rounded-pill m-0">View
												More</a>
										</div>
									</div>

								</li>



								<li class="progli">

									<div class="card shadow-sm progcard">
										<img src="https://img.freepik.com/free-photo/judges-gavel-book-wooden-table-law-justice-concept-background_1150-9097.jpg?size=626&ext=jpg&ga=GA1.2.718553843.1681214208&semt=ais"
											height="178px">
										<div class="card-body progcardbody">
											<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
											<h4 class="mb-2">LLM</h4>
										</div>
										<div
											class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
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
					<h2 class="h1 fw-bold"
						style="font-size: 48px; font-weight: 600; line-height: 64px; color:#FF7900; margin-bottom: 22px;">
						TMU <span style="color: #FFFFFF;">HIGHLIGHTS</span></h2>

				</div>
				<div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
					<h2 class="h1 fw-bold"
						style="font-size: 30px; font-weight: 600; line-height: 64px; color:#FF7900; margin-bottom: 9px; margin-top: -12px;">
						TMU <span style="color: #FFFFFF;">HIGHLIGHTS</span></h2>

				</div>
			</div>


			<div class="row col-mb-37">
				<main class="postcontent col-lg-9 col-md-9">
					<div class="row g-4">


						<div class=" mb-0 entry col-lg-12 col-md-12">
							<div class="owl-carousel" id="owl-carousel2">
								<div class="item">

									<div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
										<div class="entry-image mb-0">
											<div class="fslider" data-arrows="false" data-lightbox="gallery">
												<div class="flexslider">
													<div class="slider-wrap">
														<div class="slide"><a
																href="demos/modern-blog/images/items/lightbox/4-1.jpg"
																data-lightbox="gallery-item"
																style="background: url('demos/modern-blog/images/items/4-1.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
														</div>
														<div class="slide"><a
																href="demos/modern-blog/images/items/lightbox/4-2.jpg"
																data-lightbox="gallery-item"
																style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
														</div>
														<div class="slide"><a
																href="demos/modern-blog/images/items/lightbox/4-3.jpg"
																data-lightbox="gallery-item"
																style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-2">
											<div class="entry-title">
												<a herf="" style="font-size: 18px; font-weight: 500; ">TMU's Educational
													Odyssey to Narora Atomic Power Station</a>
											</div>
											<div class="entry-meta">
												<ul>
													<li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
													<li><a href="blog-single.html#comments"><i
																class="uil uil-comments-alt"></i> 13</a></li>
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
														<div class="slide"><a
																href="demos/modern-blog/images/items/lightbox/4-1.jpg"
																data-lightbox="gallery-item"
																style="background: url('demos/modern-blog/images/items/4-1.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
														</div>
														<div class="slide"><a
																href="demos/modern-blog/images/items/lightbox/4-2.jpg"
																data-lightbox="gallery-item"
																style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
														</div>
														<div class="slide"><a
																href="demos/modern-blog/images/items/lightbox/4-3.jpg"
																data-lightbox="gallery-item"
																style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
														</div>
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
													<li><a href="blog-single.html#comments"><i
																class="uil uil-comments-alt"></i> 13</a></li>
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
														<div class="slide"><a
																href="demos/modern-blog/images/items/lightbox/4-1.jpg"
																data-lightbox="gallery-item"
																style="background: url('demos/modern-blog/images/items/4-1.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
														</div>
														<div class="slide"><a
																href="demos/modern-blog/images/items/lightbox/4-2.jpg"
																data-lightbox="gallery-item"
																style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
														</div>
														<div class="slide"><a
																href="demos/modern-blog/images/items/lightbox/4-3.jpg"
																data-lightbox="gallery-item"
																style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-2">
											<div class="entry-title">
												<a herf="" style="font-size: 18px; font-weight: 500; ">CTLD's Faculty
													Development Programme Empowers Educators with Emotional
													Intelligence</a>
											</div>
											<div class="entry-meta">
												<ul>
													<li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
													<li><a href="blog-single.html#comments"><i
																class="uil uil-comments-alt"></i> 13</a></li>
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
									<div
										class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
										<div class="col-md-4 mb-md-0">
											<a href="#" class="entry-image mb-0 h-100">
												<img src="images/blog1.jpg"
													alt="Inventore voluptates velit totam ipsa tenetur"
													class="rounded-2 h-100 object-cover">
												<div class="bg-overlay">
													<div
														class="bg-overlay-content justify-content-start align-items-start">
														<div class="badge bg-light text-dark rounded-pill">
															Latest Blog</div>
													</div>
												</div>
											</a>
										</div>
										<div class="col-md-8 p-4">
											<div class="entry-meta no-separator mb-1 mt-0">
												<ul>
													<li><a href="#" class="text-uppercase fw-medium">Mon, Feb 12
															@
															3:00PM</a></li>
												</ul>
											</div>

											<div class="entry-title nott">
												<a herf="" style="font-size: 18px; font-weight: 500; ">Scope and
													Opportunity through Non-Clinical Medical</a>
											</div>
											<div class="entry-content my-3">
												<p style="font-size: 14px;">Explore the diverse opportunities in
													non-clinical medical programs like MD Biochemistry, Physiology,[...]
												</p>
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


							<div class="item">

								<article class="mb-0 entry event col-12 ">
									<div
										class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
										<div class="col-md-4 mb-md-0">
											<a href="#" class="entry-image mb-0 h-100">
												<img src="images/blog2.jpg"
													alt="Inventore voluptates velit totam ipsa tenetur"
													class="rounded-2 h-100 object-cover">
												<div class="bg-overlay">
													<div
														class="bg-overlay-content justify-content-start align-items-start">
														<div class="badge bg-light text-dark rounded-pill">
															Latest Blog</div>
													</div>
												</div>
											</a>
										</div>
										<div class="col-md-8 p-4">
											<div class="entry-meta no-separator mb-1 mt-0">
												<ul>
													<li><a href="#" class="text-uppercase fw-medium">Mon, Feb 12
															@
															3:00PM</a></li>
												</ul>
											</div>

											<div class="entry-title nott">
												<a herf="" style="font-size: 18px; font-weight: 500; ">Top 10
													engineering colleges in India</a>
											</div>
											<div class="entry-content my-3">
												<p style="font-size: 14px;">Explore the top 10 Engineering colleges in
													India and the top 10 things to consider while choosing a [...]</p>
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



							<div class="item">

								<article class="mb-0 entry event col-12 ">
									<div
										class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
										<div class="col-md-4 mb-md-0">
											<a href="#" class="entry-image mb-0 h-100">
												<img src="images/blog3.jpg"
													alt="Inventore voluptates velit totam ipsa tenetur"
													class="rounded-2 h-100 object-cover">
												<div class="bg-overlay">
													<div
														class="bg-overlay-content justify-content-start align-items-start">
														<div class="badge bg-light text-dark rounded-pill">
															Latest Blog</div>
													</div>
												</div>
											</a>
										</div>
										<div class="col-md-8 p-4">
											<div class="entry-meta no-separator mb-1 mt-0">
												<ul>
													<li><a href="#" class="text-uppercase fw-medium">Mon, Feb 12
															@
															3:00PM</a></li>
												</ul>
											</div>

											<div class="entry-title nott">
												<a herf="" style="font-size: 18px; font-weight: 500; ">Top 100
													Universities in India</a>
											</div>
											<div class="entry-content my-3">
												<p style="font-size: 14px;">Get guidance on India's top 100
													universities, offering comprehensive insights into diverse
													education[...]</p>
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


				<aside class="sidebar col-lg-3 col-md-12">
					<div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">
						<div class="widget">
							<h4>Notice Board</h4>
							<hr>
							<div class="posts-sm row col-mb-30" id="post-list-sidebar" style="margin-top: -0.25rem;">
								<marquee id="notice-marquee" direction="up" height="468vh" scrollamount="5" loop="50"
									style="margin-bottom: 10px;">

									<div class="entry col-12">
										<div class="grid-inner row g-0">

											<div class="col ps-3">
												<div class="entry-title">
													<a herf="" style="font-size: 14px; font-weight: 500; ">Debitis nihil
														placeat, illum est nisi</a>
												</div>
												<div class="entry-meta">
													<ul>
														<li style="font-size: 10px;">10th July 2021</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="entry col-12">
										<div class="grid-inner row g-0">

											<div class="col ps-3">
												<div class="entry-title">
													<a herf="" style="font-size: 14px; font-weight: 500; ">Lorem ipsum
														dolor sit amet, consectetur</a>
												</div>
												<div class="entry-meta">
													<ul>
														<li style="font-size: 10px;">10th July 2021</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="entry col-12">
										<div class="grid-inner row g-0">

											<div class="col ps-3">
												<div class="entry-title">
													<a herf="" style="font-size: 14px; font-weight: 500; ">Debitis nihil
														placeat, illum est nisi</a>
												</div>
												<div class="entry-meta">
													<ul>
														<li style="font-size: 10px;">10th July 2021</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="entry col-12">
										<div class="grid-inner row g-0">

											<div class="col ps-3">
												<div class="entry-title">
													<a herf="" style="font-size: 14px; font-weight: 500; ">Lorem ipsum
														dolor sit amet, consectetur</a>
												</div>
												<div class="entry-meta">
													<ul>
														<li style="font-size: 10px;">10th July 2021</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="entry col-12">
										<div class="grid-inner row g-0">

											<div class="col ps-3">
												<div class="entry-title">
													<a herf="" style="font-size: 14px; font-weight: 500; ">Lorem ipsum
														dolor sit amet, consectetur</a>
												</div>
												<div class="entry-meta">
													<ul>
														<li style="font-size: 10px;">10th July 2021</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<hr>
								</marquee>
							</div>
						</div>
					</div>
				</aside>
			</div>
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
		<!-- marquee Ends here  -->
		
		<div class="container mb-5 mt-5">
    <h2 Class="h2-line" style="font-weight: 800;">FAQ</h2>
    <hr class="horizontal-line">

    <button class="careers-accordion">Does University provide transport?<span class="icon">+</span></button>
    <div class="panel">
        <p>Yes, Teerthanker Mahaveer University offers pick and drop facility to students and staff coming from within
            the radial distance of 100 Kms. For added safety, the buses have camera surveillance inside it too.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion">Working environment<span class="icon">+</span></button>
    <div class="panel">
        <p>The work environment is truly conductive & intriguing to develop you professionally and personally. We have a
            workforce of 4000 employees. Our team of renowned administrators and academicians from reputed institutes
            help you realize your best and enhance your caliber.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Campus<span class="icon">+</span></button>
    <div class="panel">
        <p>The University is located in the vicinity of the beautiful city of Moradabad and is at a reasonable distance
            from Moradabad Bus stand and Railway station. The campus occupies the geographical area of 130 Acres.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Career Opportunities<span class="icon">+</span></button>
    <div class="panel">
        <p>If you are the one who is looking forward to broaden the career horizons, then Teerthanker Mahaveer
            University is the perfect place for you. We not only develop our student’s skills and enhance them through
            extra training programs like Industry Placements, Higher studies, and classes for Government, Civil, and
            Banking sectors, but also give equal growth opportunities to our staff through Internal Job Posting (IJP),
            International Faculty Exchange Programs, Research opportunities and more.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Residential complex for faculties<span class="icon">+</span></button>
    <div class="panel">
        <p>Yes, TMU accommodates the faculty family keeping in mind their comfort and other amenities. Our residential
            complex for faculties is fully equipped with Wi-Fi, Gymnasium, Indoor game area, Night Canteen and Tuck
            shops, 24X7 Health facilities, 24X7 Power backup, salon and more.</p>
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
		acc[i].addEventListener("click", function () {
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