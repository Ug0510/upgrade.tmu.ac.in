<?php
 include 'head.php';
?>

<link rel="stylesheet" href="./assets/css/tmu-testimonial.css">
<link rel="stylesheet" href="./assets/css/tmimt.css">
<link rel="stylesheet" href="./assets/css/college.css">

<style>
.medical-container {
    display: flex;
    gap: 20px;
    justify-content: center;
    align-items: center;
    height: 20vh;
    margin: 0;
}

.medical-box {
    background-color: #e1e3eb;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    width: 35%;
    border: 1px #001055 solid
}

.medical-box h3 {
    color: #001055;
    margin-bottom: 5px;
}

.medical-custom-btn {
    background: linear-gradient(135deg, #ff7900, #ff9900);
    color: #ffffff;
    border: 2px solid #ff7900;
    margin: 10px;
    padding: 8px 16px;
    border-radius: 5px;
    transition: background 0.3s, transform 0.3s, box-shadow 0.3s;
    font-weight: bold;
    text-transform: uppercase;
    text-decoration: none;
    font-size: 0.6rem;
    cursor: pointer;
}

.medical-custom-btn:hover {
    background: linear-gradient(135deg, #e06e00, #ff7900);
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.medical-custom-btn:focus {
    outline: none;
    box-shadow: 0 0 0 4px rgba(255, 121, 0, 0.5);
}

@media screen and (max-width: 1300px) {
    .medical-box {
        width: 45%;
        margin-bottom: 30px;
    }
}

@media screen and (max-width: 800px) {
    .medical-container {
        display: none;
    }
}

@media screen and (min-width: 800px) {
    .medical-hide {
        display: none;
    }
}
</style>

<div id="slider" class="slider-element min-vh-0">
    <div class="container">
        <div class="row justify-content-between align-items-center align-items-xl-end">
            <div class="col-lg-6 col-xxl-5 py-5 py-lg-6 my-lg-5 text-center text-lg-start">
                <h1 class="display-4 fw-bolder ls-n-1">Welcome To TMMC&RC</h1>
                <p class="lead fw-normal mb-5">Transforming Your Ideas into Stunning Websites with Intuitive Tools and
                    Limitless Possibilities.</p>
                <a href="#" class="button button-large px-lg-5 py-lg-3 rounded-pill m-0 mb-4">Download Brochure</a>
                <a href="#"
                    class="button button-large px-lg-5 py-lg-3 button-dark button-border button-black border-contrast-500 rounded-pill ms-1 mb-4">Apply
                    Now</a>
            </div>
            <div class="col-lg-6 col-xxl-7">
                <img src="images/Medical-web-banner -png.png" alt="..">
            </div>
        </div>
    </div>
</div>

 

        <div class="container my-3 mt-5 d-none d-md-block">
            <div class="row justify-content-center">
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards"> <span>Affiliated</span>
                            <br>
                            <span class="d-block pt-1">Engineering Council of India</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>NBA</span>
                            <br>
                            <span class="d-block pt-1">Accredited BTech CSE</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>82%</span>
                            <br>
                            <span class="d-block pt-1">Placement Rate</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>CRC</span>
                            <br>
                            <span class="d-block pt-1">Dedicated Placement Cell</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-2 mt-4 d-block d-md-none">
            <div id="under-banner-carouselExample" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Affiliated</span>
                                        <br>
                                        <span class="d-block pt-1">Engineering Council of India</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>NBA</span>
                                        <br>
                                        <span class="d-block pt-1">Accredited BTech CSE</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>82%</span>
                                        <br>
                                        <span class="d-block pt-1">Placement Rate</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>CRC</span>
                                        <br>
                                        <span class="d-block pt-1">Dedicated Placement Cell</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- admission details desktop section start -->
        <div class="medical-container">
            <div class="medical-box">
                <h3>MBBS Admission 2024-25</h3>
                <button class="medical-custom-btn" target="_blank">INFORMATION BROCHURE 2024-25</button>
                <button class="medical-custom-btn" target="_blank">LIST OF DOCUMENTS 2024-25</button>
            </div>
            <div class="medical-box">
                <h3>PG Admission 2024-25</h3>
                <button class="medical-custom-btn" target="_blank">INFORMATION BROCHURE 2024-25</button>
                <button class="medical-custom-btn" target="_blank">LIST OF DOCUMENTS 2024-25</button>
            </div>
        </div>
        <!-- admission details desktop section end -->
        <!-- admission details mobile section start -->

        <div class="container ">
            <div class="medical-hide mb-3">
                <hr class="horizontal-line">

                <button class="careers-accordion">MBBS Admission 2024-25<span class="icon">+</span></button>
                <div class="panel">
                    <button class="medical-custom-btn" target="_blank">INFORMATION BROCHURE 2024-25</button>
                    <button class="medical-custom-btn" target="_blank">LIST OF DOCUMENTS 2024-25</button>
                </div>
                <!-- Add the horizontal line here -->
                <hr class="horizontal-line">

                <button class="careers-accordion">PG Admission 2024-25<span class="icon">+</span></button>
                <div class="panel">
                    <button class="medical-custom-btn" target="_blank">INFORMATION BROCHURE 2024-25</button>
                    <button class="medical-custom-btn" target="_blank">LIST OF DOCUMENTS 2024-25</button>
                    <!-- Add the horizontal line here -->
                    <hr class="horizontal-line">
                </div>
            </div>
            <!-- admission details mobile section end -->


            <div class="box-container">
                <div class="box">
                    <h1 class="college-main-heading">Welcome to the TMMC&RC</h1>
                    <div class="row">
                        <div class="col-12 px-2 px-md-5">
                            <p style="text-align: justify;">Teerthanker Mahaveer Medical College & Research Centre was
                                established in year 2008 with the approval of the Ministry of Health and Family Welfare
                                for
                                an admission intake of 100 MBBS students, which has been increased to 150 from the
                                Academic
                                Session 2014-15.</b></p>

                            <button class="tmu-btn btn-1 py-2 mt-4">Know More!</button>

                        </div>

                    </div>
                </div>
            </div>

            <!-- tabs sectiob -->

            <div class="container my-5 py-2">
                <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1"
                            type="button" role="tab" aria-controls="Tab1" aria-selected="true"><i
                                class="fas fa-lightbulb"></i> Approved by MCI</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button"
                            role="tab" aria-controls="Tab2" aria-selected="false"><i class="fas fa-briefcase"></i>
                            Hospital
                            Facilities</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button"
                            role="tab" aria-controls="Tab3" aria-selected="false"><i class="fas fa-book"></i> General
                            Surgery</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab4" type="button"
                            role="tab" aria-controls="Tab4" aria-selected="false"><i class="fas fa-building"></i>
                            Rediology</button>
                    </li>
                </ul>
                <div class="tab-content second ps-5 px-md-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <h3 class="mb-1">Approved by MCI</h3>
                        <p>It conducts Post Graduate degree (MD/MS) in Pre-Clinical subjects (Anatomy, Physiology,
                            Biochemistry),
                            Para-clinical subjects (Pathology, Microbiology, Pharmacology, Forensic Sciences) and
                            Clinical
                            subjects
                            (Community Medicine, General Medicine, Psychiatry, Dermatology, Respiratory Medicine,
                            Paediatrics,
                            General Surgery, Orthopaedics, Otorhinolaryngology (ENT), Ophthalmology, Obstetrics &
                            Gynaecology,
                            Anaesthesia, and Radio-diagnosis) with an intake of 126 seats.</p>
                    </div>
                    <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <h3 class="mb-1">Hospital Facilities</h3>
                        <p>Hospital facilities of the Medical College and Research Centre provide modern health care
                            including critical care and emergency services to the population at large. In a short span
                            of
                            time, the hospital has developed into 1000 bed tertiary teaching care hospital with
                            facilities
                            to save lives. An emergency section and Intensive care units with various sub-specialties
                            like
                            ICCU, ICU, RICU, NICU, PICU, Obstetrics and Gynaecology, and Burn treatment have been added.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                        <h3 class="mb-1">General Surgery</h3>
                        <p>Department of General Surgery provides facilities for Endoscopic Studies and Surgeries.
                            Department of Medicine facilitates Echocardiography, TMT and Cath lab. The hospital is also
                            equipped with facilities for Pediatric Surgery, Neuro Surgery, Urology, Cardiology, Cardiac
                            Surgery like Bypass Surgery, Valve Replacement, and Congenital Heart Disease, G I . Surgery,
                            Reconstructive Surgery, Joint Replacement Surgery, Cancer detection, Sterility Clinic, IVF
                            etc.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                        <h3 class="mb-1">Rediology</h3>
                        <p>Department of Radiology provides Fluoroscopy, facilities for Ultrasound and Color Doppler
                            Studies, Digital X-Rays, CT scan, MRI and Mammography. The hospital is well equipped with
                            modern
                            Modular operation theaters for General Surgery, Orthopedics, Ophthalmology, ENT and
                            Obstetrics
                            and Gynaecology. Central Laboratory services are available for Pathological, Clinical
                            Biochemistry, Microbiology and Histopathology investigations.</p>
                    </div>
                </div>
            </div>



            <!-- Gallery Section-->

            <div class="section bg-transparent mt-0" style="margin-bottom:30px;">
                <div class="row justify-content-center ">
                    <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
                        <h2 class="h1 fw-bold"
                            style="font-size: 48px; font-weight: 600; line-height: 64px; color:#000000; margin-bottom: 22px;">
                            GALLERY</h2>

                    </div>
                    <div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
                        <h2 class="h1 fw-bold"
                            style="font-size: 30px; font-weight: 600; line-height: 64px; color:#FF7900; margin-bottom: 9px; margin-top: -12px;">
                            GALLERY</h2>

                    </div>
                </div>

                <div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card"
                    data-stage-padding="20" data-margin="10" data-center="true" data-loop="true" data-nav="true"
                    data-autoplay="2000" data-speed="400" data-pagi="true" data-items-xs="1" data-items-sm="2"
                    data-items-md="2" data-items-lg="3" data-items-xl="4">

                    <div class="oc-item text-start">
                        <img src="assets/img/medical/gallery/1.jpg" alt="Image 1" class="rounded">

                    </div>

                    <div class="oc-item text-start">
                        <img src="assets/img/medical/gallery/2.jpg" alt="Image 1" class="rounded">

                    </div>

                    <div class="oc-item text-start">
                        <img src="assets/img/medical/gallery/4.jpg" alt="Image 1" class="rounded">

                    </div>

                    <div class="oc-item text-start">
                        <img src="assets/img/medical/gallery/5.jpg" alt="Image 1" class="rounded">

                    </div>

                    <div class="oc-item text-start">
                        <img src="assets/img/medical/gallery/10.jpg" alt="Image 1" class="rounded">

                    </div>
                    <div class="oc-item text-start">
                        <img src="assets/img/medical/gallery/11.jpg" alt="Image 1" class="rounded">

                    </div>
                </div>
            </div>


            <!-----Courses section Start-->
            <section id="content" class="prog-bm">
                <div class="content-wrap py-0" style="overflow: visible;">
                    <!-- Code for the Desktop view -->
                    <div class="container d-none d-lg-block">

                        <div class="col-xl-12 col-xl-10 text-center">
                            <h2 style=" line-height: 64px; color:#001055;" class="mb-5 w-100">
                                PROGRAMMES<span class="color:##FF7900"> OFFERED</span></h2>
                        </div>
                        <div class="row ">
                            <div class="col-md-3">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="pgroup list-group-item listream list-group-item-action rounded-3 shadow-sm active"
                                        id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab"
                                        aria-controls="list-home"><i
                                            class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;UG
                                        Programmes
                                        &nbsp;<span class="badge rounded-pill">04</span>
                                    </a>
                                    <a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2"
                                        id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab"
                                        aria-controls="list-profile"><i
                                            class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;PG Programmes
                                        &nbsp;<span class="badge rounded-pill">25</span></a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- Home Tab starts here -->
                                    <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                        aria-labelledby="list-home-list">

                                        <div class="row">

                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm">
                                                    <img src="assets/img/programme_stock_img/medical/26.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body">

                                                        <h4 class="mb-2">MBBS (Bachelor of Medicine and Bachelor of
                                                            Surgery)
                                                        </h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm">
                                                    <img src="assets/img/programme_stock_img/medical/26.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body">

                                                        <h4 class="mb-2">B.Sc. Medical Anatomy (From Session 2023-24
                                                            Onwards)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm">
                                                    <img src="assets/img/programme_stock_img/medical/27.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body">

                                                        <h4 class="mb-2">B.Sc. Medical Biochemistry (From Session
                                                            2023-24
                                                            Onwards)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/28.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">B.SC. Medical Physiology (From Session 2023-24
                                                            Onwards)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Home Tab  Ends  here -->


                                    <!--  Home tab panel 2 Starts Here  --
								       ----------------------------- -->
                                    <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                        aria-labelledby="list-profile-list">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm">
                                                    <img src="assets/img/programme_stock_img/medical/21.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body">

                                                        <h4 class="mb-2">M.Sc. Medical Pharmacology</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm">
                                                    <img src="assets/img/programme_stock_img/medical/22.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body">

                                                        <h4 class="mb-2">M.Sc. Medical Anatomy</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm">
                                                    <img src="assets/img/programme_stock_img/medical/23.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h4 class="mb-2">M.Sc. Medical Physiology</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/24.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">M.Sc. Medical Biochemistry</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/25.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">M.Sc. Medical Microbiology
                                                        </h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/16.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MS (ENT/Oto-Rhinlaryngology)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/17.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MS (General Surgery)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/18.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MS (Opthalomology)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/19.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MS (Orthopeadics)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/20.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MS (Obstetrics and Gynaecology)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/1.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Radio-Diagnosis/Radiology)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/2.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Dermatology, Venereology and Leprosy)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/3.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (General Medicine)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/4.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Paediatrics)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/5.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Respiratory Medicine/TB & Chest)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/6.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Psychiatry)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/7.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Anesthesiology)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/8.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Pathology)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/9.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Biochemistry)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/10.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Microbiology)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/11.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Community Medicine)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/12.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Pharmacology)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/13.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Anatomy)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/14.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Physiology)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Card -->
                                                <div class="card shadow-sm progcard">
                                                    <img src="assets/img/programme_stock_img/medical/15.jpg"
                                                        height="178px" class="card-img-top" alt="...">
                                                    <div class="card-body progcardbody">

                                                        <h4 class="mb-2">MD (Forensic Medicine)</h4>
                                                    </div>
                                                    <div
                                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                        <div>
                                                        </div>
                                                        <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2"
                                                            style="font-size:12px">View
                                                            More</a>
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

                <!-- Code for the Desktop view Ends -->




                <!-- Code for the Mobile View Starts Here -->
                <div class="container d-block d-lg-none">
                    <div class="container mb-5 mt-5">
                        <div class="col-xl-12 col-lg-10 text-center">
                            <h1 class="h1 fw-bold tmu-text-primary text-uppercase"
                                style="font-size: 30px; font-weight: 600; line-height: 40px; color:#000000; margin-bottom: 19px;">
                                <span>Programmes</span> <span>Offered</span>
                            </h1>
                        </div>

                        <button class="careers-accordion"><span> <i
                                    class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;&nbsp;Undergraduate
                                Programmes</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul">
                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/9.jpg" class="card-img-top"
                                            alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Sc. (Mathematics Honors)</h5>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/13.jpg" class="card-img-top"
                                            alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Sc. (Physics Honors)</h5>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/16.jpg" class="card-img-top"
                                            alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Sc. (Chemistry Honors)</h5>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/19.jpg" class="card-img-top"
                                            alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Tech (AICTE Approved)-Computer Science & Engineering
                                                (CSE)
                                            </h5>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/1.jpg" class="card-img-top"
                                            alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Tech (AICTE Approved)-Mechanical Engineering (ME)</h5>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/34.jpg" class="card-img-top"
                                            alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Tech (AICTE Approved)-ME-Mechatronics (In collaboration
                                                with
                                                TCS iON)</h5>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/13.jpg" class="card-img-top"
                                            alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Tech (AICTE Approved)-Computer & Comm. Engg.(CCE)</h5>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/25.jpg" class="card-img-top"
                                            alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Tech (AICTE Approved)-Electronics & Communication
                                                Engineering
                                                (ECE)</h5>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/21.jpg" class="card-img-top"
                                            alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Tech (AICTE Approved)-ECE-Internet of Things (IoT) (In
                                                collaboration with TCS iON)</h5>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/3.jpg" class="card-img-top"
                                            alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Tech (AICTE Approved)-Civil Engineering (CE)</h5>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/5.jpg" class="card-img-top"
                                            alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Tech (AICTE Approved)-Electrical Engineering (EE)</h5>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">

                        <button class="careers-accordion"><span><i
                                    class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;&nbsp;Postgraduate
                                Programmes</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul">
                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/19.jpg" height="178px"
                                            class="card-img-top" alt="Engineering image ">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">M.Sc. (Mathematics)</h4>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>


                                <li class="progli">

                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/33.jpg" height="178px"
                                            class="card-img-top" alt="...">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">M.Sc. (Physics)
                                            </h4>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>

                                </li>

                                <li class="progli">

                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/34.jpg" height="178px">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">M.Sc. (Chemistry)</h4>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>

                                </li>

                                <li class="progli">

                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/13.jpg" height="178px">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">M.Tech. - Machine Learning & Data Science.</h4>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">

                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/25.jpg" height="178px">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">M.Tech. - Additive Manufacturing. </h4>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">

                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/3.jpg" height="178px">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">M.Tech. - Electrical Power & Energy System.</h4>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="progli">

                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/programme_stock_img/medical/5.jpg" height="178px">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">M.Tech. - Structural And Construction Engineering.</h4>
                                        </div>
                                        <div
                                            class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>
                        <hr class="horizontal-line">
                    </div>



                    <!-- Code for the Mobile View Ends Here -->

                </div>
            </section>
            <!-----Courses section completed-->


            <section id="content">
                <div class="content-wrap">
                    <div class="container" style="margin-bottom: 10px;">


                        <div class="row justify-content-center ">
                            <div class="col-xl-10 col-lg-10 text-center">
                                <h2 class="tmu-text-primary my-4 mb-5"><span>TMU </span> <span>HIGHLIGHTS</span></h2>
                            </div>
                        </div>




                        <div class="row col-mb-37">
                            <main class="postcontent col-lg-8 col-md-9">
                                <div class="row g-4">


                                    <div class=" mb-0 entry col-lg-12 col-md-12">
                                        <div class="owl-carousel" id="owl-carousel2">
                                            <div class="item">

                                                <div class="grid-inner shadow-sm card newsheight"
                                                    style="height: 300px;">
                                                    <div class="entry-image mb-0">
                                                        <div class="fslider" data-arrows="false"
                                                            data-lightbox="gallery">
                                                            <div class="flexslider">
                                                                <div class="slider-wrap">
                                                                    <div class="slide"><a
                                                                            href="images/news/ccsit/News_05.jpg"
                                                                            data-lightbox="gallery-item"
                                                                            style="background: url('images/news/ccsit/News_05.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
                                                                    </div>
                                                                    <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-2.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                                    <!--</div>-->
                                                                    <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-3.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                                    <!--</div>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-2">
                                                        <div class="entry-title">
                                                            <a herf="" style="font-size: 18px; font-weight: 500; ">TMU's
                                                                Educational
                                                                Odyssey to Narora Atomic Power Station</a>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                                                <li><a href="blog-single.html#comments"><i
                                                                            class="uil uil-comments-alt"></i> 13</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item">

                                                <div class="grid-inner shadow-sm card newsheight"
                                                    style="height: 300px;">
                                                    <div class="entry-image mb-0">
                                                        <div class="fslider" data-arrows="false"
                                                            data-lightbox="gallery">
                                                            <div class="flexslider">
                                                                <div class="slider-wrap">
                                                                    <div class="slide"><a
                                                                            href="images/news/ccsit/News_04.jpg"
                                                                            data-lightbox="gallery-item"
                                                                            style="background: url('images/news/ccsit/News_04.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
                                                                    </div>
                                                                    <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-2.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                                    <!--</div>-->
                                                                    <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-3.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                                    <!--</div>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-2">
                                                        <div class="entry-title">
                                                            <a herf="" style="font-size: 18px; font-weight: 500; ">TMU's
                                                                Faculty of
                                                                Education Marks 24th Vijay Diwas.</a>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                                                <li><a href="blog-single.html#comments"><i
                                                                            class="uil uil-comments-alt"></i> 13</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="item">

                                                <div class="grid-inner shadow-sm card newsheight"
                                                    style="height: 300px;">
                                                    <div class="entry-image mb-0">
                                                        <div class="fslider" data-arrows="false"
                                                            data-lightbox="gallery">
                                                            <div class="flexslider">
                                                                <div class="slider-wrap">
                                                                    <div class="slide"><a
                                                                            href="images/news/ccsit/News_01.jpg"
                                                                            data-lightbox="gallery-item"
                                                                            style="background: url('images/news/ccsit/News_01.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
                                                                    </div>
                                                                    <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-2.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                                    <!--</div>-->
                                                                    <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-3.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                                    <!--</div>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-2">
                                                        <div class="entry-title">
                                                            <a herf=""
                                                                style="font-size: 18px; font-weight: 500; ">CTLD's
                                                                Faculty
                                                                Development Programme Empowers Educators</a>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                                                <li><a href="blog-single.html#comments"><i
                                                                            class="uil uil-comments-alt"></i> 13</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Blog Carousel Starts Here -->

                                <div class="row g-4 mb-0 d-none d-sm-block">

                                    <div class="owl-carousel" id="owl-carousel3">
                                        <div class="item ">

                                            <article class="mb-0 entry event col-12 ">
                                                <div
                                                    class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
                                                    <div class="col-md-4 mb-md-0">
                                                        <a href="#" class="entry-image mb-0 h-100">
                                                            <img src="images/blogs/Uni_03.webp"
                                                                alt="Inventore voluptates velit totam ipsa tenetur"
                                                                class="rounded-2 h-100 object-cover">
                                                            <div class="bg-overlay">
                                                                <div
                                                                    class="bg-overlay-content justify-content-start align-items-start">
                                                                    <div class="badge bg-light text-dark rounded-pill">
                                                                        Latest Blog</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-8 p-4">
                                                        <div class="entry-meta no-separator mb-1 mt-0">
                                                            <ul>
                                                                <li><a href="#" class="text-uppercase fw-medium">Mon,
                                                                        Feb 12
                                                                        @
                                                                        3:00PM</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="entry-title nott">
                                                            <a herf="" style="font-size: 18px; font-weight: 500; ">Scope
                                                                and
                                                                Opportunity through Non-Clinical Medical</a>
                                                        </div>
                                                        <div class="entry-content my-3">
                                                            <p style="font-size: 14px;">Explore the diverse
                                                                opportunities in
                                                                non-clinical medical programs like MD Biochemistry,
                                                                Physiology,[...]
                                                            </p>
                                                        </div>

                                                        <div class="entry-meta no-separator">
                                                            <ul>
                                                                <li><a href="#" class="fw-normal"><i
                                                                            class="uil uil-map-marker"></i>
                                                                        Chiang Mai,
                                                                        Thailand</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>


                                        <div class="item">

                                            <article class="mb-0 entry event col-12 ">
                                                <div
                                                    class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
                                                    <div class="col-md-4 mb-md-0">
                                                        <a href="#" class="entry-image mb-0 h-100">
                                                            <img src="images/blogs/Uni_01.webp"
                                                                alt="Inventore voluptates velit totam ipsa tenetur"
                                                                class="rounded-2 h-100 object-cover">
                                                            <div class="bg-overlay">
                                                                <div
                                                                    class="bg-overlay-content justify-content-start align-items-start">
                                                                    <div class="badge bg-light text-dark rounded-pill">
                                                                        Latest Blog</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-8 p-4">
                                                        <div class="entry-meta no-separator mb-1 mt-0">
                                                            <ul>
                                                                <li><a href="#" class="text-uppercase fw-medium">Mon,
                                                                        Feb 12
                                                                        @
                                                                        3:00PM</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="entry-title nott">
                                                            <a herf="" style="font-size: 18px; font-weight: 500; ">Top
                                                                10
                                                                engineering colleges in India</a>
                                                        </div>
                                                        <div class="entry-content my-3">
                                                            <p style="font-size: 14px;">Explore the top 10 Engineering
                                                                colleges in
                                                                India and the top 10 things to consider while choosing a
                                                                [...]</p>
                                                        </div>

                                                        <div class="entry-meta no-separator">
                                                            <ul>
                                                                <li><a href="#" class="fw-normal"><i
                                                                            class="uil uil-map-marker"></i>
                                                                        Chiang Mai,
                                                                        Thailand</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>



                                        <div class="item">

                                            <article class="mb-0 entry event col-12 ">
                                                <div
                                                    class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
                                                    <div class="col-md-4 mb-md-0">
                                                        <a href="#" class="entry-image mb-0 h-100">
                                                            <img src="images/blogs/Uni_02.webp"
                                                                alt="Inventore voluptates velit totam ipsa tenetur"
                                                                class="rounded-2 h-100 object-cover">
                                                            <div class="bg-overlay">
                                                                <div
                                                                    class="bg-overlay-content justify-content-start align-items-start">
                                                                    <div class="badge bg-light text-dark rounded-pill">
                                                                        Latest Blog</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-8 p-4">
                                                        <div class="entry-meta no-separator mb-1 mt-0">
                                                            <ul>
                                                                <li><a href="#" class="text-uppercase fw-medium">Mon,
                                                                        Feb 12
                                                                        @
                                                                        3:00PM</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="entry-title nott">
                                                            <a herf="" style="font-size: 18px; font-weight: 500; ">Top
                                                                100
                                                                Universities in India</a>
                                                        </div>
                                                        <div class="entry-content my-3">
                                                            <p style="font-size: 14px;">Get guidance on India's top 100
                                                                universities, offering comprehensive insights into
                                                                diverse
                                                                education[...]</p>
                                                        </div>

                                                        <div class="entry-meta no-separator">
                                                            <ul>
                                                                <li><a href="#" class="fw-normal"><i
                                                                            class="uil uil-map-marker"></i>
                                                                        Chiang Mai,
                                                                        Thailand</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>


                                    </div>
                                </div>
                                <!-- 
														Blog Carousel Starts Here
														-->
                            </main>
                            <!-- 
												Side Menu Code start here
											 -->


                            <aside class="sidebar col-md-12 d-block d-sm-none" style="margin-bottom: 35px;">
                                <div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">

                                    <div class="widget">

                                        <h4>Latest Blogs</h4>
                                        <hr>
                                        <div class="posts-sm row col-mb-30" id="post-list-sidebar"
                                            style="margin-top: -0.25rem;">



                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img src="images/events/thumbs/3.jpg"
                                                                    alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a>
                                                            </h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img src="images/events/thumbs/1.jpg"
                                                                    alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                                            </h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img src="images/events/thumbs/1.jpg"
                                                                    alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                                            </h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img src="images/events/thumbs/2.jpg"
                                                                    alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a>
                                                            </h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img src="images/events/thumbs/3.jpg"
                                                                    alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a>
                                                            </h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img src="images/events/thumbs/1.jpg"
                                                                    alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                                            </h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                            </aside>


                            <aside class="sidebar col-lg-4 col-md-12">
                                <div class="notice-board">
                                    <div class="notice-header">NOTICE BOARD</div>
                                    <div class="notice-body">

                                        <div class="notice">
                                            <div class="notice-pub">
                                                <span>01, April</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>The Women Empowerment Cell, Faculty of Engineering, and CCSIT are
                                                    going
                                                    to
                                                    organise International Women's Day</p>
                                            </div>
                                            <div class="notice-meta">
                                                <span style="margin-right: 15px;"><img
                                                        src="assets/img/icons/placeholder.svg" width="20px"
                                                        height="20px">
                                                    Conference Room</span>
                                                <span><img src="assets/img/icons/calendar.svg" width="20px"
                                                        height="20px">
                                                    09,
                                                    March</span>
                                            </div>
                                        </div>
                                        <hr class="notice-separator">
                                        <div class="notice">
                                            <div class="notice-pub">
                                                <span>01, April</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>The Department of Mechanical Engineering is hosting a one-day
                                                    workshop on
                                                    "Drone
                                                    Technology" in association with ESTC Ramnagar.</p>
                                            </div>
                                            <div class="notice-meta">
                                                <span style="margin-right: 15px;"><img
                                                        src="assets/img/icons/placeholder.svg" width="20px"
                                                        height="20px">
                                                    Conference Room</span>
                                                <span><img src="assets/img/icons/calendar.svg" width="20px"
                                                        height="20px">
                                                    15,
                                                    March</span>
                                            </div>
                                        </div>
                                        <hr class="notice-separator">
                                        <div class="notice">
                                            <div class="notice-pub">
                                                <span>01, April</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>The Computer Science and Engineering Department is organising a
                                                    Digital/Physical
                                                    Poster Competition on the topic "Mera Pehla Vote-Desh ke liye</p>
                                            </div>
                                            <div class="notice-meta">
                                                <span style="margin-right: 15px;"><img
                                                        src="assets/img/icons/placeholder.svg" width="20px"
                                                        height="20px">
                                                    CCSIT</span>
                                                <span><img src="assets/img/icons/calendar.svg" width="20px"
                                                        height="20px">
                                                    21,
                                                    March</span>
                                            </div>
                                        </div>
                                        <hr class="notice-separator">
                                        <div class="notice">
                                            <div class="notice-pub">
                                                <span>01, April</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>The Cultural Club of CCSIT is organisng a student fest for Holi,
                                                    "SPLASH-The Joy
                                                    of Colors".</p>
                                            </div>
                                            <div class="notice-meta">
                                                <span style="margin-right: 15px;"><img
                                                        src="assets/img/icons/placeholder.svg" width="20px"
                                                        height="20px">
                                                    CCSIT</span>
                                                <span><img src="assets/img/icons/calendar.svg" width="20px"
                                                        height="20px">
                                                    20,
                                                    March</span>
                                            </div>
                                        </div>
                                        <hr class="notice-separator">
                                        <div class="notice">
                                            <div class="notice-pub">
                                                <span>01, April</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>Students may register for the 14th edition of Mega Quiz Khoj-2024
                                                    which
                                                    is being
                                                    organised by the Techno Club (CCSIT).</p>
                                            </div>
                                            <div class="notice-meta">
                                                <span style="margin-right: 15px;"><img
                                                        src="assets/img/icons/placeholder.svg" width="20px"
                                                        height="20px">
                                                    Auditorium</span>
                                                <span><img src="assets/img/icons/calendar.svg" width="20px"
                                                        height="20px">
                                                    14,
                                                    March</span>
                                            </div>
                                        </div>
                                        <hr class="notice-separator">
                                        <div class="notice">
                                            <div class="notice-pub">
                                                <span>01, April</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>The Department of Physics is going to organise National Science Day
                                                    with
                                                    various
                                                    activities and competitions</p>
                                            </div>
                                            <div class="notice-meta">
                                                <span style="margin-right: 15px;"><img
                                                        src="assets/img/icons/placeholder.svg" width="20px"
                                                        height="20px">
                                                    LT-6, CCSIT </span>
                                                <span><img src="assets/img/icons/calendar.svg" width="20px"
                                                        height="20px">
                                                    28,
                                                    February</span>
                                            </div>
                                        </div>
                                        <hr class="notice-separator">
                                        <div class="notice">
                                            <div class="notice-pub">
                                                <span>01, April</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>The Electronics and Communication Engineering Department is
                                                    organising a
                                                    Guest
                                                    Lecture on "Process of Innovation & Technology Readiness Level".</p>
                                            </div>
                                            <div class="notice-meta">
                                                <span style="margin-right: 15px;"><img
                                                        src="assets/img/icons/placeholder.svg" width="20px"
                                                        height="20px">
                                                    LT-6, FOE</span>
                                                <span><img src="assets/img/icons/calendar.svg" width="20px"
                                                        height="20px">
                                                    24,
                                                    February</span>
                                            </div>
                                        </div>
                                        <hr class="notice-separator">
                                        <!--<div class="notice">-->
                                        <!--    <div class="notice-pub">-->
                                        <!--        <span>01, April</span>-->
                                        <!--    </div>-->
                                        <!--    <div class="notice-content">-->
                                        <!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros eget nunc-->
                                        <!--            tincidunt vestibulum.</p>-->
                                        <!--    </div>-->
                                        <!--    <div class="notice-meta">-->
                                        <!--        <span style="margin-right: 15px;"><img src="assets/img/icons/placeholder.svg" width="20px" height="20px">-->
                                        <!--            Conference Room</span>-->
                                        <!--        <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 5,-->
                                        <!--            April</span>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<hr class="notice-separator">-->
                                        <!--<div class="notice">-->
                                        <!--    <div class="notice-pub">-->
                                        <!--        <span>01, April</span>-->
                                        <!--    </div>-->
                                        <!--    <div class="notice-content">-->
                                        <!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros eget nunc-->
                                        <!--            tincidunt vestibulum.</p>-->
                                        <!--    </div>-->
                                        <!--    <div class="notice-meta">-->
                                        <!--        <span>01, April</span>-->
                                        <!--        <span><img src="assets/img/icons/placeholder.svg" width="15px" height="15px"> Conference Room</span>-->
                                        <!--        <span><img src="assets/img/icons/calendar.svg" width="15px" height="15px"> 5, April</span>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!-- Add more notices here -->
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <!-- 
												Side Menu Code Ends Here
											 -->


                    </div>
                </div>
            </section><!-- #content end -->


            <section>
                <div class="container-xl tmu-testimonial mt-5 mb-3">

                    <h2 class="tmu-text-primary my-0 mb-3"> <span>Students </span> <span>Testimonial</span></h2>

                    <div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card"
                        style="overflow: visible;" data-stage-padding="20" data-margin="50" data-center="true"
                        data-loop="true" data-nav="true" data-autoplay="200000" data-speed="2000" data-pagi="true"
                        data-items-xs="1" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="3">

                        <div class="oc-item text-start">
                            <div class="media ">
                                <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/rashmi_raj_bcom.webp"
                                    class="mr-3" alt="">
                                <div class="media-body">
                                    <div class="testimonial">
                                        <p class="overview mb-3"><b>Rashmi Raj</b>, B.Com</p>
                                        <p>For me TMU wasn't just a place of study, it was where I discovered the
                                            artistry
                                            in
                                            business. Professors here were mentors who helped me navigate the
                                            complexities
                                            of
                                            creativity. TMU, to me, isn't just an educational space; it's the place
                                            where my
                                            journey
                                            in the world of commerce became a fascinating and personal expedition.
                                        </p>
                                    </div>
                                </div>
                                <button
                                    class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i
                                        class="bi bi-chevron-down ps-2"></i></button>

                            </div>
                        </div>

                        <div class="oc-item text-start">
                            <div class="media">
                                <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/pragati_law.webp"
                                    class="mr-3" alt="">
                                <div class="media-body">
                                    <div class="testimonial">
                                        <p class="overview mb-3"><b>Ms. Pragati </b>, BA - LLB</p>
                                        <p>TMU has been a crucible for nurturing leadership skills, offering a
                                            transformative
                                            journey through leadership programmes, mentorship initiatives, and
                                            engagement in
                                            extracurricular activities. The holistic approach at TMU has honed my
                                            ability to
                                            lead
                                            effectively, and in clearing this exam. The University’s impact on my
                                            leadership
                                            journey
                                            is evident in the accomplishments of my evolving career.</p>
                                    </div>
                                    <button
                                        class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                        onclick="showTestimonialModal()">Read More <i
                                            class="bi bi-chevron-down ps-2"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item text-start">
                            <div class="media">
                                <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/abdul_india_mart_mba.webp"
                                    class="mr-3" alt="">
                                <div class="media-body">
                                    <div class="testimonial">
                                        <p class="overview mb-3"><b>Abdul Malik Khan</b>, MBA</p>
                                        <p>TMU, for me, is not just an MBA destination, it's the crucible where my
                                            leadership skills
                                            were forged. Beyond textbooks and case studies, TMU offered a dynamic
                                            learning
                                            environment where theories met practical challenges. It's a journey where I
                                            honed the
                                            skills that set me apart in the dynamic landscape of business and
                                            management.
                                        </p>
                                    </div>
                                    <button
                                        class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                        onclick="showTestimonialModal()">Read More <i
                                            class="bi bi-chevron-down ps-2"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item text-start">
                            <div class="media">
                                <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/shaily_jain_mca.webp"
                                    class="mr-3" alt="">
                                <div class="media-body">
                                    <div class="testimonial">
                                        <p class="overview mb-3"><b>Shaily Jain</b>, MCA</p>
                                        <p>TMU has been instrumental in facilitating life-changing career connections
                                            that
                                            have had
                                            a profound impact on my professional journey. The relationships built with
                                            faculty,
                                            alumni, and industry professionals have played a pivotal role in my career
                                            progression.
                                            The supportive and enduring network cultivated at TMU continues to be a
                                            cornerstone of
                                            my ongoing success.</p>
                                    </div>
                                    <button
                                        class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                        onclick="showTestimonialModal()">Read More <i
                                            class="bi bi-chevron-down ps-2"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item text-start">
                            <div class="media">
                                <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/nikita_shah_bcom.webp"
                                    class="mr-3" alt="">
                                <div class="media-body">
                                    <div class="testimonial">
                                        <p class="overview mb-3"><b>Nikita Shah</b>, B.Com(H)</p>
                                        <p>TMU is more than a university to me—it's the heartbeat of my career journey.
                                            The
                                            professors, like mentors and friends, guided me through real-world
                                            challenges.
                                            Today, as
                                            I navigate my field with confidence, I owe my success to the practical
                                            wisdom
                                            TMU
                                            instilled in me.
                                        </p>
                                    </div>
                                    <button
                                        class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                        onclick="showTestimonialModal()">Read More <i
                                            class="bi bi-chevron-down ps-2"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="oc-item text-start">
                            <div class="media">
                                <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/shruti_jain_btech_cse.webp"
                                    class="mr-3" alt="">
                                <div class="media-body">
                                    <div class="testimonial">
                                        <p class="overview mb-3"><b>Shruti Jain</b>, B.Tech CSE</p>
                                        <p>TMU focuses on developing industry-ready skills. The practical approach to
                                            learning,
                                            coupled with exposure to real-world scenarios, enabled me to seamlessly
                                            transition into
                                            my career. TMU's impact on my professional journey is undeniable. I am
                                            thankful
                                            for the
                                            holistic education and support I received here.</p>
                                    </div>
                                    <button
                                        class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                        onclick="showTestimonialModal()">Read More <i
                                            class="bi bi-chevron-down ps-2"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <!-- Testimonial Modal -->
            <div id="testimonialModal" class="tmu-modal">
                <div class="overlay" onclick="closeTestimonialModal()"></div>
                <div class="tmu-modal-box">
                    <div class="close-btn" onclick="closeTestimonialModal()">x</div>
                    <div class="tmu-testimonial bg-light">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/abdul_india_mart_mba.webp"
                                class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3 testimonial-user-name"><b>Abdul Malik Khan</b>, MBA</p>
                                    <p class="testimonial-content">TMU, for me, is not just an MBA destination, it's the
                                        crucible where my leadership skills
                                        were forged. Beyond textbooks and case studies, TMU offered a dynamic learning
                                        environment where theories met practical challenges. It's a journey where I
                                        honed
                                        the
                                        skills that set me apart in the dynamic landscape of business and management.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="container mb-5 mt-5">
                <h2 Class="h2-line" style="font-weight: 800;">FAQ</h2>
                <hr class="horizontal-line">

                <button class="careers-accordion">Does University provide transport?<span class="icon">+</span></button>
                <div class="panel">
                    <p>Yes, Teerthanker Mahaveer University offers pick and drop facility to students and staff coming
                        from
                        within
                        the radial distance of 100 Kms. For added safety, the buses have camera surveillance inside it
                        too.
                    </p>
                </div>
                <!-- Add the horizontal line here -->
                <hr class="horizontal-line">

                <button class="careers-accordion">Working environment<span class="icon">+</span></button>
                <div class="panel">
                    <p>The work environment is truly conductive & intriguing to develop you professionally and
                        personally.
                        We have a
                        workforce of 4000 employees. Our team of renowned administrators and academicians from reputed
                        institutes
                        help you realize your best and enhance your caliber.</p>
                </div>
                <!-- Add the horizontal line here -->
                <hr class="horizontal-line">
                <button class="careers-accordion">Campus<span class="icon">+</span></button>
                <div class="panel">
                    <p>The University is located in the vicinity of the beautiful city of Moradabad and is at a
                        reasonable
                        distance
                        from Moradabad Bus stand and Railway station. The campus occupies the geographical area of 130
                        Acres.</p>
                </div>
                <!-- Add the horizontal line here -->
                <hr class="horizontal-line">
                <button class="careers-accordion">Career Opportunities<span class="icon">+</span></button>
                <div class="panel">
                    <p>If you are the one who is looking forward to broaden the career horizons, then Teerthanker
                        Mahaveer
                        University is the perfect place for you. We not only develop our student’s skills and enhance
                        them
                        through
                        extra training programs like Industry Placements, Higher studies, and classes for Government,
                        Civil,
                        and
                        Banking sectors, but also give equal growth opportunities to our staff through Internal Job
                        Posting
                        (IJP),
                        International Faculty Exchange Programs, Research opportunities and more.</p>
                </div>
                <!-- Add the horizontal line here -->
                <hr class="horizontal-line">
                <button class="careers-accordion">Residential complex for faculties<span class="icon">+</span></button>
                <div class="panel">
                    <p>Yes, TMU accommodates the faculty family keeping in mind their comfort and other amenities. Our
                        residential
                        complex for faculties is fully equipped with Wi-Fi, Gymnasium, Indoor game area, Night Canteen
                        and
                        Tuck
                        shops, 24X7 Health facilities, 24X7 Power backup, salon and more.</p>
                </div>
                <!-- Add the horizontal line here -->
                <hr class="horizontal-line">
            </div>


            <script src="./assets/js/tmimt.js"></script>
            <?php
 include 'footer.php';
?>