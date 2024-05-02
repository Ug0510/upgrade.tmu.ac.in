<?php
 include 'head.php';
?>

<style>
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
		/* Added */
		overflow-y: auto;
		max-height:100%!important;
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

h3{
margin:0 0 2px 0;	
}

.font-body {
  font-size:22px;
  color:#001055;
  font-weight: 700;
}

p {
  margin-bottom:15px!important; 
}


.fa-solid.fa-file-pdf:hover {
color: #001055;
justify-content:center;
}
.centered-icon {
    text-align: center;
}
.text-middle{
    color:#001055;
    text-transform: capitalize; 
    font-weight:700!important;
	font-size:2.4vmax;
    margin:0 0 10px 0;
    text-align: center;
}

.vh-75 {
    height: 0vh !important;
}

.team-title h4{
    font-size:16px;
    font-family:'poppins'!important;
    text-align:center;
}

.team-title h4 span{
    font-size:12px;
    font-family:'poppins'!important;
    text-align:center;
}
</style>

<?php
 include 'sidebar/institutional_values_sidebar.php';
?>

        <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5">

          <div class="row mx-0">
          <h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">Waste Management<span
                class="d-block d-sm-inline"> Initiatives</span></h2>
        
		<div class="container mb-5 mt-5">
    <hr class="horizontal-line">

    <button class="careers-accordion"> Solid Waste Management<span class="icon">+</span></button>
            <div class="panel active">
                     <p>The biodegradable waste like food waste from mess & canteen are procured by the near-by piggery
                        farms
                        on the daily basis. Besides, the University has also signed MoU with Nagar Panchayat, Pakwara
                        for the
                        disposal of Non- biodegradable waste like plastic, tins, glass bottles etc. and ensures that the
                        University is having efficient mechanism for the disposal of solid waste.</p>

                      <div class="row justify-content-center gutter-30 col-mb-5">

                        <div class="col-sm-4 col-md-4">
                          <div
                            class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                              <img
                                src="https://www.tmu.ac.in/img/facilities/institutional…ement/solid_waste_certificate_2022_first_page.png"
                                alt="">
                            </div>
                            <div class="team-desc p-2">
                              <div class="team-title pt-0">
                                <h4>Certificate for disposal of food waste 2022-23 (First Page)</h4><span
                                  class="fst-normal" style="font-size:16px; font-family:'poppins';"><i class="fa-solid fa-location-dot"></i> Nagar Panchayat,
                                  Pakwara</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4 col-md-4">
                          <div
                            class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                              <img
                                src="https://www.tmu.ac.in/img/facilities/institutional…ment/solid_waste_certificate_2022_second_page.png"
                                alt="">
                            </div>
                            <div class="team-desc p-2">
                              <div class="team-title pt-0">
                                <h4>Certificate for disposal of food waste 2022-23 (Second Page)</h4>
                                <span
                                  class="fst-normal" style="font-size:16px; font-family:'poppins';"><i class="fa-solid fa-location-dot"></i> Nagar Panchayat,
                                  Pakwara</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4 col-md-4">
                          <div
                            class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                              <img
                                src="https://www.tmu.ac.in/img/facilities/institutional_values/waste_management/solid_waste.jpeg"
                                alt="">
                            </div>
                            <div class="team-desc p-2">
                              <div class="team-title pt-0">
                                <h4>Food Waste Record</h4><span class="fst-normal" style="font-size:16px; font-family:'poppins';"><i
                                    class="fa-solid fa-location-dot"></i> TMU
                                  Campus</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4 col-md-4">
                          <div
                            class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                              <img
                                src="https://www.tmu.ac.in/img/facilities/institutional_values/waste_management/certificate2.jpeg"
                                alt="">
                            </div>
                            <div class="team-desc p-2">
                              <div class="team-title pt-0">
                                <h4>Certificate for disposal of food waste 2021-22</h4><span class="fst-normal" style="font-size:16px; font-family:'poppins';"><i
                                    class="fa-solid fa-location-dot"></i> Nagar Panchayat, Pakwara </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4 col-md-4">
                          <div
                            class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                              <img
                                src="https://www.tmu.ac.in/img/facilities/institutional_values/waste_management/certificate1.jpeg"
                                alt="">
                            </div>
                            <div class="team-desc p-2">
                              <div class="team-title pt-0">
                                <h4>Certificate for disposal of food waste 2020-21 (Second Page)</h4><span
                                  class="fst-normal" style="font-size:16px; font-family:'poppins';"><i class="fa-solid fa-location-dot"></i> Nagar Panchayat, Pakwara
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
            </div>
        </div>    
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion">Liquid Waste Management<span class="icon">+</span></button>
        <div class="panel">
            <p>In order to avoid any untoward effects and impacts of the liquid effluents, the University
                          has
                          established its own Sewage Treatment Plant (STP)which has the capacity of 1.5 MLD for the
                          disposal of
                          liquid effluent.
                          After the STP process the treated water is used for the irrigation of agriculture field,
                          grounds,
                          parks etc in the University campus.</p>
                        <div class="row justify-content-center gutter-30 col-mb-5">
                          <div class="col-sm-4 col-md-6">
                            <div
                              class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                              <div class="team-image">
                                <img src="https://www.tmu.ac.in/img/facilities/university_campus/stp/5.jpg" alt="">
                              </div>
                              <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                  <h4>STP Plant </h4><span class="fst-normal" style="font-size:16px; font-family:'poppins';"><i class="fa-solid fa-location-dot"></i>
                                    TMU
                                    Campus</span>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-4 col-md-6">
                            <div
                              class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                              <div class="team-image">
                                <img src="https://www.tmu.ac.in/img/facilities/university_campus/stp/10.jpg" alt="">
                              </div>
                              <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                  <h4>STP Plant </h4><span class="fst-normal" style="font-size:16px; font-family:'poppins';"><i class="fa-solid fa-location-dot"></i>
                                    TMU
                                    Campus</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
         </div>
    <hr class="horizontal-line">

    <button class="careers-accordion"> Biomedical Waste Management<span class="icon">+</span></button>
    <div class="panel">
            <p>The University has signed MoU with <a href="https://www.tmu.ac.in/pdf/mou_sp%20green.pdf">SP
                            Green
                            Light Environment Waste Management LLP</a>, 1st Floor, Tiwari Market, Opp Ram Janki Mandir,
                          Bareilly
                          – 243001 for the collection & disposal of biomedical waste.</p>
    </div>
    <hr class="horizontal-line">

    <button class="careers-accordion"> E-Waste Management<span class="icon">+</span></button>
    <div class="panel">
                     <p>The University has signed the <a
                          href="https://www.tmu.ac.in/pdf/mous/mou_ewaste_management.pdf">MoU </a> with Govt. authorized
                        vendor
                        namely Exigo Recycling Private Limited, 2nd floor, S-16, Greater Kailash- 1, New Delhi 110046
                        for the
                        disposal Electronic Waste. The company ensures use of best available technology for the
                        management of
                        electronic waste disposal and also abides with the laws as being issued by the government from
                        time to
                        time. The University ensures that the service provider for E-waste management abides with all
                        applicable
                        laws, rules, regulations,
                        govt. orders & applicable code of practice under the MoU with the company. The MoU with the
                        company is
                        renewed every five years since 2016.</p>
    </div>
    <hr class="horizontal-line">

    <button class="careers-accordion">Waste Recycling System<span class="icon">+</span></button>
    <div class="panel">
                    <div class="row justify-content-center gutter-30 col-mb-5">
                        <div class="col-sm-7 col-md-7">
                          <p>In order to minimize landfill waste, the University has adopted an effective recycling
                            system where in the
                            biodegradable solid waste like tree leaf, grass etc are collected from the campus and dumped
                            in the compost
                            unit of College of Agriculture Sciences to produce organic fertilizers.The fertilizer thus
                            produce is used
                            by
                            the University for gardening, nursery preparation & floriculture.Besides the University also
                            educate concern
                            in the campus about the significance of waste recycling system. The University has well
                            managed mechanism
                            for
                            the recycling of biodegradable waste.</p>
                        </div>
                        <div class="col-sm-5 col-md-5">
                          <div
                            class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                              <img
                                src="https://www.tmu.ac.in/img/facilities/institutional…lues/waste_management/waste%20compost%20unit.jpeg"
                                alt="">
                            </div>
                            <div class="team-desc p-2">
                              <div class="team-title pt-0">
                                <h4>Waste Compost Unit</h4><span class="fst-normal" style="font-size:16px; font-family:'poppins';"><i class="fa-solid fa-building"></i>
                                  TMU
                                  Campus</span>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
            </div>
    <hr class="horizontal-line">

    <button class="careers-accordion">Hazardous Chemicals & Radioactive Waste Management<span class="icon">+</span></button>
        <div class="panel">
            <div class="row justify-content-center gutter-30 col-mb-5">

                            <div class="col-sm-5 col-md-5">
                              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                  <img
                                    src="	https://www.tmu.ac.in/img/facilities/institutional_values/waste_management/ETP.jpeg"
                                    alt="">
                                </div>
                                <div class="team-desc p-2">
                                  <div class="team-title pt-0">
                                    <h4>Effluent Treatment Plant</h4><span class="fst-normal" style="font-size:16px; font-family:'poppins';"><i
                                        class="fa-solid fa-buidling"></i> TMU
                                      Campus</span>
                                  </div>
                                </div>
                              </div>
                            </div>  
                              <div class="col-sm-7 col-md-7">
                                <p>The University follows the UGC guidelines for procurement, storage, usage & disposal
                                  of hazardous chemicals & radioactive waste. In view of the same the University has established its
                                  own Effluent Treatment Plant (ETP) with the capacity of 200 KLDfor the disposal of hazardous
                                  chemicals. In accordance with the UGC guidelines the University has designated Dr. Vijay Pratap Singh as the
                                  Radiation Safety Officer (RSO) who is responsible for procurement, storage, usage & disposal
                                  ofradioisotopes use in the campus as per the regulation laid down by Atomic Energy Regulatory Board (AERB). The
                                  RSO also ensures the radiation safety guidelines and requirements are followed in all concerned
                                  laboratories. The University has well defined SOPs for hazardous chemicals & radioactive waste management system
                                  which are displayed in respective laboratories.</p>
                              </div>
                            </div>
                          </div>
    <hr class="horizontal-line">



    </div>
  </div>
  </div>
  </div>
</section><!-- #content end -->

	</div><!-- #wrapper end -->
	<br /><br />

	<script>
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
