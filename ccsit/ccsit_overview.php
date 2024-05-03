<?php
include 'head.php';
?>

<link rel="stylesheet" href="ccsit_style.css">

<?php
 include 'sidebar/ccsit_sidebar.php';
?>

<div class="col-12 col-md-9 mt-3 mt-sm-0 pt-5 ">
    <h2 class=" text-center d-block d-md-none"
        style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to
        College<span style="color:#ff7a00;"> of Computing Sciences & IT</span></h2>
    <h2 class=" text-center d-none d-md-block"
        style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Welcome to
        College<span style="color:#ff7a00;"> of Computing Sciences & IT</span></h2>

    <div class="container">

        <div class="row">
            <img src="https://www.tmu.ac.in/img/ccsit/ccit_about.jpg" alt="">
        </div>

        <div class="row">
            <!-- <p id="inform">The College of Computing Sciences & IT came into existence in the year 2014 (formerly known
                as Department of Computer Applications, established in the year 2001).</p> -->
                <p class="text-center mt-2 mb-2" style="color:#ff7900; font-size:1.4vmax"><strong>The College of Computing Sciences & IT came into existence in the year 2014 (formerly known
                as Department of Computer Applications, established in the year 2001).</strong></p>

            <div class="col-md-7">

                <p>The college was established by the university with the aim of providing relevant, essential and
                    upgraded education to the young aspirants in the field of computer science and engineering. The
                    college is geared up to meet the continuously increasing demand of skilled manpower, in the domain
                    of Computer Science and Engineering, because of the rapid technological advancements around the
                    globe and major initiatives like 'Digital India' taken by the Government of India.</p>
                <p>The College of Computing Sciences and Information Technology (CCSIT) is the center for all Computer
                    Science related programmes run by the university as per the standard UGC and AICTE norms.</p>
                <p>The college prepares young engineers to acquire essential knowledge and technical skills that allow
                    them to conceptualize, design, develop and implement Computer Applications fulfilling the Software
                    demand of the world. The college offers wide range of academic programmes at undergraduate,
                    postgraduate and doctoral levels to cater to the needs of the corporate world.</p>
            </div>
            <div class="col-md-5">
                <div class="entry-image">
                    <img src="https://www.tmu.ac.in/img/ccsit/iic_certificate1.jpg" alt="" width="400" height="300">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="entry-image">
                    <img src="https://www.tmu.ac.in/img/ccsit/iic_certificate1.jpg" alt="" width="400" height="300">
                </div>
            </div>

            <div class="col-md-7">

                <p>The curriculum is periodically reviewed by the Board of Studies to ensure that we provide upgraded knowledge and necessary technical skills to the students. There exists a flexible credit system that enables the students to make their own choices and enhance their skills accordingly. Competent and experienced faculty, with their effective pedagogy, help students learn in a best possible environment.</p>
                <p>The participation of students in workshops, seminars, conferences and various co-curricular activities is an essential component of their learning. Industry experts, eminent academicians, scientists and researchers are regularly invited for interaction and knowledge sharing sessions for the students.</p>
            </div>
        </div>


    <div class="row mt-4 mb-4">
        <hr class="horizontal-line">
        <button class="careers-accordion">Major Strenghths <span class="icon">+</span></button>
        <div class="panel active">
            <ul class="m-ol-list py-3">
                <li> Well qualified and experienced faculty of various specializations</li>
                <li>High number of research scholars enrolled.</li>
                <li>World class infrastructure to provide all necessities to the students and the faculty that includes
                    spacious lecture halls, lecture theater, computer labs and seminar hall equipped with all
                    ultramodern facility to impart quality education.</li>
                <li>The participation of students is encouraged and ensured in various academic events that include
                    conferences, seminars, and workshops each academic year for their overall holistic development.
                    Along with this various short term courses are available for students to augment their learnign.
                </li>
                <li>Well equipped library with rich collection of international and national Journals, Magazines,
                    Newspapers and various educational CDs/VCDs.</li>
                <li>The use of e-Content resources for teaching and learning. The concept of network based Class Share
                    has been implemented for students easy access to e-content provided by faculty members.</li>
                <li>Participation of students in Group Discussions by the members for Communication Wing of college to
                    make them ready to face recruitment process of companies.</li>
                <li>Faculty Development Programme, Guest Lectures and Invited Talks for faculty members with reference
                    to new challenges, issues and practices are organized.</li>
                <li>Teaching is done through case study method, simulation and dramatics.</li>
                <li>Various academic activities for faculty members and students are organized in collaboration with
                    IBM, GOOGLE and i-Nurture.</li>
            </ul>

        </div>
        <hr class="horizontal-line">
    </div>
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