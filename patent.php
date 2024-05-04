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

        <div class="col-12 col-md-9 mt-3 mt-sm-0 pt-5 ">

          <div class="row mx-0">
            <h2 class=" text-center" style="color:#001055;  text-transform: capitalize;
            font-weight:700!important; font-size:2.4vmax">Patents <span  class="d-block d-sm-inline"> of TMU</span></h2>
        
		<div class="container mb-5 mt-5">
    <hr class="horizontal-line">

    <button class="careers-accordion">Patents Published<span class="icon">+</span></button>
    <div class="panel active">
    <div class="table-responsive">
										<table class="table table-bordered">
											<tbody>
												<tr>
												
													<th style="text-align:center;">Name of Applicant</th>
													<th style="text-align:center;">Title of Invention</th>
<th style="text-align:center;">Inventor(s)</th>
													
													<th style="text-align:center;width:15%">Date of Publication<br/>(mm/dd/YYYY)</th>
													<th style="text-align:center;">Organization</th>
												</tr>
											
<tbody>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Garden Maintenance System</td>
<td>Dr. Mitra Pal Singh, Dr. Mahendra Singh, Devendra Pal</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Multipurpose Soil Digging Device</td>
<td>Dr. Girja Shanker Tiwari, Dr. Divya Prakash Singh, Dr. Shakuli Saxena</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Wood Quality Maintenance Device</td>
<td>Vineet Kumar,Binita Kumari</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Arpit Jain</td>
<td>IAVP-Intelligent Business Data: Intelligent Business Data Visualization Using AI-Based Programming</td>
<td>Anand Pandey; Dr. Arpit Jain; Sanjay Pratap Singh; Lalit Verma; Mahesh Avadhutrao; Vishakha A. Metre; S.B.Chordiya;Yashpal Singh</td>
<td>9/15/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>Dr. Rakesh Kr. Dwivedi,Dr. Arpit Jain</td>
<td>IMT-Voice Based Mobile Banking : Intelligent Money Transfer Using Voice Based Mobile Banking</td>
<td>Dr. Arpit Jain; Karan Singh; Dr. Rakesh Kumar Dwivedi; Bharat Bhushan Sagar; Satvik Vats; Latha Banda; Manisha Manjul; Tayyab Khan; Biplab Kumar Sarkar</td>
<td>9/23/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>Dr. Ashendra Kr. Saxena&nbsp;</td>
<td>AMD Data Analysis: Academy Data Analysis Using Machine Learning,Deep Learning Programming&nbsp;</td>
<td>Dr. Ashendra Kr. Saxena ; MD. Iqbal; Rupesh Kumar Jindal; Santosh Dilipkumar Parakh; ER. Rakesh Kumar; Chukka Santhaiah; S.B. Chrdiya; Rambabau Vatti</td>
<td>9/23/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>Dr. Arpit Jain</td>
<td>MT-Family Member Activities and Location : Family Member Activities And Location Management Technology</td>
<td>Ashish Dudhale; Prachi Labde; Archana Shirbhate; Dr. Arpit Jain; Sandeep Kumar Gupta; S.B.Chordiya&nbsp;</td>
<td>9/23/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>Dr. Arpit Jain,Dr. Ashok Kumar,Ankur Chaudhary, Jyoti Ranjan Labh</td>
<td>SBDA- Secured Bra For Women Safety: Smart And Secured Bra For Women Safety Based On Deep Learning Algorithm</td>
<td>Sandeep Kumar; Dr. Arpit Jain; Rohit Raja; Shilpa Rani; Sanjay Sharma; Alok Kumar Singh ; Padma Bonde; Dr. Ashok Kumar; Ankur Chaudhary; Jyoti Ranjan Labh; S.B.Chordiya</td>
<td>10/8/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>Dr. Rakesh Kr. Dwivedi,Dr. Arpit Jain, Aman Kumar&nbsp;</td>
<td>SEF:&nbsp; Smart Educational Framework: Smart AI-IOT Based Educator Monitoring And Content Availability Alert System</td>
<td>Dr. Arpit Jain; Aman Kumar; Anand Prakash Shukla; Dr. Rakesh Kumar Dwivedi; Hitendra Garg; Ankur Bhardwaj; Pramod Kumar; Sanjay Singh; Satyendra Singh; Rohit Agarwal</td>
<td>10/6/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>Dr. Ashendra Kr. Saxena ,Ajay Rastogi</td>
<td>INHA- Combined Health Monitoring: Intelligent IoT- Based Combined Health Monitoring, Notification, Alert, Home<br />Automation System</td>
<td>Raghuraj Singh; Parma Nand; Prashant Kumar Mishra; Vibhash Yadav;Pawan Kumar Pal;Charu Awasthi; Ashendra Kumar Saxena; Danish Ather; Ajay Rastogi; Ambuj Kumar Agarwal</td>
<td>10/6/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>Anu Sharma</td>
<td>DAMA- Dataset Discovery:Dataset&nbsp; Discovery in Data Analytics and Machine Learning Algorithm</td>
<td>JeevanKiran Dandangi; Jyothi Mandala;CH Rayala Vinod Kumar;Anu Sharma;V Balaji Chandrasekhar; S. Selvakumar;Najid Ahmad; Sandeep Kumar Gupta; S.B. Chordiya;Beg Raj</td>
<td>11/18/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Intelligent Pen Drive: Highest Data Security (Auto Data store your gmail and link share your mobile no.) using AI Based Programming</td>
<td>Dr R K Dwivedi, Sahana Lokesh R, Anu Sharma, Dr Arun Jain, Dr Anshu Parashar, Dr Anish Soni, Dr Sukhdev Singh, Shivani Pandey, Rupesh Kumar Jindal Amit Garg</td>
<td>2/8/2021</td>
<td>Australia</td>
</tr>
<tr>
<td>Pradeep Kr. Gupta</td>
<td>System And Method For Generating Electricity Using Turnstile Gate</td>
<td>Pradeep Kr. Gupta</td>
<td>1/1/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Rajeev Kumar</td>
<td>A Novel Smart Electro Mechanical Standing Ventilator For Intensive Care Unit</td>
<td>Prof. Ramesh Chandra Panda; Dr. R. Subhashini; Dr. Souvik Ganguli;Dr. Shikha Gupta;Dr. Lakshmi D; Dr. P. Sudhakaran; Dr. Piyush Gupta; Dr. Manoj Gupta; Dr. Rajeev Kumar; Dr. Parul Gupta; Tanmayee Mandala;Dr. A. Nirmala Jyothsna; Dr. K. Sree Latha; Dr. P. Karthigeyan</td>
<td>12/4/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Rakesh Kr. Dwivedi</td>
<td>System For Prioritizing Emergency Vehicles In Traffic Using Queuing Theory</td>
<td>Parul Arora; Dr. Rakesh Kumar Dwivedi; Dr. Umang</td>
<td>10/23/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Rohaila Naaz</td>
<td>Intelligent Encrypted Data Search: Intelligent Real Time Text Search Over Encrypted Data In Cloud Computing</td>
<td>Prof.(Dr. ) Rakesh Kumar; Dr. Vakula Rani J; Aishwarya Jakka; Rohaila Naaz; Prof.(Dr.) S.B. Chordiya</td>
<td>10/23/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Rajeev Kumar</td>
<td>A Novel IOT Based Disinfectant Sanitizer Tunnel Against Covid-19 Using Human Detecting Sensors And End To END Security Model</td>
<td>Prof. Ramesh Chandra Panda;Dr. Parul Gupta; Dr. Mayank Kumar Goyal; Dr. Ramachandra RK; Dr. Rajeev Kumar; Dr. Rajdeep Chakraborty; Dr. Bijendra Kumar; Dr. Mahesh Chand; Dr. Ajay Suryavanshi; Dr. Amrita; Dr. K Ram chandra; Dr. Mandeep Kaur; Dr. Payal Khurana Batra; Supriya Khaitan Sakshi Agarwal; Dr. P Karthigeyan</td>
<td>10/23/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Amit Shukla &amp; Dr. Kirti Shukla</td>
<td>AMLD -DEBUGGING GRIDS: Automatic Debugging Grids With Machine ,Deep Learning Techniques</td>
<td>Dr. Kirti Shukla ; Amit Shukla; Prof.(Dr.) S.B.Chordiya</td>
<td>10/9/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Hina Hashmi</td>
<td>IVB-E-MAIL: Intelligent Voice Based E-Mail</td>
<td>Dr.M. Sasi Bhushan; Hina Hashmi; Prof.(Dr.)S.B.Chordiya; Dr. M. Nagabhushana Rao; Dr. Jami Venkata Suman; Pawan Kumar Singh</td>
<td>9/25/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Rakesh Kr. Dwivedi</td>
<td>System and Method For Vehicular Traffic Control/ Management</td>
<td>Parul Arora; Dr. Rakesh Kumar Dwivedi; Dr. Umang</td>
<td>8/28/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Shakti Kundu</td>
<td>SOCIAL MEDIA SENTIMENTS CALCULUS:Profile Based Mapping Social Media Sentiments Calculus Using Cloud Computing,Deep Learning Programming</td>
<td>Dr. Manish Saraswat; Dr. Shakti Kundu; Dr. Vivek Mehrotra; Dr. Shiva Durga; CH. Rayala Vinod Kumar; Dr. Jyothi Mandala</td>
<td>8/28/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Shakti Kundu</td>
<td>ACS SYSTEM: Advanced Customer Service System Using Machine Learning And Artificial Intelligence</td>
<td>Dr. Shakti Kundu; Dr. Puja Shrivastava; Prof.(Dr.)Rakesh Kumar; Dr. Sangeetha G; Dr. MANOJ Kumar Pandey; Sachin Sudam Shinde</td>
<td>8/28/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Arpit Jain</td>
<td>Smart -Transit: Smart Traffic Monitoring System Using IOT And AI Techniques</td>
<td>Dr. Karan Singh; Dr. Arpit Jain; Dr. Manisha Manjul; Tayyab Khan; Vinay Pathak</td>
<td>8/14/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Rakesh Kr. Dwivedi</td>
<td>A PREDICTIVE ACCIDENT PREVENTION SYSTEM FOR VEHICLE SAFETY ON SHARP TURNS OF HILLY ROAD</td>
<td>Parul Arora; Dr. Rakesh Kumar Dwivedi; Dr. Umang</td>
<td>9/4/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Rakesh Kr. Dwivedi</td>
<td>AN INTERNET OF THINGS BASED SMART HI-TECH BUILDING SYSTEM FOR COVID PROTECTION</td>
<td>Parul Arora; Dr. Rakesh Kumar Dwivedi; Dr. Umang</td>
<td>8/21/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Ankur Sisodia &amp; Swati Vishnoi</td>
<td>Access In 4G,5G Mobile Network Environments</td>
<td>Dr. Savrabh Kawar; Ankur Sisodia; Swati; Prof.(Dr.) Pawan Kumar Bharti; Dr. Vrushsen Purushottam Pawar; Prof.(Dr.)S.B. Chordiya</td>
<td>6/26/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Rajeev Kumar</td>
<td>System And Method For Predicting An Infectios Disease Transmitted By A Virulent Respiratory Virus</td>
<td>Dr. Naveen Tewari ; Dr. Mukesh Joshi; Dr. Rajeev Kumar ; Dr. Gopal Datt; Dr. Sandeep Kumar Budhani</td>
<td>6/26/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Megha Sharma</td>
<td>Integrated Hand Sanitizer To Avoid From The Covid-19</td>
<td>Dr. Megha Sharma; Santosh Gopal Nagpure; Prof.(Dr.) S.B.Chordiya; Pawan Kumar Singh; Pari Nidhi Singh; Dr. Biplab Kumar Sarkar&nbsp;</td>
<td>6/26/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Tushar Mehrotra</td>
<td>An IOT Based Intelligent Food Storage System&nbsp;</td>
<td>Dr. Asis Kumar Tripathy; Dr. Umakanta Nanda; Tushar Mehrotra; Dr. Alekha Kumar Mishra; Dr. Ashok Kumar Pradhan; Dr. Sandeep Saxena; Dr. Shubham Gupta; Dr. Jayendra Kumar</td>
<td>6/5/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Ashok Kumar,Jyoti Ranjan Labh</td>
<td>Can-Device: Automatic Count The Number Of Car Running On Road(Real Time ,Location,Running Speed Etc.)Using Machine Learning</td>
<td>Dr. Nripendra Narayan Das; Dr. Ashok Kumar; Jyothi Ranjan Labh; Santosh Gopal Nagpure; Dr. Rajinder Singh; Dr. Poorna Shankar</td>
<td>8/7/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Pradeep Kr. Gupta</td>
<td>Method for Consuming Municipal Solid Waste In Construction Materials</td>
<td>Pradeep Kr. Gupta</td>
<td>4/3/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Gaurav Kr. Rajput</td>
<td>Cybernetic Plant</td>
<td>Dr. Umakanta Nanda; Arghya Biswas; Subhodeeep Chatterjee; Dr. Ashok Kumar Pradhan; Dr. Sandeep Saxena; Dr. Dileep Kumar Yadav; Aatif Jamshed; Gaurav Kumar Rajput&nbsp;</td>
<td>3/13/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Rakesh Kr. Dwivedi</td>
<td>A SMART ADAPTIVE NEURAL FUZZY INTERFACE SUPERVISED ACTIVE POWER FILTER FOR HARMONIC DISTORTION CONTROL IN AC POWER DRIVEN IOT DEVICES</td>
<td>Parul Arora; Dr. Rakesh Kumar Dwivedi; Dr. Umang</td>
<td>3/20/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Vivek Kumar</td>
<td>Computer Cache Memory Performance Enhance Using Neural Networks And Machine Learning</td>
<td>Dr. N. Sandhya; Dr. M.Raja Sekar; Dr. Ashish Kumar; Vivek Kumar; P.ILA Chandana Kumari; Prof. (Dr.) Yashpal Singh</td>
<td>1/17/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Rakesh Kr. Dwivedi</td>
<td>A Fractal Trident Shape Large Band Antenna For Multiple Frequency Based Internets Of Things Applications</td>
<td>Dr. Pankaj Kumar Goswami; Dr. Garima Goswami; Dr. Rakesh Kumar Dwivedi&nbsp;</td>
<td>1/10/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Arpit Jain</td>
<td>Exceeded The ATM Network: Account Holder Has Exceeded The ATM Network Limit</td>
<td>Dr. Varinder Singh; Tarun Singhal; Dr. Arpit Jain; Dr. V. Lokeswara Reddy; Dr. Sanjeev Kumar Sharma; Dr. Vikas Goel; Dr. Amit Kumar Gupta; Dr. Sachin Kumar</td>
<td>1/3/2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Arpit Jain</td>
<td>W-SIM: Water Sim (Per Member Water Use Control And Management&nbsp; System)</td>
<td>Dr. Arpit Jain; Dr. Sanjeev Kumar Sharma; Dr. Naresh Trivedi;&nbsp; Dr. R. Madana Mohana; Dr. M. Nagabhushana Rao; Prof. Santosh Gopal Nagpure; Dr. B. Venkatesh</td>
<td>10/25/2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Arpit Jain</td>
<td>VM-System:IOT Based Vehicle Monitoring System Using Beagle Bone Kit</td>
<td>&nbsp;Dr. Sanjeev Kumar Sharma; Dr. Arpit Jain; Prof. Santosh Gopal Nagpure; Dr. B. Venkatesh; Dr. Manju Khari; Dr. S.Vimal; A.Arulprakash; Dr. R.Viswanathan</td>
<td>10/18/2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Arpit Jain</td>
<td>RT-Sanitizer: Resizeable Toilet Seat With Rolling Sanitizer</td>
<td>Dr. Arpit Jain; Dr. Suresh Kumar; Dr. Varinder Singh; Jay Chandrashekhar Ajmire; Yash MADHUKAR Patil; Parth Ravindra Patil</td>
<td>10/18/2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Arpit Jain</td>
<td>IMF System: Intelligent Mobile Finding System</td>
<td>Dr. S.V.S. Ramakrishnam Raju; Dr. Arpit jain; DR. Naresh Trivedi; Prof. Santosh Gopal Nagpure; Dr. Garima Shrivastav; Dr. Manju Khari; Dr. Abha Jain; Prof. Manav Ashok Thakur; Samruddhi Sunil Randhe&nbsp;</td>
<td>10/11/2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Rajeev Kumar</td>
<td>Process For Formation Of Capacitor Structure For Non Volatile Memory On Germanium Nanocrystals</td>
<td>Dkorra Ravi Kumar; Dr. Namit Gupta; Dr. Rajeev Kumar; Dr. S.Inderjeet Singh; Dr. SANTOSH Kumar Allemki; Dr. Giriraj Kumar Prajapati; Mukesh Patidar; Mittapally Sadanandam; V.Praveen Kumar</td>
<td>9/20/2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Arpit Jain</td>
<td>AIB Satellite: AI Based Satellite To Detection The Object At Location</td>
<td>Dr. Arpit Jain; Pranav Shankar Rao Pise; Urmila Dattatray Deshmukh; Dr. Shadab Adam Pattekari; Prof.(Dr.) S.B.Chordiya</td>
<td>9/6/2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Dr. Rajeev Kumar</td>
<td>A Process To Analyze Defects In Software</td>
<td>Dr. Rajeev Kumar ; Dr. Ashutosh Kumar Bhatt</td>
<td>6/14/2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Feather Cleaning And Removing Device For Poultry Birds</td>
<td>Ajay Chakravarty, Dr. Pankaj Goswami,&nbsp; Rahul Vishnoi, Dr. Parag Agarwal</td>
<td>3/5/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automatic Currency Protection And Storage Device</td>
<td>Dr.Kirti Shukla, Dr.Gulista Khan,&nbsp; Prashant Kumar, Dr. Pankaj Goswami, Ratnesh Shukla</td>
<td>3/5/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Maintenance Device For Pipes</td>
<td>Kamal Kumar Gola,&nbsp; Sakshi Singh,&nbsp; Rahul Vishnoi, Dr. Pankaj Goswami,&nbsp; Prashant Kumar</td>
<td>3/5/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Pet Health And Hygiene Management System</td>
<td>Dr.Ashendra Saxena,&nbsp; Rahul Vishnoi, Dr. Pankaj Goswami, Sakshi Singh,&nbsp; Neeraj Kaushik</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Food Slicing And Cleaning Device</td>
<td>Dr.Gulista Khan, Mahir Hussain,&nbsp; K.B. Anand, Shri Bhagwan, Harish Kumar</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Multifunctional Dental Care Device</td>
<td>Dr. Arpit Jain,&nbsp; Sakshi Singh, Rahul Vishnoi, Dr. Pankaj Goswami, Prashant Kumar</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Ceiling Fan Cleaning Device</td>
<td>Dr.Shambhu Bhardwaj,&nbsp; Arun Gupta,&nbsp; Sunil Kumar, Sunil K Gaur,&nbsp; Anurag Srivastava</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Tile Installation System</td>
<td>&nbsp;Rahul Rathore, Rahul Vishnoi, Dr. Pankaj Kumar Goswami, Prashant Kumar, Neeraj Kaushik</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Comfort Based Clothing</td>
<td>Dr. Rakesh Kumar Dwivedi, Dr. Ashendra Kumar Saxena, Dr. Arpit Jain, Dr. Ashok Kumar, Rajendra Prasad Pandey, Vikas Yadav</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Multilevel Security Device For Luggage Bags</td>
<td>Dr. R.C. Tripathi, Dr. Rakesh Kumar Dwivedi, Dr. Arpit Jain, Neeraj Kumari, Pradeep Kumar Shah, Ranjana Sharma</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Ornament Storage And Recommendation System</td>
<td>Dr. Ashendra Kumar, Aman Kumar, Dr. Kirti Shukla, Aditya Jain, Dr. Ashok Kumar, Ranjana Sharma</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Anti-Drowning Lifesaving System</td>
<td>Dr. Rakesh Kumar Dwivedi, Dr. Ashendra Kumar Saxena, Dr. Arpit Jain, Dr. Shakti Kundu, Gaurav Kumar Rajpoot, Pradeep Kumar Shah,&nbsp;</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Multifunctional Sun Bathing Device</td>
<td>Dr. Rakesh Kumar Dwivedi, Rajendra Prasad Pandey, Hina Hashmi, Ranjana Sharma, Neeraj Kumari, Vineet Saxena</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Indoor Gaming Device</td>
<td>Dr. Arpit Jain, Jyoti Ranjan Labh, Ratnesh Kumar Shukla, Harjinder Singh, Pradeep Kumar Gupta, Tushar Mehrotra</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Stain-Free And Hygeinic Beverage Consuming Device</td>
<td>Dr. Rakesh Kumar Dwivedi, Neeraj Kumari, Dr. Kirti Shukla, Namit Gupta, Dr. R.C. Tripathi, Dr. Arpit Jain,&nbsp;</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Adaptable Sitting Device</td>
<td>Namit Gupta, Pradeep Kumar Shah, Ratnesh KumarShukla, Rohaila Naaz, Vineet Saxena, Vivek Kumar</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Cloth Cleaning And Drying Device</td>
<td>Dr. Rakesh Kumar Dwivedi,Dr. Ashendra Kumar Saxena, Dr. Arpit Jain, Pradeep Kumar Gupta, Tushar Mehrotra, Gaurav Kumar Rajput</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Sign Based Alerting Device</td>
<td>Dr. Ashendra Kumar, Abhilash Kumar Saxena, Ajay Rastogi, Satendra Kumar, Dr. Ashok Kumar, Vivek Kumar,&nbsp;</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Aquatic Life Saving Device</td>
<td>Dr. Rakesh Kumar Dwivedi, Hina Hashmi, Abhilash Kumar Saxena, Jyoti Ranjan Labh, Dr. Shakti Kundu, Neeraj Kumari,&nbsp;</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Ampoule Opening Device</td>
<td>Dr. Rakesh Kumar Dwivedi, Dr. Ashendra Kumar, Aditya Jain, Harjiner Singh, Dr. Shambu Bhardwaj, Dr. Rajeev Kumar</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Podium</td>
<td>Dr. Ashok Kumar, Dr. Arpit Jain, Aman Kumar, Jyoti Ranjan Labh, Amit Kumar Shukla, Ankur Chaudary,&nbsp;</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Maglev Based Sitting Device</td>
<td>Dr. Rakesh Kumar Dwivedi, Dr. Ashendra Kumar Saxena, Dr. Arpit Jain, Rupal Gupta, Pradeep Kumar Gupta, Tushar Mehrotra,&nbsp;</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Device For Preparing Puddings</td>
<td>Dr. Shakti Kundu, Ashish Bisnoi, Dr. Ashendra Kumar, Dr. Ashok Kumar, Aditya Jain, Dr. R.C. Tripathi,&nbsp;</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Food Dispensing System</td>
<td>Dr. Arpit Jain, Aditya Jain, Dr. R.C. Tripathi, Namit Gupta, Pradeep Kumar Shah, Priyank Singhal,&nbsp;</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Multifunctional Shopping Cart</td>
<td>Dr. Shambu Bhardwaj, Dr. Ashendra Kumar, Aditya Jain, Ashish Bisnoi, Namit Gupta, Priyank Singhal</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Two Factor Authentication Based Shopping Method</td>
<td>Vinay Kumar Mishra, Vivek Kumar, Gulista Khan, Anurag Gupta, Gaurav Kumar Rajput, Alok Singh Sengar, Rahul Rathor, Kamal Kumar Gola</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Ice Sport Training System</td>
<td>Anurag Gupta,Dr Vinay Mishra</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Multi-Level Security Based Hands Restraining Device</td>
<td>R.C. Tripathi,Dr Vinay Mishra</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Adaptive Weight Lifting Training System</td>
<td>Dr. Vinay Kumar Mishra</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Glassware Holding Device</td>
<td>Rohaila Naaz,Dr Gulista Khan</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Furnace</td>
<td>Dr R.K. Dwivedi,Anurag Gupta</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Modular Boat Propelling System</td>
<td>Dr. Rakesh Kumar Dwivedi,Dr Gulista Khan</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Indoor Solar Stove</td>
<td>Pradeep Kuar Gupta</td>
<td>4/30/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Dental Hygiene Maintenance Device</td>
<td>Manish Goyal, Dr Meghanand T Nayak, Dr M K Sunil, Dr Upendra Malik,&nbsp;</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Cutting And Washing Device For Nails</td>
<td>Dr. Gitanshu</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>&nbsp;Intelligent Writing Device</td>
<td>Dr. Mitra Pal Singh, Dr. Rashmi Mehrotra, Dr. Vinod KumarJain</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>A Heat Treatment Method For Synthesizing Nanocrystalline Hydroxyapatite From Labeo Rohita Fish Scales</td>
<td>Diptonil Banerjee</td>
<td>2/6/2021</td>
<td>Australia</td>
</tr>
<tr>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>A LOW-COST INDIAN CURRENCY IDENTIFIER FOR VISUALLY IMPAIRED PERSONS</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>10/23/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>THE SLOTTED PIN DIODE SWITCHED FREQUENCY RECONFIGURABLEANTENNA FOR FREQUENCY SHIFT-BASED INTERNETS OF THINGS APPLICATIONS</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>8/7/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>LOW COST GSM BASED SMART IRRIGATION SWITCH WITH 3 PHASES TO SINGLE PHASE SELECTOR</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>6/26/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>LOW COST VOICE ENABLED MULTI SENSE SMART STICK FOR VISUALLY IMPAIRED PERSON</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>3/20/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Pankaj Goswami, Dr. Garima Goswami &amp; Prof R K Dwivedi</td>
<td>AN INTERNET OF THINGS BASED SMART HI-TECH BUILDING SYSTEM FOR COVID PROTECTION</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>8/21/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Pankaj Goswami, Dr. Garima Goswami &amp; Prof R K Dwivedi</td>
<td>A PREDICTIVE ACCIDENT PREVENTION SYSTEM FOR VEHICLE SAFETY ON SHARP TURNS OF HILLY ROAD</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>9/4/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Pankaj Goswami, Dr. Garima Goswami &amp; Prof R K Dwivedi</td>
<td>A SMART ADAPTIVE NEURAL FUZZY INTERFACE SUPERVISED ACTIVE POWER FILTER FOR HARMONIC DISTORTION CONTROL IN AC POWER DRIVEN IOT DEVICES</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>3/20/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Pankaj Goswami, Dr. Garima Goswami &amp; Prof R K Dwivedi</td>
<td>A FRACTAL TRIDENT SHAPE LARGE BAND ANTENNA FOR MULTIPLE FREQUENCY-BASED INTERNETS OF THINGS APPLICATIONS</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>1/10/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Prof. R K Jain</td>
<td>Constraction Technology: Intelligent Earthquake Resistant Building Construction Technology</td>
<td>Prof. R K Jain</td>
<td>8/5/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Prof. R K Jain</td>
<td>IVH- Sanitizer System: Intelligent Vehicle Hand Sanitizer System Using Pre- Instruction</td>
<td>Prof. R K Jain</td>
<td>7/4/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Prof. R K Jain</td>
<td>Method for consuming municipal solid waste in construction materials</td>
<td>Prof. R K Jain</td>
<td>4/3/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Mr. Harish Kumar</td>
<td>Bio diesel and bio compost : Textile mil waste water &amp; Solid waste converted into bio diesel and bio compost</td>
<td>Mr. Harish Kumar</td>
<td>11/6/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Pankaj Goswami &amp;<br />Dr. Garima Goswami</td>
<td>An Auttomatic Spectacles Senses to Protect Eye from Excessive Harmful Optical Radiation</td>
<td>Dr. Pankaj Goswami &amp;<br />Dr. Garima Goswami</td>
<td>1/6/2021</td>
<td>Australia</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Food Processing Device</td>
<td>&nbsp;Sakshi Singh,&nbsp; Neeraj Kaushik,&nbsp; Shri Bhagwan, Amit Shukla</td>
<td>3/5/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Peripheral Device</td>
<td>&nbsp;Mahir Hussain, Sunil Kumar Gaur, VineetSaxena, Dr.Kirti Shukla</td>
<td>3/5/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Skin Cleaning Device</td>
<td>K B Anand,&nbsp; Harish Kumar,&nbsp; Ankit Gupta, Mohan Vishal Gupta</td>
<td>3/5/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Bore Well Rescuing Device</td>
<td>Sakshi Singh,&nbsp; Rahul Vishnoi, Dr. Pankaj Goswami, Neeraj Kaushik</td>
<td>3/5/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Multipurpose Henna Printing Device</td>
<td>Dr.Garima Goswami,&nbsp; Pradeep Kumar verma,&nbsp; Sunil Kumar, Dr. Rajeev Kumar,&nbsp; Navneet Vishnoi</td>
<td>3/5/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Illuminating System For Color Blind Patients</td>
<td>Dr.Garima Goswami, Rahul Vishnoi,Dr. Ajay Upadhyay,&nbsp; Rajendra Prasad Pandey</td>
<td>3/5/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Intelligent Door Lock System</td>
<td>Umesh K. Singh, Raghuvendra K. Singh, Prashant Kumar, Dr. Pankaj Goswami, Anun Gupta, Navneet Vishnoi</td>
<td>3/5/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Portable Charging Device</td>
<td>&nbsp;Pradeep Kr. Verma, Raghvendra Kumar Singh, Umesh Kr. Singh, Dr. Garima Goswami</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Secured Semi-Automated Tent</td>
<td>Rahul Vishnoi, Dr. Pankaj Goswami, Neeraj Kaushik, Prashant Kumar</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Skiing Assistance Device</td>
<td>&nbsp;Arun Gupta,&nbsp; Sunil Kumar, Sunil K Gaur, Anurag Srivastava</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Multipurpose Card Playing Device</td>
<td>Rahul Vishnoi, Dr. Pankaj Goswami, Neeraj Kaushik, Prashant Kumar</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Modular Drink Ware Device</td>
<td>&nbsp;Sakshi Singh,&nbsp; Rahul Vishnoi, Dr. Pankaj Goswami,&nbsp; Neeraj Kaushik,</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Customized Plant Watering And Protection System</td>
<td>&nbsp;Amit Singh,Sakshi Singh,Rahul Vishnoi, Dr. Pankaj Goswami, Prashant Kumar</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Tank Cleaning Device</td>
<td>&nbsp;Mahir Hussain, K.B. Anand,&nbsp; Shri Bhagwan,&nbsp; Harish Kumar</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Privacy Based Face Cover</td>
<td>Sakshi Singh,&nbsp; Rahul Vishnoi, Dr. Pankaj Goswami, Prashant Kumar</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Water Rafting Safety System</td>
<td>&nbsp;Arun Gupta,&nbsp; Sunil Kumar,&nbsp; Sunil K Gaur, Anurag Srivastava</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>System For Multi-Purpose Livestook Shelter</td>
<td>&nbsp;Mahir Hussain,&nbsp; K.B. Anand,&nbsp; Shri Bhagwan, Harish Kumar</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automatic Abacus Learning Device</td>
<td>Dr. Ajit Kumar, Dr. Vipin Kumar, Laxmi Kant Tiwari, Dr. Abhinav Saxena, Dr. Kamesh, Dr. Alok Gahlot, Ashok Kumar, Dr. Gopal Gupta</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Public Bench</td>
<td>Shri Bhagwan, Harish Kumar, Mahir Husain, Arun Gupta, Sunil Kumar, Anurag Srivastava, Sunil Kumar Gaur, K. B. Anand</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Multifunctional Infant Protetcion Device</td>
<td>K.B. Anand, Shri Bhagwan, Harish Kumar, Mahir Husain, Arun Gupta, Sunil Kumar, Anurag Srivastava, Sunil Kumar Gaur,&nbsp;</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Aquatic Based Personal Protection Device</td>
<td>Harish Kumar, Mahir Husain, Arun Gupta, Sunil Kumar, Anurag Srivastava, Sunil Kumar Gaur, K.B. Anand, Shri Bhagwan</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Portable Feces Collecting Device</td>
<td>Mahir Husain, Arun Gupta, Sunil Kumar, Anurag Srivastava, Sunil Kumar Gaur, K.B. Anand, Shri Bhagwan, Harish Kumar</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Shopping Cart Device</td>
<td>Arun Gupta, Sunil Kumar, Anurag Srivastava, Sunil Kumar Gaur, K.B. Anand, Shri Bhagwan, Harish Kumar, Mahir Husain</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Drinkware Holding Device</td>
<td>Sunil Kumar, Anurag Srivastava, Sunil Kumar Gaur, K.B. Anand, Shri Bhagwan, Harish Kumar, Mahir Husain, Arun Gupta</td>
<td>5/21/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Shoe Maintenance Device</td>
<td>Dr Arun Kumar Pipersenia, Dr Gopal K Gupta</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Drill Depth Controlling Device</td>
<td>Dr Ajay Kumar Upadhyay</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Solder Aiding Apparatus</td>
<td>Arun Gupta, <br />Alok Singh Sengar</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Tire Puncture Reinforcement Device</td>
<td>Dr Ajay Kumar Upadhyay</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Drain Cleaning Device</td>
<td>Dr RK Jain, A.K. Pipersania, Ankit Kumar, Amit Kumar, Nisha Sahal, Nikita Garg</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Fall Prevention Device</td>
<td>Dr Alok Singh Sengar, Dr Rahul Vishnoi</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Light Illuminating Device</td>
<td>Arun Gupta,<br />Dr Ajay K&nbsp; Upadhyay</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Anvil Restoration System</td>
<td>Arun Gupta</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Shuttle Maintenance Device</td>
<td>Dr Ajay K Upadhyay</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Adjustable Carousel</td>
<td>Dr Rajeev Kumar, <br />Rahul Vishnoi</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Lamp Making Device</td>
<td>Pradeep Verma</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Convertible Double Decker Bed</td>
<td>Dr Ajay K Updhayay,<br />Alok Singh Sengar</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Dual Authentication System For&nbsp; Vehicle Ignitions</td>
<td>Pradeep Verma,Rahul Vishnoi</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Modular Hang Gliding Device</td>
<td>Arun Gupta,<br />Dr Ajay K&nbsp; Upadhyay</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automatic Riveting Device</td>
<td>Alok Singh Sengar,Arun Gupta</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Head Wearable Device</td>
<td>Rahul Vishnoi</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>&nbsp;Wind Instrument Cleaning Device</td>
<td>Arun Gupta,<br />Dr Ajay K&nbsp; Upadhyay</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Multi Shape Pillar Constructing Device</td>
<td>Arun Gupta,<br />Dr Ajay K&nbsp; Upadhyay</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Portable Bathing Device</td>
<td>Vijendra Singh Rawat,Neha Anand</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Electric Iron</td>
<td>Pradeep Kr. Verma</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Secured Adjustable Socket</td>
<td>Rahul Vishnoi,Dr. Pankaj Goswami</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Clay Pot Preparation Device</td>
<td>Pradeep Kr. Verma</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Beverage Dispensing System</td>
<td>Arun Gupta</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Mold Removing Device</td>
<td>Arun Gupta</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Bread Processing And Preparing Device</td>
<td>Alok Singh Sengar,Rahul Vishnoi</td>
<td>5/28/2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>Diptonil Banerjee</td>
<td>Process for Synthesizing Europium Doped Graphitic Carbon Nitride (G-C3n4) For Removal of Textile Dyes from Water</td>
<td>Diptonil Banerjee</td>
<td>4/22/2021</td>
<td>Australia</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>IOT Based Smart Food Adulteration Detection System and Method Thereof</td>
<td>Pawan Kumar<br />Dr Ashutosh kumar Bhatt<br />Dr Rajeev Kumar<br />Dr Durgesh Pant</td>
<td>2/26/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Rohin Garg</td>
<td>WCM-Smart City: Waste Collection And Management Under Smart City Using Iot (Patent Granted By Australia Patent Act 1990)</td>
<td>Vipin Jain, Rohin Garg, Atul Kumar, Anil Parlikar, Yogesh Nagvekar, Santosh Nagoure, S B Chordiya, Ganesh Regulwar, Soumitra Das, Dilip Kumar Saini</td>
<td>9/9/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Vomit Collection Device</td>
<td>Jitendra Singh,Athokpam Sonia Devi,Basavaraj Mudhol</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>DR NAVNEET KUMAR</td>
<td>I-Spray: Intelligent Thief Identifier Through UV-GEL Spray.</td>
<td>1. Dr. M. N.Rao<br />2. Dr. M.V.Rao. <br />3. Dr. V. Suryanarayana<br />4. Dr. Ram Gopal</td>
<td>2/8/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Mrs. Archana Ravindra Jain</td>
<td>Ogygen level enhancer in air through electrolysis of water</td>
<td>Pradeep k gupta, Anubhav Gupta, Ankit Kumae, Arun Kumar, Navneet Kumar, Vineet Saxena, Jyoti Ranjan, Sandeep Saxena</td>
<td>6/11/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Anurag Verma</td>
<td>Gastroretentive Formulation with carboxymethylated Gum Sterculia</td>
<td>Anurag Verma</td>
<td>1/15/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Laparoscope Disinfection Device</td>
<td>Anurag Verma</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Nasal Dilation Device</td>
<td>Anurag Verma</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Pain Alleviating Device</td>
<td>Anurag Verma</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Dr. Amit Sharma</td>
<td>IoT Based Smart Rodent Repelling System for Automobiles</td>
<td><br />Dr Anuj Kumar Agarwal, <br />Associate Prof.</td>
<td>16-Jun-21</td>
<td>Australia</td>
</tr>
<tr>
<td>1 . DR. VIPIN JAIN<br />2 . DR. NARESH TRIVEDI<br />3 . DR. MANJU KHARI<br />4 . DR. HEMLATA SHARMA<br />5 . PROF. SANTOSH GOPAL NAGPURE <br />6 . DR. MONIKA SHARMA <br />7 . MS. DEVIKA DHUMAL</td>
<td>PRAP-SYSTEM: PREVENTING REAL TIME ACCIDENTIAL PROBABILITIES SYSTEM.&nbsp;</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. NARESH TRIVEDI<br />3 . DR. MANJU KHARI<br />4 . DR. HEMLATA SHARMA<br />5 . PROF. SANTOSH GOPAL NAGPURE <br />6 . DR. MONIKA SHARMA <br />7 . MS. DEVIKA DHUMAL</td>
<td>10/18/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>1 . DR. VIPIN JAIN<br />2 . DR. VARINDER SINGH<br />3 . DR. SURESH KUMAR<br />4 . PROF. SANTOSH GOPAL NAGPURE <br />5 . T.K. LAKSHMI <br />6 . DR. R. MADANA MOHANA <br />7 . MR. JAY CHANDRASHEKHAR AJMIRE<br />8 . MR. YASH MADHUKAR PATIL<br />9 . MR. PARTH RAVINDRA PATIL</td>
<td>I-ADAPTER: INTELLIGENT ADAPTER&nbsp;</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. VARINDER SINGH<br />3 . DR. SURESH KUMAR<br />4 . PROF. SANTOSH GOPAL NAGPURE <br />5 . T.K. LAKSHMI <br />6 . DR. R. MADANA MOHANA <br />7 . MR. JAY CHANDRASHEKHAR AJMIRE<br />8 . MR. YASH MADHUKAR PATIL<br />9 . MR. PARTH RAVINDRA PATIL</td>
<td>10/18/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>1 . DR. SURESH KUMAR<br />2 . DR. VIPIN JAIN<br />3 . DR. MANJU KHARI<br />4 . RAMACHANDRAN ALAGARSAMY <br />5 . BAALAMURUGAN K. M<br />6 . PROF. SANTOSH GOPAL NAGPURE <br />7 . DR. PUSHPENDER SARAO <br />8 . PROF. MANAV ASHOK THAKUR <br />9 . NIKITA SURENDRA KANDHARE<br />10 . SANSKRUTI MANISH VYAS</td>
<td>ML-SYSTEM: MOBILE LOCKING SYSTEM FOR VEHICLE&nbsp;</td>
<td>1 . DR. SURESH KUMAR<br />2 . DR. VIPIN JAIN<br />3 . DR. MANJU KHARI<br />4 . RAMACHANDRAN ALAGARSAMY <br />5 . BAALAMURUGAN K. M<br />6 . PROF. SANTOSH GOPAL NAGPURE <br />7 . DR. PUSHPENDER SARAO <br />8 . PROF. MANAV ASHOK THAKUR <br />9 . NIKITA SURENDRA KANDHARE<br />10 . SANSKRUTI MANISH VYAS</td>
<td>10/18/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>1 . DR. VIPIN JAIN<br />2 . DR. AASHISH MEHRA<br />3 . PVN SAICHANDU<br />4 . BABY THERESA GUDAVALLI<br />5 . PROF. AVINASH GOPAL PATIL<br />6 . PROF. DR. BEG RAJ SINGH</td>
<td>AIH-STAND: AI- BASED HYRAULIC CENTRE STAND FOR MOTORCYCLE USING HAND LEVER&nbsp;</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. AASHISH MEHRA<br />3 . PVN SAICHANDU<br />4 . BABY THERESA GUDAVALLI<br />5 . PROF. AVINASH GOPAL PATIL<br />6 . PROF. DR. BEG RAJ SINGH</td>
<td>10/18/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>1 . Dr. Varinder Singh<br />2 . Dr. Vipin Jain<br />3 . Dr. Sudesh Kumar<br />4 . Dr. Shikha Maheshwari&nbsp; <br />5 . Prof. Dr. Beg Raj SIngh<br />6 . Mr. Pawan Kumar Singh<br />7. Miss. Pari Nidhi Singh</td>
<td>AEVM-Control: Advanced Electric Vehicle Controlling System using Beagle Bone Black.</td>
<td>1 . Dr. Varinder Singh<br />2 . Dr. Vipin Jain<br />3 . Dr. Sudesh Kumar<br />4 . Dr. Shikha Maheshwari&nbsp; <br />5 . Prof. Dr. Beg Raj SIngh<br />6 . Mr. Pawan Kumar Singh<br />7. Miss. Pari Nidhi Singh</td>
<td>11/8/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>1 . PROF.(DR.) VIPIN JAIN <br />2 . DR. MANVINDER SINGH PAHWA<br />3 . DR. CHANCHAL CHAWLA <br />4 . DR. RAJEEV GUPTA <br />5 . DR. RADHEY SHYAM JHA <br />6 . DR. MANOJ AGARWAL <br />7 . DR. SATYENDRA ARYA <br />8 . DR VIBHOR JAIN<br />9 . DR. MREDU GIYAL&nbsp;</td>
<td>BPES-ATM: BIOMETRIC INPUT AND PIN AUTHENTICATION TO ENHANCE SECURITY OF THE AUTOMATIC TELLER MACHINES&nbsp;</td>
<td>1 . PROF.(DR.) VIPIN JAIN <br />2 . DR. MANVINDER SINGH PAHWA<br />3 . DR. CHANCHAL CHAWLA <br />4 . DR. RAJEEV GUPTA <br />5 . DR. RADHEY SHYAM JHA <br />6 . DR. MANOJ AGARWAL <br />7 . DR. SATYENDRA ARYA <br />8 . DR VIBHOR JAIN<br />9 . DR. MREDU GIYAL&nbsp;</td>
<td>11/22/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>1 . PROFESSOR (DR.) VIPIN JAIN <br />2 . MR. PARITOSH SHARMA <br />3 . PROFESSOR (DR.) SHARAD KUMAR GOEL<br />4 . DR. ROHIN GARG <br />5 . PROFESSOR (DR.) AASHISH MEHRA<br />6 . DR. RACHIT AGARWAL <br />7 . DR. CHANCHAL CHAWLA <br />8 . DR. MANOJ AGARWAL&nbsp;</td>
<td>ADVANCED BUSINESS SERVICE MANAGEMENT SYSTEM&nbsp;</td>
<td>1 . PROFESSOR (DR.) VIPIN JAIN <br />2 . MR. PARITOSH SHARMA <br />3 . PROFESSOR (DR.) SHARAD KUMAR GOEL<br />4 . DR. ROHIN GARG <br />5 . PROFESSOR (DR.) AASHISH MEHRA<br />6 . DR. RACHIT AGARWAL <br />7 . DR. CHANCHAL CHAWLA <br />8 . DR. MANOJ AGARWAL&nbsp;</td>
<td>3/6/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>1)SUSHAMA RANI DUTTA <br />&nbsp;2)DR. S. THULASI PRASAD <br />&nbsp;3)PROF. (DR.) VIPIN JAIN <br />&nbsp;4)DR. RAJINDER SINGH SODHI <br />&nbsp;5)DR. VRUSHSEN PURUSHOTTAM PAWAR<br />&nbsp;6)PROF.(DR.) S. B. CHORDIYA&nbsp;</td>
<td>Serious Patient Checking Systems: Serious Patients Checking using Machine Learning and Artificial Intelligence (AI)&nbsp;</td>
<td>1)SUSHAMA RANI DUTTA <br />&nbsp;2)DR. S. THULASI PRASAD <br />&nbsp;3)PROF. (DR.) VIPIN JAIN <br />&nbsp;4)DR. RAJINDER SINGH SODHI <br />&nbsp;5)DR. VRUSHSEN PURUSHOTTAM PAWAR<br />&nbsp;6)PROF.(DR.) S. B. CHORDIYA&nbsp;</td>
<td>6/5/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>1)MR. KASALA RAJU<br />&nbsp;2)PROF.(DR.) PAWAN KUMAR BHARTI <br />&nbsp;3)DR. SAVRABH KAWAR <br />&nbsp;4)PROF.(DR.) M.K. PANDEY <br />&nbsp;5)PROF. (DR.) VIPIN JAIN <br />&nbsp;6)DR. VRUSHSEN PURUSHOTTAM PAWAR</td>
<td>COVID19 KILLER: Sanitizer Making Process Using Machine Learning to Kill SARS Coronavirus (COVID19)&nbsp;</td>
<td>1)MR. KASALA RAJU<br />&nbsp;2)PROF.(DR.) PAWAN KUMAR BHARTI <br />&nbsp;3)DR. SAVRABH KAWAR <br />&nbsp;4)PROF.(DR.) M.K. PANDEY <br />&nbsp;5)PROF. (DR.) VIPIN JAIN <br />&nbsp;6)DR. VRUSHSEN PURUSHOTTAM PAWAR</td>
<td>6/5/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>1)Dr. TULASICHANDRA SEKHAR GORRIPOTU<br />&nbsp;2)ANDHAVARAPU KANTHI <br />&nbsp;3)SOUBHAGYA RANJAN MALLICK<br />&nbsp;4)DR. PRADYUMNA KUMAR TRIPATHY<br />&nbsp;5)PROFESSOR (DR.) VIPIN JAIN <br />&nbsp;6)MR. AAYUSH MANGAL</td>
<td>AEMC &ndash; IOT SYSTEM: Agriculture Environment Managed and Control Using IOT System&nbsp;</td>
<td>1)Dr. TULASICHANDRA SEKHAR GORRIPOTU<br />&nbsp;2)ANDHAVARAPU KANTHI <br />&nbsp;3)SOUBHAGYA RANJAN MALLICK<br />&nbsp;4)DR. PRADYUMNA KUMAR TRIPATHY<br />&nbsp;5)PROFESSOR (DR.) VIPIN JAIN <br />&nbsp;6)MR. AAYUSH MANGAL</td>
<td>6/5/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>1)DR. SUDHA ARVIND<br />&nbsp;2)DR. DEVIKA S.V. <br />&nbsp;3)DR. C.M. JOSHI <br />&nbsp;4)PROF. (DR.) VIPIN JAIN <br />&nbsp;5)PROF. DR. YASHPAL SINGH <br />&nbsp;6)PROF.(DR.) VANDANA SINGH&nbsp;</td>
<td>Methods and Compositions for Infectious RNA, CDNA, and MRNA of SARS Coronavirus.&nbsp;</td>
<td>1)DR. SUDHA ARVIND<br />&nbsp;2)DR. DEVIKA S.V. <br />&nbsp;3)DR. C.M. JOSHI <br />&nbsp;4)PROF. (DR.) VIPIN JAIN <br />&nbsp;5)PROF. DR. YASHPAL SINGH <br />&nbsp;6)PROF.(DR.) VANDANA SINGH&nbsp;</td>
<td>6/5/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>1)DR. NEERAJ KUMAR MISRA <br />2)BRIJESH PANDEY<br />3)RATIRANJAN SENAPATI<br />4)Dr. SHAILENDRA KUMAR <br />5)PROF. (DR.) VIPIN JAIN<br />6)ABHILASHI UNIVERSITY</td>
<td>IVA-Parking: Intelligent Vehicle Parking Space Availability, Time Slot and Charge Notifications using IOT based Management Technology.&nbsp;</td>
<td>1)DR. NEERAJ KUMAR MISRA <br />2)BRIJESH PANDEY<br />3)RATIRANJAN SENAPATI<br />4)Dr. SHAILENDRA KUMAR <br />5)PROF. (DR.) VIPIN JAIN<br />6)ABHILASHI UNIVERSITY</td>
<td>6/19/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Vipin Jain, Rohin Garg, Divakar Yadav, B Venkatesh, Nagendra Pratap Singh, S.V Prabhakar, Arun Kumar Yadav, S Arvind, Jagdeep Singh, S.B. Chordiya</td>
<td>AAM-Physical Fitness: ANALYSIS OF PHYSICAL FITNESS AND ACTIVITY LEVEL USING MACHINE LEARNING, DEEP LEARNING PROGRAMMING. (Patent Granted by Australia Patent Act 1990)</td>
<td>Vipin Jain, Rohin Garg, Divakar Yadav, B Venkatesh, Nagendra Pratap Singh, S.V Prabhakar, Arun Kumar Yadav, S Arvind, Jagdeep Singh, S.B. Chordiya</td>
<td>8/26/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Vipin Jain, Rohin Garg, Atul Kumar, Anil Parlikar, Yogesh Nagvekar, Santosh Nagoure, S B Chordiya, Ganesh Regulwar, Soumitra Das, Dilip Kumar Saini</td>
<td>WCM-Smart City: WASTE COLLECTION AND MANAGEMENT UNDER SMART CITY USING IOT (Patent Granted by Australia Patent Act 1990)</td>
<td>Vipin Jain, Rohin Garg, Atul Kumar, Anil Parlikar, Yogesh Nagvekar, Santosh Nagoure, S B Chordiya, Ganesh Regulwar, Soumitra Das, Dilip Kumar Saini</td>
<td>9/9/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Vipin Jain, Jyothi Mandala, Alka Kulkarni, CH. Rayala Vinodkumar, Rambabu Vatti, Rakhi Joshi Bhardwaj, Kanchan D. Ganvir, L. Venkateswara Reddy, P. Lalitha Surya Kumari, Pankaj Kumar Srivastava</td>
<td>SDHR-Blockchain Technology: Securely Store Digital Healthcare Records, Notification, Alert Using Blockchain Technology (Patent Granted by Australian Patent Act 1990)</td>
<td>Vipin Jain, Jyothi Mandala, Alka Kulkarni, CH. Rayala Vinodkumar, Rambabu Vatti, Rakhi Joshi Bhardwaj, Kanchan D. Ganvir, L. Venkateswara Reddy, P. Lalitha Surya Kumari, Pankaj Kumar Srivastava</td>
<td>10/7/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Anju Saxena, Mosam Sinha, Baswaraj Gadgay, V. Jyothi, Vipin Jain, Saurabh Dev, Santosh Gopal Nagpure, Avinash Thakur, Vineet kumar, S. B. Chordiya</td>
<td>AMPI- Hazardous &amp; non-Hazardous Wastes Management: Automatic Method and Process Management for Industrial Hazardous and non-Hazardous Wastes</td>
<td>Anju Saxena, Mosam Sinha, Baswaraj Gadgay, V. Jyothi, Vipin Jain, Saurabh Dev, Santosh Gopal Nagpure, Avinash Thakur, Vineet kumar, S. B. Chordiya</td>
<td>10/15/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Vipin Jain, Rajesh Kumar Pathak, Pawan Kumar Bharti, Ajeet Singh, MD. Iqbal, Ksrk Sarma, Om Prakash Sahu, Prasant Kumar Pattnaik, S. B. Chordiya</td>
<td>DACH- Health Notification: IoT-based Health Notification and Doctor Availability Checking in Hospital Using Machine Learning, Deep Learning Programming</td>
<td>Vipin Jain, Rajesh Kumar Pathak, Pawan Kumar Bharti, Ajeet Singh, MD. Iqbal, Ksrk Sarma, Om Prakash Sahu, Prasant Kumar Pattnaik, S. B. Chordiya</td>
<td>10/6/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Rambabu Vatti, Pallavi Badry, B Venkatesh, Viswanatha Reddy Allugunti, Vipin Jain, Kanchan D. Ganvir, Ankur Singh Bist, Anurag Jain, Aakriti Jain, Avinash Thakur</td>
<td>APIC- Recycling C&amp;D Waste: Automatic Process for Recycling C&amp;D Waste Including Concrete Part and Convert Useful Material (Patent Granted by Australia Patent Act 1990)</td>
<td>Rambabu Vatti, Pallavi Badry, B Venkatesh, Viswanatha Reddy Allugunti, Vipin Jain, Kanchan D. Ganvir, Ankur Singh Bist, Anurag Jain, Aakriti Jain, Avinash Thakur</td>
<td>10/15/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Sony Karra, K. Sarat Kumar, K. Ch. Sri Kavya, A. Narendra Babu, Rakesh Kumar Yadav, Naga Swetha Pasupuleti, Kotte Sowjanya, Vipin Jain, S. B. Chordiya, Biplab Kumar Sarkar</td>
<td>PAVC- Improvement Techniques of Free Space Optical Link: PERFORMANCE ANALYSIS AND IMPROVEMENT TECHNIQUES OF FREE SPACE OPTICAL LINK IN VARIOUS ATMOSPHERIC CONDITIONS</td>
<td>Sony Karra, K. Sarat Kumar, K. Ch. Sri Kavya, A. Narendra Babu, Rakesh Kumar Yadav, Naga Swetha Pasupuleti, Kotte Sowjanya, Vipin Jain, S. B. Chordiya, Biplab Kumar Sarkar</td>
<td>11/9/2020</td>
<td>australia</td>
</tr>
<tr>
<td>K. B. Waghulde, Milind M. Patil, D. Venkata Naga Ananth, Atul Ashok Patil, Sarika Atul Patil, Sumit S. Desai, Vipin Jain, S. B. Chordiya, Sandeep Kumar Gupta, Biplab Kumar Sarkar</td>
<td>EI-Overheat Control System: Engine Overheat Intelligent Control System</td>
<td>K. B. Waghulde, Milind M. Patil, D. Venkata Naga Ananth, Atul Ashok Patil, Sarika Atul Patil, Sumit S. Desai, Vipin Jain, S. B. Chordiya, Sandeep Kumar Gupta, Biplab Kumar Sarkar</td>
<td>11/9/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Sharad Kumar Goel, Vipin Jain, Paritosh Sharma, Chanchal Chawla, Amit Kansal, Rohin Garg, Ankit Kumar, Rajeev Sijaria, Sangeet Vashishtha, Ravindra SV</td>
<td>CTAO- Education Monitoring: IoT based Education Monitoring for Checking the Class Teacher Available in a Class and Notes Available On-line Notified</td>
<td>Sharad Kumar Goel, Vipin Jain, Paritosh Sharma, Chanchal Chawla, Amit Kansal, Rohin Garg, Ankit Kumar, Rajeev Sijaria, Sangeet Vashishtha, Ravindra SV</td>
<td>11/4/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Vipin Jain, Amit Kansal, Chanchal Chawla, Ankit Kumar, Rohin Garg, Rachit Agarwal, Sharad Kumar Goel, Rajeev Sijaria, Pooja Sharma, Abhishek Maheshwari</td>
<td>IPBE-Detect Quality of Works: Intelligent process to detect employee&rsquo;s quality of works and notify it to authorities</td>
<td>Vipin Jain, Amit Kansal, Chanchal Chawla, Ankit Kumar, Rohin Garg, Rachit Agarwal, Sharad Kumar Goel, Rajeev Sijaria, Pooja Sharma, Abhishek Maheshwari</td>
<td>10/23/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Raj Gaurang Tiwari, V. Srikanth, A. Murali, T. Meenakshi, Sunitha. JD, Viswanatha Reddy Allugunti, L. Venkateswara Reddy, Sudarshan Sampatrao Bobade, Vishakha A. Metre, Vipin Jain</td>
<td>ISUAV-Woman Security: Intelligent Woman Security Using Streetlight and Auto Run Unmanned Aerial Vehicle Using IOT- Based Technology</td>
<td>Raj Gaurang Tiwari, V. Srikanth, A. Murali, T. Meenakshi, Sunitha. JD, Viswanatha Reddy Allugunti, L. Venkateswara Reddy, Sudarshan Sampatrao Bobade, Vishakha A. Metre, Vipin Jain</td>
<td>10/23/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Vipin Jain, A. Srujana, Swati Kumari, C. N. Ravi, B. Sudhakar Reddy, B. Rajesh, M. Vijay kumar, Anil Vishram Revankar, Sanjay Bhaskar Zope, Nadia P. Reznik, S. B. Chordiya</td>
<td>IFAC- Driver Less Vehicle: Driver Less Intelligent Fully Autonomous Controlled Vehicle</td>
<td>Vipin Jain, A. Srujana, Swati Kumari, C. N. Ravi, B. Sudhakar Reddy, B. Rajesh, M. Vijay kumar, Anil Vishram Revankar, Sanjay Bhaskar Zope, Nadia P. Reznik, S. B. Chordiya</td>
<td>11/18/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Vipin Jain, Deepak Balodi, Mahima Shanker Pandey, Deepak Sharma, Venkateswarlu Sunkari, Sonia Ahsan, S. B. Chordiya, Beg Raj</td>
<td>CDN- Object Detection System: Object Detection System with Image Classification and Deep Neural Networks</td>
<td>Vipin Jain, Deepak Balodi, Mahima Shanker Pandey, Deepak Sharma, Venkateswarlu Sunkari, Sonia Ahsan, S. B. Chordiya, Beg Raj</td>
<td>11/20/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Vipin Jain, V. Vijaya Kishore, Sreevidya R. C., G. L. Bhong, Satish Kumar, Satish Kumar Kalhotra, Mohd Zuhair, Neeraj Kumar Misra, Nirupma Pathak, Bandan Kumar Bhoi</td>
<td>QCIU- Education Environment System: Quantum Computing Integrated Development Education Environment Using IoT-Based System</td>
<td>Vipin Jain, V. Vijaya Kishore, Sreevidya R. C., G. L. Bhong, Satish Kumar, Satish Kumar Kalhotra, Mohd Zuhair, Neeraj Kumar Misra, Nirupma Pathak, Bandan Kumar Bhoi</td>
<td>12/2/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Vipin Jain, Manish Mahajan, K. Ramesh Babu, Rijwan Khan, Lekha Rani, Arun Wamanrao Dhawale, Naga Swetha Pasupuleti, Chris Egbu, S. B. Chordiya, Nitin Balkrishna Chaphalkar</td>
<td>OMAI- Waste Treatment Systems: AI- Based Programming for Operation and Maintenance of Waste Treatment Systems</td>
<td>Vipin Jain, Manish Mahajan, K. Ramesh Babu, Rijwan Khan, Lekha Rani, Arun Wamanrao Dhawale, Naga Swetha Pasupuleti, Chris Egbu, S. B. Chordiya, Nitin Balkrishna Chaphalkar</td>
<td>11/18/2020</td>
<td>australia</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automated Ice Cream Cutting And Serving Device</td>
<td>Vipin Jain, Dr. Aditya Sharma, Dr. Manoj Agarwal, Dr. Chanchal Chawla, Dr. Rajeev Verma, Dr. Puneet Sethi</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Priority Based Elevator Management System</td>
<td>&nbsp;Vipin Jain, Dr. Aditya Sharma, Dr.Manoj Agarwal, Dr. Chanchal Chawla, Dr. Rajeev Verma, Mohit Rastogi</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Multifunctional Elevator Management System</td>
<td>Vipin Jain, Dr. Aditya Sharma, Dr. Manoj Agarwal, Dr. Chanchal Chawla, Dr. Rajeev Verma, Dr. Puneet Sethi</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Egg Cooking Device</td>
<td>&nbsp;Vipin Jain, Dr. Aditya Sharma, Dr.Manoj Agarwal, Dr. Chanchal Chawla, Dr. Rajeev Verma, Mohit Rastogi</td>
<td>5/21/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Card Holding Apparatus</td>
<td>Dr Manjula Jain, Dr Aditya Sharma</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Automatic Door Stopping Device</td>
<td>Raghuvir Singh</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Smart Liquid Containing Device</td>
<td>Raghuvir Singh</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Anti Shock Device</td>
<td>Dr Vipin Jain, Dr Aditya Sharma, Dr Manjula Jain</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>Teerthanker Mahaveer University</td>
<td>Wearable Cleaning Apparatus</td>
<td>Dr Vipin Jain, Dr Manjula Jain, Dr Aditya Sharma</td>
<td>5/28/2021</td>
<td>Govt. of India</td>
</tr>
</tbody>
</table>
</div>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion">Patents Awarded<span class="icon">+</span></button>
    <div class="panel">
    
    <div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th >#</th>
													<th style="text-align:center;">Applicant Name</th>

													<th style="text-align:center;">Title of Invention</th>
													<th style="text-align:center;">Inventor(s)</th>
												<th style="text-align:center;width:15%;">	Date of Award<br/>(mm/dd/YYYY)</th>
													<th style="text-align:center;">Organization</th>
												</tr>								
