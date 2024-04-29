<?php
 include 'head.php';
?>

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

.fancy-title {
  --cnvs-fancy-title-bg: #fff;
  --cnvs-fancy-title-padding: 0.75rem;
  --cnvs-fancy-title-border-size: 1px;
  --cnvs-fancy-title-border-color: rgba(var(--cnvs-contrast-rgb), 0.1);
  --cnvs-fancy-title-dotted-border: images/icons/dotted.png;
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  margin-bottom: 0.55rem!important;
}

.title-bottom-border::before, .title-bottom-border::after {
  display: none;
}
.title-bottom-border h1, .title-bottom-border .h1,
.title-bottom-border h2,
.title-bottom-border .h2,
.title-bottom-border h3,
.title-bottom-border .h3,
.title-bottom-border h4,
.title-bottom-border .h4,
.title-bottom-border h5,
.title-bottom-border .h5,
.title-bottom-border h6,
.title-bottom-border .h6 {
  width: 100%;
  padding: 0 0 3px 0;
  border-bottom: calc(var(--cnvs-fancy-title-border-size) * 2) solid var(--cnvs-themecolor);
}

.table > :not(caption) > * > * {
  padding:0.5rem !important;
  color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
  background-color: var(--bs-table-bg);
  border-bottom-width: var(--bs-border-width);
  box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));

}

ul{
    margin-left:20px;
    font-size:16px;
    font-weight:500px;
}

.table{
    width: 500px!important;
}
</style>


