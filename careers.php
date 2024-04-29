<?php
 include 'head.php';
?>


<div class="slider-container" onmouseover="stopAuto()" onmouseout="startAuto()">
    <button class="arrow arrow-prev" onclick="prevSlide()">←</button>
    <div class="slider">
        <div class="slide"><img src="assets/img/banner/111.webp" alt="Image 1"></div>
    </div>
    <button class="arrow arrow-next" onclick="nextSlide()">→</button>
</div>



<div class="container hh1">
        <h2 Class="h2-line" style="text-align: center; font-weight: 800;">JOB OPENINGS</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title-job">ACADEMIC JOB OPENINGS</h5>
                    <!-- <p class="card-text">This is a primary button with a modern design.</p> -->
                    <hr class="horizontal-line">

                    <button class="careers-accordion">Does University provide transport?<span
                            class="icon">+</span></button>
                    <div class="panel">
                        <p>Yes, Teerthankerance of 100 Kms. For added safety, the buses have camera surveillance inside
                            it too.</p>
                    </div>
                    <!-- Add the horizontal line here -->
                    <hr class="horizontal-line">

                    <button class="careers-accordion">Working environment<span class="icon">+</span></button>
                    <div class="panel">
                        <p>The work environment r best and enhance your caliber.</p>
                    </div>
                    <!-- Add the horizontal line here -->
                    <hr class="horizontal-line">
                    <button class="careers-accordion">Campus<span class="icon">+</span></button>
                    <div class="panel">
                        <p>The University is lostand and Railway station. The campus occupies the geographical area of
                            130 Acres.</p>
                    </div>
                    <!-- Add the horizontal line here -->
                    <hr class="horizontal-line">
                    <button class="careers-accordion">Career Opportunities<span class="icon">+</span></button>
                    <div class="panel">
                        <p>If you are the one who Exchange Programs, Research opportunities and more.</p>
                    </div>
                    <!-- Add the horizontal line here -->
                    <hr class="horizontal-line">
                    <button class="careers-accordion">Residential complex for faculties<span
                            class="icon">+</span></button>
                    <div class="panel">
                        <p>Yes, TMU accommodates ilities, 24X7 Power backup, salon and more.</p>
                    </div>
                    <!-- Add the horizontal line here -->
                    <hr class="horizontal-line">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title-job">ACADEMIC JOB OPENINGS</h5>
                    <!-- <p class="card-text">This is a primary button with a modern design.</p> -->
                    <hr class="horizontal-line">

                    <button class="careers-accordion">Does University provide transport?<span
                            class="icon">+</span></button>
                    <div class="panel">
                        <p>Yes, Teerthankerance of 100 Kms. For added safety, the buses have camera surveillance inside
                            it too.</p>
                    </div>
                    <!-- Add the horizontal line here -->
                    <hr class="horizontal-line">

                    <button class="careers-accordion">Working environment<span class="icon">+</span></button>
                    <div class="panel">
                        <p>The work environment r best and enhance your caliber.</p>
                    </div>
                    <!-- Add the horizontal line here -->
                    <hr class="horizontal-line">
                    <button class="careers-accordion">Residential complex for faculties<span
                            class="icon">+</span></button>
                    <div class="panel">
                        <p>Yes, TMU accommodates ilities, 24X7 Power backup, salon and more.</p>
                    </div>
                    <!-- Add the horizontal line here -->
                    <hr class="horizontal-line">
                </div>
            </div>
        </div>
    </div>


    <div class="container form-container">
    <div class="row">
      <div class="col-md-7">
        <div class="image-container">
          <img src="assets/img/job.jpg" class="img-fluid" alt="Image">
        </div>
      </div>
      <div class="col-md-5">
      <h2 Class="h2-line" style="font-weight: 800;">Didn't find what you're looking for?</h2>
        <p>Please fill out the form below and upload your CV.</p>
        <form action="submit_career_form.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="full-name">Full Name</label>
            <input type="text" class="form-control" id="full-name" name="full-name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
          </div>
          <div class="form-group">
            <label for="cv">Upload CV</label>
            <input type="file" class="form-control-file" id="cv" name="cv" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