</thead>												
<tbody>
<tr>
<td>1</td>
<td>Dr. Arpit Jain, Dr. Rajeev Kumar, Namit Gupta</td>
<td>Power Theft Detection : Power Theft Detection And Notification Using Wireless Network</td>
<td>Namit Gupta; Kunwar Singh; Dr. Arpit Jain; Anil Kumar Pandey; Dr. Rajeev Kumar; Nripendra Narayan Das; Sandeep Kumar; Dinesh Kumar Saini;Biplab Kumar Sarkar; S.B.Chordiya</td>
<td>12/2/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>2</td>
<td>Dr. Arpit Jain</td>
<td>IAVP-Intelligent Business Data: Intelligent Business Data Visualization Using AI-Based Programming</td>
<td>Anand Pandey; Dr. Arpit Jain; Sanjay Pratap Singh; Lalit Verma; Mahesh Avadhutrao; Vishakha A. Metre; S.B.Chordiya;Yashpal Singh</td>
<td>10/14/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>3</td>
<td>Dr. Rakesh Kr. Dwivedi,Dr. Arpit Jain</td>
<td>IMT-Voice Based Mobile Banking : Intelligent Money Transfer Using Voice Based Mobile Banking</td>
<td>Dr. Arpit Jain; Karan Singh; Dr. Rakesh Kumar Dwivedi; Bharat Bhushan Sagar; Satvik Vats; Latha Banda; Manisha Manjul; Tayyab Khan; Biplab Kumar Sarkar</td>
<td>10/21/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>4</td>
<td>Dr. Ashendra Kr. Saxena&nbsp;</td>
<td>AMD Data Analysis: Academy Data Analysis Using Machine Learning,Deep Learning Programming&nbsp;</td>
<td>Dr. Ashendra Kr. Saxena ; MD. Iqbal; Rupesh Kumar Jindal; Santosh Dilipkumar Parakh; ER. Rakesh Kumar; Chukka Santhaiah; S.B. Chrdiya; Rambabau Vatti</td>
<td>10/21/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>5</td>
<td>Dr. Arpit Jain</td>
<td>MT-Family Member Activities and Location : Family Member Activities And Location Management Technology</td>
<td>Ashish Dudhale; Prachi Labde; Archana Shirbhate; Dr. Arpit Jain; Sandeep Kumar Gupta; S.B.Chordiya&nbsp;</td>
<td>10/21/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>6</td>
<td>Dr. Arpit Jain,Dr. Ashok Kumar,Ankur Chaudhary, Jyoti Ranjan Labh</td>
<td>SBDA- Secured Bra For Women Safety: Smart And Secured Bra For Women Safety Based On Deep Learning Algorithm</td>
<td>Sandeep Kumar; Dr. Arpit Jain; Rohit Raja; Shilpa Rani; Sanjay Sharma; Alok Kumar Singh ; Padma Bonde; Dr. Ashok Kumar; Ankur Chaudhary; Jyoti Ranjan Labh; S.B.Chordiya</td>
<td>11/11/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>7</td>
<td>Dr. Rakesh Kr. Dwivedi,Dr. Arpit Jain, Aman Kumar&nbsp;</td>
<td>SEF:&nbsp; Smart Educational Framework: Smart AI-IOT Based Educator Monitoring And Content Availability Alert System</td>
<td>Dr. Arpit Jain; Aman Kumar; Anand Prakash Shukla; Dr. Rakesh Kumar Dwivedi; Hitendra Garg; Ankur Bhardwaj; Pramod Kumar; Sanjay Singh; Satyendra Singh; Rohit Agarwal</td>
<td>11/25/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>8</td>
<td>Dr. Ashendra Kr. Saxena ,Ajay Rastogi</td>
<td>INHA- Combined Health Monitoring: Intelligent IoT- Based Combined Health Monitoring, Notification, Alert, Home<br />Automation System</td>
<td>Raghuraj Singh; Parma Nand; Prashant Kumar Mishra; Vibhash Yadav;Pawan Kumar Pal;Charu Awasthi; Ashendra Kumar Saxena; Danish Ather; Ajay Rastogi; Ambuj Kumar Agarwal</td>
<td>12/23/2020</td>
<td>Australia</td>
</tr>
<tr>
<td>9</td>
<td>Anu Sharma</td>
<td>DAMA- Dataset Discovery:Dataset&nbsp; Discovery in Data Analytics and Machine Learning Algorithm</td>
<td>JeevanKiran Dandangi; Jyothi Mandala;CH Rayala Vinod Kumar;Anu Sharma;V Balaji Chandrasekhar; S. Selvakumar;Najid Ahmad; Sandeep Kumar Gupta; S.B. Chordiya;Beg Raj</td>
<td>1/13/2021</td>
<td>Australia</td>
</tr>
<tr>
<td>10</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Intelligent Pen Drive: Highest Data Security (Auto Data store your gmail and link share your mobile no.) using AI Based Programming</td>
<td>Dr R K Dwivedi, Sahana Lokesh R, Anu Sharma, Dr Arun Jain, Dr Anshu Parashar, Dr Anish Soni, Dr Sukhdev Singh, Shivani Pandey, Rupesh Kumar Jindal Amit Garg</td>
<td>4/7/2021</td>
<td>Australia</td>
</tr>
<tr>
<td>11</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>A Heat Treatment Method For Synthesizing Nanocrystalline Hydroxyapatite From Labeo Rohita Fish Scales</td>
<td>Diptonil Banerjee</td>
<td>4/14/2021</td>
<td>Australia</td>
</tr>
<tr>
<td>12</td>
<td>Dr. Pankaj Goswami &amp;<br />Dr. Garima Goswami</td>
<td>An Auttomatic Spectacles Senses to Protect Eye from Excessive Harmful Optical Radiation</td>
<td>Dr. Pankaj Goswami &amp;<br />Dr. Garima Goswami</td>
<td>3/10/2021</td>
<td>Australia</td>
</tr>
<tr>
<td>13</td>
<td>Diptonil Banerjee</td>
<td>Process for Synthesizing Europium Doped Graphitic Carbon Nitride (G-C3n4) For Removal of Textile Dyes from Water</td>
<td>Diptonil Banerjee</td>
<td>5/26/2021</td>
<td>Australia</td>
</tr>
<tr>
<td>14</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>IOT Based Smart Food Adulteration Detection System and Method Thereof</td>
<td>Pawan Kumar<br />Dr Ashutosh kumar Bhatt<br />Dr Rajeev Kumar<br />Dr Durgesh Pant</td>
<td>4/14/2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>15</td>
<td>Dr. Rohin Garg</td>
<td style="font-weight: 400;">WCM-Smart City: Waste Collection And Management Under Smart City Using Iot (Patent Granted By Australia Patent Act 1990)</td>
<td>Vipin Jain, Rohin Garg, Atul Kumar, Anil Parlikar, Yogesh Nagvekar, Santosh Nagoure, S B Chordiya, Ganesh Regulwar, Soumitra Das, Dilip Kumar Saini</td>
<td>10/7/2020</td>
<td>australia</td>
</tr>
<tr>
<td>16</td>
<td>DR NAVNEET KUMAR</td>
<td>I-Spray: Intelligent Thief Identifier Through UV-GEL Spray.</td>
<td>1. Dr. M. N.Rao<br />2. Dr. M.V.Rao. <br />3. Dr. V. Suryanarayana<br />4. Dr. Ram Gopal</td>
<td>3/1/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>17</td>
<td>Dr. Amit Sharma</td>
<td>IoT Based Smart Rodent Repelling System for Automobiles</td>
<td><br />Dr Anuj Kumar Agarwal, <br />Associate Prof.</td>
<td>21-Jul-21</td>
<td>Australia</td>
</tr>
<tr>
<td>18</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. NARESH TRIVEDI<br />3 . DR. MANJU KHARI<br />4 . DR. HEMLATA SHARMA<br />5 . PROF. SANTOSH GOPAL NAGPURE <br />6 . DR. MONIKA SHARMA <br />7 . MS. DEVIKA DHUMAL</td>
<td>PRAP-SYSTEM: PREVENTING REAL TIME ACCIDENTIAL PROBABILITIES SYSTEM.&nbsp;</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. NARESH TRIVEDI<br />3 . DR. MANJU KHARI<br />4 . DR. HEMLATA SHARMA<br />5 . PROF. SANTOSH GOPAL NAGPURE <br />6 . DR. MONIKA SHARMA <br />7 . MS. DEVIKA DHUMAL</td>
<td>10/18/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>19</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. VARINDER SINGH<br />3 . DR. SURESH KUMAR<br />4 . PROF. SANTOSH GOPAL NAGPURE <br />5 . T.K. LAKSHMI <br />6 . DR. R. MADANA MOHANA <br />7 . MR. JAY CHANDRASHEKHAR AJMIRE<br />8 . MR. YASH MADHUKAR PATIL<br />9 . MR. PARTH RAVINDRA PATIL</td>
<td>I-ADAPTER: INTELLIGENT ADAPTER&nbsp;</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. VARINDER SINGH<br />3 . DR. SURESH KUMAR<br />4 . PROF. SANTOSH GOPAL NAGPURE <br />5 . T.K. LAKSHMI <br />6 . DR. R. MADANA MOHANA <br />7 . MR. JAY CHANDRASHEKHAR AJMIRE<br />8 . MR. YASH MADHUKAR PATIL<br />9 . MR. PARTH RAVINDRA PATIL</td>
<td>10/18/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>20</td>
<td>1 . DR. SURESH KUMAR<br />2 . DR. VIPIN JAIN<br />3 . DR. MANJU KHARI<br />4 . RAMACHANDRAN ALAGARSAMY <br />5 . BAALAMURUGAN K. M<br />6 . PROF. SANTOSH GOPAL NAGPURE <br />7 . DR. PUSHPENDER SARAO <br />8 . PROF. MANAV ASHOK THAKUR <br />9 . NIKITA SURENDRA KANDHARE<br />10 . SANSKRUTI MANISH VYAS</td>
<td>ML-SYSTEM: MOBILE LOCKING SYSTEM FOR VEHICLE&nbsp;</td>
<td>1 . DR. SURESH KUMAR<br />2 . DR. VIPIN JAIN<br />3 . DR. MANJU KHARI<br />4 . RAMACHANDRAN ALAGARSAMY <br />5 . BAALAMURUGAN K. M<br />6 . PROF. SANTOSH GOPAL NAGPURE <br />7 . DR. PUSHPENDER SARAO <br />8 . PROF. MANAV ASHOK THAKUR <br />9 . NIKITA SURENDRA KANDHARE<br />10 . SANSKRUTI MANISH VYAS</td>
<td>10/18/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>21</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. AASHISH MEHRA<br />3 . PVN SAICHANDU<br />4 . BABY THERESA GUDAVALLI<br />5 . PROF. AVINASH GOPAL PATIL<br />6 . PROF. DR. BEG RAJ SINGH</td>
<td>AIH-STAND: AI- BASED HYRAULIC CENTRE STAND FOR MOTORCYCLE USING HAND LEVER&nbsp;</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. AASHISH MEHRA<br />3 . PVN SAICHANDU<br />4 . BABY THERESA GUDAVALLI<br />5 . PROF. AVINASH GOPAL PATIL<br />6 . PROF. DR. BEG RAJ SINGH</td>
<td>10/18/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>22</td>
<td>1 . Dr. Varinder Singh<br />2 . Dr. Vipin Jain<br />3 . Dr. Sudesh Kumar<br />4 . Dr. Shikha Maheshwari&nbsp; <br />5 . Prof. Dr. Beg Raj SIngh<br />6 . Mr. Pawan Kumar Singh<br />7. Miss. Pari Nidhi Singh</td>
<td>AEVM-Control: Advanced Electric Vehicle Controlling System using Beagle Bone Black.</td>
<td>1 . Dr. Varinder Singh<br />2 . Dr. Vipin Jain<br />3 . Dr. Sudesh Kumar<br />4 . Dr. Shikha Maheshwari&nbsp; <br />5 . Prof. Dr. Beg Raj SIngh<br />6 . Mr. Pawan Kumar Singh<br />7. Miss. Pari Nidhi Singh</td>
<td>11/8/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>23</td>
<td>1 . PROF.(DR.) VIPIN JAIN <br />2 . DR. MANVINDER SINGH PAHWA<br />3 . DR. CHANCHAL CHAWLA <br />4 . DR. RAJEEV GUPTA <br />5 . DR. RADHEY SHYAM JHA <br />6 . DR. MANOJ AGARWAL <br />7 . DR. SATYENDRA ARYA <br />8 . DR VIBHOR JAIN<br />9 . DR. MREDU GIYAL&nbsp;</td>
<td>BPES-ATM: BIOMETRIC INPUT AND PIN AUTHENTICATION TO ENHANCE SECURITY OF THE AUTOMATIC TELLER MACHINES&nbsp;</td>
<td>1 . PROF.(DR.) VIPIN JAIN <br />2 . DR. MANVINDER SINGH PAHWA<br />3 . DR. CHANCHAL CHAWLA <br />4 . DR. RAJEEV GUPTA <br />5 . DR. RADHEY SHYAM JHA <br />6 . DR. MANOJ AGARWAL <br />7 . DR. SATYENDRA ARYA <br />8 . DR VIBHOR JAIN<br />9 . DR. MREDU GIYAL&nbsp;</td>
<td>11/22/2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>24</td>
<td>1 . PROFESSOR (DR.) VIPIN JAIN <br />2 . MR. PARITOSH SHARMA <br />3 . PROFESSOR (DR.) SHARAD KUMAR GOEL<br />4 . DR. ROHIN GARG <br />5 . PROFESSOR (DR.) AASHISH MEHRA<br />6 . DR. RACHIT AGARWAL <br />7 . DR. CHANCHAL CHAWLA <br />8 . DR. MANOJ AGARWAL&nbsp;</td>
<td>ADVANCED BUSINESS SERVICE MANAGEMENT SYSTEM&nbsp;</td>
<td>1 . PROFESSOR (DR.) VIPIN JAIN <br />2 . MR. PARITOSH SHARMA <br />3 . PROFESSOR (DR.) SHARAD KUMAR GOEL<br />4 . DR. ROHIN GARG <br />5 . PROFESSOR (DR.) AASHISH MEHRA<br />6 . DR. RACHIT AGARWAL <br />7 . DR. CHANCHAL CHAWLA <br />8 . DR. MANOJ AGARWAL&nbsp;</td>
<td>3/6/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>25</td>
<td>1)SUSHAMA RANI DUTTA <br />&nbsp;2)DR. S. THULASI PRASAD <br />&nbsp;3)PROF. (DR.) VIPIN JAIN <br />&nbsp;4)DR. RAJINDER SINGH SODHI <br />&nbsp;5)DR. VRUSHSEN PURUSHOTTAM PAWAR<br />&nbsp;6)PROF.(DR.) S. B. CHORDIYA&nbsp;</td>
<td>Serious Patient Checking Systems: Serious Patients Checking using Machine Learning and Artificial Intelligence (AI)&nbsp;</td>
<td>1)SUSHAMA RANI DUTTA <br />&nbsp;2)DR. S. THULASI PRASAD <br />&nbsp;3)PROF. (DR.) VIPIN JAIN <br />&nbsp;4)DR. RAJINDER SINGH SODHI <br />&nbsp;5)DR. VRUSHSEN PURUSHOTTAM PAWAR<br />&nbsp;6)PROF.(DR.) S. B. CHORDIYA&nbsp;</td>
<td>6/5/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>26</td>
<td>1)MR. KASALA RAJU<br />&nbsp;2)PROF.(DR.) PAWAN KUMAR BHARTI <br />&nbsp;3)DR. SAVRABH KAWAR <br />&nbsp;4)PROF.(DR.) M.K. PANDEY <br />&nbsp;5)PROF. (DR.) VIPIN JAIN <br />&nbsp;6)DR. VRUSHSEN PURUSHOTTAM PAWAR</td>
<td>COVID19 KILLER: Sanitizer Making Process Using Machine Learning to Kill SARS Coronavirus (COVID19)&nbsp;</td>
<td>1)MR. KASALA RAJU<br />&nbsp;2)PROF.(DR.) PAWAN KUMAR BHARTI <br />&nbsp;3)DR. SAVRABH KAWAR <br />&nbsp;4)PROF.(DR.) M.K. PANDEY <br />&nbsp;5)PROF. (DR.) VIPIN JAIN <br />&nbsp;6)DR. VRUSHSEN PURUSHOTTAM PAWAR</td>
<td>6/5/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>27</td>
<td>1)Dr. TULASICHANDRA SEKHAR GORRIPOTU<br />&nbsp;2)ANDHAVARAPU KANTHI <br />&nbsp;3)SOUBHAGYA RANJAN MALLICK<br />&nbsp;4)DR. PRADYUMNA KUMAR TRIPATHY<br />&nbsp;5)PROFESSOR (DR.) VIPIN JAIN <br />&nbsp;6)MR. AAYUSH MANGAL</td>
<td>AEMC &ndash; IOT SYSTEM: Agriculture Environment Managed and Control Using IOT System&nbsp;</td>
<td>1)Dr. TULASICHANDRA SEKHAR GORRIPOTU<br />&nbsp;2)ANDHAVARAPU KANTHI <br />&nbsp;3)SOUBHAGYA RANJAN MALLICK<br />&nbsp;4)DR. PRADYUMNA KUMAR TRIPATHY<br />&nbsp;5)PROFESSOR (DR.) VIPIN JAIN <br />&nbsp;6)MR. AAYUSH MANGAL</td>
<td>6/5/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>28</td>
<td>1)DR. SUDHA ARVIND<br />&nbsp;2)DR. DEVIKA S.V. <br />&nbsp;3)DR. C.M. JOSHI <br />&nbsp;4)PROF. (DR.) VIPIN JAIN <br />&nbsp;5)PROF. DR. YASHPAL SINGH <br />&nbsp;6)PROF.(DR.) VANDANA SINGH&nbsp;</td>
<td>Methods and Compositions for Infectious RNA, CDNA, and MRNA of SARS Coronavirus.&nbsp;</td>
<td>1)DR. SUDHA ARVIND<br />&nbsp;2)DR. DEVIKA S.V. <br />&nbsp;3)DR. C.M. JOSHI <br />&nbsp;4)PROF. (DR.) VIPIN JAIN <br />&nbsp;5)PROF. DR. YASHPAL SINGH <br />&nbsp;6)PROF.(DR.) VANDANA SINGH&nbsp;</td>
<td>6/5/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>29</td>
<td>1)DR. NEERAJ KUMAR MISRA <br />2)BRIJESH PANDEY<br />3)RATIRANJAN SENAPATI<br />4)Dr. SHAILENDRA KUMAR <br />5)PROF. (DR.) VIPIN JAIN<br />6)ABHILASHI UNIVERSITY</td>
<td>IVA-Parking: Intelligent Vehicle Parking Space Availability, Time Slot and Charge Notifications using IOT based Management Technology.&nbsp;</td>
<td>1)DR. NEERAJ KUMAR MISRA <br />2)BRIJESH PANDEY<br />3)RATIRANJAN SENAPATI<br />4)Dr. SHAILENDRA KUMAR <br />5)PROF. (DR.) VIPIN JAIN<br />6)ABHILASHI UNIVERSITY</td>
<td>6/19/2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>30</td>
<td>Vipin Jain, Rohin Garg, Divakar Yadav, B Venkatesh, Nagendra Pratap Singh, S.V Prabhakar, Arun Kumar Yadav, S Arvind, Jagdeep Singh, S.B. Chordiya</td>
<td>AAM-Physical Fitness: ANALYSIS OF PHYSICAL FITNESS AND ACTIVITY LEVEL USING MACHINE LEARNING, DEEP LEARNING PROGRAMMING. (Patent Granted by Australia Patent Act 1990)</td>
<td>Vipin Jain, Rohin Garg, Divakar Yadav, B Venkatesh, Nagendra Pratap Singh, S.V Prabhakar, Arun Kumar Yadav, S Arvind, Jagdeep Singh, S.B. Chordiya</td>
<td>9/16/2020</td>
<td>australia</td>
</tr>
<tr>
<td>31</td>
<td>Vipin Jain, Rohin Garg, Atul Kumar, Anil Parlikar, Yogesh Nagvekar, Santosh Nagoure, S B Chordiya, Ganesh Regulwar, Soumitra Das, Dilip Kumar Saini</td>
<td style="font-weight: 400;">WCM-Smart City: WASTE COLLECTION AND MANAGEMENT UNDER SMART CITY USING IOT (Patent Granted by Australia Patent Act 1990)</td>
<td>Vipin Jain, Rohin Garg, Atul Kumar, Anil Parlikar, Yogesh Nagvekar, Santosh Nagoure, S B Chordiya, Ganesh Regulwar, Soumitra Das, Dilip Kumar Saini</td>
<td>10/7/2020</td>
<td>australia</td>
</tr>
<tr>
<td>32</td>
<td>Vipin Jain, Jyothi Mandala, Alka Kulkarni, CH. Rayala Vinodkumar, Rambabu Vatti, Rakhi Joshi Bhardwaj, Kanchan D. Ganvir, L. Venkateswara Reddy, P. Lalitha Surya Kumari, Pankaj Kumar Srivastava</td>
<td>SDHR-Blockchain Technology: Securely Store Digital Healthcare Records, Notification, Alert Using Blockchain Technology (Patent Granted by Australian Patent Act 1990)</td>
<td>Vipin Jain, Jyothi Mandala, Alka Kulkarni, CH. Rayala Vinodkumar, Rambabu Vatti, Rakhi Joshi Bhardwaj, Kanchan D. Ganvir, L. Venkateswara Reddy, P. Lalitha Surya Kumari, Pankaj Kumar Srivastava</td>
<td>11/11/2020</td>
<td>australia</td>
</tr>
<tr>
<td>33</td>
<td>Anju Saxena, Mosam Sinha, Baswaraj Gadgay, V. Jyothi, Vipin Jain, Saurabh Dev, Santosh Gopal Nagpure, Avinash Thakur, Vineet kumar, S. B. Chordiya</td>
<td>AMPI- Hazardous &amp; non-Hazardous Wastes Management: Automatic Method and Process Management for Industrial Hazardous and non-Hazardous Wastes</td>
<td>Anju Saxena, Mosam Sinha, Baswaraj Gadgay, V. Jyothi, Vipin Jain, Saurabh Dev, Santosh Gopal Nagpure, Avinash Thakur, Vineet kumar, S. B. Chordiya</td>
<td>11/18/2020</td>
<td>australia</td>
</tr>
<tr>
<td>34</td>
<td>Vipin Jain, Rajesh Kumar Pathak, Pawan Kumar Bharti, Ajeet Singh, MD. Iqbal, Ksrk Sarma, Om Prakash Sahu, Prasant Kumar Pattnaik, S. B. Chordiya</td>
<td>DACH- Health Notification: IoT-based Health Notification and Doctor Availability Checking in Hospital Using Machine Learning, Deep Learning Programming</td>
<td>Vipin Jain, Rajesh Kumar Pathak, Pawan Kumar Bharti, Ajeet Singh, MD. Iqbal, Ksrk Sarma, Om Prakash Sahu, Prasant Kumar Pattnaik, S. B. Chordiya</td>
<td>11/25/2020</td>
<td>australia</td>
</tr>
<tr>
<td>35</td>
<td>Rambabu Vatti, Pallavi Badry, B Venkatesh, Viswanatha Reddy Allugunti, Vipin Jain, Kanchan D. Ganvir, Ankur Singh Bist, Anurag Jain, Aakriti Jain, Avinash Thakur</td>
<td>APIC- Recycling C&amp;D Waste: Automatic Process for Recycling C&amp;D Waste Including Concrete Part and Convert Useful Material (Patent Granted by Australia Patent Act 1990)</td>
<td>Rambabu Vatti, Pallavi Badry, B Venkatesh, Viswanatha Reddy Allugunti, Vipin Jain, Kanchan D. Ganvir, Ankur Singh Bist, Anurag Jain, Aakriti Jain, Avinash Thakur</td>
<td>11/18/2020</td>
<td>australia</td>
</tr>
<tr>
<td>36</td>
<td>Sony Karra, K. Sarat Kumar, K. Ch. Sri Kavya, A. Narendra Babu, Rakesh Kumar Yadav, Naga Swetha Pasupuleti, Kotte Sowjanya, Vipin Jain, S. B. Chordiya, Biplab Kumar Sarkar</td>
<td>PAVC- Improvement Techniques of Free Space Optical Link: PERFORMANCE ANALYSIS AND IMPROVEMENT TECHNIQUES OF FREE SPACE OPTICAL LINK IN VARIOUS ATMOSPHERIC CONDITIONS</td>
<td>Sony Karra, K. Sarat Kumar, K. Ch. Sri Kavya, A. Narendra Babu, Rakesh Kumar Yadav, Naga Swetha Pasupuleti, Kotte Sowjanya, Vipin Jain, S. B. Chordiya, Biplab Kumar Sarkar</td>
<td>12/23/2020</td>
<td>australia</td>
</tr>
<tr>
<td>37</td>
<td>K. B. Waghulde, Milind M. Patil, D. Venkata Naga Ananth, Atul Ashok Patil, Sarika Atul Patil, Sumit S. Desai, Vipin Jain, S. B. Chordiya, Sandeep Kumar Gupta, Biplab Kumar Sarkar</td>
<td>EI-Overheat Control System: Engine Overheat Intelligent Control System</td>
<td>K. B. Waghulde, Milind M. Patil, D. Venkata Naga Ananth, Atul Ashok Patil, Sarika Atul Patil, Sumit S. Desai, Vipin Jain, S. B. Chordiya, Sandeep Kumar Gupta, Biplab Kumar Sarkar</td>
<td>12/23/2020</td>
<td>australia</td>
</tr>
<tr>
<td>38</td>
<td>Sharad Kumar Goel, Vipin Jain, Paritosh Sharma, Chanchal Chawla, Amit Kansal, Rohin Garg, Ankit Kumar, Rajeev Sijaria, Sangeet Vashishtha, Ravindra SV</td>
<td>CTAO- Education Monitoring: IoT based Education Monitoring for Checking the Class Teacher Available in a Class and Notes Available On-line Notified</td>
<td>Sharad Kumar Goel, Vipin Jain, Paritosh Sharma, Chanchal Chawla, Amit Kansal, Rohin Garg, Ankit Kumar, Rajeev Sijaria, Sangeet Vashishtha, Ravindra SV</td>
<td>12/23/2020</td>
<td>australia</td>
</tr>
<tr>
<td>39</td>
<td>Vipin Jain, Amit Kansal, Chanchal Chawla, Ankit Kumar, Rohin Garg, Rachit Agarwal, Sharad Kumar Goel, Rajeev Sijaria, Pooja Sharma, Abhishek Maheshwari</td>
<td>IPBE-Detect Quality of Works: Intelligent process to detect employee&rsquo;s quality of works and notify it to authorities</td>
<td>Vipin Jain, Amit Kansal, Chanchal Chawla, Ankit Kumar, Rohin Garg, Rachit Agarwal, Sharad Kumar Goel, Rajeev Sijaria, Pooja Sharma, Abhishek Maheshwari</td>
<td>12/9/2020</td>
<td>australia</td>
</tr>
<tr>
<td>40</td>
<td>Raj Gaurang Tiwari, V. Srikanth, A. Murali, T. Meenakshi, Sunitha. JD, Viswanatha Reddy Allugunti, L. Venkateswara Reddy, Sudarshan Sampatrao Bobade, Vishakha A. Metre, Vipin Jain</td>
<td>ISUAV-Woman Security: Intelligent Woman Security Using Streetlight and Auto Run Unmanned Aerial Vehicle Using IOT- Based Technology</td>
<td>Raj Gaurang Tiwari, V. Srikanth, A. Murali, T. Meenakshi, Sunitha. JD, Viswanatha Reddy Allugunti, L. Venkateswara Reddy, Sudarshan Sampatrao Bobade, Vishakha A. Metre, Vipin Jain</td>
<td>12/9/2020</td>
<td>australia</td>
</tr>
<tr>
<td>41</td>
<td>Vipin Jain, A. Srujana, Swati Kumari, C. N. Ravi, B. Sudhakar Reddy, B. Rajesh, M. Vijay kumar, Anil Vishram Revankar, Sanjay Bhaskar Zope, Nadia P. Reznik, S. B. Chordiya</td>
<td>IFAC- Driver Less Vehicle: Driver Less Intelligent Fully Autonomous Controlled Vehicle</td>
<td>Vipin Jain, A. Srujana, Swati Kumari, C. N. Ravi, B. Sudhakar Reddy, B. Rajesh, M. Vijay kumar, Anil Vishram Revankar, Sanjay Bhaskar Zope, Nadia P. Reznik, S. B. Chordiya</td>
<td>1/13/2021</td>
<td>australia</td>
</tr>
<tr>
<td>42</td>
<td>Vipin Jain, Deepak Balodi, Mahima Shanker Pandey, Deepak Sharma, Venkateswarlu Sunkari, Sonia Ahsan, S. B. Chordiya, Beg Raj</td>
<td>CDN- Object Detection System: Object Detection System with Image Classification and Deep Neural Networks</td>
<td>Vipin Jain, Deepak Balodi, Mahima Shanker Pandey, Deepak Sharma, Venkateswarlu Sunkari, Sonia Ahsan, S. B. Chordiya, Beg Raj</td>
<td>1/20/2021</td>
<td>australia</td>
</tr>
<tr>
<td>43</td>
<td>Vipin Jain, V. Vijaya Kishore, Sreevidya R. C., G. L. Bhong, Satish Kumar, Satish Kumar Kalhotra, Mohd Zuhair, Neeraj Kumar Misra, Nirupma Pathak, Bandan Kumar Bhoi</td>
<td>QCIU- Education Environment System: Quantum Computing Integrated Development Education Environment Using IoT-Based System</td>
<td>Vipin Jain, V. Vijaya Kishore, Sreevidya R. C., G. L. Bhong, Satish Kumar, Satish Kumar Kalhotra, Mohd Zuhair, Neeraj Kumar Misra, Nirupma Pathak, Bandan Kumar Bhoi</td>
<td>1/27/2021</td>
<td>australia</td>
</tr>
<tr>
<td>44</td>
<td>Vipin Jain, Manish Mahajan, K. Ramesh Babu, Rijwan Khan, Lekha Rani, Arun Wamanrao Dhawale, Naga Swetha Pasupuleti, Chris Egbu, S. B. Chordiya, Nitin Balkrishna Chaphalkar</td>
<td>OMAI- Waste Treatment Systems: AI- Based Programming for Operation and Maintenance of Waste Treatment Systems</td>
<td>Vipin Jain, Manish Mahajan, K. Ramesh Babu, Rijwan Khan, Lekha Rani, Arun Wamanrao Dhawale, Naga Swetha Pasupuleti, Chris Egbu, S. B. Chordiya, Nitin Balkrishna Chaphalkar</td>
<td>1/13/2021</td>
<td>australia</td>
</tr>
</tbody>
</table>
</div>
										
    </div>
    <hr class="horizontal-line">
    <button class="careers-accordion">Patents Filed<span class="icon">+</span></button>
    <div class="panel">
    <div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th >#</th>
													<th style="text-align:center;">Applicant Name</th>

													<th style="text-align:center;">Title of Invention</th>
													<th style="text-align:center;">Inventor(s)</th>
												<th style="text-align:center;">	Year of filed</th>
													<th style="text-align:center;">Organization</th>
												</tr>								
