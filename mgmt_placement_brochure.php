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
 color:#FF7900;
}
.entry-image {
    position: relative;
    border-top: 1px solid #FF7900; /* Apply border to the top side */
    border-left: 1px solid #FF7900; /* Apply border to the left side */
}

.entry-image::after {
    content: '';
    position: absolute;
    right: 0;
    bottom: 0;
    border-bottom: 1px solid #FF7900; /* Simulate border at the bottom-right */
    border-right: 1px solid #FF7900; /* Simulate border at the bottom-right */
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

				<div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5 ">
                <h2 class="tmu-text-primary tmu-page-heading">Placement  <span style="color:#FF7900;">Brochure</span></h2>
                <h2 class=" text-center d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Placement  <span style="color:#FF7900;">Brochure</span></h2>
                    
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
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>2022-2023</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>PLACEMENT BROCHURE</h2>
								</div>
								<div class="entry-content mt-2">
                                    <p>This Brochure contains information related to placement in the Academic Year.</p>
                                <a href="" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px; float: right;">View More</a>
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
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>2021-2022</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
                                <h2>PLACEMENT BROCHURE</h2>
								</div>
								<div class="entry-content mt-0 mt-2">
                                <p>This Brochure contains information related to placement in the Academic Year.</p>
                                <a href="" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px; float: right;">View More</a>
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
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>2020-2021</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
                                <h2>PLACEMENT BROCHURE</h2>
								</div>
								<div class="entry-content mt-2">
                                <p>This Brochure contains information related to placement in the Academic Year.</p>
                                <a href="" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px; float: right;">View More</a>
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
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>2019-2020</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
                                <h2>PLACEMENT BROCHURE</h2>
								</div>
								<div class="entry-content mt-2">
                                <p>This Brochure contains information related to placement in the Academic Year.</p>
                                <a href="" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px; float: right;">View More</a>
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
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>2018-2019</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
                                <h2>PLACEMENT BROCHURE</h2>
								</div>
								<div class="entry-content mt-2">
                                <p>This Brochure contains information related to placement in the Academic Year.</p>
                                <a href="" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px; float: right;">View More</a>
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
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>2017-2018</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
                                <h2>PLACEMENT BROCHURE</h2>
								</div>
								<div class="entry-content mt-2">
                                <p>This Brochure contains information related to placement in the Academic Year.</p>
                                <a href="" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px; float: right;">View More</a>
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
										<li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>2016-2017</a></span></li>
									</ul>
								</div>
								<div class="entry-title title-sm">
									<h2>PLACEMENT BROCHURE</h2>
								</div>
								<div class="entry-content mt-2">
                                <p>This Brochure contains information related to placement in the Academic Year.</p>
                                <a href="" class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px; float: right;">View More</a>
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