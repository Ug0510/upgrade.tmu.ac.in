<?php
 include 'head.php';
?>

<style>
*{
    font-family:'poppins';
}    
p{
    margin-top: 10px;
    margin-bottom: 12px;
    font-size:0.88rem;
}
p a{
    color:#001055;
    font-weight:400;
}
p a:hover{
 color:#FF7a00;
}
.entry-image {
    position: relative;
    border-top: 1px solid #ff8a00; /* Apply border to the top side */
    border-left: 1px solid #ff8a00; /* Apply border to the left side */
}

.entry-image::after {
    content: '';
    position: absolute;
    right: 0;
    bottom: 0;
    border-bottom: 1px solid #ff8a00; /* Simulate border at the bottom-right */
    border-right: 1px solid #ff8a00; /* Simulate border at the bottom-right */
    width: 100%; /* Ensure it spans the full width */
    height: 100%; /* Ensure it spans the full height */
    box-sizing: border-box;
}

.entry {
    margin-bottom: 0.55rem;
}

.entry-title h2 , .entry-title .h2 {
    color: #000;
    font-size: 1.022rem!important;
    font-family:'poppins';
    
}

.entry-title h2 {
    white-space: nowrap; 
    overflow: hidden; 
    text-overflow: ellipsis; 
    max-width: 100%; 
    display: block; 
}


.entry-meta{
    margin-top:-5px;
}

@media (min-width: 768px) and (max-width: 1024px) {
    .entry.event {
        flex: 0 0 50%; 
        max-width: 50%; 
    }
}

</style>