<?php
include 'sidebar/open_elective_sidebar.php';
?>

                <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">
					<!-- Write content for right side here  -->
                    
                    <div class="row mx-0">
								<h2 class=" text-center" style="color:#001055;
                                    text-transform: capitalize;
                                    font-weight:700!important; font-size:2.4vmax">List of Open Elective Courses <span class="d-block d-sm-inline"> under Choice Based Credit System</span></h2>
                        
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped">
							              <thead>
                                <th>S. No.</th>
                                <th>Name Of College</th>
                                <th>Name of Department</th>
                                <th>S.No.</th>
                                <th>Name of Proposed OE Course for A.Y-2022-2023</th>
                                <th>Course Code</th>
                                <th>Offered for Odd Semester/Even Semester</th>
                                <th>Overall Open Elective Courses Coordinator Contact Detail</th>
                                <th>Concerned Open Elective Courses Coordinator Name Contact Detail</th>
                                <th>Course Content/Syllabus</th>
                            </thead>  
                            <tbody>
								                <tr>
                                 <td rowspan="4">1.</td>
								                  <td colspan="2" rowspan="4"><center>Faculty of Education</center></td>
                                  <td>1.</td>
                                  <td>Learning and Teaching</td>
                                  <td>OEEDU101</td>
                                  <td>Odd Semester</td>
                                  <td rowspan="4">Dr.Pawas Kumar Mandal, <br> Mob-9422801400, <br>pawas.education@tmu.ac.in</td>
                                  <td>Dr.Pawas Kumar Mandal, <br> Mob-9422801400, <br>pawas.education@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>2.</td>
                                  <td>Guidance And Counselling</td>
                                  <td>OEEDU102</td>
                                  <td>Odd Semester</td>
                                  <td>Dr.Devendra Kumar Yadav, <br>Mob-7020028012, <br>devendrayadav2514@gmail.com</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>3.</td>
                                  <td>Gender,School and Society</td>
                                  <td>OEEDU201</td>
                                  <td>Even Semester</td>
                                  <td>Mr.Gautam Kumar, <br>Mob-8969829722, <br>gautamk.education@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>4.</td>
                                  <td>Inclusive Education</td>
                                  <td>OEEDU202</td>
                                  <td>Even Semester</td>
                                  <td>Mrs. Naheed Bi, <br>Mob-9358949555, <br>nahid.education@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                 <td rowspan="2">2.</td>
								                  <td colspan="2" rowspan="2"><center>College of Physical Education</center></td>
                                  <td>5.</td>
                                  <td>Yoga Education</td>
                                  <td>BPED205</td>
                                  <td>Even Semester</td>
                                  <td rowspan="2">Prof. Manu Mishra, <br>Mob-9837469801, <br>principal.physicaleducation@tmu.ac.in</td>
                                  <td rowspan="2">Dr. Yogendra Sharma, <br>Mob-7669374212, <br>yogendras.physicaleducation@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>6.</td>
                                  <td>Sports Nutrition and Weight Management</td>
                                  <td>BPED209</td>
                                  <td>Even Semester</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                 <td rowspan="12">3.</td>
								                  <td rowspan="12"><center>Faculty of Engineering</center></td>
                                  <td rowspan="2">CE</td>
                                  <td>7.</td>
                                  <td>Remote Sensing and GIS</td>
                                  <td>OEENG105</td>
                                  <td rowspan="12">Open for Odd Even Semester both</td>
                                  <td rowspan="12">Dr. Vipin Kumar, <br>Mob-8057376965, <br>drvipink.engineering@tmu.ac.in</td>
                                  <td rowspan="2">Prof. Ravi Jain, <br>Mob-6397366263, <br>ravi.engineering@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                  </tr>
                                <tr>
                                  <td>8</td>
                                  <td>Disaster Management</td>
                                  <td>To be Decided</td>
                                  <td>Will be uploaded soon.</td>
								                  </tr>
                                <tr>
                                  <td>ME</td>
                                  <td>9.</td>
                                  <td>Metallurgy</td>
                                  <td>OEENG106</td>
                                  <td>Mr. Sunil Kumar <br>Mob-6397201718 <br>sunil.engineering@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                  </tr>
                                <tr>
                                  <td rowspan="2">EC</td>
                                  <td>10.</td>
                                  <td>Introduction of Machine Learning using Python</td>
                                  <td>OEENG107</td>
                                  <td rowspan="2">Dr. Pankaj Goswami, <br>Mob-9758469426,<br>pankajg.engineering@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>11.</td>
                                  <td>Renewable Energy System</td>
                                  <td>To be Decided</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>EE</td>
                                  <td>12.</td>
                                  <td>Artificial Neural Network and Fuzzy Logic</td>
                                  <td>OEENG101</td>
                                  <td>Dr. Garima Goswami, <br>Mob-7073006426, <br>garimag.engineering@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                    <td rowspan="2">Physics</td>
                                  <td>13.</td>
                                  <td>Learning Science through Computational Physics</td>
                                  <td>OEENG104</td>
                                  <td rowspan="2">Dr. Pavan Kumar Singh, <br>Mob-7976146944, <br>pavan.engineering@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>14.</td>
                                  <td>Introduction to Econophysics</td>
                                  <td>To be Decided</td>
                                  <td>Will be uploaded soon.</td>
								                </tr> 
                                <tr>
                                <td>Chemistry</td>
                                  <td>15.</td>
                                  <td>Industrial Chemistry</td>
                                  <td>OEENG102</td>
                                  <td>Prof. Asim Ahmad, <br>Mob-9759133901, <br>drasim.engineering@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
                                </tr>
                                <tr>
                                <td rowspan="2">Mathematics</td>
                                  <td>16.</td>
                                  <td>Fundamental of Statistics</td>
                                  <td>OEENG103</td>
                                  <td rowspan="2">Dr. Vipin Kumar <br>Mob-8057376965 <br>drvipink.engineering@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
                                </tr>
                                <tr>
                                  <td>17.</td>
                                  <td>Introduction to Econophysics</td>
                                  <td>To be Decided</td>
                                  <td>Will be uploaded soon.</td>
								                </tr> 
                                <tr>
                                  <td>Humanities</td>
                                  <td>18.</td>
                                  <td>Women and Gender Studies: Issues Strategies</td>
                                  <td>To be decided</td>
                                  <td>Dr. Indu Tripathi, <br>Mob-9837413469, <br>indu.engineeeing@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>

                                <tr>
                                 <td rowspan="12">4.</td>
								                  <td rowspan="12" colspan="2"><center>College of Computing Sciences & IT</center></td>
                                  <td>19.</td>
                                  <td>Data Science</td>
                                  <td>OECOP101</td>
                                  <td rowspan="12">Open for Odd Even Semester both</td>
                                  <td rowspan="12">Dr. Ashendra Saxena <br> Mob-9897529931 <br> drashendra.computers@tmu.ac.in</td>
                                  <td>Mr. Rajendra Prasad Pandey <br> Mob-9411636250 <br> rajendra.computers@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                  </tr>
                                <tr>
                                  <td>20</td>
                                  <td>Big Data Analytics</td>
                                  <td>OECOP102</td>
                                  <td>Mr. Rupal Gupta <br>Mob-8791716629 <br>rupal.computers@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                  </tr>
                                <tr>
                                  <td>21.</td>
                                  <td>Human Values Professional Ethics</td>
                                  <td>OECOP103</td>
                                  <td>Mohd. Saleem <br>Mob-9350997142 <br>saleem.computers@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                  </tr>
                                <tr>
                                  <td>22.</td>
                                  <td>Introduction to Web Design</td>
                                  <td>OECOP104</td>
                                  <td>Amit Sharma <br>Mob-7011532298 <br>amitsharma.computers@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>23.</td>
                                  <td>Data Base Management System</td>
                                  <td>OECOP105</td>
                                  <td>Mr. Ajay Rastogi <br>Mob-9897694600 <br>ajay.computers@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>24.</td>
                                  <td>Introduction to R Programming</td>
                                  <td>OECOP106</td>
                                  <td>Dr. Ashendra Saxena <br> Mob-9897529931 <br>drashendra.computers@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>25.</td>
                                  <td>Python Programming Introduction to Data Science</td>
                                  <td>OECOP107</td>
                                  <td>Mr. Vivek Kumar <br>Mob-7579281667 <br>vivek.computers@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>26.</td>
                                  <td>Java Programming</td>
                                  <td>OECOP108</td>
                                  <td>Prof. Rakesh Kr. Dwivedi <br>Mob-9837771280 <br>principal.computers@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr> 
                                <tr>
                                  <td>27.</td>
                                  <td>Cloud Computing</td>
                                  <td>OECOP109</td>
                                  <td>Dr. Priyank Singhal <br>Mob-9319905957 <br>priyank.computers@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
                                </tr>
                                <tr>
                                  <td>28.</td>
                                  <td>Project Management for Engineers</td>
                                  <td>OECOP110</td>
                                  <td>Mr. Navneet Vishnoi-II <br>Mob-9760642234 <br>navneet.computers@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
                                </tr>
                                <tr>
                                  <td>29.</td>
                                  <td>Cyber Law Information Security</td>
                                  <td>OECOP111</td>
                                  <td>Dr. Gulista Khan <br>Mob-9639888358 <br>gulista.engineering@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr> 
                                <tr>
                                  <td>30.</td>
                                  <td>Concept of IoT (Internet of Things)</td>
                                  <td>OECOP112</td>
                                  <td>Mr.Vineet Saxena <br>Mob-9718426186 <br>vineet.computers@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                 <td rowspan="2">5.</td>
								                  <td colspan="2" rowspan="2"><center>College of Agricultural Sciences</center></td>
                                  <td>31.</td>
                                  <td>Food Safety and Standards</td>
                                  <td>OEAGR101</td>
                                  <td>Even Semester</td>
                                  <td rowspan="2">Dr. Upasana <br>Mob-8394885150 <br>upasana.agriculture@tmu.ac.in</td>
                                  <td>Dr. Upasana <br>Mob-8394885150 <br>upasana.agriculture@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>32.</td>
                                  <td>Agriculture Heritage</td>
                                  <td>BAG113</td>
                                  <td>Even Semester</td>
                                  <td>Dr.Samarth Tiwari <br>Mob-8057213241</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                 <td rowspan="3">6.</td>
								                  <td colspan="2" rowspan="3"><center>TMIMT College of Management</center></td>
                                  <td>33.</td>
                                  <td>Enterpreneurship Development</td>
                                  <td>OEMAN101</td>
                                  <td>Odd Semester</td>
                                  <td rowspan="3">Dr. Manoj kumar Agarwal <br>Mob-7417606465</td>
                                  <td>Dr. Mohit Rastogi <br>Mob-9456078204 <br>mohit.management@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>34.</td>
                                  <td>Business Research</td>
                                  <td>OEMAN102</td>
                                  <td>Even Semester</td>
                                  <td>Dr. Vibhor Jain <br>Mob-9319580074 <br>vibhor.management@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>35.</td>
                                  <td>Fundamentals of Corporate Social Responsibility</td>
                                  <td>To be decided</td>
                                  <td>Even Semester</td>
                                  <td>Dr. Mohit Rastogi <br>Mob-9456078204 <br>mohit.management@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>

                                <tr>
                                 <td rowspan="4">7.</td>
								                  <td colspan="2" rowspan="4"><center>College of Paramedical Sciences</center></td>
                                  <td>36.</td>
                                  <td>FIRST AID</td>
                                  <td>OEPAR101</td>
                                  <td rowspan="4">Odd Semester</td>
                                  <td rowspan="4">Mr. Niraj Kumar <br>Mob-8105870850 <br>nirajk.paramedical@tmu.ac.in</td>
                                  <td>Mr. Arvind Kumar <br>Mob-9458706894 <br>arvindk.paramedical@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>37.</td>
                                  <td>Business Research</td>
                                  <td>OEPAR102</td>
                                  <td>Mr. Manoj Dhadwal <br>Mob-9899403516 <br>manojd.paramedical@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>38.</td>
                                  <td>Hospital Management</td>
                                  <td>OEPAR103</td>
                                  <td>Mr. Niraj Kumar <br>Mob-8105870850 <br> nirajk.paramedical@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>39.</td>
                                  <td>Introduction to Forensic Science</td>
                                  <td>OEPAR104</td>
                                  <td>Dr. Mohit Rastogi <br>Mob-9456078204 <br>mohit.management@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                 <td rowspan="4">8.</td>
								                  <td colspan="2" rowspan="4"><center>Department of Physiotherapy</center></td>
                                  <td>40.</td>
                                  <td>Fitness and Health Management</td>
                                  <td>OEPHY101</td>
                                  <td rowspan="4">Odd Semester</td>
                                  <td rowspan="4">Mr. Farhan Khan <br>Mob-9793099084 <br>farhan.physiotherapy@tmu.ac.in</td>
                                  <td>Mr. Farhan Khan <br>Mob-9793099084 <br>farhan.physiotherapy@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>41.</td>
                                  <td>Nutrition For Health</td>
                                  <td>OEPHY102</td>
                                  <td>Ms. Komal Nagar <br>Mob-7060459368 <br>komal.physiotherapy@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>42.</td>
                                  <td>Sustainable Development</td>
                                  <td>OEPHY103</td>
                                  <td>Ms. Samarpita Senapati <br> Mob-6383218957 <br>samarpita.physiotherapy@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>43.</td>
                                  <td>Indian Alternate Wellness Therapies</td>
                                  <td>OEPHY104</td>
                                  <td>Mr. Harish Sharma <br>Mob-9528319985</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                 <td rowspan="4">9.</td>
								                  <td colspan="2" rowspan="4"><center>College of Nursing</center></td>
                                  <td>44.</td>
                                  <td>General Concept of Health Care</td>
                                  <td>OENUR101</td>
                                  <td>Odd Semester</td>
                                  <td rowspan="4">Prof. (Dr.) M. Jasline <br>Mob-8279816167 <br>viceprincipal.nursing@tmu.ac.in</td>
                                  <td rowspan="2">Ms. Aarti Singh <br>Mob-9690238774</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>45.</td>
                                  <td>Health Research Methodology</td>
                                  <td>OENUR102</td>
                                  <td>Even Semester</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>46.</td>
                                  <td>First AID</td>
                                  <td>OENUR103</td>
                                  <td>Odd Semester</td>
                                  <td>Mrs.Pooja Jha <br>Mob-08449427898 <br>poojaj.nursing@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>47.</td>
                                  <td>Stress Management</td>
                                  <td>EC-16</td>
                                  <td>Even Semester</td>
                                  <td>Mrs. Anjali Shah, <br>Mob-8755459778 <br>anjalish.nursing@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                 <td>10.</td>
								                  <td colspan="2"><center>College of Pharamacy</center></td>
                                  <td>48.</td>
                                  <td>Qualitative Detection of Food Product Adulterants</td>
                                  <td>OEPHA101</td>
                                  <td>Even Semester</td>
                                  <td>Mr. Pushpendra Shukla <br>Mob-8874595718 <br>pushpendra.pharmacy@tmu.ac.in</td>
                                  <td>Mr. Pushpendra Shukla <br>Mob-8874595718 <br>pushpendra.pharmacy@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                 <td rowspan="4">11.</td>
								                  <td colspan="2" rowspan="4"><center>College of Fine Arts</center></td>
                                  <td>49.</td>
                                  <td>Drawing for Painting -I</td>
                                  <td>OEBFA501</td>
                                  <td>Odd Semester</td>
                                  <td rowspan="4">Mr. Pradeep Saini <br>Mob-9548208903 <br>pradeeps.finearts@tmu.ac.in</td>
                                  <td>Mr. Rajesh Kuma <br>Mob-9971913176</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>50.</td>
                                  <td>Photography-I	</td>
                                  <td>OEBFA502</td>
                                  <td>Odd Semester</td>
                                  <td>Miss. Shreya Sharma <br>Mob-8171766692</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>51.</td>
                                  <td>Drawing for Painting -II</td>
                                  <td>OEBFA601</td>
                                  <td>Even Semester</td>
                                  <td>Mr. Rajesh Kumar <br>Mob-9971913176</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>52.</td>
                                  <td>Photography-II</td>
                                  <td>OEBFA602</td>
                                  <td>Even Semester</td>
                                  <td>Miss. Shreya Sharma <br>Mob-8171766692</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                 <td rowspan="4">12.</td>
								                  <td colspan="2" rowspan="4"><center>College of Law Legal Studies</center></td>
                                  <td>53.</td>
                                  <td>Intellectual Property Rights and Information Technology</td>
                                  <td>OELAW-101</td>
                                  <td>Odd Semester</td>
                                  <td rowspan="4">Dr. Parveen Kumar Mall <br>Mob-9415849271 <br>praveenk.law@tmu.ac.in</td>
                                  <td>Mr. Pradip Kumar Kashyap <br>Mob-8766317620 <br>pradipk.law@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>54.</td>
                                  <td>Intellectual Property Rights</td>
                                  <td>OELAW-201</td>
                                  <td>Even Semester</td>
                                  <td>Mr. Sourabh Batar <br>Mob-9821339884 <br>sourabh.law@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>55.</td>
                                  <td>Introduction to Indian Constitution</td>
                                  <td>OELAW-202</td>
                                  <td>Even Semester</td>
                                  <td>Mr. Arunoraj Singh <br>Mob-8840199916 <br>arunoraj.law@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                <tr>
                                  <td>56.</td>
                                  <td>Introduction to Law and Indian Legal System</td>
                                  <td>OELAW-203</td>
                                  <td>Even Semester</td>
                                  <td>Mr. B.R. Mourya <br>Mob-8439543898 <br>bhriguraj.law@tmu.ac.in</td>
                                  <td>Will be uploaded soon.</td>
								                </tr>
                                                               
							</tbody>
						</table>
                        </div>
                    </div>
                </div> 
			</div>
		</div>
	</div>
</section><!-- #content end -->

	<br /><br />
	
<?php
 include 'footer.php';
?>



