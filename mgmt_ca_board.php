<?php include 'head.php'; ?>

<style>
.vh-75 {
    height: 0vh !important;
  }

  p{
    font-size:14px; 
    margin:0 0 10px 0;
    text-align:justify;
  }

  .table > :not(caption) > * > * {
  padding:0.5rem !important;
  color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
  background-color: var(--bs-table-bg);
  border-bottom-width: var(--bs-border-width);
  box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
  font-size:14px;
}

ul{
    margin-left:20px;
}

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
</style>



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

<?php
 include 'sidebar/management_sidebar.php';
?>
	<div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5">
        <h2 class="text-center" style="color:#001055;
			text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Corporate <span class="d-block d-sm-inline"> Advisory Board </span></h2>

                <div class="container">  
                    <div class="row">
                        <p>For any professional institution the interaction with academic and corporate world is of great importance. College has Corporate Advisory Board including Principal (as Chair Person), Head Training & Placement and members from the industries. The Board members provides advice and guidance on academic program to the college as a whole or to individual academic departments. This helps ensure our curricula remain relevant and rigorous. Corporate Advisory Board members also interact with faculty & Students (SPCC members) as mentors and as guest speakers in classes, and provide internship and job opportunities to our students.</p>
                    </div>
            <div class="row">
			
            <div class="container my-4">
            <ul class="nav nav-tabs justify-content-center py-2 gap-md-5" id="myTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button" role="tab" aria-controls="Tab1" aria-selected="true"><i class="fas fa-lightbulb"></i> KEY OBJECTIVES OF CORPORATE ADVISORY BOARD</button>
                </li>
            </ul>
            <div class="tab-content second ps-5 px-md-5" id="myTabContent">
                <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <ul class="m-ol-list ps-2 mt-2">
                        <li>Helps in revising the curriculum and teaching methodology as per corporate need.</li>
                         <li>Participate in our Employability Enhancement Training Programs available with us.</li>
                         <li>Conducting faculty development projects with well designed timelines.</li>
                        <li>Support in conducting various national level Seminars / Conferences / Workshops.</li>
                        <li>Advising us on value added courses as per the growing needs of the industry.</li>
                        <li>Developing entrepreneurial abilities, by providing projects that engage students in ‘design to delivery solution’ to improve the quality.</li>
                        <li>Setting up ‘labs’ within institute to get research and innovation.</li>
                        <li>Advising and helping us on better placements and internships.</li>
                    </ul>
                </div>
            </div>
        </div>    

        <div class="row">
        <hr class="horizontal-line">
                    <button class="careers-accordion">Committee Members of Training & Placement Cell<span class="icon">+</span> </button>
                <div class="panel">
            <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed mb-none">
                        <thead>
                                <th style="text-align:center;">S. No.</th>
                                <th style="text-align:center;">Contact Person</th>
                                <th style="text-align:center;">Designation</th>
                                <th style="text-align:center;width:150px;">Contact No.</th>
                                <th style="text-align:center;width:300px;">Email ID</th>
                        </thead>
                        <tbody>
							<tr>
								<td>1</td>
								<td>Prof. Vipin Jain<br>(Principal)</td>
								<td style="text-align:center">Secretary</td>
								<td style="text-align:center">+91-9917200216</td>
								<td><i class="fa-solid fa-envelope" style="color:#ff7A00;"></i> principal.management@tmu.ac.in</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Mr. Akash Bhatnagar<br>(Asst. Director. Corporate Relations)</td>
								<td style="text-align:center">Convener</td>
								<td style="text-align:center">+91-9927670666</td>
								<td><i class="fa-solid fa-envelope"  style="color:#ff7A00;"></i> placementcell@tmu.ac.in</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Mr. Pankaj Kumar<br>(Office Executive T&amp;P)</td>
								<td style="text-align:center">Member</td>
								<td style="text-align:center">+91-8449574444</td>
								<td><i class="fa-solid fa-envelope" style="color:#ff7A00;"></i> pankaj10s@gmail.com</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Dr. Manoj Agarwal<br>(HOD-Management)</td>
								<td style="text-align:center">Member</td>
								<td style="text-align:center">+91-7417606465</td>
								<td><i class="fa-solid fa-envelope" style="color:#ff7A00;"></i> manoj.mgmt@tmu.ac.in</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Dr. Ankit Kumar<br>(Associate Professor)</td>
								<td style="text-align:center">Member</td>
								<td style="text-align:center">+91-7891325606</td>
								<td><i class="fa-solid fa-envelope" style="color:#ff7A00;"></i> ankit.management@tmu.ac.in</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Dr. Vibhor Jain<br>(Associate Professor)</td>
								<td style="text-align:center">Member</td>
								<td style="text-align:center">+91-7906004675</td>
								<td><i class="fa-solid fa-envelope" style="color:#ff7A00;"></i> vibhor.management@tmu.ac.in</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Mr. Anand Joshi<br>(Asst. Professor)</td>
								<td style="text-align:center">Member</td>
								<td style="text-align:center">+91-9548467527</td>
								<td><i class="fa-solid fa-envelope" style="color:#ff7A00;"></i> anand.management@tmu.ac.in</td>
							</tr>
							<tr>
								<td>8</td>
								<td>Dr. Mohit Rastogi<br>(Asst. Professor)</td>
								<td style="text-align:center">Member</td>
								<td style="text-align:center">+91-7906212508</td>
								<td><i class="fa-solid fa-envelope" style="color:#ff7A00;"></i> mohit.management@tmu.ac.in</td>
							</tr>
                            <tr>
                                <td colspan="5"><b>Note:</b> All course coordinators are the default members of this committee.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


                <hr class="horizontal-line">
                    <button class="careers-accordion"> Committee Members of Industry Linkages<span class="icon">+</span> </button>
                <div class="panel">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-condensed mb-none">
                            <thead>
                                <th style="text-align:center">S. No.</th>
                                <th style="text-align:center">Contact Person</th>
                                <th style="text-align:center">Designation</th>
                                <th style="text-align:center;width:150px">Contact No.</th>
                                <th style="text-align:center;width:300px">Email ID</th>
                            </thead>
                        <tbody>
							<tr>
								<td>1</td>
								<td>Mr. Akash Bhatnagar</td>
								<td style="text-align:center">Secretary</td>
								<td style="text-align:center">+91-9927670666</td>
								<td><i class="fa-solid fa-envelope" style="color:#ff7A00;"></i> placementcell@tmu.ac.in</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Dr Manoj Agarwal</td>
								<td style="text-align:center">Member</td>
								<td style="text-align:center">+91-7417606465</td>
								<td><i class="fa-solid fa-envelope"  style="color:#ff7A00;"></i> manoj.mgmt@tmu.ac.in</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Dr. Amit Kansal</td>
								<td style="text-align:center">Member</td>
								<td style="text-align:center">+91-8899366366</td>
								<td><i class="fa-solid fa-envelope"  style="color:#ff7A00;"></i> amitk.management@tmu.ac.in</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Mrs. Anshu Chauhan</td>
								<td style="text-align:center">Member</td>
								<td style="text-align:center">+91-9720008334</td>
								<td><i class="fa-solid fa-envelope"  style="color:#ff7A00;"></i> anshu.management@tmu.ac.in</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Dr Mohit Rastogi</td>
								<td style="text-align:center">Member</td>
								<td style="text-align:center">+91-7906212508</td>
								<td><i class="fa-solid fa-envelope"  style="color:#ff7A00;"></i> mohit.management@tmu.ac.in</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Dr. Rachit Agarwal</td>
								<td style="text-align:center">External Member</td>
								<td style="text-align:center">+91-9837018121</td>
								<td><i class="fa-solid fa-envelope"  style="color:#ff7A00;"></i> rachit@urservices.org</td>
							</tr>						
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <br>
</div>
</div>
</div>

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

<?php include 'footer.php'; ?>    