<?php
 include 'head.php';
?>


    <style>
       .banner{
  display: flex;
  height: 380px;
  width: 100%;
  background-color: #dcebca;
 }
 .ban-text{
  /* padding: 30px;
  font-size: 20px;
  line-height: 8px; */
  margin-top: 0px;
  padding: 10px;
  padding-top: 120px;
 }
 .ban-img{
    align: right;
    z-index: 2;
 }
    </style>

<style>
        /* Button styles */
        .my-button {
            display: inline-block;
            padding: 8px 15px;
            background-color: #ff7a00;
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        /* Hover effect */
        .my-button:hover {
            background-color: #fff;
            color: #000;
        }

        /* Click effect */
        .my-button:active {
            transform: scale(0.95);
        }

        .my-button-blk {
            display: inline-block;
            padding: 8px 15px;
            background-color: #ffffff;
            color: #000;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            margin-left: 10px;
            transition: background-color 0.3s, transform 0.2s;
        }

        /* Hover effect */
        .my-button-blk:hover {
            background-color: #ff7a00;
            color: #fff;
        }

        /* Click effect */
        .my-button-blk:active {
            transform: scale(0.95);
        }

        .png{
            margin-right: 0px;
            padding-right: 0px;
        }
    </style>



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

        <!-- Slider
		============================================= -->
     
        <div id="slider" class="slider-element min-vh-80 " style="max-width: 1523px; max-height: 85.1vh; background-image: url('demos/saas-2/images/CCS-IT-Banner-background.jpg');">
            <div class="container d-none d-sm-block">
                <div class="row justify-content-between align-items-center align-items-xl-end">
                    <div class="col-lg-6 col-xxl-5 py-5 py-lg-6 my-lg-5 text-center text-lg-start">
                        <h1 class="display-4 fw-bolder ls-n-1" style="color: #ffffff;">Build Powerful Websites in a flash.</h1>
                        <p class="lead fw-normal mb-5">Transforming Your Ideas into Stunning Websites with Intuitive Tools and Limitless Possibilities.</p>
                        <a href="#" class="button button px-lg-3 py-lg-2 rounded-pill m-0 mb-4">Download Brocher</a>
                        <a href="#" class="button button px-lg-3 py-lg-2 button-dark button-border button-black border-contrast-500 rounded-pill ms-1 mb-4">Apply Now</a>
                    </div>
                    <div class="col-lg-6 png">
                        <img src="demos/saas-2/images/CCS-IT-png.png" alt="..">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner d-block d-sm-none" style="max-height: 85.1vh; background-image: url('demos/saas-2/images/hero7.jpg');">
        <div class="ban-text">
        <div class="col-xs-6 ban-text" >
                <h1 class="display-4 fw-bolder ls-n-1" style="font-size: 20px; color: #ffffff;">Build Your Future with Data Science</h1>
                <!-- <p>Transforming Your Ideas into Stunning Websites with Intuitive Tools and Limitless Possibilities.</p> -->
                <a class="my-button">Download Brocher</a>
                <a class="my-button-blk">Apply Now</a>
            </div>
                    <!-- <div class="col-mxs-6 ban-img" >
                        <img src="demos/saas-2/images/hero5.png" alt=".." >
                    </div> -->
        </div>
    </div>

      <!-----Upper card start-->
      <section id="content" class="d-none d-sm-block">
        <div class="content-wrap pb-0 pt-3" style="margin-top: 22px;">
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
                                        <div class="card-text" >Visited Companies</div>
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
                                        <div class="card-text" >Placement in 2022-23
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
                                        <div class="card-text" >Highest Placement</div>
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
                                    <div class="card-icon card-icon-large"><i class="fa fa-graduation-cap fa-5x"
                                            style="padding-right:10px; padding-top:7px;"></i>
                                    </div>
                                    <div class="mb-4">
                                        <strong class="card-strong-text">25000+</strong>
                                        <div class="card-text" >World Wide Alumni</div>
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
<section id="content" class="d-block d-sm-none" style="margin-top: 30px; margin-bottom: -20px;">
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
                                        <div class="card-icon card-icon-large"><i
                                                class="fa fa-graduation-cap fa-7x"
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
<section id="content" class="d-block d-sm-none" >
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
                                        <div class="card-icon card-icon-large"><i
                                                class="fa fa-graduation-cap fa-7x"
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


        
		<!------VIDEO TESTIMONIALS START------->
		<section id="content">
			<div class="content-wrap py-0" style="margin-top: 10px; margin-bottom: 37px;">

                <div class="col-xl-12 col-lg-10 text-center d-none d-sm-block">
					<h3 class="h1 fw-bold uline" style="font-size: 48px; font-weight: 600; line-height: 64px; color:#000000; margin-bottom: 22px;">SUCCESS STORIES</h3>
				</div>
				<div class="col-xl-12 col-lg-10 text-center d-block d-sm-none">
					<h3 class="h1 fw-bold uline" style="font-size: 30px; font-weight: 600; line-height: 40px; color:#000000; margin-bottom: 18px;">SUCCESS STORIES</h3>
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
		</section><!-- #content end -->



        <div class="marquee" style="margin-bottom: 20px;">
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





        <div class="container">
            <div class="row justify-content-center ">
						<div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
							<h2 class="h1 fw-bold" style="font-size: 48px; font-weight: 600; line-height: 64px; color:#FF7A00; margin-bottom: 22px;">Fee Structure for <span style="color: #000000;">B.Tech
                        CSE</h2>

						</div>
						<div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
							<h2 class="h1 fw-bold" style="font-size: 30px; font-weight: 600; line-height: 50px; color:#FF7A00; margin-bottom: 9px; margin-top: -12px;">Fee Structure for <span style="color: #000000;">B.Tech
                        CSE</h2>

						</div>
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
                <div class="row justify-content-center ">
						<div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
							<h2 class="h1 fw-bold" style="font-size: 48px; font-weight: 600; line-height: 64px; color:#FF7A00; margin-bottom: 17px;">B.Tech CSE <span style="color: #000000;">Scholerships 2023</h2>

						</div>
						<div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
							<h2 class="h1 fw-bold" style="font-size: 30px; font-weight: 600; line-height: 50px; color:#FF7A00; margin-bottom: 9px; margin-top: -12px;">B.Tech CSE <span style="color: #000000;">Scholerships 2023</h2>

						</div>
			    </div>
            <p style="text-align: justify; margin-bottom: 7px;">The Teerthanker Mahaveer University Admission Scholarships
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

                <div class="container" style="margin-top: 12px; margin-bottom: 8px;">


                        <div class="row align-items-lg-center min-vh-lg-100">
                            <div class="col-lg-6">
                                <img src="eligiblity.jpg" alt="Girl in a jacket">
                            </div>

                            <div class="col-lg-6 align-self-center">
                                        <h2 class="h1 fw-bold" style="font-size: 24px; font-weight: 500; line-height: 30px; color:#FF7A00; margin-Bottom: 15px;margin-top: 20px;">B.Tech CSE<span style="color: #000000;"> Eligibility Criteria & Selection Process</h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="feature-box fbox-plain fbox-sm flex-column">
                                            <div class="fbox-content">
                                                <h3 class="text-transform-none ls-0">Eligiblity</h3>
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
                                                <h3 class="text-transform-none ls-0">Selection</h3>
                                                <p>Selection will be based on the merit of Class XII Best of 3 subjects
                                                    score (comprising of Physics and Maths as compulsory subjects and
                                                    any other third subject with highest score)</p>
                                                <p
                                                    style="color: #FF7A00; font-size: 15px; margin-top: 2px; font-weight: bold;">
                                                    OR</p>
                                                <p>on the JEE 2023 score</p>
                                                <p
                                                    style="color: #FF7A00; font-size: 15px; margin: 0px; font-weight: bold;">
                                                    OR</p>
                                                <p>SAT score</p>
                                                <p
                                                    style="color: #FF7A00; font-size: 15px; margin: 0px; font-weight: bold;">
                                                    OR</p>
                                                <p>CUET Percentile score</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                </div>
        </section><!-- #content end -->




        <div class="section my-0 bg-transparent">
            <div class="container" style="margin-top: 15px; margin-bottom: 12px;">
                <div class="row justify-content-center gy-5" style="--bs-gutter-x: 60px">
                    <div class="col-lg-12 mt-lg-5.5">
                        <div class="row justify-content-center ">
                            <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
                                <h2 class="h1 fw-bold" style="font-size: 48px; font-weight: 600; line-height: 64px; color:#FF7A00; margin-bottom: 22px;">B.Tech CSE<span style="color: #000000;"> Frequently Asked Questions</h2>

                            </div>
                            <div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
                                <h2 class="h1 fw-bold" style="font-size: 30px; font-weight: 600; line-height: 54px; color:#FF7A00; margin-bottom: 7px; margin-top: -12px;">B.Tech CSE<span style="color: #000000;"> Frequently Asked Questions</h2>

                            </div>
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
        <br>


    
		<?php
 include 'footer.php';
?>