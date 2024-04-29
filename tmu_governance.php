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
</style>
<style>
	
.color{
color:#ff7a00!important;
}

h3{
margin:0 0 5px 0;	
}

.font-body {
  font-size:22px;
  color:#001055;
  font-weight: 700;
}

p {
  margin-bottom:15px!important; 
}

.table > :not(caption) > * > * {
  padding:0.5rem !important;
  color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
  background-color: var(--bs-table-bg);
  border-bottom-width: var(--bs-border-width);
  box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
}
.fa-solid.fa-file-pdf:hover {
color: #001055;
justify-content:center;
}
</style>


	<?php
 include 'sidebar/about_tmu_sidebar.php';
?>
                <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">
                    <div class="col-md-12">
                        <p style="text-align:justify">The Teerthanker Mahaveer University Uttar Pradesh Act, 2008 (U.P. Act No. 30 of 2008) sets the governance model for the university. The prominent bodies entrusted to provide governance include; University Court, Planning Board, Executive Council, Academic Council and Finance Committee. Eminent personalities from academia, industry and social life represent these bodies.</p>
					</div>

                    <div class="container mb-5 mt-5">
    <hr class="horizontal-line">

    <button class="careers-accordion">GOVERNING BODY<span class="icon">+</span></button>
    <div class="panel active">
        <table class="table table-bordered">
            <thead>
                <tr style="text-align:center">
                    <th style="text-align:center;width:180px">Name</th>
                    <th style="text-align:center;width:180px">Designation</th>
                    <th style="text-align:center">Organization & Address</th>
                    <th style="text-align:center">Status</th>
				</tr>
			</thead>
            <tbody>
                <tr>
																																																																																		<tr>
														<td>Shri Suresh Jain</td>
														<td>Chancellor</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Chairman</td>
													</tr>
																																																																																																																																												<tr>
														<td>Shri Manish Jain</td>
														<td>Group Vice Chairman</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. Raghuvir Singh</td>
														<td>Vice Chancellor</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Smt. Rinku Mittal</td>
														<td></td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Ms. Arunima Mittal</td>
														<td></td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Shri Akshat Jain</td>
														<td></td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Shri Vipin Jain</td>
														<td></td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Shri Ashu Jain</td>
														<td></td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Ms. Swati Jain</td>
														<td></td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Shri D. K. Jain</td>
														<td>Legal Expert</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Prof. R. K. Mittal</td>
														<td>Vice Chancellor</td>
														<td>Chaudhary Bansi Lal University, Hansi Road, Bhiwani (Haryana)</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Shri Sandeep Vaish</td>
														<td>Financial Expert</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																							<tr>
														<td>Shri B. N. Vij</td>
														<td>Industrialist</td>
														<td>Asian Handicrafts, </td>
														<td>Member</td>
													</tr>
																																																																							<tr>
														<td>Dr. Aditya Kr. Sharma</td>
														<td>Registrar</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member Secretary</td>
													</tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																							                                        </tbody>
									</table> 
                                    <h3 class="mb-2 ms-2">Minutes of Meeting of the Governing Body</h3>   
                                    
                    <div class="col-md-3">
      					<div class="card text-center">
        					<div class="card-body">
          						<!-- Icon -->
          							<i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
          						<!-- Document Name -->
          							<h5 class="card-title">Minutes of Meeting of 01st Meeting of the Governing Body | Nov 10, 2020</h5>
          						<!-- View PDF Button -->
          						<a href="https://www.tmu.ac.in/pdf/governing_body_minutes/mom_1st_meeting.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
        					</div>
      					</div>
    				</div>
                                </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion">EXECUTIVE COUNCIL<span class="icon">+</span></button>
    <div class="panel">
    <table class="table table-bordered">
                                        <thead>
                                            <tr style="text-align:center">
                                                <th style="text-align:center;width:180px">Name</th>
                                                <th style="text-align:center;width:180px">Designation</th>
                                                <th style="text-align:center">Organization & Address</th>
                                                <th style="text-align:center">Status</th>
											</tr>
                                        </thead>
                                        <tbody>
																																				<tr>
														<td>Prof. Raghuvir Singh</td>
														<td>Vice Chancellor</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Chairperson</td>
													</tr>
																																																																																																																																												<tr>
														<td>Shri Akshat Jain</td>
														<td>Member, Governing Body</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Ms. Arunima Mittal</td>
														<td>Member, Governing Body</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. Manjula Jain</td>
														<td>Dean (Academics)</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. R. M. Dubey</td>
														<td>Former Vice Chancellor</td>
														<td>IFTM University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Prof. Kuldeep Singh Bansal</td>
														<td>Chairman, Department of Mathematics</td>
														<td>Guru Jambheshwar University of Science & Technology, Hisar, Haryana</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. Jai Pal Vyast</td>
														<td>MLC</td>
														<td>U. P. State Legislative Council, Moradabad, Uttar Pradesh</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Shri Vishal Sehgal</td>
														<td>Director</td>
														<td>Nischay Educorp Private Limited, New Delhi</td>
														<td>Special Invitee</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. Rakesh K. Dwivedi</td>
														<td>Principal</td>
														<td>College of Computing Sciences & IT, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Dr. Ankita Jain</td>
														<td>Associate Professor</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Dr. Harshit Jain</td>
														<td>Finance Officer</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Ex-Officio</td>
													</tr>
																																																																																																																					<tr>
														<td>Dr. Aditya Kr. Sharma</td>
														<td>Registrar</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member Secretary</td>
													</tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																	                                        </tbody>
									</table>
                                    <h3 class="ms-2 mb-2">Minutes of Meeting of the Executive Council</h3>
                                    <div class="row">

                                    <div class="col-md-3">
      					<div class="card text-center">
        					<div class="card-body">
          						<!-- Icon -->
          							<i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
          						<!-- Document Name -->
          							<h5 class="card-title">Minutes of Meeting of 20th Meeting of the Executive Council | May 14, 2022</h5>
          						<!-- View PDF Button -->
          						<a href="https://www.tmu.ac.in/pdf/ec_minutes/EC20_minutes.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
        					</div>
      					</div>
    				</div>

                    <div class="col-md-3">
      					<div class="card text-center">
        					<div class="card-body">
          						<!-- Icon -->
          							<i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
          						<!-- Document Name -->
          							<h5 class="card-title">Minutes of Meeting of 19th Meeting of the Executive Council | June 12, 2021</h5>
          						<!-- View PDF Button -->
          						<a href="https://www.tmu.ac.in/pdf/ec_minutes/EC19_minutes.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
        					</div>
      					</div>
    				</div>

                    <div class="col-md-3">
      					<div class="card text-center">
        					<div class="card-body">
          						<!-- Icon -->
          							<i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
          						<!-- Document Name -->
          							<h5 class="card-title">Minutes of Meeting of 18th Meeting of the Executive Council | August 17, 2020</h5>
          						<!-- View PDF Button -->
          						<a href="https://www.tmu.ac.in/pdf/ec_minutes/EC18_minutes.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
        					</div>
      					</div>
    				</div>

                    <div class="col-md-3">
      					<div class="card text-center">
        					<div class="card-body">
          						<!-- Icon -->
          							<i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
          						<!-- Document Name -->
          							<h5 class="card-title">Minutes of Meeting of 17th Meeting of the Executive Council | August 17, 2019</h5>
          						<!-- View PDF Button -->
          						<a href="https://www.tmu.ac.in/pdf/ec_minutes/EC17_minutes.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
        					</div>
      					</div>
    				</div>

                    <div class="col-md-3">
      					<div class="card text-center">
        					<div class="card-body">
          						<!-- Icon -->
          							<i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
          						<!-- Document Name -->
          							<h5 class="card-title">Minutes of Meeting of 16th Meeting of the Executive Council | May 25, 2019</h5>
          						<!-- View PDF Button -->
          						<a href="https://www.tmu.ac.in/pdf/ec_minutes/EC16_minutes.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
        					</div>
      					</div>
    				</div>

                    <div class="col-md-3">
      					<div class="card text-center">
        					<div class="card-body">
          						<!-- Icon -->
          							<i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
          						<!-- Document Name -->
          							<h5 class="card-title">Minutes of Meeting of 15th Meeting of the Executive Council | March 10, 2018</h5>
          						<!-- View PDF Button -->
          						<a href="https://www.tmu.ac.in/pdf/ec_minutes/EC15_minutes.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
        					</div>
      					</div>
    				</div>

                    <div class="col-md-3">
      					<div class="card text-center">
        					<div class="card-body">
          						<!-- Icon -->
          							<i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
          						<!-- Document Name -->
          							<h5 class="card-title">Minutes of Meeting of 14th Meeting of the Executive Council | November 11, 2017</h5>
          						<!-- View PDF Button -->
          						<a href="https://www.tmu.ac.in/pdf/ec_minutes/EC14_minutes.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
        					</div>
      					</div>
    				</div>

                                    </div>
    </div>
    <hr class="horizontal-line">

    <button class="careers-accordion">ACADEMIC COUNCIL<span class="icon">+</span></button>
    <div class="panel">
    <table class="table table-bordered">
                                        <thead>
                                            <tr style="text-align:center">
                                                <th style="text-align:center;width:180px">Name</th>
                                                <th style="text-align:center;width:180px">Designation</th>
                                                <th style="text-align:center">Organization & Address</th>
                                                <th style="text-align:center">Status</th>
											</tr>
										</thead>
                                        <tbody>
																																																											<tr>
														<td>Prof. Raghuvir Singh</td>
														<td>Vice Chancellor</td>
														<td>Teerthankar Mahaveer University., Delhi Road, Moradabad</td>
														<td>Chairperson</td>
													</tr>
																																																																																																																																												<tr>
														<td>Dr. S. K. Sharma</td>
														<td>Former Professor & Head</td>
														<td>Department of Internal Medicine, All India Institute of Medical Sciences, New Delhi</td>
														<td>Nominated Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. A. R. Tripathi</td>
														<td>Professor</td>
														<td>Faculty of Commerce & Management Studies, Banara Hindu University, Varansi</td>
														<td>Nominated Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. Manjula Jain</td>
														<td>Dean (Academics)</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																																																																																																																								<tr>
														<td>Prof (Dr.) Shyamoli Dutta</td>
														<td>Principal</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. Manish Goyal</td>
														<td>Principal</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. Rakesh Kumar Dwivedi</td>
														<td>Principal</td>
														<td>Faculty of Engineering, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. Rakesh K. Dwivedi</td>
														<td>Principal</td>
														<td>College of Computing Sciences & IT, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Dr. Vipin Jain</td>
														<td>Principal</td>
														<td>TMIMT College of Management, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Prof. S.K. Kulkarni</td>
														<td>Principal</td>
														<td>College of Nursing, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Dr. Shivanshu Gupta</td>
														<td>Principal</td>
														<td>College of Paramedical Sciences, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																							<tr>
														<td>Prof. Anurag Verma</td>
														<td>Principal</td>
														<td>College of Pharmacy, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																							<tr>
														<td>Dr. Rashmi Mehrotra</td>
														<td>Principal</td>
														<td>Faculty of Education, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																							<tr>
														<td>Dr. Amit Sharma</td>
														<td>Principal</td>
														<td>University Polytechnic, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. M. P. Singh</td>
														<td>Director- Students Welfare</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof (Dr.) R. N. Krishnia</td>
														<td>Director</td>
														<td>Center for Teaching Learning & Development, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. S. K. Jain</td>
														<td>Head, Department of Anatomy</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Sangeeta Kapoor</td>
														<td>Head, Department of Biochemistry</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Jayballabh Kumar</td>
														<td>Head, Department of Physiology</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Seema Awasthi</td>
														<td>Head, Department of Pathology</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Prithpal Singh Matreja</td>
														<td>Head, Department of Pharmacology</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Vinod Kumar</td>
														<td>Head, Department of Forensic Medicine</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Sudhir Kumar Gupta</td>
														<td>Head, Department of Community Medicine</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Vinod Kumar Singh</td>
														<td>Head, Department of General Medicine</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Mazhar Maqusood</td>
														<td>Head, Department of TB & Chest</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Sanath Aithal</td>
														<td>Head, Department of Dermatology</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. S. Nagendran</td>
														<td>Head, Department of Psychiatry</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Rupa Singh</td>
														<td>Head, Department of Paediatrics</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. N. K. Singh</td>
														<td>Head, Department of General Surgery</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Ashish Chandra</td>
														<td>Head, Department of Opthalmology</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Rehana Najam</td>
														<td>Head, Department of OBG</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Gurdeep Singh Jheetay</td>
														<td>Head, Department of Anaesthesia</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Satish Pathak</td>
														<td>Head, Department of Radiology</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Sunil M. K.</td>
														<td>Head, Department of Oral Medicine Diagnosis & Radiology</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Arun K. V.</td>
														<td>Head, Department of Oral & Maxillofacial Surgery</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Nirmal</td>
														<td>Head, Department of Prosthodontics and Crown & Bridge</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Ramakrishan Yeluri</td>
														<td>Head, Department of Pedodontics & Preventive Dentistry</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Atul Jain</td>
														<td>Head, Department of Conservative Dentistry & Endodontics</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Meghanand T. Nayak</td>
														<td>Head, Department of Oral Pathology & Microbiology</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Deepa D.</td>
														<td>Head, Department of Periodontology</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Pradeep Tangde</td>
														<td>Head, Department of Public Health Dentistry</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Shivani Kaul</td>
														<td>Head</td>
														<td>Department of Physiotherapy, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Mr. Ravindra Dev</td>
														<td>Head</td>
														<td>Department of Fine Arts, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Manu Mishra</td>
														<td>Head</td>
														<td>TMIMT College of Physical Education, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Manoj Agarwal</td>
														<td>Head, Department of Management</td>
														<td>TMIMT College of Management, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. R. K. Jain</td>
														<td>Head, Department of Civil Engineering</td>
														<td>Faculty of Engineering, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td></td>
														<td>Head, Department of Mechanical Engineering</td>
														<td>Faculty of Engineering, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Garima Goswami</td>
														<td>Head, Department of Electrical Engineering</td>
														<td>Faculty of Engineering, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Ashendra Saxena</td>
														<td>Head, Department of Computer Science</td>
														<td>College of Computing Sciences & IT, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Ajit Kumar</td>
														<td>Head, Department of Mathematics</td>
														<td>Faculty of Engineering, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Amit Sharma</td>
														<td>Head, Department of Physics</td>
														<td>Faculty of Engineering, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Varun Singh</td>
														<td>Head, Department of Chemistry</td>
														<td>Faculty of Engineering, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Piyush Mittal</td>
														<td>Head, Pharm.D. Programme</td>
														<td>College of Pharmacy, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. S. C. Dinda</td>
														<td>Head, Department of pharmaceutics</td>
														<td>College of Pharmacy, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Milind Pandey</td>
														<td>Head, Department of Pharmacognosy</td>
														<td>College of Pharmacy, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. A. Alphine Prabhahar</td>
														<td>Head, Department of Pharmaceutical Chemistry</td>
														<td>College of Pharmacy, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Mr. Prabhu John</td>
														<td>Head, Department of Community Nursing</td>
														<td>College of Nursing, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Ms. Hemlatha</td>
														<td>Head, Department of Obstetrics & Gynaecological Nursing</td>
														<td>College of Nursing, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Mr. Mahantesh Kargi</td>
														<td>Head, Department of Psychiatric Nursing</td>
														<td>College of Nursing, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Mr. Bashwaraj Mudhol</td>
														<td>Head, Department of Paediatric Nursing</td>
														<td>College of Nursing, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Ruchikant</td>
														<td>Head, Department of Medical Lab Technician</td>
														<td>College of Paramedical Sciences, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Mr. Rakesh Yadav</td>
														<td>Head, Department of Optometry</td>
														<td>College of Paramedical Sciences, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Ms. Priyanka Singh</td>
														<td>Head, Department of RIT</td>
														<td>College of Paramedical Sciences, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Mr. Ravi Kumar</td>
														<td>Head, Department of Forensic Science</td>
														<td>College of Paramedical Sciences, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Mr. Amit Verma</td>
														<td>Head</td>
														<td>College of Law & Legal Studies, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Nidhi Sharma</td>
														<td>Professor, Department of Anatomy</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Ashutosh Kumar</td>
														<td>Professor, Department of Pathology</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Sadhna Singh</td>
														<td>Professor, Department of Community Medicine</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. K. V. K. Sudhakar</td>
														<td>Professor, Department of ENT</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Ajay Kumar</td>
														<td>Professor, Department of General Medicine</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Harpreet Singh</td>
														<td>Professor, Department of General Surgery</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Kanchan Rani</td>
														<td>Professor, Department of OBG</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Baljeet Maini</td>
														<td>Professor, Department of Paediatrics</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Rohit K. Varshney</td>
														<td>Professor, Department of Anaesthesia</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Shruti Chandak</td>
														<td>Professor, Department of Radiology</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Prerna Gupta</td>
														<td>Professor, Department of Psychiatry</td>
														<td>Medical College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Ashish Mehra</td>
														<td>Professor, Department of Management</td>
														<td>TMIMT College of Management, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. R. C. Tripathi</td>
														<td>Professor, Department of Computer Science</td>
														<td>College of Computing Sciences & IT, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. K. A. Gupta</td>
														<td>Professor, Basic Science</td>
														<td>Faculty of Engineering, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. M. Jasline</td>
														<td>Professor, Nursing</td>
														<td>College of Nursing, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Navneet Kumar</td>
														<td>Professor, Paramedical Sciences</td>
														<td>College of Paramedical Sciences, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Balraj Singh</td>
														<td>Professor, Agriculture</td>
														<td>College of Agriculture Sciences, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Mukesh Kumar</td>
														<td>Professor, Orthodontics</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Upendra Malik</td>
														<td>Professor, OMDR</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. D. S. Gupta</td>
														<td>Professor, Oral & Maxilofacial Surgery</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Abhinav Agarwal</td>
														<td>Professor, Endodontics</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Rachna Bahugna</td>
														<td>Professor, Pedodontics & Preventice Dentistry</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Prof. Thanveer K.</td>
														<td>Professor, Public Health Dentistry</td>
														<td>Dental College & Research Centre, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Rajiv Verma</td>
														<td>Associate Professor, Management</td>
														<td>TMIMT College of Management, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Vibhor Jain</td>
														<td>Associate Professor, Management</td>
														<td>TMIMT College of Management, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Mr. Roopal Gupta</td>
														<td>Assistant Professor, Computer Science</td>
														<td>College of Computing Sciences & IT, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Mr. Rajendra Pandey</td>
														<td>Assistant Professor, Computer Science</td>
														<td>College of Computing Sciences & IT, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																<tr>
														<td>Dr. Aditya Kr. Sharma</td>
														<td>Registrar</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member Secretary</td>
													</tr>
										    </tbody>
									</table>

                                    <h3 class="mb-2 ms-3">Minutes of Meeting of Academic Council</h3>
                                    <div class="row">
                                    <div class="row">