</thead>
<tbody>
<tr>
<td>1</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Garden Maintenance System</td>
<td>Dr. Mitra Pal Singh, Dr. Mahendra Singh, Devendra Pal</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>2</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multipurpose Soil Digging Device</td>
<td>Dr. Girja Shanker Tiwari, Dr. Divya Prakash Singh, Dr. Shakuli Saxena</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>3</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Seed Implantation Device</td>
<td>Dr. Divya Prakash Singh, Dr. Girja Shanker Tiwari</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>4</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Portable Bonfire Device</td>
<td>Dr. Mahendra Singh, Dr. Vineet Kumar</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>5</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Crop Harvesting Apparatus</td>
<td>Dr. Sunil Kumar,&nbsp; Dr. Vinay Kumar Pandey</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>6</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Wearable Cutting Apparatus</td>
<td>Dr. Praveen Kumar Singh, Dr. Divya Prakash Singh</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>7</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Vegetation Trimming Device</td>
<td>Dr. Balraj Singh, Dr. Sanjeev Kumar Maurya</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>8</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Wood Quality Maintenance Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Vineet Kumar,Binita Kumari</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>9</td>
<td>Dr. Arpit Jain, Dr. Rajeev Kumar, Namit Gupta</td>
<td>Power Theft Detection : Power Theft Detection And Notification Using Wireless Network</td>
<td>Namit Gupta; Kunwar Singh; Dr. Arpit Jain; Anil Kumar Pandey; Dr. Rajeev Kumar; Nripendra Narayan Das; Sandeep Kumar; Dinesh Kumar Saini;Biplab Kumar Sarkar; S.B.Chordiya</td>
<td>2020</td>
<td>Australia</td>
</tr>
<tr>
<td>10</td>
<td>Dr. Arpit Jain</td>
<td>IAVP-Intelligent Business Data: Intelligent Business Data Visualization Using AI-Based Programming</td>
<td>Anand Pandey; Dr. Arpit Jain; Sanjay Pratap Singh; Lalit Verma; Mahesh Avadhutrao; Vishakha A. Metre; S.B.Chordiya;Yashpal Singh</td>
<td>2020</td>
<td>Australia</td>
</tr>
<tr>
<td>11</td>
<td>Dr. Rakesh Kr. Dwivedi,Dr. Arpit Jain</td>
<td>IMT-Voice Based Mobile Banking : Intelligent Money Transfer Using Voice Based Mobile Banking</td>
<td>Dr. Arpit Jain; Karan Singh; Dr. Rakesh Kumar Dwivedi; Bharat Bhushan Sagar; Satvik Vats; Latha Banda; Manisha Manjul; Tayyab Khan; Biplab Kumar Sarkar</td>
<td>2020</td>
<td>Australia</td>
</tr>
<tr>
<td>12</td>
<td>Dr. Ashendra Kr. Saxena&nbsp;</td>
<td>AMD Data Analysis: Academy Data Analysis Using Machine Learning,Deep Learning Programming&nbsp;</td>
<td>Dr. Ashendra Kr. Saxena ; MD. Iqbal; Rupesh Kumar Jindal; Santosh Dilipkumar Parakh; ER. Rakesh Kumar; Chukka Santhaiah; S.B. Chrdiya; Rambabau Vatti</td>
<td>2020</td>
<td>Australia</td>
</tr>
<tr>
<td>13</td>
<td>Dr. Arpit Jain</td>
<td>MT-Family Member Activities and Location : Family Member Activities And Location Management Technology</td>
<td>Ashish Dudhale; Prachi Labde; Archana Shirbhate; Dr. Arpit Jain; Sandeep Kumar Gupta; S.B.Chordiya&nbsp;</td>
<td>2020</td>
<td>Australia</td>
</tr>
<tr>
<td>14</td>
<td>Dr. Arpit Jain,Dr. Ashok Kumar,Ankur Chaudhary, Jyoti Ranjan Labh</td>
<td>SBDA- Secured Bra For Women Safety: Smart And Secured Bra For Women Safety Based On Deep Learning Algorithm</td>
<td>Sandeep Kumar; Dr. Arpit Jain; Rohit Raja; Shilpa Rani; Sanjay Sharma; Alok Kumar Singh ; Padma Bonde; Dr. Ashok Kumar; Ankur Chaudhary; Jyoti Ranjan Labh; S.B.Chordiya</td>
<td>2020</td>
<td>Australia</td>
</tr>
<tr>
<td>15</td>
<td>Dr. Rakesh Kr. Dwivedi,Dr. Arpit Jain, Aman Kumar&nbsp;</td>
<td>SEF:&nbsp; Smart Educational Framework: Smart AI-IOT Based Educator Monitoring And Content Availability Alert System</td>
<td>Dr. Arpit Jain; Aman Kumar; Anand Prakash Shukla; Dr. Rakesh Kumar Dwivedi; Hitendra Garg; Ankur Bhardwaj; Pramod Kumar; Sanjay Singh; Satyendra Singh; Rohit Agarwal</td>
<td>2020</td>
<td>Australia</td>
</tr>
<tr>
<td>16</td>
<td>Dr. Ashendra Kr. Saxena ,Ajay Rastogi</td>
<td>INHA- Combined Health Monitoring: Intelligent IoT- Based Combined Health Monitoring, Notification, Alert, Home<br />Automation System</td>
<td>Raghuraj Singh; Parma Nand; Prashant Kumar Mishra; Vibhash Yadav;Pawan Kumar Pal;Charu Awasthi; Ashendra Kumar Saxena; Danish Ather; Ajay Rastogi; Ambuj Kumar Agarwal</td>
<td>2020</td>
<td>Australia</td>
</tr>
<tr>
<td>17</td>
<td>Anu Sharma</td>
<td>DAMA- Dataset Discovery:Dataset&nbsp; Discovery in Data Analytics and Machine Learning Algorithm</td>
<td>JeevanKiran Dandangi; Jyothi Mandala;CH Rayala Vinod Kumar;Anu Sharma;V Balaji Chandrasekhar; S. Selvakumar;Najid Ahmad; Sandeep Kumar Gupta; S.B. Chordiya;Beg Raj</td>
<td>2020</td>
<td>Australia</td>
</tr>
<tr>
<td>18</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Intelligent Pen Drive: Highest Data Security (Auto Data store your gmail and link share your mobile no.) using AI Based Programming</td>
<td>Dr R K Dwivedi, Sahana Lokesh R, Anu Sharma, Dr Arun Jain, Dr Anshu Parashar, Dr Anish Soni, Dr Sukhdev Singh, Shivani Pandey, Rupesh Kumar Jindal Amit Garg</td>
<td>2021</td>
<td>Australia</td>
</tr>
<tr>
<td>19</td>
<td>Pradeep Kr. Gupta</td>
<td>System And Method For Generating Electricity Using Turnstile Gate</td>
<td>Pradeep Kr. Gupta</td>
<td>2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>20</td>
<td>Dr. Rajeev Kumar</td>
<td>A Novel Smart Electro Mechanical Standing Ventilator For Intensive Care Unit</td>
<td>Prof. Ramesh Chandra Panda; Dr. R. Subhashini; Dr. Souvik Ganguli;Dr. Shikha Gupta;Dr. Lakshmi D; Dr. P. Sudhakaran; Dr. Piyush Gupta; Dr. Manoj Gupta; Dr. Rajeev Kumar; Dr. Parul Gupta; Tanmayee Mandala;Dr. A. Nirmala Jyothsna; Dr. K. Sree Latha; Dr. P. Karthigeyan</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>21</td>
<td>Dr. Rakesh Kr. Dwivedi</td>
<td>System For Prioritizing Emergency Vehicles In Traffic Using Queuing Theory</td>
<td>Parul Arora; Dr. Rakesh Kumar Dwivedi; Dr. Umang</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>22</td>
<td>Rohaila Naaz</td>
<td>Intelligent Encrypted Data Search: Intelligent Real Time Text Search Over Encrypted Data In Cloud Computing</td>
<td>Prof.(Dr. ) Rakesh Kumar; Dr. Vakula Rani J; Aishwarya Jakka; Rohaila Naaz; Prof.(Dr.) S.B. Chordiya</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>23</td>
<td>Dr. Rajeev Kumar</td>
<td>A Novel IOT Based Disinfectant Sanitizer Tunnel Against Covid-19 Using Human Detecting Sensors And End To END Security Model</td>
<td>Prof. Ramesh Chandra Panda;Dr. Parul Gupta; Dr. Mayank Kumar Goyal; Dr. Ramachandra RK; Dr. Rajeev Kumar; Dr. Rajdeep Chakraborty; Dr. Bijendra Kumar; Dr. Mahesh Chand; Dr. Ajay Suryavanshi; Dr. Amrita; Dr. K Ram chandra; Dr. Mandeep Kaur; Dr. Payal Khurana Batra; Supriya Khaitan Sakshi Agarwal; Dr. P Karthigeyan</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>24</td>
<td>Amit Shukla &amp; Dr. Kirti Shukla</td>
<td>AMLD -DEBUGGING GRIDS: Automatic Debugging Grids With Machine ,Deep Learning Techniques</td>
<td>Dr. Kirti Shukla ; Amit Shukla; Prof.(Dr.) S.B.Chordiya</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>25</td>
<td>Hina Hashmi</td>
<td>IVB-E-MAIL: Intelligent Voice Based E-Mail</td>
<td>Dr.M. Sasi Bhushan; Hina Hashmi; Prof.(Dr.)S.B.Chordiya; Dr. M. Nagabhushana Rao; Dr. Jami Venkata Suman; Pawan Kumar Singh</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>26</td>
<td>Dr. Rakesh Kr. Dwivedi</td>
<td>System and Method For Vehicular Traffic Control/ Management</td>
<td>Parul Arora; Dr. Rakesh Kumar Dwivedi; Dr. Umang</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>27</td>
<td>Dr. Shakti Kundu</td>
<td>SOCIAL MEDIA SENTIMENTS CALCULUS:Profile Based Mapping Social Media Sentiments Calculus Using Cloud Computing,Deep Learning Programming</td>
<td>Dr. Manish Saraswat; Dr. Shakti Kundu; Dr. Vivek Mehrotra; Dr. Shiva Durga; CH. Rayala Vinod Kumar; Dr. Jyothi Mandala</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>28</td>
<td>Dr. Shakti Kundu</td>
<td>ACS SYSTEM: Advanced Customer Service System Using Machine Learning And Artificial Intelligence</td>
<td>Dr. Shakti Kundu; Dr. Puja Shrivastava; Prof.(Dr.)Rakesh Kumar; Dr. Sangeetha G; Dr. MANOJ Kumar Pandey; Sachin Sudam Shinde</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>29</td>
<td>Dr. Arpit Jain</td>
<td>Smart -Transit: Smart Traffic Monitoring System Using IOT And AI Techniques</td>
<td>Dr. Karan Singh; Dr. Arpit Jain; Dr. Manisha Manjul; Tayyab Khan; Vinay Pathak</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>30</td>
<td>Dr. Rakesh Kr. Dwivedi</td>
<td>A PREDICTIVE ACCIDENT PREVENTION SYSTEM FOR VEHICLE SAFETY ON SHARP TURNS OF HILLY ROAD</td>
<td>Parul Arora; Dr. Rakesh Kumar Dwivedi; Dr. Umang</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>31</td>
<td>Dr. Rakesh Kr. Dwivedi</td>
<td>AN INTERNET OF THINGS BASED SMART HI-TECH BUILDING SYSTEM FOR COVID PROTECTION</td>
<td>Parul Arora; Dr. Rakesh Kumar Dwivedi; Dr. Umang</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>32</td>
<td>Ankur Sisodia &amp; Swati Vishnoi</td>
<td>Access In 4G,5G Mobile Network Environments</td>
<td>Dr. Savrabh Kawar; Ankur Sisodia; Swati; Prof.(Dr.) Pawan Kumar Bharti; Dr. Vrushsen Purushottam Pawar; Prof.(Dr.)S.B. Chordiya</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>33</td>
<td>Dr. Rajeev Kumar</td>
<td>System And Method For Predicting An Infectios Disease Transmitted By A Virulent Respiratory Virus</td>
<td>Dr. Naveen Tewari ; Dr. Mukesh Joshi; Dr. Rajeev Kumar ; Dr. Gopal Datt; Dr. Sandeep Kumar Budhani</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>34</td>
<td>Dr. Megha Sharma</td>
<td>Integrated Hand Sanitizer To Avoid From The Covid-19</td>
<td>Dr. Megha Sharma; Santosh Gopal Nagpure; Prof.(Dr.) S.B.Chordiya; Pawan Kumar Singh; Pari Nidhi Singh; Dr. Biplab Kumar Sarkar&nbsp;</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>35</td>
<td>Tushar Mehrotra</td>
<td>An IOT Based Intelligent Food Storage System&nbsp;</td>
<td>Dr. Asis Kumar Tripathy; Dr. Umakanta Nanda; Tushar Mehrotra; Dr. Alekha Kumar Mishra; Dr. Ashok Kumar Pradhan; Dr. Sandeep Saxena; Dr. Shubham Gupta; Dr. Jayendra Kumar</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>36</td>
<td>Dr. Ashok Kumar,Jyoti Ranjan Labh</td>
<td>Can-Device: Automatic Count The Number Of Car Running On Road(Real Time ,Location,Running Speed Etc.)Using Machine Learning</td>
<td>Dr. Nripendra Narayan Das; Dr. Ashok Kumar; Jyothi Ranjan Labh; Santosh Gopal Nagpure; Dr. Rajinder Singh; Dr. Poorna Shankar</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>37</td>
<td>Pradeep Kr. Gupta</td>
<td>Method for Consuming Municipal Solid Waste In Construction Materials</td>
<td>Pradeep Kr. Gupta</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>38</td>
<td>Gaurav Kr. Rajput</td>
<td>Cybernetic Plant</td>
<td>Dr. Umakanta Nanda; Arghya Biswas; Subhodeeep Chatterjee; Dr. Ashok Kumar Pradhan; Dr. Sandeep Saxena; Dr. Dileep Kumar Yadav; Aatif Jamshed; Gaurav Kumar Rajput&nbsp;</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>39</td>
<td>Dr. Rakesh Kr. Dwivedi</td>
<td>A SMART ADAPTIVE NEURAL FUZZY INTERFACE SUPERVISED ACTIVE POWER FILTER FOR HARMONIC DISTORTION CONTROL IN AC POWER DRIVEN IOT DEVICES</td>
<td>Parul Arora; Dr. Rakesh Kumar Dwivedi; Dr. Umang</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>40</td>
<td>Vivek Kumar</td>
<td>Computer Cache Memory Performance Enhance Using Neural Networks And Machine Learning</td>
<td>Dr. N. Sandhya; Dr. M.Raja Sekar; Dr. Ashish Kumar; Vivek Kumar; P.ILA Chandana Kumari; Prof. (Dr.) Yashpal Singh</td>
<td>2020</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>41</td>
<td>Dr. Rakesh Kr. Dwivedi</td>
<td>A Fractal Trident Shape Large Band Antenna For Multiple Frequency Based Internets Of Things Applications</td>
<td>Dr. Pankaj Kumar Goswami; Dr. Garima Goswami; Dr. Rakesh Kumar Dwivedi&nbsp;</td>
<td>2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>42</td>
<td>Dr. Arpit Jain</td>
<td>Exceeded The ATM Network: Account Holder Has Exceeded The ATM Network Limit</td>
<td>Dr. Varinder Singh; Tarun Singhal; Dr. Arpit Jain; Dr. V. Lokeswara Reddy; Dr. Sanjeev Kumar Sharma; Dr. Vikas Goel; Dr. Amit Kumar Gupta; Dr. Sachin Kumar</td>
<td>2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>43</td>
<td>Dr. Arpit Jain</td>
<td>W-SIM: Water Sim (Per Member Water Use Control And Management&nbsp; System)</td>
<td>Dr. Arpit Jain; Dr. Sanjeev Kumar Sharma; Dr. Naresh Trivedi;&nbsp; Dr. R. Madana Mohana; Dr. M. Nagabhushana Rao; Prof. Santosh Gopal Nagpure; Dr. B. Venkatesh</td>
<td>2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>44</td>
<td>Dr. Arpit Jain</td>
<td>VM-System:IOT Based Vehicle Monitoring System Using Beagle Bone Kit</td>
<td>&nbsp;Dr. Sanjeev Kumar Sharma; Dr. Arpit Jain; Prof. Santosh Gopal Nagpure; Dr. B. Venkatesh; Dr. Manju Khari; Dr. S.Vimal; A.Arulprakash; Dr. R.Viswanathan</td>
<td>2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>45</td>
<td>Dr. Arpit Jain</td>
<td>RT-Sanitizer: Resizeable Toilet Seat With Rolling Sanitizer</td>
<td>Dr. Arpit Jain; Dr. Suresh Kumar; Dr. Varinder Singh; Jay Chandrashekhar Ajmire; Yash MADHUKAR Patil; Parth Ravindra Patil</td>
<td>2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>46</td>
<td>Dr. Arpit Jain</td>
<td>IMF System: Intelligent Mobile Finding System</td>
<td>Dr. S.V.S. Ramakrishnam Raju; Dr. Arpit jain; DR. Naresh Trivedi; Prof. Santosh Gopal Nagpure; Dr. Garima Shrivastav; Dr. Manju Khari; Dr. Abha Jain; Prof. Manav Ashok Thakur; Samruddhi Sunil Randhe&nbsp;</td>
<td>2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>47</td>
<td>Dr. Rajeev Kumar</td>
<td>Process For Formation Of Capacitor Structure For Non Volatile Memory On Germanium Nanocrystals</td>
<td>Dkorra Ravi Kumar; Dr. Namit Gupta; Dr. Rajeev Kumar; Dr. S.Inderjeet Singh; Dr. SANTOSH Kumar Allemki; Dr. Giriraj Kumar Prajapati; Mukesh Patidar; Mittapally Sadanandam; V.Praveen Kumar</td>
<td>2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>48</td>
<td>Dr. Arpit Jain</td>
<td>AIB Satellite: AI Based Satellite To Detection The Object At Location</td>
<td>Dr. Arpit Jain; Pranav Shankar Rao Pise; Urmila Dattatray Deshmukh; Dr. Shadab Adam Pattekari; Prof.(Dr.) S.B.Chordiya</td>
<td>2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>49</td>
<td>Dr. Rajeev Kumar</td>
<td>A Process To Analyze Defects In Software</td>
<td>Dr. Rajeev Kumar ; Dr. Ashutosh Kumar Bhatt</td>
<td>2019</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>50</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Feather Cleaning And Removing Device For Poultry Birds</td>
<td>Ajay Chakravarty, Dr. Pankaj Goswami,&nbsp; Rahul Vishnoi, Dr. Parag Agarwal</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>51</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automatic Currency Protection And Storage Device</td>
<td>Dr.Kirti Shukla, Dr.Gulista Khan,&nbsp; Prashant Kumar, Dr. Pankaj Goswami, Ratnesh Shukla</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>52</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Maintenance Device For Pipes</td>
<td>Kamal Kumar Gola,&nbsp; Sakshi Singh,&nbsp; Rahul Vishnoi, Dr. Pankaj Goswami,&nbsp; Prashant Kumar</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>53</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Pet Health And Hygiene Management System</td>
<td>Dr.Ashendra Saxena,&nbsp; Rahul Vishnoi, Dr. Pankaj Goswami, Sakshi Singh,&nbsp; Neeraj Kaushik</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>54</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Food Slicing And Cleaning Device</td>
<td>Dr.Gulista Khan, Mahir Hussain,&nbsp; K.B. Anand, Shri Bhagwan, Harish Kumar</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>55</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multifunctional Dental Care Device</td>
<td>Dr. Arpit Jain,&nbsp; Sakshi Singh, Rahul Vishnoi, Dr. Pankaj Goswami, Prashant Kumar</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>56</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Ceiling Fan Cleaning Device</td>
<td>Dr.Shambhu Bhardwaj,&nbsp; Arun Gupta,&nbsp; Sunil Kumar, Sunil K Gaur,&nbsp; Anurag Srivastava</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>57</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Tile Installation System</td>
<td>&nbsp;Rahul Rathore, Rahul Vishnoi, Dr. Pankaj Kumar Goswami, Prashant Kumar, Neeraj Kaushik</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>58</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Comfort Based Clothing</td>
<td>Dr. Rakesh Kumar Dwivedi, Dr. Ashendra Kumar Saxena, Dr. Arpit Jain, Dr. Ashok Kumar, Rajendra Prasad Pandey, Vikas Yadav</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>59</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multilevel Security Device For Luggage Bags</td>
<td>Dr. R.C. Tripathi, Dr. Rakesh Kumar Dwivedi, Dr. Arpit Jain, Neeraj Kumari, Pradeep Kumar Shah, Ranjana Sharma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>60</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Ornament Storage And Recommendation System</td>
<td>Dr. Ashendra Kumar, Aman Kumar, Dr. Kirti Shukla, Aditya Jain, Dr. Ashok Kumar, Ranjana Sharma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>61</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Anti-Drowning Lifesaving System</td>
<td>Dr. Rakesh Kumar Dwivedi, Dr. Ashendra Kumar Saxena, Dr. Arpit Jain, Dr. Shakti Kundu, Gaurav Kumar Rajpoot, Pradeep Kumar Shah,&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>62</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multifunctional Sun Bathing Device</td>
<td>Dr. Rakesh Kumar Dwivedi, Rajendra Prasad Pandey, Hina Hashmi, Ranjana Sharma, Neeraj Kumari, Vineet Saxena</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>63</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Indoor Gaming Device</td>
<td>Dr. Arpit Jain, Jyoti Ranjan Labh, Ratnesh Kumar Shukla, Harjinder Singh, Pradeep Kumar Gupta, Tushar Mehrotra</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>64</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Stain-Free And Hygeinic Beverage Consuming Device</td>
<td>Dr. Rakesh Kumar Dwivedi, Neeraj Kumari, Dr. Kirti Shukla, Namit Gupta, Dr. R.C. Tripathi, Dr. Arpit Jain,&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>65</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Adaptable Sitting Device</td>
<td>Namit Gupta, Pradeep Kumar Shah, Ratnesh KumarShukla, Rohaila Naaz, Vineet Saxena, Vivek Kumar</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>66</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Cloth Cleaning And Drying Device</td>
<td>Dr. Rakesh Kumar Dwivedi,Dr. Ashendra Kumar Saxena, Dr. Arpit Jain, Pradeep Kumar Gupta, Tushar Mehrotra, Gaurav Kumar Rajput</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>67</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Sign Based Alerting Device</td>
<td>Dr. Ashendra Kumar, Abhilash Kumar Saxena, Ajay Rastogi, Satendra Kumar, Dr. Ashok Kumar, Vivek Kumar,&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>68</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Aquatic Life Saving Device</td>
<td>Dr. Rakesh Kumar Dwivedi, Hina Hashmi, Abhilash Kumar Saxena, Jyoti Ranjan Labh, Dr. Shakti Kundu, Neeraj Kumari,&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>69</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Ampoule Opening Device</td>
<td>Dr. Rakesh Kumar Dwivedi, Dr. Ashendra Kumar, Aditya Jain, Harjiner Singh, Dr. Shambu Bhardwaj, Dr. Rajeev Kumar</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>70</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Podium</td>
<td>Dr. Ashok Kumar, Dr. Arpit Jain, Aman Kumar, Jyoti Ranjan Labh, Amit Kumar Shukla, Ankur Chaudary,&nbsp;</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>71</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Maglev Based Sitting Device</td>
<td>Dr. Rakesh Kumar Dwivedi, Dr. Ashendra Kumar Saxena, Dr. Arpit Jain, Rupal Gupta, Pradeep Kumar Gupta, Tushar Mehrotra,&nbsp;</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>72</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Device For Preparing Puddings</td>
<td>Dr. Shakti Kundu, Ashish Bisnoi, Dr. Ashendra Kumar, Dr. Ashok Kumar, Aditya Jain, Dr. R.C. Tripathi,&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>73</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Food Dispensing System</td>
<td>Dr. Arpit Jain, Aditya Jain, Dr. R.C. Tripathi, Namit Gupta, Pradeep Kumar Shah, Priyank Singhal,&nbsp;</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>74</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multifunctional Shopping Cart</td>
<td>Dr. Shambu Bhardwaj, Dr. Ashendra Kumar, Aditya Jain, Ashish Bisnoi, Namit Gupta, Priyank Singhal</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>75</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Two Factor Authentication Based Shopping Method</td>
<td>Vinay Kumar Mishra, Vivek Kumar, Gulista Khan, Anurag Gupta, Gaurav Kumar Rajput, Alok Singh Sengar, Rahul Rathor, Kamal Kumar Gola</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>76</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Intelligent Fishing Rod Device</td>
<td>Shambhu Bhardwaj,Rajeev Kumar, Manish Joshi, Anurag Gupta, Alok Singh Sengar, Vinay Kumar Mishra,&nbsp; Pradeep Kumar Shah, Abhilash Saxena</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>77</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multi-Port Connecting Device</td>
<td>Dr Rajeev Kumar, Dr Shambhu Bhardwaj</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>78</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Adjustable Supporting Apparatus</td>
<td>Vivek Kumar,Amit Shukla, Kirti Shukla, Rajeev Kumar, Vinay Kumar Mishra, Anurag Gupta, Alok Singh Sengar,Tushar Mehrotra</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>79</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multipurpose Lid Opening Apparatus</td>
<td>Anurag Gupta, Rahul Vishnoi</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>80</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Electric Shock Based Wearable Safety Device</td>
<td>Vineet Saxena,Tushar Mehrotra, Gaurav Kumar Rajput, Vivek Kumar, Rajeev Kumar, Vinay Kumar Mishra, Anurag Gupta, Alok Singh Sengar,&nbsp;</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>81</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Corner Guarding Apparatus</td>
<td>Dr Rohila Naaz, Dr Shambhu Bhardwaj</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>82</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Electric Plug Locking Device</td>
<td>R.k. Dwivedi, Dr Gulista Khan</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>83</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multi-Layered Wearable Thermal Insulating Apparatus</td>
<td>Dr Atri Deo Tripathi, R.K. Dwivedi</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>84</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automatic Hammering Device</td>
<td>Dr Shambhu Bhardwa, Dr Rajiv Kumar</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>85</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multistage Shock Absorption Device For Vehicles</td>
<td>Vinay Mishra,Pradeep K Verma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>86</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Ice Sport Training System&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Anurag Gupta,Dr Vinay Mishra</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>87</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multi-Level Security Based Hands Restraining Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>R.C. Tripathi,Dr Vinay Mishra</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>88</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Adaptive Weight Lifting Training System&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Dr. Vinay Kumar Mishra</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>89</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Glassware Holding Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Rohaila Naaz,Dr Gulista Khan</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>90</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Furnace&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Dr R.K. Dwivedi,Anurag Gupta</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>91</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multipurpose Table Fixture&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Dr Gulista Khan,Anurag Gupta</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>92</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Active Defense System&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Rohaila Naaz,Dr Ajay K Upadhayay</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>93</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automatic Bore Sleeves Removal/Installation Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Rohaila Naaz,Dr Gulista Khan</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>94</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Restraint System&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>R.C. Tripathi,Dr Vinay Mishra</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>95</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Modular Boat Propelling System&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Dr. Rakesh Kumar Dwivedi,Dr Gulista Khan</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>96</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>In-Vehicle Occupant Monitoring System&nbsp;&nbsp;</td>
<td>Dr. Vinay Kumar Mishra</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>97</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Indoor Solar Stove</td>
<td>Pradeep Kuar Gupta</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>98</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Dental Hygiene Maintenance Device</td>
<td>Manish Goyal, Dr Meghanand T Nayak, Dr M K Sunil, Dr Upendra Malik,&nbsp;</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>99</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Cutting And Washing Device For Nails</td>
<td>Dr. Gitanshu</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>100</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Mouth Retractor Apparatus</td>
<td>Dr Manish Goyal</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>101</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Dental Care Apparatus</td>
<td>Dr Meghanand T Nayak</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>102</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Dental Aiding Apparatus</td>
<td>Dr Upender Mallik</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>103</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>ANTI-SPLATTERING TOOTH CLEANING DEVICE</td>
<td>Dr M.K.Sunil</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>104</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>&nbsp;Intelligent Writing Device</td>
<td>Dr. Mitra Pal Singh, Dr. Rashmi Mehrotra, Dr. Vinod KumarJain</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>105</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Paper Holding Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Rashmi Mehrtora</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>106</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>A Heat Treatment Method For Synthesizing Nanocrystalline Hydroxyapatite From Labeo Rohita Fish Scales</td>
<td>Diptonil Banerjee</td>
<td>2021</td>
<td>Australia</td>
</tr>
<tr>
<td>107</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>A LOW-COST INDIAN CURRENCY IDENTIFIER FOR VISUALLY IMPAIRED PERSONS</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>108</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>THE SLOTTED PIN DIODE SWITCHED FREQUENCY RECONFIGURABLEANTENNA FOR FREQUENCY SHIFT-BASED INTERNETS OF THINGS APPLICATIONS</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>109</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>LOW COST GSM BASED SMART IRRIGATION SWITCH WITH 3 PHASES TO SINGLE PHASE SELECTOR</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>110</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>LOW COST VOICE ENABLED MULTI SENSE SMART STICK FOR VISUALLY IMPAIRED PERSON</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>111</td>
<td>Dr. Pankaj Goswami, Dr. Garima Goswami &amp; Prof R K Dwivedi</td>
<td>AN INTERNET OF THINGS BASED SMART HI-TECH BUILDING SYSTEM FOR COVID PROTECTION</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>112</td>
<td>Dr. Pankaj Goswami, Dr. Garima Goswami &amp; Prof R K Dwivedi</td>
<td>A PREDICTIVE ACCIDENT PREVENTION SYSTEM FOR VEHICLE SAFETY ON SHARP TURNS OF HILLY ROAD</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>113</td>
<td>Dr. Pankaj Goswami, Dr. Garima Goswami &amp; Prof R K Dwivedi</td>
<td>A SMART ADAPTIVE NEURAL FUZZY INTERFACE SUPERVISED ACTIVE POWER FILTER FOR HARMONIC DISTORTION CONTROL IN AC POWER DRIVEN IOT DEVICES</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>114</td>
<td>Dr. Pankaj Goswami, Dr. Garima Goswami &amp; Prof R K Dwivedi</td>
<td>A FRACTAL TRIDENT SHAPE LARGE BAND ANTENNA FOR MULTIPLE FREQUENCY-BASED INTERNETS OF THINGS APPLICATIONS</td>
<td>Dr. Pankaj Goswami &amp; Dr. Garima Goswami</td>
<td>2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>115</td>
<td>Prof. R K Jain</td>
<td>Constraction Technology: Intelligent Earthquake Resistant Building Construction Technology</td>
<td>Prof. R K Jain</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>116</td>
<td>Prof. R K Jain</td>
<td>IVH- Sanitizer System: Intelligent Vehicle Hand Sanitizer System Using Pre- Instruction</td>
<td>Prof. R K Jain</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>117</td>
<td>Prof. R K Jain</td>
<td>Method for consuming municipal solid waste in construction materials</td>
<td>Prof. R K Jain</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>118</td>
<td>Mr. Harish Kumar</td>
<td>Bio diesel and bio compost : Textile mil waste water &amp; Solid waste converted into bio diesel and bio compost</td>
<td>Mr. Harish Kumar</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>119</td>
<td>Dr. Pankaj Goswami &amp;<br />Dr. Garima Goswami</td>
<td>An Auttomatic Spectacles Senses to Protect Eye from Excessive Harmful Optical Radiation</td>
<td>Dr. Pankaj Goswami &amp;<br />Dr. Garima Goswami</td>
<td>2021</td>
<td>Australia</td>
</tr>
<tr>
<td>120</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Food Processing Device</td>
<td>&nbsp;Sakshi Singh,&nbsp; Neeraj Kaushik,&nbsp; Shri Bhagwan, Amit Shukla</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>121</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Peripheral Device</td>
<td>&nbsp;Mahir Hussain, Sunil Kumar Gaur, VineetSaxena, Dr.Kirti Shukla</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>122</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Skin Cleaning Device</td>
<td>K B Anand,&nbsp; Harish Kumar,&nbsp; Ankit Gupta, Mohan Vishal Gupta</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>123</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Bore Well Rescuing Device</td>
<td>Sakshi Singh,&nbsp; Rahul Vishnoi, Dr. Pankaj Goswami, Neeraj Kaushik</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>124</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multipurpose Henna Printing Device</td>
<td>Dr.Garima Goswami,&nbsp; Pradeep Kumar verma,&nbsp; Sunil Kumar, Dr. Rajeev Kumar,&nbsp; Navneet Vishnoi</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>125</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Illuminating System For Color Blind Patients</td>
<td>Dr.Garima Goswami, Rahul Vishnoi,Dr. Ajay Upadhyay,&nbsp; Rajendra Prasad Pandey</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>126</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Intelligent Door Lock System</td>
<td>Umesh K. Singh, Raghuvendra K. Singh, Prashant Kumar, Dr. Pankaj Goswami, Anun Gupta, Navneet Vishnoi</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>127</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Portable Charging Device</td>
<td>&nbsp;Pradeep Kr. Verma, Raghvendra Kumar Singh, Umesh Kr. Singh, Dr. Garima Goswami</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>128</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Secured Semi-Automated Tent</td>
<td>Rahul Vishnoi, Dr. Pankaj Goswami, Neeraj Kaushik, Prashant Kumar</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>129</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Skiing Assistance Device</td>
<td>&nbsp;Arun Gupta,&nbsp; Sunil Kumar, Sunil K Gaur, Anurag Srivastava</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>130</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multipurpose Card Playing Device</td>
<td>Rahul Vishnoi, Dr. Pankaj Goswami, Neeraj Kaushik, Prashant Kumar</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>131</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Modular Drink Ware Device</td>
<td>&nbsp;Sakshi Singh,&nbsp; Rahul Vishnoi, Dr. Pankaj Goswami,&nbsp; Neeraj Kaushik,</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>132</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Customized Plant Watering And Protection System</td>
<td>&nbsp;Amit Singh,Sakshi Singh,Rahul Vishnoi, Dr. Pankaj Goswami, Prashant Kumar</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>133</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Tank Cleaning Device</td>
<td>&nbsp;Mahir Hussain, K.B. Anand,&nbsp; Shri Bhagwan,&nbsp; Harish Kumar</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>134</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Privacy Based Face Cover</td>
<td>Sakshi Singh,&nbsp; Rahul Vishnoi, Dr. Pankaj Goswami, Prashant Kumar</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>135</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Water Rafting Safety System</td>
<td>&nbsp;Arun Gupta,&nbsp; Sunil Kumar,&nbsp; Sunil K Gaur, Anurag Srivastava</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>136</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>System For Multi-Purpose Livestook Shelter</td>
<td>&nbsp;Mahir Hussain,&nbsp; K.B. Anand,&nbsp; Shri Bhagwan, Harish Kumar</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>137</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automatic Abacus Learning Device</td>
<td>Dr. Ajit Kumar, Dr. Vipin Kumar, Laxmi Kant Tiwari, Dr. Abhinav Saxena, Dr. Kamesh, Dr. Alok Gahlot, Ashok Kumar, Dr. Gopal Gupta</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>138</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Public Bench</td>
<td>Shri Bhagwan, Harish Kumar, Mahir Husain, Arun Gupta, Sunil Kumar, Anurag Srivastava, Sunil Kumar Gaur, K. B. Anand</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>139</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multifunctional Infant Protetcion Device</td>
<td>K.B. Anand, Shri Bhagwan, Harish Kumar, Mahir Husain, Arun Gupta, Sunil Kumar, Anurag Srivastava, Sunil Kumar Gaur,&nbsp;</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>140</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Aquatic Based Personal Protection Device</td>
<td>Harish Kumar, Mahir Husain, Arun Gupta, Sunil Kumar, Anurag Srivastava, Sunil Kumar Gaur, K.B. Anand, Shri Bhagwan</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>141</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Portable Feces Collecting Device</td>
<td>Mahir Husain, Arun Gupta, Sunil Kumar, Anurag Srivastava, Sunil Kumar Gaur, K.B. Anand, Shri Bhagwan, Harish Kumar</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>142</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Shopping Cart Device</td>
<td>Arun Gupta, Sunil Kumar, Anurag Srivastava, Sunil Kumar Gaur, K.B. Anand, Shri Bhagwan, Harish Kumar, Mahir Husain</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>143</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Drinkware Holding Device</td>
<td>Sunil Kumar, Anurag Srivastava, Sunil Kumar Gaur, K.B. Anand, Shri Bhagwan, Harish Kumar, Mahir Husain, Arun Gupta</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>144</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Shoe Maintenance Device</td>
<td>Dr Arun Kumar Pipersenia, Dr Gopal K Gupta</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>145</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Drill Depth Controlling Device</td>
<td>Dr Ajay Kumar Upadhyay</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>146</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Solder Aiding Apparatus</td>
<td>Arun Gupta, <br />Alok Singh Sengar</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>147</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Tire Puncture Reinforcement Device</td>
<td>Dr Ajay Kumar Upadhyay</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>148</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automatic String Typing Device</td>
<td>Dr G K Gupta</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>149</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Debris Cleaning Device</td>
<td>Arun Kumar Pipersenia</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>150</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Footwear Polishing Device</td>
<td>Dr Atri Deo Tripathi</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>151</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Transformable Seat Apparatus</td>
<td>Arun Gupta,Dr Ajay K Upadhyay</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>152</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Drain Cleaning Device</td>
<td>Dr RK Jain, A.K. Pipersania, Ankit Kumar, Amit Kumar, Nisha Sahal, Nikita Garg</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>153</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Fall Prevention Device</td>
<td>Dr Alok Singh Sengar, Dr Rahul Vishnoi</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>154</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Infant Sleeping Device</td>
<td>Ranjana Sharma, Anurag Gupta, Alok Singh Sengar, Vinay Kumar Mishra,&nbsp; Amit Singh, Amit Kumar, Harish Kumar, Shri Bhagwan,&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>155</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Climbing Apparatus</td>
<td>Dr R.K. Jain</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>156</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Electric Bulb Holding Device</td>
<td>Pradeep K Verma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>157</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Ignition Covering Apparatus</td>
<td>Rahul Vishnoi</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>158</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Window Cleaning Apparatus</td>
<td>Dr Atri Deo Tripathi</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>159</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multifunctional Bucket</td>
<td>Dr Gopal K Gupta, Pradeep K Verma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>160</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Electromagnetic Dent Removing Device</td>
<td>Dr Vinay Mishra, Pradeep K Verma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>161</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Digging Apparatus</td>
<td>Dr RK Jain, A.K. Pipersania, Ankit Kumar, Amit Kumar, Nisha Sahal, Nikita Garg</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>162</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Foam Cleaning Device</td>
<td>Anurag Srivastava, Mahir Husain, K.B. Anand, Sunil Kr Gaur</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>163</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Spade Lifting Apparatus</td>
<td>Pradeep K Verma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>164</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Cutting Device</td>
<td>Arun Gupta</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>165</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Wearable Thermal Protection Apparatus</td>
<td>Dr. Amit kumar Sharma,Dr. Pavan Kumar Singh, DR. Vishnu prasad srivastava,&nbsp; Dr. Amit Kumar Gangwar, Dr. Dipotonil Banerjee, Dr. Parag Agarwal,Prof. S.P.Pandey, Dr. Ajay Kumar Upadhyay</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>166</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Workpiece Holding Apparatus</td>
<td>Pradeep K Verma, Aay Kumar Upadhyay</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>167</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Wearable Anti-Pollution Device</td>
<td>Dr. M.K. Chini, Dr Gajendra Chauhan, Dr A K Singh</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>168</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Flywheel Belt Balancing Apparatus</td>
<td>Dr Ajay Kumar Upadhyay</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>169</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Shoveling Apparatus</td>
<td>Dr Souvik Sur</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>170</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Balanceable Ladder Apparatus</td>
<td>Kamal Mehrotra</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>171</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Shock Resisting Headgear Apparatus</td>
<td>Arun Gupta, Rajiv Kumar</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>172</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Head Guarding Apparatus</td>
<td>Arun Gupta, Rajiv Kumar</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>173</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Nail Holding And Guiding Apparatus</td>
<td>Ajay K Upadhyay</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>174</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Light Illuminating Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Arun Gupta,<br />Dr Ajay K&nbsp; Upadhyay</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>175</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Anvil Restoration System&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Arun Gupta</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>176</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Shuttle Maintenance Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Dr Ajay K Upadhyay</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>177</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Adjustable Carousel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Dr Rajeev Kumar, <br />Rahul Vishnoi</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>178</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Lamp Making Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Pradeep Verma</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>179</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Convertible Double Decker Bed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Dr Ajay K Updhayay,<br />Alok Singh Sengar</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>180</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Dual Authentication System For&nbsp; Vehicle Ignitions&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Pradeep Verma,Rahul Vishnoi</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>181</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Modular Hang Gliding Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Arun Gupta,<br />Dr Ajay K&nbsp; Upadhyay</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>182</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automatic Riveting Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Alok Singh Sengar,Arun Gupta</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>183</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Head Wearable Device</td>
<td>Rahul Vishnoi</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>184</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>&nbsp;Wind Instrument Cleaning Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Arun Gupta,<br />Dr Ajay K&nbsp; Upadhyay</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>185</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multi Shape Pillar Constructing Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Arun Gupta,<br />Dr Ajay K&nbsp; Upadhyay</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>186</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Bearing Removing Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Arun Gupta,<br />Dr Ajay K&nbsp; Upadhyay</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>187</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Shoe Stretching Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Dr Ajay K Upadhyay,<br />Dr Atri Deo Tripathi</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>188</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Sheet Cutting Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Alok Singh Sengar,Arun Gupta</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>189</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Tire Restoration Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Arun Gupta,<br />Dr Ajay K&nbsp; Upadhyay</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>190</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Portable Bathing Device</td>
<td>Vijendra Singh Rawat,Neha Anand</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>191</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Electric Iron</td>
<td>Pradeep Kr. Verma</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>192</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Secured Adjustable Socket&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Rahul Vishnoi,Dr. Pankaj Goswami</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>193</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Clay Pot Preparation Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Pradeep Kr. Verma</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>194</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Beverage Dispensing System</td>
<td>Arun Gupta</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>195</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Mold Removing Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Arun Gupta</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>196</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Bread Processing And Preparing Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Alok Singh Sengar,Rahul Vishnoi</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>197</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Shielding Device For Vehicle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Arun Gupta</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>198</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Gas Pipe Fixation Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Dr Atri Deo Tripathi</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>199</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Saw Teeth Replacing Device</td>
<td>Arun Gupta</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>200</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>&nbsp;Automatic Optical Fibers Jointing&nbsp;&nbsp;&nbsp; Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Rahul Vishnoi,Pradeep Verma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>201</td>
<td>Diptonil Banerjee</td>
<td>Process for Synthesizing Europium Doped Graphitic Carbon Nitride (G-C3n4) For Removal of Textile Dyes from Water</td>
<td>Diptonil Banerjee</td>
<td>2021</td>
<td>Australia</td>
</tr>
<tr>
<td>202</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>IOT Based Smart Food Adulteration Detection System and Method Thereof</td>
<td>Pawan Kumar<br />Dr Ashutosh kumar Bhatt<br />Dr Rajeev Kumar<br />Dr Durgesh Pant</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>203</td>
<td>Dr. Rohin Garg</td>
<td>WCM-Smart City: Waste Collection And Management Under Smart City Using Iot (Patent Granted By Australia Patent Act 1990)</td>
<td>Vipin Jain, Rohin Garg, Atul Kumar, Anil Parlikar, Yogesh Nagvekar, Santosh Nagoure, S B Chordiya, Ganesh Regulwar, Soumitra Das, Dilip Kumar Saini</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>204</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Noise Control Apparatus</td>
<td>Dr Prabal Chaterjee,Dr V K Singh</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>205</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Self Sanitizing Handle</td>
<td>Dr Sudhir Singh,Arun Gupta</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>206</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Uv Radiation Protection Apparatus</td>
<td>Dr Ashish Chandra,Dr SM Tripathi</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>207</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Ear Protecting Apparatus</td>
<td>Dr Prabal Chateree, Dr Akshay Jain</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>208</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Leg Protecting Apparatus</td>
<td>Dr Amit Saraff</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>209</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Limbs Protection Apparatus</td>
<td>Dr Amit Saraff, Shivani Kaul</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>210</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Tub Cleaning Apparatus</td>
<td>Jasline,Libin Joseph,Ramniwas,Lingaraju,Prabhu</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>211</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automatic Cotton Wicks Making Device</td>
<td>Shreenath Kulkarni,Mahantesh Dasyal, Jitendra Singh,Heamalatha, Basavara</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>212</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Infant Carrying Apparatus</td>
<td>Ram Niwas</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>213</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Vomit Collection Device</td>
<td>Jitendra Singh,Athokpam Sonia Devi,Basavaraj Mudhol</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>214</td>
<td>DR NAVNEET KUMAR</td>
<td>I-Spray: Intelligent Thief Identifier Through UV-GEL Spray.</td>
<td>1. Dr. M. N.Rao<br />2. Dr. M.V.Rao. <br />3. Dr. V. Suryanarayana<br />4. Dr. Ram Gopal</td>
<td>2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>215</td>
<td>Mrs. Archana Ravindra Jain</td>
<td>Ogygen level enhancer in air through electrolysis of water</td>
<td>Pradeep k gupta, Anubhav Gupta, Ankit Kumae, Arun Kumar, Navneet Kumar, Vineet Saxena, Jyoti Ranjan, Sandeep Saxena</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>216</td>
<td>Arulsamy Elphine Prabahar</td>
<td>Management of Diabetes Mellitus by synergestic herbal extract formulation</td>
<td>Arulsamy Elphine Prabahar</td>
<td>2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>217</td>
<td>Anurag Verma</td>
<td>Gastroretentive Formulation with carboxymethylated Gum Sterculia</td>
<td>Anurag Verma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>218</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Pipe Hanging Apparatus</td>
<td>Dr Anurag Verma, Rahul Vishnoi</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>219</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multi Chamber Storing Apparatus</td>
<td>Dr Anurag Verma, Dr Piyush Mittal</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>220</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Ruminant Abdomen Sheathing Device</td>
<td>Dr Anurag Verma, Dr K K Sharma</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>221</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Stem Cutting Apparatus</td>
<td>Milind Pande</td>
<td>2021</td>
<td>Govt. Of India</td>
</tr>
<tr>
<td>222</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Laparoscope Disinfection Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Anurag Verma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>223</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Nasal Dilation Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Anurag Verma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>224</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Pain Alleviating Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Anurag Verma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>225</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automatic Elbow Protection Device</td>
<td>Dr Nanadkishore Sah, Dr Himani</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>226</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Walking Aid Apparatus</td>
<td>Dr Shivani Kaul, Dr Farhan Khan</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>227</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Swing Assistive Device For Differently Abled Users&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Kanchan Gupta</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>228</td>
<td>Dr. Amit Sharma</td>
<td>IoT Based Smart Rodent Repelling System for Automobiles</td>
<td><br />Dr Anuj Kumar Agarwal, <br />Associate Prof.</td>
<td>2021</td>
<td>Australia</td>
</tr>
<tr>
<td>229</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. NARESH TRIVEDI<br />3 . DR. MANJU KHARI<br />4 . DR. HEMLATA SHARMA<br />5 . PROF. SANTOSH GOPAL NAGPURE <br />6 . DR. MONIKA SHARMA <br />7 . MS. DEVIKA DHUMAL</td>
<td>PRAP-SYSTEM: PREVENTING REAL TIME ACCIDENTIAL PROBABILITIES SYSTEM.&nbsp;</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. NARESH TRIVEDI<br />3 . DR. MANJU KHARI<br />4 . DR. HEMLATA SHARMA<br />5 . PROF. SANTOSH GOPAL NAGPURE <br />6 . DR. MONIKA SHARMA <br />7 . MS. DEVIKA DHUMAL</td>
<td>2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>230</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. VARINDER SINGH<br />3 . DR. SURESH KUMAR<br />4 . PROF. SANTOSH GOPAL NAGPURE <br />5 . T.K. LAKSHMI <br />6 . DR. R. MADANA MOHANA <br />7 . MR. JAY CHANDRASHEKHAR AJMIRE<br />8 . MR. YASH MADHUKAR PATIL<br />9 . MR. PARTH RAVINDRA PATIL</td>
<td>I-ADAPTER: INTELLIGENT ADAPTER&nbsp;</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. VARINDER SINGH<br />3 . DR. SURESH KUMAR<br />4 . PROF. SANTOSH GOPAL NAGPURE <br />5 . T.K. LAKSHMI <br />6 . DR. R. MADANA MOHANA <br />7 . MR. JAY CHANDRASHEKHAR AJMIRE<br />8 . MR. YASH MADHUKAR PATIL<br />9 . MR. PARTH RAVINDRA PATIL</td>
<td>2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>231</td>
<td>1 . DR. SURESH KUMAR<br />2 . DR. VIPIN JAIN<br />3 . DR. MANJU KHARI<br />4 . RAMACHANDRAN ALAGARSAMY <br />5 . BAALAMURUGAN K. M<br />6 . PROF. SANTOSH GOPAL NAGPURE <br />7 . DR. PUSHPENDER SARAO <br />8 . PROF. MANAV ASHOK THAKUR <br />9 . NIKITA SURENDRA KANDHARE<br />10 . SANSKRUTI MANISH VYAS</td>
<td>ML-SYSTEM: MOBILE LOCKING SYSTEM FOR VEHICLE&nbsp;</td>
<td>1 . DR. SURESH KUMAR<br />2 . DR. VIPIN JAIN<br />3 . DR. MANJU KHARI<br />4 . RAMACHANDRAN ALAGARSAMY <br />5 . BAALAMURUGAN K. M<br />6 . PROF. SANTOSH GOPAL NAGPURE <br />7 . DR. PUSHPENDER SARAO <br />8 . PROF. MANAV ASHOK THAKUR <br />9 . NIKITA SURENDRA KANDHARE<br />10 . SANSKRUTI MANISH VYAS</td>
<td>2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>232</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. AASHISH MEHRA<br />3 . PVN SAICHANDU<br />4 . BABY THERESA GUDAVALLI<br />5 . PROF. AVINASH GOPAL PATIL<br />6 . PROF. DR. BEG RAJ SINGH</td>
<td>AIH-STAND: AI- BASED HYRAULIC CENTRE STAND FOR MOTORCYCLE USING HAND LEVER&nbsp;</td>
<td>1 . DR. VIPIN JAIN<br />2 . DR. AASHISH MEHRA<br />3 . PVN SAICHANDU<br />4 . BABY THERESA GUDAVALLI<br />5 . PROF. AVINASH GOPAL PATIL<br />6 . PROF. DR. BEG RAJ SINGH</td>
<td>2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>233</td>
<td>1 . Dr. Varinder Singh<br />2 . Dr. Vipin Jain<br />3 . Dr. Sudesh Kumar<br />4 . Dr. Shikha Maheshwari&nbsp; <br />5 . Prof. Dr. Beg Raj SIngh<br />6 . Mr. Pawan Kumar Singh<br />7. Miss. Pari Nidhi Singh</td>
<td>AEVM-Control: Advanced Electric Vehicle Controlling System using Beagle Bone Black.</td>
<td>1 . Dr. Varinder Singh<br />2 . Dr. Vipin Jain<br />3 . Dr. Sudesh Kumar<br />4 . Dr. Shikha Maheshwari&nbsp; <br />5 . Prof. Dr. Beg Raj SIngh<br />6 . Mr. Pawan Kumar Singh<br />7. Miss. Pari Nidhi Singh</td>
<td>2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>234</td>
<td>1 . PROF.(DR.) VIPIN JAIN <br />2 . DR. MANVINDER SINGH PAHWA<br />3 . DR. CHANCHAL CHAWLA <br />4 . DR. RAJEEV GUPTA <br />5 . DR. RADHEY SHYAM JHA <br />6 . DR. MANOJ AGARWAL <br />7 . DR. SATYENDRA ARYA <br />8 . DR VIBHOR JAIN<br />9 . DR. MREDU GIYAL&nbsp;</td>
<td>BPES-ATM: BIOMETRIC INPUT AND PIN AUTHENTICATION TO ENHANCE SECURITY OF THE AUTOMATIC TELLER MACHINES&nbsp;</td>
<td>1 . PROF.(DR.) VIPIN JAIN <br />2 . DR. MANVINDER SINGH PAHWA<br />3 . DR. CHANCHAL CHAWLA <br />4 . DR. RAJEEV GUPTA <br />5 . DR. RADHEY SHYAM JHA <br />6 . DR. MANOJ AGARWAL <br />7 . DR. SATYENDRA ARYA <br />8 . DR VIBHOR JAIN<br />9 . DR. MREDU GIYAL&nbsp;</td>
<td>2019</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>235</td>
<td>1 . PROFESSOR (DR.) VIPIN JAIN <br />2 . MR. PARITOSH SHARMA <br />3 . PROFESSOR (DR.) SHARAD KUMAR GOEL<br />4 . DR. ROHIN GARG <br />5 . PROFESSOR (DR.) AASHISH MEHRA<br />6 . DR. RACHIT AGARWAL <br />7 . DR. CHANCHAL CHAWLA <br />8 . DR. MANOJ AGARWAL&nbsp;</td>
<td>ADVANCED BUSINESS SERVICE MANAGEMENT SYSTEM&nbsp;</td>
<td>1 . PROFESSOR (DR.) VIPIN JAIN <br />2 . MR. PARITOSH SHARMA <br />3 . PROFESSOR (DR.) SHARAD KUMAR GOEL<br />4 . DR. ROHIN GARG <br />5 . PROFESSOR (DR.) AASHISH MEHRA<br />6 . DR. RACHIT AGARWAL <br />7 . DR. CHANCHAL CHAWLA <br />8 . DR. MANOJ AGARWAL&nbsp;</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>236</td>
<td>1)SUSHAMA RANI DUTTA <br />&nbsp;2)DR. S. THULASI PRASAD <br />&nbsp;3)PROF. (DR.) VIPIN JAIN <br />&nbsp;4)DR. RAJINDER SINGH SODHI <br />&nbsp;5)DR. VRUSHSEN PURUSHOTTAM PAWAR<br />&nbsp;6)PROF.(DR.) S. B. CHORDIYA&nbsp;</td>
<td>Serious Patient Checking Systems: Serious Patients Checking using Machine Learning and Artificial Intelligence (AI)&nbsp;</td>
<td>1)SUSHAMA RANI DUTTA <br />&nbsp;2)DR. S. THULASI PRASAD <br />&nbsp;3)PROF. (DR.) VIPIN JAIN <br />&nbsp;4)DR. RAJINDER SINGH SODHI <br />&nbsp;5)DR. VRUSHSEN PURUSHOTTAM PAWAR<br />&nbsp;6)PROF.(DR.) S. B. CHORDIYA&nbsp;</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>237</td>
<td>1)MR. KASALA RAJU<br />&nbsp;2)PROF.(DR.) PAWAN KUMAR BHARTI <br />&nbsp;3)DR. SAVRABH KAWAR <br />&nbsp;4)PROF.(DR.) M.K. PANDEY <br />&nbsp;5)PROF. (DR.) VIPIN JAIN <br />&nbsp;6)DR. VRUSHSEN PURUSHOTTAM PAWAR</td>
<td>COVID19 KILLER: Sanitizer Making Process Using Machine Learning to Kill SARS Coronavirus (COVID19)&nbsp;</td>
<td>1)MR. KASALA RAJU<br />&nbsp;2)PROF.(DR.) PAWAN KUMAR BHARTI <br />&nbsp;3)DR. SAVRABH KAWAR <br />&nbsp;4)PROF.(DR.) M.K. PANDEY <br />&nbsp;5)PROF. (DR.) VIPIN JAIN <br />&nbsp;6)DR. VRUSHSEN PURUSHOTTAM PAWAR</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>238</td>
<td>1)Dr. TULASICHANDRA SEKHAR GORRIPOTU<br />&nbsp;2)ANDHAVARAPU KANTHI <br />&nbsp;3)SOUBHAGYA RANJAN MALLICK<br />&nbsp;4)DR. PRADYUMNA KUMAR TRIPATHY<br />&nbsp;5)PROFESSOR (DR.) VIPIN JAIN <br />&nbsp;6)MR. AAYUSH MANGAL</td>
<td>AEMC &ndash; IOT SYSTEM: Agriculture Environment Managed and Control Using IOT System&nbsp;</td>
<td>1)Dr. TULASICHANDRA SEKHAR GORRIPOTU<br />&nbsp;2)ANDHAVARAPU KANTHI <br />&nbsp;3)SOUBHAGYA RANJAN MALLICK<br />&nbsp;4)DR. PRADYUMNA KUMAR TRIPATHY<br />&nbsp;5)PROFESSOR (DR.) VIPIN JAIN <br />&nbsp;6)MR. AAYUSH MANGAL</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>239</td>
<td>1)DR. SUDHA ARVIND<br />&nbsp;2)DR. DEVIKA S.V. <br />&nbsp;3)DR. C.M. JOSHI <br />&nbsp;4)PROF. (DR.) VIPIN JAIN <br />&nbsp;5)PROF. DR. YASHPAL SINGH <br />&nbsp;6)PROF.(DR.) VANDANA SINGH&nbsp;</td>
<td>Methods and Compositions for Infectious RNA, CDNA, and MRNA of SARS Coronavirus.&nbsp;</td>
<td>1)DR. SUDHA ARVIND<br />&nbsp;2)DR. DEVIKA S.V. <br />&nbsp;3)DR. C.M. JOSHI <br />&nbsp;4)PROF. (DR.) VIPIN JAIN <br />&nbsp;5)PROF. DR. YASHPAL SINGH <br />&nbsp;6)PROF.(DR.) VANDANA SINGH&nbsp;</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>240</td>
<td>1)DR. NEERAJ KUMAR MISRA <br />2)BRIJESH PANDEY<br />3)RATIRANJAN SENAPATI<br />4)Dr. SHAILENDRA KUMAR <br />5)PROF. (DR.) VIPIN JAIN<br />6)ABHILASHI UNIVERSITY</td>
<td>IVA-Parking: Intelligent Vehicle Parking Space Availability, Time Slot and Charge Notifications using IOT based Management Technology.&nbsp;</td>
<td>1)DR. NEERAJ KUMAR MISRA <br />2)BRIJESH PANDEY<br />3)RATIRANJAN SENAPATI<br />4)Dr. SHAILENDRA KUMAR <br />5)PROF. (DR.) VIPIN JAIN<br />6)ABHILASHI UNIVERSITY</td>
<td>2020</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>241</td>
<td>Vipin Jain, Rohin Garg, Divakar Yadav, B Venkatesh, Nagendra Pratap Singh, S.V Prabhakar, Arun Kumar Yadav, S Arvind, Jagdeep Singh, S.B. Chordiya</td>
<td>AAM-Physical Fitness: ANALYSIS OF PHYSICAL FITNESS AND ACTIVITY LEVEL USING MACHINE LEARNING, DEEP LEARNING PROGRAMMING. (Patent Granted by Australia Patent Act 1990)</td>
<td>Vipin Jain, Rohin Garg, Divakar Yadav, B Venkatesh, Nagendra Pratap Singh, S.V Prabhakar, Arun Kumar Yadav, S Arvind, Jagdeep Singh, S.B. Chordiya</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>242</td>
<td>Vipin Jain, Rohin Garg, Atul Kumar, Anil Parlikar, Yogesh Nagvekar, Santosh Nagoure, S B Chordiya, Ganesh Regulwar, Soumitra Das, Dilip Kumar Saini</td>
<td>WCM-Smart City: WASTE COLLECTION AND MANAGEMENT UNDER SMART CITY USING IOT (Patent Granted by Australia Patent Act 1990)</td>
<td>Vipin Jain, Rohin Garg, Atul Kumar, Anil Parlikar, Yogesh Nagvekar, Santosh Nagoure, S B Chordiya, Ganesh Regulwar, Soumitra Das, Dilip Kumar Saini</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>243</td>
<td>Vipin Jain, Jyothi Mandala, Alka Kulkarni, CH. Rayala Vinodkumar, Rambabu Vatti, Rakhi Joshi Bhardwaj, Kanchan D. Ganvir, L. Venkateswara Reddy, P. Lalitha Surya Kumari, Pankaj Kumar Srivastava</td>
<td>SDHR-Blockchain Technology: Securely Store Digital Healthcare Records, Notification, Alert Using Blockchain Technology (Patent Granted by Australian Patent Act 1990)</td>
<td>Vipin Jain, Jyothi Mandala, Alka Kulkarni, CH. Rayala Vinodkumar, Rambabu Vatti, Rakhi Joshi Bhardwaj, Kanchan D. Ganvir, L. Venkateswara Reddy, P. Lalitha Surya Kumari, Pankaj Kumar Srivastava</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>244</td>
<td>Anju Saxena, Mosam Sinha, Baswaraj Gadgay, V. Jyothi, Vipin Jain, Saurabh Dev, Santosh Gopal Nagpure, Avinash Thakur, Vineet kumar, S. B. Chordiya</td>
<td>AMPI- Hazardous &amp; non-Hazardous Wastes Management: Automatic Method and Process Management for Industrial Hazardous and non-Hazardous Wastes</td>
<td>Anju Saxena, Mosam Sinha, Baswaraj Gadgay, V. Jyothi, Vipin Jain, Saurabh Dev, Santosh Gopal Nagpure, Avinash Thakur, Vineet kumar, S. B. Chordiya</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>245</td>
<td>Vipin Jain, Rajesh Kumar Pathak, Pawan Kumar Bharti, Ajeet Singh, MD. Iqbal, Ksrk Sarma, Om Prakash Sahu, Prasant Kumar Pattnaik, S. B. Chordiya</td>
<td>DACH- Health Notification: IoT-based Health Notification and Doctor Availability Checking in Hospital Using Machine Learning, Deep Learning Programming</td>
<td>Vipin Jain, Rajesh Kumar Pathak, Pawan Kumar Bharti, Ajeet Singh, MD. Iqbal, Ksrk Sarma, Om Prakash Sahu, Prasant Kumar Pattnaik, S. B. Chordiya</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>246</td>
<td>Rambabu Vatti, Pallavi Badry, B Venkatesh, Viswanatha Reddy Allugunti, Vipin Jain, Kanchan D. Ganvir, Ankur Singh Bist, Anurag Jain, Aakriti Jain, Avinash Thakur</td>
<td>APIC- Recycling C&amp;D Waste: Automatic Process for Recycling C&amp;D Waste Including Concrete Part and Convert Useful Material (Patent Granted by Australia Patent Act 1990)</td>
<td>Rambabu Vatti, Pallavi Badry, B Venkatesh, Viswanatha Reddy Allugunti, Vipin Jain, Kanchan D. Ganvir, Ankur Singh Bist, Anurag Jain, Aakriti Jain, Avinash Thakur</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>247</td>
<td>Sony Karra, K. Sarat Kumar, K. Ch. Sri Kavya, A. Narendra Babu, Rakesh Kumar Yadav, Naga Swetha Pasupuleti, Kotte Sowjanya, Vipin Jain, S. B. Chordiya, Biplab Kumar Sarkar</td>
<td>PAVC- Improvement Techniques of Free Space Optical Link: PERFORMANCE ANALYSIS AND IMPROVEMENT TECHNIQUES OF FREE SPACE OPTICAL LINK IN VARIOUS ATMOSPHERIC CONDITIONS</td>
<td>Sony Karra, K. Sarat Kumar, K. Ch. Sri Kavya, A. Narendra Babu, Rakesh Kumar Yadav, Naga Swetha Pasupuleti, Kotte Sowjanya, Vipin Jain, S. B. Chordiya, Biplab Kumar Sarkar</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>248</td>
<td>K. B. Waghulde, Milind M. Patil, D. Venkata Naga Ananth, Atul Ashok Patil, Sarika Atul Patil, Sumit S. Desai, Vipin Jain, S. B. Chordiya, Sandeep Kumar Gupta, Biplab Kumar Sarkar</td>
<td>EI-Overheat Control System: Engine Overheat Intelligent Control System</td>
<td>K. B. Waghulde, Milind M. Patil, D. Venkata Naga Ananth, Atul Ashok Patil, Sarika Atul Patil, Sumit S. Desai, Vipin Jain, S. B. Chordiya, Sandeep Kumar Gupta, Biplab Kumar Sarkar</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>249</td>
<td>Sharad Kumar Goel, Vipin Jain, Paritosh Sharma, Chanchal Chawla, Amit Kansal, Rohin Garg, Ankit Kumar, Rajeev Sijaria, Sangeet Vashishtha, Ravindra SV</td>
<td>CTAO- Education Monitoring: IoT based Education Monitoring for Checking the Class Teacher Available in a Class and Notes Available On-line Notified</td>
<td>Sharad Kumar Goel, Vipin Jain, Paritosh Sharma, Chanchal Chawla, Amit Kansal, Rohin Garg, Ankit Kumar, Rajeev Sijaria, Sangeet Vashishtha, Ravindra SV</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>250</td>
<td>Vipin Jain, Amit Kansal, Chanchal Chawla, Ankit Kumar, Rohin Garg, Rachit Agarwal, Sharad Kumar Goel, Rajeev Sijaria, Pooja Sharma, Abhishek Maheshwari</td>
<td>IPBE-Detect Quality of Works: Intelligent process to detect employee&rsquo;s quality of works and notify it to authorities</td>
<td>Vipin Jain, Amit Kansal, Chanchal Chawla, Ankit Kumar, Rohin Garg, Rachit Agarwal, Sharad Kumar Goel, Rajeev Sijaria, Pooja Sharma, Abhishek Maheshwari</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>251</td>
<td>Raj Gaurang Tiwari, V. Srikanth, A. Murali, T. Meenakshi, Sunitha. JD, Viswanatha Reddy Allugunti, L. Venkateswara Reddy, Sudarshan Sampatrao Bobade, Vishakha A. Metre, Vipin Jain</td>
<td>ISUAV-Woman Security: Intelligent Woman Security Using Streetlight and Auto Run Unmanned Aerial Vehicle Using IOT- Based Technology</td>
<td>Raj Gaurang Tiwari, V. Srikanth, A. Murali, T. Meenakshi, Sunitha. JD, Viswanatha Reddy Allugunti, L. Venkateswara Reddy, Sudarshan Sampatrao Bobade, Vishakha A. Metre, Vipin Jain</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>252</td>
<td>Vipin Jain, A. Srujana, Swati Kumari, C. N. Ravi, B. Sudhakar Reddy, B. Rajesh, M. Vijay kumar, Anil Vishram Revankar, Sanjay Bhaskar Zope, Nadia P. Reznik, S. B. Chordiya</td>
<td>IFAC- Driver Less Vehicle: Driver Less Intelligent Fully Autonomous Controlled Vehicle</td>
<td>Vipin Jain, A. Srujana, Swati Kumari, C. N. Ravi, B. Sudhakar Reddy, B. Rajesh, M. Vijay kumar, Anil Vishram Revankar, Sanjay Bhaskar Zope, Nadia P. Reznik, S. B. Chordiya</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>253</td>
<td>Vipin Jain, Deepak Balodi, Mahima Shanker Pandey, Deepak Sharma, Venkateswarlu Sunkari, Sonia Ahsan, S. B. Chordiya, Beg Raj</td>
<td>CDN- Object Detection System: Object Detection System with Image Classification and Deep Neural Networks</td>
<td>Vipin Jain, Deepak Balodi, Mahima Shanker Pandey, Deepak Sharma, Venkateswarlu Sunkari, Sonia Ahsan, S. B. Chordiya, Beg Raj</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>254</td>
<td>Vipin Jain, V. Vijaya Kishore, Sreevidya R. C., G. L. Bhong, Satish Kumar, Satish Kumar Kalhotra, Mohd Zuhair, Neeraj Kumar Misra, Nirupma Pathak, Bandan Kumar Bhoi</td>
<td>QCIU- Education Environment System: Quantum Computing Integrated Development Education Environment Using IoT-Based System</td>
<td>Vipin Jain, V. Vijaya Kishore, Sreevidya R. C., G. L. Bhong, Satish Kumar, Satish Kumar Kalhotra, Mohd Zuhair, Neeraj Kumar Misra, Nirupma Pathak, Bandan Kumar Bhoi</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>255</td>
<td>Vipin Jain, Manish Mahajan, K. Ramesh Babu, Rijwan Khan, Lekha Rani, Arun Wamanrao Dhawale, Naga Swetha Pasupuleti, Chris Egbu, S. B. Chordiya, Nitin Balkrishna Chaphalkar</td>
<td>OMAI- Waste Treatment Systems: AI- Based Programming for Operation and Maintenance of Waste Treatment Systems</td>
<td>Vipin Jain, Manish Mahajan, K. Ramesh Babu, Rijwan Khan, Lekha Rani, Arun Wamanrao Dhawale, Naga Swetha Pasupuleti, Chris Egbu, S. B. Chordiya, Nitin Balkrishna Chaphalkar</td>
<td>2020</td>
<td>australia</td>
</tr>
<tr>
<td>256</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Ice Cream Cutting And Serving Device</td>
<td>Vipin Jain, Dr. Aditya Sharma, Dr. Manoj Agarwal, Dr. Chanchal Chawla, Dr. Rajeev Verma, Dr. Puneet Sethi</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>257</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Priority Based Elevator Management System</td>
<td>&nbsp;Vipin Jain, Dr. Aditya Sharma, Dr.Manoj Agarwal, Dr. Chanchal Chawla, Dr. Rajeev Verma, Mohit Rastogi</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>258</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Multifunctional Elevator Management System</td>
<td>Vipin Jain, Dr. Aditya Sharma, Dr. Manoj Agarwal, Dr. Chanchal Chawla, Dr. Rajeev Verma, Dr. Puneet Sethi</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>259</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Egg Cooking Device</td>
<td>&nbsp;Vipin Jain, Dr. Aditya Sharma, Dr.Manoj Agarwal, Dr. Chanchal Chawla, Dr. Rajeev Verma, Mohit Rastogi</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>260</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Card Holding Apparatus</td>
<td>Dr Manjula Jain, Dr Aditya Sharma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>261</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automatic Door Stopping Device&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Raghuvir Singh</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>262</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Smart Liquid Containing Device</td>
<td>Raghuvir Singh</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>263</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Anti Shock Device</td>
<td>Dr Vipin Jain, Dr Aditya Sharma, Dr Manjula Jain</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>264</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Wearable Cleaning Apparatus</td>
<td>Dr Vipin Jain, Dr Manjula Jain, Dr Aditya Sharma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>265</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Bottle Holding Apparatus</td>
<td>Dr M.P. Singh,Dr Manjula Jain</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>266</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automatic Lipstick Protection Device</td>
<td>Dr Rashmi Mehrotra, <br />Dr Manjula Jain</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>267</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Retractable Rain Protection Apparatus</td>
<td>Dr M.P. Singh, Dr Arun Gupta</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>268</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Food Slicing Apparatus</td>
<td>Dr Vipin Jain, Dr Amit Kansal,Dr. Chanchal Chawla, Dr. Vibhor Jain,Dr. Ankit Kumar,Dr. Bindoo Malviya, Dr Upasana</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>269</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Food Quality Management Device</td>
<td>Dr.Vipin Jain, Dr. Manoj Agrawal,Garima Rawat,Mohit Rastogi, Anand Joshi,Sumit Kumar,&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>270</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automated Food Poaching Device</td>
<td>Dr Vipin Jain, Dr Vibhor Jain, Dr. Utpala Das, Dr. Amit Kansal, Mohit Rastogi, Anand Joshi</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>271</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Knee Protecting Apparatus</td>
<td>Dr Vipin Jain, Dr Aditya Sharma, Dr Manjula Jain, Dr Anurag Verma</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>272</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Knee Protecting Apparatus</td>
<td>Dr Aditya Sharma, Dr Vipin Jain</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>273</td>
<td style="font-weight: 400;">Teerthanker Mahaveer University</td>
<td>Automatic Stamping Device</td>
<td>Dr Tikam Singh</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>274</td>
<td>Teerthanker Mahaveer University</td>
<td>Dog Sled</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>275</td>
<td>Teerthanker Mahaveer University</td>
<td>Square Cutting Tool</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>276</td>
<td>Teerthanker Mahaveer University</td>
<td>Photographic Flashlight Apparatus</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>277</td>
<td>Teerthanker Mahaveer University</td>
<td>Fiber Media Converter</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>278</td>
<td>Teerthanker Mahaveer University</td>
<td>Coffee Making Machine</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>279</td>
<td>Teerthanker Mahaveer University</td>
<td>Hydraulic Turbine</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>280</td>
<td>Teerthanker Mahaveer University</td>
<td>Dental Articulator</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>281</td>
<td>Teerthanker Mahaveer University</td>
<td>Guillotine Paper Cutter</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>282</td>
<td>Teerthanker Mahaveer University</td>
<td>Bicycle Repairing Stand</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>283</td>
<td>Teerthanker Mahaveer University</td>
<td>Circuit Board Holder</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>284</td>
<td>Teerthanker Mahaveer University</td>
<td>Pipe Bending Machine</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>285</td>
<td>Teerthanker Mahaveer University</td>
<td>Portable X-Ray Apparatus</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>286</td>
<td>Teerthanker Mahaveer University</td>
<td>Ultrasound Apparatus</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>287</td>
<td>Teerthanker Mahaveer University</td>
<td>Nebuliser Handpiece</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>288</td>
<td>Teerthanker Mahaveer University</td>
<td>Thermometer</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>289</td>
<td>Teerthanker Mahaveer University</td>
<td>Mirror Equipment For Doctors</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>290</td>
<td>Teerthanker Mahaveer University</td>
<td>Dental Mouth Examination Mirror</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>291</td>
<td>Teerthanker Mahaveer University</td>
<td>Body Massage Device</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>292</td>
<td>Teerthanker Mahaveer University</td>
<td>Infrared Headband For Vein Detection</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>293</td>
<td>Teerthanker Mahaveer University</td>
<td>Neckband Stethoscope</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>294</td>
<td>Teerthanker Mahaveer University</td>
<td>Facewash Station</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>295</td>
<td>Teerthanker Mahaveer University</td>
<td>Dental Syringe</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>296</td>
<td>Teerthanker Mahaveer University</td>
<td>Pulp Tester</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>297</td>
<td>Teerthanker Mahaveer University</td>
<td>Oxygen Concentrator</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>298</td>
<td>Teerthanker Mahaveer University</td>
<td>Uv Sterilizer For Wounds</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
</tr>
<tr>
<td>299</td>
<td>Teerthanker Mahaveer University</td>
<td>Syringe And Needle Burner</td>
<td>&nbsp;</td>
<td>2021</td>
<td>Govt. of India</td>
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
