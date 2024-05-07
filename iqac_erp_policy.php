<?php
include 'head.php';
?>

<style>
	ul {
		margin-left: 20px;
	}

	.color1 {
		background-color: #001055;
		color: #fff;
	}
</style>

<section id="content">
	<div class="content-wrap py-0">
		<div class="container-fluid my-0  px-0 px-md-3">
			<div class="row">

				<?php
				include 'sidebar/iqac_erp.php';
				?>

				<div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5 ">
					<div class="row mx-0">
						<h2 class=" text-center" style="color:#001055;
                                    text-transform: capitalize;
                                    font-weight:700!important; font-size:2.4vmax"> Enterprise Resource Planning <span class="d-block d-sm-inline">(ERP) Policy</span></h2>
						<div class="container mt-5">
							<div class="row">

								<div class="col-md-3">
									<div class="card text-center">
										<div class="card-body">
											<!-- Icon -->
											<i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF7900; "></i>
											<!-- Document Name -->
											<h5 class="card-title">ERP Policy</h5>
											<!-- View PDF Button -->
											<a href="https://www.tmu.ac.in/pdf/erp_policy.pdf" class="more-link fst-normal ms-2" style="font-size:14px; font-family:'poppins';">View pdf <i class="bi-arrow-right"></i></a>
										</div>
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
<?php
include 'footer.php';
?>