<div class="col-md-3">
<div class="card text-center">
<div class="card-body">
<!-- Icon -->
  <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
<!-- Document Name -->
  <h5 class="card-title">Minutes of the 21st meeting of Academic Council | September 14, 2023</h5>
<!-- View PDF Button -->
<a href="https://www.tmu.ac.in/pdf/academic_council_minutes/21st_MOM_IQAC_compressed_new.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card text-center">
<div class="card-body">
<!-- Icon -->
  <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
<!-- Document Name -->
  <h5 class="card-title">Minutes of Meeting of 19th Meeting (Online Mode) of the Academic Council | April 27, 2022</h5>
<!-- View PDF Button -->
<a href="https://www.tmu.ac.in/pdf/academic_council_minutes/april_2022.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card text-center">
<div class="card-body">
<!-- Icon -->
  <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
<!-- Document Name -->
  <h5 class="card-title">Minutes of Meeting of 18th Meeting (Online Mode) of the Academic Council | March 20, 2021</h5>
<!-- View PDF Button -->
<a href="https://www.tmu.ac.in/pdf/academic_council_minutes/april_2021_compressed.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card text-center">
<div class="card-body">
<!-- Icon -->
  <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
<!-- Document Name -->
  <h5 class="card-title">Minutes of Meeting of 17th Meeting (Online Mode) of the Academic Council | July 30, 2020</h5>
