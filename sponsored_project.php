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
		max-height:100%;
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
</style>

<?php
include 'sidebar/research_sidebar.php';
?>

        <div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5 ">

          <div class="row mx-0">
            <h2 class=" text-center" style="color:#001055;  text-transform: capitalize;
            font-weight:700!important; font-size:2.4vmax">Sponsored <span  class="d-block d-sm-inline"> Projects</span></h2>
        
		<div class="container mb-5 mt-5">
    <hr class="horizontal-line">

    <button class="careers-accordion">Government Funded Projects<span class="icon">+</span></button>
    <div class="panel active">
    <table class="table table-bordered">
										<thead>
											<tr>
												<th style="width:2%;text-align:center">#</th>
												<th style="text-align:center">Name of the Project / Clinical Trial / Endowment / Chairs</th>
												<th style="text-align:center">Name of the Principal Investigator / Co-Investigator</th>
												<th style="text-align:center">Name of the Funding Agency</th>
												<th style="text-align:center">Year of Award</th>
												<th style="text-align:center">Amount Sanctioned (INR in Lakhs)</th>
												<th style="text-align:center"><i class="fa fa-certificate" aria-hidden="true" style="color:red"></i></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center">1</td>
												<td>DST/TDT/DDP/2021/138</td>
												<td>Dr. Diptonil Banerjee (Co-PI with PI from IIT-Delhi)</td>
												<td style="text-align:center">DST</td>
												<td style="text-align:center">2021</td>
												<td style="text-align:center">19.61</td>
												<td><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/gov_project/1.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">2</td>
												<td>ICMR - MD/MS/DM/MCh funds</td>
												<td>Dr. Jyoti Khatri</td>
												<td style="text-align:center">ICMR</td>
												<td style="text-align:center">2021</td>
												<td style="text-align:center">0.50</td>
												<td><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/gov_project/2.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">3</td>
												<td>ICMR - MD/MS/DM/MCh funds</td>
												<td>Dr. Aijaz Ahmad Ganai, Dr. N Huda</td>
												<td style="text-align:center">ICMR</td>
												<td style="text-align:center">2020</td>
												<td style="text-align:center">0.50</td>
												<td><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/gov_project/3.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">4</td>
												<td>ICMR-Short Term Studentship 2020</td>
												<td>Neelesh, Dr. S K Gupta, Dr. Prithpal S Matreja</td>
												<td style="text-align:center">ICMR</td>
												<td style="text-align:center">2020</td>
												<td style="text-align:center">0.20</td>
												<td><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/gov_project/4.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td style="text-align:center">5</td>
												<td>ICMR - MD/MS/DM/MCh funds</td>
												<td>Dr. HusnaShamim, Dr. AlokSinghal</td>
												<td style="text-align:center">ICMR</td>
												<td style="text-align:center">2018</td>
												<td style="text-align:center">0.50</td>
												<td><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/gov_project/5.pdf" target="_blank">View</a></center></td>		
											</tr>
											<tr>
												<td style="text-align:center">6</td>
												<td>ICMR - MD/MS/DM/MCh funds</td>
												<td>Dr. SanchitPeriwal. Dr, G Ramakrishnan, Dr. Ashutosh Kumar</td>
												<td style="text-align:center">ICMR</td>
												<td style="text-align:center">2018</td>
												<td style="text-align:center">0.50</td>
												<td><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/gov_project/6.pdf" target="_blank">View</a></center></td>		
											</tr>
											<tr>
												<td style="text-align:center">7</td>
												<td>SBSS/794/16-17</td>
												<td>Prof. Dr R.K. Dwivedi</td>
												<td style="text-align:center">SERB</td>
												<td style="text-align:center">2017</td>
												<td style="text-align:center">0.75</td>
												<td><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/gov_project/7.pdf" target="_blank">View</a></center></td>		
											</tr>
											<tr>
												<td style="text-align:center">8</td>
												<td>ICMR-Short Term Studentship 2017</td>
												<td>Shailee Shail, Dr. Mazher Maqusood, Dr. Prithpal Singh Matreja</td>
												<td style="text-align:center">ICMR</td>
												<td style="text-align:center">2017</td>
												<td style="text-align:center">0.20</td>
												<td><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/gov_project/8.pdf" target="_blank">View</a></center></td>		
											</tr>
											<tr>
												<td style="text-align:center">9</td>
												<td>ICMR-Short Term Studentship 2017</td>
												<td>Ruchir Taneja, Dr. Ashutosh Kumar, Dr. Debranjan Datta</td>
												<td style="text-align:center">ICMR</td>
												<td style="text-align:center">2017</td>
												<td style="text-align:center">0.20</td>
												<td><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/gov_project/9.pdf" target="_blank">View</a></center></td>		
											</tr>
											<tr>
												<td style="text-align:center">10</td>
												<td>ICMR-Short Term Studentship 2017</td>
												<td>Shubhangini Soni, Dr. Utkarsh Sharma, Dr. Priyanka Kumawat</td>
												<td style="text-align:center">ICMR</td>
												<td style="text-align:center">2017</td>
												<td style="text-align:center">0.20</td>
												<td><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/gov_project/10.pdf" target="_blank">View</a></center></td>		
											</tr>
										</tbody>
									</table>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion">Working environment<span class="icon">+</span></button>
    <div class="panel">
    <table class="table table-bordered">
										<thead>
											<tr>
												<th style="width:2%;text-align:center">#</th>
												<th style="text-align:center">Name of the Project / Clinical Trial / Endowment / Chairs</th>
												<th style="text-align:center">Name of the Principal Investigator / Co-Investigator</th>
												<th style="text-align:center">Name of the Funding Agency</th>
												<th style="text-align:center">Year of Award</th>
												<th style="text-align:center">Amount Sanctioned (INR in Lakhs)</th>
												<th style="text-align:center"><i class="fa fa-certificate" aria-hidden="true" style="color:red"></i></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td align="center" sdval="1">1</td>
												<td align="left">A comparative study to analyse the changes in central mascular thickness in diabetes with different stages of Diabetic Retinopathy</td>
												<td align="left">Dr. Ashish Chander, Dr. Aishwarya Tyagi</td>
												<td align="left">Goodman Gilman's Life Sciences Pvt. Ltd.</td>
												<td align="center">2021</td>
												<td align="center">0.5</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="2">2</td>
												<td align="left">A comparative study of the impact of client centred structured contraceptive counselling versus conventional counselling techniques among postpartum and postabortal females</td>
												<td align="left">Dr. Rehana Najam, Dr. Jyoti Khatri</td>
												<td align="left">Vircare Pharma Pvt. Ltd.</td>
												<td align="center">2021</td>
												<td align="center">0.5</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="3">3</td>
												<td align="left">Evaluation of posterior pharyngeal airway spaces in skeletal class I, class II, class III facial profile.</td>
												<td align="left">Dr. Arun K. V. and Syeed Vikharuddin</td>
												<td align="left">Shree Jee Biotech</td>
												<td align="center">2021</td>
												<td align="center">0.3</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="4">4</td>
												<td align="left">Comparison between the efficacy of the physics forceps VS the conventional forceps in dental extraction- a prospective study.</td>
												<td align="left">Dr. Arun K. V. and Snigdha Singh</td>
												<td align="left">Shree Jee Biotech</td>
												<td align="center">2021</td>
												<td align="center">0.3</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="5">5</td>
												<td align="left">To evaulate the efficacy of submucosal VS intravenous dexamethasone injection in the management of post-op sequele after impacted mandibular third molar extraction.</td>
												<td align="left">Dr. D. S. Gupta and Sooraj S Pillai</td>
												<td align="left">Shree Jee Biotech</td>
												<td align="center">2021</td>
												<td align="center">0.3</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="6">6</td>
												<td align="left">Evaluation of efficacy of ketoprofen VS diclofenac transdermal patch in patients undergoing therapeutic orthodontic extraction- a randomised prospective split mouth study.</td>
												<td align="left">Dr. D. S. Gupta and Flora Kalita</td>
												<td align="left">Shree Jee Biotech</td>
												<td align="center">2021</td>
												<td align="center">0.3</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="7">7</td>
												<td align="left">To evaulate the efficacy of conventional arch bar versus hybrid arch bar in facial fractures.</td>
												<td align="left">Dr. Nimish Agarwal and Subhajit Mitra</td>
												<td align="left">Shree Jee Biotech</td>
												<td align="center">2021</td>
												<td align="center">0.3</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="8">8</td>
												<td align="left">Regional influence on facial profile esthetics &ndash; a comparative study</td>
												<td align="left">Dr. Manish Goyal and Haripriya Nongthonbam</td>
												<td align="left">Shree Jee Biotech</td>
												<td align="center">2021</td>
												<td align="center">0.3</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="9">9</td>
												<td align="left">Impact of labial and nasal properties on facial attractiveness; perception of lay person</td>
												<td align="left">Dr. Manish Goyal and ParulPriya</td>
												<td align="left">Shree Jee Biotech</td>
												<td align="center">2021</td>
												<td align="center">0.3</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="10">10</td>
												<td align="left">Evaluation of serum Zinc and copper micronutrients levels in chronic periodontitis patients before and after Phase I therapy.</td>
												<td align="left">Dr. Gauri Bhatia and Keerti Rawat</td>
												<td align="left">Shree Jee Biotech</td>
												<td align="center">2021</td>
												<td align="center">0.3</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="11">11</td>
												<td align="left">The effect of heat and sonic vibration on the retention of flowable composite resin as pit and fissure sealant - A split mouth randomised clinical trial.</td>
												<td align="left">Dr. Ramakrishna Yeluri and Sweety Singh</td>
												<td align="left">Shree Jee Biotech</td>
												<td align="center">2021</td>
												<td align="center">0.3</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="12">12</td>
												<td align="left">Comparartive evaluation of effectiveness of probiotics, sesame oil and green teaherbal mouthwashes with chlorhexidine mouthwash on plaque and salivary pH in child patients.</td>
												<td align="left">Dr. Anshu Sharma, Dr. Rachana Bahuguna and Ayushi Agarwal</td>
												<td align="left">Shree Jee Biotech</td>
												<td align="center">2021</td>
												<td align="center">0.3</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="13">13</td>
												<td align="left">Assesment of Platelet Indices as a biomarker for diagnosing Neonatal Sepsis</td>
												<td align="left">Dr. Baljeet Maini, Dr. Brij Bhushan</td>
												<td align="left">Goodman Gilman's Life Sciences Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.75</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="14">14</td>
												<td align="left">A study of various clinical presentation and outcomes in patients of chest injury attending TMMCRC</td>
												<td align="left">Dr. Vipin Kumar, Dr. Shah Ojas Mahesh</td>
												<td align="left">Vircare Pharma Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.75</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="15">15</td>
												<td align="left">Study on the drug utilization and pharmacoeconomic analysis of common ailments in medicine indoor wards of a tertiary care teaching hospital in western Uttar Pradesh.</td>
												<td align="left">P. Gopika, M. Sreelakshmi, Mrs. Sartia Jangra Bhyan, Dr. V.K. Singh</td>
												<td align="left">Goodman Gilman's Life Sciences Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.5</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="16">16</td>
												<td align="left">Assessment of patients knowledge, Attitude and practise regarding TUBERCULOSIS in a tertiary care hospital</td>
												<td align="left">Rashi Chauhan, Mukul Vishnoi, Dr. Sanjay Sharma, Dr. Mazher Maqusood</td>
												<td align="left">Vircare Pharma Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.5</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="17">17</td>
												<td align="left">Evaluation and Assessment of healthcare Professionals' Pharmacovigilance skills at various AMCs Vs. NON- AMCs</td>
												<td align="left">Richa Chaudhary, Aditya Narayan Gupta, Dr. Sanjay Sharma, Dr. Prithpal S. Matreja</td>
												<td align="left">Goodman Gilman's Life Sciences Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.5</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="18">18</td>
												<td align="left">An observational study on etiological and epidemiological profile of chronic liver disease in tertiary care hospital teerthankerMahaveer Hospital Moradabad (U.P)</td>
												<td align="left">Mohd Amir Suhail, Mustafa Ali, Mr. Ashish Kumar Verma, Dr. Amit Mishra</td>
												<td align="left">Vircare Pharma Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.75</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="19">19</td>
												<td align="left">Assessment of qualtiy of life (QoL) of type-2 diabetes mellitus patients in north indian tertiary Care teaching hospital</td>
												<td align="left">Arun Kumar, Sheetal Singh Tomer, Dharmendra Singh Yadav, Haider Imran, Dr. Aditya Parashar, Dr. V.K. Singh</td>
												<td align="left">Goodman Gilman's Life Sciences Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.5</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="20">20</td>
												<td align="left">The effects of NEFOPAM HYDROCHLORIDE and TARAMADOL HYDROCHLORIDE on Postoperative Pain in patients undergoing long bone fracture fixations</td>
												<td align="left">Dr. Ravi Dholaria, Dr. Ajay Pant, Dr. Najmul Huda</td>
												<td align="left">Vircare Pharma Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.75</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="21">21</td>
												<td align="left">Assesment of Platelet Indices as a biomarker for diagnosing Neonatal Sepsis</td>
												<td align="left">Dr. Baljeet Maini, Dr. Brij Bhushan</td>
												<td align="left">Goodman Gilman's Life Sciences Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.75</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="22">22</td>
												<td align="left">A study of various clinical presentation and outcomes in patients of chest injury attending TMMCRC</td>
												<td align="left">Dr. Vipin Kumar, Dr. Shah Ojas Mahesh</td>
												<td align="left">Vircare Pharma Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.75</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="23">23</td>
												<td align="left">Study on the drug utilization and pharmacoeconomic analysis of common ailments in medicine indoor wards of a tertiary care teaching hospital in western Uttar Pradesh.</td>
												<td align="left">P. Gopika, M. Sreelakshmi, Mrs. Sartia Jangra Bhyan, Dr. V.K. Singh</td>
												<td align="left">Goodman Gilman's Life Sciences Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.5</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="24">24</td>
												<td align="left">Assessment of patients knowledge, Attitude and practise regarding TUBERCULOSIS in a tertiary care hospital</td>
												<td align="left">Rashi Chauhan, Mukul Vishnoi, Dr. Sanjay Sharma, Dr. Mazher Maqusood</td>
												<td align="left">Vircare Pharma Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.5</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="25">25</td>
												<td align="left">Evaluation and Assessment of healthcare Professionals' Pharmacovigilance skills at various AMCs Vs. NON- AMCs</td>
												<td align="left">Richa Chaudhary, Aditya Narayan Gupta, Dr. Sanjay Sharma, Dr. Prithpal S. Matreja</td>
												<td align="left">Goodman Gilman's Life Sciences Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.5</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="26">26</td>
												<td align="left">An observational study on etiological and epidemiological profile of chronic liver disease in tertiary care hospital teerthankerMahaveer Hospital Moradabad (U.P)</td>
												<td align="left">Mohd Amir Suhail, Mustafa Ali, Mr. Ashish Kumar Verma, Dr. Amit Mishra</td>
												<td align="left">Vircare Pharma Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.75</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="27">27</td>
												<td align="left">Assessment of qualtiy of life (QoL) of type-2 diabetes mellitus patients in north indian tertiary Care teaching hospital</td>
												<td align="left">Arun Kumar, Sheetal Singh Tomer, Dharmendra Singh Yadav, Haider Imran, Dr. Aditya Parashar, Dr. V.K. Singh</td>
												<td align="left">Goodman Gilman's Life Sciences Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.5</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="28">28</td>
												<td align="left">The effects of NEFOPAM HYDROCHLORIDE and TARAMADOL HYDROCHLORIDE on Postoperative Pain in patients undergoing long bone fracture fixations</td>
												<td align="left">Dr. Ravi Dholaria, Dr. Ajay Pant, Dr. Najmul Huda</td>
												<td align="left">Vircare Pharma Pvt. Ltd.</td>
												<td align="center">2020</td>
												<td align="center">0.75</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="29">29</td>
												<td align="left">Short Term Research Project</td>
												<td align="left">Dr. Mazher Maqusood, Dr. Rohin Garg, Dr. Prithpal Singh Matreja</td>
												<td align="left">TB Association of India</td>
												<td align="center">2019</td>
												<td align="center" sdval="0.25">0.25</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/8.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="30">30</td>
												<td align="left">Short Term Research Project</td>
												<td align="left">Dr. Rohin Garg, Dr. Prithpal Singh Matreja, Dr. Mazher Maqusood</td>
												<td align="left">TB Association of India</td>
												<td align="center">2019</td>
												<td align="center">0.3</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/9.pdf" target="_blank">View</a></center></td>
											</tr>
											<tr>
												<td align="center" sdval="31">31</td>
												<td align="left">Short Term Research Project</td>
												<td align="left">Dr. Prithpal S Matreja, Dr. Mazher Maqusood, Dr. Rohin Garg</td>
												<td align="left">TB Association of India</td>
												<td align="center">2019</td>
												<td align="center">0.4</td>
												<td align="left"><center><a href="https://www.tmu.ac.in/pdf/sponsored_project/non_gov_project/10.pdf" target="_blank">View</a></center></td>
											</tr>


										</tbody>
									</table>
    </div>
    <hr class="horizontal-line">



</div>

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