<?php
include 'sidebar/research_sidebar.php';
?>

						<div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">
						<!-- Write content for right side here  -->
                        <div class="container">
                        <div class="row justify-content-center">

						<div class="clear"></div>

						<div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="https://www.tmu.ac.in/uploads/events/past_event/479_image1.jpg" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>January 24<sup>th</sup>,2024</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>National Conference Held at TMIMT College of Management</h2>
								</div>
								<div class="entry-content mt-0">
									<p>In a momentous event organized under the auspices of the Center for Jain Studies, a National Conference unfolded in TMIMT[...]</p>
									<a href="https://www.tmu.ac.in/news/national-conference-held-at-tmimt-college-of-management" class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i class="bi-arrow-right"></i></a>
								</div>
							</div>
						</div>


						<div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="https://www.tmu.ac.in/uploads/events/past_event/472_image1.png" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>December 29<sup>th</sup>,2023</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>IIT Delhi and TMU Unite for Materials and Devices Development</h2>
								</div>
								<div class="entry-content mt-0">
									<p>Teerthanker Mahaveer University, the best private university in UP, has taken a significant leap forward in the[...]</p>
									<a href="https://www.tmu.ac.in/news/iit-delhi-and-tmu-unite-for-materials-and-devices-development" class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;"> Read More <i class="bi-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="https://www.tmu.ac.in/uploads/events/past_event/464_image1.webp" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>Novemeber 22<sup>nd</sup>,2023</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>National Conference on Advancing Healthcare at TMU</h2>
								</div>
								<div class="entry-content mt-0">
									<p>Teerthanker Mahaveer University recently organised the National Conference on Advancing Healthcare[...]</p>
									<a href="https://www.tmu.ac.in/news/national-conference-on-advancing-healthcare-at-tmu" class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i class="bi-arrow-right"></i></a>
								</div>
							</div>
						</div>

                        <div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="https://www.tmu.ac.in/uploads/events/past_event/472_image1.png" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>May 31<sup>st</sup>,2023</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>National Seminar at TMU: Innovative Strategies on Tobacco Cessation</h2>
								</div>
								<div class="entry-content mt-0">
									<p>May 31, 2023, On World No Tobacco Day, <a href="https://www.tmu.ac.in/college-of-nursing">Teerthanker Mahaveer College of Nursing</a> organised a National Seminar on Innovative Strategies on Tobacco[...]</p>
									<a href="https://www.tmu.ac.in/news/national-seminar-at-tmu--innovative-strategies-on-tobacco-cessation" class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i class="bi-arrow-right"></i></a>
								</div>
							</div>
						</div>

                        <div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="https://www.tmu.ac.in/uploads/events/past_event/375_image3.webp" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>May 20<sup>th</sup>,2023</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>National Conference At TMU Amending the Quality of Health in Palliative Care Nursing</h2>
								</div>
								<div class="entry-content mt-0">
									<p>Teerthanker Mahaveer University recently organised the National Conference on Advancing Healthcare through Informatics & Technology. The[...]</p>
									<a href="https://www.tmu.ac.in/news/national-conference-at-tmu-amending-the-quality-of-health-in-palliative-care-nursing" class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i class="bi-arrow-right"></i></a>
								</div>
							</div>
						</div>

                        <div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="https://www.tmu.ac.in/uploads/events/past_event/372_image1.webp" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>February 11<sup>th</sup>,2023</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>Vedic Mathematics: Discovering the Magic of Ancient Indian Mathematics</h2>
								</div>
								<div class="entry-content mt-0">
									<p>Teerthanker Mahaveer University recently hosted a workshop on Vedic Mathematics on 11 February 2023 for enthusiastic students of different colleges[...]</p>
									<a href="https://www.tmu.ac.in/news/vedic-mathematics-discovering-the-magic-of-ancient-indian-mathematics" class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i class="bi-arrow-right"></i></a>
								</div>
							</div>
						</div>

                        <div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="https://www.tmu.ac.in/uploads/events/past_event/328b_image1.webp" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>November 18<sup>th</sup>,2022</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>TMIMT Organised Udhyamita: Let’s Rise</h2>
								</div>
								<div class="entry-content mt-0">
									<p>On 18th November 2022, Teerthanker Mahaveer Institute of Management and Technology (TMIMT) organised Udhyamita: Let’s Rise. The main purpose of this event was to[...]</p>
									<a href="https://www.tmu.ac.in/news/tmimt-organised-udhyamita-lets-rise" class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i class="bi-arrow-right"></i></a>
								</div>
							</div>
						</div>

                        <div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="https://www.tmu.ac.in/uploads/events/past_event/328a_image6.webp" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>Novemeber 10<sup>th</sup>,2022</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>National Conference on Materials and Devices at Faculty of Engineering</h2>
								</div>
								<div class="entry-content mt-0">
									<p>Department of Physics organised the third edition of the National Conference on Materials and Devices (3rd NCMD-2022) on November[...]</p>
									<a href="https://www.tmu.ac.in/news/national-conference-on-materials-and-devices-at-faculty-of-engineering" class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i class="bi-arrow-right"></i></a>
								</div>
							</div>
						</div>

                        <div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="https://www.tmu.ac.in/uploads/events/past_event/30c8_image1.webp" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>February 11<sup>th</sup>,2023</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>Usage of Satellite Remote Sensing in Agriculture, Weather, Urban and Rural Planning</h2>
								</div>
								<div class="entry-content mt-0">
									<p>An awareness seminar was hosted by Civil Engineering Department of FoE and College of Computing Science and Information Technology, Teerthanker Mahaveer[...]</p>
									<a href="https://www.tmu.ac.in/news/usage-of-satellite-remote-sensing-in-agriculture-weather-urban-and-rural-planning" class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i class="bi-arrow-right"></i></a>
								</div>
							</div>
						</div>

					</div>
				</div>
						</div>
					</div>
				</div>


			</div>
		</section><!-- #content end -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
    var title = document.getElementById('conferenceTitle');
    if (title.innerText.length > 50) {
        title.innerText = title.innerText.substring(0, 50) + '...';
    }
});

</script>



	
<?php
 include 'footer.php';
?>