<!-- View PDF Button -->
<a href="https://www.tmu.ac.in/pdf/academic_council_minutes/july_2020_compressed.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card text-center">
<div class="card-body">
<!-- Icon -->
  <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
<!-- Document Name -->
  <h5 class="card-title">Minutes of Meeting of 16th Meeting (Online Mode) of the Academic Council | August 17, 2019</h5>
<!-- View PDF Button -->
<a href="https://www.tmu.ac.in/pdf/academic_council_minutes/august_2019_compressed.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card text-center">
<div class="card-body">
<!-- Icon -->
  <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
<!-- Document Name -->
  <h5 class="card-title">Minutes of Meeting of 15th Meeting (Online Mode) of the Academic Council | May 25, 2019</h5>
<!-- View PDF Button -->
<a href="https://www.tmu.ac.in/pdf/academic_council_minutes/may_2019_compressed.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card text-center">
<div class="card-body">
<!-- Icon -->
  <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
<!-- Document Name -->
  <h5 class="card-title">Minutes of Meeting of 14th Meeting (Online Mode) of the Academic Council | November 02, 2018</h5>
<!-- View PDF Button -->
<a href="https://www.tmu.ac.in/pdf/academic_council_minutes/november_2018_compressed.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
</div>
</div>
</div>


<div class="col-md-3">
<div class="card text-center">
<div class="card-body">
<!-- Icon -->
  <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
