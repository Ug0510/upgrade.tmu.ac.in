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
		/* Added */
		max-height:100%!important;
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


        				<div class="col-12 col-md-9 mt-3 mt-sm-0 pt-5">

          <div class="row mx-0">
          <h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">Water Conservation<span
                class="d-block d-sm-inline"> Initiatives</span></h2>
        
		<div class="container mb-5 mt-5">
    <hr class="horizontal-line">

    <button class="careers-accordion"> Rainwater Harvesting<span class="icon">+</span></button>
            <div class="panel active">
            <p>The University has it’s own water lake with the capacity of 1 crore liter water. This large lake serve the main purpose of rainwater harvesting. 
                        The rain water from the roofs tops of the buildings through drains, landscaped campus & RCC roads recharge the ground water table throughout the year.</p>
                      <div class="row justify-content-center gutter-30 col-mb-5">
                        <div class="col-sm-4 col-md-4">
                          <div
                            class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                              <img
                                src="https://www.tmu.ac.in/img/facilities/institutional_values/rwh/rwh1.jpeg"
                                alt="" style="height: 350px;">
                            </div>
                            <div class="team-desc p-2">
                              <div class="team-title pt-0">
                                <h4>Rain Water Harvesting System</h4><span
                                  class="fst-normal" style="font-size:16px; font-family:'poppins';"><i class="fa-solid fa-location-dot" ></i> TMU Campus</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4 col-md-4">
                          <div
                            class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                              <img
                                src="https://www.tmu.ac.in/img/facilities/institutional_values/rwh/rwh2.jpeg"
                                alt="" style="height: 350px;">
                            </div>
                            <div class="team-desc p-2">
                              <div class="team-title pt-0">
                                <h4>Rain Water Harvesting System</h4><span
                                  class="fst-normal" style="font-size:16px; font-family:'poppins';"><i class="fa-solid fa-location-dot"></i> TMU Campus</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4 col-md-4">
                          <div
                            class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                              <img
                                src="https://www.tmu.ac.in/img/facilities/institutional_values/rwh/rwh3.jpeg"
                                alt="" style="height: 350px;">
                            </div>
                            <div class="team-desc p-2">
                              <div class="team-title pt-0">
                                <h4>Rain Water Harvesting System</h4><span class="fst-normal" style="font-size:16px; font-family:'poppins';"><i
                                    class="fa-solid fa-location-dot"></i> TMU
                                  Campus</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>    
        </div>    
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion"> Bore Well / Open WellRecharge<span class="icon">+</span></button>
        <div class="panel">
                    <div class="row justify-content-center gutter-30 col-mb-5">
                          <div class="col-sm-4 col-md-4">
                            <div
                              class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                              <div class="team-image">
                                <img src="https://www.tmu.ac.in/img/facilities/university_campus/stp/5.jpg" alt="" style="height: 350px;">
                              </div>
                              <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                  <h4>Rain Water recharge well</h4><span class="fst-normal" style="font-size:16px; font-family:'poppins';"><i class="fa-solid fa-location-dot"></i>
                                    Teerthanker Mahaveer University Campus</span>
                                </div>
                              </div>
                            </div>
                          </div>

                            <div class="col-sm-8 col-md-8">
                            <p>The University has operational Open Well recharge system to increase the water table.</p>
                            </div>
                          </div>
         </div>
    <hr class="horizontal-line">

    <button class="careers-accordion">  Construction of Tanks & Bunds<span class="icon">+</span></button>
    <div class="panel">
    <div class="row justify-content-center gutter-30 col-mb-5">

<div class="col-sm-8 col-md-8">
  <p>The University has constructed three water tanks and all tanks fulfill the following purposes:
  <ul style="list-style-type:disc;">
    <li>Household water requirements for the campus residents including hostels.</li>
    <li>Fire safety water requirements.</li>
    <li>For the irrigation of agriculture field, grounds, parks etc.</li>
    </p>
</div>
<div class="col-sm-4 col-md-4">
  <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
    <div class="team-image">
      <img src="https://www.tmu.ac.in/img/facilities/institutional_values/rain_water.jpg" alt=""
        style="height: 350px;">
    </div>
    <div class="team-desc p-2">
      <div class="team-title pt-0">
        <h4>Rain Water recharge well</h4><span class="fst-normal" style="font-size:16px; font-family:'poppins';"><i class="fa-solid fa-location-dot"></i>
          Teerthanker Mahaveer University Campus</span>
      </div>
    </div>
  </div>
</div>
</div>
    </div>
    <hr class="horizontal-line">

    <button class="careers-accordion">Waste Recycling System<span class="icon">+</span></button>
    <div class="panel">
        <div class="row justify-content-center gutter-30 col-mb-5">
            <div class="col-sm-4 col-md-4">
                <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                    <div class="team-image">
                        <img src="https://www.tmu.ac.in/img/facilities/institutional_values/rain_water.jpg" alt="" style="height: 350px;">
                    </div>
                    <div class="team-desc p-2">
                        <div class="team-title pt-0">
                            <h4>Sewage Treatment Plan</h4><span class="fst-normal" style="font-size:16px; font-family:'poppins';"><i class="fa-solid fa-location-dot"></i> Teerthanker Mahaveer University Campus</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-8">
                <p>The University has established STP (Sea wage Treatment Plant) as per standard norms for the purpose of waste water recycling.</p>
            </div> 
        </div>    
    </div>
    <hr class="horizontal-line">

    <button class="careers-accordion">Maintenance of Water Bodies & Distribution System in the Campus<span class="icon">+</span></button>
        <div class="panel">
        <p>The University has separate maintenance department to regulate, maintain & regular distribution of water in the campus through water tanks.</p>
          <h3><strong>Demand of Water</strong></h3>

          <table class="table table-bordered table-striped">
                        <thead>
                        <th>Particulars</th>
      <th>Unit</th>
      <th>Liter / Day (Approx.)</th>
      <th>Total (In Lt.)</th>
                        </thead>
                        <tbody>
                        <tr>
      <td>Hospital</td>
      <td>1000</td>
      <td>450 Lt./Bed</td>
      <td>450000</td>
    </tr>
    <tr>
      <td>Campus Blocks</td>
      <td>5000</td>
      <td>135 Lt./Person</td>
      <td>675000</td>
    </tr>
    <tr>
      <td>Visitors</td>
      <td>7000</td>
      <td>30 Lt./Person</td>
      <td>210000</td>
    </tr>
    <tr>
      <td colspan="3" style="text-align:center;"><strong>TOTAL</strong></td>
      <td><strong>1335000</strong></td>
    </tr>
    </tbody>
     </table>
            <h3><strong>Water Treatment by (1.5 MLD) S.T.P. </strong></h3>
            <p>Waste Water Generation is 80% of Total Supply = 1068000 Lt./Day.</p>

            <h3><strong>Treated Water Used</strong></h3>
            <p><ul style="list-style-type:decimal;"><li>In Horticulture : 600000 Lt./Day</li><li>In Agriculture : 400000 Lt./Day</li></ul></p>

            <h3><strong>Note</strong></h3>
            <p><ul style="list-style-type:decimal;"><li>Usage of Water is Variable <b>(Due to different Weather Condition)</b>.</li><li>The variation of used treated water is maintained through reservoir of capacity 1Cr. Lt.</li></ul></p>
    </div>
    <hr class="horizontal-line">



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
