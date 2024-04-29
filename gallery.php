<?php
include 'head.php';
?>
    <style>
	p {
		line-height: 1.8;
	}

	a {
		text-decoration: none;
		transition: all 0.3s ease;
	}

	a:hover {
		color: #001055;
	}

	.container-fluid {
		max-width: 1770px;
	}

	.tm-container-small {
		max-width: 1050px;
	}

	.btn {
		border-radius: 0;
	}

	.btn-pagination {
		background-color: #001055;
		color: #fff;
		border: 0;
		border-radius: 5px;
		padding: 12px 50px 14px;
		font-size: 1.2rem;
	}


	.btn-primary:hover,
	.btn-primary:focus {
		background-color: #001055;
	}

	.btn-primary.disabled,
	.btn-primary:disabled {
		background-color: #001055;
		pointer-events: all;
		cursor: not-allowed;
	}

	.form-control {
		padding: 10px 20px;
		width: 100%;
		height: auto;
	}

	.form-group {
		margin-bottom: 25px;
	}

	.tm-btn-big {
		padding: 12px 90px 14px;
	}

	.tm-mt-60 {
		margin-top: 60px;
	}

	.tm-mb-50 {
		margin-bottom: 50px;
	}

	.tm-mb-74 {
		margin-bottom: 74px;
	}

	.tm-mb-90 {
		margin-bottom: 90px;
	}

	.tm-text-primary {
		color: #001055;
	}

	.tm-text-secondary {
		color: #FF7A00;
	}

	a.tm-text-primary:hover {
		color: #FF7A00;
	}

	.tm-bg-gray {
		background-color: #EEEEEE;
	}

	.tm-input-paging {
		width: 40px;
		border-radius: 0;
		border: 1px solid #CCCCCC;
		background: #f4f4f4;
		text-align: center;
	}

	.tm-search-input {
		width: 360px;
		border-radius: 0;
		padding: 12px 15px;
		color: #001055;
		border: none;
	}

	.tm-search-input:focus {
		border-color: #001055;
		box-shadow: 0 0 0 0.25rem rgb(0 153 153 / 0.25);
	}

	.tm-search-input::placeholder {
		/* Chrome, Firefox, Opera, Safari 10.1+ */
		color: #001055;
		opacity: 1;
		/* Firefox */
	}

	.tm-search-input::-ms-input-placeholder {
		/* Microsoft Edge */
		color: #001055;
	}

	.tm-search-btn {
		color: white;
		background-color: #001055;
		border: none;
		width: 100px;
		height: 50px;
		margin-left: -1px;
	}

	p,
	.tm-text-gray {
		color: #999;
	}

	.tm-text-gray-light {
		color: #CCC;
	}

	.tm-text-gray-dark {
		color: #666;
	}

	.tm-gallery div.d-block {
		animation: show .5s ease;
	}

	@keyframes show {
		0% {
			opacity: 0;
			transform: scale(0.9);
		}

		100% {
			opacity: 1;
			transform: scale(1);
		}
	}

	.tm-paging-link {
		display: flex;
		justify-content: center;
		align-items: center;
		width: 60px;
		height: 60px;
		font-size: 1.1rem;
		color: #999;
		background-color: #EEEEEE;
		margin: 10px;
		border-radius: 5px;
		text-decoration: none;
		transition: all 0.3s ease;
	}

	.tm-paging-link:hover,
	.tm-paging-link.active {
		background-color: #001055;
		color: #fff;
	}

	@media (max-width: 767px) {
		.tm-paging-col {
			flex-direction: column;
		}

		.tm-paging {
			flex-wrap: wrap;
		}

		.tm-about-img-text {
			max-width: 640px;
		}

		.tm-about-2-col,
		.tm-about-3-col {
			margin-bottom: 50px;
		}
	}
	/* .jumbotron {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 350px;
  background-image: url("https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/buildawebsite.jpg");
  background-size: cover;
  background-position: center;
}

.height {
  height: 100vh;
} */

.search {
  position: relative;
  box-shadow: 0 0 40px rgba(51, 51, 51, .1);
}

.search input {
  height: 60px;
  width: 70vh; /* Adjusted width for small screens */
  text-indent: 25px;
  border: 2px solid #d6d4d4;
}

.search input:focus {
  box-shadow: none;
  border: 2px solid #001055;
}

.search .fa-search {
  position: absolute;
  top: 20px;
  left: 16px;
}