<!-- Document Name -->
  <h5 class="card-title">Minutes of Meeting of 13th Meeting (Online Mode) of the Academic Council | March 10, 2018</h5>
<!-- View PDF Button -->
<a href="https://www.tmu.ac.in/pdf/academic_council_minutes/march_2018_compressed.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card text-center">
<div class="card-body">
<!-- Icon -->
  <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
<!-- Document Name -->
  <h5 class="card-title">Minutes of Meeting of 12th Meeting (Online Mode) of the Academic Council | September 25, 2017 </h5>
<!-- View PDF Button -->
<a href="https://www.tmu.ac.in/pdf/academic_council_minutes/september_2017_compressed.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card text-center">
<div class="card-body">
<!-- Icon -->
  <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
<!-- Document Name -->
  <h5 class="card-title">Minutes of Meeting of 11th Meeting (Online Mode) of the Academic Council | March 25, 2017</h5>
<!-- View PDF Button -->
<a href="https://www.tmu.ac.in/pdf/ac_minutes/AC11_0001.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card text-center">
<div class="card-body">
<!-- Icon -->
  <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
<!-- Document Name -->
  <h5 class="card-title">Minutes of Meeting of 10th Meeting (Online Mode) of the Academic Council | February 13, 2016</h5>
<!-- View PDF Button -->
<a href="https://www.tmu.ac.in/pdf/academic_council_minutes/february_2016_compressed.pdf" class="more-link fst-normal ms-2" style="font:'poppins'; font-size:14px!important;">Read More<i class="bi-arrow-right"></i></a>
</div>
</div>
</div>

