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

p {
  margin-bottom:15px!important; 
  text-align:justify;
}




.m-ol-list{
text-align:justify;
list-style-type: disc!important;
}

.m-ol-list li::marker{
    font-size: 1.4vmax;
    color:#FF7A00;
    font-weight: 700;
  
 }
.m-ol-list b{
    /* color:#FF7A00; */
    color:#001055;
    font-size: 1.4vmax;
 }

</style>

<?php
 include 'sidebar/management_sidebar.php';
?>

				<div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">
                <h2 class=" text-center d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to <span style="color:#ff7a00;">TMIMT College of Management</span></h2>
                <h2 class=" text-center d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Welcome to <span style="color:#ff7a00;">TMIMT College of Management</span></h2>
                    
                  <div class="container mb-3">
                    <div class="row">
                        <img src="https://www.tmu.ac.in/img/tmimt/about_tmimt.jpg" alt="">
                    </div>
                </div>
               
                <div class="container">
                    <div class="row">
                        <p>Teerthanker Mahaveer Institute of Management and Technology (TMIMT) is the seed that has grown into a big Banyan tree in the form of Teerthanker Mahaveer University. This top management college, established in 2001, has been contributing to the development of management education, by fostering leadership, nurturing entrepreneurial talent and stimulating research since its inception. Join the 21-years legacy of graduates shaping the business landscape, with the assistance of the exceptionally qualified faculties.</p>
                        <p>TMIMT College of Management consists of two departments namely the Department of Management Studies and the Department of Commerce. The departments are led and mentored by a number of experienced academicians with core industry experience. The Training & Placement cell works around the clock to guarantee that students are placed in credible companies at advantageous terms across a variety of industries. Numerous reputable companies have partnered with TMIMT in order to provide the best industry-sponsored courses and lab facilities in recognition of TMIMT’s high ranking as the premier B-School in Uttar Pradesh and North India.</p> 
                         <p>In collaboration with the industry, academia, the government, and non-governmental organisations, TMIMT supports sustainable business models that meet the demands of all the diverse stakeholders in society as a whole. The college is a hub of multifaceted academic research and consultancy to equip students with crucial skills and professional ethics needed to succeed in an increasingly interconnected and globalised world. The TMIMT is the only institution in the region to have membership of the International Accreditation Council for Business Education (IACBE), which ensures that it adheres to the highest standards of quality and follows best practices in business education.</p>   
                        <p>Teerthanker Mahaveer Institute of Management and Technology (TMIMT) gives you an edge by focusing on your practical experiences, boosting your self-confidence, enhancing your earning potential and directing you to an ideal destination. Bring out the best in you by enrolling in the Best Private Management College in Uttar Pradesh.</p>
                    </div>

                    <div class="row">
                        <hr class="horizontal-line">
                        <button class="careers-accordion">Mission <span class="icon">+</span></button>
                        <div class="panel">
                            <p>To be a World Leader in the integration of teaching and learning, advancement of the knowledge base through research & leadership in service and outreach.</p>
                        </div>
                        <hr class="horizontal-line">
                    </div>
                    
                    <div class="row mt-3">
                        <p>TMIMT College of Management's timeline of key milestones are as follows:</p>
                        <ol class="ps-5 m-ol-list" style="font-size:14px;">
                            <li>In 2017, the Indian Education Network was recognized for its outstanding contributions and innovative approaches in entrepreneurship education.</li>
                            <li>In 2016, the All India Technical & Management Council was honored for its excellence in fostering collaboration between industry and academia, earning recognition for the Best Institute Industry-Academia Interface</li>
                            <li>In 2016, Business and Management - Chronicle was ranked among the top 5 B-Schools in North India according to the All India B-School Survey.</li>
                            <li>In 2015, Career Option Magazine recognized the institute as an outstanding management institute in North India.</li>
                            <li>In 2015, the Times of India ranked it 54th in the All India rankings.</li>
                            <li>In 2014, MBA by Choice awarded it an A++ rating.</li>
                        </ol>
                    </div>
                </div>
                        
            </div>
        </div>
    </section>
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