.search button {
  position: absolute;
  top: 5px;
  right: 5px;
  height: 50px;
  width: 110px;
  background: #001055;
}

/* Media query for screens smaller than 768 pixels */
@media (max-width: 767px) {

  .search input {
    width: 40vh; /* Full width for small screens */
  }

  .search button {
    top: 5px;
	margin: 0 auto;
	width: 80px; /* Adjusted position for small screens */
  }
}



</style>

	<div class="col-12 col-md-12 col-lg-12 mt-3 mt-sm-0 pt-5 ">
       <h2 class=" text-center" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Explore Campus<span
          class="d-block d-sm-inline"> Gallery</span></h2>
          
		  <section id="content">	
    <div class="content-wrap">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="dropdown" class="form-label" style="font-weight:bold; font-size:16px;">Gallery Category</label>
              <select class="form-select" id="dropdown" onchange="filterContent()">
			  	<option value="">Select Option</option>
			 	<option value="alumni" id="alumni">Alumni Meet</option>
        		<option value="culturalfest" id="culturalfest">Cultural Fest</option>
        		<option value="conference" id="conference">Conference</option>
        		<option value="educational_tour" id="educational_tour">Educational Tour</option>
        		<option value="orientation" id="orientaion">Farewell / Orienattion Day</option>
        		<option value="workshop" id="workshop">Workshop</option>
    		</select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="searchInput" class="form-label" style="font-weight:bold; font-size:16px;">Find images</label>
              <div class="input-group">
                <input type="text" class="form-control" id="searchInput" placeholder="Search...">
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

       <!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="row gallery-categories gutter-20">
						<article class="portfolio-item col-md-4 pf-illustrations pf-icons" id="culture_tmu">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="450" data-pause="3500" data-animation="fade">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="images/gallery/kavi-sammelan/a1.jpg"><img src="images/gallery/kavi-sammelan/a1.jpg" alt="Bridge Side"></a></div>
												<!-- <div class="slide"><a href="/images/gallery-accessory-2.jpeg"><img src="images/gallery/gallery-accessory-2.jpeg" alt="Bridge Side"></a></div> -->
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/gallery/kavi-sammelan/A2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
											<a href="images/gallery/kavi-sammelan/A3.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/kavi-sammelan/A4.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/kavi-sammelan/A5.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/kavi-sammelan/A6.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/kavi-sammelan/A7.jpg" class="d-none" data-lightbox="gallery-item"></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
                                <h3>Kavi sammelan</h3>
									<span><a href="#">Cultural Fest</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 pf-illustrations pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="450" data-pause="3500" data-animation="fade">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="images/gallery/Rockon-8/a1.jpg"><img src="images/gallery/Rockon-8/a1.jpg" alt="Bridge Side"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/gallery/Rockon-8/A2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
											<a href="images/gallery/Rockon-8/A3.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/Rockon-8/A4.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/Rockon-8/A5.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/Rockon-8/A6.jpg" class="d-none" data-lightbox="gallery-item"></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>Rock On VIII</h3>
									<span><a href="#">Cultural Fest</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 pf-illustrations pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="450" data-pause="3500" data-animation="fade">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="images/gallery/antibiotic_workshop/A1.jpg"><img src="images/gallery/antibiotic_workshop/A1.jpg" alt="Bridge Side"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/gallery/antibiotic_workshop/A2.jpeg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
											<a href="images/gallery/antibiotic_workshop/A3.jpeg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/antibiotic_workshop/A4.jpeg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/antibiotic_workshop/A5.jpeg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/antibiotic_workshop/A6.jpeg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/antibiotic_workshop/A7.jpeg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/antibiotic_workshop/A8.jpeg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/antibiotic_workshop/A9.jpeg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/antibiotic_workshop/A10.jpeg" class="d-none" data-lightbox="gallery-item"></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>Anti Biotic Week</h3>
									<span><a href="#">Workshop</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 pf-illustrations pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="450" data-pause="3500" data-animation="fade">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="images/gallery/smart-23/A1.jpg"><img src="images/gallery/smart-23/A1.jpg" alt="Bridge Side"></a></div>
												
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/gallery/smart-23/A2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
											<a href="images/gallery/smart-23/A3.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/smart-23/A4.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/smart-23/A5.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/smart-23/A6.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/smart-23/A7.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/smart-23/A8.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/smart-23/A9.jpg" class="d-none" data-lightbox="gallery-item"></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>Smart-2023 International Conference</h3>
									<span><a href="#">Conference</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 pf-illustrations pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="450" data-pause="3500" data-animation="fade">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="images/gallery/splash2024/A1.jpg"><img src="images/gallery/splash2024/A1.jpg" alt="Bridge Side"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/gallery/splash2024/A2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
											<a href="images/gallery/splash2024/A3.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/splash2024/A4.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/splash2024/A5.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/splash2024/A6.jpg" class="d-none" data-lightbox="gallery-item"></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>Splash Holi Fest</h3>
									<span><a href="#">Cultural Fest</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 pf-illustrations pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="450" data-pause="3500" data-animation="fade">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="images/gallery/arrythmiya/A1.jpg"><img src="images/gallery/arrythmiya/A1.jpg" alt="Bridge Side"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/gallery/arrythmiya/A2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
											<a href="images/gallery/arrythmiya/A3.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/arrythmiya/A4.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/arrythmiya/A5.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/arrythmiya/A6.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/arrythmiya/A7.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/arrythmiya/A8.jpg" class="d-none" data-lightbox="gallery-item"></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>Arrhythmia</h3>
									<span><a href="#">Cultural Fest</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 pf-illustrations pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="450" data-pause="3500" data-animation="fade">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="images/gallery/Mahakhumb2024/A1.jpg"><img src="images/gallery/Mahakhumb2024/A1.jpg" alt="Bridge Side"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/gallery/Mahakhumb2024/A2.jpeg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
											<a href="images/gallery/Mahakhumb2024/A3.jpeg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/Mahakhumb2024/A4.jpeg" class="d-none" data-lightbox="gallery-item"></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>Startup Mahakhumb 2024</h3>
									<span><a href="#">Educational Tour</a></span>
								</div>
							</div>
						</article>
						
						<article class="portfolio-item col-md-4 pf-illustrations pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="450" data-pause="3500" data-animation="fade">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="images/Alumn's_talk/A1.jpg"><img src="images/gallery/Alumn's_talk/A1.jpg" alt="Bridge Side"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/gallery/Alumn's_talk/A2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                            <a href="images/gallery/Alumn's_talk/A3.webp" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/Alumn's_talk/A4.webp" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/Alumn's_talk/A5.webp" class="d-none" data-lightbox="gallery-item"></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>Alumni Talk Series </h3>
									<span><a href="#">Alumni Meet</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 pf-illustrations pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="450" data-pause="3500" data-animation="fade">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="images/gallery/urophia_fp/A1.jpg"><img src="images/gallery/urophia_fp/A1.jpg" alt="Bridge Side"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/gallery/urophia_fp/A2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
											<a href="images/gallery/urophia_fp/A3.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/gallery/urophia_fp/A4.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/urophia_fp/A5.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/urophia_fp/A6.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/urophia_fp/A7.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/urophia_fp/A8.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/urophia_fp/A9.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                            <a href="images/gallery/urophia_fp/A10.jpg" class="d-none" data-lightbox="gallery-item"></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>Europhia</h3>
									<span><a href="#">Farewell Party</a></span>
								</div>
							</div>
						</article>
					</div>
					<br>
					<br>
				<!--- Pagination Code starts Here --->
					<div class="row tm-mb-25 mt-2">
						<div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
							<a href="javascript:void(0);" class="btn btn-pagination tm-btn-prev mb-2">Previous</a>
								<div class="tm-paging d-flex">
									<a href="javascript:void(0);" class="active tm-paging-link">1</a>
									<a href="javascript:void(0);" class="tm-paging-link">2</a>
									<a href="javascript:void(0);" class="tm-paging-link">3</a>
									<a href="javascript:void(0);" class="tm-paging-link">4</a>
								</div>
							<a href="javascript:void(0);" class="btn btn-pagination tm-btn-next">Next</a>
						</div>
					</div>
				<!-- Ends here-->
				</div>
			</div>
		</section><!-- #content end -->

                    </div>
            </div>
        </div>
    </section>

<script>
    function filterContent() {
        var dropdown = document.getElementById("dropdown");
        var selectedCategory = dropdown.value;
        var culturalFest = document.getElementById("culturalFest");

        // Hide the content initially
        culturalFest.style.display = "none";

        // Check if the selected category matches the filter
        if (selectedCategory === "culture_tmu") {
            culturalFest.style.display = "block";
        }
    }
</script>

<?php 
include 'footer.php';
 ?>