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

.m-ol-list li::marker{
    font-size: 1.6vmax;
    color:#FF7900;
    font-weight: 700;
 }
.m-ol-list b{
    /* color:#FF7900; */
    color:#001055;
    font-size: 1.4vmax;

 }

 .m-ol-list > li{
  position: relative;

 }
</style>



<?php
 include 'sidebar/management_sidebar.php';
?>
	<div class="col-12 col-md-9 mt-3 mt-sm-0 pt-5">
        <h2 class="text-center" style="color:#001055;
			text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Training & <span class="d-block d-sm-inline">Placement Cell </span></h2>

                <div class="container">  
                    <div class="row">
                        <p>A Unique academia-industry interface platform for all students of <strong>TMIMT – CORPORATE RESOURCE CENTRE (Placement Cell)</strong> where students and reputed MNCs can come together & explore opportunities for employment.Many top rated companies& MNC’s have visited the campus helping the students in achieving tremendous placements. The CRC works round the year towards generating placement, training, internship & industrial visit opportunities for the students. Reputed industrial houses across the country visit TMIMT regularly for conducting the campus recruitment programmes. The prime objective of the CRC is to facilitate the graduating students and industry by providing a common meeting ground where the prospective employers can identify suitable candidates for joining their organization. To achieve 100% employment of our students and to assist students in securing best available job opportunities, the CRC follows two fold approaches:</p>
                        <ul class="m-ol-list">
                            <li>Ensures that the students are ready for selection processes and its stages.</li>
                            <li>Inviting companies to the campus and acting as an interface between students and industry thereby facilitating the selection process of potential employers.</li>
                        </ul>
                    </div>    

        <div class="row">
            <hr class="horizontal-line">
                <button class="careers-accordion active">Personality Development Program<span class="icon">+</span> </button>
                    <div class="panel">
                        <p>Development of the personality of a student is heavily influenced by the environment in which a student spends most of his time. CRC Undertake various Personality Development Programmes for the overall development of the student viz; Verbal & Written Communication Skills, Group Discussion workshops & mock Practices, Aptitude, Attitude, Competencies, Assessments, Interests, Personality IQ/EQ Development and interview techniques of the modern recruitment best practices.</p>
                    </div>
                    <hr class="horizontal-line">
                        <button class="careers-accordion">Summer Internship Program<span class="icon">+</span></button>
                            <div class="panel">
                                <ul class="m-ol-list">
                                    <li>Summer Internship (SIP)  is an essential part of the developing managers in their curriculum and gives each student an insight into the corporate world and the working style at real life situations in business spheres.</li>
                                    <li>Upon the completion of the second semester of the MBA programme, every student has to undertake a 6-8 week of Summer Internship / Live Project at best possible organizations matching with his/ her interest and specialization.</li>
                                    <li>The students are offered multiple opportunities in different organizations of repute for a period of about 6-8 weeks on a specific assignment in accordance with the subject specialization. This enhances the knowledge part and confidence for that particular specialization. </li>
                                    <li>As a part of the SIP students are required to submit a Project Report on work done duly authenticated by the industry supervisors. A presentation about the work culture, organizational structure and business areas is made by the students and present to the evaluation team, thus forms the basis for the evaluation of the project work.</li>
                                </ul>
                            </div>
                    <hr class="horizontal-line">
                <button class="careers-accordion">Final Placement<span class="icon">+</span> </button>
                <div class="panel">
                <ul class="m-ol-list">
                    <li>Placement process commences from the month of September/ October for final year students.</li>
                    <li>Students are prepared and pass through training, assessment and selection process i.e. GD. PI, Written Test, HR Interview and then offered with Pre- Placement/ Final placement offers.</li>
                    <li>TMIMT has a strong pool of esteemed corporate and companies to hire our students.</li>
                    <li>TMIMT also has a strong network of Alumni spread over the globe to assist and guide our students in fulfilling their dream careers.</li>
                    <li>TMIMT offers nearly 90-100 % Placement to all eligible and interested students in various fields of their desired industries.</li>
                    <li>TMIMT offers consistent excellent placements in various sectors like E-Commerce, Logistics & Shipping, Telecom, FMCG, Retail, Banking & Finance, Hospitality service sector and much more to offer.</li>
					<li>Many students are bestowed with 3-5 job offers in hand before they pass out.</li>
                </ul>
                </div>
                <hr>
            </div>
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