</div>
                                    </div>
    </div>
    <hr class="horizontal-line">

    <button class="careers-accordion">FINANCE COMMITTEE<span class="icon">+</span></button>
    <div class="panel">
    <table class="table table-bordered">
                                        <thead>
                                            <tr style="text-align:center">
                                                <th style="text-align:center;width:180px">Name</th>
                                                <th style="text-align:center;width:180px">Designation</th>
                                                <th style="text-align:center">Organization & Address</th>
                                                <th style="text-align:center">Status</th>
											</tr>
										</thead>
                                        <tbody>
																																																																																																									<tr>
														<td>Shri Sandeep Vaish</td>
														<td>Financial Expert</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Chairperson</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. Raghuvir Singh</td>
														<td>Vice Chancellor</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																																																			<tr>
														<td>Sri Akshat Jain</td>
														<td>Member, Governing Body</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Ms Arunima Mittal</td>
														<td>Member, Governing Body</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Shri Gaurav Agarwal</td>
														<td>Chartered Accountant</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Dr. Harshit Jain</td>
														<td>Finance Officer</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Secretary</td>
													</tr>
																																																																																																																																												<tr>
														<td>Dr Aditya  Sharma</td>
														<td>Registrar</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Special Invitee</td>
													</tr>
																																																																																																																																												<tr>
														<td>Shri Ashish Jain</td>
														<td>Internal Auditor</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Special Invitee</td>
													</tr>
                                            </tbody>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								                                        </tbody>
                                    </table>
    </div>
    <hr class="horizontal-line">


    <button class="careers-accordion">PLANNING BOARD<span class="icon">+</span></button>
    <div class="panel">
    <table class="table table-bordered">
                                        <thead>
                                            <tr style="text-align:center">
                                                <th style="text-align:center;width:180px">Name</th>
                                                <th style="text-align:center;width:180px">Designation</th>
                                                <th style="text-align:center">Organization & Address</th>
                                                <th style="text-align:center">Status</th>
											</tr>
                                        </thead>
                                        <tbody>
																																																																																																																																<tr>
														<td>Shri Suresh Jain</td>
														<td>Chancellor</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Chairperson</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. Raghuvir Singh</td>
														<td>Vice Chancellor</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Er. Kamal Malhotra</td>
														<td>Architect</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																																																			<tr>
														<td>Shri Akshat Jain</td>
														<td>Member, Governing Body</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Ms Arunima Mittal</td>
														<td>Member, Governing Body</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Sri Ajay Garg</td>
														<td>Director (Hospital Administration)</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. Manjula Jain</td>
														<td>Dean (Academics)</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																																												<tr>
														<td>Prof. Vipin Jain</td>
														<td>Principal</td>
														<td>TMIMT College of Management, Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Sri Gaurav Aggarwal</td>
														<td>Chartered Accountant</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Dr. Harshit Jain</td>
														<td>Finance Officer</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Member</td>
													</tr>
																																																																																																																					<tr>
														<td>Dr. Aditya  Sharma</td>
														<td>Registrar</td>
														<td>Teerthanker Mahaveer University, Delhi Road, Moradabad</td>
														<td>Ex-officio Secretary</td>
													</tr>
                                            </tbody>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												                                        </tbody>
									</table>
    </div>
    <hr class="horizontal-line">

    <button class="careers-accordion">BOARD OF STUDIES<span class="icon">+</span></button>
    <div class="panel">
        <div class="table-responsive">
    <table class="table table-bordered">
                                        <thead>
											<tr>
                                                <th rowspan="2" style="text-align:center;vertical-align: text-top;">#</th>
												<th rowspan="2" style="text-align:center;vertical-align: text-top;">College / Department Name</th>
                                                <th rowspan="2" style="text-align:center;vertical-align: text-top;">Composition</th>
												<th colspan="5" style="text-align:center"><strong>Minutes of Meeting</strong></th>
											</tr>
                                            <tr style="text-align:center">
                                                <th style="text-align:center">2022-23</th>
                                                <th style="text-align:center">2021-22</th>
                                                <th style="text-align:center">2020-21</th>
												<th style="text-align:center">2019-20</th>
												<th style="text-align:center">2018-19</th>
												<th style="text-align:center">2017-18</th>
												<th style="text-align:center">2016-17</th>
											</tr>
                                        </thead>
                                        <tbody>
											<tr>
												<td style="text-align:center">1</td>
												<td>Medical College &amp; Research Centre<br><br>M.Sc. Medical Programme</td>
											
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/bos_composition_medical.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/Biochemistry.pdf" target="_blank">View(Biochemistry)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/TB_&_Chest_Board_of_Studies.pdf" target="_blank">View(TB_&_Chest)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/Radiology_BOS.pdf" target="_blank">View(Radiology)</a></center><br></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/Psychiatry_Board_of_Studies.pdf" target="_blank">View(Psychiatry)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/Pediatrics_BOS.pdf" target="_blank">View(Pediatrics)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/Pathology_BOS.pdf" target="_blank">View(Pathology)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/Orthopaedics_Board_of_studies_meeting2.pdf" target="_blank">View(Orthopaedics-2)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/Orthopaedics_Board_of_studies_meeting.pdf" target="_blank">View(Orthopaedics)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/ENT_BOS.pdf" target="_blank">View(ENT)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/Anaesthesiology_BOS.pdf" target="_blank">View(Anaesthesiology)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/Physiology.pdf" target="_blank">View(Physiology)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/pediatrics.pdf" target="_blank">View(Pediatrics)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/Anatomy.pdf" target="_blank">View(Anatomy)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/BOS_CM.pdf" target="_blank">View(Community Medicine)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2023-24/Microbiology.pdf" target="_blank">View(Microbiology)</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2021-22/tmmcrc_2021_22.pdf" target="_blank">View</a></center></td>
												<td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/2019-20/medical_bos.pdf" target="_blank">View</a><br><br><a href="https://www.tmu.ac.in/pdf/bos_minutes/Medical/ms_medical/2019-20/BOS_0004_merged.pdf" target="_blank">View</a></center></td>
												<td><center>-----</center></td>
												<td><center>-----</center></td>
												<td><center>-----</center></td>
											</tr>
											<tr>
												<td style="text-align:center">2</td>
												<td>Dental College &amp; Research Centre</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/bos_composition_dental.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Dental/2023-24/BOS_minutes_29_april_2023" target="_blank">View</a></center></td>
											    <td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Dental/2020-21/BOS_0002_merged.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Dental/2019-20/BOS_0001_BOS_0002_merged.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Dental/2018-19/BOS_0001_BOS_0002_merged.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Dental/2017-18/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Dental/2016-17/BOS_0001_BOS_0002_merged.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">3</td>
												<td>College of Nursing</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/2022/nursing.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Nursing/2023-24/BOS.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Nursing/2021-22/bos_nursing_21_22.pdf" target="_blank">View</a></center></td>
												<td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Nursing/2020-21/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Nursing/2018-19/BOS_0001_BOS_0002_merged.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Nursing/2017-18/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Nursing/2016-17/BOS_0001.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">4</td>
												<td>College of Pharmacy</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/2022/pharmacy.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Pharmacy/2023-24/Pharmacy_BOS.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Pharmacy/2021-22/bos_pharmacy_21_22.pdf" target="_blank">View</a></center></td>

											<td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Pharmacy/2020-21/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Pharmacy/2019-20/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Pharmacy/2018-19/BOS_0001_merged.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Pharmacy/2017-18/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Pharmacy/2016-17/BOS_0001.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">5</td>
												<td>College of Paramedical Sciences</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/bos_composition_paramedical.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Paramedical/2023-24/MOM_BOS_and_BOF_2023.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Paramedical/2021-22/bos_paramedical_21_22.pdf" target="_blank">View</a></center></td>

												<td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Paramedical/2020-21/BOS_16.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Paramedical/2019-20/BOS_20.07.2019.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Paramedical/2018-19/BOS.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Paramedical/2017-18/BOS_1.09.2017.pdf" target="_blank">View</a></center></td>
												<td><center>-----</center></td>
											</tr>
											<tr>
												<td style="text-align:center">6</td>
												<td>Department of Physiotherapy</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/2022/physiotherapy.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Physiotherapy/2023-24/BOS_Physiotherapy_2023_24.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Physiotherapy/2021-22/bos_physiotherapy_21_22.pdf" target="_blank">View</a></center></td>

										        <td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Physiotherapy/2020-21/Scan_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Physiotherapy/2019-20/Scan_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Physiotherapy/2018-19/bos physiotherapy 18-19_0001.pdf" target="_blank">View</a></center></td>
												<td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Physiotherapy/2016-17/Scan_0001.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">7</td>
												<td>College of Management</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/2022/tmimt.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Managment/2023-24/BOS_MOM_Management_31.07.2023.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Managment/2021-22/bos_tmimt_21_22.pdf" target="_blank">View</a></center></td>

											    <td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Managment/2020-21/BOS.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Managment/2019-20/BOS 1.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Managment/2018-19/Bos 2_BOS 3_BOS_merged.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Managment/2017-18/BOS_0001_merged.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Managment/2016-17/BOS 17.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">8</td>
												<td>College of Law &amp; Legal Studies</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/2022/law.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Law/2023-24/BOS_Law_college_2023_24.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Law/2021-22/bos_law_21_22.pdf" target="_blank">View</a></center></td>

									            <td><center>-----</center></td>
												<td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Law/2019-20/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Law/2018-19/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Law/2017-18/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Law/2016-17/BOS_0001.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">9</td>
												<td>College of Computing Sciences &amp; IT</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/2022/ccsit.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/CCSIT/2023-24/Minutes_of_Meeting_of_the_BOS.pdf" target="_blank">View</a></center></td>
									            <td><center>-----</center></td>
													
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/CCSIT/2020-21/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/CCSIT/2019-20/BOS_0001_BOS_0002_merged.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/CCSIT/2018-19/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/CCSIT/2017-18/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/CCSIT/2016-17/BoS -2016 ccsit.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">10</td>
												<td>Faculty of Engineering</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/2022/engineering.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2023-24/Chemistry.pdf" target="_blank">View(Chemistry)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2023-24/Civil.pdf" target="_blank">View(Civil)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2023-24/EC.pdf" target="_blank">View(EC)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2023-24/EE.pdf" target="_blank">View(EE)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2023-24/Mathematics.pdf" target="_blank">View(Mathematics)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2023-24/ME.pdf" target="_blank">View(ME)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2023-24/Mathematics.pdf" target="_blank">View(Mathematics)</a></center><br><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2023-24/Physics.pdf" target="_blank">View(Physics)</a></center></td>
									            <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2021-22/engineering_merged_2021_22_compressed.pdf" target="_blank">View</a></center></td>
												<td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2019-20/BOS CIVIL_0001_merged.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2018-19/bos_2018-19.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2017-18/BOS Mechanical_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/FOE/2016-17/BOS CIVIL_0001_merged.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">11</td>
												<td>College of Fine Arts</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/bos_composition_fine_arts.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Fine Arts/2023-24/BOS.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Fine Arts/2021-22/fine_arts_2021_22_compressed.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Fine Arts/2020-21/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Fine Arts/2019-20/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center>-----</td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Fine Arts/2017-18/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Fine Arts/2016-17/BOS_0001.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">12</td>
												<td>Faculty of Education</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/2022/education.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/education/2023-24/MOM_of_BOS_24.06.2023" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/education/2021-22/bos_fo_education_21_22.pdf" target="_blank">View</a></center></td>

										        <td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/education/2020-21/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/education/2019-20/BOS_0002.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/education/2018-19/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/education/2017-18/BOS_0001_BOS_0002_merged.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/education/2016-17/BOS_0001.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">13</td>
												<td>TMIMT College of Physical Education</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/2022/physical_education.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Physical Education/2023-24/BOS_Physical Education-2023-24.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Physical Education/2021-22/bos_physical_edu_21_22.pdf" target="_blank">View</a></center></td>

								                <td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Physical Education/2020-21/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Physical Education/2018-19/BOS_0002_merged.pdf" target="_blank">View</a></center></td>
												<td><center>-----</center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Physical Education/2016-17/BOS_0001_BOS_0002_merged.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">14</td>
												<td>College of Agriculture Sciences</td>
												
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_composition/bos_composition_agriculture.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Agriculture/2023-24/BOS_COAS_APRIL2023.pdf" target="_blank">View</a></center></td>
                                                <td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Agriculture/2021-22/bos_agriculture_21_22.pdf" target="_blank">View</a></center></td>

														<td><center>-----</center></td>									
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Agriculture/2020-21/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Agriculture/2019-20/BOS_0001.pdf" target="_blank">View</a></center></td>
												<td><center>-----</td>
												<td><center><a href="https://www.tmu.ac.in/pdf/bos_minutes/Agriculture/2017-18/Scan_0001.pdf" target="_blank">View</a></center></td>
												<td><center>-----</td>
											</tr>

										</tbody>
									</table>
									</div>
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

