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

.container-fluid {
padding-right: 15px;
padding-left: 40px;
}

.m-ol-list{
text-align:justify;

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

</style>


<?php
include 'sidebar/research_sidebar.php';
?>

        <div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5 ">

                   <div class="row mx-0">
            <h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">Frequently Asked <span
                class="d-block d-sm-inline"> Questions</span></h2>

<hr class="horizontal-line">
<button class="careers-accordion">What is the selection process for admission to Ph.D.? <span class="icon">+</span></button>
<div class="panel">
    <p>Based on the information provided by the applicant, the eligible candidates will be called for <b>Teerthanker Mahaveer University Research Aptitude Test (TRAT)</b>. The TRAT qualified candidates would be required to first complete the coursework as specified in the <a href="https://www.tmu.ac.in/tmu/phd-ordinance-2017">Ph.D. Ordinance</a> and give the presentation of their research plan to the Research Committee on a later date communicated by the concerned college of the university.</p>
</div>
<hr class="horizontal-line">
<hr class="horizontal-line">
<button class="careers-accordion"> What is TRAT?<span class="icon">+</span> </button>
<div class="panel">
    <p>The Teerthanker Mahaveer University Research Aptitude Test (TRAT) judges an applicant on the basis of his/her quantitative, analytical, language and research skills. The question paper is divided into two parts viz. <b>Part A</b> and <b>Part B</b>. Part A of the TRAT is designed to assess the research aptitude of the candidate and consists of multiple choice type questions. Part B of the RAT is designed to assess the subject specific knowledge of the candidate and consists of descriptive type questions.</p>
</div>

<hr class="horizontal-line">
<button class="careers-accordion"> What is the purpose of presentation of research plan?<span class="icon">+</span> </button>
<div class="panel">
    <p>University attaches high importance to applicant's motivation and research capability. Therefore it is natural to examine the applicant's motivation for a research career, either in academia or in industry.</p>
</div>

<hr class="horizontal-line">
<button class="careers-accordion"> How do I crack TRAT?<span class="icon">+</span> </button>
<div class="panel">
    <p>The syllabus, scheme of examination, and sample/model test paper for all subjects are available on the university’s website under the link “Research” that can be referred to for preparation for the TRAT.</p>
</div>

<hr class="horizontal-line">
<button class="careers-accordion"> Can I get exemption from TRAT? If yes, shall my application be considered straight for registration?<span class="icon">+</span> </button>
<div class="panel">
    <p>UGC-CSIR NET, SLET qualified applicants are exempt from appearing in the TRAT.</p>
</div>

<hr class="horizontal-line">
<button class="careers-accordion">How often is the TRAT conducted? <span class="icon">+</span> </button>
<div class="panel">
    <p>The University conducts TRAT twice a year provided there are sufficient numbers of applications.</p>
</div>

<hr class="horizontal-line">
<button class="careers-accordion">How shall I get information about the TRAT after submitting my application? <span class="icon">+</span> </button>
<div class="panel">
    <p>The schedule for the TRAT is mentioned in Annexure K of the Ph.D Ordinance. However, it is in the interest of the applicant to remain in touch with the university for the purpose.</p>
</div>

<hr class="horizontal-line">
<button class="careers-accordion">How much time does it take to complete Ph.D.? <span class="icon">+</span> </button>
<div class="panel">
    <p>One can submit his/her thesis on completion of three years of registration. The maximum time allowed to complete PhD is six years.</p>
</div>

<hr class="horizontal-line">
<button class="careers-accordion"> Is there scope to do interdisciplinary research?<span class="icon">+</span> </button>
<div class="panel">
    <p>Yes, in fact, most of the research work done these days is interdisciplinary in nature.</p>
</div>

<hr class="horizontal-line">
<button class="careers-accordion">  Can I apply even if I don’t have a guide of my own? <span class="icon">+</span></button>
<div class="panel">
    <p>The University has requisite manpower and shall allot a supervisor to the candidate from its own pool of guides after a candidate has qualified the TRAT.</p>
</div>

<hr class="horizontal-line">
<button class="careers-accordion"> Am I supposed to pay for the services of the guide?<span class="icon">+</span> </button>
<div class="panel">
    <p>No.</p>
</div>

<hr class="horizontal-line">
<button class="careers-accordion">From where can I draw guidance about the SOP, fee structure, process, etc.? <span class="icon">+</span> </button>
<div class="panel">
    <p style="text-align:justify">The <a href="https://www.tmu.ac.in/tmu/phd-ordinance-2017" target="_blank" aria-label="Ph.D. Ordinance - open in a new tab" data-uw-rm-ext-link="" uw-rm-external-link-id="https://www.tmu.ac.in/tmu/phd-ordinance-2017$ph.d.ordinance">Ph.D. Ordinance</a> given on the website of the University provides complete guidance regarding the Ph.D. program.  Besides this, for any clarification, please mail your query at <a href="mailto:joint.registrar@tmu.ac.in" aria-label="send an email to joint.registrar@tmu.ac.in" uw-rm-vague-link-id="mailto:joint.registrar@tmu.ac.in$send an email to joint.registrar@tmu.ac.in" data-uw-rm-vglnk="">joint.registrar@tmu.ac.in</a> or call on +91-9837016031.</p>
</div>

</div>
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
