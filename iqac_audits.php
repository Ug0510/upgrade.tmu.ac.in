<?php
include 'head.php';
?>

<style>
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

	h3 {
		margin: 0 0 2px 0;
	}

	.font-body {
		font-size: 22px;
		color: #001055;
		font-weight: 700;
	}

	p {
		margin-bottom: 15px !important;
	}



	.fa-solid.fa-file-pdf:hover {
		color: #001055;
		justify-content: center;
	}

	.centered-icon {
		text-align: center;
	}

	.text-middle {
		color: #001055;
		text-transform: capitalize;
		font-weight: 700 !important;
		font-size: 2.4vmax;
		margin: 0 0 10px 0;
		text-align: center;
	}

	.vh-75 {
		height: 0vh !important;
	}

	.team-title h4,
	.team-title .h4 {
		display: block;
		margin-bottom: 0;
		font-size: 1.2vh !important;
		text-transform: capitalize !important;
		letter-spacing: 1px;
		font-weight: 700;
	}
</style>

<section id="content">
	<div class="content-wrap py-0">



		<div class="container-fluid my-0  px-0 px-md-3">


			<div class="row">

				<?php
				include 'sidebar/institutional_values_sidebar.php';
				?>

				<div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5">

					<div class="row mx-0">
						<h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">Environment & <span class="d-block d-sm-inline"> Energy Audits</span></h2>
						<div class="row mx-0">

							<hr class="horizontal-line">

							<button class="careers-accordion">Environment & Energy Audits<span class="icon">+</span></button>
							<div class="panel">
								<table class="table table-bordered table-striped">
									<thead>
										<th>S. NO.</th>
										<th>Audits Name</th>
										<th class="text-center">View More</th>
									</thead>
									<tbody>
										<tr>
											<td>1.</td>
											<td>Green Audit</td>
											<td class="centered-icon"><a href="https://www.tmu.ac.in/pdf/environment_and_energy_audit/green-audit-report.pdf"><i class="fa-solid fa-file-pdf"></i></a></td>
										</tr>
										<tr>
											<td>2.</td>
											<td>Engergy Audit Report</td>
											<td class="centered-icon"><a href="https://www.tmu.ac.in/pdf/environment_and_energy_audit/energy-audit-report.pdf"><i class="fa-solid fa-file-pdf"></i></a></td>
										</tr>
										<tr>
											<td>3.</td>
											<td>Environment Audit Report</td>
											<td class="centered-icon"><a href="https://www.tmu.ac.in/pdf/environment_and_energy_audit/environment-audit-report.pdf"><i class="fa-solid fa-file-pdf"></i></a></td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>
						<hr class="horizontal-line">

						<button class="careers-accordion"> Clean and Green Campus Recognitions / Awards<span class="icon">+</span></button>
						<div class="panel">
							<div class="container">
								<div class="row gutter-50 pb-4" data-lightbox="gallery">
									<div class="col-md-6">
										<a href="https://www.tmu.ac.in/img/award/assocham.jpg" data-lightbox="gallery-item"><img src="https://www.tmu.ac.in/img/award/assocham.jpg" alt="Gallery Thumb 1"></a>
									</div>
									<div class="col-md-6">
										<a href="https://www.tmu.ac.in/img/award/Green%20Audit%20Certificate.jpg" data-lightbox="gallery-item"><img src="https://www.tmu.ac.in/img/award/Green%20Audit%20Certificate.jpg" alt="Gallery Thumb 2"></a>
									</div>
								</div>
							</div>
						</div>
						<hr class="horizontal-line">
						<button class="careers-accordion"> Beyond the Campus Environmental Promotion Activities <span class="icon">+</span></button>
						<div class="panel">
							<p>The University has adopted 4 villages & environmental promotional activities organized on regular basis.</p>
							<div class="row justify-content-center gutter-30 col-mb-5">
								<div class="col-sm-4 col-md-4">
									<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
										<div class="team-image">
											<img src="	https://www.tmu.ac.in/img/facilities/institutional_values/environment_energy/Ginnaur1.jpeg" alt="">
										</div>
										<div class="team-desc p-2">
											<div class="team-title pt-0">
												<h4>Activities At</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
													Ginnaur Deya Mafi, Uttar Pradhesh</span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-4 col-md-4">
									<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
										<div class="team-image">
											<img src="https://www.tmu.ac.in/img/facilities/institutional_values/environment_energy/gajgola2.jpeg" alt="">
										</div>
										<div class="team-desc p-2">
											<div class="team-title pt-0">
												<h4>Activities At</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
													Gajgola Nanak Bari, Uttar Pradesh</span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-4 col-md-4">
									<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
										<div class="team-image">
											<img src="https://www.tmu.ac.in/img/facilities/institutional_values/environment_energy/aurangabad3.jpeg" alt="">
										</div>
										<div class="team-desc p-2">
											<div class="team-title pt-0">
												<h4>Activities At</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
													Aurangabad, Moradabad Uttar Pradesh</span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-4 col-md-4">
									<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
										<div class="team-image">
											<img src="https://www.tmu.ac.in/img/facilities/institutional_values/environment_energy/Ginnaur2.jpeg" alt="">
										</div>
										<div class="team-desc p-2">
											<div class="team-title pt-0">
												<h4>Activities At</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
													Ginnaur Deya Mafi, Uttar Pradhesh</span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-4 col-md-4">
									<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
										<div class="team-image">
											<img src="https://www.tmu.ac.in/img/facilities/institutional_values/environment_energy/gajgola3.jpeg" alt="">
										</div>
										<div class="team-desc p-2">
											<div class="team-title pt-0">
												<h4>Activities At</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
													Gajgola Nanak Bari, Uttar Pradesh</span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-4 col-md-4">
									<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
										<div class="team-image">
											<img src="https://www.tmu.ac.in/img/facilities/institutional_values/environment_energy/manohapur1.jpeg" alt="" style="height: 210px;">
										</div>
										<div class="team-desc p-2">
											<div class="team-title pt-0">
												<h4>Activities At</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
													Manoharpur, Moradabad Uttar Pradesh</span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-4 col-md-4">
									<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
										<div class="team-image">
											<img src="https://www.tmu.ac.in/img/facilities/institutional_values/environment_energy/manohapur2.jpeg" alt="">
										</div>
										<div class="team-desc p-2">
											<div class="team-title pt-0">
												<h4>Activities At</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
													Manoharpur, Moradabad Uttar Pradesh</span>
											</div>
										</div>
									</div>
								</div>


								<div class="col-sm-4 col-md-4">
									<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
										<div class="team-image">
											<img src="https://www.tmu.ac.in/img/facilities/institutional_values/environment_energy/manohapur1.jpeg" alt="" style="height: 300px;">
										</div>
										<div class="team-desc p-2">
											<div class="team-title pt-0">
												<h4>Activities At</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
													Manoharpur, Moradabad Uttar Pradesh</span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-4 col-md-4">
									<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
										<div class="team-image">
											<img src="https://www.tmu.ac.in/img/facilities/institutional_values/environment_energy/gajgola1.jpeg" alt="" style="height: 300px;">
										</div>
										<div class="team-desc p-2">
											<div class="team-title pt-0">
												<h4>Activities At </h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
													Gajgola Nanak Bari, Uttar Pradesh</span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-4 col-md-4">
									<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
										<div class="team-image">
											<img src="https://www.tmu.ac.in/img/facilities/institutional_values/environment_energy/aurangabad2.jpeg" alt="">
										</div>
										<div class="team-desc p-2">
											<div class="team-title pt-0">
												<h4>Activities At</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
													Aurangabad, Moradabad Uttar Pradesh</span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-4 col-md-4">
									<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
										<div class="team-image">
											<img src="https://www.tmu.ac.in/img/facilities/institutional_values/environment_energy/aurangabad1.jpeg" alt="">
										</div>
										<div class="team-desc p-2">
											<div class="team-title pt-0">
												<h4>Activities At</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
													Aurangabad, Moradabad Uttar Pradesh</span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-4 col-md-4">
									<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
										<div class="team-image">
											<img src="https://www.tmu.ac.in/img/facilities/institutional_values/environment_energy/Ginnaur3.jpeg" alt="">
										</div>
										<div class="team-desc p-2">
											<div class="team-title pt-0">
												<h4>Activities At</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
													Ginnaur Deya Mafi, Uttar Pradhesh</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr class="horizontal-line">

					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- #content end -->


<br /><br />

<script>
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