<div class="box-container">
    <div class="box">
        <h2 Class="h2-line" style="font-weight: 800;">HIGHLIGHTS</h2>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <ul class="list">
                    <li>3500+ staff.</li>
                    <li>Diversity- Staff from all the states of India.</li>
                    <li>Faculty from top Institutions of India and abroad.</li>
                    <li>Pay Scale at par with the best in the sector.</li>
                    <li>International Tie ups with 50+ foreign Universities for Faculty exchange.</li>
                    <li>Excellent Teaching, Learning and Research Environment.</li>
                    <li>Immense opportunities to learn and grow faster than your colleagues working elsewhere.</li>
                    <li>Opportunities for the staff to take up responsibilities in various roles early in their careers
                        to groom them as potential leaders at various levels.</li>
                    <li>Mediclaim Insurance/Accidental Insurance/ESI Benefits for staff</li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12">
                <ul class="list">
                    <li>Travel Grants for National and International conferences.</li>
                    <li>Incentives for publishing in indexed journals such as Scopus/WoS.</li>
                    <li>Incentives on Funded Projects.</li>
                    <li>Incentives for Patent filling.</li>
                    <li>Support for IPR filing and Commercialization.</li>
                    <li>Revenue sharing on Consultancy Projects.</li>
                    <li>Provision for Post Doc Fellowships.</li>
                    <li>Seed money for initiation of research work.</li>
                    <li>Multidisciplinary Projects Grants.</li>
                    <li>Research appreciation awards including international visits.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section id="slider" class="slider-element py-5 mt-lg-5">
    <div class="container">
        <div class="row flex-sm-row-reverse justify-content-center justify-content-lg-between col-mb-80">
            <div class="col-lg-5 col-8">
                <div class="dotted-bg">
                    <img src="demos/speaker/images/hero.jpg" alt="Image 1"
                        class="d-flex z-1 ms-auto w-100 position-relative" style="border-radius: 2rem;">
                </div>
            </div>
            <div class="col-lg-7">
                <h2 Class="h2-line" style="font-weight: 800;">Work Where You Matter</h2>
                <h3 class="color fs-5 mb-3">Join TMU</h3>
                <div class="row col-mb-30">

                    <div class="col-md-6 col-sm-12">
                        <div class="card counter-card">
                            <div class="card-body">
                                <h4 class="card-title-job" style="text-align: justify;">Commitment to Employee Development</h4>
                                <p class="card-text text-color" style="text-align: justify;">At TMU, we believe in nurturing our team's potential through comprehensive training programmes, professional development courses, and continuing education opportunities to further your career.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="card counter-card">
                            <div class="card-body">
                                <h4 class="card-title-job" style="text-align: justify;">Competitive Compensation and Benefits</h4>
                                <!-- <p class="card-text"><span data-from="1" data-to="10" data-refresh-interval="4" data-speed="1000"></span></p> -->
                                <p class="card-text text-color" style="text-align: justify;">We offer attractive salary packages that compete with the best in the academia-industry, along with exceptional benefits including health insurance, retirement plans, and generous leave policies.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="card counter-card">
                            <div class="card-body">
                                <h4 class="card-title-job" style="text-align: justify;">Work-Life Balance</h4> 
                                <p class="card-text text-color" style="text-align: justify;">We understand the importance of a balanced life. TMU supports this with flexible working hours, remote work options, and family-friendly policies to help you manage your personal and professional life effectively.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="card counter-card">
                            <div class="card-body">
                                <h4 class="card-title-job" style="text-align: justify;">Community and Social Responsibility </h4> 
                                <p class="card-text text-color" style="text-align: justify;">Engage in meaningful community service and sustainability initiatives. TMU is committed to social responsibility and offers various platforms for staff to contribute to societal improvement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card counter-card">
                            <div class="card-body">
                                <h4 class="card-title-job" style="text-align: justify;">Dynamic Networking Opportunities</h4> 
                                <p class="card-text text-color" style="text-align: justify;">Expand your professional network significantly at TMU. Regular academic conferences, industry collaborations, and alumni events provide ample opportunities to connect with influential professionals both locally and globally.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="card counter-card">
                            <div class="card-body">
                                <h4 class="card-title-job" style="text-align: justify;">Robust Upskilling Programmes</h4> 
                                <p class="card-text text-color" style="text-align: justify;">Stay ahead of the curve with TMU’s tailored upskilling initiatives. We prioritise keeping our staff at the forefront of their fields with access to the latest tools, technologies, and industry practices through workshops and seminars.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mb-5 mt-5">
    <h2 Class="h2-line" style="font-weight: 800;">FAQ</h2>
    <hr class="horizontal-line">

    <button class="careers-accordion">Does University provide transport?<span class="icon">+</span></button>
    <div class="panel">
        <p>Yes, Teerthanker Mahaveer University offers pick and drop facility to students and staff coming from within
            the radial distance of 100 Kms. For added safety, the buses have camera surveillance inside it too.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion">Working environment<span class="icon">+</span></button>
    <div class="panel">
        <p>The work environment is truly conductive & intriguing to develop you professionally and personally. We have a
            workforce of 4000 employees. Our team of renowned administrators and academicians from reputed institutes
            help you realize your best and enhance your caliber.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Campus<span class="icon">+</span></button>
    <div class="panel">
        <p>The University is located in the vicinity of the beautiful city of Moradabad and is at a reasonable distance
            from Moradabad Bus stand and Railway station. The campus occupies the geographical area of 130 Acres.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Career Opportunities<span class="icon">+</span></button>
    <div class="panel">
        <p>If you are the one who is looking forward to broaden the career horizons, then Teerthanker Mahaveer
            University is the perfect place for you. We not only develop our student’s skills and enhance them through
            extra training programs like Industry Placements, Higher studies, and classes for Government, Civil, and
            Banking sectors, but also give equal growth opportunities to our staff through Internal Job Posting (IJP),
            International Faculty Exchange Programs, Research opportunities and more.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Residential complex for faculties<span class="icon">+</span></button>
    <div class="panel">
        <p>Yes, TMU accommodates the faculty family keeping in mind their comfort and other amenities. Our residential
            complex for faculties is fully equipped with Wi-Fi, Gymnasium, Indoor game area, Night Canteen and Tuck
            shops, 24X7 Health facilities, 24X7 Power backup, salon and more.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
</div>

<script>
let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;
let autoSlideInterval;

function showSlide(index) {
    if (index < 0) {
        index = totalSlides - 1;
    } else if (index >= totalSlides) {
        index = 0;
    }
    const offset = -index * 100;
    document.querySelector('.slider').style.transform = `translateX(${offset}%)`;
    currentIndex = index;
}

function nextSlide() {
    showSlide(currentIndex + 1);
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

function startAuto() {
    autoSlideInterval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
}

function stopAuto() {
    clearInterval(autoSlideInterval);
}

startAuto();


//   career accordian
var acc = document.getElementsByClassName("careers-accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
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


// job container toggle button
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('toggleBtn');
    const box = document.getElementById('box');

    toggleBtn.addEventListener('click', function() {
        if (box.style.display === '' || box.style.display === 'none') {
            box.style.display = 'block';
        } else {
            box.style.display = 'none';
        }
    });
});
</script>

<?php
 include 'footer.php';
?>