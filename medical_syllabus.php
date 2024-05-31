<?php
include 'head.php';
?>

<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid my-0 px-0">
            <div class="row">
                <?php
                    include 'sidebar/medical_sidebar.php';
                ?>
                <div class="col-12 col-md-10 col-lg-10 mt-3 mt-sm-0 pt-5 ">
                    <div class="container">
                        <h1 class="tmu-text-primary tmu-page-heading"><span>  Syllabus </span><span> </span></h1>
                        <div class="card">
                            <div class="form-widget card-body"  data-alert-type="inline">
									<div class="form-result"></div>
									<form id="form-cleaning" name="form-cleaning" action="include/form.php" method="post" class="row form-cleaning mt-2">
										<div class="form-process">
											<div class="form-cleaning-loader css3-spinner" style="position: absolute;">
												<div class="css3-spinner-double-bounce1"></div>
												<div class="css3-spinner-double-bounce2"></div>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="input-group form-group">
												<select class="required form-select" name="form-cleaning-service" id="form-cleaning-service">
                                                <option value="162">B.Sc. Medical Anatomy</option>
											    <option value="163">B.Sc. Medical Biochemistry</option>
											    <option value="164">B.SC. Medical Physiology</option>
											    <option value="26">M.Sc. Medical Pharmacology</option>
											    <option value="22">M.Sc. Medical Anatomy</option>
											    <option value="23">M.Sc. Medical Physiology</option>
											    <option value="24">M.Sc. Medical Biochemistry</option>
											    <option value="25">M.Sc. Medical Microbiology</option>
											    <option value="17">MS (ENT/Oto-Rhinlaryngology)</option>
											    <option value="18">MS (General Surgery)</option>
											    <option value="19">MS (Opthalomology)</option>
											    <option value="20">MS (Orthopeadics)</option>
											    <option value="21">MS (Obstetrics and Gynaecology)</option>
											    <option value="10">MD (Radio-Diagnosis/Radiology)</option>
											    <option value="13">MD (Dermatology, Venereology and Leprosy)</option>
											    <option value="9">MD (General Medicine)</option>
											    <option value="11">MD (Paediatrics)</option>
											    <option value="15">MD (Respiratory Medicine/TB & Chest)</option>
											    <option value="12">MD (Psychiatry)</option>
											    <option value="175">MD (Anesthesiology)</option>
											    <option value="8">MD (Pathology)</option>
											    <option value="5">MD (Biochemistry)</option>
											    <option value="6">MD (Microbiology)</option>
											    <option value="16">MD (Community Medicine)</option>
											    <option value="7">MD (Pharmacology)</option>
											    <option value="2">MD (Anatomy)</option>
											    <option value="3">MD (Physiology)</option>
											    <option value="4">MD (Forensic Medicine)</option>
											    <option value="161">PDCC – Post Doctoral Certificate Course in  MAS</option>
												</select>
											</div>
										</div>

                                        <div class="col-sm-6">
											<div class="input-group form-group">
												<select class="required form-select" name="form-cleaning-service" id="form-cleaning-service">
													<option value="2023-24">2023-24</option>
													<option value="2022-23">2022-23</option>
													<option value="2021-22">2021-22</option>
													<option value="2020-21">2020-21</option>
                                                    <option value="2019-20">2019-20</option>
													<option value="2018-19">2018-19</option>
													<option value="2017-18">2017-18</option>
												</select>
											</div>
										</div>
                                        <div class="col-md-12">
										<object data="assets/pdf/BSC-Anatom_2022-23.pdf" type="application/pdf" width="100%" height="1150px">
		                					<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
		                					<center><a type="button" class="tmu-btn btn-1 btn-lg btn-rounded text-lg waves-effect waves-light" href="assets/pdf/BSC-Anatom_2022-23.pdf" download type="assets/pdf/BSC-Anatom_2022-23.pdf"><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
	                					</object>
                                        </div>
									</form>
								</div>
							</div>
                            </div>
                </div>
            </div>
        </div>
    </div>            
</section>

<?php 
include 'footer.php';
 ?>


                                    