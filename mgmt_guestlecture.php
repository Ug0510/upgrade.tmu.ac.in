<?php
include 'head.php';
?>

<style>
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
    /* text-wrap: nowrap;  */
    overflow: hidden; 
    /* text-overflow: ellipsis;  */
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

<!-- TMU Customized specific button  -->
<style>
        .tmu-btn {
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 500;
        }

        .tmu-btn.btn-1 {
            border: 1px solid #FF7900;
            background-color: #FF7900;
            color: white;
        }

        .tmu-btn.btn-2 {
            border: 1px solid #001055;
            background-color: transparent;
            color: #001055;
        }

        .tmu-btn:hover {
            cursor: pointer;
        }

        .tmu-btn.btn-1:hover,
        .tmu-btn.btn-2:hover {
            border: 1px solid #FF7900;
            background-color: white;
            /* background-color: #dd6900;
        border:1px solid #dd6900; */
            color: #FF7900;
        }

        .tmu-btn.btn-2:hover {
            border: 1px solid #001055;
            background-color: #0010551e;
            color: #001055;
            background-color: #001055;
            color: white;
        }

        .tmu-btn.btn-3:hover {
            box-shadow: 3px 3px 7px 2px rgba(0, 0, 0, 0.1);
        }
    </style>

<?php
 include 'sidebar/management_sidebar.php';
?>

				<div class="col-12 col-md-9 mt-3 mt-sm-0 pt-5 ">
                <h2 class="tmu-text-primary tmu-page-heading">Guest  <span style="color:#ff7a00;">Lecture</span></h2>
                <h2 class=" text-center d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Guest  <span style="color:#ff7a00;">Lecture</span></h2>
                    
    <div class="container">

        <!-- Posts
        ============================================= -->
        <div class="container">
                        <div class="row justify-content-center">

						<div class="clear"></div>

						<div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="images/mgmt-magazine/guest-lecture/1.jpg" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>September 09<sup>th</sup>, 2023</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>Guest Lecture on Cyber Security at Teerthanker Mahaveer University</h2>
								</div>
								<div class="entry-content mt-2" style="text-align: right;">
                                    <a href="https://www.tmu.ac.in/news/guest-lecture-on-cyber-security-at-teerthanker-mahaveer-university" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px">View More</a>    
                                </div>
							</div>
						</div>


						<div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="images/mgmt-magazine/guest-lecture/2.jpg" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>September 01<sup>st</sup>, 2023</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>Guest Lecture on 'Know your worth and strength' at TMU</h2>
								</div>
								<div class="entry-content mt-0 mt-2" style="text-align: right;">
                                    <a href="https://www.tmu.ac.in/news/guest-lecture-on-know-your-worth--strength-at-tmu" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px">View More</a>
                                </div>
							</div>
						</div>

						<div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="images/mgmt-magazine/guest-lecture/3.jpg" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i> October 31<sup>st</sup>, 2022.</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>Guest Lecture: Key Features of Budget in India</h2>
								</div>
								<div class="entry-content mt-2" style="text-align: right;">
                                    <a href="https://www.tmu.ac.in/news/guest-lecture-key-features-of-budget-in-india" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px;">View More</a>
                                </div>
							</div>
						</div>

                        <div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="images/mgmt-magazine/guest-lecture/4.jpg" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>February 05<sup>th</sup>, 2020</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>Developing Self Confidence and Improving Social Presence</h2>
								</div>
								<div class="entry-content mt-2" style="text-align: right;">
									<a href="https://www.tmu.ac.in/news/developing-self-confidence-and-improving-social-presence" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px">View More</a>
								</div>
							</div>
						</div>

                        <div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="images/mgmt-magazine/guest-lecture/5.jpg" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>October 07<sup>th</sup>, 2019</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>Guest Lecture on Handicraft Field's policies and Career Opportunities</h2>
								</div>
								<div class="entry-content mt-2" style="text-align: right;">
									<a href="https://www.tmu.ac.in/news/guest-lecture-on-handicraft-fields-policies-and-career-opportunities" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px">View More</a>
								</div>
							</div>
						</div>

                        <div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="images/mgmt-magazine/guest-lecture/6.jpg" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>October 05<sup>th</sup>, 2019</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>Guest Lecture on Recent Trends In Mutual Fund Industry</h2>
								</div>
								<div class="entry-content mt-2" style="text-align: right;">
                                    <a href="https://www.tmu.ac.in/news/guest-lecture-on--recent-trends-in-mutual-fund-industry" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px">View More</a>
                                </div>
							</div>
						</div>

                        <div class="entry event col-md-4 col-sm-4">
							<div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
								<div class="entry-image">
									<a href="#">
										<img src="images/mgmt-magazine/guest-lecture/7.jpg" alt="Event-1">
									</a>
								</div>
                                <div class="entry-meta mb-1">
									<ul>
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>Septembe 20<sup>th</sup>,2019</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>Guest Lecture on How to Improve Communication Skills</h2>
								</div>
								<div class="entry-content mt-2" style="text-align: right;">
                                    <a href="https://www.tmu.ac.in/news/guest-lecture-on-how-to-improve-communication-skills" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px">View More</a>
                                </div>
							</div>
						</div>

					</div>
				</div>
						</div>
					</div>
				</div>


        </div>
        </div>       
    </div>
</div>

<?php 
include 'footer.php';
 ?>